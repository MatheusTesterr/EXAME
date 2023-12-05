function carregarProdutos() {
    // Conecta-se ao servidor
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'produtos-baixo-estoque.php');
    xhr.onload = function() {
      // Se a solicitação foi bem-sucedida,
      // carrega os produtos da resposta
      if (xhr.status === 200) {
        const produtos = JSON.parse(xhr.responseText);
        const tabela = document.querySelector('.produtos');
        produtos.forEach(produto => {
          const linha = document.createElement('tr');
          linha.innerHTML = `
            <td>${produto.nome}</td>
            <td>${produto.marca}</td>
            <td>${produto.quantidade_estoque}</td>
            <td>${produto.estoque_minimo}</td>
          `;
          tabela.appendChild(linha);
        });
      }
    };
    xhr.send();
  }
  
  // Chama a função para carregar os produtos
  carregarProdutos();
  