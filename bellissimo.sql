-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 mrt 2018 om 08:56
-- Serverversie: 10.1.25-MariaDB
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
(2, 'nails1.jfif', '2018-03-01 15:03:41', 'ghhhhLorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(3, 'nails2.jfif', '2018-03-01 15:03:41', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(4, 'nails3.jfif', '2018-03-01 15:04:05', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(5, 'nails4.jfif', '2018-03-01 15:04:05', 'ghhhhhhhhhhhhhhhLorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quasLorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!!hhhhhhhhhhhhhhhhhhhhhh'),
(20, 'images (2).jpg', '2018-03-02 11:14:25', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(21, 'download (1).jpg', '2018-03-02 14:13:53', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(22, 'download.jpg', '2018-03-02 14:14:09', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(23, 'images (1).jpg', '2018-03-02 14:14:18', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(24, 'images (3).jpg', '2018-03-02 14:14:30', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(25, 'images.jpg', '2018-03-02 14:14:36', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis labore ducimus quasi quisquam, voluptatibus est. Eos exercitationem cumque quisquam natus sapiente illum eaque, debitis officia quibusdam voluptatibus, architecto quas!'),
(26, 'download.jpg', '2018-03-02 14:15:20', 'sssssssss ssssssssssssssss sssssssssssssss ssssssssssssssssssssssssssssssssssssssssssssss sssssssssssssssssssssssssssssssssssssssss'),
(27, 'images (1).jpg', '2018-03-02 14:16:30', 'ssssssssssssssss sssssssssssssssssss sssssssssssssssssss ');

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
(1, 1, '2018-02-27 12:06:15', '47522a503200106693d4ebe804079d35');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `treatments`
--

CREATE TABLE `treatments` (
  `id` int(5) NOT NULL,
  `naam` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prijs` float NOT NULL,
  `duurTijdUur` int(2) NOT NULL,
  `duurTijdMin` int(2) NOT NULL,
  `omschrijving` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `treatments`
--

INSERT INTO `treatments` (`id`, `naam`, `prijs`, `duurTijdUur`, `duurTijdMin`, `omschrijving`) VALUES
(1, 'Manicure', 15, 1, 0, 'Bij een manicure worden de nagelriemen achteruit geduwd en verzorgd, de dode huidcellen verwijderd en nagels in vorm gevijld. Daarna kan je genieten van een ontspannende handmassage. Als afwerking worden de nagels gelakt met een doorzichtige nagellak.'),
(2, 'Gellak: full color', 28, 1, 15, 'Deze wordt op de natuurlijke nagel aangebracht. De textuur van gellak is iets dikker dan een gewone nagellak, blijft een 3 tal weken zitten en geeft de nagels meer stevigheid. Na het aanbrengen wordt deze uitgehard onder een LED lamp. Full color: keuze uit verschillende kleuren.'),
(3, 'Gellak : french', 30, 1, 30, 'Deze wordt op de natuurlijke nagel aangebracht. De textuur van gellak is iets dikker dan een gewone nagellak, blijft een 3 tal weken zitten en geeft de nagels meer stevigheid. Na het aanbrengen wordt deze uitgehard onder een LED lamp. French : met een wit randje.');

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
(1, 'admin@admin.com', '$2y$10$.rmA5OCVoKRe/AO2tAcqrO52w5qeo08gkNOBCydC7u4yX.7J/NRP6');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT voor een tabel `password_reset_request`
--
ALTER TABLE `password_reset_request`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
