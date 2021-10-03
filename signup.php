<?php
require './partials/header.php';
?>

<section class="container main">
    <form method="POST" action="<?=$base?>/signup_action.php">
        <input placeholder="Nome Completo" class="input" type="text" name="name" required/>

        <input placeholder="E-mail" class="input" type="email" name="email" required/>

        <input placeholder="Senha" class="input" type="password" name="password" required/>

        <input placeholder="Data de Nascimento - 00/00/0000" class="input" type="text" name="birthdate" required/>
        
        <?php if(!empty($_SESSION['flash'])): ?>
            <?php echo $_SESSION['flash'];?>
            <?php $_SESSION['flash'] = '';?>
        <?php endif; ?>
        
        <input class="button" type="submit" value="Cadastrar" />
        
        <a href="<?=$base?>/login.php">Já tem conta? faça o login.</a>
    </form>
</section>

<script src="https://unpkg.com/imask"></script>
<script>
    IMask(
        document.querySelector('[name="birthdate"]'),
        {mask: '00/00/0000'}
    )
</script>

<?php
require './partials/footer.php';
?>