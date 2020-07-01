<form action="" method="POST" enctype="multipart/form-data">
    nome: <input type="text" name="nome" value="<?=@$projeto['nome']?>"> <br><br>
    link: <input type="text" name="link" value="<?=@$projeto['link']?>"><br><br>
    descrição: <textarea name="descricao"><?=@$projeto['descricao']?></textarea><br><br>
    ano de atuação: <input type="text" name="ano" value="<?=@$projeto['ano']?>"><br><br>
    logo: <input type="file" id="exampleInputFile" name="logo" value="<?=@$projeto['logo']?>"><br><br>
    <button type="submit">Enviar</button>
</form>