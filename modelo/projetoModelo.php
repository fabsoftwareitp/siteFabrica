<?php
//Read
function pegarTodosprojetos() {
    $cnx = conn();
    $sql = "SELECT * FROM projetos";
    $resultado = $cnx->query($sql, PDO::FETCH_ASSOC);
    $projetos = array();
    foreach($resultado as $col){
        $projetos[] = $col;
    }
    return $projetos;
}

function pegarprojetoPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM projetos WHERE idProjeto = '$id'";
    $resultado = $cnx->query($sql);
    foreach($resultado as $col){
        $projeto = $col;
    }
    return $projeto;
}

//Create
function adicionarprojeto($nome, $link, $descricao, $logo, $dataInicio) {
    //dd($logo);
    $cnx = conn();
    $sql = "INSERT INTO projetos(nome, link, descricao, logo, dataInicio) 
            VALUES ('$nome', '$link', '$descricao', '$logo', '$dataInicio')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'projeto cadastrado com sucesso!';
}

//Update
function editarprojeto($id, $nome, $link, $descricao, $logo, $dataInicio) {
    $cnx = conn();
    $sql = "UPDATE projetos SET nome = '$nome', link = '$link', 'descricao' = '$descricao', 'logo' = '$logo', 'dataInicio' = '$dataInicio' WHERE idProjeto = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

//delete
function deletarprojeto($id) {
    $cnx = conn();
    $sql = "DELETE FROM projetos WHERE idProjeto = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
    return 'projeto deletado com sucesso!';
            
}

