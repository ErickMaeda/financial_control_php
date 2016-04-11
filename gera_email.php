<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';
require_once './vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

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
        $res = mysql_query("select * from movimentacao where id_usuario={$_SESSION['usuario']['id_usuario']} and dt_movimentacao='$data' and (movimentacao_tipo='DF' or movimentacao_tipo='DV') order by des_movimentacao") or die(mysql_error());

        while ($value = mysql_fetch_object($res)) {
            $descricoes[] = $value->des_movimentacao;
            $valores[] = $value->custo;
        }

        // --- calculo do total ---
        $total = 0;
        $num_linhas = sizeof($descricoes);
        for ($i = 0; $i < sizeof($descricoes); $i++)
            $total += $valores[$i];

        // --- monta a mensagem e manda o e-mail ---
        $msg = "Lista de despesas - " . date("d/m/Y", strtotime($data)) . "<br><br>";
        for ($i = 0; $i < sizeof($descricoes); $i++) {
            $descricao = $descricoes[$i];
            $valor = $valores[$i];
            $msg .= "$descricao - R$$valor<br>";
        }

        $msg .= "<br><br>Total de despesas: R\$$total";
        $smarty = new Smarty();
        $smarty->assign('title', 'Planilha de Gastos Mensais');
        $smarty->assign('data', date("d/m/Y", strtotime($data)));

        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'lopesmaedaerick@gmail.com';                 // SMTP username
        $mail->Password = 'senhateste';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('lopesmaedaerick@gmail.com', 'Erick Maeda');
        $mail->addAddress($email);     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "Despesas de " . date("d/m/Y", strtotime($data));
        $mail->Body = $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            $smarty->assign("textError", "Erro ao enviar o email! O erro ocorrido foi: " . $mail->ErrorInfo);
        } else {
            $smarty->assign("textSuccess", "As despesas do dia " . date("d/m/Y", strtotime($data)) . " foram enviadas para o e-mail especificado.");
        }
        $smarty->display('gera_email.tpl');
    }
}
?>
