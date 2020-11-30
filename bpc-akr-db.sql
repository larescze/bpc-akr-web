-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Pon 30. lis 2020, 20:50
-- Verze serveru: 10.1.45-MariaDB-0+deb9u1
-- Verze PHP: 7.0.33-0+deb9u9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `wlazarov_bpc-akr`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `comments`
--

INSERT INTO `comments` (`id`, `nickname`, `email`, `date`, `message`) VALUES
(3, 'Test', '', '2020-11-02 22:15:30', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce consectetuer risus a nunc. Vivamus porttitor turpis ac leo. Pellentesque pretium lectus id turpis. Praesent dapibus. In dapibus augue non sapien. Etiam posuere lacus quis dolor. Integer tempor. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.'),
(4, 'Test', '', '2020-11-02 22:15:30', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce consectetuer risus a nunc. Vivamus porttitor turpis ac leo. Pellentesque pretium lectus id turpis. Praesent dapibus. In dapibus augue non sapien. Etiam posuere lacus quis dolor. Integer tempor. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'bezpecneheslo'),
(2, 'xguest20', '$2y$12$9wdwhY/LYYYe9O/jKgJ5A.nvW6xD4lgo6pzPRhga.BLdQ2Z6m3.NG');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
