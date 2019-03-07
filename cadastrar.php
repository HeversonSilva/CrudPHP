<?php
include_once 'Includes/mensagem.php';
include_once 'Includes/Header.php';
include_once 'Actions/conexao.php';
include_once 'Actions/adduser.php';
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

            <h3>Cadastrar!</h3>

            <form action="Actions/adduser.php" method="post" autocomplete="off">

                <div class="input-field" style="margin-top: 10%">

                    <input type="text" name="addnome" id="addnome" maxlength="50">
                    <label for="addnome" style="color: black">Nome</label>

                </div>

                <div class="input-field" style="margin-top: 10%">

                    <input type="text" name="addlogin" id="addlogin" maxlength="50">
                    <label for="addlogin" style="color: black">Login</label>

                </div>

                <div class="input-field" style="margin-top: 10%; margin-bottom: 5%">

                    <input type="password" name="addpassword" id="addpassword" maxlength="32">
                    <label for="addpassword" style="color: black">Senha</label>

                </div>

                <button type="submit" name="btn-cadastrar" class="btn waves-effect waves-light green">Cadastrar!</button>
                <a href="index.php" class="btn waves-effect waves-light blue">Lista</a>
                <a href="login.php" class="btn waves-effect waves-light grey">Cancelar</a>

            </form>

        </div>
    </div>

</div>
<?php
include("Includes/Footer.php"); ?>
