<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastro de Produtos em Estoque</h1>
    </header>
    <main>
        <form action="conexao.php" method="post">
            <div>
                <label for="codigo">Código do Produto:</label>
                <input type="text" id="codigo" name="codigo" required>
            </div>
            <div>
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" required>
            </div>
            <div>
                <label for="valor_unitario">Valor Unitário:</label>
                <input type="number" id="valor_unitario" name="valor_unitario" step="0.01" required>
            </div>
            <div>
                <label for="quantidade">Quantidade em Estoque:</label>
                <input type="number" id="quantidade" name="quantidade" required>
            </div>
            
            <div>
                <button type="submit">Cadastrar Produto</button>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Supermercado Boituvão</p>
    </footer>
</body>
</html>




