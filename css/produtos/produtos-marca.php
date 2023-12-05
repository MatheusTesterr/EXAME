<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Produtos por marca</title>
</head>
<body>
  <h1>Produtos por marca</h1>
  <form action="produtos-marca.php" method="post">
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" required>
    <br>
    <button type="submit">Listar</button>
  </form>
  <?php
  // Obtém a marca selecionada
  $marca = $_POST['marca'];

  // Conecta-se ao banco de dados
  $conn = new PDO('mysql:host=localhost;dbname=controle-estoque', 'root', '');

  // Consulta os produtos da marca
  $sql = "SELECT * FROM produto WHERE marca = :marca";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':marca', $marca);
  $stmt->execute();

  // Exibe os produtos
  if ($stmt->rowCount() > 0) {
    foreach ($stmt->fetchAll() as $produto) {
      echo "<p>Nome: {$produto['nome']}</p>";
      echo "<
