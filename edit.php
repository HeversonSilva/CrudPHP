<?php
include_once 'Includes/Header.php';
include_once 'Actions/conexao.php';
include_once 'Includes/mensagem.php';
include_once 'Actions/logar.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "select * from cadastro where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    $categoria = $dados['categoria'];

endif;
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
        <h3 class="light" style="font-family: 'Amatic SC';">Editar Estabelecimento</h3>
        <form action="Actions/update.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">

            <div class="input-field col s12">
                <input type="text" name="razaosocial" id="razaosocial" value="<?php echo $dados['razao_social']; ?>" required>
                <label for="razaosocial">Razão Social</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="nomefantasia" id="nomefantasia" value="<?php echo $dados['nome_fantasia']; ?>">
                <label for="nomefantasia">Nome Fantasia</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cnpj" id="cnpj" value="<?php echo $dados['cnpj']; ?>" required>
                <label for="cnpj">CNPJ</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" class="validate" value="<?php echo $dados['email']; ?>">
                <span class="helper-text" data-error="E-mail Inválido" data-success="Tudo Certo"></span>
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco']; ?>">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
                <label for="cidade">Cidade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" value="<?php echo $dados['estado']; ?>">
                <label for="estado">Estado</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="categoria" id="categoria" value="<?php echo $dados['categoria']; ?>" readonly="readonly">
                <label for="categoria">Categoria</label>
                <span class="helper-text">A categoria não pode ser alterada, por favor cadastre o novo estabelecimento.</span>
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

            <div class="input-field col s12" >
                <input type="text" name="agencia" id="agencia" value="<?php echo $dados['agencia']; ?>">
                <label for="agencia">Agência</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="conta" id="conta" value="<?php echo $dados['conta']; ?>">
                <label for="conta">Conta</label>
            </div>

            <button type="submit" name="btn-edit" class="btn waves-effect waves-light green">Atualizar</button>
            <a href="index.php" class="btn waves-effect waves-light blue">Lista</a>

        </form>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>

<?php
include("Includes/Footer.php"); ?>
