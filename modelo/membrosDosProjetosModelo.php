<?php

require_once "modelo/usuarioModelo.php";

//Read
function pegarTodosprojetos() {
    $cnx = conn();
    $sql = "SELECT * FROM membrosDosProjetos";
    $resultado = $cnx->query($sql);
    $projetos = array();
    foreach($resultado as $col){
        $projetos[] = $col;
    }
    return $projetos;
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
function editarprojeto($idMembro, $idProjeto) {
    $cnx = conn();
    $sql = "UPDATE projetos SET idMembro = '$idMembro', idProjeto = '$idProjeto'";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

//delete
function deletarprojeto($idUsuarioProjeto) {
    $cnx = conn();
    $sql = "DELETE FROM projetos WHERE idUsuarioProjeto = $idUsuarioProjeto";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
    return 'projeto deletado com sucesso!';
            
}

