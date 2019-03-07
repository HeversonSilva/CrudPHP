<?php

session_start();

require_once 'conexao.php';

if (isset($_POST['btn-delete'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "delete from cadastro where id = '$id'";

    if (mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Ocorreu um erro... Poderia tentar novamente?";
        header('location: ../index.php');
    endif;

endif;
