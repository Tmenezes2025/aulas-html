
let numero = parseInt(prompt("Digite um número de 1 a 7 para determinar o dia da semana:"));


const dias = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];


if (numero >= 1 && numero <= 7) {
  alert(dias[numero - 1]); 
} else {
  alert("Número inválido! Por favor, insira um número entre 1 e 7.");
}

