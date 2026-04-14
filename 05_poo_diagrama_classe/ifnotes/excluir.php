<?php
    require_once "modelo.php";

    $id = $_GET['id'];

    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->excluir();

    header("Location: listar.php");
?>