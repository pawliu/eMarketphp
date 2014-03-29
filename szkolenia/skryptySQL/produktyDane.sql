INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (1,'Glówna',null);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (2,'Glowna2',null);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (3,'Glowna3',null);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (4,'Podkat11',1);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (5,'Podkat12',1);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (6,'Podkat13',1);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (7,'Podkat21',2);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (8,'Podkat2',2);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (9,'Podkat23',2);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (10,'Podkat31',3);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (11,'Podkat32',3);
INSERT INTO kategoria (id,nazwa,idRodzica) VALUES (12,'Podkat321',11);


INSERT INTO produkt (id,nazwa,opis,cena,idProducenta,idKategorii) VALUES (1,'nic','opis niczego',50.0,null,1);
INSERT INTO produkt (id,nazwa,opis,cena,idProducenta,idKategorii) VALUES (2,'Coœ','opis czegoœ',24.5,null,1);
INSERT INTO produkt (id,nazwa,opis,cena,idProducenta,idKategorii) VALUES (3,'Œwiate³ko na kommbajnie','opis niczego',500.0,null,4);
INSERT INTO produkt (id,nazwa,opis,cena,idProducenta,idKategorii) VALUES (4,'GPS do czo³gu','opis czegoœ',10.5,null,4);


INSERT INTO uzytkownik (id,nazwa,haslo,imie,nazwisko,email,usuniety) VALUES (1,'user','pass','Jan','Nowak','niziutki@gmail.com',0);
INSERT INTO uzytkownik (id,nazwa,haslo,imie,nazwisko,email,usuniety) VALUES (2,'user2','pass','Adam','Kowalski','email@as.pl',0);

INSERT INTO zamowienie (id,uzytkownik,status,adresWysylki,komentarz,data) VALUES (60,1,'NOWE','Adres','Komentarz',{ts '2014-02-01 22:02:20.'});
INSERT INTO zamowienie (id,uzytkownik,status,adresWysylki,komentarz,data) VALUES (61,1,'NOWE','Adres2','',{ts '2014-02-01 22:02:54.'});

INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (125,1,60,3);
INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (126,2,60,6);
INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (127,3,60,1);
INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (128,1,61,3);
INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (129,2,61,6);
INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (130,3,61,1);
INSERT INTO elzamowienia (id,produktID,zamowienieID,ilosc) VALUES (131,4,61,1);


