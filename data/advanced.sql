-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-07-26 04:55:48
-- 服务器版本： 5.6.24-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `yii_user`
--

CREATE TABLE IF NOT EXISTS `yii_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `time_insert` int(11) NOT NULL,
  `time_update` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `yii_user`
--

INSERT INTO `yii_user` (`id`, `username`, `password`, `tel`, `email`, `status`, `time_insert`, `time_update`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '13288888888', '923332947@qq.com', 10, 1437828109, 1437852319);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yii_user`
--
ALTER TABLE `yii_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yii_user`
--
ALTER TABLE `yii_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
