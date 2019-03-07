<?php

session_start();

require_once 'conexao.php';

if (isset($_POST['btn-edit'])):
    $razaosocial = mysqli_escape_string($connect, $_POST['razaosocial']);
    $nomefantasia = mysqli_escape_string($connect, $_POST['nomefantasia']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);
    $status = mysqli_escape_string($connect, $_POST['status']);
    $agencia = mysqli_escape_string($connect, $_POST['agencia']);
    $conta = mysqli_escape_string($connect, $_POST['conta']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "update cadastro set razao_social='$razaosocial',nome_fantasia='$nomefantasia',cnpj='$cnpj',email='$email'
          ,endereco='$endereco',cidade='$cidade',estado='$estado',telefone='$telefone',categoria='$categoria'
          ,status='$status',agencia='$agencia',conta='$conta' where id='$id'";

    if (mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Ocorreu um erro... Poderia tentar novamente?";
        header('location: ../index.php');
    endif;

endif;
