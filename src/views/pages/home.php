<?php $render('header') ?>

<a href="<?= $base ?>/novo">Adicionar Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['name'] ?></td>
            <td><?= $u['email'] ?></td>
            <td>
                <a href="<?= $base ?>/edit/<?= $u['id'] ?>/editar">[ editar ]</a>
                <a href="<?= $base ?>/del/<?= $u['id'] ?>/excluir" onclick="return confirm('Deseja realmente excluir o registro ?')">[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer') ?>