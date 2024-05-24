<?php
ini_set('display_startup_errors',-1);
ini_set('display_errors',-1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
error_reporting(-1);
session_start();
header('Cache-control: private'); // IE 6 FIX
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");

require_once("settings/setting_general.php");
require_once("functions/common.php");
$pag = $_GET['p'];
include "heads/header.php";
switch(preg_replace('/[^[:alpha:]_]/', '',$pag)){

    case "home";
    include "pages/home.php";
    break;
    case "api";
    include "pages/api.php";
    break;
    case "tokens";
    include "pages/tokens.php";
    break;
    case "nodes";
    include "pages/nodes.php";
    break;
    case "list";
    include "pages/list.php";
    break;

    default:
    include "pages/home.php";
    break;
}
include "heads/footer.php";
?>