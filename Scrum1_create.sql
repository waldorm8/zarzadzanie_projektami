-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-03-12 22:11:09.776

-- tables
-- Table: Uzytkownicy
CREATE TABLE Uzytkownicy (
    id_uzytkownika int NOT NULL AUTO_INCREMENT,
    login varchar(50) NOT NULL,
    haslo varchar(50) NOT NULL,
    imie varchar(50) NOT NULL,
    nazwisko varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    CONSTRAINT id_uzytkownika PRIMARY KEY (id_uzytkownika)
);

-- End of file.

