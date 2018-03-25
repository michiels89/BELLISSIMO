-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mrt 2018 om 17:37
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bellissimo`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `images`
--

INSERT INTO `images` (`id`, `image`, `date`, `text`) VALUES
(29, 'IMG_3031.JPG', '2018-03-21 17:25:36', ''),
(30, 'thumbnail_IMG_3055.jpg', '2018-03-21 17:26:07', ''),
(31, 'thumbnail_IMG_3055.jpg', '2018-03-21 17:27:54', ''),
(32, 'IMG_3040.JPG', '2018-03-21 17:28:16', 'wdf wsdgf qs qg '),
(33, 'IMG_3040.JPG', '2018-03-21 17:28:32', 'wdf wsdgf qs qg '),
(34, 'IMG_3040.JPG', '2018-03-21 17:30:35', 'wdf wsdgf qs qg '),
(35, 'IMG_3040.JPG', '2018-03-21 17:31:10', 'wdf wsdgf qs qg ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_request`
--

CREATE TABLE `password_reset_request` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `date_requested` datetime NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `password_reset_request`
--

INSERT INTO `password_reset_request` (`id`, `userId`, `date_requested`, `token`) VALUES
(1, 1, '2018-02-27 12:06:15', '47522a503200106693d4ebe804079d35'),
(2, 4, '2018-03-20 17:53:48', '98ad63e7d35e312027533dee2ab8ca3c');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `treatments`
--

CREATE TABLE `treatments` (
  `id` int(5) NOT NULL,
  `naam` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prijs` float NOT NULL,
  `omschrijving` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `treatments`
--

INSERT INTO `treatments` (`id`, `naam`, `prijs`, `omschrijving`) VALUES
(1, 'Manicure', 15, 'Bij een manicure worden de nagelriemen achteruit geduwd en verzorgd, de dode huidcellen verwijderd en nagels in vorm gevijld. Daarna kan je genieten van een ontspannende handmassage. Als afwerking worden de nagels gelakt met een doorzichtige nagellak.'),
(2, 'Gellak: full color', 28, 'Deze wordt op de natuurlijke nagel aangebracht. De textuur van gellak is iets dikker dan een gewone nagellak, blijft een 3 tal weken zitten en geeft de nagels meer stevigheid. Na het aanbrengen wordt deze uitgehard onder een LED lamp. Full color: keuze uit verschillende kleuren.'),
(3, 'Gellak : french', 30, 'Deze wordt op de natuurlijke nagel aangebracht. De textuur van gellak is iets dikker dan een gewone nagellak, blijft een 3 tal weken zitten en geeft de nagels meer stevigheid. Na het aanbrengen wordt deze uitgehard onder een LED lamp. French : met een wit randje.'),
(4, 'lol', 35, 'qsdqd qd q qsd dfg dfdg'),
(5, 'sfsdf', 45, 'sdfsd hfghfgh'),
(6, 'sdfsdfs', 25, 'sdfs sf sg ds ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `paswoord` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `paswoord`) VALUES
(1, 'admin@admin.com', '$2y$10$.rmA5OCVoKRe/AO2tAcqrO52w5qeo08gkNOBCydC7u4yX.7J/NRP6'),
(2, 'dummy@gmail.com', '$2y$10$Q/Ct8hQ.peo2tLkEqHjLZuqywe2DHdcVdci82fDnnoHR49aLOeRAi'),
(3, 'vdab@gmail.com', '$2y$10$UJNdAbusN6MD7xfgRvbkYuVKd7ax7j39957XacBY0DucRow9nQt5y'),
(4, 'michiels89@hotmail.com', '$2y$10$7m1bpE8FeBX2ZZt4scnKTuhZZJZol41QHwPJqWoBSsApNVty0iHnm');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_reset_request`
--
ALTER TABLE `password_reset_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT voor een tabel `password_reset_request`
--
ALTER TABLE `password_reset_request`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
