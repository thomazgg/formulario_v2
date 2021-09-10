<?php

    //dados etapa 1

    $nome           = $_POST["nome"]; 
    $email          = $_POST["email"];
    $senha          = $_POST["senha"];
    $cpf            = $_POST["cpf"];
    $celular        = $_POST["celular"];

    //dados etapa 2

    $ender          = $_POST["ender"];
    $bairro         = $_POST["bairro"];
    $cep            = $_POST["cep"]; 
    $cidade         = $_POST["cidade"]; 
    $estado         = $_POST["estado"];

    //dados etapa 3

    $qtd            = $_POST["qtd"];

            // Tipo \\

        $tipopro=$_POST["tipo"];
        if ($tipopro==1){
            $prod = " Produto tipo 1 ";
            $preco = 100.00;
        }
        elseif ($tipopro==2){
            $prod = " Produto tipo 2 ";
            $preco = 200.00;
        }
        else {
            $prod = " Produto tipo 3 ";
            $preco = 300.00;
        }
        
            // Tamanho \\

        $tipotam=$_POST["tam"];
        if ($tipotam==1){
            $tamanho = " Pequeno ";
            $tampreco = 10.00;
        }
        elseif ($tipotam==2){
            $tamanho = " Médio ";
            $tampreco = 20.00;
        }
        else {
            $tamanho = " Grande ";
            $tampreco = 30.00;
        }

            // Cor \\

        $tipocor=$_POST["cor"];
        if ($tipocor==1){
            $tipodacor = " Azul ";
        }
        elseif ($tipocor==2){
            $tipodacor = " Vermelho ";
        }
        elseif ($tipocor==3){
            $tipodacor = " Preto ";
        }
        else {
            $tipodacor = " Branco ";
        }

    //dados etapa 4

    $cartao         = $_POST["cartao"];
    $numero         = $_POST["numero"];
    $val            = $_POST["val"];
    $cod            = $_POST["cod"];

            // Tipo Bandeira \\

        $tipoband=$_POST["band"];
        if ($tipoband==1){
            $bandeira = " Bandeira 1 ";
        }
        elseif ($tipoband==2){
            $bandeira = " Bandeira 2 ";
        }
        else {
            $bandeira = " Bandeira 3 ";
        }

    //dados etapa 5

            // Forma de Pagamento \\

        $valpr = ( $preco + $tampreco ) *  $qtd;
            
        $tipopag=$_POST["pag"];
        if ($tipopag==1){
            $formapag = " Boleto Bancário ";
            $formpag = $valpr;
        }
        elseif ($tipopag==2){
            $formapag = " A vista – 10% desconto ";
            $formpag = $valpr * 0.9;
        }
        elseif ($tipopag==3){
            $formapag = " 3 x – Sem Juros ";
            $formpag = $valpr;
            $pagamento = $formpag / 3;
        }
        elseif ($tipopag==4){
            $formapag = " 6 x – Sem Juros ";
            $formpag = $valpr  ;
            $pagamento = $formpag / 6  ;
        }
        else {
            $formapag = " 10 x – 15% de Juros ";
            $formpag = $valpr * 1.15 ;
            $pagamento = $formpag / 10  ;
        }

    //dados etapa 6

    $frete          = $_POST["frete"];

            // Frete \\

        $tipofrete=$_POST["frete"];
        if ($tipofrete==1){
            $fretetipo = " Expresso – 10% de Taxa ";
            $valorfrete = ( $formpag * 1.1 ) - $formpag;
            $totalfrete = $formpag * 1.1;
        }
        elseif ($tipofrete==2){
            $fretetipo = " Sedex 10 – R$30,00 de Taxa ";
            $valorfrete = ( $formpag + 30 ) - $formpag;
            $totalfrete = $formpag + 30;
        }
        elseif ($tipofrete==3){
            $fretetipo = " Correio – qualquer lugar do brasil - Sem Taxa ";
            $valorfrete = ( $formpag ) - $formpag;
            $totalfrete = $formpag ;
        }
        else {
            $fretetipo = " Estado SP – independente do frete escolhido - Sem Taxa ";
            $valorfrete = ( $formpag ) - $formpag;
            $totalfrete = $formpag;
        }

    //total

    $total = $totalfrete;

    echo "<br/>==================Mostrando Dados================== <br/><br/>";
    echo "<br/>=========/// Dados do Cliente \\\=========<br/><br/>";
    echo "Nome: $nome <br/>";
    echo "CPF: $cpf <br/>";
    echo "Endereço: $ender <br/>";
    echo "Email: $email <br/>";
    echo "Celular: $celular <br/>";
    echo "<br/>=========/// Endereço \\\=========<br/><br/>";
    echo "Endereço: $ender <br/>";
    echo "Bairro: $bairro <br/>";
    echo "CEP: $cep <br/>"; 
    echo "Cidade: $cidade <br/>"; 
    echo "Estado: $estado <br/>";
    echo "<br/>=========/// Dados do Pedido \\\=========<br/><br/>";
    echo "Tipo: $prod <br/>";
    echo "Preço: R$$preco <br/>";
    echo "Quantidade: $qtd <br/>";
    echo "Tamanho: $tamanho / Valor: R$$tampreco <br/>" ;
    echo "Cor: $tipodacor <br/>";
    echo "<br/>=========/// Dados do Pedido \\\=========<br/><br/>";
    echo "Nome Cartão: $cartao<br/>";
    echo "Número: $numero<br/>";
    echo "Data de validade: $val<br/>";
    echo "Código de Segurança: $cod<br/>";
    echo "Bandeira: $bandeira<br/>";
    echo "<br/>=========/// Formas de Pagamento \\\=========<br/><br/>";
    echo "Forma de Pagamento: $formapag  <br/>";
    echo "Total dos produtos: R$$valpr <br/>";
    echo "<br/>=========/// Frete e/ou Taxa de Entrega \\\=========<br/><br/>";
    echo "Frete: $fretetipo <br/>";
    echo "Valor do Frete:  R$$valorfrete <br/>";
    echo "<br/>=========/// TOTAL \\\=========<br/><br/>";
    echo "Valor Total = R$$formpag <br/>"; 
    echo "Valor a pagar com o Frete = R$$total";

?>
