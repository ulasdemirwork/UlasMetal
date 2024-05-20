-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Eyl 2022, 21:32:53
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yagiz-metal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_li_1` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_li_2` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_li_3` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `footer_li_4` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_facebook`, `footer_twitter`, `footer_youtube`, `footer_instagram`, `footer_aciklama`, `footer_li_1`, `footer_li_2`, `footer_li_3`, `footer_li_4`) VALUES
(2, 'www.facebook.com', 'www.twitter.com', 'www.youtube.com', 'www.instagram.com', 'Sosyal medya hesaplarımızdan bizimle iletişime geçin ve yeniliklerden haberdar olmak için takipte kalın.', 'Bize Ulaşın', 'Eating-Maker İmdadınıza yetişti.', 'Eating-Maker', 'Eating-Maker ile yemek yapmak daha kolay.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_ayar`
--

CREATE TABLE `iletisim_ayar` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_tel2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_tel3` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_hizmet_bolgesi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_wp` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_telara` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_ayar`
--

INSERT INTO `iletisim_ayar` (`iletisim_id`, `iletisim_email`, `iletisim_tel`, `iletisim_tel2`, `iletisim_tel3`, `iletisim_hizmet_bolgesi`, `iletisim_wp`, `iletisim_telara`) VALUES
(1, 'a@gmail.com', 'ab', 'ab', 'ab', 'ab', '05558833460', '05558833460');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(102, '2021-12-27 20:38:24', '', '', '', 'cyasar@gmail.com', '11111111111', 'f43affe6bd0c09a90d1dc23b0554b8d8', 'Çisem Yaşar', '', '', '', '', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayar`
--

CREATE TABLE `site_ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icon_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_ayar`
--

INSERT INTO `site_ayar` (`ayar_id`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_title`, `icon_resimyol`) VALUES
(2, 'ab', 'bb', 'a', 'ab', 'dimg/icon/29762247952936929096yazilim-ogrenmeye-nereden-baslamalisiniz.jpeg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Tablo için indeksler `iletisim_ayar`
--
ALTER TABLE `iletisim_ayar`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `site_ayar`
--
ALTER TABLE `site_ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim_ayar`
--
ALTER TABLE `iletisim_ayar`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Tablo için AUTO_INCREMENT değeri `site_ayar`
--
ALTER TABLE `site_ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
