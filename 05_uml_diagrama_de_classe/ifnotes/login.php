<?php
    session_start();
    require_once "lib/raelgc/view/Template.php";
    use raelgc\view\Template;
    require "modelo.php";
    $usuario = new Usuario();
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha(md5($_POST['senha']));
    if (!$usuario->login()) {
        echo "Deu xabum!";
        die();
    } else {
        $usuario->obter($_POST['email']);
        $_SESSION['usuario'] = $usuario;
        $vetAnotacao = $usuario->listarMinhasAnotacoes();
        $tpl        = new Template("anotacoes.html");
        foreach ($vetAnotacao as $anotacao) {
            $tpl->titulo  = $anotacao->getTitulo();
            $tpl->descricao = $anotacao->getDescricao();
            $tpl->id    = $anotacao->getId();
            $tpl->block("BLOCK_ANOTACAO");
        }
        if ($usuario->getEhAdmin()) {
            $tpl->eh_admin = $usuario->getEhAdmin();
            $tpl->block("BLOCK_EH_ADMIN");
        }
        $tpl->show();
}
