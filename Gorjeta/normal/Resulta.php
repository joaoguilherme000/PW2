<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <title>Calculadora Gorjeta</title>
</head>
<body>

    <form name="calculadora" method="post" action="Atividade-Gorjeta.html" class="janela">
        <h1>Calculadora de Gorjeta</h1>

        <label for="valor" id="bold">Valor da conta: </label>

        <?php 
            $valor = $_POST["numero1"];
            echo '<input type="number" name="numero1" class="numero1" id="valor" min="0" max="9999.99" value="' . $valor . '">';
        ?>
    
        <label for="selecao" id="bold">Qualidade do serviço:</label>

        <select name="selecao" id="selecao">
            <option>Excelente - 10%</option>
            <option>Ótimo - 8%</option>
            <option>Bom - 5%</option>
            <option>Ruim - 2%</option>
        </select>

        <input id="botao" type="submit" value="Calcular Gorjeta">

        <label id="bold">Valor da gorjeta: </label>
        <?php
            $valor = $_POST["numero1"];
            $qualidadeServico = $_POST["selecao"];

            if ($qualidadeServico === "Excelente - 10%") {
                $gorjeta = $valor * 0.10;
            } elseif ($qualidadeServico === "Ótimo - 8%") {
                $gorjeta = $valor * 0.08;
            } elseif ($qualidadeServico === "Bom - 5%") {
                $gorjeta = $valor * 0.05;
            } elseif ($qualidadeServico === "Ruim - 2%") {
                $gorjeta = $valor * 0.02;
            } else {
                $gorjeta = 0;
            }
        
            echo'<label id="mostrar">R$' . $gorjeta .'</label>';
        ?>

        <label id="bold">Valor total: </label>

        <?php
            $valor = $_POST["numero1"];
            
            $qualidadeServico = $_POST["selecao"];
        
            if ($qualidadeServico === "Excelente - 10%") {
                $gorjeta = $valor * 0.10;
            } elseif ($qualidadeServico === "Ótimo - 8%") {
                $gorjeta = $valor * 0.08;
            } elseif ($qualidadeServico === "Bom - 5%") {
                $gorjeta = $valor * 0.05;
            } elseif ($qualidadeServico === "Ruim - 2%") {
                $gorjeta = $valor * 0.02;
            } else {
                $gorjeta = 0;
            }
        
            $total = $valor + $gorjeta;
            echo'<label id="mostrar">R$' . $total .'</label>';
        ?>  
        <label id="mostrar"></label>
            
    </form>
    <script src="./LengthInput.js"></script>
</body>
</html>
