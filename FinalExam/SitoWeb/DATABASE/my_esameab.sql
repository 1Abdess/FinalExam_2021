-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 alle 11:11
-- Versione del server: 8.0.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_esameab`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

CREATE TABLE IF NOT EXISTS `immagine` (
  `IdImm` int NOT NULL AUTO_INCREMENT,
  `FkNome` varchar(50) NOT NULL,
  `path` varchar(2000) NOT NULL,
  PRIMARY KEY (`IdImm`),
  KEY `vincoloNomeMus` (`FkNome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `immagine`
--

INSERT INTO `immagine` (`IdImm`, `FkNome`, `path`) VALUES
(1, 'Museo Delle Arti', '<html>\r\n	<head></head>\r\n	<body>\r\n\r\n    <style type="text/css">\r\n        body{\r\n            height: 100%;\r\n            width: 100%;\r\n            padding: 0;\r\n            margin: 0;\r\n            overflow: hidden;\r\n            background-color: black;\r\n            color: white;\r\n        }\r\n        div#viewer{\r\n            height: 100%;\r\n            min-height: 100%;\r\n            width: 100%;\r\n            position: absolute;\r\n            top: 0;\r\n            left: 0;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n\r\n        div#viewer .logo {\r\n            display: none;\r\n        }\r\n\r\n	.immagine{\r\n	    height: 100%;\r\n    	width: 100%;\r\n    	top: 0;\r\n    	left: 0;\r\n    	margin: 0;\r\n   	    padding: 0;\r\n    	overflow: hidden;	\r\n	}\r\n\r\n    </style>\r\n		<iframe class ="immagine" src = "https://www.nga.gov/content/ngaweb/image-zoomer.html?path=b564276f-6577-4490-bd5a-c714ae95611e" frameborder = "0" scrolling = "0">\r\n	    <script type="text/javascript">\r\n        new IIPMooViewer( "viewer", {\r\n            server: ''https://media.nga.gov/fastcgi/iipsrv.fcgi'',\r\n            image: ''4fb3e304-dbcc-4555-9291-8cf1daf1c6cb'',\r\n            prefix:''https://www.nga.gov/etc/designs/ngaweb/images/iip/''\r\n        });\r\n\r\n    </script>\r\n</body>\r\n</html>'),
(2, 'Museo Delle Arti', '<html>\r\n	<head></head>\r\n	<body>\r\n\r\n    <style type="text/css">\r\n        body{\r\n            height: 100%;\r\n            width: 100%;\r\n            padding: 0;\r\n            margin: 0;\r\n            overflow: hidden;\r\n            background-color: black;\r\n            color: white;\r\n        }\r\n        div#viewer{\r\n            height: 100%;\r\n            min-height: 100%;\r\n            width: 100%;\r\n            position: absolute;\r\n            top: 0;\r\n            left: 0;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n\r\n        div#viewer .logo {\r\n            display: none;\r\n        }\r\n\r\n	.immagine{\r\n	    height: 100%;\r\n    	width: 100%;\r\n    	top: 0;\r\n    	left: 0;\r\n    	margin: 0;\r\n   	    padding: 0;\r\n    	overflow: hidden;	\r\n	}\r\n\r\n    </style>\r\n		<iframe class ="immagine" src = "https://www.nga.gov/image-zoomer.html?path=2168b8e0-865c-4520-a9e5-c48c8592fcaa" frameborder = "0" scrolling = "0">\r\n	    <script type="text/javascript">\r\n        new IIPMooViewer( "viewer", {\r\n            server: ''https://media.nga.gov/fastcgi/iipsrv.fcgi'',\r\n            image: ''4fb3e304-dbcc-4555-9291-8cf1daf1c6cb'',\r\n            prefix:''https://www.nga.gov/etc/designs/ngaweb/images/iip/''\r\n        });\r\n\r\n    </script>\r\n</body>\r\n</html>'),
(3, 'Museo Delle Arti', '<html>\r\n	<head></head>\r\n	<body>\r\n\r\n    <style type="text/css">\r\n        body{\r\n            height: 100%;\r\n            width: 100%;\r\n            padding: 0;\r\n            margin: 0;\r\n            overflow: hidden;\r\n            background-color: black;\r\n            color: white;\r\n        }\r\n        div#viewer{\r\n            height: 100%;\r\n            min-height: 100%;\r\n            width: 100%;\r\n            position: absolute;\r\n            top: 0;\r\n            left: 0;\r\n            margin: 0;\r\n            padding: 0;\r\n        }\r\n\r\n        div#viewer .logo {\r\n            display: none;\r\n        }\r\n\r\n	.immagine{\r\n	    height: 100%;\r\n    	width: 100%;\r\n    	top: 0;\r\n    	left: 0;\r\n    	margin: 0;\r\n   	    padding: 0;\r\n    	overflow: hidden;	\r\n	}\r\n\r\n    </style>\r\n		<iframe class ="immagine" src = "https://www.nga.gov/image-zoomer.html?path=8f29e3c9-a289-4d53-abf0-31a66e9e98fa" frameborder = "0" scrolling = "0">\r\n	    <script type="text/javascript">\r\n        new IIPMooViewer( "viewer", {\r\n            server: ''https://media.nga.gov/fastcgi/iipsrv.fcgi'',\r\n            image: ''4fb3e304-dbcc-4555-9291-8cf1daf1c6cb'',\r\n            prefix:''https://www.nga.gov/etc/designs/ngaweb/images/iip/''\r\n        });\r\n\r\n    </script>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Struttura della tabella `museo`
--

CREATE TABLE IF NOT EXISTS `museo` (
  `nome` varchar(50) NOT NULL,
  `via` varchar(100) NOT NULL,
  `stato` varchar(30) NOT NULL,
  `descrizione` varchar(1500) NOT NULL,
  `costo` varchar(10) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `museo`
--

INSERT INTO `museo` (`nome`, `via`, `stato`, `descrizione`, `costo`) VALUES
('Museo Delle Arti', 'Via Pontegradella, 25, 44123 Ferrara', 'IT', 'Prova di un museo per l''esame di stato.', '0,01');

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamenti`
--

CREATE TABLE IF NOT EXISTS `pagamenti` (
  `IdPag` int NOT NULL AUTO_INCREMENT,
  `FkEmail` varchar(50) NOT NULL,
  `FkNomeMuseo` varchar(50) NOT NULL,
  `data` varchar(40) NOT NULL,
  `ora` varchar(40) NOT NULL,
  PRIMARY KEY (`IdPag`),
  KEY `vincoloNomeMuseo` (`FkNomeMuseo`),
  KEY `vincoloEmailUtente` (`FkEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `pagamenti`
--

INSERT INTO `pagamenti` (`IdPag`, `FkEmail`, `FkNomeMuseo`, `data`, `ora`) VALUES
(12, 'prova@gmail.com', 'Museo Delle Arti', '24-05-2021', '08:16'),
(14, 'prova@gmail.com', 'Museo Delle Arti', '24-05-2021', '12:41'),
(15, 'prova@gmail.com', 'Museo Delle Arti', '14-06-2021', '09:21');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `email` varchar(50) NOT NULL,
  `password` varchar(24) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `attivo` int NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `immagine`
--
ALTER TABLE `immagine`
  ADD CONSTRAINT `vincoloNomeMus` FOREIGN KEY (`FkNome`) REFERENCES `museo` (`nome`);

--
-- Limiti per la tabella `pagamenti`
--
ALTER TABLE `pagamenti`
  ADD CONSTRAINT `vincoloEmailUtente` FOREIGN KEY (`FkEmail`) REFERENCES `utente` (`email`),
  ADD CONSTRAINT `vincoloNomeMuseo` FOREIGN KEY (`FkNomeMuseo`) REFERENCES `museo` (`nome`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
