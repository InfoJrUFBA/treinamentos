CREATE TABLE infojuniores
(
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  cargo varchar(255),
  idade int,
  PRIMARY KEY (id)
);
                        	
INSERT INTO infojuniores
	(`nome`, `cargo`, `idade`)
VALUES
	('Iago', 'DGP', 12),
    ('Bruno', 'DPRJ', 20),
    ('Adeilson', 'DPRE', 21),
    ('Karen', 'DAF', 18),
	('JP', 'Feirense', 20),
    ('Jeff', 'mito', 18)


