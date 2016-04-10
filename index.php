<?php

require_once './vendor/smarty/smarty/libs/Smarty.class.php';
require_once './sessionUtils.php';

if (validSession()) {
    header("Location: home.php");
}
