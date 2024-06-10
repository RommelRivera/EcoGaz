-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 05:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecogaz`
--
CREATE DATABASE IF NOT EXISTS `ecogaz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecogaz`;

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `Nombre`, `Login`, `Password`, `Estado`) VALUES
(1, 'Luis', 'LV', '$2y$10$aQTeFFNbos.R04NV0/9gDOyh4iLZnQgJp7ztlidQl6M.DdT3.OJt6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `precios_combustible`
--

CREATE TABLE `precios_combustible` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Departamento` varchar(45) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Especial` double NOT NULL,
  `Regular` double NOT NULL,
  `Diesel` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `precios_combustible`
--

INSERT INTO `precios_combustible` (`id`, `Nombre`, `Departamento`, `Direccion`, `Especial`, `Regular`, `Diesel`) VALUES
(4, 'UNO', 'Cabañas', 'Cabañas,', 3.43, 3.26, 2.91),
(5, 'UNO Ahuachapán', 'Ahuachapán', 'Ahuachapán, calle 2', 3.44, 3.27, 2.91),
(6, 'PUMA Santa Ana', 'Santa Ana', 'Santa Ana, avenida #88', 3.44, 3.27, 2.91),
(7, 'ALBA Sonsonate', 'Sonsonate', 'Sonsonate, avenida #2', 3.44, 3.27, 2.91),
(8, 'DLC San Salvador', 'San Salvador', 'San Salvador, Prolongación Avenida Alberto Masferrer y Calle a San Antonio Abad, contiguo a Colonia ', 3.43, 3.26, 2.9),
(9, 'TEXACO Santa Tecla', 'La Libertad', 'La Libertad, Santa Tecla', 3.43, 3.26, 2.9),
(10, 'UNO Chalatenango', 'Chalatenango', 'Chalatenango, Carretera Amayo', 3.43, 3.26, 2.9),
(11, ' PUMA Cojutepeque', 'Cuscatlán', 'P3G7+2J2 Gasolinera Puma Cojutepeque, Cojutepeque', 3.43, 3.26, 2.9),
(12, 'TEXACO Zacatecoluca', 'La Paz', 'Zacatecoluca,Texaco El Pedregal, CA-2, El Rosario', 3.43, 3.26, 2.9),
(13, 'DLC San Vicente', 'San Vicente', 'San Vicente, calle #3', 3.43, 3.26, 2.9),
(14, 'ALBA Usulután', 'Usulután', 'Gasolinera Alba, 8HRP+7QX, Santa Maria', 3.48, 3.31, 2.95),
(15, 'ALBA San Miguel', 'San Miguel', 'San Miguel, carretera #3, diagonal 2', 3.48, 3.31, 2.95),
(16, 'TEXACO San Francisco Gotera', 'Morazán', 'Morazán, San Francisco Gotera', 3.48, 3.31, 2.95),
(17, 'PUMA La Unión', 'La Unión', 'La Unión, calle poniente', 3.48, 3.31, 2.95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indexes for table `precios_combustible`
--
ALTER TABLE `precios_combustible`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `precios_combustible`
--
ALTER TABLE `precios_combustible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
