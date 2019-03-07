<?php

    session_start();

    require_once 'conexao.php';


    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);

    function validaCNPJ($cnpj = null) {

        if(empty($cnpj)) {
            return false;
        }

        if (strlen($cnpj) != 14) {
            return false;
        }

        else if ($cnpj == '00000000000000' ||
            $cnpj == '11111111111111' ||
            $cnpj == '22222222222222' ||
            $cnpj == '33333333333333' ||
            $cnpj == '44444444444444' ||
            $cnpj == '55555555555555' ||
            $cnpj == '66666666666666' ||
            $cnpj == '77777777777777' ||
            $cnpj == '88888888888888' ||
            $cnpj == '99999999999999') {
            return false;

        } else {

            $j = 5;
            $k = 6;
            $soma1 = "";
            $soma2 = "";

            for ($i = 0; $i < 13; $i++) {

                $j = $j == 1 ? 9 : $j;
                $k = $k == 1 ? 9 : $k;

                $soma2 += ($cnpj{$i} * $k);

                if ($i < 12) {
                    $soma1 += ($cnpj{$i} * $j);
                }

                $k--;
                $j--;

            }

            $digito1 = $soma1 % 11 < 2 ? 0 : 11 - $soma1 % 11;
            $digito2 = $soma2 % 11 < 2 ? 0 : 11 - $soma2 % 11;

            return (($cnpj{12} == $digito1) and ($cnpj{13} == $digito2));

        }
    }
    if (validaCNPJ($cnpj) == true) {
        if ($categoria != "Supermercado") {

            $cnpj = null;

                if (isset($_POST['btn-add'])):
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

                    $sql = "insert into cadastro(razao_social,nome_fantasia,cnpj,email,endereco,cidade,estado,telefone,categoria
              ,status,agencia,conta) values('$razaosocial','$nomefantasia','$cnpj','$email','$endereco','$cidade','$estado'
              ,'$telefone','$categoria','$status','$agencia','$conta')";

                    if (mysqli_query($connect, $sql)):
                        $_SESSION['mensagem'] = "Parece que você tem um novo cliente, PARABÉNS!!";
                        header('location: ../index.php');
                    else:
                        $_SESSION['mensagem'] = "Ocorreu um erro... Poderia tentar novamente?";
                        header('location: ../index.php');
                    endif;

                endif;
            }

            else{
                $telefone = mysqli_escape_string($connect, $_POST['telefone']);
                if ($telefone != null) {

                    if (isset($_POST['btn-add'])):
                        $razaosocial = mysqli_escape_string($connect, $_POST['razaosocial']);
                        $nomefantasia = mysqli_escape_string($connect, $_POST['nomefantasia']);
                        $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
                        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
                        $cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);
                        $email = mysqli_escape_string($connect, $_POST['email']);
                        $endereco = mysqli_escape_string($connect, $_POST['endereco']);
                        $cidade = mysqli_escape_string($connect, $_POST['cidade']);
                        $estado = mysqli_escape_string($connect, $_POST['estado']);
                        $telefone = mysqli_escape_string($connect, $_POST['telefone']);
                        $categoria = mysqli_escape_string($connect, $_POST['categoria']);
                        $status = mysqli_escape_string($connect, $_POST['status']);
                        $agencia = mysqli_escape_string($connect, $_POST['agencia']);
                        $conta = mysqli_escape_string($connect, $_POST['conta']);

                        $sql = "insert into cadastro(razao_social,nome_fantasia,cnpj,email,endereco,cidade,estado,telefone,categoria
              ,status,agencia,conta) values('$razaosocial','$nomefantasia','$cnpj','$email','$endereco','$cidade','$estado'
              ,'$telefone','$categoria','$status','$agencia','$conta')";

                        if (mysqli_query($connect, $sql)):
                            $_SESSION['mensagem'] = "Parece que você tem um novo cliente, PARABÉNS!!";
                            header('location: ../index.php');
                        else:
                            $_SESSION['mensagem'] = "Ocorreu um erro... Poderia tentar novamente?";
                            header('location: ../index.php');
                        endif;

                    endif;

                }

              else {

                $_SESSION['mensagem'] = "Telefone é obrigatório para supermercados!";
                header('location: ../addestabelecimento.php');
            }

        }


    }

    else{
        $_SESSION['mensagem'] = "CNPJ digitado é inválido!";
        header('location: ../addestabelecimento.php');
    }
