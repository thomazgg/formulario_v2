<!DOCTYPE html>

<?php

//dados etapa 1
$nome=$_POST["nome"]; 
$email=$_POST["email"];
$senha=$_POST["senha"];
$cpf=$_POST["cpf"];
$celular=$_POST["celular"];
//dados etapa 2
$ender=$_POST["ender"];
$bairro=$_POST["bairro"];
$cep=$_POST["cep"]; 
$cidade=$_POST["cidade"]; 
$estado=$_POST["estado"];
//dados etapa 3
$tipo=$_POST["tipo"];
$qtd=$_POST["qtd"];
$tam=$_POST["tam"];
$cor=$_POST["cor"];

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>  

    <!-- Formulário -->

    <form method="POST" action="tela5.php">

        <div>
            <h1 id="titulo">Cartão de Crédito<br><br></h1>
        </div>

        <!-- recebendo dados etapa 1 -->

            <input type="hidden" name="nome" value="<?php echo $nome;?>">
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <input type="hidden" name="senha" value="<?php echo $senha;?>">
            <input type="hidden" name="cpf" value="<?php echo $cpf;?>">
            <input type="hidden" name="celular" value="<?php echo $celular;?>">

        <!-- recebendo dados etapa 2 -->

            <input type="hidden" name="ender" value="<?php echo $ender;?>">
            <input type="hidden" name="bairro" value="<?php echo $bairro;?>">
            <input type="hidden" name="cep" value="<?php echo $cep;?>">
            <input type="hidden" name="cidade" value="<?php echo $nome;?>">
            <input type="hidden" name="estado" value="<?php echo $estado;?>">

        <!-- recebendo dados etapa 3 -->

            <input type="hidden" name="tipo" value="<?php echo $tipo;?>">
            <input type="hidden" name="qtd" value="<?php echo $qtd;?>">
            <input type="hidden" name="tam" value="<?php echo $tam;?>">
            <input type="hidden" name="cor" value="<?php echo $cor;?>">

        <!-- acessando dados etapa 4 -->

        <!-- Tela 4 – Cartão de Crédito -->

        <fieldset>

            <div class="campo">
                <label for="cartao"><strong>Nome Cartão</strong></label>
                <input type="text" name="cartao" maxlength="40" required><br><br>
                <label for="numero"><strong>Número</strong></label>
                <input type="text" name="numero" maxlength="40" required><br><br>
                <label for="val"><strong>Data de validade</strong></label>
                <input type="text" name="val" maxlength="40" required><br><br>
                <label for="cod"><strong>Código de Segurança</strong></label>
                <input type="text" name="cod" maxlength="40" required><br>
            </div>

            <div class="campo">
                <label><strong>Bandeira</strong></label>
                <select name="band" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="1" >Bandeira 1</option>
                    <option value="2" >Bandeira 2</option>
                    <option value="3" >Bandeira 3</option>
                </select>
            </div>

            <input type="submit" value="Enviar" class="btn"> 

        </fieldset>

    </form>

    <script src="app.js"></script>

</body>

</html>
