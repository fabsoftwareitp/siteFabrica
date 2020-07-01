<?php
//Read
function pegarTodosprojetos() {
    $cnx = conn();
    $sql = "SELECT * FROM projetos";
    $resultado = $cnx->query($sql);
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
function adicionarprojeto($nome, $link, $descricao, $logo, $ano) {
    //dd($logo);
    $cnx = conn();
    $sql = "INSERT INTO projetos(nome, link, descricao, logo, ano) 
            VALUES ('$nome', '$link', '$descricao', '$logo', '$ano')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'projeto cadastrado com sucesso!';
}

//Update
function editarprojeto($id, $nome, $link, $descricao, $logo, $ano) {
    $cnx = conn();
    $sql = "UPDATE projetos SET nome = '$nome', link = '$link', 'descricao' = '$descricao', 'logo' = '$logo', 'ano' = '$ano' WHERE idProjeto = $id";
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

