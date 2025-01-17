
let numero = prompt("Digite um número para ver a tabuada:");


numero = parseInt(numero);


if (isNaN(numero)) {
    console.log("Por favor, digite um número válido.");
} else {
   
    for (let i = 1; i <= 10; i++) {
        let resultado = numero * i;
        console.log(`${numero} x ${i} = ${resultado}`);
    }
}
