-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 09:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `adsoyad` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sekil` varchar(500) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `email_tesdiq` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adsoyad`, `email`, `pass`, `sekil`, `status`, `email_tesdiq`) VALUES
(1, 'Əyyub Hacıyev', 'eyyub@gmail.com', '0e7a98d21fed547c72ce0c5ab2b53b01', '', '1', '1'),
(2, 'Sabir Abdullayev', 'sabirabdullayev2@gmail.com', '450d6316b324e50a3fe991a174ced16d', '', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `daxili`
--

CREATE TABLE `daxili` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `basliq` varchar(256) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `sekil1` varchar(250) NOT NULL,
  `sekil2` varchar(250) NOT NULL,
  `sekil3` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daxili`
--

INSERT INTO `daxili` (`id`, `basliq`, `mezmun`, `sekil`, `sekil1`, `sekil2`, `sekil3`, `status`) VALUES
(5, 'Kəlbəcər', '<p>KƏLBƏCƏRƏ ÇOX GÖZƏL təklif.<br />100 dolardan şəfalı sularında və komfortlu otellərdə unudulmayacaq  istirahəti.<br />-----------<br />TARİX:<br />07.02.2021 - 14.02.2021<br /><br />-----------<br />QİYMƏTƏ DAXİLDİR:<br />• Otel (7 gecə/8 gün)<br />• Qidalanma (Aİ - hər şey daxil)<br />• Sığorta<br />• Transfer<br />-----------<br />QEYDLƏR:<br />• Qiymət 2 nəfərlik səyahət zamanı 1 nəfər üçün qeyd edilmişdir.<br />• Ödəniş günün məzənnəsinə uyğun olaraq manatla qəbul olunur.</p>', 'img/daxili/1610220485-kelbecer.jpg', 'img/daxili/1610220485-maxresdefault.jpg', 'img/daxili/1610221636-nesib_453.jpg', 'img/daxili/1610221636-kelbecerr.jpg', '0'),
(6, 'Şuşa', '<p>ŞUŞAYA ÇOX GÖZƏL təklif.<br />100 dolardan mədəniyyətin paytaxtında və komfortlu otellərdə unudulmayacaq  istirahəti.<br />-----------<br />TARİX:<br />07.02.2021 - 14.02.2021<br /><br />-----------<br />QİYMƏTƏ DAXİLDİR:<br />• Otel (7 gecə/8 gün)<br />• Qidalanma (Aİ - hər şey daxil)<br />• Sığorta<br />• Transfer<br />-----------<br />QEYDLƏR:<br />• Qiymət 2 nəfərlik səyahət zamanı 1 nəfər üçün qeyd edilmişdir.<br />• Ödəniş günün məzənnəsinə uyğun olaraq manatla qəbul olunur.</p>', 'img/daxili/1610221162-susa.jpg', 'img/daxili/1610221162-susa1.jpg', 'img/daxili/1610221162-susa2.jpg', 'img/daxili/1610221162-cidir.jpg', '0'),
(7, 'Quba', '<p>QUBAYA ÇOX GÖZƏL təklif.<br />100 dolardan Qubada və komfortlu otellərdə unudulmayacaq  istirahəti.<br />-----------<br />TARİX:<br />07.02.2021 - 14.02.2021<br /><br />-----------<br />QİYMƏTƏ DAXİLDİR:<br />• Otel (7 gecə/8 gün)<br />• Qidalanma (Aİ - hər şey daxil)<br />• Sığorta<br />• Transfer<br />-----------<br />QEYDLƏR:<br />• Qiymət 2 nəfərlik səyahət zamanı 1 nəfər üçün qeyd edilmişdir.<br />• Ödəniş günün məzənnəsinə uyğun olaraq manatla qəbul olunur.</p>', 'img/daxili/1610221466-quba.jpg', 'img/daxili/1610221466-qubba.jpg', 'img/daxili/1610221466-quba_palace_4.jpg', 'img/daxili/1610221466-vpvteciscuvax0qmnrd6.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nizamlamalar`
--

CREATE TABLE `nizamlamalar` (
  `id` int(2) UNSIGNED NOT NULL,
  `basliq` varchar(256) NOT NULL,
  `aciqlama` varchar(256) NOT NULL,
  `robots` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `unvan` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `github` varchar(250) NOT NULL,
  `haqqinda` text NOT NULL,
  `sekil` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nizamlamalar`
--

INSERT INTO `nizamlamalar` (`id`, `basliq`, `aciqlama`, `robots`, `logo`, `unvan`, `email`, `tel`, `mobil`, `facebook`, `twitter`, `instagram`, `youtube`, `github`, `haqqinda`, `sekil`) VALUES
(1, 'SA1 Travel ', 'Daxili və Xarici Turlar', 'robots.txt', 'img/logo.png', 'Mətbuat pr', 'sa1_travel@gmail.com', '+994 70 901 99 50', '+994 51 701 99 50', 'https://www.facebook.com/sabir.abdullayev.3/', 'https://twitter.com/Sabir48612286', 'https://www.instagram.com/abdullayevsabir/', 'https://www.youtube.com', 'https://github.com/SabirAbdullayev', '<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"section-title\"><strong>                    SİZİN SƏYAHƏTİNİZ BİZİM İŞİMİZDİR</strong></div>\r\n<div class=\"section-subtitle\">                                      <em>SA1 TRAVEL</em></div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"text\">\r\n<p>Azərbaycanın ən qabaqcıl turizm şirkətlərindən olan SA1 TRAVEL 2020-cü ildə Turizm və Mədəniyyət Nazirliyinin lisenziyası ilə fəaliyyətə başlamışdır. Aviabiletlər, Biznes səfərləri, Bal Ayları, Müalicə paketləri və turizmin digər sahələri üzrə peşəkar xidməti ilə müştərilərin bəyəndikləri və seçdikləri Turizm şirkətidir.</p>\r\n</div>\r\n</div>\r\n</div>', 'img/b02f76a0-3bac-452b-a3ff-5c358f9058b6_200x200.png');

-- --------------------------------------------------------

--
-- Table structure for table `reyler`
--

CREATE TABLE `reyler` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `adsoyad` varchar(100) NOT NULL,
  `rey` text NOT NULL,
  `sekil` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reyler`
--

INSERT INTO `reyler` (`id`, `adsoyad`, `rey`, `sekil`) VALUES
(3, 'Elcin Eliyev', '<p>Çox sərfəli turlardı.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', 'img/reyler/1610307986-hero_bg_1.jpg'),
(4, 'Ayten Memmedov', '<p>Çox sərfəli turlardı.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', 'img/reyler/1610307977-hero_bg_3.jpg'),
(5, 'Nərgiz Vəliyeva', '<p>Çox sərfəli turlardı.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', 'img/reyler/1610307948-hero_bg_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(2) UNSIGNED NOT NULL,
  `adi` varchar(250) NOT NULL,
  `haqqinda` text NOT NULL,
  `logo` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xarici`
--

CREATE TABLE `xarici` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `basliq` varchar(256) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `sekil1` varchar(250) NOT NULL,
  `sekil2` varchar(250) NOT NULL,
  `sekil3` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xarici`
--

INSERT INTO `xarici` (`id`, `basliq`, `mezmun`, `sekil`, `sekil1`, `sekil2`, `sekil3`, `status`) VALUES
(3, 'İstanbul', '<p>İstanbulda 1 həftə.<br />Tarixin izini özündə saxlayan, Avropa və Asiya mədəniyyətini özündə birləşdirən İstanbula siz də səyahət edin.<br />-----------<br />TARİX:<br />02.04.2020 - 09.04.2020<br />-----------<br />QİYMƏTƏ DAXİLDİR:<br />• Aviabilet (AZAL-23kq baqaj və 10kq əl yükü)<br />• Otel (7 gecə/7 gün)<br />• Qidalanma (səhər yeməyi)<br />• Sığorta<br />• Transfer</p>\r\n<p><strong>Siz də əyləncəli 1 həftə keçirmək istəyisinizsə, o zaman indi tur üçün sifariş verməyi unutmayın!</strong></p>', 'img/xarici/1610224108-sultan-ahmed-mosque-720x1280-istanbul-turkey-travel-tourism-4631.jpg', 'img/xarici/1610224108-1_Istanbul.jpg', 'img/xarici/1610224108-Istanbul-wallpaper-1920x1200.jpg', 'img/xarici/1610224108-436873.jpg', '0'),
(4, 'Roma', '<p>TARİX:<br />23.03.2021 - 30.03.2021<br />1-ci gün:<br />Roma uçuş. Hava limanında qarşılanma və oteldə yerləşmə, sərbəst vaxt.<br />---<br />2-ci gün:<br />Oteldə səhər yeməyi, Vatikan müzeylərinə rus dilli bələdçi ilə ekskursiyalar, Florensiyaya səyahət və ekskursiyalar. Montekatini-Termeyə səfər oteldə yerləşmə.<br />---<br />3-cü gün: Oteldə səhər yeməyi, sərbəst vaxt (istəyənlərə əlavə ekskursiyalar təklif olunur)<br />---<br />4-cü gün:<br />Oteldə səhər yeməyi, sərbəst vaxt, günün 2-ci yarısı Bolonyaya səfər olunur, sərbəst vaxt, oteldə yerləşmə<br />---<br />5-ci gün:<br />Oteldə gecələmə, Dünyanın ən gözəl şəhərlərindən olan Venesiyaya səyahət. Bələdçi ilə şəhərin gözəlliklərinə ekskursiyalar. Rimini səfəri və oteldə yerləşmə<br />---<br />6-cı gün:<br />Oteldə səhər yeməyi, San Marino respublikasına səyahət və sərbəst gəzintilər. Oteldə gecələmə.<br />---<br />7-ci gün:<br />Oteldə səhər yeməyi, Romaya qayıdış, Romanın tarixini və mədəniyyətini yaxından tanıdacaq ekskursiyalar. Oteldə gecələmə.<br />---<br />8-ci gün:<br />Oteldə səhər yeməyi, Hava limanına transfer.<br />-----------<br />QİYMƏT:<br />- 871 usd<br />-----------<br />QİYMƏTƏ DAXİLDİR:<br />• Aviabilet (Aeroflot Hava yolu)<br />• Otel (7 gecə/8 gün)<br />• Qidalanma (səhər yeməyi)<br />• Transfer<br />• Viza dəstəyi<br />• Ekskursiya<br />• Sığorta</p>\r\n<p><strong>Siz də əyləncəli 1 həftə keçirmək istəyisinizsə, o zaman indi tur üçün sifariş verməyi unutmayın!</strong></p>', 'img/xarici/1610224514-02-rome.jpg', 'img/xarici/1610224514-italy-roma-2.jpg', 'img/xarici/1610224514-1200px-Moschea_00497.jpg', 'img/xarici/1610224514-rome-background-9.jpg', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `daxili`
--
ALTER TABLE `daxili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nizamlamalar`
--
ALTER TABLE `nizamlamalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reyler`
--
ALTER TABLE `reyler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xarici`
--
ALTER TABLE `xarici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daxili`
--
ALTER TABLE `daxili`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nizamlamalar`
--
ALTER TABLE `nizamlamalar`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reyler`
--
ALTER TABLE `reyler`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `xarici`
--
ALTER TABLE `xarici`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
