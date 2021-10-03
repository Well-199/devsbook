<?php
require './partials/header.php';
?>

<section class="container main">
    <form method="POST" action="<?=$base?>/login_action.php">
        <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

        <input placeholder="Digite sua senha" class="input" type="password" name="password" />
        
        <?php if(!empty($_SESSION['flash'])): ?>
            <?php echo $_SESSION['flash'];?>
            <?php $_SESSION['flash'] = '';?>
        <?php endif; ?>
        
        <input class="button" type="submit" value="Acessar o sistema" />
        
        <a href="<?=$base?>/signup.php">Ainda não tem conta? Cadastre-se</a>
    </form>
</section>

<?php
require './partials/footer.php';
?>