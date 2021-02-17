<?php \Classes\ClassLayout::setHead('Cadastro','Essa é o cadastro do site') ?>

<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro';?>" method="post">
    <div class="cadastro">
        <input type="text" id="nome" name="nome" placeholder="Nome:" required>
        <input type="email" id="email" name="email" placeholder="Email:" required>
        <input type="text" id="cpf" name="cpf" placeholder="CPF:" required>
        <input type="text" id="dataNascimento" name="dataNascimento:" placeholder="Data de Nascimento:" required>
        <input type="password" id="senha" name="senha" placeholder="Senha:" required>
        <input type="password" id="senhaconf" name="senhaconf" placeholder="Confirmação da Senha:" required>
        <input type="submit" value="Cadastrar">
    </div>
</form>

<?php \Classes\ClassLayout::setFooter() ?>

