
-- Exercicio Questão 1 Escreva uma consulta para encontrar todos os funcionários que têm um salário acima da média salarial da empresa.

SELECT *
FROM funcionarios
WHERE salario > (SELECT AVG(salario) FROM funcionarios);

-- Exercicio Questão 2 Calcule o total de vendas por região e ordene o resultado do maior para o menor.
SELECT regiao, SUM(vd.valor_total) AS total_vendas
FROM vendas v
JOIN vendas_detalhes vd ON v.id = vd.venda_id
GROUP BY v.regiao
ORDER BY total_vendas DESC;

-- exercicio 3 Encontre todos os funcionários que têm um salário acima da média salarial de seu departamento.

SELECT f.id, f.nome, f.salario, f.departamento
FROM funcionarios f
WHERE f.salario > (
    SELECT AVG(f2.salario)
    FROM funcionarios f2
    WHERE f2.departamento = f.departamento
);

-- exercicio 4 Crie uma view chamada vendas_por_funcionario que mostre o total de vendas realizadas por cada funcionário.

CREATE VIEW vendas_por_funcionario AS
SELECT v.funcionario_id, f.nome AS funcionario, SUM(vd.valor_total) AS total_vendas
FROM vendas v
JOIN funcionarios f ON v.funcionario_id = f.id
JOIN vendas_detalhes vd ON v.id = vd.venda_id
GROUP BY v.funcionario_id;

--exercicio 5 Escreva uma consulta que retorne o nome do funcionário, o departamento e o total de vendas realizadas por ele. Use um JOIN entre as tabelas funcionarios e vendas.SELECT f.nome AS funcionario, f.departamento, SUM(vd.valor_total) AS total_vendas
FROM funcionarios f
JOIN vendas v ON f.id = v.funcionario_id
JOIN vendas_detalhes vd ON v.id = vd.venda_id
GROUP BY f.id;
