<?php

require_once "modelo/usuarioModelo.php";
require_once "servico/uploadServico.php";

/** user, admin */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** user, admin */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $descricao = $_POST["descricao"];
        $fotoPerfil = $_FILES["fotoPerfil"];
        $ano = $_POST["ano"];
        $diretorio_da_imagem = uploadImagem($fotoPerfil);
        alert(adicionarUsuario($nome, $email, $senha, $descricao, $diretorio_da_imagem, $ano));
        redirecionar("usuario");
    } else {
        exibir("usuario/formulario");
    }
}

/** user, admin */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

/** user, admin */
function editar($idMembro) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $descricao = $_POST["descricao"];
        $fotoPerfil = $_POST["fotoPerfil"];
        $ano = $_POST["ano"];
        alert(editarUsuario($idMembro, $nome, $email, $senha, $descricao, $fotoPerfil, $ano));
        redirecionar("usuario/index");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($idMembro);
        exibir("usuario/formulario", $dados);
    }
}

/** user, admin */
function visualizar($idMembro) {
    $dados["usuario"] = pegarUsuarioPorId($idMembro);
    exibir("usuario/visualizar", $dados);
}
