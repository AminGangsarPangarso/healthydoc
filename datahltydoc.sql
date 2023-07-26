-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2023 pada 19.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datahltydoc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `NIP` char(16) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `TMPLAHIR` varchar(30) DEFAULT NULL,
  `TGLLAHIR` date DEFAULT NULL,
  `JENKELCUS` char(1) DEFAULT NULL CHECK (`JENKELCUS` in ('L','P')),
  `ALAMAT` varchar(50) DEFAULT NULL,
  `IMG` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD_DOKTER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`NIP`, `NAMA`, `TMPLAHIR`, `TGLLAHIR`, `JENKELCUS`, `ALAMAT`, `IMG`, `EMAIL`, `PASSWORD_DOKTER`) VALUES
('0000000000000000', 'Dede Syara', 'Yogyakarta', '1989-11-19', 'L', 'Bantul', '', 'dede@hotmail.com', '123456'),
('1111111111111111', 'Satria Bagass', 'Sumbawa', '2000-07-11', 'L', 'Bantul, Banguntapan', 'aku.jpg', 'abc@gmail.com', '123qwe'),
('2222222222222222', 'Ghalib Farros ', 'Jawa', '2000-12-22', 'L', 'Bantul, Banguntapan', 'frros.jpeg', 'a@gmail.com', '123456'),
('7777777777777777', 'Caca', 'Sumbawa', '1994-11-03', 'P', 'Malang', '', 'caca@gmail.com', 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `NIK` char(16) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `TMPLAHIR` varchar(30) DEFAULT NULL,
  `TGLLAHIR` date DEFAULT NULL,
  `JENKELCUS` char(1) DEFAULT NULL CHECK (`JENKELCUS` in ('L','P')),
  `ALAMAT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`NIK`, `NAMA`, `TMPLAHIR`, `TGLLAHIR`, `JENKELCUS`, `ALAMAT`) VALUES
('0000000000000001', 'Iksan Malingkun', 'Buton', '1999-08-08', 'L', 'Medan'),
('0011223300112233', 'Farros Syahreal', 'Yogyakarta', '2022-11-22', 'L', 'Bantul'),
('0012300123001230', 'Satria Bagas', 'Sumbawa', '1999-07-11', 'L', 'Mataram'),
('0980980980980980', 'Melvin Joy', 'Medan', '2002-12-22', 'L', 'Solo'),
('1212321231231231', 'yeyen', 'bantul', '2023-07-27', 'L', 'kaltim'),
('1234562421342453', 'petrus', 'sleman', '2023-07-25', 'L', 'kalipentung'),
('2112121212121212', 'gisel', 'jakarta', '2023-07-18', 'P', 'jakarta'),
('23423412341234', 'rudi', 'batak', '2023-07-21', 'L', 'medan'),
('333333333333333', 'bardi', 'sleman', '2023-07-27', 'L', 'kalipentung'),
('341324132', 'dfadsfadsf', 'aadfasdf', '2023-07-29', 'L', 'adfadsfa'),
('44444444444444', 'yanti', 'gunung kidul', '2023-07-29', 'L', 'adfadfasdfasds'),
('555555555555', 'yanto', 'sleman', '2023-07-29', 'P', 'sleman'),
('7777777777777777', 'zazan', 'kulon etan', '2023-07-22', 'L', 'sdfshhhhh'),
('9879879879879870', 'Aulia El Fatih', 'Malang', '1989-07-12', 'P', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `order_id` char(20) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `payment_type` varchar(13) NOT NULL,
  `transaction_time` varchar(19) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_number` varchar(30) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`order_id`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_number`, `pdf_url`, `status_code`) VALUES
('1054506518', 90000, 'bank_transfer', '2023-07-26 18:32:24', 'bca', '96859399752', 'https://app.sandbox.midtrans.com/snap/v1/transactions/e6ed7f33-9a79-45da-9fe9-c972e970af7d/pdf', '201'),
('1658353412', 20000, 'bank_transfer', '2023-07-26 18:06:47', 'bca', '96859805443', 'https://app.sandbox.midtrans.com/snap/v1/transactions/7e025961-0317-431f-a58d-4f6fe8e055f3/pdf', '201'),
('1959639992', 20000, 'bank_transfer', '2023-07-26 17:28:09', 'bca', '96859404939', 'https://app.sandbox.midtrans.com/snap/v1/transactions/7c4ce472-193b-4f58-b139-455a47b7709b/pdf', '201');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `riwayat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `riwayat` (
`NIK` char(16)
,`NAMA` varchar(30)
,`TGLRME` date
,`KELUHAN` varchar(30)
,`DIAGNOSA` varchar(30)
,`TGL` date
,`DOKTER` varchar(30)
,`NIP` char(16)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rme`
--

CREATE TABLE `rme` (
  `NIK` char(16) DEFAULT NULL,
  `keluhan` varchar(30) DEFAULT NULL,
  `diagnosa` varchar(30) DEFAULT NULL,
  `tglperiksa` date DEFAULT NULL,
  `tindakan` varchar(30) DEFAULT NULL,
  `TglRME` date DEFAULT curdate(),
  `NIP` char(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rme`
--

INSERT INTO `rme` (`NIK`, `keluhan`, `diagnosa`, `tglperiksa`, `tindakan`, `TglRME`, `NIP`) VALUES
('0011223300112233', 'Batuk Pilek', 'Flu dan Sinus', '2022-11-19', 'Antibiotik, Paracetamol dan Vi', '2022-11-22', '7777777777777777'),
('0012300123001230', 'Sakit Punggung', 'Osteroporosis', '2022-11-19', 'Terapi berkelanjutan (Fisioter', '2022-11-22', '7777777777777777'),
('0012300123001230', 'Cidera betis', 'Tennis Leg', '2022-11-01', 'Terapi berkelanjutan (Fisioter', '2022-11-22', '7777777777777777'),
('0012300123001230', 'Susah menelan, batuk kering', 'Radang dan Panas Dalam', '2022-11-18', 'Pemberian obat radang dan vita', '2022-11-22', '0000000000000000'),
('9879879879879870', 'Batuk Pilek', 'Flu dan Sinus', '2022-11-19', 'Antibiotik, Paracetamol dan Vi', '2022-11-22', '0000000000000000'),
('0012300123001230', 'Demam', 'Pireksia', '2022-11-17', 'Antibiotik, Paracetamol dan Vi', '2022-11-22', '1111111111111111'),
('0980980980980980', 'Cidera betis', 'Tennis Leg', '2022-12-24', 'Terapi berkelanjutan (Fisioter', '2022-12-26', '2222222222222222'),
('0000000000000001', 'kelainan games ', 'autis', '2023-07-25', 'rawat inap', '2023-07-25', '7777777777777777'),
('1234562421342453', 'dfadsfasdf', 'dfadsfadsf', '2023-07-25', 'dfadsfadsf', '2023-07-25', '7777777777777777'),
('23423412341234', 'keram', 'pms', '2023-07-25', 'minum kiranti', '2023-07-25', '7777777777777777'),
('1212321231231231', 'asdfad', 'asdfadsfad', '2023-07-20', 'dfadsfasdfds', '2023-07-20', '7777777777777777'),
('341324132', 'dfasdfasd', 'fadsfasdfdsf', '2023-07-01', 'adfasdfadf', '2023-07-01', '7777777777777777'),
('333333333333333', 'nyeri otot', 'kesleo', '2023-07-27', 'kretek', '2023-07-27', '7777777777777777'),
('44444444444444', 'asdfasdfadsf', 'adfasdfadsf', '2023-07-28', 'adfasdfasdf', '2023-07-28', '7777777777777777'),
('23423412341234', 'adfadfasdfad', 'adfadsfadsfa', '2023-07-15', 'adfadsfasdfasdf', '2023-07-15', '7777777777777777'),
('0000000000000001', 'dfadsfasdfads', 'fadsfadsfadsf', '2023-07-08', 'adsfasdafsdfd', '2023-07-08', '7777777777777777'),
('7777777777777777', 'dfadsfa', 'adfadsfasdf', '2023-08-04', 'dfasdfasdf', '2023-08-04', '7777777777777777'),
('1212321231231231', 'asdfasdfasdf', 'asdfasdfasdf', '2023-08-04', 'asdfasdfasdfad', '2023-08-04', '7777777777777777'),
('23423412341234', 'dfadsfasdfasdf', 'adfasdfadsfadsf', '2023-07-29', 'dfasdfasdfas', '2023-07-22', '7777777777777777'),
('2112121212121212', 'strees', 'gila', '2023-07-26', 'rsj', '2023-07-26', '7777777777777777'),
('7777777777777777', 'aaaaa', 'aaaaa', '2023-07-22', 'aaaaa', '2023-07-22', '7777777777777777'),
('2112121212121212', 'bbbbbbbbbbb', 'bbbbbbbbbbbbbb', '2023-08-05', 'bbbbbbbbbbbbbbb', '2023-09-05', '7777777777777777'),
('9879879879879870', 'zzzzzzzzzzz', 'zzzzzzzzzz', '2023-07-29', 'zzzzzzzzz', '2023-07-29', '7777777777777777'),
('555555555555', 'vvvvvvvvvv', 'vvvvvvvvvvvv', '2023-08-05', 'vvvvvvvvvvvvvv', '2023-08-05', '7777777777777777'),
('44444444444444', 'adsfadsf', 'dfasdfasdf', '2023-07-29', 'dfadfadsf', '2023-07-29', '7777777777777777'),
('2112121212121212', 'uuuuuuuu', 'uuuuuuuuuuuu', '2023-07-22', 'uuuuuuuuuu', '2023-07-22', '7777777777777777'),
('1234562421342453', 'fffffff', 'ffffffffffffff', '2023-07-22', 'fffffffffffff', '2023-07-22', '7777777777777777'),
('333333333333333', 'qqqqqqqqqqq', 'qqqqqqqqq', '2023-07-29', 'qqqqqqqqqqq', '2023-07-29', '7777777777777777'),
('0980980980980980', 'rrrrrrr', 'rrrrrrrrr', '2023-07-22', 'rrrrrr', '2023-07-22', '7777777777777777'),
('1234562421342453', 'qwwerqwer', 'erqwer', '2023-08-04', 'erqwer', '2023-08-04', '7777777777777777');

-- --------------------------------------------------------

--
-- Struktur untuk view `riwayat`
--
DROP TABLE IF EXISTS `riwayat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `riwayat`  AS SELECT `pasien`.`NIK` AS `NIK`, `pasien`.`NAMA` AS `NAMA`, `rme`.`TglRME` AS `TGLRME`, `rme`.`keluhan` AS `KELUHAN`, `rme`.`diagnosa` AS `DIAGNOSA`, `rme`.`tglperiksa` AS `TGL`, `dokter`.`NAMA` AS `DOKTER`, `dokter`.`NIP` AS `NIP` FROM ((`pasien` join `rme` on(`pasien`.`NIK` = `rme`.`NIK`)) join `dokter` on(`rme`.`NIP` = `dokter`.`NIP`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `rme`
--
ALTER TABLE `rme`
  ADD KEY `NIK` (`NIK`),
  ADD KEY `NIP` (`NIP`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rme`
--
ALTER TABLE `rme`
  ADD CONSTRAINT `rme_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pasien` (`NIK`),
  ADD CONSTRAINT `rme_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `dokter` (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
