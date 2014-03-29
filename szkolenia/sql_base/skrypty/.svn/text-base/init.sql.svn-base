create table Kategoria (
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50),
	idRodzica int	
);
alter table Kategoria Add FOREIGN KEY (idRodzica) REFERENCES Kategoria(id) ;
create table Produkt (
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50),
	idKategorii int NOT NULL,
	FOREIGN KEY (idKategorii) REFERENCES kategoria(id)
)

create table Producent(
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa VARCHAR(50)
)

create table OpisProd (
	id int PRIMARY KEY ,
	opis TEXT,
	idProducenta int,
	FOREIGN KEY (id) REFERENCES produkt(id),
	FOREIGN KEY (idProducenta) REFERENCES producent(id)
)

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