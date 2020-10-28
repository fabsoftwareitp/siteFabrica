<?php
//Read
function pegarTodosPosts() {
    $cnx = conn();
    $sql = "SELECT * FROM posts";
    $resultado = $cnx->query($sql, PDO::FETCH_ASSOC);
    foreach($resultado as $col){
        $posts[] = $col;
    }
    return $posts;
}

function pegarUltimosPosts() {
    $cnx = conn();
    $sql = "SELECT * FROM posts ORDER BY dataCriacao DESC LIMIT 2";
    $resultado = $cnx->query($sql, PDO::FETCH_ASSOC);
    foreach($resultado as $col){
        $posts[] = $col;
    }
    return $posts;
}

function pegarPostPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM posts WHERE idPosts = '$id'";
    $resultado = $cnx->query($sql);
    foreach($resultado as $col){
        $posts = $col;
    }
    return $posts;
}


//Create
function adicionarPost($titulo, $imagem, $descricao, $dataCriacao) {
    $cnx = conn();
    $sql = "INSERT INTO posts(titulo, imagem, descricao, dataCriacao) 
            VALUES ('$titulo', '$imagem', '$descricao', '$dataCriacao')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'projeto cadastrado com sucesso!';
}

//delete
function deletarPost($id) {
    $cnx = conn();
    $sql = "DELETE FROM posts WHERE idPosts = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
    return 'projeto deletado com sucesso!';
            
}

