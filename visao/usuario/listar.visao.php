<h2>Listar usuários todos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($membros as $membro): ?>
    <tr>
        <td><?=$membro['idMembro']?></td>
        <td><?=$membro['nome']?></td>
        <td><?=$membro['email']?></td>
        <td><a href="./usuario/visualizar/<?=$membro['idMembro']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./usuario/editar/<?=$membro['idMembro']?>" class="btn btn-info">edit</a></td>
        <td><a href="./usuario/deletar/<?=$membro['idMembro']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo membro</a>

