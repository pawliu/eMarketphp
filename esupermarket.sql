-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 06 Kwi 2014, 11:52
-- Wersja serwera: 5.5.32
-- Wersja PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `esupermarket`
--
CREATE DATABASE IF NOT EXISTS `esupermarket` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `esupermarket`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dostawcy`
--

CREATE TABLE IF NOT EXISTS `dostawcy` (
  `iddostawcy` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`iddostawcy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `dostawcy`
--

INSERT INTO `dostawcy` (`iddostawcy`, `imie`, `nazwisko`, `password`) VALUES
(1, 'Jan', 'Dostawca', 'dostawca');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `godzinydostawy`
--

CREATE TABLE IF NOT EXISTS `godzinydostawy` (
  `idgodziny` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `godzina` time NOT NULL,
  PRIMARY KEY (`idgodziny`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=34 ;

--
-- Zrzut danych tabeli `godzinydostawy`
--

INSERT INTO `godzinydostawy` (`idgodziny`, `godzina`) VALUES
(0, '00:00:00'),
(1, '07:00:00'),
(2, '07:30:00'),
(3, '08:00:00'),
(4, '08:30:00'),
(5, '09:00:00'),
(6, '09:30:00'),
(7, '10:00:00'),
(8, '10:30:00'),
(9, '11:00:00'),
(10, '11:30:00'),
(11, '12:00:00'),
(12, '12:30:00'),
(13, '13:00:00'),
(14, '13:30:00'),
(15, '14:00:00'),
(16, '14:30:00'),
(17, '15:00:00'),
(18, '15:30:00'),
(19, '16:00:00'),
(20, '16:30:00'),
(21, '17:00:00'),
(22, '17:30:00'),
(23, '18:00:00'),
(24, '18:30:00'),
(25, '19:00:00'),
(26, '19:30:00'),
(27, '20:00:00'),
(28, '20:30:00'),
(29, '21:00:00'),
(30, '21:30:00'),
(31, '22:00:00'),
(32, '22:30:00'),
(33, '23:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grafik`
--

CREATE TABLE IF NOT EXISTS `grafik` (
  `idgrafik` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dzien` date NOT NULL,
  `dostawcy_iddostawcy` int(11) unsigned NOT NULL,
  `godzinydostawy_idgodziny` int(11) unsigned NOT NULL DEFAULT '0',
  `wolne` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idgrafik`,`dostawcy_iddostawcy`,`godzinydostawy_idgodziny`),
  KEY `fk_grafik_dostawcy1_idx` (`dostawcy_iddostawcy`),
  KEY `fk_grafik_godzinydostawy1_idx` (`godzinydostawy_idgodziny`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `grafik`
--

INSERT INTO `grafik` (`idgrafik`, `dzien`, `dostawcy_iddostawcy`, `godzinydostawy_idgodziny`, `wolne`) VALUES
(1, '2014-04-06', 1, 0, 1),
(2, '2014-04-06', 1, 4, 1),
(3, '2014-04-06', 1, 7, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jednostkimiary`
--

CREATE TABLE IF NOT EXISTS `jednostkimiary` (
  `idjednostki` int(3) NOT NULL AUTO_INCREMENT,
  `nazwajednostki` varchar(10) COLLATE utf8_polish_ci NOT NULL DEFAULT 'szt.',
  PRIMARY KEY (`idjednostki`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `jednostkimiary`
--

INSERT INTO `jednostkimiary` (`idjednostki`, `nazwajednostki`) VALUES
(1, 'szt.'),
(2, 'kg'),
(3, 'mb'),
(4, 'ton'),
(5, 'kpl'),
(6, 'paczka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE IF NOT EXISTS `klienci` (
  `idklient` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `nrdomu` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `nrlokalu` varchar(6) COLLATE utf8_polish_ci DEFAULT NULL,
  `kodpocztowy` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`idklient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`idklient`, `login`, `password`, `email`, `imie`, `nazwisko`, `ulica`, `nrdomu`, `nrlokalu`, `kodpocztowy`, `miasto`, `telefon`, `added`, `ip`) VALUES
(1, 'klient', 'cbfda0b7ba2c5c1383702bcfaf0ec82ee4cee2fbd69bda593c75e8e953940fcf', 'klient@wp.pl', 'Klient', 'Ąęćńóś', 'Śóćńą', '1', '10', '12345', 'Óąęćńłóżź', 987654321, '2014-03-29 12:07:29', '::1'),
(2, 'luk', 'd6e6aa9bf375b435f9fde7f6412a24b43ca28465448ba333fa5ec5772760e260', 'chlibiuk@wp.pl', 'Łukasz', 'Chlibiuk', '1 Maja', '71', '17', '21100', 'Lubartów', 668895299, '2014-04-03 12:16:00', '::1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pakowacze`
--

CREATE TABLE IF NOT EXISTS `pakowacze` (
  `idpakowacz` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`idpakowacz`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `pakowacze`
--

INSERT INTO `pakowacze` (`idpakowacz`, `imie`, `nazwisko`, `password`) VALUES
(1, 'Jan', 'Pakowacz', 'pakowacz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pozycje`
--

CREATE TABLE IF NOT EXISTS `pozycje` (
  `idzamowienia` int(11) NOT NULL,
  `idtowaru` int(11) NOT NULL,
  `idjednostki` int(11) NOT NULL,
  `ilosc` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`idzamowienia`,`idtowaru`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci,
  `price` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'chleb', 'chleb piekarnia PSS', 2.6),
(2, 'mleko', 'mleko UHT', 2.3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stanzamowienia`
--

CREATE TABLE IF NOT EXISTS `stanzamowienia` (
  `idstanzamowienia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nazwastanu` varchar(15) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`idstanzamowienia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `stanzamowienia`
--

INSERT INTO `stanzamowienia` (`idstanzamowienia`, `nazwastanu`) VALUES
(1, 'nowe'),
(2, 'spakowane'),
(3, 'w drodze'),
(4, 'zrealizowane');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towary`
--

CREATE TABLE IF NOT EXISTS `towary` (
  `idtowaru` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(120) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(7,2) NOT NULL,
  `expdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idtowaru`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `towary`
--

INSERT INTO `towary` (`idtowaru`, `nazwa`, `cena`, `expdate`) VALUES
(1, 'mleko', '2.50', '2014-07-01 00:00:00'),
(2, 'chleb', '3.00', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_polish_ci NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `kodpocztowy` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nrdomu` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `nrlokalu` varchar(6) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `added`, `ip`, `imie`, `nazwisko`, `telefon`, `kodpocztowy`, `miasto`, `nrdomu`, `nrlokalu`) VALUES
(1, '668895299', 'd6e6aa9bf375b435f9fde7f6412a24b43ca28465448ba333fa5ec5772760e260', 'chlibiuk@gmail.com', '2014-03-27 21:47:20', '::1', '', '', 0, '', '', '', NULL),
(2, '668895299', 'd6e6aa9bf375b435f9fde7f6412a24b43ca28465448ba333fa5ec5772760e260', 'monikaderylak@wp.pl', '2014-03-28 01:01:05', '::1', '', '', 0, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE IF NOT EXISTS `zamowienia` (
  `idzamowienia` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `datazamowienia` datetime NOT NULL,
  `datadostawy` datetime NOT NULL,
  `klienci_idklient` int(11) unsigned NOT NULL,
  `pakowacze_idpakowacz` int(10) unsigned NOT NULL,
  `dostawcy_iddostawcy` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idzamowienia`,`klienci_idklient`,`pakowacze_idpakowacz`,`dostawcy_iddostawcy`),
  KEY `fk_zamowienia_klienci_idx` (`klienci_idklient`),
  KEY `fk_zamowienia_pakowacze1_idx` (`pakowacze_idpakowacz`),
  KEY `fk_zamowienia_dostawcy1_idx` (`dostawcy_iddostawcy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `grafik`
--
ALTER TABLE `grafik`
  ADD CONSTRAINT `fk_grafik_dostawcy1` FOREIGN KEY (`dostawcy_iddostawcy`) REFERENCES `dostawcy` (`iddostawcy`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grafik_godzinydostawy1` FOREIGN KEY (`godzinydostawy_idgodziny`) REFERENCES `godzinydostawy` (`idgodziny`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `towary`
--
ALTER TABLE `towary`
  ADD CONSTRAINT `towary_ibfk_1` FOREIGN KEY (`idtowaru`) REFERENCES `jednostkimiary` (`idjednostki`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `fk_zamowienia_dostawcy1` FOREIGN KEY (`dostawcy_iddostawcy`) REFERENCES `dostawcy` (`iddostawcy`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zamowienia_klienci` FOREIGN KEY (`klienci_idklient`) REFERENCES `klienci` (`idklient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zamowienia_pakowacze1` FOREIGN KEY (`pakowacze_idpakowacz`) REFERENCES `pakowacze` (`idpakowacz`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`idzamowienia`) REFERENCES `stanzamowienia` (`idstanzamowienia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
