# tsi-php-22021
 Repositorio para as atividades de LS 

--1 - Selecione: nome, sobrenome, cidade e estado de todos os autores que não são da Califórnia.
-- nome, sobrenome, cidade e estado <> California


-- PRIMEIRO EU SELECIONEI OS DADOS, APÓS ISSO EU PROCUREI EM AUTHORS
--DEPOIS autores que não são da Califórnia.
SELECT 
	au_fname, 
	address,
	city,
	state 
FROM authors
WHERE STATE <> 'CA'

SELECT 
	au_fname, 
	address,
	city,
	state 
FROM authors
WHERE NOT STATE = 'CA' 

--2 - Selecione todos os dados de todos os autores que vivem em uma cidade que começa com S.

SELECT *
	FROM authors
	WHERE city LIKE 'S%'
--SELECIONAR CIDADE COM 'S' 

--3 - Selecione o titulo, preço e tipo de todos os livros com preço entre 12 e 19.
--TITULO, PREÇO, LIVROS, 
SELECT 
	title,
	price
	FROM titles
--WHERE price >= 12 AND PRICE <= 19
WHERE PRICE BETWEEN 12 AND 19
