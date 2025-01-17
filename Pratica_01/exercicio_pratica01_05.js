
let Salario_bruto = prompt('Digite o salario: ')
let INSS = 0.10
let IRRF = 0.05
let Deducao_INSS = Salario_bruto * INSS
let Deducao_IRRF = Salario_bruto * IRRF
console.log('inss '+ INSS)
console.log(IRRF)
console.log(Deducao_INSS)
console.log(Deducao_IRRF)


let Salario_Liquido = (Salario_bruto - Deducao_INSS - Deducao_IRRF) 

console.log ( "O valor do Salario e: " + (Salario_Liquido))
