<?php
session_start();

if(!isset($_SESSION["idUsuario"]) || !isset($_SESSION["usuario"])){

    header('Location: ../'); 
}else{

    $idUsuario = $_SESSION["idUsuario"]; 
    $username   = $_SESSION["usuario"];
    $perm	   = $_SESSION["perm"];
    $foto      = $_SESSION["foto"];
    $userAgent = $_SERVER["HTTP_USER_AGENT"];
    $userIP = $_SERVER["REMOTE_ADDR"];

    if($perm != "admin"){
        header('Location: index.php');
    }

}

?>
