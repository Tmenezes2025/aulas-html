

let peso = prompt('Informe seu peso: ' );
let altura = prompt('Informe sua altura em centimetros: ');
altura = altura / 100;
let imc =0;
imc = peso / (altura * altura);

console.log('Valor do IMC: '+ imc.toFixed(2));
console.log(``);
