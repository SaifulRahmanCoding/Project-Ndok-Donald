-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2021 pada 03.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndok_donald`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'barang@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `foto` text DEFAULT NULL,
  `caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `foto`, `caption`) VALUES
(1, 'upload/produk/produk-p.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quaerat velit ea, aliquam animi quis incidunt atque repudiandae, officiis accusamus.'),
(2, 'upload/produk/bebek-p2-s.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quaerat velit ea, aliquam animi quis incidunt atque repudiandae, officiis accusamus.'),
(3, 'upload/produk/promo.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea, cupiditate.'),
(5, 'upload/produk/bebek-p2-s.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, fugit neque. Accusamus quia corrupti earum reprehenderit minus unde at? Libero?'),
(6, 'upload/produk/promo.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto reiciendis eaque dicta eligendi sed dolor quos praesentium ipsam atque et?'),
(7, 'upload/produk/produk-p.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto reiciendis eaque dicta eligendi sed dolor quos praesentium ipsam atque et?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(5) NOT NULL,
  `foto` text DEFAULT NULL,
  `nama_promo` varchar(50) NOT NULL,
  `harga_normal` int(10) NOT NULL,
  `harga_promo` int(10) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `foto`, `nama_promo`, `harga_normal`, `harga_promo`, `keterangan`) VALUES
(1, 'upload/promo.jpg', 'Telur Asin Borobudur harga murah banget guys loh', 45000, 40000, 'Isi 10 Butir Per Kemasan'),
(3, 'upload/bebek-p2-s.jpg', 'Ayo buruan sikat nih, baru !', 5000, 4500, 'Promo Pertelur'),
(4, 'upload/landing page gambar.png', 'Telur Asin Isi 12 per Kemasan', 60000, 56000, '1 Lusin per Bungkus'),
(5, 'upload/bebek-p2-s.jpg', 'Ayo buruan sikat nih, baru !', 4000, 3000, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, laborum.'),
(6, 'upload/landing page gambar.png', 'Telur Asin edisi spesial', 60000, 56000, 'lets cobaa'),
(7, 'upload/asin.jpg', 'Edisi Terbatas, Porsi Keluarga', 70000, 68000, '1 bungkus isi 18'),
(8, 'upload/bebek-p2-s.jpg', 'telur bebek kampung', 30000, 28000, 'Isi 6 per kemasan'),
(9, 'upload/bebek-p2-s.jpg', 'Telur asin Varian Bakar', 60000, 58000, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, consequuntur.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
