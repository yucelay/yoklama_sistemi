-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 May 2013, 15:41:54
-- Sunucu sürümü: 5.5.16
-- PHP Sürümü: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `yoklama_sistemi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `kullanici_adi` varchar(15) NOT NULL,
  `sifre` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullanici_adi`, `sifre`) VALUES
('m', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE IF NOT EXISTS `dersler` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ders` text NOT NULL,
  `sinif` int(5) NOT NULL,
  `ders_say` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`id`, `ders`, `sinif`, `ders_say`) VALUES
(1, 'INTERNET PROGRAMCILIGI', 1, 19),
(2, 'VERI TABANI', 1, 3),
(3, 'GORSEL PROGRAMLAMA', 2, 7),
(4, 'TEMEL BILGISAYAR', 1, 39),
(5, 'GORSEL PROGRAMALAMA II', 2, 6),
(6, 'VERI TABANI II', 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gunluk`
--

CREATE TABLE IF NOT EXISTS `gunluk` (
  `ogr_no` int(11) NOT NULL,
  `ad_soyad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE IF NOT EXISTS `ogrenci` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(15) NOT NULL,
  `sifre` varchar(15) NOT NULL,
  `ders` varchar(50) NOT NULL,
  `devamsizlik` int(11) NOT NULL,
  `tarih` varchar(11) NOT NULL,
  `ogrsinif` int(5) NOT NULL,
  `ip_adresi` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `kullanici_adi`, `sifre`, `ders`, `devamsizlik`, `tarih`, `ogrsinif`, `ip_adresi`) VALUES
(101, 'ad', '254', 'TEMEL BILGISAYAR', 1, '14.05.2013', 1, '::1'),
(100, 'ad', '254', 'TEMEL BILGISAYAR', 1, '14.05.2013', 1, '::1'),
(99, 'ad', '254', 'TEMEL BILGISAYAR', 1, '14.05.2013', 1, '::1'),
(98, 'ad', '254', 'TEMEL BILGISAYAR', 1, '14.05.2013', 1, '::1'),
(97, 'yy', '457', 'TEMEL BILGISAYAR', 1, '14.05.2013', 1, '::1'),
(96, 'yy', '457', 'TEMEL BILGISAYAR', 1, '14.05.2013', 1, '::1'),
(95, 'veli', '128', 'INTERNET PROGRAMCILIGI', 1, '14.05.2013', 1, '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `secili_ders` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tmpsinif` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
