let nome = prompt("Digite o seu nome: ");
let sexo = prompt("Digite o sexo (masculino ou feminino):");
let valor_compra = 1000
const homen_desc = 5, mulher_desc = 15 

if (sexo === "masculino") {
     let compra_H = valor_compra * (1 - (homen_desc / 100))
    alert("O valor da compra com desconto é " + compra_H );
} else if (sexo === "feminino") {
    let compra_F = valor_compra * (1 - (mulher_desc / 100))
    alert("O valor da compra com desconto é " + compra_F );
} else {
    alert("Sexo inválido. Use 'masculino' ou 'feminino'.");
}


