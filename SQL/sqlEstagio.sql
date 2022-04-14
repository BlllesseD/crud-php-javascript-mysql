/* A) Obter todos os beneficiários ativos. */ 
select * from beneficiario where situacao = 'A';

/* B) Obter todos os beneficiários ativos que possuam ao menos um veículo ativo. */  

select t1.nome,
       t1.documento,
       t1.situacao
from beneficiario t1
where t1.situacao = 'A'
union all
select t2.idBeneficiario,
       t2.placa,
       t2.situacao
from veiculo t2
where t2.situacao = 'A';


/* C) Obter todos os beneficiários que tenha mais de 40 anos. */  

select *, curdate(), timestampdiff(YEAR, dataNascimento, curdate()) AS Idade from beneficiario where (timestampdiff(YEAR, dataNascimento, curdate())) >= 40 
order by idade;

/* D) Obter todos os beneficiários que possuam veículos com mais de dois produtos ativos. */  

SELECT idVeiculo, idProduto, count(*) as 'Produtos Ativos' FROM produtoVeiculo GROUP BY idVeiculo HAVING count(*) > 1;

select * from produtoVeiculo;
select * from produto;
select * from veiculo;

select beneficiario.nome, veiculo.idBeneficiario, produtoVeiculo.idVeiculo, produto.nome
from beneficiario
inner join veiculo on beneficiario.id = veiculo.idBeneficiario
right join produtoVeiculo on veiculo.idBeneficiario = produtoVeiculo.idVeiculo
inner join produto on produtoVeiculo.idProduto = produto.id
where (select count(*) as 'Produtos Ativos' FROM produtoVeiculo GROUP BY idVeiculo HAVING count(*) > 2);

/* E) Cadastrar um beneficiário. */  

insert into beneficiario ( nome, documento, dataNascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone )
values ('Jean Guilherme', 154234578, 19920415, 'M', 'A', 'Rua Poatá', 234, 'Eldorado', 'Contagem', 'MG', 'creaty159753@gmail.com', 3198556412);


/* F) Cadastrar um veículo ativo para o beneficiário criado no passo anterior e vincular a ele o produto "ASSISTENCIA 24 HORAS. */  

insert into veiculo ( idBeneficiario, placa, chassi, renavam, modelo, montadora, anoFabricacao, anoModelo, situacao )
values ( 53, 1546897, '221998136623b0ze4', 12054896321, 'Uno', 'FIAT', 1991, 1991, 'A' );

insert into produtoVeiculo ( idProduto, idVeiculo )
values ( 3, 41 );

/* G) Inativar todos os veículos de ano de fabricação menor do que 2001. */  

SET SQL_SAFE_UPDATES = 0;

update veiculo
set situacao = 'I'
where anoFabricacao < 2001;

/* Desafio: Exclua os registros da tabela produtoVeiculo cujo o veículo ou produto estejam inativos. */  

select * from produtoVeiculo;
select * from veiculo;

select veiculo.id, produtoVeiculo.idVeiculo
from veiculo
inner join produtoVeiculo on produtoVeiculo.idVeiculo = veiculo.id
where situacao = 'I';