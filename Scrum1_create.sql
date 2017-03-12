-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-03-12 22:03:04.951

-- tables
-- Table: Uzytkownicy
CREATE TABLE Uzytkownicy (
    id_uzytkownika int NOT NULL,
    login varchar(50) NOT NULL,
    haslo varchar(50) NOT NULL,
    imie varchar(50) NOT NULL,
    nazwisko varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    CONSTRAINT id_uzytkownika PRIMARY KEY (id_uzytkownika)
);

-- End of file.

