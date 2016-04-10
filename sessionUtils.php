<?php

session_start();

function validSession() {
    if (isset($_SESSION['usuario'])) {
        return TRUE;
    } else {
        header("Location: login.php");
        return FALSE;
    }
}

function saveSession($email, $id_usuario) {
    $_SESSION['usuario']['email'] = $email;
    $_SESSION['usuario']['id_usuario'] = $id_usuario;
}

function clearSession() {
    unset($_SESSION['usuario']);
}
