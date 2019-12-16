-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 04:18 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesrekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `Id_Pakaian` int(10) NOT NULL,
  `Nama_Pakaian` varchar(125) NOT NULL,
  `Merk_Pakaian` varchar(125) NOT NULL,
  `Jenis_Pakaian` varchar(125) NOT NULL,
  `Harga_Pakaian` varchar(225) NOT NULL,
  `Deskripsi_Pakaian` varchar(255) NOT NULL,
  `Gambar_Pakaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`Id_Pakaian`, `Nama_Pakaian`, `Merk_Pakaian`, `Jenis_Pakaian`, `Harga_Pakaian`, `Deskripsi_Pakaian`, `Gambar_Pakaian`) VALUES
(1, 'Kaos thank u, next', 'H&M', 'Baju', '130000', 'Kaos H&M ini merupakan kolaborasi dengan Ariana Grande', '1.jpg'),
(29, 'Celana Jogger', 'Zara', 'Celana', '350000', 'Celana panjang zara ini merupakan celana model jogger yang dilengkapi dengan karet', '2.jpg'),
(30, 'Rok 5 Kancing', 'Stradivarius', 'Rok', '260000', 'Rok selutut menggunakan kain katun ini dilengkapi oleh ikat pinggang yang elastis', '3.jpg'),
(31, 'Mantel', 'Zara', 'Jaket', '670000', 'Mantel ini terbuat dari bahan yang dicampur dangan kain wol', '4.jpg'),
(32, 'Jeans Jacket', 'Levi\'s', 'Jaket', '995000', 'Jacket ini terbuat dari bahan yang hangat yang memiliki lapisan yang lembut', '5.jpg'),
(33, 'Kaos Stranger Things', 'Pull&Bear', 'Baju', '355000', 'Kaos ini terbuat dari katun 100%', '6.jpg'),
(34, 'Kemeja Vintage', 'Gucci', 'Baju', '999000', 'Kemeja berwarna putih ini menampilkan detail kancing yang terbuat dari mutiara imitasi', '7.jpg'),
(35, 'Rok Jeans Retro', 'Levi\'s', 'Rok', '750000', 'Rok denim bergaya retro ini memiliki detail berwarna putih pada bagian tengahnya', '8.jpg'),
(36, 'Celana jeans Vintage', 'Levi\'s', 'Celana', '678000', 'Celana bergaya modern ini mampu menampilkan ksan kaki yang panjang', '9.jpg'),
(37, 'Kemeja Asymmetric', 'H&M', 'Baju', '760000', 'Kemeja katun bergaris asimetris ini memiliki kancing diagonal dan dasi di satu sisi', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `saldo`) VALUES
(6, 'Penjual', 'admin@mail.com', 'default.jpg', '$2y$10$MqaEKUHtUp.TBmcTCEfJ/e53iweAJcjRLU9FcFe7y99F/A82wsnbW', 1, 1, 1576464733, 0),
(7, 'Pembeli', 'user@mail.com', 'default.jpg', '$2y$10$0KGoJ/nEjBUMmBJXdINiyujpyuwGa0ns0NP6SzV6fDAfGorgUQzj2', 2, 1, 1576464788, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(6, 1, 4),
(7, 2, 5),
(8, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Product Management', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user/profile', 'fas fa-fw fa-user-tie', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 9, 'Fashion', 'fashion', 'fas fa-fw fa-tshirt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`Id_Pakaian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `Id_Pakaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
