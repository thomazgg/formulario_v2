<!DOCTYPE html>
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

    <form method="POST" action="tela2.php">

        <div>
            <h1 id="titulo">Dados Cadastrais<br><br></h1>
        </div>
        
        <!-- Tela 1 – Dados Cadastrais  |   Email   |   Senha   |    CPF    |    Nome    |   Telefone    -->

        <!-- Dados do Cliente -->

        <fieldset>

            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" maxlength="40" required><br><br>
                <label for="email"><strong>Email</strong></label>
                <input type="text" name="email" maxlength="16" required><br><br>
                <label for="senha"><strong>Senha</strong></label>
                <input type="text" name="senha" maxlength="40" required><br><br>
                <label for="cpf"><strong>CPF</strong></label>
                <input type="text" name="cpf" maxlength="15" required><br><br>
                <label for="celular"><strong>Celular</strong></label>
                <input type="text" name="celular" maxlength="16" required><br><br>
            </div>

            <input type="submit" value="Enviar" class="btn"> 

        </fieldset>

    </form>

    <script src="app.js"></script>

</body>

</html>
