<?php

    require_once "modelo.php";

    $usuario = new Usuario($_POST['nome'],$_POST['email'], md5($_POST['senha']));
    $usuario->cadastrar();

?>