<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';
require_once './config.php';
$smarty = new Smarty();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'signin') {
        signin();
    } else if ($action == 'signup') {
        signup();
    }
} else {
    clearSession();
    $smarty->display("./login.tpl");
}

function signin() {
    $smarty = new Smarty();

    $email = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];

    global $conn;

    $result = mysql_query("SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'");
    $row = mysql_fetch_array($result);
    if (mysql_affected_rows() > 0) {
        saveSession($email, $row['id_usuario']);
        header('Location: home.php');
    } else {
        $error['signin'] = 'Usuario e/ou Senha incorreto(s)';
        $smarty->assign('error', $error);
        $smarty->display("./login.tpl");
    }
}

function signup() {
    $smarty = new Smarty();

    $email = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];
    $senha_confirmar = $_POST['senha_usuario_confirmar'];
    $nome = isset($_POST['nome_usuario']) ? $_POST['nome_usuario'] : null;
    $sobrenome = isset($_POST['sobrenome_usuario']) ? $_POST['sobrenome_usuario'] : null;
    $telefone = isset($_POST['telefone_usuario']) ? $_POST['telefone_usuario'] : null;

    if ($senha !== $senha_confirmar) {
        $error['signup'] = 'Senhas não conferem';
        $smarty->assign('error', $error);
        $smarty->display("./login.tpl");
        return;
    }
    global $conn;

    mysql_query("SELECT * FROM usuario WHERE email_usuario = '$email'");
    if (mysql_affected_rows() > 0) {
        $error['signup'] = 'Email já Cadastrado';
        $smarty->assign('error', $error);
        $smarty->display("./login.tpl");
    } else {
        mysql_query("INSERT INTO usuario(email_usuario,nome_usuario,sobrenome_usuario,senha_usuario,telefone_usuario) VALUES ('$email','$nome','$sobrenome','$senha','$telefone')") or die(mysql_error());
        if (mysql_affected_rows() > 0) {
            saveSession($email, mysql_insert_id());
            header('Location: home.php');
        } else {
            $error['signup'] = 'Ocorreu um erro durante o registro';
            $smarty->assign('error', $error);
            $smarty->display("./login.tpl");
        }
    }
}

?>
