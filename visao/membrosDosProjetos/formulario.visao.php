<h2>Visão</h2>
<p>id: <?=$projeto['idProjeto']?></p>
<p>nome: <?=$projeto['nome']?></p>
<p>email: <?=$projeto['link']?></p>
<p>descricao: <?=$projeto['descricao']?></p>
<p>Data de inicio da produção: <?=$projeto['dataInicio']?></p>
<img width="320" height="205" src="<?=$projeto['logo']?>" alt="<?=$projeto['fotoPerfil']?>">

<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="idProjeto" value="<?=$projeto['idProjeto']?>">
    Selecione os membros pertencentes ao Projeto:
    <table>
    <?php foreach ($membros as $membro): ?>
        <tr>
            <td> 
            <?php 
            //dd($membrosDosProjetos);         
            foreach ($membrosDosProjetos as $membrosDosProjeto): 
                if ($membrosDosProjeto['idMembro'] != $membro['idMembro']) {
                    echo "<input type='checkbox' name='membros[]' value='".$membro['idMembro']."'>";
                }
            endforeach;
            ?> 
            </td>
            <td><img width="320" height="205" src="<?=$membro['fotoPerfil']?>" alt="<?=$membro['fotoPerfil']?>"></td>
            <td><?=$membro['nome']?></td>
            <td><?=$membro['statusMembro']?></td>
        </tr>
        <br>
    <?php endforeach; ?>
    </table>
    <button type="submit">Enviar</button>
</form>