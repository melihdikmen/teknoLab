-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 May 2018, 16:02:15
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `teknolab`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `kullanicAdi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `e-posta` varchar(50) NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ID`, `kullanicAdi`, `sifre`, `e-posta`, `online`) VALUES
(1, 'mdikmen', 'mlh135', 'melihdikmen06@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `ID` int(10) NOT NULL,
  `DersAd` varchar(50) NOT NULL,
  `OgrId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanim`
--

CREATE TABLE `kullanim` (
  `Id` int(10) NOT NULL,
  `lab_id` int(10) NOT NULL,
  `OgrId` int(10) NOT NULL,
  `DersId` int(10) NOT NULL,
  `Ogretim` varchar(50) NOT NULL,
  `Gun` varchar(20) NOT NULL,
  `Saat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lab`
--

CREATE TABLE `lab` (
  `id` int(10) NOT NULL,
  `lab_adi` varchar(50) NOT NULL,
  `lab_bilgi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `lab`
--

INSERT INTO `lab` (`id`, `lab_adi`, `lab_bilgi`) VALUES
(1, 'Lab-3', '3.Kat 40 Bilgisayar'),
(5, 'Lab-2', '30 Bilgisayar Kat 2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogr`
--

CREATE TABLE `ogr` (
  `Id` int(10) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `unvan` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogr`
--

INSERT INTO `ogr` (`Id`, `ad`, `soyad`, `unvan`, `username`, `password`, `eposta`) VALUES
(1, 'Melih', 'Dikmen', 'Prof', 'mdikmen', 'mlh135', 'melih@selcuk.edu.tr'),
(2, 'Baki', 'Yoğurtçu', 'Prof', 'baki123', '12345', 'baki@selcuk.edu.tr');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OgrId` (`OgrId`);

--
-- Tablo için indeksler `kullanim`
--
ALTER TABLE `kullanim`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `lab_id` (`lab_id`,`OgrId`,`DersId`),
  ADD KEY `OgrId` (`OgrId`),
  ADD KEY `DersId` (`DersId`);

--
-- Tablo için indeksler `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogr`
--
ALTER TABLE `ogr`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `kullanim`
--
ALTER TABLE `kullanim`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `ogr`
--
ALTER TABLE `ogr`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `dersler`
--
ALTER TABLE `dersler`
  ADD CONSTRAINT `dersler_ibfk_1` FOREIGN KEY (`OgrId`) REFERENCES `ogr` (`Id`);

--
-- Tablo kısıtlamaları `kullanim`
--
ALTER TABLE `kullanim`
  ADD CONSTRAINT `kullanim_ibfk_1` FOREIGN KEY (`lab_id`) REFERENCES `lab` (`id`),
  ADD CONSTRAINT `kullanim_ibfk_3` FOREIGN KEY (`DersId`) REFERENCES `dersler` (`ID`),
  ADD CONSTRAINT `kullanim_ibfk_4` FOREIGN KEY (`OgrId`) REFERENCES `ogr` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
