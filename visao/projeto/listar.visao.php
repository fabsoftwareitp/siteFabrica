<h2>Listar projetos todos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>LINK</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <th>SELECIONAR MEMBROS</th>
        </tr>
    </thead>
    <?php foreach ($projetos as $projeto): ?>
    <tr>
        <td><?=$projeto['idProjeto']?></td>
        <td><?=$projeto['nome']?></td>
        <td><a href="<?=$projeto['link']?>"><?=$projeto['link']?></a></td>
        <td><a href="./projeto/visualizar/<?=$projeto['idProjeto']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./projeto/editar/<?=$projeto['idProjeto']?>" class="btn btn-info">edit</a></td>
        <td><a href="./projeto/deletar/<?=$projeto['idProjeto']?>" class="btn btn-danger">del</a></td>
        <td><a href="./membrosDosProjetos/adicionar/<?=$projeto['idProjeto']?>" class="btn btn-danger">selecionar membros</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./projeto/adicionar" class="btn btn-primary">Adicionar novo projeto</a>

