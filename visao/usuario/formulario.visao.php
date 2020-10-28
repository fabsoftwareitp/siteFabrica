<form action="" method="POST" enctype="multipart/form-data">
    nome: <input type="text" name="nome" value="<?=@$membro['nome']?>"> <br><br>
    email: <input type="text" name="email" value="<?=@$membro['email']?>"><br><br>
    senha: <input type="password" name="senha" value="<?=@$membro['senha']?>"><br><br>
    descrição: <textarea name="descricao"><?=@$membro['descricao']?></textarea><br><br>
    status Membro: <input type="text" name="statusMembro" value="<?=@$membro['statusMembro']?>"><br><br>
    Foto de perfil: <input type="file" id="exampleInputFile" name="fotoPerfil" value="<?=@$membro['fotoPerfil']?>"><br><br>
    <button type="submit">Enviar</button>
</form>