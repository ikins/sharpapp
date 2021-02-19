-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 18 Feb 2021 pada 22.28
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsharp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `core_user`
--

CREATE TABLE `core_user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `core_user`
--

INSERT INTO `core_user` (`user_id`, `email`, `password`, `name`) VALUES
(1, 'admin@id.sharp', '827ccb0eea8a706c4c34a16891f84e7b', 'id.sharp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_voucher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_user` varchar(255) NOT NULL,
  `game_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game_voucher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor_buy`
--

CREATE TABLE `visitor_buy` (
  `vb_id` int(11) NOT NULL,
  `vb_ip` varchar(20) NOT NULL,
  `vb_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor_daily`
--

CREATE TABLE `visitor_daily` (
  `vd_id` int(11) NOT NULL,
  `vd_ip` varchar(20) NOT NULL,
  `vd_date` date NOT NULL,
  `vd_hit` int(11) NOT NULL,
  `vd_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor_daily_history`
--

CREATE TABLE `visitor_daily_history` (
  `vh_id` int(11) NOT NULL,
  `vh_ip` int(11) NOT NULL,
  `vh_browser` int(11) NOT NULL,
  `vh_os` int(11) NOT NULL,
  `vh_device` int(11) NOT NULL COMMENT '1:mobile, 2:desktop',
  `vh_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor_event_live`
--

CREATE TABLE `visitor_event_live` (
  `vel_id` int(11) NOT NULL,
  `vel_ip` varchar(20) NOT NULL,
  `vel_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor_product`
--

CREATE TABLE `visitor_product` (
  `vp_id` int(11) NOT NULL,
  `vp_ip` int(11) NOT NULL,
  `vp_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vp_product_category` int(2) NOT NULL COMMENT '1: Audio Visual, 2: Refrigerator, 3: Washing Machine, 4: Air Con & Air Pur, 5: Small Home, 6: Smartphone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitor_product`
--

INSERT INTO `visitor_product` (`vp_id`, `vp_ip`, `vp_date`, `vp_product_category`) VALUES
(1, 1, '2021-02-01 00:00:00', 6),
(2, 2, '2021-02-18 23:57:59', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core_user`
--
ALTER TABLE `core_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `visitor_buy`
--
ALTER TABLE `visitor_buy`
  ADD PRIMARY KEY (`vb_id`);

--
-- Indexes for table `visitor_daily`
--
ALTER TABLE `visitor_daily`
  ADD PRIMARY KEY (`vd_id`);

--
-- Indexes for table `visitor_daily_history`
--
ALTER TABLE `visitor_daily_history`
  ADD PRIMARY KEY (`vh_id`);

--
-- Indexes for table `visitor_event_live`
--
ALTER TABLE `visitor_event_live`
  ADD PRIMARY KEY (`vel_id`);

--
-- Indexes for table `visitor_product`
--
ALTER TABLE `visitor_product`
  ADD PRIMARY KEY (`vp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core_user`
--
ALTER TABLE `core_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_buy`
--
ALTER TABLE `visitor_buy`
  MODIFY `vb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_daily`
--
ALTER TABLE `visitor_daily`
  MODIFY `vd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_daily_history`
--
ALTER TABLE `visitor_daily_history`
  MODIFY `vh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_event_live`
--
ALTER TABLE `visitor_event_live`
  MODIFY `vel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_product`
--
ALTER TABLE `visitor_product`
  MODIFY `vp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
