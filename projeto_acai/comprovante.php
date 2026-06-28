<?php

session_start();

$cliente = $_SESSION["cliente"] ?? "Não informado";
$sabor = $_SESSION["sabor"] ?? "Não informado";
$tamanho = $_SESSION["tamanho"] ?? "Não informado";
$complementos = $_SESSION["complementos"] ?? "Nenhum";
$dataPedido = $_SESSION["dataPedido"] ?? "Não informada";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_acai.css">

    <title>Comprovante</title>

</head>

<body>

<div class="comprovante">

    <h2 class="titulo-comprovante">
            🍨 COMPROVANTE DO PEDIDO 🍧
    </h2>
    
<p><strong>Cliente:</strong>
<?= htmlspecialchars($cliente) ?></p>

<p><strong>Sabor:</strong>
<?= htmlspecialchars($sabor) ?></p>

<p><strong>Tamanho:</strong>
<?= htmlspecialchars($tamanho) ?></p>

<p><strong>Complementos:</strong>
<?= htmlspecialchars($complementos) ?></p>

<p><strong>Data:</strong>
<?= htmlspecialchars($dataPedido) ?></p>

<button onclick="window.print()" class="botao-imprimir">
Imprimir Pedido
</button>

<ul class="menu">

        <li><a href="conteudo.html">
                Pagina Inicial</a></li>
        <li><a href="cadastro_pedidos.php"></a></li>
    </ul>

</div>

</body>
</html>