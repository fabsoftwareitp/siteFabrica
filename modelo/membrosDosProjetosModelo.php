<?php

require_once "modelo/usuarioModelo.php";

//Read
function pegarTodosMembrosDosProjetos() {
    $cnx = conn();
    $sql = "SELECT * FROM membrosDosProjetos";
    $resultado = $cnx->query($sql);
    $projetos = array();
    foreach($resultado as $col){
        $projetos[] = $col;
    }
    return $projetos;
}

function checarMembrosDoProjeto($idMembro, $idProjeto) {
    $cnx = conn();
    $sql = "SELECT * FROM membrosDosProjetos WHERE idProjeto = '$idProjeto' AND idMembro = '$idMembro' ";
    $resultado = $cnx->query($sql);
    $MembrosDosProjetos = array();
    foreach($resultado as $col){
        $MembrosDosProjetos[] = $col;
    }
    return $MembrosDosProjetos;
}

function pegarMembrosDoProjeto($idProjeto) {
    $cnx = conn();
    $sql = "SELECT * FROM membros INNER JOIN membrosDosProjetos ON membros.idMembro = membrosDosProjetos.idMembro WHERE membrosDosProjetos.idProjeto = '$idProjeto' ";
    $resultado = $cnx->query($sql);
    $MembrosDosProjetos = array();
    foreach($resultado as $col){
        $MembrosDosProjetos[] = $col;
    }
    return $MembrosDosProjetos;
}

//Create
function adicionarMembrosDosProjetos($idMembro, $idProjeto) {
    //dd($logo);
    $cnx = conn();
    $sql = "INSERT INTO membrosDosProjetos(idMembro, idProjeto) 
            VALUES ('$idMembro', '$idProjeto')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'projeto cadastrado com sucesso!';
}

//Update
function editarMembrosDosProjetos($idMembro, $idProjeto) {
    $cnx = conn();
    $sql = "UPDATE projetos SET idMembro = '$idMembro', idProjeto = '$idProjeto'";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

//delete
function deletarMembrosDosProjetos($idUsuarioProjeto) {
    $cnx = conn();
    $sql = "DELETE FROM projetos WHERE idUsuarioProjeto = $idUsuarioProjeto";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
    return 'projeto deletado com sucesso!';
            
}

