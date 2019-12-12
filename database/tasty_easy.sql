-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lip 2019, 23:16
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tasty&easy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `name`) VALUES
(1, 1, 'user1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `login` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `phone` int(9) NOT NULL,
  `list_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `customer`
--

INSERT INTO `customer` (`id`, `login`, `passwd`, `address`, `phone`, `list_id`) VALUES
(8, 'admin', '$2y$10$1CE2u7WZ0IZn8OLmlXKrG.0u/NqRuJz2.x/Eb7Sll58aQzxdhxU5m', 'jasna 12', 127127444, 0),
(16, 'user1', '$2y$10$p/iTFTQYUaiZIUnhqMmDvOCMDHkSVFtKNDDKSV3D/Z7lWKkcP45Ri', 'uliac 21', 211211211, 1),
(17, 'user2', '$2y$10$.5EBxI9H8.DAQyVwcq6gMOfNOMH1Cb9OCTEAJnSVRpb3x7G8gj1SS', 'cośtam 20', 111111111, 2),
(18, 'user3', '$2y$10$cJvtQp4qYtkmNgEfMv6MP.F5rCvCuAgzvXJZKMNA1lFdYYeUFHFdC', 'dadasd', 131213111, 3),
(19, 'user4', '$2y$10$QL5.KkxEux/N48Lfaiw00u78WO1l5HQRVZc.5fWCyie6Py0pYILzi', 'aniewiem 5', 111222, 4),
(20, 'user5', '$2y$10$FZoR6z/sKhVHRQn7QZxUueBED.x5eefoj7JnUDSDVPM8I0zzzC4N6', 'agdzitam 9', 222111000, 5),
(21, 'user6', '$2y$10$CLI01CX24.70kk2t9NMj/uGH8FvT7408xcj/hu8RLv6d9w2WqbBsK', 'brakulicy25', 321213455, 6),
(22, 'user7', '$2y$10$Zxo6t4gVIgLoZsOlabmV7eC95HeSC1e6pFaF8K8.a0EncKI7mvSRq', 'adresowa 21', 90101201, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `meals`
--

CREATE TABLE `meals` (
  `id_order` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `date` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `meals`
--

INSERT INTO `meals` (`id_order`, `customer_id`, `meal_id`, `date`, `status`, `id`) VALUES
(3, 20, 1, '19.06.19', 'in progress', 0),
(4, 16, 2, '19.06.19', 'in progress', 1),
(5, 16, 3, '19.06.19', 'in progress', 2),
(6, 17, 1, '19.06.19', 'send', 3),
(7, 17, 1, '19.06.19', 'send', 4),
(8, 17, 4, '19.06.19', 'send', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu`
--

CREATE TABLE `menu` (
  `meal_id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `category` varchar(40) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `menu`
--

INSERT INTO `menu` (`meal_id`, `name`, `category`) VALUES
(1, 'Ramen', 'main'),
(2, 'Sajgonki', 'starter'),
(3, 'Kaczka w miodzie', 'main'),
(4, 'Gulasz wołowy', 'main'),
(5, 'Solanka', 'starter'),
(6, 'Pielmieni w bulionie', 'starter'),
(7, 'Boeuf Stroganow', 'main'),
(8, 'Mimoza', 'addition'),
(9, 'Tempura', 'starter'),
(10, 'cesarski omlet ', 'addition'),
(11, 'börek ', 'addition'),
(12, 'Sambousek', 'main'),
(13, 'Hommos', 'addition'),
(14, 'Foul mdammas', 'starter'),
(15, 'Mnezele', 'starter');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indeksy dla tabeli `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`meal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `meals`
--
ALTER TABLE `meals`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `menu`
--
ALTER TABLE `menu`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
