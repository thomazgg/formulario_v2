<!DOCTYPE html>

<?php

//dados etapa 1
$nome=$_POST["nome"]; 
$email=$_POST["email"];
$senha=$_POST["senha"];
$cpf=$_POST["cpf"];
$celular=$_POST["celular"]; 

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

    <form method="POST" action="tela3.php">

        <div>
            <h1 id="titulo">Endereço / Endereço de Entrega<br><br></h1>
        </div>

        <!-- recebendo dados etapa 1 -->

            <input type="hidden" name="nome" value="<?php echo $nome;?>">
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <input type="hidden" name="senha" value="<?php echo $senha;?>">
            <input type="hidden" name="cpf" value="<?php echo $cpf;?>">
            <input type="hidden" name="celular" value="<?php echo $celular;?>">

		<!-- acessando dados etapa 2 -->

        <!-- Tela 2 - Endereço / Endereço de Entrega    |   Endereço    |    Bairro    |    CEP    |   Cidade   |    Estado    |    Referência     -->

        <fieldset>

            <div class="campo">
                <label for="ender"><strong>Endereço</strong></label>
                <input type="text" name="ender" maxlength="40" required><br><br>
                <label for="bairro"><strong>Bairro</strong></label>
                <input type="text" name="bairro" maxlength="40" required><br><br>
                <label for="cep"><strong>CEP</strong></label>
                <input type="text" name="cep" maxlength="20" required><br><br>
                <label for="cidade"><strong>Cidade</strong></label>
                <input type="text" name="cidade" maxlength="40" required><br><br>
                <label for="estado"><strong>Estado</strong></label>
                <input type="text" name="estado" maxlength="40" required><br><br>
            </div>

            <!-- Referência -->

            <div class="campo">
                <label for="experiencia"><strong>Referência: </strong></label>
                <textarea rows="6" class="_2bfjEn" type="text" placeholder="(Opcional) Deixe uma mensagem para o vendedor" 
                value="" style="width: 26em" id="experiencia" name="experiencia" maxlength="500"></textarea>
            </div>
        
            <input type="submit" value="Enviar" class="btn"> 

        </fieldset>

    </form>

    <script src="app.js"></script>

</body>

</html>
