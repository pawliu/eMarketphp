create table PlikGraficzny(
	id int PRIMARY KEY AUTO_INCREMENT,
	lokalizacja varchar(250) not null,
	nazwa varchar(50),
	opis varchar(250)
);

create table Grupa(
	id int PRIMARY KEY AUTO_INCREMENT,
	nazwa varchar(50)
);

create table PlikWGrupie(
	idPliku int not null,
	idGrupy int not null
);
	
alter table PlikWGrupie Add FOREIGN KEY (idPliku) REFERENCES PlikGraficzny(id) ;
alter table PlikWGrupie Add FOREIGN KEY (idGrupy) REFERENCES Grupa(id) ;
alter table plikwgrupie Add CONSTRAINT UNIQUE (idPliku,idGrupy);


INSERT INTO plikgraficzny (lokalizacja,nazwa,opis) VALUES ('pictures/logo.gif','logo.gif','logo.gif');
INSERT INTO plikgraficzny (lokalizacja,nazwa,opis) VALUES ('pictures/logo.gif','logo.gif','logo.gif');
INSERT INTO grupa (nazwa) values ('grupa1');
INSERT INTO grupa (nazwa) values ('grupa2');
insert into plikwgrupie values(2,2);

SELECT p.lokalizacja, p.nazwa , g.nazwa as NazwaGrupy FROM plikgraficzny p
	 join plikwgrupie pg on pg.idPliku=p.id
	 join grupa g on g.id=pg.idGrupy