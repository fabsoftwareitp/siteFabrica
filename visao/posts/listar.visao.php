<h2>Listar imagens todos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>IMAGEM</th>
            <th>TITULO</th>
            <th>DESCRICAO</th>
            <th>DATA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php 
    //dd($posts);
    foreach ($posts as $post): ?>
    <tr>
        <td><?=$post['idPosts']?></td>
        <td><img src="<?=$post['imagem']?>" alt=""></td>
        <td><?=$post['titulo']?></td>
        <td><?=$post['descricao']?></td>
        <td><?=$post['dataCriacao']?></td>
        <td><a href="./posts/visualizar/<?=$post['idPosts']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./posts/deletar/<?=$post['idPosts']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./posts/adicionar" class="btn btn-primary">Adicionar nova posts</a>

