<?php
session_start();
error_reporting(0);
require_once("settings/setting_general.php");
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
}
include "heads/footer.php";
?>