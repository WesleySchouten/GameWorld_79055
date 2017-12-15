-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 15 dec 2017 om 12:54
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vak`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `id` int(3) NOT NULL,
  `gametitle` varchar(100) NOT NULL,
  `gamedescription` text NOT NULL,
  `gameprice` decimal(5,2) NOT NULL,
  `categoryid` int(3) NOT NULL,
  `imageid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`id`, `gametitle`, `gamedescription`, `gameprice`, `categoryid`, `imageid`) VALUES
(1, 'Horizon_zero_dawn', 'a game about robot dinosaurs set in the future', '59.95', 1, 'images/220px-Horizon_Zero_Dawn.jpg'),
(2, 'just cause 3', 'free roam game ', '49.95', 1, 'images/just-cause-3.jpg'),
(3, 'uncharted 4 a thiefs secret ', '', '24.95', 1, 'images/Uncharted_4_box_artwork.jpg'),
(4, 'Tekken 7', 'Fighting game', '59.95', 1, 'images/tekken.jpg'),
(5, 'Star wars ', 'Shooter', '79.95', 1, 'images/DXuWFXR.jpg'),
(6, 'Fort nite', 'shooter', '59.95', 1, 'images/4n.jpg'),
(7, 'Mario cart dubble dash', '', '24.95', 2, 'images/dbd.jpg'),
(8, 'Luigi\'s mansion', '', '14.95', 2, 'images/lm.jpg'),
(9, 'Mario football', '', '39.95', 2, 'images/mf.jpg'),
(10, 'Mario Party 5 ', '', '22.45', 2, 'images/mp5.jpg'),
(11, 'Mario party 6 ', '', '22.45', 2, 'images/mp6.jpg'),
(12, 'Super Mario Sunshine', '', '14.95', 2, 'images/sms.jpg'),
(13, 'CS-GO', '', '19.95', 3, 'images/csgo.jpg'),
(14, 'arma 3 ', '', '24.95', 3, 'images/arma3.jpg'),
(15, 'Portal 2', '', '9.99', 3, 'images/Portal2cover.jpg'),
(16, 'Portal 2', '', '29.99', 3, 'images/pubg.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling`
--

CREATE TABLE `leerling` (
  `id` int(11) NOT NULL,
  `vak` varchar(25) NOT NULL,
  `docent` varchar(30) NOT NULL,
  `docentcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `leerling`
--

INSERT INTO `leerling` (`id`, `vak`, `docent`, `docentcode`) VALUES
(1, 'WEB', 'Noc', 1390),
(4, 'WEB', 'Noc', 1390),
(5, 'WEB', 'Noc', 1390),
(6, 'WEB', 'Noc', 1390),
(7, 'WEB', 'Noc', 1390),
(8, 'WEB', 'Noc', 1390),
(9, 'WEB', 'Noc', 1390),
(10, 'WEB', 'Noc', 1390),
(11, 'WEB', 'Noc', 1390),
(12, 'WEB', 'Noc', 1390),
(13, 'WEB', 'Noc', 1390);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `leerling`
--
ALTER TABLE `leerling`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `leerling`
--
ALTER TABLE `leerling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
