-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Okt 2017 pada 17.33
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hrd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `userID` int(9) NOT NULL,
  `noktp` text NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`userID`, `noktp`, `fullname`, `username`, `email`, `gender`, `password`) VALUES
(1, '0', 'lalala', 'lala', 'lala@ail.com', '', 'lala'),
(2, '0', 'lalala', 'lala', 'lala@ail.com', '', 'lala'),
(3, '0', 'asdas', 'asdas', 'asdas@gmail.asdasd', '', 'asdasdasd'),
(4, '0', 'qweqweqw', 'qweqweqwe', 'qweqweqwe@asdasd', '', '$2y$10$fF1jMoUTY5f6mnp2riiwvOvrM3y6AXRou'),
(5, '0', 'reno', 'diandika', 'hermawan@gmail.com', '', '$2y$10$cWQFwD5oHZh3DdG6jYDZJe4kwVnsiUPzs'),
(6, '0', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$b7n1boRbh2V7y0TFen/3FODV0GxBjTCk3'),
(7, '0', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$EMElGfOFqx4xFeVCf1nJ9.H28ePNqhQYb'),
(8, '0', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$Qp6xNb.m5XLhBjfw53rYUevcEBFPdDvAw'),
(9, '0', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$3cvn8ExnVGZwVUzbXTBmfuZrn182tmQIk'),
(10, '0', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$Ek/c5c.OCTzIUuSmBNFgau3GFHhOwk5zW'),
(11, '', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$Ip0E3tT14k.lBOC7NhNVyu6L8UXPJa84L'),
(12, '', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$fAsAdaRUDtVW6WJdjuNTeOvl2hPPLnOKh'),
(13, '', 'renooo', 'rennnoo', 'eqweqwe@gmail.com', 'Male', '$2y$10$EEQJyU8EJxKD4m5a.bzUOO1ZQgvCfXIyV'),
(14, '545646845', 'reno diandika hermawan', 'renoo', 'reno@reno.com', 'Male', '$2y$10$BhscWIGys8GXNGZQYWN8BeHDdLNoPpLyA'),
(15, '545646845', 'reno diandika hermawan', 'renoo', 'reno@reno.com', 'Male', '$2y$10$EPCJ2DBuN3Z0zN2Ea1I93utvhrOFwQDO6'),
(16, '545646845', 'reno diandika hermawan', 'renoo', 'reno@reno.com', 'Male', '$2y$10$uCUuPT1jCrsBQMI1/m1woOnoM053kdpCn'),
(17, '545646845', 'reno diandika hermawan', 'renoo', 'reno@reno.com', 'Male', '$2y$10$2bFvZDWn6oeshWS/Fw3oPulmS7Y9kitaJ'),
(18, '545646845', 'reno diandika hermawan', 'renoo', 'reno@reno.com', 'Male', '$2y$10$TCz2xeT9wmWL4EWZsNAoIepXpcdm1PkCD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `userID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
