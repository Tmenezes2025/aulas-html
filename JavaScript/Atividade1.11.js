
const filmes = [
    { titulo: "Inception", ano: 2010, genero: "Ficção Científica", avaliacao: 8.8 },
    { titulo: "Titanic", ano: 1998, genero: "Romance", avaliacao: 7.8 },
    { titulo: "Vingadores", ano: 2012, genero: "Ação", avaliacao: 8.0 },
    { titulo: "Avatar", ano: 2009, genero: "Ficção Científica", avaliacao: 7.8 },
    { titulo: "O Senhor dos Anéis", ano: 2001, genero: "Fantasia", avaliacao: 9.0 }
];

function buscarFilmesPorGenero(genero) {
    return filmes.filter(filme => filme.genero.toLowerCase() === genero.toLowerCase());
}

function filmesPorAvaliacao(avaliacaoMinima) {
    return filmes.filter(filme => filme.avaliacao > avaliacaoMinima);
}


function adicionarFilme(titulo, ano, genero, avaliacao) {
    filmes.push({ titulo, ano, genero, avaliacao });
    console.log(`Filme "${titulo}" adicionado ao catálogo.`);
}

console.log("Filmes de Ficção Científica:");
console.log(buscarFilmesPorGenero("Ficção Científica"));


console.log("\nFilmes com avaliação maior que 8.0:");
console.log(filmesPorAvaliacao(8.0));


adicionarFilme("Matrix", 1999, "Ficção Científica", 8.7);
console.log("\nCatálogo atualizado:");
console.log(filmes);
