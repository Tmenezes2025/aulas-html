const alunos = {
"João":[8,9,7],
"Maria":[10,6,8],
"Carlos": [5,7,8]

}

function calcularMedia(notas) {
    const soma = notas.reduce((acumulador, nota) => acumulador + nota, 0);
    return soma / notas.length;
}

for (const [nome, notas] of Object.entries(alunos)) {
    console.log(`Média de ${nome}: ${calcularMedia(notas).toFixed(2)}`);
}

function adicionarNota(alunos, nome, novaNota) {
    if (alunos.hasOwnProperty(nome)) {
        alunos[nome].push(novaNota);
        console.log(`Nota ${novaNota} adicionada para ${nome}.`);
    } else {
        console.log(`Aluno ${nome} não encontrado.`);
    }
}

adicionarNota(alunos, "Maria", 10.0); 
adicionarNota(alunos, "Carlos", 9.5); 
adicionarNota(alunos, "João", 9.0); 

console.log(alunos);

function listarMedias(alunos) {
    for (const [nome, notas] of Object.entries(alunos)) {
        const media = calcularMedia(notas).toFixed(2);
        console.log(`Aluno: ${nome}, Média: ${media}`);
    }
}
