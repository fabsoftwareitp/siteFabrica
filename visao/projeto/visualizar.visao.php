<h2>Visão</h2>
<p>id: <?=$projeto['idProjeto']?></p>
<p>nome: <?=$projeto['nome']?></p>
<p>email: <?=$projeto['link']?></p>
<p>descricao: <?=$projeto['descricao']?></p>
<p>Data de inicio da produção: <?=$projeto['dataInicio']?></p>
<img width="320" height="205"src="<?=$projeto['logo']?>" alt="<?=$projeto['fotoPerfil']?>">
<p><strong>Membros dos projetos</strong></p>
    <table>
    <?php foreach ($pegarMembrosDoProjetos as $pegarMembrosDoProjeto): ?>
        <tr>
            <td><img width="320" height="205" src="<?=$pegarMembrosDoProjeto['fotoPerfil']?>" alt="<?=$pegarMembrosDoProjeto['fotoPerfil']?>"></td>
            <td><?=$pegarMembrosDoProjeto['nome']?></td>
            <td><?=$pegarMembrosDoProjeto['email']?></td>
            <td><?=$pegarMembrosDoProjeto['descricao']?></td>
            <td><?=$pegarMembrosDoProjeto['statusMembro']?></td>
        </tr>
        <br>
    <?php endforeach; ?>
    </table>