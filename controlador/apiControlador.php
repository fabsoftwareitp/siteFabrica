<?php

require_once "modelo/galeriaModelo.php";
require_once "modelo/usuarioModelo.php";
require_once "modelo/projetoModelo.php";
require_once "modelo/postsModelo.php";
require_once "modelo/membrosDosProjetosModelo.php";

function json($data) {
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");
    echo json_encode($data);
}

/** anon */
function projetos() {
    $dados["projetos"] = pegarTodosprojetos();
    json($dados);
}

/** anon */
function posts() {
    $posts = pegarTodosPosts();
    foreach ($posts as $key => $post){
        $posts[$key]["imagem"] = URL_BASE.$posts[$key]["imagem"];
    }
    json($posts);
}

/** anon */
function usuarios() {
    $dados["usuarios"] = pegarTodosUsuarios();
    json($dados);
}

/** anon */
function membrosDosProjetos() {
    $dados["membrosDosProjetos"] = pegarTodosMembrosDosProjetos();
    json($dados);
}

/** anon */
function galeria() {
    $galeria = pegarTodosImagem();
    foreach ($galeria as $key => $imagem){
        $galeria[$key]["imagem"] = URL_BASE.$galeria[$key]["imagem"];
    }
    json($galeria);
}