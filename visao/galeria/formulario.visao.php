<form action="" method="POST" enctype="multipart/form-data">
    imagem: <input type="file" id="exampleInputFile" name="imagem" value="<?=@$projeto['imagem']?>"><br><br>
    ano: <input type="text" name="ano" value="<?=@$projeto['ano']?>"><br><br>
    <button type="submit">Enviar</button>
</form>