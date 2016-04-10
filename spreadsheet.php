<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';

validSession();

// obtém os valores digitados
$mes = $_POST["month_start"];
$ano = $_POST["year_start"];
$mes2 = $_POST["month_final"];
$ano2 = $_POST["year_final"];

// colocar datas no formato AAAA-MM-DD para consulta
$data = "$ano-$mes-01";
$data2 = "$ano2-$mes2-01";
$sql = "SELECT * FROM movimentacao ";
$sql .= "WHERE id_usuario='{$_SESSION['usuario']['id_usuario']}' and dt_movimentacao>='$data' and dt_movimentacao<='$data2' order by dt_movimentacao,des_movimentacao";
$res = mysql_query($sql) or die(mysql_error());
$i = 1;

$receitas = array();
$despesas = array();
$colluns = array();
$receitas_dt = array();
$despesas_dt = array();

while ($value = mysql_fetch_object($res)) {
    $tipo = $value->movimentacao_tipo;
    $date = $value->dt_movimentacao;

    if ($tipo == "RF" || $tipo == 'RV') {     // receitas
        if (!in_array($date, $receitas_dt)) {
            $receitas_dt[] = $date;
        }
        $receitas[] = $value;
    } elseif ($tipo == "DF" || $tipo == "DV") {     // despesas
        if (!in_array($date, $despesas_dt)) {
            $despesas_dt[] = $date;
        }
        $despesas[] = $value;
    }
    $i = $i + 1;
}

$smarty = new Smarty();
$smarty->assign('colluns_receita', $receitas_dt);
$smarty->assign('receitasByDate', getTotalByDate($receitas_dt));


$smarty->assign('colluns_despesa', $despesas_dt);
$smarty->assign('despesasByDate', getTotalByDate($despesas_dt));


$smarty->assign('first_dt', $data);
$smarty->assign('second_dt', $data2);

$smarty->assign('despesas', $despesas);
$smarty->assign('receitas', $receitas);

$smarty->assign('receitas_total', getTotal($receitas));
$smarty->assign('despesas_total', getTotal($despesas));

$smarty->assign('title', 'Planilha de Gastos Mensais');
$smarty->display('spreadsheet.tpl');

function getTotal(Array $movimentacoes) {
    $total = 0;
    foreach ($movimentacoes as $linha) {
        $total = $linha->custo + $total;
    }
    return $total;
}

function getTotalByDate(Array $dates) {
    $valueByDate = array();
    foreach ($dates as $linha) {
        $sql = "SELECT SUM(custo) as total FROM movimentacao WHERE dt_movimentacao = '$linha'";
        $res = mysql_query($sql) or die(mysql_error());
        while ($value = mysql_fetch_object($res)) {
            $valueByDate[] = $value->total;
        }
    }
    return $valueByDate;
}
?>

