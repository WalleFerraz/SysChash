/* Tabela vendedor */
INSERT INTO vendedor VALUES ('nomven', 'logven', 'senven');
SELECT * FROM vendedor WHERE logven='adm' AND senven='adm';

/*Tabela produto*/
INSERT INTO produto VALUES ('despro', 'fabpro', 'valunit', 'estoq', 'setor');
SELECT * FROM produto WHERE despro like 't%';

/*Tabela venda - Registro venda*/
INSERT INTO venda VALUES ('idven', 'nomcli', 'cpfcli', 'dataven', 'totven', 'itenven', 'pagam');
SELECT MAX(idvenda) FROM venda;
INSERT INTO item VALUES ('idvenda','idpro','qtd','subtotal');
UPDATE produto SET estoq = 'qtd' WHERE idpro = '1';

/*Resumo da venda*/
SELECT * FROM venda v, vendedor ven, item i, produto p WHERE v.idven = ven.idven AND v.idvenda = i.idvenda AND i.idpro = p.idpro AND v.idvenda = 1;

