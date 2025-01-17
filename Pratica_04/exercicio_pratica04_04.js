
let salario = 2.000
let valor_do_emprestimo = 12000
let quantidade_de_parcelas = 6
let parcela_emp = (valor_do_emprestimo / quantidade_de_parcelas)

function percentual_parcela (parcela_empf, salariof) {
    if (parcela_empf > (0,30 * salariof)){
        return `Emprestimo negado, renda comprometida`


    } else { 
        return `Emprestimo liberado`


    }
}

console.log (`${percentual_parcela(parcela_emp, salario)}`)
