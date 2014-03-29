create table Kategoria (
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50),
	idRodzica int	
);
alter table Kategoria Add FOREIGN KEY (idRodzica) REFERENCES Kategoria(id) ;
create table Producent(
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50)
);
create table Produkt (
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50),
	opis TEXT,
	cena DOUBLE,
	idProducenta int,
	idKategorii int NOT NULL,
	FOREIGN KEY (idKategorii) REFERENCES kategoria(id),
	FOREIGN KEY (idProducenta) REFERENCES producent(id)
);

create table Zamowienie(
	id int PRIMARY KEY AUTO_INCREMENT,
	uzytkownik int,
	status varchar(10),
	adresWysylki varchar(255),
	komentarz varchar(255)
	data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
);


create table ElZamowienia(
	id int PRIMARY KEY AUTO_INCREMENT,
	produktID int not null, 
	zamowienieID int not null, 
	ilosc int not null default 0,
	FOREIGN KEY (produktId) REFERENCES produkt(id),
	FOREIGN KEY (zamowienieId) REFERENCES zamowienie(id)
);


--tabele nieuzywane
create table Cena(
	id int PRIMARY KEY ,
	vartosc DOUBLE,	
	FOREIGN KEY (id) REFERENCES produkt(id)
)

create table StanMagazynowy (
	id int PRIMARY KEY ,
	ilosc int,	
	FOREIGN KEY (id) REFERENCES produkt(id)
)