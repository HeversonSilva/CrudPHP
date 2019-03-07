<?php
include_once 'Includes/mensagem.php';
include_once 'Includes/Header.php';
include_once 'Actions/conexao.php';
include_once 'Actions/logar.php';

session_start();

?>

<div <div style="

background-image: url('Img/umaru.jpg');
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
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

                <h3 style="margin-top: 25% ">Entrar na conta</h3><br>
                <span style="color: blue;">Ainda não fiz essa parte, então nada mudará</span>

                <form action="Actions/logar.php" method="post" autocomplete="off">

                    <div class="input-field" style="margin-top: 5%">
                        <input type="text" name="login" id="login" maxlength="50">
                        <label for="login" style="color: black">Login</label>
                    </div>

                    <div class="input-field" style="margin-top: 5%">
                        <input type="password" name="password" id="password" maxlength="32">
                        <label for="password" style="color: black">Senha</label>
                    </div>

                    <button type="submit" name="btn-login" class="btn waves-effect waves-light green">Entrar</button>
                    <a href="index.php" class="btn waves-effect waves-light blue">Lista</a>
                    <a href="cadastrar.php" class="btn waves-effect waves-light grey">Cadastre-se!</a>

                </form>

            </div>

        </div>

</div>

<script>
    $(document).ready(function () {
        $('.modal').modal();
</script>

<?php
include("Includes/Footer.php"); ?>

