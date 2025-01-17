
const inventario = {
    produtos: [
      { nome: "Camiseta", quantidade: 10, preco: 25.0 },
      { nome: "Calça", quantidade: 5, preco: 50.0 },
    ],
  };
  

  function adicionarProduto(nome, quantidade, preco) {
    const produtoExistente = inventario.produtos.find(produto => produto.nome === nome);
  
    if (produtoExistente) {
      produtoExistente.quantidade += quantidade;
    } else {
      inventario.produtos.push({ nome, quantidade, preco });
    }
  }
  
 
  function removerProduto(nome) {
    const index = inventario.produtos.findIndex(produto => produto.nome === nome);
  
    if (index !== -1) {
      inventario.produtos.splice(index, 1);
    } else {
      console.log(`Produto "${nome}" não encontrado no inventário.`);
    }
  }
  
 
  function listarProdutos() {
    console.log("Inventário:");
    console.log("---------------------------");
    inventario.produtos.forEach(produto => {
      console.log(`Nome: ${produto.nome}, Quantidade: ${produto.quantidade}, Preço: R$${produto.preco.toFixed(2)}`);
    });
    console.log("---------------------------");
  }
  
 
  listarProdutos();
  adicionarProduto("Camiseta", 5, 25.0);
  adicionarProduto("Boné", 20, 15.0);
  listarProdutos();
  removerProduto("Calça");
  listarProdutos();