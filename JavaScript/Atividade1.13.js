const carrinho = {
    itens: [
        { nome: "Maçã", quantidade: 3, precoUnitario: 2.0 },
        { nome: "Banana", quantidade: 2, precoUnitario: 1.5 }
    ]
};

console.log("Carrinho inicial:", carrinho);

function calcularTotal(carrinho) {
    let total = 0;
    for (let item of carrinho.itens) {
        total += item.quantidade * item.precoUnitario;
    }
    return total;
}

console.log("Total inicial:", calcularTotal(carrinho)); 


function adicionarItem(carrinho, nome, quantidade, precoUnitario) {
    let itemExiste = false;
    for (let i = 0; i < carrinho.itens.length; i++) {
        if (carrinho.itens[i].nome === nome) {
            carrinho.itens[i].quantidade += quantidade; 
            itemExiste = true;
            break;
        }
    }
    if (!itemExiste) {
     
        carrinho.itens.push({ nome, quantidade, precoUnitario });
    }
}

adicionarItem(carrinho, "Laranja", 5, 1.2);
console.log("Carrinho após adicionar Laranja:", carrinho);
console.log("Total após adicionar Laranja:", calcularTotal(carrinho));


function removerItem(carrinho, nome) {
    const index = carrinho.itens.findIndex(item => item.nome === nome);
    if (index !== -1) {
        carrinho.itens.splice(index, 1); 
    } else {
        console.log(`Item "${nome}" não encontrado no carrinho.`);
    }
}

removerItem(carrinho, "Banana");
console.log("Carrinho após remover Banana:", carrinho);
console.log("Total após remover Banana:", calcularTotal(carrinho));
