<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';

if (!isset($_POST["email"])) {
    $data = $_GET["data"];
    $smarty = new Smarty();
    $smarty->assign('title', 'Planilha de Gastos Mensais');
    $smarty->assign('data', $data);
    $smarty->display('gera_email.tpl');
} else {
    $email = $_POST["email"];
    $message = $_POST['message'];
    $data = $_GET["data"];

    if (strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0) {
        $smarty = new Smarty();
        $smarty->assign('title', 'Planilha de Gastos Mensais');
        $smarty->assign('data', $data);
        $smarty->assign("textError", "O e-mail: {$email} é invalido!");
        $smarty->display('gera_email.tpl');
    } else {
        $data = $_POST["data"];
        $meses = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");

        $aux = explode("-", $data);
        $mes = $aux[0];
        $ano = $aux[1];
        $mes = array_search($mes, $meses) + 1;
        $data_buscar = "$ano-$mes-01";
        $descricoes = array();
        $valores = array();
        // --- defini��o dos dados ---
        $res = mysql_query("select * from movimentacao where id_usuario={$_SESSION['usuario']['id_usuario']} and dt_movimentacao='$data_buscar' and (movimentacao_tipo='DF' or movimentacao_tipo='DV') order by des_movimentacao") or die(mysql_error());

        while ($value = mysql_fetch_object($res)) {
            $descricoes[] = $value->des_movimentacao;
            $valores[] = $res->custo;
        }

        // --- calculo do total ---
        $total = 0;
        $num_linhas = sizeof($descricoes);
        for ($i = 0; $i < sizeof($descricoes); $i++)
            $total += $valores[$i];

        // --- monta a mensagem e manda o e-mail ---
        $msg = "Lista de despesas - $data\n\n";
        for ($i = 0; $i < sizeof($descricoes); $i++) {
            $descricao = $descricoes[$i];
            $valor = $valores[$i];
            $msg .= "$descricao - R$$valor\n";
        }

        $msg .= "\nTotal de despesas: R\$$total";
        $smarty = new Smarty();
        $smarty->assign('title', 'Planilha de Gastos Mensais');
        $smarty->assign('data', $data);
        if (mail($email, "Despesas de $data", $msg, "From:erick.maeda26@gmail.com", "-r erick.maeda26@gmail.com")) {
            $smarty->assign("textError", "As despesas de $data foram enviadas para o e-mail especificado.");
        } else {
            $smarty->assign("textError", "Erro ao enviar o email!");
        }
        $smarty->display('gera_email.tpl');
    }
}
?>
