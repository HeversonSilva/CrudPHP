<?php

session_start();
require_once 'conexao.php';

if (isset($_POST['btn-login'])):

    $login = mysqli_escape_string($connect,$_POST['login']);
    $pass = mysqli_escape_string($connect, $_POST['password']);

    if (empty($login) or empty($pass)):
            $_SESSION['mensagem'] = "Parece que algo está faltando!";
            echo $_SESSION['mensagem'];
            header('location: ../login.php');

     else:

        $sql = "select login from usuarios where login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0):

            $pass = md5($pass);
            $sql = "select * from usuarios where login = '$login' and senha = '$pass'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) == 1):

                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['iduser'];
                $_SESSION['login'] = $login;

                header('location: ../index.php?sucesso');

            else:

                $_SESSION['mensagem'] = "Acho que digitou errado, da uma olhadinha ;)";
                header('location: ../login.php');

            endif;

        else:
            $_SESSION['mensagem'] = "Ops... Parece que não existe ninguém com esse Login.";
            header('location: ../login.php');

            endif;

    endif;

endif;