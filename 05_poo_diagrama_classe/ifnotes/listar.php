<?php
    require_once "modelo.php";
    require_once("lib/raelgc/view/Template.php");
    use raelgc\view\Template;
    // echo "<pre>";
    //     print_r($vetUsuario[0]->getEmail());
    // echo "</pre>";
    $vetUsuario = Usuario::listar();
    $tpl = new Template("listar.html");
    foreach($vetUsuario as $usuario) {
        $tpl->nome = $usuario->getNome();
        $tpl->email = $usuario->getEmail();
        $tpl->id = $usuario->getId();
        $tpl->block("BLOCK_USUARIO");
    }
    $tpl->show();
?>