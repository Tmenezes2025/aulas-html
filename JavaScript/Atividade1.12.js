const Biblioteca = {
    livros: [
        { titulo: "1984", autor: "George Orwell", disponivel: true },
        { titulo: "Dom Casmurro", autor: "Machado de Assis", disponivel: false },
        { titulo: "O Hobbit", autor: "J.R.R. Tolkien", disponivel: true },
    ],

    
    emprestarLivro: function(titulo) {
        const livro = this.livros.find(livro => livro.titulo.toLowerCase() === titulo.toLowerCase());

        if (livro) {
            if (livro.disponivel) {
                livro.disponivel = false;
                console.log(`O livro "${titulo}" foi emprestado com sucesso.`);
            } else {
                console.log(`O livro "${titulo}" não está disponível no momento.`);
            }
        } else {
            console.log(`O livro "${titulo}" não foi encontrado na biblioteca.`);
        }
    },

    
    devolverLivro: function(titulo) {
        const livro = this.livros.find(livro => livro.titulo.toLowerCase() === titulo.toLowerCase());

        if (livro) {
            if (!livro.disponivel) {
                livro.disponivel = true;
                console.log(`O livro "${titulo}" foi devolvido e agora está disponível.`);
            } else {
                console.log(`O livro "${titulo}" já está disponível na biblioteca.`);
            }
        } else {
            console.log(`O livro "${titulo}" não foi encontrado na biblioteca.`);
        }
    },

    
    listarLivrosDisponiveis: function() {
        const livrosDisponiveis = this.livros.filter(livro => livro.disponivel);
        
        if (livrosDisponiveis.length > 0) {
            console.log("Livros disponíveis na biblioteca:");
            livrosDisponiveis.forEach(livro => {
                console.log(`- ${livro.titulo} de ${livro.autor}`);
            });
        } else {
            console.log("Não há livros disponíveis no momento.");
        }
    }
};



Biblioteca.listarLivrosDisponiveis();

Biblioteca.emprestarLivro("1984");

Biblioteca.devolverLivro("1984");

Biblioteca.listarLivrosDisponiveis();

