function calcular(numero1, numero2, operacao) {
    const operacoes = {
        adicao: { resultado: numero1 + numero2, tipo: "Adição" },
        subtracao: { resultado: numero1 - numero2, tipo: "Subtração" },
        multiplicacao: { resultado: numero1 * numero2, tipo: "Multiplicação" },
        divisao: numero2 !== 0 
            ? { resultado: numero1 / numero2, tipo: "Divisão" } 
            : "Erro: Divisão por zero não é permitida."
    };

    return operacoes[operacao] || "Operação inválida. Escolha entre: adicao, subtracao, multiplicacao, divisao.";
}


console.log(calcular(10, 5, "adicao"));        
console.log(calcular(10, 5, "subtracao"));    
console.log(calcular(10, 5, "multiplicacao"));
console.log(calcular(10, 5, "divisao"));     
console.log(calcular(10, 0, "divisao"));      
console.log(calcular(10, 5, "invalida"));     
