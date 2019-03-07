<?php
include_once 'Includes/Header.php';
include_once 'Actions/conexao.php';
include_once 'Actions/logar.php';
include_once 'Includes/mensagem.php';

session_start();

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "select * from cadastro where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    $categoria = $dados['categoria'];

endif;

?>

<div style="

background-image: url('Img/relax.png');
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
        <h3 class="light" style="font-family: 'Amatic SC';">Estabelecimento: <?php echo $dados['nome_fantasia']; ?></h3>
        <h6 style="font-family: 'Amatic SC';">Todas a informações!</h6>
        <br>
            <table class="striped responsive-table">

                <tbody>

                        <tr>
                            <th width="25%">Razão Social:</th>
                            <td><?php echo $dados['razao_social']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Nome Fantasia:</th>
                            <td><?php echo $dados['nome_fantasia']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">CNPJ:</th>
                            <td><?php echo $dados['cnpj']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">E-Mail:</th>
                            <td><?php echo $dados['email']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Endereço:</th>
                            <td><?php echo $dados['endereco']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Cidade:</th>
                            <td><?php echo $dados['cidade']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Estado:</th>
                            <td><?php echo $dados['estado']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Telefone:</th>
                            <td><?php echo $dados['telefone']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Data de cadastro:</th>
                            <td><?php echo $dados['data_cadastro']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Categoria:</th>
                            <td><?php echo $dados['categoria']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Status:</th>
                            <td><?php echo $dados['status']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Agência:</th>
                            <td><?php echo $dados['agencia']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Conta:</th>
                            <td><?php echo $dados['conta']; ?></td>
                        </tr>


                </tbody>

            </table>
        <br>
        <a href="index.php" class="btn waves-effect waves-light blue">Me leve de volta!</a>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {
        $('.modal').modal();
</script>

<?php
include("Includes/Footer.php"); ?>
