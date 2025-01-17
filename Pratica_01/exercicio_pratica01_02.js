console.log('Desconto de produto');
console.log();
let valor_produto = prompt('Informe o valor do produto: ');
let desconto =  prompt('Informe o valor do percentual do desconto: ');
desconto = 1- (desconto / 100)
let valor_com_desconto = desconto * valor_produto
console.log("Valor promocional: " + valor_com_desconto.toFixed(2))
console.log( " ");
