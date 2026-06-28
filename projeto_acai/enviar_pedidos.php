<?php

session_start();

require_once("conexao.php");

function cadastrarPedido($conexao) {

    $cliente     = $_POST["cliente"] ?? "";
    $sabor       = $_POST["sabor"] ?? "";
    $dataPedido  = $_POST["data"] ?? "";
    $tamanho = "Não informado";

    if (isset($_POST["tamanho"])) {

        $tamanho = $_POST["tamanho"];
    }

    $complementos = "Nenhum";

    if (isset($_POST["comp"])) {

        $complementos = implode(", ", $_POST["comp"]);
    }

    if (!empty($dataPedido)) {

    $dataBanco = date("Y-m-d", strtotime($dataPedido));

    $dataPedido = date("d/m/Y", strtotime($dataPedido));

    } else {

    $dataBanco = null;

    $dataPedido = "Não informada";
    }

    $sql = "INSERT INTO pedidos
            (cliente, sabor, tamanho, complementos, data_pedido)
            VALUES
            (:cliente, :sabor, :tamanho, :complementos, :data_pedido)";

    $comando = $conexao->prepare($sql);

    $comando->bindValue(":cliente", $cliente);
    $comando->bindValue(":sabor", $sabor);
    $comando->bindValue(":tamanho", $tamanho);
    $comando->bindValue(":complementos", $complementos);
    $comando->bindValue(":data_pedido", $dataBanco);

    $comando->execute();


    $_SESSION["cliente"] = $cliente;

    $_SESSION["sabor"] = $sabor;

    $_SESSION["tamanho"] = $tamanho;

    $_SESSION["complementos"] = $complementos;

    $_SESSION["dataPedido"] = $dataPedido;


    header("Location: comprovante.php");

    exit();
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    cadastrarPedido($conexao);

} else {

    echo "<h3>Acesso inválido.</h3>";

    echo "<p>Por favor, acesse o formulário de pedidos.</p>";
}

?>