<h2>Listar imagens todos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>IMAGEM</th>
            <th>ANO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($imagens as $imagem): ?>
    <tr>
        <td><?=$imagem['idImagem']?></td>
        <td><img src="<?=$imagem['imagem']?>" alt=""></td>
        <td><?=$imagem['ano']?></td>
        <td><a href="./" class="btn btn-secondary">view</a></td>
        <td><a href="./galeria/deletar/<?=$imagem['idImagem']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./galeria/adicionar" class="btn btn-primary">Adicionar nova imagem</a>

