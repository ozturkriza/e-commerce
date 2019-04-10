-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Oca 2018, 18:29:12
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) UNSIGNED NOT NULL,
  `adsoy` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `yetki` varchar(60) NOT NULL,
  `durum` varchar(60) NOT NULL,
  `resim` varchar(60) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Id`, `adsoy`, `email`, `password`, `yetki`, `durum`, `resim`, `tarih`) VALUES
(1, 'Muhammet Riza Öztürk', 'oztrkriza@hotmail.com', '123', 'admin', 'aktif', '', '2017-12-26'),
(2, 'Ali Öztürk', 'aliozturk@hotmail.com', '1234', 'admin', 'aktif', '', '0000-00-00'),
(3, 'Ezgi Öztürk', 'ezgi@gmail.com', 'ezgi', 'admin', 'aktif', 'ezgi.jpg', '0000-00-00'),
(4, 'Ozan Kösem', 'ozan@hotmail.com', 'ozan', 'admin', 'aktif', 'ozan.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpserver` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT NULL,
  `smtpemail` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci,
  `iletisim` text COLLATE utf8_turkish_ci,
  `facebook` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pinterest` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`Id`, `adi`, `keywords`, `description`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `password`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `iletisim`, `facebook`, `twitter`, `instagram`, `pinterest`) VALUES
(1, 'Online Satis', 'RIZA', 'Proje ', NULL, 'ssl://smtp.google', 465, 'ozturkriza@hotmail.com', '123', '100.yıl karabük üniversitesi', 'karabük', '05376827834', NULL, NULL, '<h1>Hakkımızda</h1>\r\n\r\n<p>KARAB&Uuml;K &Uuml;NİVERSİTESİ BİLGİSAYAR M&Uuml;HENDİSLİĞİ &Ouml;ZEL KONULAR PROJE DERSİ İ&Ccedil;İN HAZIRLANMIŞ BİR SİTEDE BULUNMAKTASINIZ&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.karabuk.edu.tr/wp-content/uploads/2017/10/genel-kampus.jpg\" style=\"height:382px; width:1042px\" /></p>\r\n', '<p>&nbsp;</p>\r\n\r\n<h3><strong>Adres​</strong></h3>\r\n\r\n<p>100.YIL MAHALLESİ 1083 SOKAK PİRAMİT SİTESİ DAİRE:33&nbsp;KARAB&Uuml;K/MERKEZ</p>\r\n\r\n<h3>İletişim Bilgileri</h3>\r\n\r\n<p><strong>Tel:</strong>&nbsp;0 555&nbsp;333 22 11<br />\r\n<strong>Faks:</strong>&nbsp;0 555 333 22 00</p>\r\n\r\n<p><strong>MUHAMMET RIZA &Ouml;ZT&Uuml;RK</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gönderilen_mesajlar`
--

CREATE TABLE `gönderilen_mesajlar` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `gönderilen_mesajlar`
--

INSERT INTO `gönderilen_mesajlar` (`Id`, `adsoy`, `email`, `tel`, `mesaj`, `durum`, `tarih`, `IP`) VALUES
(11, 'mehmet', 'aliozturk@hotmail.com', '05071112233', 'giden deneme', NULL, '2018-01-08 01:27:33', '0'),
(12, 'Rıza Öztürk', 'oztrkriza@hotmail.com', '55558887744', 'deneme', 'Yeni', '2018-01-08 01:40:38', '::1'),
(13, 'hasan', 'cccccccccccccccccccccc@dd', 's', 'cszczcsz', 'Yeni', '2018-01-08 01:42:00', '::1'),
(14, 'ali', 'ffd@hotmail.com', 'fsf', 'dgsdgddsfds\r\n', 'Yeni', '2018-01-08 14:09:56', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il`
--

CREATE TABLE `il` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

CREATE TABLE `ilce` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `parent_id`, `adi`, `description`, `keywords`, `resim`, `durum`, `tarih`, `isim`) VALUES
(4, 12, 'tshirt', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 12, 'pantolon', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 12, 'gömlek', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 0, 'giyim', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 12, 'ayakkabı', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 0, 'aksesuar', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 14, 'gözlük', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 14, 'saat', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 0, 'elektronik', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 0, 'kitap', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 18, 'televizyon', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 18, 'telefon', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 18, 'bilgisayar', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 0, 'diğer', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT 'Yeni',
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`Id`, `adsoy`, `email`, `tel`, `mesaj`, `durum`, `tarih`, `IP`) VALUES
(25, 'Tuba Öztürk', 'tuba@hotmail.com', '05071112233', 'deneme mesaj', 'Yeni', '2018-01-15 01:21:16', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `Id` int(10) UNSIGNED NOT NULL,
  `adsoy` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`Id`, `adsoy`, `email`, `password`, `yetki`, `durum`, `resim`, `tarih`, `sehir`, `adres`, `tel`) VALUES
(1, 'Muhammet Riza Öztürk', 'oztrkriza@hotmail.com', '123', 'admin', 'aktif', '', '2017-12-26', 'İstanbul', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '05554443322'),
(2, 'Ali Öztürk', 'aliozturk@hotmail.com', '123', 'admin', 'pasif', 'ali.jpg', '0000-00-00', 'Kars', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '05358887799'),
(4, 'Ezgi Öztürk', 'ezgi@gmail.com', 'ezgi', 'admin', 'aktif', 'ezgi.jpg', '0000-00-00', 'İstanbul', '100.yil mahallesi çakir sokak Özlem sitesi daire:7', '05379998877'),
(58, 'Tuba Öztürk', 'tuba@hotmail.com', '123', 'üye', 'aktif', '', '0000-00-00', 'İzmir', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '03708885522'),
(62, 'Oktay Kösem', 'oktay@gmail.com', 'oktay', 'üye', 'aktif', '', '0000-00-00', 'Kars', 'istanbulllllllllllllllllllll', '02213366988'),
(63, 'murat eşki', 'murat@gmail.com', '12345', 'admin', 'aktif', '', '0000-00-00', 'İzmir', 'cumhuriyet bulvarı özlem sitesi I blok daire 5', '4445588');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL,
  `musteri_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adet` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `Id` int(11) NOT NULL,
  `musteri_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tutar` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `odemesekli` varchar(255) COLLATE utf8_turkish_ci DEFAULT 'Kredi Karti',
  `odemedurumu` varchar(255) COLLATE utf8_turkish_ci DEFAULT 'Ödendi',
  `siparisdurumu` varchar(255) COLLATE utf8_turkish_ci DEFAULT 'Yeni',
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sehir` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kargo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`Id`, `musteri_id`, `tarih`, `IP`, `tutar`, `odemesekli`, `odemedurumu`, `siparisdurumu`, `adres`, `ilce`, `sehir`, `tel`, `adsoy`, `kargo`, `aciklama`) VALUES
(35, '4', '2018-01-15 01:00:25', '::1', '1560', 'Kredi Karti', 'Ödendi', 'kargoda', '100.yil mahallesi çakir sokak Özlem sitesi daire:7', NULL, 'KARS', '88888888888888886666', 'Ezgi Öztürk', 'http://kargotakip.araskargo.com.tr/mainpage.aspx?code=43345087994', ' Kargonuz onaylandı en kısa sürede size ulaşacaktır'),
(36, '76', '2018-01-15 01:31:27', '::1', '5', 'Kredi Karti', 'Ödendi', 'kargoda', '100.yıl 1403 sokak no 54 daire 19', NULL, '', '7344322', 'Hüseyin Demir', 'http://kargotakip.araskargo.com.tr/mainpage.aspx?code=43345087994', ' onaylanıp kargoya verildi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL,
  `musteri_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `siparis_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adet` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tutar` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`Id`, `musteri_id`, `siparis_id`, `urun_id`, `adet`, `fiyat`, `tarih`, `adi`, `tutar`) VALUES
(45, '1', '24', '4', '1', '100', '2018-01-14 18:13:23', 'Pantolon', '100'),
(46, '4', '25', '4', '3', '100', '2018-01-14 18:52:47', 'Pantolon', '300'),
(47, '4', '25', '5', '2', '76', '2018-01-14 18:52:47', 'yk', '152'),
(48, '4', '26', '4', '1', '100', '2018-01-14 19:03:50', 'Pantolon', '100'),
(49, '4', '27', '4', '1', '100', '2018-01-14 19:35:37', 'Pantolon', '100'),
(50, '4', '28', '5', '1', '76', '2018-01-14 19:38:03', 'yk', '76'),
(51, '4', '29', '11', '1', '5', '2018-01-14 19:40:57', 'yeni ürün', '5'),
(52, '4', '30', '4', '1', '100', '2018-01-14 19:42:28', 'Pantolon', '100'),
(53, '4', '31', '4', '1', '100', '2018-01-14 19:49:05', 'Pantolon', '100'),
(54, '4', '32', '4', '1', '100', '2018-01-14 19:50:20', 'Pantolon', '100'),
(55, '4', '33', '4', '1', '100', '2018-01-14 19:51:47', 'Pantolon', '100'),
(56, '4', '34', '4', '1', '100', '2018-01-14 19:52:46', 'Pantolon', '100'),
(57, '4', '35', '23', '1', '60', '2018-01-15 01:00:25', 'Luxell Fırın', '60'),
(58, '4', '35', '24', '1', '1500', '2018-01-15 01:00:25', 'iPhone 6s', '1500'),
(59, '76', '36', '11', '1', '5', '2018-01-15 01:31:27', 'Çanta', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulke`
--

CREATE TABLE `ulke` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL,
  `adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kodu` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `turu` int(11) DEFAULT '0',
  `kategori` int(11) DEFAULT '0',
  `afiyat` float DEFAULT '0',
  `sfiyat` float DEFAULT '0',
  `stok` int(11) DEFAULT '0',
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `resim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `grubu` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`Id`, `adi`, `kodu`, `turu`, `kategori`, `afiyat`, `sfiyat`, `stok`, `description`, `keywords`, `aciklama`, `durum`, `tarih`, `resim`, `grubu`) VALUES
(5, 'yk', 'kuhk', 6, 4, 60, 76, 6, 'laptop', '6', 'dg				dxvxdvxdvd', 'pasif', '2017-12-30 22:25:27', 'iframe11.png', 'a'),
(6, 'yhjgn', 'ghm', 0, 8, 0, 0, 0, 'hmf', 'mfgm', '', 'aktif', '2018-01-06 20:42:56', 'pro81.jpg', 'a'),
(7, 'saat', '323', 0, 4, 50, 22, 2, 'dvsdbff', 'dsdg', '<p>fesssssssssssssssssssf</p>\r\n\r\n<p>esfsef</p>\r\n\r\n<p>es</p>\r\n', 'aktif', '2018-01-06 20:49:05', 'pro12.jpg', 'm'),
(10, 'sdsssssssssssssssssssssssss', '', 0, 15, 0, 0, 0, '', 'kkkk', '', 'aktif', '2018-01-06 21:05:11', 'product7.jpg', 'a'),
(11, 'Çanta', '4564', 23, 4, 123, 5, 1, '23şkn', 'kjblh', 'jşkjb		', 'aktif', '2018-01-06 21:20:12', 'pro3.jpg', 'kampanya'),
(13, 'eeeeeeeeeeeeeeeeeeeeeeee', '', 0, 4, 43, 43, 0, 'denemeeee', 'kkkkkkkkkkk', '', 'aktif', '2018-01-06 21:33:09', 'one.png', 'a'),
(15, 'Kırmızı elbise', 'nnnnnn', 0, 15, 43, 43, 4, '', 'kkkkkkkk', 'kırmızı elbiseeeeee\r\n\r\n', 'aktif', '2018-01-10 03:02:05', 'product9.jpg', 'kampanya'),
(17, 'Vakko Gömlek', '2', 0, 0, 100, 100, 4, 's beden gömlek ', 'gömlek', '<p>Az giyilmiş sıfır ayarında s beden mavi kot rengi g&ouml;mlek</p>\r\n', 'aktif', '2018-01-14 23:27:13', '1.jpeg', NULL),
(18, 'Koton Gömlek', '3', 0, 8, 50, 50, 1, 's beden gömlek ', 'gömlek', '<p>Hardal sarısı hi&ccedil; giyilmemiş g&ouml;mlek</p>\r\n', 'aktif', '2018-01-14 23:31:00', '2.jpeg', NULL),
(20, 'Osse Gözlük', '', 0, 15, 0, 75, 75, 'Osse gözlük', 'gözlük', '<p>Osse az kullanılmış g&ouml;zl&uuml;k</p>\r\n', 'aktif', '2018-01-15 00:11:41', '4_(500x375).jpg', NULL),
(21, 'Bvlgari saat', '4', 0, 0, 150, 150, 2, 'Bvlgari saat', 'saat', '<p><strong>Bvlgari saat 5 ay garantisi devam etmektedir</strong></p>\r\n', 'aktif', '2018-01-15 00:22:36', '5_(375x500)1.jpg', NULL),
(22, 'Arçelik Televizyon', '5', 0, 20, 110, 110, 1, 'arçelik televizyon', 'televizyon', '<p>ar&ccedil;elik 72 ekran televizyon&nbsp;</p>\r\n', 'aktif', '2018-01-15 00:35:39', '6 (640x480).jpg', 'kampanya'),
(23, 'Luxell Fırın', '6', 0, 0, 60, 60, 1, 'Luxell Fırın', 'Fırın', '<p><strong>Luxell Fırın bir ay garantisi kalmıştır&nbsp;</strong></p>\r\n', 'aktif', '2018-01-15 00:38:56', '7_(640x480).jpg', NULL),
(24, 'iPhone 6s', '7', 0, 0, 1500, 1500, 1, 'iPhone 6s', 'iPhone 6s', '<p><strong>iPhone 6s temiz kullanılmış 8 ay garantisi vardır.</strong></p>\r\n\r\n<p><strong>&ccedil;iziği falan yoktur.</strong></p>\r\n', 'aktif', '2018-01-15 00:42:31', '10 (480x640).jpg', NULL),
(25, 'Jenga', '9', 0, 0, 40, 40, 1, 'Jenga', 'Jenga', '<p><strong>Jenga oyun yeni gibidir</strong></p>\r\n', 'aktif', '2018-01-15 00:50:59', '32_(480x640).jpg', 'kampanya'),
(26, 'Bağlama', '10', 0, 0, 950, 950, 1, 'Ardıç Saz', 'Saz', '<p><strong>Ardı&ccedil; 42tekne bağlama sesi g&uuml;zeldir</strong></p>\r\n', 'aktif', '2018-01-15 00:53:15', '34_(360x640).jpg', 'kampanya'),
(27, 'Cura saz', '11', 0, 0, 250, 250, 1, 'Cura saz', 'Cura saz', '<p>Cura saz tınısı cok hoş</p>\r\n', 'aktif', '2018-01-15 00:54:51', '23_(480x640).jpg', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler_resim`
--

CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `resim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler_resim`
--

INSERT INTO `urunler_resim` (`Id`, `urun_id`, `resim`) VALUES
(33, 5, 'iframe1.png'),
(34, 5, 'product6.jpg'),
(45, 1, 'product82.jpg'),
(46, 1, 'product122.jpg'),
(47, 14, '231.png'),
(48, 14, '291.png'),
(49, 14, 'gallery21.jpg'),
(50, 13, 'p21.png'),
(51, 13, 'pro101.jpg'),
(52, 12, 'p31.png'),
(54, 15, '311.png'),
(55, 15, '331.png'),
(56, 15, 'ftr-icons1.png'),
(57, 7, '312.png'),
(58, 7, '211.png'),
(59, 7, 'product1031.jpg'),
(60, 12, '241.png'),
(61, 12, '332.png'),
(63, 12, '313.png'),
(64, 4, 'pro11.jpg'),
(65, 16, '292.png'),
(66, 16, '321.png'),
(67, 18, '371.jpg'),
(74, 21, '5_(375x500).jpg'),
(75, 21, '29_(480x640).jpg'),
(76, 21, '30_(480x640).jpg'),
(77, 22, '8_(640x480).jpg'),
(78, 24, '9_(640x480).jpg'),
(79, 24, '11_(480x640).jpg'),
(80, 20, '40_(225x400).jpg'),
(81, 20, '41_(400x225).jpg'),
(82, 18, '38_(450x800).jpg'),
(83, 25, '31_(480x640).jpg'),
(84, 26, '39_(360x640).jpg'),
(85, 27, '24_(480x640).jpg'),
(86, 27, '22_(480x640).jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `Id` int(10) UNSIGNED NOT NULL,
  `adsoy` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`Id`, `adsoy`, `email`, `password`, `yetki`, `durum`, `resim`, `tarih`, `sehir`, `adres`, `tel`) VALUES
(1, 'Muhammet Riza Öztürk', 'oztrkriza@hotmail.com', '123', 'admin', 'aktif', '', '2017-12-26', 'İstanbul', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '258528528'),
(2, 'Ali Öztürk', 'aliozturk@hotmail.com', '123', 'admin', 'pasif', 'ali.jpg', '0000-00-00', 'İstanbul', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '05358887799'),
(4, 'Ezgi Öztürk', 'ezgi@gmail.com', 'ezgi', 'admin', 'aktif', 'ezgi.jpg', '0000-00-00', 'KARS', '100.yil mahallesi çakir sokak Özlem sitesi daire:7', '88888888888888886666'),
(58, 'Tuba Öztürk', 'tuba@hotmail.com', '3333', 'üye', 'aktif', '', '0000-00-00', 'İzmir', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '555555555'),
(59, 'Sinem Öztürk', 'sinem@gmail.com', 'sinem', 'üye', 'aktif', '', '0000-00-00', 'Ankara', 'fevziçakmak mahallesi çakar sokak no 17 daire 2', '02125889966'),
(62, 'Oktay Kssssssssss', 'oktay@gmail.com', 'oktay', 'üye', 'aktif', '', '0000-00-00', 'Kars', 'istanbullllllllllllllllllllllllllllll', '02213366988'),
(63, 'murat eşki', 'murat@gmail.com', '12345', 'admin', 'aktif', '', '0000-00-00', 'İzmir', 'cumhuriyet bulvarı özlem sitesi I blok daire 5', '4445588'),
(66, 'ccccs', '', '', '', '', '', '0000-00-00', NULL, 'sca', 'asa'),
(68, 'Birtan Küpeli', 'birtan@hotmail.com', 'b', 'üye', 'aktif', '', '0000-00-00', NULL, 'sefaköy istanbul', '44444444444444444444'),
(69, 'KARAAAAAAAAAAAAAa', 'toprak@gmail.com', 'toprak', 'üye', 'aktif', '', '0000-00-00', '', 'se', '6545544'),
(70, '', '', '', '', '', '', '0000-00-00', NULL, '', ''),
(71, 'Mine Öztürk', 'mine@hotmail.com', 'mine', '', '', '', '0000-00-00', NULL, 'sefaköy istanbul', '6665544'),
(72, 'Burhan kösem', 'burhan@hotmail.com', 'burhan', '', 'aktif', '', '0000-00-00', NULL, 'sefaköy istanbul', '8888222'),
(73, '', '', '', '', '', '', '0000-00-00', NULL, '', ''),
(74, 'Maral Güneş', 'maral@hotmail.com', 'maral', '', 'aktif', '', '0000-00-00', 'Kars', '100.yıl 1403 sokak no 54 daire 19', '8665544'),
(75, 'zafer budak', 'zafer@gmail.com', 'z', '', 'aktif', '', '0000-00-00', 'Kars', 'gkljgreogsışhregkj', '545455665'),
(76, 'Hüseyin Demir', 'huseyin@gmail.com', 'h', '', 'aktif', '', '0000-00-00', NULL, '100.yıl 1403 sokak no 54 daire 19', '7344322');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `Id` int(11) NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yorum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`Id`, `isim`, `email`, `yorum`) VALUES
(1, 'fatma', 's@dsfs', 'çok güzel bir ürün '),
(3, 'ayşe', 'ge@ggr', 'hediye aldım arkadaşım baya beğendi'),
(4, 'ezgi', 'birtan@hotmail.com', 'farklı bir ürün alınabilir'),
(7, 'yorumcu', 'ddd@dfdf', 'hiç beğenmedim\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `gönderilen_mesajlar`
--
ALTER TABLE `gönderilen_mesajlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ilce`
--
ALTER TABLE `ilce`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ulke`
--
ALTER TABLE `ulke`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler_resim`
--
ALTER TABLE `urunler_resim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `gönderilen_mesajlar`
--
ALTER TABLE `gönderilen_mesajlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `il`
--
ALTER TABLE `il`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ilce`
--
ALTER TABLE `ilce`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `ulke`
--
ALTER TABLE `ulke`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `urunler_resim`
--
ALTER TABLE `urunler_resim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
