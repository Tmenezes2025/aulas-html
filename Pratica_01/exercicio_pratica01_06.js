let nota_1 = Number(prompt('Digite a nota: '));
let nota_2 = Number(prompt('Digite a nota: '));
let nota_3 = Number(prompt('Digite a nota: '));

const peso_nota_1 = 2;
const peso_nota_2 = 3;
const peso_nota_3 = 5;

let media_ponderada = (nota_1 * peso_nota_1 + nota_2 * peso_nota_2 + nota_3 *peso_nota_3) / (peso_nota_1 + peso_nota_2 + peso_nota_3)


console.log(media_ponderada);