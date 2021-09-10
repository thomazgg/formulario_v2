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

    <form method="POST" action="tela4.php">

        <div>
            <h1 id="titulo">Dados do Pedido<br><br></h1>
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

        <!-- acessando dados etapa 3 -->

        <!-- Tela 3 – Dados do Pedido -->

        <fieldset>

            <div class="campo">
                <label><strong>Tipo do Produto</strong></label>
                <select name="tipo" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="1">Produto tipo 1</option>
                    <option value="2">Produto tipo 2</option>
                    <option value="3">Produto tipo 3</option>
                </select>
            </div>

            <div class="campo">
                <label for="quantidade"><strong>Quantidade</strong></label>
                <input type="number" name="qtd" selected="1" min="1" max="99" required ><br><br>
            </div>

            <div class="campo">
                <label><strong>Tamanho</strong></label>
                <select name="tam" id="tam" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="1" >Pequeno</option>
                    <option value="2" >Médio</option>
                    <option value="3" >Grande</option>
                </select>
            </div>
        
            <div class="campo">
                <label><strong>Cor</strong></label>
                <select name="cor" id="cor" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="1" >Azul</option>
                    <option value="2" >Vermelho</option>
                    <option value="3" >Preto</option>
                    <option value="4" >Branco</option>
                </select>
            </div>

            <input type="submit" value="Enviar" class="btn"> 

        </fieldset>

    </form>

    <script src="app.js"></script>

</body>

</html>
