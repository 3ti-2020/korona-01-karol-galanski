-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 18 Maj 2020, 12:56
-- Wersja serwera: 5.7.26
-- Wersja PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_korona-01_karolgalanski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `features_of_characters`
--

DROP TABLE IF EXISTS `features_of_characters`;
CREATE TABLE IF NOT EXISTS `features_of_characters` (
  `characters` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `hit_point_gain/level` int(11) NOT NULL,
  `mana_gain/level` int(11) NOT NULL,
  `capacity_gain/level` int(11) NOT NULL,
  `favourite_skill` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `favourite_spell` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `hit_point_regeneration` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `mana_regeneration` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `promotion_title` varchar(30) COLLATE ucs2_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_polish_ci;

--
-- Zrzut danych tabeli `features_of_characters`
--

INSERT INTO `features_of_characters` (`characters`, `hit_point_gain/level`, `mana_gain/level`, `capacity_gain/level`, `favourite_skill`, `favourite_spell`, `hit_point_regeneration`, `mana_regeneration`, `promotion_title`) VALUES
('Druid', 5, 30, 10, 'Magic Level ', 'Heal Friend ', 'slow ', 'fast ', 'Elder Druid '),
('Knight', 15, 5, 25, 'all melee skills', 'Fierce Berserk', 'fast', 'slow', 'Elite Knight'),
('Paladin', 10, 15, 20, 'Distance Fighting', 'Divine Missile', 'medium', 'medium', 'Royal Paladin'),
('Sorcerer', 5, 30, 10, 'Magic Level', 'Sudden Death Rune', 'slow', 'fast', 'Master Sorcerer');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `regular_worlds`
--

DROP TABLE IF EXISTS `regular_worlds`;
CREATE TABLE IF NOT EXISTS `regular_worlds` (
  `world` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `location` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `pvp_type` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `battlEye` varchar(30) COLLATE ucs2_polish_ci NOT NULL,
  `additional_information` varchar(30) COLLATE ucs2_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_polish_ci;

--
-- Zrzut danych tabeli `regular_worlds`
--

INSERT INTO `regular_worlds` (`world`, `location`, `pvp_type`, `battlEye`, `additional_information`) VALUES
('Antica', 'Europe', 'Open PvP', 'Yes', ''),
('Astera', 'North America', 'Optional PvP', 'Yes', ''),
('Belobra', 'South America', 'Optional PvP', 'Yes', ''),
('Bona', 'Europe', 'Optional PvP', 'Yes', ''),
('Celesta', 'Europe', 'Optional PvP', 'Yes', ''),
('Damora', 'Europe', 'Optional PvP', 'Yes', ''),
('Estela', 'Europe', 'Open PvP', 'Yes', ''),
('Gentebra', 'South America', 'Optional PvP', 'Yes', ''),
('Harmonia', 'Europe', 'Optional PvP', 'Yes', ''),
('Javibra', 'South America', 'Retro Open PvP	', 'Yes', 'premium, blocked'),
('Monza', 'Europe', 'Optional PvP', 'Yes', ''),
('Premia', 'Europe', 'Open PvP', 'Yes', 'premium'),
('Refugia', 'Europe', 'Optional PvP', 'No', ''),
('Unica', 'Europe', 'Retro Open PvP', 'Yes', 'premium, blocked'),
('Vunira', 'Europe', 'Open PvP', 'No', ''),
('Xandebra', 'South America', 'Open PvP', 'Yes', 'blocked');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
