-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 25 Des 2016 pada 07.49
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `latupk2016`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `username` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE IF NOT EXISTS `tb_guru` (
  `nipy` int(15) NOT NULL DEFAULT '0',
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `prodi` varchar(10) DEFAULT NULL,
  `no_telp` int(15) DEFAULT NULL,
  PRIMARY KEY (`nipy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nipy`, `nama`, `alamat`, `prodi`, `no_telp`) VALUES
(111, 'Pak Ervin', 'Tegal', 'RPL', 8888888),
(222, 'Pak Erlan', 'Tegal', 'RPL', 8999999),
(333, 'Bu Furi', 'Slawi', 'RPL', 6287694),
(444, 'Pak Irfan', 'Valhalla', 'Perlautan', 0),
(555, 'Bu Fatin', 'Pemalang', 'PAI', 6253424);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `nipy` int(15) NOT NULL DEFAULT '0',
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `no_telp` int(15) DEFAULT NULL,
  PRIMARY KEY (`nipy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nipy`, `nama`, `alamat`, `no_telp`) VALUES
(11, 'Ulul', 'Tegal', 62223),
(12, 'Imam', 'Slawi', 62348),
(13, 'Hendra', 'Jakarta', 6284936),
(14, 'Kirov Steve', 'Russia', 98876552),
(15, 'Gazelle', 'Swiss', 66473),
(16, 'Salim El Andalusy', 'Riyadh', 756830);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `niss` int(7) NOT NULL DEFAULT '0',
  `bhs_inggris` varchar(10) DEFAULT NULL,
  `bhs_indonesia` varchar(10) DEFAULT NULL,
  `matematika` varchar(10) DEFAULT NULL,
  `kk` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`niss`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`niss`, `bhs_inggris`, `bhs_indonesia`, `matematika`, `kk`) VALUES
(1400400, '100', '40', '90', '100'),
(1400430, '89', '99', '75', '90'),
(1400431, '80', '50', '79', '80'),
(1400432, '100', '100', '100', '100'),
(1400433, '44', '55', '66', '77');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE IF NOT EXISTS `tb_sekolah` (
  `no` int(5) DEFAULT NULL,
  `nis` int(5) NOT NULL DEFAULT '0',
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`no`, `nis`, `nama`, `alamat`) VALUES
(1, 101, 'Andi', 'Tegal'),
(2, 102, 'Anti', 'Slawi'),
(3, 103, 'Bagas', 'Tegal'),
(4, 104, 'Sukma', 'Tegal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` int(7) NOT NULL DEFAULT '0',
  `nisn` int(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `jurusan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nisn`, `nama`, `alamat`, `jurusan`) VALUES
(1400400, 666, 'Irfan Maulana', 'Antartika', 'Perlautan'),
(1400427, 123, 'Ade Permadani', 'Tegal', 'RPL'),
(1400429, 153, 'Anggreani', 'Slawi', 'RPL'),
(1400430, 124, 'Andika Bagus Setiawan', 'Alun Alun', 'RPL'),
(1400431, 983, 'Bagas Hayudi P', 'Tegal', 'RPL'),
(1400432, 111, 'Danis Zaidan', 'Jl. Waringin Tegal', 'RPL'),
(1400433, 456, 'Dianawati', 'Tegal', 'RPL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
