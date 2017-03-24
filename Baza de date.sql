-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2017 la 16:48
-- Versiune server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organizare_ev`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `bilete`
--

CREATE TABLE `bilete` (
  `BiletID` int(3) NOT NULL,
  `Pret` int(4) NOT NULL,
  `EvenimentID` int(3) NOT NULL,
  `Format` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `bilete`
--

INSERT INTO `bilete` (`BiletID`, `Pret`, `EvenimentID`, `Format`) VALUES
(1, 130, 1, 'electronic'),
(2, 170, 2, 'fizic'),
(3, 169, 3, 'electronic'),
(4, 420, 4, 'fizic'),
(5, 55, 5, 'electronic'),
(6, 999, 5, 'fizic'),
(7, 720, 1, 'electronic'),
(8, 4444, 5, 'electronic'),
(9, 10000, 5, 'fizic'),
(10, 5, 4, 'fizic');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `evenimente`
--

CREATE TABLE `evenimente` (
  `EvenimentID` int(3) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `DataInceperii` date NOT NULL,
  `DataTerminare` date NOT NULL,
  `LocatieID` int(3) NOT NULL,
  `RestrictieVarsta` int(2) NOT NULL,
  `PlannerID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `evenimente`
--

INSERT INTO `evenimente` (`EvenimentID`, `Nume`, `DataInceperii`, `DataTerminare`, `LocatieID`, `RestrictieVarsta`, `PlannerID`) VALUES
(1, 'Evanescence', '2017-01-03', '2017-01-19', 1, 14, 1),
(2, 'Coldplay', '2017-01-02', '2017-01-21', 2, 14, 1),
(3, 'Sia', '2017-01-14', '2017-01-28', 2, 18, 2),
(4, 'ACDC', '2017-06-20', '2017-06-21', 3, 8, 4),
(5, 'MichaelJackson', '2017-01-31', '2017-02-28', 5, 21, 3);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `fonduri`
--

CREATE TABLE `fonduri` (
  `SponsorID` int(3) NOT NULL,
  `EvenimentID` int(3) NOT NULL,
  `SumaOferita` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `fonduri`
--

INSERT INTO `fonduri` (`SponsorID`, `EvenimentID`, `SumaOferita`) VALUES
(1, 1, 2000),
(1, 2, 3000),
(2, 1, 4000),
(4, 2, 3000);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `locatie`
--

CREATE TABLE `locatie` (
  `LocatieID` int(3) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `Judet` varchar(20) NOT NULL,
  `Oras` varchar(20) NOT NULL,
  `Strada` varchar(20) NOT NULL,
  `Spatiu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `locatie`
--

INSERT INTO `locatie` (`LocatieID`, `Nume`, `Judet`, `Oras`, `Strada`, `Spatiu`) VALUES
(1, 'PiataConstitutiei', 'Bucuresti', 'Bucuresti', 'SplaiulIndependentei', 300),
(2, 'Primarie', 'Olt', 'Caracal', 'MihailEminescu', 200),
(3, 'GaneshaCaffe', 'Bucuresti', 'Bucuresti', 'Dorobanti', 350),
(4, 'StudentPub', 'Bucuresti', 'Bucuresti', 'VasileMilea', 420),
(5, 'TeatrulMasca', 'Arges', 'Pitesti', 'Decembrie', 100);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `planneri`
--

CREATE TABLE `planneri` (
  `PlannerID` int(3) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `Prenume` varchar(20) NOT NULL,
  `Utilizator` varchar(20) NOT NULL,
  `Parola` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `planneri`
--

INSERT INTO `planneri` (`PlannerID`, `Nume`, `Prenume`, `Utilizator`, `Parola`) VALUES
(1, 'Manea', 'Sebastian', 'Manea', 'Sebastian'),
(2, 'Popescu', 'Ionut', 'Popescu', 'Ionut'),
(3, 'Tudorascu', 'Bogdan', 'Tudorascu', 'Bogdan'),
(4, 'Gardulet', 'Vladut', 'Gard', 'Vlad'),
(5, 'Micut', 'Vladut', 'Micu', 'Vlad');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `sponsori`
--

CREATE TABLE `sponsori` (
  `SponsorID` int(3) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `Reclama` tinyint(1) NOT NULL,
  `Domeniu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `sponsori`
--

INSERT INTO `sponsori` (`SponsorID`, `Nume`, `Reclama`, `Domeniu`) VALUES
(1, 'MumfordSons', 0, 'Muzica'),
(2, 'LesPaul', 1, 'Muzica'),
(3, 'McDonalds', 1, 'Food'),
(4, 'KFC', 1, 'TriHardFood'),
(5, 'BodyTech', 0, 'Clothes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilete`
--
ALTER TABLE `bilete`
  ADD PRIMARY KEY (`BiletID`);

--
-- Indexes for table `evenimente`
--
ALTER TABLE `evenimente`
  ADD PRIMARY KEY (`EvenimentID`),
  ADD KEY `EvenimentID` (`EvenimentID`);

--
-- Indexes for table `fonduri`
--
ALTER TABLE `fonduri`
  ADD PRIMARY KEY (`SponsorID`,`EvenimentID`);

--
-- Indexes for table `locatie`
--
ALTER TABLE `locatie`
  ADD PRIMARY KEY (`LocatieID`);

--
-- Indexes for table `planneri`
--
ALTER TABLE `planneri`
  ADD PRIMARY KEY (`PlannerID`);

--
-- Indexes for table `sponsori`
--
ALTER TABLE `sponsori`
  ADD PRIMARY KEY (`SponsorID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
