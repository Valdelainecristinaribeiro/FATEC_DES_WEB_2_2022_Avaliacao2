CREATE TABLE usuario(
	id INTEGER AUTO_INCREMENT,
	nome VARCHAR(40) NOT NULL,
	senha INTEGER NOT NULL,
	CONSTRAINT pk PRIMARY KEY (id)
);

CREATE TABLE produto(
	codigo INTEGER AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	estoque INTEGER NOT NULL,
	CONSTRAINT pkp PRIMARY KEY (codigo)
);

INSERT INTO usuario VALUES(1, "Fatec", 1234);
INSERT INTO produto VALUES(147, "Refrigerante", 100);
INSERT INTO produto VALUES(148, "Salgadinho", 100);
INSERT INTO produto VALUES(149, "Bombom", 1000);
