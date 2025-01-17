let a = parseInt(prompt ("Digite o primeiro numero: "))
let b = parseInt(prompt ("Digite o segundo  numero: "))
let operacao = prompt("Digite a operacao a realizar (+,-,* ou /):" )
let resultado = 0

if (operacao == "+"){
    resultado = a + b
} else if (operacao == "-"){
    resultado = a - b
}else if (operacao == "*"){
    resultado = a * b
}else if (operacao == "/"){
    resultado = a / b
}else {
    document.write ("operacao inválida!")
    resultado = 0
}

document.write (`O resultado da operacao é : ${a}${operacao}${b} = ${resultado}`)