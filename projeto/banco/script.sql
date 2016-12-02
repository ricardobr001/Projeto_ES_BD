--CREATE DATABASE es/bd;

CREATE TABLE funcionario
(
  codigo_funcionario    bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  nome                  varchar(100)        NOT NULL,
  cpf                   varchar(14)         NOT NULL,
  data_nascimento       varchar(10)         NOT NULL,
  telefone              varchar(13)         NOT NULL,
  situacao              varchar(7) DEFAULT  NULL,
  motivo                text,
  cargo                 varchar(13)         NOT NULL,
  periodo               varchar(10)         NOT NULL,
  terminal              varchar(1)          NOT NULL,
  setor                 varchar(20)         NOT NULL,
  cidade                varchar(100)        NOT NULL,
  logradouro            varchar(200)        NOT NULL,
  bairro                varchar(50)         NOT NULL,
  numero                int(11)             NOT NULL,
  complemento           int(11) DEFAULT     NULL,
  cep                   varchar(9)          NOT NULL,
  cnpj_empresa          varchar(18) DEFAULT NULL,
  estado                varchar(100)        NOT NULL
);

CREATE TABLE terminal
(
  cod_terminal      int(11)      NOT NULL,
  localizacao       varchar(300) NOT NULL,
  nome              varchar(5)   NOT NULL
);

CREATE TABLE empresa
(
  cnpj_empresa      varchar(18) NOT NULL,
  nome_fantasia     varchar(30) NOT NULL,
  razao_social      varchar(50) NOT NULL
);

CREATE TABLE contrato
(
  data_entrada          varchar(10) NOT NULL,
  salario               int(11)     NOT NULL,
  qtd_horas_trabalhadas int(11)     NOT NULL
);

---------------------------------------------------------------------------------------------------------------------------

ALTER TABLE funcionario
    MODIFY codigo_funcionario bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=562306;

ALTER TABLE funcionario
    ADD CONSTRAINT funcionario_ibfk_1 FOREIGN KEY (cnpj_empresa) REFERENCES empresa (cnpj_empresa);

---------------------------------------------------------------------------------------------------------------------------

-- INSERCAO EMPRESA

INSERT INTO empresa VALUES ('00.000.000/0000-00', 'aeroporto', 'aeroporto funcionarios');
INSERT INTO empresa VALUES ('22.083.151/0001-93', 'Franca', 'Franca lixo LTDA');
INSERT INTO empresa VALUES ('73.242.805/0001-15', 'Samuray Seguranca', 'Samuray Seguranca LTDA');
INSERT INTO empresa VALUES ('83.763.860/0001-04', 'Salmeron', 'Salmeron empresas LTDA');


-- INSERCAO FUNCIONARIO

INSERT INTO funcionario VALUES (562268, 'Luciane da Silva Lopes', '430.906.838-30', '1993-11-30', '(11)46162-347', 'ATIVO', '', 'COMUM', 'Madrugada', 'E', 'financas', 'Cotia', 'Rua Kumamoto', 'Nakamura Park', 544, 0, '06716-762', '00.000.000/0000-00', '');
INSERT INTO funcionario VALUES (562269, 'Isabela Salmeron Boschi', '439.349.228-56', '1995-12-16', '(11)3216-9874', 'ATIVO', '', 'COMUM', 'Noite', 'D', 'financas', 'sorocaba', 'Isso e um teste', 'bairro teste', 346, 0, '12345-54', '00.000.000/0000-00', '');
INSERT INTO funcionario VALUES (562272, 'Renan Rossignatti de Franca', '123.456.789-51', '1993-07-13', '(98)1123-4321', 'ATIVO', '', 'TERCEIRIZADO', 'Tarde', 'D', 'InformaÃ§Ãµes', 'Sorocaba', 'Rodovia joÃ£o leme dos santos', 'UFSCAR', 1, 65, '36548-962', '73.242.805/0001-15', '');
INSERT INTO funcionario VALUES (562273, 'JoÃ£ozinho', '123.456.789-51', '1998-12-11', '(15)9876-9863', 'ATIVO', '', 'COMUM', 'Manha', 'A', 'Financeiro', 'Sorocaba', 'Rua Ufscar', 'Itinga', 354, 0, '12345-000', '00.000.000/0000-00', '');
INSERT INTO funcionario VALUES (562279, 'Patricia Dias da Silva Lopes', '092.505.128-48', '1963-09-08', '(11)46162-347', 'ATIVO', '', 'GERENTE', 'Manha', 'A', 'Financeiro', 'Cotia', 'Rua Kumamoto', 'Nakamura Park', 544, 0, '06716-762', '00.000.000/0000-00', 'SÃ£o Paulo');
INSERT INTO funcionario VALUES (562305, 'Valdir Lopes', '034.371.648-80', '1960-11-10', '(11)46162-347', 'ATIVO', '', 'TERCEIRIZADO', 'Manha', 'A', 'Financeiro', 'Cotia', 'Rua Kumamoto', 'Nakamura Park', 544, 0, '06716-762', '83.763.860/0001-04', 'SÃ£o Paulo');
