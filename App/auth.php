<?php
session_start();

if(!isset($_SESSION["idUsuario"]) || !isset($_SESSION["usuario"])){

    header('Location: ../'); //Redirecionar para a página de login
}else{
    $idUsuario = $_SESSION["idUsuario"]; 
    $username   = $_SESSION["usuario"];
    $perm	   = $_SESSION["perm"];
    $foto      = $_SESSION["foto"];

    if($perm != "admin"){
        header('Location: index.php');
    }

}
?>
