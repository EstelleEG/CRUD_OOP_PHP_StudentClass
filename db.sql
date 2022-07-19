CREATE TABLE Student
(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(155) NOT NULL,
    prenom VARCHAR(155) NOT NULL
);


INSERT INTO Student (nom,prenom)
VALUES ('Bolut','Jean'), ('Zali','Anais'), ('Coussin','Alexandre');