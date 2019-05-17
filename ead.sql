/*
CREATE DATABASE ead;

USE ead;

CREATE TABLE cursos
(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50) not null,
imagem VARCHAR(37) not null,
descricao TEXT
);


CREATE TABLE alunos 
(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) not null,
email VARCHAR(100) not null,
senha  VARCHAR(32)
);

CREATE TABLE aluno_curso
(
id INT PRIMARY KEY AUTO_INCREMENT,
id_curso INT not null,
id_aluno INT not null  
);


CREATE TABLE modulos
(
id INT PRIMARY KEY AUTO_INCREMENT,
id_curso INT not null,
nome VARCHAR(50) not null

);


CREATE TABLE aulas
(
id INT PRIMARY KEY AUTO_INCREMENT,
id_modulo INT not null,
id_curso INT not null,
ordem INT not null,
tipo VARCHAR(20) not null
);



CREATE TABLE videos
(
id INT PRIMARY KEY AUTO_INCREMENT,
id_aula INT not null,
nome VARCHAR(50) not null,
descricao TEXT,
url VARCHAR(100) 
);


CREATE TABLE questionarios
(
id INT PRIMARY KEY AUTO_INCREMENT,
id_aula INT not null,
pergunta VARCHAR(100),
opcao1 VARCHAR(100),
opcao2 VARCHAR(100),
opcao3 VARCHAR(100),
opcao4 VARCHAR(100),
resposta TINYINT NOT NULL
);



CREATE TABLE historico
(
id INT PRIMARY KEY AUTO_INCREMENT,
data_viewed DATETIME not null,
id_aluno INT not null,
id_aula INT not null
);



CREATE TABLE duvidas
(
id INT AUTO_INCREMENT PRIMARY KEY,
data_duvida DATETIME NOT NULL,
respondida TINYINT(1),
duvida TEXT,
id_aluno INT
);

SELECT * FROM alunos;


INSERT INTO alunos (nome, email, senha ) VALUES ("joao", "joao@gmail.com", "698dc19d489c4e4db73e28a713eab07b"); senha = testecursos


SELECT * FROM cursos;

INSERT INTO cursos (nome, imagem, descricao ) VALUES ("PHP", "php.png", "Curso de PHP");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("HTML", "html.png", "Curso de HTML");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("JAVASCRIPT", "javascript.png", "Curso de JAVASCRIPT");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("CSS", "css.png", "Curso de CSS");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("Angular.js", "angular.png", "Curso de Angular");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("jQuery", "jquery.png", "Curso de jQuery");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("Swift", "swift.png", "Curso de Swift");
INSERT INTO cursos (nome, imagem, descricao ) VALUES ("Android", "android.png", "Curso de Android");


SELECT * FROM aluno_curso;

INSERT INTO aluno_curso (id_curso, id_aluno) VALUES ('1', '1');
INSERT INTO aluno_curso (id_curso, id_aluno) VALUES ('3', '1');
INSERT INTO aluno_curso (id_curso, id_aluno) VALUES ('7', '1');



SELECT * FROM modulos;

INSERT INTO modulos (id_curso, nome)VALUES (1, 'Básico');
INSERT INTO modulos (id_curso, nome)VALUES (1, 'Intermediário');
INSERT INTO modulos (id_curso, nome)VALUES (1, 'Avançado');



SELECT * FROM aulas;

INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (1, 1, 1, 'video');
INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (1, 1, 2, 'video');
INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (2, 1, 1, 'video');
INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (2, 1, 2, 'poll');
INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (3, 1, 1, 'video');
INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (3, 1, 2, 'video');
INSERT INTO aulas (id_modulo, id_curso, ordem, tipo ) VALUES (3, 1, 3, 'video');


SELECT * FROM videos;

INSERT INTO videos (id_aula, nome) VALUES (1, 'Aula 1');
INSERT INTO videos (id_aula, nome) VALUES (2, 'Aula 2');
INSERT INTO videos (id_aula, nome) VALUES (3, 'Aula 3');
INSERT INTO videos (id_aula, nome) VALUES (5, 'Aula 4');
INSERT INTO videos (id_aula, nome) VALUES (6, 'Aula 5');
INSERT INTO videos (id_aula, nome) VALUES (7, 'Aula 6');


SELECT * FROM questionarios;

INSERT INTO questionarios (id_aula, pergunta, opcao1, opcao2, opcao3, opcao4, resposta) VALUES ( 4, 'Qual a pergunta?', 'Op1', 'Op2', 'Op3', 'Op4', 1);



SELECT * FROM duvidas;

INSERT INTO duvidas SET data_duvida = NOW(), duvida = 'Duvida de teste', id_aluno = '1';



UPDATE videos SET url = "331805800";

-------------------------*/

SELECT * FROM alunos;

