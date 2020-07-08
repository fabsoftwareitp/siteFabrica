<form action="" method="POST" enctype="multipart/form-data">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>"> <br><br>
    email: <input type="text" name="email" value="<?=@$usuario['email']?>"><br><br>
    senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>"><br><br>
    descrição: <textarea name="descricao"><?=@$usuario['descricao']?></textarea><br><br>
    status Membro: <input type="text" name="statusMembro" value="<?=@$usuario['statusMembro']?>"><br><br>
    Foto de perfil: <input type="file" id="exampleInputFile" name="fotoPerfil" value="<?=@$usuario['fotoPerfil']?>"><br><br>
    <button type="submit">Enviar</button>
</form>