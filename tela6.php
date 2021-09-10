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
//dados etapa 4
$cartao=$_POST["cartao"];
$numero=$_POST["numero"];
$val=$_POST["val"];
$cod=$_POST["cod"];
$band=$_POST["band"];
//dados etapa 5
$pag=$_POST["pag"];

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

    <form method="POST" action="calcula.php">

        <div>
            <h1 id="titulo">Frete<br><br></h1>
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

        <!-- recebendo dados etapa 4 -->

            <input type="hidden" name="cartao" value="<?php echo $cartao;?>">
            <input type="hidden" name="numero" value="<?php echo $numero;?>">
            <input type="hidden" name="val" value="<?php echo $val;?>">
            <input type="hidden" name="cod" value="<?php echo $cod;?>">
            <input type="hidden" name="band" value="<?php echo $band;?>">

        <!-- recebendo dados etapa 5 -->

            <input type="hidden" name="pag" value="<?php echo $cartao;?>">

        <!-- acessando dados etapa 6 -->

        <!-- Tela 6 – Frete -->

        <fieldset>

            <div class="campo">
                <label><strong>Frete</strong></label>
                <select name="frete"required>
                    <option selected disabled value="">Selecione</option>
                    <option value="1" >Expresso – 10% de Taxa</option>
                    <option value="2" >Sedex 10 – 30,00 de Taxa</option>
                    <option value="3" >Correio – qualquer lugar do brasil - Sem Taxa</option>
                    <option value="4" >Estado SP – independente do frete escolhido - Sem Taxa</option>
                </select>
            </div>

            <input type="submit" value="Enviar" class="btn"> 

        </fieldset>

    </form>

    <script src="app.js"></script>

</body>

</html>
