<?php
include 'db.php'; // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $codigo = $_POST['codigo'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $valor_unitario = $_POST['valor_unitario'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';

    echo "Dados recebidos: Código: $codigo, Nome: $nome, Categoria: $categoria, Valor Unitário: $valor_unitario, Quantidade: $quantidade<br>";

    // Prepara e executa a consulta SQL
    $sql = "INSERT INTO produtos (codigo, nome, categoria, valor_unitario, quantidade)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssdi", $codigo, $nome, $categoria, $valor_unitario, $quantidade);

        if ($stmt->execute()) {
            echo "Novo produto cadastrado com sucesso!";
        } else {
            echo "Erro na execução: " . $stmt->error;
        }

        $stmt->close(); // Fecha a consulta
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }
    $conn->close(); // Fecha a conexão com o banco de dados
} else {
    // Se o método não for POST, exiba uma mensagem de erro
    echo "Método de solicitação não permitido.";
}
?>

