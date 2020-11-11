<?php
//Read
function pegarTodosImagem() {
    $cnx = conn();
    $sql = "SELECT * FROM galeria";
    $resultado = $cnx->query($sql, PDO::FETCH_ASSOC);
    $galeria = array();
    foreach($resultado as $col){
        $galeria[] = $col;
    }
    return $galeria;
}

function pegarImagemPorAno($ano) {
    $cnx = conn();
    $sql = "SELECT * FROM galeria WHERE ano = '$ano'";
    $resultado = $cnx->query($sql);
    foreach($resultado as $col){
        $projeto = $col;
    }
    return $projeto;
}

function pegarImagemPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM galeria WHERE ano = '$id'";
    $resultado = $cnx->query($sql);
    foreach($resultado as $col){
        $projeto = $col;
    }
    return $projeto;
}


//Create
function adicionarImagem($imagem, $ano) {
    //dd($logo);
    $cnx = conn();
    $sql = "INSERT INTO galeria(imagem, ano) 
            VALUES ('$imagem', '$ano')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'projeto cadastrado com sucesso!';
}

//delete
function deletarImagem($id) {
    $cnx = conn();
    $sql = "DELETE FROM galeria WHERE idImagem = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
    return 'projeto deletado com sucesso!';
            
}

