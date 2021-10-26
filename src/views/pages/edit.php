<?php $render('header') ?>

<a href="<?= $base ?>">Voltar para Home</a>

<h3>Atualizar Usuário</h3>

<form action="<?= $base ?>/edit/<?= $usuario['id'] ?>/editar" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" value="<?= $usuario['name'] ?>"><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" name="email" value="<?= $usuario['email'] ?>"><br><br>

    <input type="submit" value="Salvar">
</form>

<?php $render('footer') ?>