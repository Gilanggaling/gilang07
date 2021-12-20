-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 28. September 2021 jam 15:40
-- Versi Server: 5.0.18
-- Versi PHP: 5.1.2
-- 
-- Database: `akademik`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mahasiswa`
-- 

CREATE TABLE `mahasiswa` (
  `No` int(5) NOT NULL auto_increment,
  `NIM` varchar(7) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `Jenis_Kelamin` varchar(7) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data untuk tabel `mahasiswa`
-- 

INSERT INTO `mahasiswa` VALUES (1, 'C114001', 'Dadang Hidayat', 'Jl Yang Mana No 80												', 'Pria', 'Manajemen Keuangan');
INSERT INTO `mahasiswa` VALUES (2, 'C114002', 'Asep Komar Udin', 'Jl. Terus Jadian Kagak No 77', 'Pria', 'Manajemen Keuangan');
INSERT INTO `mahasiswa` VALUES (3, 'C114003', 'Julia Robet', 'Jl. Jalan Ke Pasar Baru No 55', 'Wanita', 'Akutansi');
INSERT INTO `mahasiswa` VALUES (6, 'C114004', 'Ikin Sodikin', 'Desa Harum nan Asri', 'Pria', 'Manajemen Bisnis');
