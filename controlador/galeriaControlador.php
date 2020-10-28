<?php

require_once "modelo/galeriaModelo.php";
require_once "servico/uploadServico.php";

/** user, admin */
function index() {
    $dados["imagens"] = pegarTodosImagem();
    exibir("galeria/listar", $dados);
}

/** user, admin */
function adicionar() {
    if (ehPost()) {
        $imagem = $_FILES["imagem"];
        $ano = $_POST["ano"];
        $diretorio_da_imagem = uploadImagem($imagem);
        alert(adicionarImagem($diretorio_da_imagem, $ano));
        redirecionar("galeria");
    } else {
        exibir("galeria/formulario");
    }
}

/** user, admin */
function deletar($id) {
    alert(deletarImagem($id));
    redirecionar("galeria/index");
}

/** user, admin */
function visualizar($idgaleria) {
    $dados["galeria"] = pegarImagemPorId($idgaleria);
    exibir("galeria/visualizar", $dados);
}
