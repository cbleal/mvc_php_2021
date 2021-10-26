<?php $render('header') ?>

<a href="<?= $base ?>">Voltar para Home</a>

<form action="<?= $base ?>/novo" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" name="email"><br><br>

    <input type="submit" value="Adicionar">
</form>

<?php $render('footer') ?>