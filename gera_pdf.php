<?php

require_once './sessionUtils.php';
require_once './config.php';
require_once './fpdf181/fpdf.php';

// ********* CONFIGURA��ES DO PROGRAMA *********
// documento
$largura = 842;
$altura = 595;
$margem_vertical = 30;
$margem_horizontal = 30;
$tamanho_fonte = 14;
$tamanho_fonte_titulo = 20;

// obt�m o valor do cookie e do par�metro
$data = $_GET["data"];
$titulo = "Lista de despesas - $data";

// monta a data para busca no banco de dados
$meses = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");
$aux = explode("-", $data);
$mes = $aux[0];
$ano = $aux[1];
$mes = array_search($mes, $meses) + 1;
$data_buscar = "$ano-$mes-01";

// consulta SQL que ir� gerar o relat�rio
$consulta = "select * from movimentacao where id_usuario={$_SESSION['usuario']['id_usuario']} and dt_movimentacao='$data' and (movimentacao_tipo='DF' or movimentacao_tipo='DV') order by des_movimentacao";
$colunas_resultantes = array("descricao", "valor");

// tabela a ser gerada no PDF
$texto_colunas = array("Descrição", "Valor (R$)");
$largura_coluna = array(200, 70);

$result = mysql_query($consulta);
$total = mysql_affected_rows();

if ($total == 0) {
    echo "O relat�rio n�o foi gerado porque a consulta não retornou registros!";
    exit;
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(40, 10, 'GRAFICO DE DESPESAS DO DIA ' . date("d/m/Y", strtotime($data)));

// calculos
$altura_celula = $tamanho_fonte + 3;
$altura_titulo = $tamanho_fonte_titulo + 3;
$altura_tabela = $altura - 2 * $margem_vertical;
$linhas_por_pagina = intval(($altura_tabela - $altura_titulo) / $altura_celula) - 1; // tirar 1 devido ao cabecalho
$num_paginas = ceil($total / $linhas_por_pagina);
$linha_atual = 0;

// gera as p�ginas
for ($i = 0; $i < $num_paginas; $i++) {

    // tira o negrito da fonte
    $pdf->SetFont('Arial', 'B', 16);
    $pos_y = 50;
    $pos_x_des = 15;
    $pos_x_custo = 80;
    $pos_x_tipo = 130;
    $pdf->Text($pos_x_des, $pos_y, "DESCRICAO");
    $pdf->Text($pos_x_custo, $pos_y, "VALOR (R$)");
    $pdf->Text($pos_x_tipo, $pos_y, "TIPO");
    $pos_y = $pos_y + 20;
    $pdf->SetFont('Arial', NULL, 16);


    while ($value = mysql_fetch_object($result)) {
        $valor = "R$ " . $value->custo;
        $descricao = $value->des_movimentacao;
        $pdf->Text($pos_x_custo, $pos_y, $valor);
        $pdf->Text($pos_x_des, $pos_y, $descricao);
        $pdf->Text($pos_x_tipo, $pos_y, $value->movimentacao_tipo);

        $pos_y = $pos_y + 15;
        $total = $value->custo + $total;
    }
    $pdf->SetFont('Arial', 'B', 16);
    $pos_y = $pos_y + 30;
    $pdf->Text($pos_x_des, $pos_y, "TOTAL");
    $pdf->Text($pos_x_custo, $pos_y, "R$ " . $total);


    // encerra a p�gina
    $pdf->Output();
}
header("Content-type:application/pdf");
header("Content-Disposition:inline; filename=relatorio.pdf");
echo $buf;
?>