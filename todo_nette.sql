-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 04. čec 2023, 03:46
-- Verze serveru: 10.4.27-MariaDB
-- Verze PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `todo_nette`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci DEFAULT NULL,
  `deadline` date NOT NULL,
  `done` enum('NO','YES','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `task`
--

INSERT INTO `task` (`task_id`, `name`, `description`, `deadline`, `done`) VALUES
(4, 'Práce', 'Naprogramovat úkol', '2023-07-04', 'NO'),
(5, 'Volný čas', 'Zasportovat si', '2023-07-07', 'NO'),
(11, 'Studium', 'Učit se programování', '2023-07-08', 'NO');

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `role` enum('member','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(7, 'Jan Novák', '$2y$10$cjDR9Q.cpeSC/8Y89X0Thus/cTRXZFmDM9BUZGFY64jVibfiyp6GS', 'admin'),
(9, 'Jaroslav Patrný', '$2y$10$SfCuU/iTaqqJZ4NE6Ao1t.Cb1nM2.GwGaBrwMMwFA7vw1hhqNis12', 'admin'),
(10, 'Jarda', '$2y$10$Kul6kI4/Qu831aOvjOVtu.1x1UN0LwkxHSDfzAQ9BFUdBLjdHXqCC', 'member'),
(11, 'Jarek', '$2y$10$b1jgBULOmzddxzHYbCq2POSiI/JAHVEcN5lH.6gJzYOygC/xqlco6', 'admin');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexy pro tabulku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
