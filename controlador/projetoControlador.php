<?php

require_once "modelo/projetoModelo.php";
require_once "servico/uploadServico.php";

/** user, admin */
function index() {
    $dados["projetos"] = pegarTodosprojetos();
    exibir("projeto/listar", $dados);
}

/** user, admin */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $link = $_POST["link"];
        $descricao = $_POST["descricao"];
        $logo = $_FILES["logo"];
        $ano = $_POST["ano"];
        $diretorio_da_imagem = uploadImagem($logo);
        alert(adicionarprojeto($nome, $link, $descricao, $diretorio_da_imagem, $ano));
        redirecionar("projeto");
    } else {
        exibir("projeto/formulario");
    }
}

/** user, admin */
function deletar($id) {
    alert(deletarprojeto($id));
    redirecionar("projeto/index");
}

/** user, admin */
function editar($idProjeto) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $link = $_POST["link"];
        $descricao = $_POST["descricao"];
        $logo = $_POST["logo"];
        $ano = $_POST["ano"];
        alert(editarprojeto($idProjeto, $nome, $link, $descricao, $logo, $ano));
        redirecionar("projeto/index");
    } else {
        $dados["projeto"] = pegarprojetoPorId($idProjeto);
        exibir("projeto/formulario", $dados);
    }
}

/** user, admin */
function visualizar($idProjeto) {
    $dados["projeto"] = pegarprojetoPorId($idProjeto);
    exibir("projeto/visualizar", $dados);
}
