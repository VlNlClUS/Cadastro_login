<?php \Classes\ClassLayout::setHead('Login','Essa é o login do site') ?>

<div class="fundo"></div>
<form name="formLogin" action="<?php echo DIRPAGE.'controllers/controlerLogin'; ?>">
    <div class="login"> 
        <div class="loginFormulario">
            <input type="email" name="email" id="email" plaseholder="Email:" required>
            <input type="password" name="password" id="password" placeholder="Senha:" required>
            <input type="submit" value="Entrar">
        </div>

        <div class="loginTextos">
            Esquici minha senha
        </div>
    </div>
</form>


<?php \Classes\ClassLayout::setFooter() ?>
