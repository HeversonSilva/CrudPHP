<?php
include_once "Includes/Header.php";
include_once 'Includes/mensagem.php';
include_once 'Actions/logar.php';

?>

<div style="

background-image: url('Img/back.png');
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: black;
    left: 0;
    overflow: auto;
    padding: 3em;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    background-size: cover;
">
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light" style="font-family: 'Amatic SC';">Cadastrar Estabelecimento</h3>
        <form action="Actions/add.php" method="post" autocomplete="off" name="formestab">

            <div class="input-field col s12">
                <input type="text" name="razaosocial" id="razaosocial" maxlength="100"  required>
                <label for="razaosocial">Razão Social</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="nomefantasia" id="nomefantasia" maxlength="100">
                <label for="nomefantasia">Nome Fantasia</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cnpj" id="cnpj" maxlength="14" required>
                <label for="cnpj">CNPJ</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" class="validate" maxlength="50">
                <span class="helper-text" data-error="E-mail Inválido" data-success="Tudo Certo!"></span>
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" maxlength="100">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade" maxlength="100">
                <label for="cidade">Cidade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" maxlength="50">
                <label for="estado">Estado</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <select id="categoria" name="categoria" required>
                    <option value="" disabled selected >Selecione a categoria</option>
                    <option value="Supermercado">Supermercado</option>
                    <option value="Restaurante">Restaurante</option>
                    <option value="Borracharia">Borracharia</option>
                    <option value="Posto">Posto</option>
                    <option value="Oficina"">Oficina</option>
                </select>
                <label for="categoria">Categoria</label>
            </div>

            <div class="input-field col s12">
                <label>
                    <input name="status" type="radio" value="Ativo" checked />
                    <span>Ativo</span>
                </label>
            </div>
            <div class="input-field col s12" style="margin-bottom: 5%">
                <label>
                    <input name="status" type="radio" value="Inativo"/>
                    <span>Inativo</span>
                </label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="agencia" id="agencia">
                <label for="agencia">Agência</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="conta" id="conta">
                <label for="conta">Conta</label>
            </div>


            <button type="submit" name="btn-add" class="btn waves-effect waves-light green">Cadastrar</button>
            <a href="index.php" class="btn waves-effect waves-light blue">Lista</a>

        </form>
    </div>
</div>
</div>

<?php


?>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>

<?php
include("Includes/Footer.php"); ?>
