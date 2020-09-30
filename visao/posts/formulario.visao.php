<form action="" method="POST" enctype="multipart/form-data">
    imagem: <input type="file" id="exampleInputFile" name="imagem" value="<?=@$posts['imagem']?>"><br><br>
    titulo: <input type="text" name="titulo" value="<?=@$posts['titulo']?>"><br><br>
    descrição: <textarea name="descricao"><?=@$posts['descricao']?></textarea><br><br>
    dataCriacao: <input type="date" name="dataCriacao" value="<?=@$posts['dataCriacao']?>"><br><br>
    <button type="submit">Enviar</button>
</form>