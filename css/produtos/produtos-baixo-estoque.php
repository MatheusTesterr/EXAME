<?php

// Conecta-se ao banco de dados
$conn = new PDO('mysql:host=localhost;dbname=controle-estoque', 'root', '');

// Consulta os produtos com estoque baixo
$sql = "SELECT * FROM produto WHERE quantidade_estoque < estoque_minimo";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Exibe os produtos
if ($stmt->rowCount() > 0) {
  echo "<h1>Produtos com estoque baixo</h1>";
  foreach ($stmt->fetchAll() as $produto) {
    echo "<p>Nome: {$produto['nome']}</p>";
    echo "<p>Marca: {$produto['marca']}</p>";
    echo "<p>Quantidade em estoque: {$produto['quantidade_estoque']}</p>";
    echo "<p>Estoque mínimo: {$produto['estoque_minimo']}</p>";
  }
} else {
  echo "<p>Nenhum produto com estoque baixo</p>";
}

?>
