<?php

include_once 'Includes/mensagem.php';
include_once 'Includes/Header.php';
include_once 'Actions/conexao.php';
include_once 'Actions/logar.php';

    session_start();
    $login = "";
    $login = $_SESSION['login'];
?>

<div style="

background-image: url('Img/umarucomendo.jpg');
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

        <a href="login.php" class="btn waves-effect waves-light" style="float: right; margin-bottom: 5%">Entrar!</a>

<div class="row">

    <div class="col s12 m6 push-m3">
        <h3 class="light" style="font-family: 'Amatic SC';">Estabelecimentos</h3>

        <table class="striped">

            <thead>

            <th>Razão Social:</th>
            <th>Nome Fantasia:</th>
            <th>Email:</th>
            <th>Telefone:</th>

            </thead>

            <tbody>
            <?php
            $sql = "select * from cadastro";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0):

                while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <tr>
                        <td><?php echo $dados['razao_social']; ?></td>
                        <td><?php echo $dados['nome_fantasia']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['telefone']; ?></td>
                        <td><a href="#modal <?php echo $dados['id']; ?>"
                               class="btn-floating red waves-effect waves-light modal-trigger"><i
                                        class="material-icons">delete_sweep</i></a></td>

                        <div id="modal <?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Atenção!</h4>
                                <p>Tem certeza que deseja apagar os dados? Eles seram apagados para sempre!</p>
                            </div>
                            <div class="modal-footer">
                                <form action="Actions/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="btn-delete"
                                            class="btn red waves-effect waves-light">Deletar!
                                    </button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>

                        <td><a href="edit.php?id=<?php echo $dados['id']; ?>"
                               class="btn-floating green waves-effect waves-light"><i
                                        class="material-icons">edit</i></a></td>
                        <td><a href="about.php?id=<?php echo $dados['id']; ?>"
                               class="btn-floating light-blue darken-4 waves-effect waves-light"><i
                                        class="material-icons">info_outline</i></a>
                        </td>
                    </tr>
                <?php
                endwhile;
            else: ?>

                <tr>
                    <td colspan="4"><h3>OPS! parece que não temos nenhum registro...</h3></td>
                </tr>

            <?php
            endif;
            ?>
            </tbody>

        </table>

        <br>
        <a href="addestabelecimento.php" class="btn waves-effect waves-light">Add Estabelecimento</a>
    </div>
</div>
</div>

<script>
    $(document).ready(function () {
        $('.modal').modal();
</script>

<?php
include("Includes/Footer.php"); ?>
