<?php

require_once "modelo/postsModelo.php";
require_once "servico/uploadServico.php";

/** user, admin */
function index() {
    $dados["posts"] = pegarTodosPosts();
    exibir("posts/listar", $dados);
}

/** user, admin */
function adicionar() {
    if (ehPost()) {
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $dataCriacao = $_POST["dataCriacao"];
        $imagem = $_FILES["imagem"];
        $diretorio_da_imagem = uploadImagem($imagem);
        alert(adicionarPost($titulo, $diretorio_da_imagem, $descricao, $dataCriacao));
        redirecionar("posts");
    } else {
        exibir("posts/formulario");
    }
}

/** user, admin */
function deletar($id) {
    alert(deletarPost($id));
    redirecionar("posts");
}

/** user, admin */
function visualizar($id) {
    $dados["posts"] = pegarPostPorId($id);
    exibir("posts/visualizar", $dados);
}
