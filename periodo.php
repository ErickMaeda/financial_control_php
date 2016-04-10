<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';

validSession();

$month[1] = 'JANEIRO';
$month[2] = 'FEVEREIRO';
$month[3] = 'MARCO';
$month[4] = 'ABRIL';
$month[5] = 'MAIO';
$month[6] = 'JUNHO';
$month[7] = 'JULHO';
$month[8] = 'AGOSTO';
$month[9] = 'SETEMBRO';
$month[10] = 'OUTUBRO';
$month[11] = 'NOVEMBRO';
$month[12] = 'DEZEMBRO';
$monthValue[1] = '01';
$monthValue[2] = '02';
$monthValue[3] = '03';
$monthValue[4] = '04';
$monthValue[5] = '05';
$monthValue[6] = '06';
$monthValue[7] = '07';
$monthValue[8] = '08';
$monthValue[9] = '09';
$monthValue[10] = '10';
$monthValue[11] = '11';
$monthValue[12] = '12';


$smarty = new Smarty();
$smarty->assign('title', 'Planilha de Gastos Mensais');
$smarty->assign('subtitle', 'Escolha o período que deseja visualizar');
$smarty->assign('month', $month);
$smarty->assign('monthValue', $monthValue);
$smarty->display('periodo.tpl');
