create table Uzytkownik (
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50) NOT NULL,
	haslo VARCHAR(255) NOT NULL,
	imie VARCHAR(50),
	nazwisko VARCHAR(50),
	email VARCHAR(50));
alter table uzytkownik add COLUMN usuniety BOOLEAN DEFAULT false NOT NULL;
alter table zamowienie add FOREIGN key (uzytkownik) REFERENCES uzytkownik(id);