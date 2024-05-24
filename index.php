<?php
session_start();
error_reporting(0);
$pag = $_GET['p'];

include "heads/header.php";
if(isset($pag)){
switch($pag){

    case "home";
    include "pages/home.php";
    break;
}
}else{

    echo "not fount";
}
include "heads/footer.php";
?>