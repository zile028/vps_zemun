-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 03:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vps_sajt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cenovnik`
--

CREATE TABLE `cenovnik` (
  `id` int(10) NOT NULL,
  `service` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `lang` varchar(5) NOT NULL DEFAULT 'srb'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cenovnik`
--

INSERT INTO `cenovnik` (`id`, `service`, `price`, `lang`) VALUES
(3, 'Пријава испита', '600 дин.', 'srb');

-- --------------------------------------------------------

--
-- Table structure for table `dokumenta`
--

CREATE TABLE `dokumenta` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `userID` int(10) NOT NULL,
  `parentID` int(10) DEFAULT 0,
  `category` varchar(30) NOT NULL,
  `lang` varchar(5) NOT NULL DEFAULT 'srb',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumenta`
--

INSERT INTO `dokumenta` (`id`, `title`, `attachment`, `userID`, `parentID`, `category`, `lang`, `createdAt`) VALUES
(8, 'Статут', '1712844347601_906582268.pdf', 1, 0, '1', 'srb', '2024-04-11 14:05:47'),
(9, 'Кодекс', '1712867497501_1797489685.pdf', 1, 0, '1', 'srb', '2024-04-11 20:31:37'),
(10, 'Стратегија', '1712867796617_1670715878.pdf', 1, 0, '1', 'srb', '2024-04-11 20:36:36'),
(11, 'Кодекс 2', '1712867837314_1317133531.pdf', 1, 9, '1', 'srb', '2024-04-11 20:37:17'),
(12, 'Статут 2', '1712868047157_1070811316.pdf', 1, 8, '1', 'srb', '2024-04-11 20:40:47'),
(13, 'Одлука', '1712868063197_1295518169.pdf', 1, 0, '1', 'srb', '2024-04-11 20:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `lang` varchar(5) NOT NULL DEFAULT 'srb'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `category`, `lang`) VALUES
(1, 'Акта', 'srb'),
(2, 'Правилници', 'srb'),
(3, 'Самовредновање', 'srb'),
(4, 'Акредитација', 'srb'),
(5, 'Информатор рада', 'srb');

-- --------------------------------------------------------

--
-- Table structure for table `odbori`
--

CREATE TABLE `odbori` (
  `id` int(10) NOT NULL,
  `odbor` varchar(50) NOT NULL,
  `prioritet` int(10) NOT NULL DEFAULT 1,
  `lang` varchar(5) NOT NULL DEFAULT 'srb'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `odbori`
--

INSERT INTO `odbori` (`id`, `odbor`, `prioritet`, `lang`) VALUES
(1, 'Савет', 1, 'srb'),
(2, 'Руководство', 1, 'srb'),
(3, 'Наставно особље', 1, 'srb'),
(4, 'Ненаставно особље', 1, 'srb');

-- --------------------------------------------------------

--
-- Table structure for table `osoblje`
--

CREATE TABLE `osoblje` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `title` varchar(10) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `cv` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `lang` varchar(5) NOT NULL DEFAULT 'srb',
  `description` text DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `status` enum('clan','nastavno','nenastavno','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `osoblje`
--

INSERT INTO `osoblje` (`id`, `firstName`, `lastName`, `title`, `rank`, `email`, `cv`, `image`, `lang`, `description`, `active`, `status`) VALUES
(8, 'Јасмина', 'Радоњић', 'др', 'професор страног језика', 'jasmina@mail.com', '1712351829182_1047614426.pdf', '1712351829181_742742790.jpg', 'srb', '<p>JASMINA RADONJIĆ, PROFESOR ENGLESKOG JEZIKA.\r\nJASMINA RADONJIĆ&nbsp;ROĐENA JE 19.6.1986. U ČAČKU. POSLE ZAVRŠENE GIMNAZIJE U ČAČKU, ZAVRŠILA JE FILOLOŠKI FAKULTET UNIVERZITETA U BEOGRADU, ODSEK ENGLESKI JEZIK I KNJIŽEVNOST.\r\nZAPOSLENA JE NA VISOKOJ POSLOVNOJ ŠKOLI STRUKOVNIH STUDIJA U BEOGRADU OD 2012. GODINE KAO NASTAVNIK STRANOG JEZIKA – POSLOVNI ENGLESKI JEZIK I ENGLESKI ZA EKONOMISTE.\r\nUSAVRŠAVALA SE NA MNOGOBROJNIM KURSEVIMA U ZEMLJI I INOSTRANSTVU.\r\n</p>', 1, 'nastavno'),
(10, 'Албина', 'Кецман Шушњар', 'др', 'професор струковних студије', 'albina@office.com', NULL, '1712352028765_1165684579.png', 'srb', '<p>ДР АЛБИНА КЕЦМАН ШУШЊАР ЈЕ МАГИСТРИРАЛА 2006. ГОДИНЕ НА ЕКОНОМСКОМ ФАКУЛТЕТУ У БЕОГРАДУ, ГДЕ ЈЕ СТЕКЛА И МАСТЕР ДИПЛОМУ ХЕЦ ПОСЛОВНЕ ШКОЛЕ ИЗ ПАРИЗА, У ОКВИРУ МЕЂУНАРОДНОГ МАГИСТАРСКОГ КУРСА ИЗ ПОСЛОВНЕ ЕКОНОМИЈЕ. ДОКТОРИРАЛА ЈЕ 2013. ГОД. НА ЕКОНОМСКОМ ФАКУЛТЕТУ У БЕОГРАДУ.</p><p>ИЗАБРАНА ЈЕ У ЗВАЊЕ ПРОФЕСОРА СТРУКОВНИХ СТУДИЈА ЗА УЖЕ НАУЧНЕ ОБЛАСТИ МЕНАЏМЕНТ И МАРКЕТИНГ И ЕКОНОМИЈА; ФИНАНСИЈЕ И БАНКАРСТВО. НАСТАВНИК ЈЕ НА ПРЕДМЕТИМА МЕНАЏМЕНТ ЉУДСКИХ РЕСУРСА, ОРГАНИЗАЦИОНО ПОНАШАЊЕ И ПРИНЦИПИ МАРКЕТИНГА.</p><p>ПОСЕДУЈЕ ПРЕКО 15 ГОДИНА РАДНОГ ИСКУСТВА, ОД ЧЕГА СКОРО 10 ГОДИНА НА ОДГОВОРНИМ РУКОВОДЕЋИМ ПОЗИЦИЈАМА.</p><p>АУТОР ЈЕ ВИШЕ СТРУЧНИХ РАДОВА ИЗ ОБЛАСТИ МЕНАЏМЕНТА И ЕКОНОМИЈЕ, КАО И КОАТОР КЊИГЕ “МЕНАЏМЕНТ ЉУДСКИХ РЕСУРСА”.</p><p>ГОВОРИ ЕНГЛЕСКИ И ШПАНСКИ ЈЕЗИК, А ПОЗНАЈЕ И ОСНОВЕ НЕМАЧКОГ ЈЕЗИКА.</p>', 1, 'nastavno');

-- --------------------------------------------------------

--
-- Table structure for table `osoblje_odbor`
--

CREATE TABLE `osoblje_odbor` (
  `osobljeID` int(10) NOT NULL,
  `odborID` int(10) NOT NULL,
  `pozicija` varchar(50) NOT NULL,
  `prioritet` int(10) NOT NULL DEFAULT 1,
  `lang` varchar(5) NOT NULL DEFAULT 'srb'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `osoblje_odbor`
--

INSERT INTO `osoblje_odbor` (`osobljeID`, `odborID`, `pozicija`, `prioritet`, `lang`) VALUES
(8, 1, 'Председник', 1, 'srb'),
(10, 1, 'Члан', 2, 'srb'),
(10, 2, 'Члан', 1, 'srb');

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id` int(11) NOT NULL,
  `predmet` varchar(50) NOT NULL,
  `sifra` varchar(50) NOT NULL,
  `semestar` int(2) NOT NULL,
  `predavanja` int(2) NOT NULL,
  `vezbe` int(2) NOT NULL,
  `espb` int(2) NOT NULL,
  `obavezan_izborni` tinyint(1) NOT NULL,
  `lang` varchar(5) NOT NULL DEFAULT 'srb'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `predmet`, `sifra`, `semestar`, `predavanja`, `vezbe`, `espb`, `obavezan_izborni`, `lang`) VALUES
(18, 'Енглески језик 1', '789456', 1, 2, 2, 6, 1, 'srb'),
(19, 'Социјологија', '456963', 1, 2, 2, 6, 0, 'srb');

-- --------------------------------------------------------

--
-- Table structure for table `sp_predmet`
--

CREATE TABLE `sp_predmet` (
  `spID` int(10) NOT NULL,
  `predmetID` int(10) NOT NULL,
  `redniBroj` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sp_predmet`
--

INSERT INTO `sp_predmet` (`spID`, `predmetID`, `redniBroj`) VALUES
(1, 18, 1),
(1, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `studijski_programi`
--

CREATE TABLE `studijski_programi` (
  `id` int(11) NOT NULL,
  `nivo` varchar(100) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `modul` varchar(255) DEFAULT NULL,
  `trajanje` varchar(50) NOT NULL,
  `espb` int(3) NOT NULL,
  `zvanje` varchar(50) NOT NULL,
  `polje` varchar(70) DEFAULT NULL,
  `aktivan` tinyint(1) NOT NULL DEFAULT 1,
  `akreditovan` int(4) NOT NULL,
  `lang` varchar(5) NOT NULL DEFAULT 'srb',
  `cilj` text DEFAULT NULL,
  `opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studijski_programi`
--

INSERT INTO `studijski_programi` (`id`, `nivo`, `naziv`, `modul`, `trajanje`, `espb`, `zvanje`, `polje`, `aktivan`, `akreditovan`, `lang`, `cilj`, `opis`) VALUES
(1, 'основне струковне студије', 'Економија и бизнис', 'Трговина и маркетинг', '3 године / 6 семестра', 180, 'струковни економиста', 'Друштвено-хуманистичко', 1, 2024, 'srb', 'Основни циљ едукације која се постиже на основним струковним студијама је стицање и\r\nповезивање стечених знања из предметних области економије и бизниса у одговарајућу\r\nпрофесионалну структуру. Структура студијског програма Економија и бизнис кроз своје наставне\r\nсадржаје посебно акцентира добијање јасне и потпуне слике значаја и потребе практичног знања\r\nкоје се стиче кроз садржај основних струковних студија. Другим речима, циљ је да студенти усвоје\r\nнајновија знања и вештине из области економије, управљања и бизниса у савременом пословно-\r\nекономском окружењу, тј. да се добију стручњаци спремни да одговоре на сва питања и изазове\r\nса којима су реалан и финансијски сектор данас сусрећу у сфери економије, како би се креирале\r\nнове пословне идеје и исте претвориле у профитабилан посао.', 'Студијски програм „Економија и бизнис“ је конципиран у складу са Законом о високом\r\nобразовању и стандардима за акредитацију. Основна сврха студијског програма „Економија и\r\nбизнис“ је образовање и оспособљавање студената за професију струковног економисте како у\r\nреалном, тако и у финансијском, јавном или приватном сектору. Предузећа, банке, осигуравајуће\r\nкомпаније, јавне институције и агенције одувек су захтевале стручњаке економске струке обучене\r\nда препознају и/или дефинишу ефикасност, економичност, ризике, управљање ризицима, новчане\r\nтокове, креирање буџета, управљање новчаним средствима и потраживањима, логистику,\r\nтрговину и послове спољне трговине, инвестиционе токове, финансијско окружење и сл. Самим\r\nтим, перманентна је потреба за младим и компетентним кадровима из области економије, који ће\r\nбити оспособљени да креирају и спроводе пословну политику код својих будућих послодаваца.'),
(2, 'специјалистичке струковне студије', 'Пословно управљање', NULL, '1 година / 2 семестра', 60, 'специјалиста струковни економиста', 'Друштвено-хуманистичко', 1, 2024, 'srb', 'Основни циљ едукације која се постиже на основним струковним студијама је стицање и\r\nповезивање стечених знања из предметних области економије и бизниса у одговарајућу\r\nпрофесионалну структуру. Структура студијског програма Економија и бизнис кроз своје наставне\r\nсадржаје посебно акцентира добијање јасне и потпуне слике значаја и потребе практичног знања\r\nкоје се стиче кроз садржај основних струковних студија. Другим речима, циљ је да студенти усвоје\r\nнајновија знања и вештине из области економије, управљања и бизниса у савременом пословно-\r\nекономском окружењу, тј. да се добију стручњаци спремни да одговоре на сва питања и изазове\r\nса којима су реалан и финансијски сектор данас сусрећу у сфери економије, како би се креирале\r\nнове пословне идеје и исте претвориле у профитабилан посао.', 'Студијски програм „Економија и бизнис“ је конципиран у складу са Законом о високом\r\nобразовању и стандардима за акредитацију. Основна сврха студијског програма „Економија и\r\nбизнис“ је образовање и оспособљавање студената за професију струковног економисте како у\r\nреалном, тако и у финансијском, јавном или приватном сектору. Предузећа, банке, осигуравајуће\r\nкомпаније, јавне институције и агенције одувек су захтевале стручњаке економске струке обучене\r\nда препознају и/или дефинишу ефикасност, економичност, ризике, управљање ризицима, новчане\r\nтокове, креирање буџета, управљање новчаним средствима и потраживањима, логистику,\r\nтрговину и послове спољне трговине, инвестиционе токове, финансијско окружење и сл. Самим\r\nтим, перманентна је потреба за младим и компетентним кадровима из области економије, који ће\r\nбити оспособљени да креирају и спроводе пословну политику код својих будућих послодаваца.'),
(7, 'основне струковне студије', 'Економија и бизнис', 'Финансијски менаџмент', '3 године / 6 семестра', 180, 'струковни економиста', 'Друштвено-хуманистичко', 1, 2024, 'srb', 'bla bla bla', 'truc truc truc'),
(8, 'мастер струковне студије', 'Економија услуга', '', '2 године / 4 семестра', 120, 'мастер струковни економиста', 'Друштвено-хуманистичко', 1, 2024, 'srb', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `image` varchar(70) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastAccess` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `role`, `image`, `createdAt`, `lastAccess`) VALUES
(1, 'Dejan', 'Zivkovic', 'zile028@gmail.com', '$2y$10$06l61QvyrRSu0wAtMKJmWu54Qpmh9LjrTyjxtD6oFFGHTUIIpZ6rW', 'admin', NULL, '2024-04-03 19:39:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cenovnik`
--
ALTER TABLE `cenovnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumenta`
--
ALTER TABLE `dokumenta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odbori`
--
ALTER TABLE `odbori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osoblje`
--
ALTER TABLE `osoblje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osoblje_odbor`
--
ALTER TABLE `osoblje_odbor`
  ADD PRIMARY KEY (`osobljeID`,`odborID`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_predmet`
--
ALTER TABLE `sp_predmet`
  ADD PRIMARY KEY (`spID`,`predmetID`);

--
-- Indexes for table `studijski_programi`
--
ALTER TABLE `studijski_programi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cenovnik`
--
ALTER TABLE `cenovnik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dokumenta`
--
ALTER TABLE `dokumenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `odbori`
--
ALTER TABLE `odbori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `osoblje`
--
ALTER TABLE `osoblje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `studijski_programi`
--
ALTER TABLE `studijski_programi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
