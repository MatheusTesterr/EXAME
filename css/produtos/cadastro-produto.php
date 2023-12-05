<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de produto</title>
</head>
<body>
  <h1>Cadastro de produto</h1>
  <form action="cadastro-produto.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <br>
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" required>
    <br>
    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" id="categoria" required>
    <br>
    <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco" step="0.01" required>
    <br>
    <label for="quantidade-estoque">Quantidade em estoque:</label>
    <input type="number" name="quantidade-estoque" id="quantidade-estoque" required>
    <br>
    <label for="estoque-minimo">Estoque mínimo:</label>
    <input type="number" name="estoque-minimo" id="estoque-minimo" required>
    <br>
    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>
