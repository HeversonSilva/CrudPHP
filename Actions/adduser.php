<?php

session_start();

require_once 'conexao.php';

if (isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['addnome']);
    $login = mysqli_escape_string($connect, $_POST['addlogin']);
    $password = mysqli_escape_string($connect, $_POST['addpassword']);

    if (empty($nome) or empty($login) or empty($password)):
        $_SESSION['mensagem'] = "Parece que algo está faltando!";
        header('location: ../cadastrar.php');

    else:

        $sql = "select login from usuarios where login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0):

            $_SESSION['mensagem'] = "Esse login já está cadastrado!";
            header('location: ../cadastrar.php');

        else:

            $password = md5($password);
            $sql = "insert into usuarios(nome,login,senha) values('$nome', '$login', '$password')";

            if (mysqli_query($connect,$sql)):
                $_SESSION['mensagem'] = "Parabéns! Você acaba de criar uma conta!";
                header('location: ../login.php');
            else:
                $_SESSION['mensagem'] = "Ocorreu um erro... Poderia tentar novamente?";
                header('location: ../cadastrar.php');
            endif;

        endif;

    endif;

endif;
