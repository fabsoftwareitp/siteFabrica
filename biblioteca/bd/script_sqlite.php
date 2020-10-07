<?php

$db = new Sqlite3('sqlite:data.sqlite');
if (!$db) die('Deu errado a conexao!');



if(!$db){
    echo $db->lastErrorMsg();
}
else{
    echo 'Database created!';
    $sql =<<<EOF
    
CREATE TABLE membros(
    idMembro INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    descricao VARCHAR(250) NOT NULL,
    fotoPerfil VARCHAR(100) NULL,
    statusMembro VARCHAR(100) NOT NULL,
    papel VARCHAR(100) NOT NULL DEFAULT 'user'
    );

      
CREATE TABLE projetos(
  idProjeto INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  nome VARCHAR(100) NOT NULL,
  link VARCHAR(100) NOT NULL,
  descricao VARCHAR(250) NOT NULL,
  logo VARCHAR(100) NOT NULL,
  dataInicio DATE NOT NULL
);

CREATE TABLE posts(
  idPosts INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  imagem VARCHAR(100) NOT NULL,
  titulo VARCHAR(100) NOT NULL,
  descricao VARCHAR(250) NOT NULL,
  dataCriacao DATE NOT NULL
);

CREATE TABLE membrosDosProjetos(
  idMembroProjeto INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idMembro INT NOT NULL,
  idProjeto INT NOT NULL,
  FOREIGN KEY(idMembro) REFERENCES membros(idMembro),
  FOREIGN KEY(idProjeto) REFERENCES projetos(idProjeto)
);

CREATE TABLE galeria(
  idImagem INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  imagem VARCHAR(100) NOT NULL,
  ano VARCHAR(100) NOT NULL
);

INSERT INTO membros(nome, email, senha, papel, descricao, statusMembro) 
VALUES
("admin","admin@admin.com", "123", "admin", "admin do sistema", "ativo"),
("usuario","usuario@usuario.com", "123", "user", "user padrao sistema", "desativado");
EOF;

    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    } else {
        echo "Table created successfully\n";
    }
    $db->close();
}

?>