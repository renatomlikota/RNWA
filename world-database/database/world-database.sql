-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 09:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `world-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `baze_podataka`
--

CREATE TABLE `baze_podataka` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baze_podataka`
--

INSERT INTO `baze_podataka` (`id`, `naziv`, `opis`) VALUES
(1, 'MySQL', 'MySQL je besplatan sustav za upravljanje bazom podataka otvorenog koda.\r\nMySQL baze su relacijskog tipa, koji se pokazao kao najbolji način skladištenja i pretraživanja velikih količina podataka i u suštini predstavljaju osnovu svakog informacijskog sustava, tj. temelj svakog poslovnog subjekta koji svoje poslovanje bazira na dostupnosti kvalitetnih i brzih informacija.\r\nKao i ostali sustavi za upravljanje bazama, i MySQL poštuje ACID načela pri izvođenju transakcija nad podatcima.\r\nMySQL i PHP osvojili su veliki dio tržišta jer su otvorenog pristupa i besplatni za korištenje.\r\n'),
(2, 'Microsoft SQL Server', 'Microsoft SQL Server je relacijska baza podataka kojoj je primarni jezik za upite Transact SQL (T-SQL), što znači da osim osnovnih i klasičnih (SELECT tipa) SQL upita dozvoljava i složenije stvari poput mijenjanja programskog toka (IF naredba) i slično. Transact SQL nastao je kao plod suradnje između Microsofta i Sybasea. SQL server je baza podataka koja se smjestila na prag između manjih i srednjih baza.\r\nSQL Server koristi Transact SQL kao implementaciju SQL-92 (ISO standard za SQL, prihvaćen 1992. godine) s mnogim ekstenzijama. T-SQL uglavnom dodaje dodatnu sintaksu prilikom pisanja procedura, te utječe na podršku za transakcije. Microsoft SQL server i Sybase/ASE obje komuniciraju preko aplikacijski niveliranog protokola imenom „Tabular Data Stream“ ili kraće TDS. TDS je također implementiran od strane FreeTDS-a da bi se omogućilo da što više aplikacija može komunicirati s Microsoft SQL Server i Sybase bazama podataka.\r\n\r\n\r\n'),
(3, 'PostgreSQL', 'PostgreSQL (poznat i kao Postgres ili pgsql) je besplatan sustav za upravljanje bazama podataka otvorenog koda.\r\n\r\nSustav poštuje ACID principe pri izvođenju transakcija.\r\n\r\nSustav je proširljiv i drži se većine SQL:2011 standarda.\r\n\r\nPostgreSQL je započeo 1986. kao dio POSTGRES-a kojeg je razvilo Sveučilište Kalifornije u Berkeleyu. Sada ga pored male osnovne ekipe razvija i podržava veliki broj tvrtki i pojedinaca.\r\n\r\nMnogi popularni online servisi koriste PostgreSQL za održavanje svojih glavnih relacijskih baza podataka, među kojima su Reddit, Skype, Instagram, The Guardian i drugi.'),
(4, 'Oracle', 'Oracle Database je multimodalni sistem upravljanja bazama podataka koji proizvodi i prodaje kompanija Oracle Corporation. To je baza podataka koja se obično koristi za izvršavanje mrežne obrade transakcija, skladištenja podataka i mješovitih radnih opterećenja baze podataka.'),
(5, 'MongoDB', 'MongoDB je izvor podataka dostupan međuplatformski program orijentisan na dokumente. Klasifikovan kao NoSQL program za baze podataka, MongoDB koristi dokumente slične JSON-u sa opcionim šemama. MongoDB je razvila kompanija MongoDB Inc. i licencirana je pod javnom licencom na strani servera.'),
(6, 'IBM Db2', 'Db2 je porodica proizvoda za upravljanje podacima, uključujući poslužitelje baza podataka, koju je razvio IBM. U početku su podržavali relacijski model, ali su prošireni da podržavaju objektno-relacijske značajke i nerelacijske strukture poput JSON i XML.'),
(7, 'Redis', 'Redis je skladište strukture podataka u memoriji, koje se koristi kao distribuirana, u memoriji baza podataka ključ/vrijednost, keš i posrednik poruka, sa opcionom izdržljivošću.'),
(8, 'Elasticsearch', 'Elasticsearch je pretraživač zasnovan na biblioteci Lucene. Pruža distribuirani pretraživač punih tekstova sa mogućnostima multitenanata sa HTTP web interfejsom i JSON dokumentima bez šeme.'),
(9, 'SQLite', 'SQLite je relacijska baza podataka temeljena na maloj C programskoj biblioteci. Glavne značajke baze podataka SQLite su: Transakcije funkcioniraju po načelu ACID. Podatci ostaju postojani pri padu sustava ili nestanku električne energije. Nulta konfiguracija nema potrebu za prilagođavanjem i administracijom.'),
(10, 'Splunk', 'Splunk Inc. je američka softverska kompanija sa sjedištem u San Francisku, Kalifornija, koja proizvodi softver za pretraživanje, praćenje i analizu podataka generisanih mašinama putem interfejsa u stilu Weba.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baze_podataka`
--
ALTER TABLE `baze_podataka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baze_podataka`
--
ALTER TABLE `baze_podataka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
