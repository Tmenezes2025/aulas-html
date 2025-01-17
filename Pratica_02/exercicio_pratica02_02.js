let altura = parseFloat(prompt("Digite a altura em metros (ex: 1.75):"));
let sexo = prompt("Digite o sexo (masculino ou feminino):").toLowerCase();

if (sexo === "masculino") {
    let pesoIdeal = (72.2 * altura) - 58;
    alert("O peso ideal é " + pesoIdeal + " kg.");
} else if (sexo === "feminino") {
    let pesoIdeal = (62.1 * altura) - 44.7;
    alert("O peso ideal é " + pesoIdeal + " kg.");
} else {
    alert("Sexo inválido. Use 'masculino' ou 'feminino'.");
}
