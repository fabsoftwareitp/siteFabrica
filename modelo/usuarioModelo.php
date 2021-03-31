<?php
//Read
function pegarTodosUsuarios() {
    $cnx = conn();
    $sql = "SELECT * FROM membros";
    $resultado = $cnx->query($sql, PDO::FETCH_ASSOC);
    $usuarios = array();
    foreach($resultado as $col){
        $usuarios[] = $col;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM membros WHERE idMembro = '$id'";
    $resultado = $cnx->query($sql);
    foreach($resultado as $col){
        $usuario = $col;
    }
    return $usuario;
}

function pegarUsuarioPorStatus($statusMembro) {
    $cnx = conn();
    $sql = "SELECT * FROM membros WHERE statusMembro = '$statusMembro'";
    $resultado = $cnx->query($sql, PDO::FETCH_ASSOC);
    $usuarios = array();
    foreach($resultado as $col){
        $usuarios[] = $col;
    }
    return $usuarios;    
}

function pegarUsuarioPorEmailSenha($email, $senha) {
    $cnx = conn();
    $sql = "SELECT * FROM membros WHERE email = '$email' AND senha = '$senha'";
    $resultado = $cnx->query($sql);
    //dd($resultado);
    foreach($resultado as $col){
        $usuario = $col;
    }
    return $usuario;
}

//Create
function adicionarUsuario($nome, $email, $senha, $descricao, $fotoPerfil, $statusMembro) {
    //dd($fotoPerfil);
    $cnx = conn();
    $sql = "INSERT INTO membros(nome, email, senha, descricao, fotoPerfil, statusMembro) 
            VALUES ('$nome', '$email', '$senha', '$descricao', '$fotoPerfil', '$statusMembro')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'Usuario cadastrado com sucesso!';
}

//Update
function editarUsuario($id, $nome, $email, $senha, $descricao, $fotoPerfil, $statusMembro) {
    $cnx = conn();
    $sql = "UPDATE membros SET nome = '$nome', email = '$email', 'senha' = $senha,'descricao' = '$descricao', 'fotoPerfil' = '$fotoPerfil', 'statusMembro' = '$statusMembro' WHERE idMembro = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

//delete
function deletarUsuario($id) {
    $cnx = conn();
    $sql = "DELETE FROM membros WHERE idMembro = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
        if($_SESSION["acesso"]["id"] == $id){
            redirecionar("login/logout");
        }
    return 'Usuario deletado com sucesso!';
            
}

