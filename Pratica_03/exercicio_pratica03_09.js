

function calcularDivisaoConta(valorConta, numeroPessoas) {

    const taxaServico = valorConta * 0.1;
    
    const totalComTaxa = valorConta + taxaServico;
    
    const valorPorPessoa = totalComTaxa / numeroPessoas;


    console.log(`Valor da conta: R$ ${valorConta.toFixed(2)}`);
    console.log(`Taxa de serviço (10%): R$ ${taxaServico.toFixed(2)}`);
    console.log(`Total com taxa: R$ ${totalComTaxa.toFixed(2)}`);
    console.log(`Valor por pessoa: R$ ${valorPorPessoa.toFixed(2)}`);
}




// Forma mais simplificada

const valorConta = 150; 
const numeroPessoas = 5; 


const valorPorPessoa = (valorConta * 1.1) / numeroPessoas;


console.log(`Cada pessoa deve pagar: R$ ${valorPorPessoa.toFixed(2)}`);