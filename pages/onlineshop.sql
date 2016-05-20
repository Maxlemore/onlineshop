-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Mai 2016 um 12:28
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `onlineshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
`ID` int(11) NOT NULL,
  `BenutzerID` int(11) DEFAULT NULL,
  `Addresse` text COLLATE latin1_general_ci,
  `Hausnr` int(11) DEFAULT NULL,
  `Plz` text COLLATE latin1_general_ci,
  `Ort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
`ID` int(11) NOT NULL,
  `user` text COLLATE latin1_general_ci,
  `Passwd` text CHARACTER SET utf8,
  `Eingeloggt` tinyint(1) DEFAULT NULL,
  `LastLogin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bild`
--

CREATE TABLE IF NOT EXISTS `bild` (
`ID` int(11) NOT NULL,
  `ImageName` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `farbe`
--

CREATE TABLE IF NOT EXISTS `farbe` (
`ID` int(11) NOT NULL,
  `Farbname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `HexWert` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gegenstand`
--

CREATE TABLE IF NOT EXISTS `gegenstand` (
`ID` int(11) NOT NULL,
  `Gegenstandsname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KategorieID` int(11) DEFAULT NULL,
  `Gegenstandshöhe` int(11) DEFAULT NULL,
  `Gegenstandsbreite` int(11) DEFAULT NULL,
  `Gegenstandstiefe` int(11) DEFAULT NULL,
  `FarbID` int(11) DEFAULT NULL,
  `BildID` int(11) DEFAULT NULL,
  `Anzahl` int(11) DEFAULT NULL,
  `KünstlerID` int(11) DEFAULT NULL,
  `Beschreibung` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `interne beziehung bild`
--

CREATE TABLE IF NOT EXISTS `interne beziehung bild` (
`ID` int(11) NOT NULL,
  `GegenstandID` int(11) DEFAULT NULL,
  `BildID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `interne verbindung kategorie`
--

CREATE TABLE IF NOT EXISTS `interne verbindung kategorie` (
`ID` int(11) NOT NULL,
  `GegenstandID` int(11) DEFAULT NULL,
  `KategorieID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `interne verknüpfung künstler`
--

CREATE TABLE IF NOT EXISTS `interne verknüpfung künstler` (
`ID` int(11) NOT NULL,
  `GegenstandID` int(11) DEFAULT NULL,
  `KünstlerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorie`
--

CREATE TABLE IF NOT EXISTS `kategorie` (
`ID` int(11) NOT NULL,
  `Kategorie` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `künstler`
--

CREATE TABLE IF NOT EXISTS `künstler` (
`ID` int(11) NOT NULL,
  `Künstlername` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`ID` int(11) NOT NULL,
  `BenutzerID` int(11) DEFAULT NULL,
  `Benutzername` text COLLATE latin1_general_ci,
  `Vorname` text COLLATE latin1_general_ci,
  `Nachname` text COLLATE latin1_general_ci,
  `EMail` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reservierung`
--

CREATE TABLE IF NOT EXISTS `reservierung` (
`ID` int(11) NOT NULL,
  `BenutzerID` int(11) DEFAULT NULL,
  `GegenstandsID` int(11) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verbindung`
--

CREATE TABLE IF NOT EXISTS `verbindung` (
`ID` int(11) NOT NULL,
  `GegenstandsID` int(11) DEFAULT NULL,
  `FarbID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `benutzer`
--
ALTER TABLE `benutzer`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bild`
--
ALTER TABLE `bild`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `farbe`
--
ALTER TABLE `farbe`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gegenstand`
--
ALTER TABLE `gegenstand`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `interne beziehung bild`
--
ALTER TABLE `interne beziehung bild`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `interne verbindung kategorie`
--
ALTER TABLE `interne verbindung kategorie`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `interne verknüpfung künstler`
--
ALTER TABLE `interne verknüpfung künstler`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `künstler`
--
ALTER TABLE `künstler`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservierung`
--
ALTER TABLE `reservierung`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `verbindung`
--
ALTER TABLE `verbindung`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bild`
--
ALTER TABLE `bild`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `farbe`
--
ALTER TABLE `farbe`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gegenstand`
--
ALTER TABLE `gegenstand`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interne beziehung bild`
--
ALTER TABLE `interne beziehung bild`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interne verbindung kategorie`
--
ALTER TABLE `interne verbindung kategorie`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interne verknüpfung künstler`
--
ALTER TABLE `interne verknüpfung künstler`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `künstler`
--
ALTER TABLE `künstler`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservierung`
--
ALTER TABLE `reservierung`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `verbindung`
--
ALTER TABLE `verbindung`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
