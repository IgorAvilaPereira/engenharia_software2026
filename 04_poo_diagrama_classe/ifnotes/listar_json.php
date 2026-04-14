<?php
    require_once "modelo.php";
    $vetUsuario = Usuario::listar();
    print_r($vetUsuario[1]->toJson());
?>