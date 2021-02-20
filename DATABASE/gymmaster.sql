-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2020 pada 14.48
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(20) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Test Test', 'testtest@contohx.com', '2147483xc', 'Lorem Ipsum is simply dummy', '2017-06-18 10:03:07', 1),
(2, 'ZLorem', 'sdsdf@dfdfg.com', '09675zzz', 'Ashiaaaap', '2020-06-30 23:16:59', 1),
(3, 'Jnunai', 'adas@ldf.om', '3420xxx', 'Mau Konfirm TRN00000001 Sudah di bayar', '2020-06-30 23:43:20', 1),
(4, 'Adri', 'sdlasdkl@dflskdf.com', '934234923', 'Jasdlasdlksd', '2020-07-02 01:16:50', NULL),
(5, 'Adri', 'sdlasdkl@dflskdf.com', '934234923', 'Jasdlasdlksd', '2020-07-02 01:16:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Panduan Pembayaran', 'panduan', '																				<div><span style=\"font-family: Arial, Tahoma, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Jika sudah melakukan pemesanan paket silahkan melakukan transfer sesuai tagihan pada rekening berikut :</span></div><div><span style=\"font-family: Arial, Tahoma, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><br></span></div><div><img src=\"http://localhost/membergym/assets/images/logobank/bca.jpg\" alt=\"\" align=\"none\"></div><div>No Rek : 0000-0000 </div><div><br></div><div><br></div><div><img src=\"http://localhost/membergym/assets/images/logobank/bni.jpg\" alt=\"\" align=\"none\"></div><div>No Rek : 0000-0000 </div><div><br></div><div><br></div><div><img src=\"http://localhost/membergym/assets/images/logobank/mandiri.jpg\" alt=\"\" align=\"none\"></div><div>No Rek : 0000-0000</div><div><span style=\"font-family: Arial, Tahoma, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><br></span></div>\r\n										\r\n										\r\n										'),
(2, 'Privacy Policy', 'privacy', '<p>At ZeroMemo GYM, accessible from  , one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by ZeroMemo GYM and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>ZeroMemo GYM follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicyonline.com/privacy-policy-generator/\">Privacy Policy Generator</a> and the <a href=\"https://www.generateprivacypolicy.com\">Privacy Policy Generator</a>.</p>\r\n\r\n\r\n\r\n\r\n<h2>Privacy Policies</h2>\r\n\r\n<P>You may consult this list to find the Privacy Policy for each of the advertising partners of ZeroMemo GYM.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on ZeroMemo GYM, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that ZeroMemo GYM has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>ZeroMemo GYM\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites. What Are Cookies?</p>\r\n\r\n<h2>Children\'s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>ZeroMemo GYM does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n\r\n<h2>Online Privacy Policy Only</h2>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in ZeroMemo GYM. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>					'),
(3, 'About Us ', 'aboutus', '																				<div style=\"text-align: center;\">Selamat Datang di GYM ZERO MEMO<br></div><br>\r\nterima kasih telah memilih Zero Memo Gym sebagai tempat fitnes Anda! <br>\r\n\r\nAnda telah membuat salah satu keputusan terbaik dalam hidup Anda dengan bergabung dengan Zero Memo Gym.\r\n\r\n										\r\n										'),
(11, 'FAQs', 'faqs', '<div>										Ini Adalah Contoh Halaman Frequently Asked Questions (FAQs)<br></div><div>Silahkan login sebagai admin untuk mengubah isi halaman ini<br></div>\r\n										');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'adriputra@contohx.co', 'Pelayanan Memuaskan, Sangat Ramah. Terimakasih', '2020-06-18 07:44:31', 1),
(2, 'adriputra@contohx.co', 'Saya Ikut member disini dan merasa puas', '2017-06-18 07:46:05', 1),
(3, 'adriputra@contohx.co', 'Test Test', '2020-06-30 10:24:21', 1),
(4, 'adriputra@contohx.co', '', '2020-07-02 03:41:54', NULL),
(5, 'adriputra@contohx.co', 'Mantap.', '2020-07-02 03:42:27', NULL),
(6, 'adriputra@contohx.co', 'Mantap.', '2020-07-02 03:42:42', NULL),
(7, 'komen@sistemit.com', 'Test Sjasd as sdlaksd aslka sda', '2020-08-10 17:54:47', NULL),
(8, 'faisalbar2000@gmail.com', 'Recomended deh pokoknya', '2020-12-08 00:21:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_deposit`
--

CREATE TABLE `tbl_deposit` (
  `id_member` varchar(10) NOT NULL,
  `kode_tarif` varchar(10) NOT NULL,
  `tanggal_deposit` date NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `kuota_latihan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_deposit`
--

INSERT INTO `tbl_deposit` (`id_member`, `kode_tarif`, `tanggal_deposit`, `tanggal_berlaku`, `kuota_latihan`) VALUES
('MMB0000001', 'BL', '2020-07-02', '2020-11-28', 40),
('MMB0000002', 'BL', '2018-08-14', '2018-09-14', 8),
('MMB0000002', 'GR', '2018-08-14', '2018-09-14', 0),
('MMB0000003', 'UNL1', '2020-04-11', '2020-05-11', 0),
('MMB0000002', 'UNL1', '2020-04-11', '2020-05-11', 0),
('MMB0000002', 'GL', '2020-04-11', '2020-05-11', 12),
('MMB0000007', 'UNL1', '2020-06-28', '2020-07-28', 0),
('MMB0000001', 'GR', '2020-07-02', '2020-08-02', 0),
('MMB0000008', 'BL', '2020-06-28', '2020-07-28', 8),
('MMB0000001', 'GL', '2020-07-02', '2020-08-02', 12),
('MMB0000012', 'BL', '2020-07-02', '2020-08-02', 8),
('MMB0000012', 'UNL2', '2020-07-02', '2021-07-02', 0),
('MMB0000013', 'BL', '2020-07-02', '2020-08-02', 8),
('MMB0000014', 'BL', '2020-07-02', '2020-08-02', 8),
('', 'BL', '2020-07-02', '2020-08-02', 8),
('MMB0000016', 'BL', '2020-07-02', '2020-08-02', 8),
('MMB0000016', 'GL', '2020-07-02', '2020-09-02', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`id_identitas`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'ZERO MEMO GYM', 'JL TUPAREV NO 12 CIREBON', '081312201758');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_latihan`
--

CREATE TABLE `tbl_latihan` (
  `id_latihan` int(10) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `kode_tarif` varchar(10) NOT NULL,
  `id_trainer` varchar(10) NOT NULL,
  `waktu_latihan` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_latihan`
--

INSERT INTO `tbl_latihan` (`id_latihan`, `id_member`, `kode_tarif`, `id_trainer`, `waktu_latihan`) VALUES
(1, 'MMB0000001', 'BL', 'TRN0000001', '2018-08-14 22:01:16'),
(2, 'MMB0000001', 'BL', 'TRN0000002', '2018-08-14 22:01:43'),
(3, 'MMB0000001', 'BL', 'TRN0000002', '2018-08-14 22:01:52'),
(4, 'MMB0000001', 'BL', 'TRN0000002', '2018-08-14 22:02:01'),
(5, 'MMB0000001', 'BL', 'TRN0000001', '2018-08-14 22:02:07'),
(6, 'MMB0000002', 'GR', 'TRN0000002', '2018-08-14 22:03:41'),
(7, 'MMB0000002', 'GR', 'TRN0000002', '2018-08-14 22:03:48'),
(8, 'MMB0000002', 'GR', 'TRN0000001', '2018-08-14 22:03:56'),
(9, 'MMB0000002', 'GR', 'TRN0000001', '2018-08-14 22:04:03'),
(10, 'MMB0000001', 'GR', 'TRN0000001', '2020-06-28 10:26:50'),
(11, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:29:12'),
(12, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:30:33'),
(13, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:30:41'),
(14, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:30:49'),
(15, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:30:55'),
(16, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:31:02'),
(17, 'MMB0000001', 'GR', 'TRN0000001', '2020-07-02 08:31:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `user` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`user`, `password`, `nama`, `level`, `alamat`, `kota`, `kode_pos`, `no_telp`, `tempat_lahir`, `tanggal_lahir`) VALUES
('admin', 'admin', 'Nama Admin', 'admin', '					Jl Surabaya', 'XXXXXXXXXXX', 'XXXXXX', '085213613445', 'XXXXXX', '1992-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(45) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `tel` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama`, `level`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `pekerjaan`, `tanggal_daftar`, `tel`, `username`, `password`) VALUES
('MMB0000001', 'Mohammad Faiz Albar', '', '0000-00-00', '', '', '', '2020-12-07', '081298345535', 'faisalbar2000@gmail.com', '4ca98c1e481b25a7a278b6a33c696c4a'),
('MMB0000002', 'marifatunnisa', '', '0000-00-00', '', '', '', '2020-12-07', '081312201758', 'marifatunnisa123@gmail.com', 'ff6d11fad3287047fcafb104c276e63a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tarif`
--

CREATE TABLE `tbl_tarif` (
  `id_tarif` int(10) NOT NULL,
  `kode_tarif` varchar(10) NOT NULL,
  `jenis_tarif` varchar(30) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jml_latih_max` int(10) NOT NULL,
  `jml_bulan` int(10) NOT NULL,
  `tarif` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tarif`
--

INSERT INTO `tbl_tarif` (`id_tarif`, `kode_tarif`, `jenis_tarif`, `tipe`, `jml_latih_max`, `jml_bulan`, `tarif`) VALUES
(5, 'GR', 'GRAY', 'REGULAR', 4, 1, 250000),
(6, 'BL', 'BLACK', 'REGULAR', 8, 1, 470000),
(7, 'GL', 'GOLD', 'REGULAR', 12, 1, 575000),
(8, 'UNL1', 'UNLIMITED 1 MONTH', 'UNLIMITED', 0, 1, 800000),
(9, 'UNL2', 'UNLIMITED 1 YEAR', 'UNLIMITED', 0, 12, 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_trainer`
--

CREATE TABLE `tbl_trainer` (
  `id_trainer` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_trainer`
--

INSERT INTO `tbl_trainer` (`id_trainer`, `nama`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `tel`) VALUES
('TRN0000001', 'Eko Prasetyo', '1995-02-08', 'Jl Kusuma', 'laki-laki', '08322343213'),
('TRN0000002', 'Ema Kurnia', '1999-06-01', 'Jl. Contoh Alamat Jalan No 294', 'perempuan', '08342343xx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_trans_deposit`
--

CREATE TABLE `tbl_trans_deposit` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `kode_tarif` varchar(10) NOT NULL,
  `jumlah_deposit` int(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `status_persetujuan` varchar(5) NOT NULL,
  `status_konfirmasitagihan` varchar(5) NOT NULL,
  `status_setujukonfirmasi` varchar(5) NOT NULL,
  `ket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_trans_deposit`
--

INSERT INTO `tbl_trans_deposit` (`id_transaksi`, `id_member`, `kode_tarif`, `jumlah_deposit`, `tanggal_transaksi`, `tanggal_berlaku`, `status_persetujuan`, `status_konfirmasitagihan`, `status_setujukonfirmasi`, `ket`) VALUES
('TRN0000001', 'MMB0000014', 'BL', 470000, '2020-07-02', '2020-08-02', 'Y', 'Y', 'Y', '-'),
('TRN0000002', '', 'BL', 470000, '2020-07-02', '2020-08-02', 'Y', 'Y', 'Y', '-'),
('TRN0000003', 'MMB0000016', 'BL', 470000, '2020-07-02', '2020-08-02', 'Y', 'Y', 'Y', '-'),
('TRN0000004', 'MMB0000016', 'GL', 575000, '2020-07-02', '2020-08-02', 'Y', 'Y', 'Y', '-'),
('TRN0000005', 'MMB0000016', 'GL', 575000, '2020-07-02', '2020-09-02', 'Y', 'Y', 'Y', '-'),
('TRN0000006', 'MMB0000020', 'BL', 470000, '2020-08-21', '0000-00-00', 'Y', 'Y', 'N', '-'),
('TRN0000007', 'MMB0000002', 'BL', 470000, '2020-12-07', '0000-00-00', 'Y', 'Y', 'N', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_trans_umum`
--

CREATE TABLE `tbl_trans_umum` (
  `id_trans_umum` int(10) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `id_trainer` varchar(10) NOT NULL,
  `jumlah_bayar` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `tbl_latihan`
--
ALTER TABLE `tbl_latihan`
  ADD PRIMARY KEY (`id_latihan`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tbl_tarif`
--
ALTER TABLE `tbl_tarif`
  ADD UNIQUE KEY `id_tarif` (`id_tarif`),
  ADD UNIQUE KEY `kode_tarif` (`kode_tarif`);

--
-- Indeks untuk tabel `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  ADD PRIMARY KEY (`id_trainer`);

--
-- Indeks untuk tabel `tbl_trans_deposit`
--
ALTER TABLE `tbl_trans_deposit`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_trans_umum`
--
ALTER TABLE `tbl_trans_umum`
  ADD PRIMARY KEY (`id_trans_umum`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_latihan`
--
ALTER TABLE `tbl_latihan`
  MODIFY `id_latihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_tarif`
--
ALTER TABLE `tbl_tarif`
  MODIFY `id_tarif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_trans_umum`
--
ALTER TABLE `tbl_trans_umum`
  MODIFY `id_trans_umum` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
