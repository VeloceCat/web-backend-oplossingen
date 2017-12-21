-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 dec 2017 om 15:37
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opdracht-mod-rewrite-blog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikels`
--

CREATE TABLE `artikels` (
  `IndexID` int(11) NOT NULL,
  `Titel` text NOT NULL,
  `Artikel` text NOT NULL,
  `Kernwoorden` text NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `artikels`
--

INSERT INTO `artikels` (`IndexID`, `Titel`, `Artikel`, `Kernwoorden`, `Datum`) VALUES
(24, 'Kantar: Apple On Track For \'Record Quarter\' As iPhone 6 Sales Bump Up Its Market Share Vs. Android', 'Apple has been seeing its smartphone market share erode over the last several years as its simple-and-small line up of iPhones competed against model after model of low-priced, big-screened, fancy-featured Android-based handsets. But it looks like its latest iPhone 6 models â€” with their larger faces, 4G compatibility and Apple Pay support â€” may be helping it turn the tide a bit.', 'Computers, Consumer Electronics, Hardware + Software', '2014-12-04'),
(26, 'Gangnam Style Has Been Viewed So Many Times It Broke YouTube\'s Code', 'Whoops! Just a fun bit of trivia for the coders out there: PSY\'s Gangnam Style has been viewed so many times that it broke YouTube\'s view counter, making it the very first video to break the reaches of a 32-bit integer.', 'Popular, YouTube, Psy, Gangnam Style', '2014-12-04'),
(27, 'Stripe Raises Another $70 Million, Doubling Its Valuation To $3.5 Billion', 'Ultra-hot payments startup Stripe has brought on $70 million in new funding that will double its valuation less than a year after its last raise. The round, which was first reported by the Financial Times, brings the total amount Stripe has raised to more than $200 million.', 'Payments, Software, Credit Cards', '2014-12-04');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`IndexID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `IndexID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
