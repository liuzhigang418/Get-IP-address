-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 �?17 �?11:04
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ip_query`
--

-- --------------------------------------------------------

--
-- 表的结构 `c_region`
--

CREATE TABLE IF NOT EXISTS `c_region` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(30) NOT NULL,
  `REGION_CODE` varchar(30) NOT NULL,
  `CITY_NAME` varchar(64) NOT NULL,
  `CITY_SHORT` varchar(64) NOT NULL,
  `AREA_CODE` varchar(30) NOT NULL,
  `COUNTRY_CODE` varchar(30) NOT NULL,
  `REGION_LEVEL` char(1) NOT NULL,
  `LATITUDE` varchar(30) NOT NULL,
  `LONGITUDE` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
