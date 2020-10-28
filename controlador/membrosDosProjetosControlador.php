<?php

require_once "modelo/membrosDosProjetosModelo.php";
require_once "modelo/projetoModelo.php";
require_once "modelo/usuarioModelo.php";
require_once "servico/uploadServico.php";

/** user, admin */
function index() {
    $dados["membrosDosProjetos"] = pegarTodosMembrosDosProjetos();
    exibir("./", $dados);
}

/** user, admin */
function adicionar($idProjeto) {
    if (ehPost()) {
        $idProjeto = $_POST["idProjeto"];
        $membros = $_POST["membros"];
        foreach($membros as $idMembro):
        $condicao = checarMembrosDoProjeto($idMembro, $idProjeto);
        if(count($condicao) <> 0){
            alert(adicionarMembrosDosProjetos($idMembro, $idProjeto)); 
        }
        endforeach;
        $dados["projetos"] = pegarTodosprojetos();
        exibir("projeto/listar",$dados);
    } else {
        $dados["projeto"] = pegarprojetoPorId($idProjeto);
        $dados["membros"] = pegarTodosUsuarios();
        $dados["membrosDosProjetos"] = pegarMembrosDoProjeto($idProjeto);
        exibir("membrosDosProjetos/formulario", $dados);
    }
}

/** user, admin */
function deletar($id) {
    alert(deletarMembrosDosProjetos($id));
    redirecionar("membrosDosProjetos/index");
}

/** user, admin */
function editar($idmembrosDosProjetos) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $link = $_POST["link"];
        $descricao = $_POST["descricao"];
        $logo = $_POST["logo"];
        $dataInicio = $_POST["dataInicio"];
        alert(editarMembrosDosProjetos($idmembrosDosProjetos, $nome, $link, $descricao, $logo, $dataInicio));
        redirecionar("membrosDosProjetos/index");
    } else {
        exibir("membrosDosProjetos/formulario");
    }
}

