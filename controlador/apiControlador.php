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
    $projetos = pegarTodosprojetos();

    foreach ($projetos as $key => $post){
        $projetos[$key]["logo"] = URL_BASE.$projetos[$key]["logo"];
    }
    $dados["projetos"] = $projetos;
    json($dados);
}

/** anon */
function posts() {
    $posts = pegarTodosPosts();
    foreach ($posts as $key => $post){
        $posts[$key]["imagem"] = URL_BASE.$posts[$key]["imagem"];
    }
    $dados["posts"] = $posts;
    json($dados);
}

/** anon */
function ultimosPosts() {
    $posts = pegarUltimosPosts();
    foreach ($posts as $key => $post){
        $posts[$key]["imagem"] = URL_BASE.$posts[$key]["imagem"];
    }
    $dados["posts"] = $posts;
    json($dados);
}

/** anon */
function usuarios() {
    $usuarios = pegarTodosUsuarios();
    foreach ($usuarios as $key => $post){
        $usuarios[$key]["fotoPerfil"] = URL_BASE.$usuarios[$key]["fotoPerfil"];
    }
    $dados["usuarios"] = $usuarios;
    json($dados);
}

/** anon */
function usuariosPorStatus($statusMembro) {
    $usuarios = pegarUsuarioPorStatus($statusMembro);
    foreach ($usuarios as $key => $post){
        $usuarios[$key]["fotoPerfil"] = URL_BASE.$usuarios[$key]["fotoPerfil"];
    }
    $dados["usuarios"] = $usuarios;
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
    $dados["galeria"] = $galeria;
    json($dados);
}