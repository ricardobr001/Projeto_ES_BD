-- BUSCA FUNCIONARIO POR NOME
SELECT codigo_funcionario, nome, cpf, terminal, periodo, estado, cidade FROM funcionario WHERE nome LIKE "%xxx%" ORDER BY nome

-- BUSCA FUNCIONARIO POR CPF
SELECT codigo_funcionario, nome, cpf, terminal, periodo, estado, cidade FROM funcionario WHERE cpf LIKE "xxx"

-- BUSCA FUNCIONARIO POR CARGO
SELECT codigo_funcionario, nome, cpf, terminal, periodo, estado, cidade FROM funcionario WHERE cargo LIKE "xxx" ORDER BY nome

-- BUSCA FUNCIONARIO POR TERMINAL
SELECT codigo_funcionario, nome, cpf, terminal, periodo, estado, cidade FROM funcionario WHERE terminal LIKE "xxx" ORDER BY nome

-- BUSCA FUNCIONARIO POR CIDADE
SELECT codigo_funcionario, nome, cpf, terminal, periodo, estado, cidade FROM funcionario WHERE cidade LIKE "%xxx%" ORDER BY cidade




-- FUNFANDO

-- RELATORIO DA QUANTIDADE DE FUNCIONARIOS ATIVOS EM CADA CARGO DADO UM PERIODO
SELECT cargo, periodo, COUNT(*) AS quantidade FROM funcionario WHERE funcionario.situacao LIKE "ATIVO" AND funcionario.periodo = "xxx" ORDER BY nome




-- NAO TA FUNFANDO

-- RELATORIO DA QUANTIDADE DE FUNCIONARIOS ATIVOS EM CADA TERMINAL DADA UMA FUNCAO
SELECT f.codigo_funcionari, f.nome, COUNT(*) AS quantidade FROM funcionario f, terminal t WHERE f.situacao LIKE "ATIVO" ORDER BY f.nome


SELECT t.nome, f.codigo_funcionario, f.nome, COUNT(*) AS quantidade FROM (SELECT t.nome FROM funcionario f, terminal t GROUP BY t.nome) WHERE f.situacao LIKE "ATIVO" AND t.nome LIKE "D" ORDER BY f.nome
