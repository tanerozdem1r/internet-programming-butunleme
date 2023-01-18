-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 15:40:47
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tanershop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'taner', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayarlar_id` int(11) NOT NULL,
  `ayarlar_sitebaslik` varchar(300) NOT NULL,
  `ayarlar_siteurl` varchar(300) NOT NULL,
  `ayarlar_sitekeyw` varchar(300) NOT NULL,
  `ayarlar_sitedesc` varchar(300) NOT NULL,
  `ayarlar_sitelogo` varchar(300) NOT NULL,
  `ayarlar_sitekdv` int(11) NOT NULL,
  `ayarlar_sitesiparisdurum` varchar(200) NOT NULL,
  `ayarlar_sitedurum` tinyint(1) NOT NULL DEFAULT 1,
  `ayarlar_smtphost` varchar(300) NOT NULL,
  `ayarlar_smtpmail` varchar(300) NOT NULL,
  `ayarlar_smtpsifre` varchar(300) NOT NULL,
  `ayarlar_smtpsec` varchar(100) NOT NULL,
  `ayarlar_smtpport` varchar(100) NOT NULL,
  `ayarlar_smtpkime` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayarlar_id`, `ayarlar_sitebaslik`, `ayarlar_siteurl`, `ayarlar_sitekeyw`, `ayarlar_sitedesc`, `ayarlar_sitelogo`, `ayarlar_sitekdv`, `ayarlar_sitesiparisdurum`, `ayarlar_sitedurum`, `ayarlar_smtphost`, `ayarlar_smtpmail`, `ayarlar_smtpsifre`, `ayarlar_smtpsec`, `ayarlar_smtpport`, `ayarlar_smtpkime`) VALUES
(1, 'TanerShop | Online Manav Satış Sitesi', 'http://localhost/shop/', 'TanerShop | Online Manav Satış Sitesi', 'TanerShop | Online Manav Satış Sitesi', 'logo.png', 18, '1', 1, 'smtp-mail.outlook.com', 'tanerozdemir2001@hotmail.com', '123123', 'TLS', '587', 'taner_ozdemir_28@hotmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `govde` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `govde`) VALUES
(2, 'Hakkımızda Taner Shop', '2001 yılında İstanbulda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(11) NOT NULL,
  `adi` text NOT NULL,
  `etkin_mi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `adi`, `etkin_mi`) VALUES
(1, 'q12w', 1),
(2, 'aasda', 1),
(3, 'Meyveler', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `baslik` text NOT NULL,
  `etkin_mi` tinyint(1) NOT NULL,
  `icerik` text NOT NULL,
  `sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`baslik`, `etkin_mi`, `icerik`, `sira`) VALUES
('asda', 1, 'asdadasda', 1),
('242342', 1, '23423423', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `sepet_bayi` varchar(200) NOT NULL,
  `sepet_urun` varchar(200) NOT NULL,
  `sepet_adet` int(11) NOT NULL,
  `sepet_tarih` date NOT NULL DEFAULT current_timestamp(),
  `sepet_silinme` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` text NOT NULL,
  `urun_fiyat` double NOT NULL,
  `urun_info` text NOT NULL,
  `urun_like` int(11) NOT NULL,
  `urun_kategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_bayi` varchar(200) NOT NULL,
  `yorum_urun` varchar(200) NOT NULL,
  `yorum_isim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayarlar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sira`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayarlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
