<?php \Classes\ClassLayout::setHead('Login','Essa é o login do site') ?>

<div class="fundo">
<form name="formLogin" action="<?php echo DIRPAGE.'controllers/controlerLogin'; ?>">
    <div class="login"> 
        <div class="loginFormulario">
            <input type="email" name="email" id="email" placeholder="Email:" required>
            <input type="password" name="password" id="password" placeholder="Senha:" required>
            <input type="submit" value="Entrar">
            <div class="loginTextos">
           <a href="<?php echo DIRPAGE.'esqueci-minha-senha'; ?>">Esqueci minha senha</a> 
       </div>
        </div>

    </div>
</form>
</div>

<?php \Classes\ClassLayout::setFooter() ?>
