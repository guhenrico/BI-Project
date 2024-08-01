<?php
include 'db.php'; // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $codigo = $_POST['product-code'];
    $nome = $_POST['product-name'];
    $categoria = $_POST['category'];
    $valor_unitario = $_POST['unit-price'];
    $quantidade = $_POST['quantity'];

    // Prepara e executa a consulta SQL
    $sql = "INSERT INTO produtos (codigo, nome, categoria, valor_unitario, quantidade)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssd", $codigo, $nome, $categoria, $valor_unitario, $quantidade);

    if ($stmt->execute()) {
        echo "Novo produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close(); // Fecha a consulta
    $conn->close(); // Fecha a conexão com o banco de dados
} else {
    // Se o método não for POST, exiba uma mensagem de erro
    echo "Método de solicitação não permitido.";
}
?>
