-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-05 03:04:40
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `cheerpark_db_class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cheerpark_an_table3`
--

CREATE TABLE `cheerpark_an_table3` (
  `id` int(12) NOT NULL,
  `birth` date NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `passward` varchar(12) NOT NULL,
  `sport` varchar(100) DEFAULT NULL,
  `other` text DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `cheerpark_an_table3`
--

INSERT INTO `cheerpark_an_table3` (`id`, `birth`, `name`, `email`, `passward`, `sport`, `other`, `date`) VALUES
(1, '2024-06-30', '徳川家康', 'test@gmal.com', 'ssss', '野球、競馬', '', '2024-07-01 01:15:09'),
(2, '2024-06-30', 'スティーブ・ジョブズ', 'test@gmal.com', 'ssss', NULL, '禅', '2024-06-30 22:53:23'),
(8, '2024-06-30', '織田信長', 'test@gmal.com', 'ssss', 'サッカー、野球、バスケットボール', 'バレーボール', '2024-07-01 02:34:56'),
(9, '2024-06-30', '李信', 'test@gmal.com', 'ssss', 'サッカー、野球', '', '2024-07-01 02:38:04'),
(11, '2024-07-01', 'ピーター・ティール', 'test@gmal.com', 'ssss', '野球', 'アメリカンフットボール', '2024-07-01 03:25:01'),
(12, '2024-07-01', '徳川家光', 'test@gmal.com', 'ssss', '野球、競馬', '', '2024-07-05 01:10:11'),
(13, '2024-07-05', '田村保乃', 'test@gmal.com', 'ssss', NULL, 'バレーボール', '2024-07-05 09:13:21'),
(14, '2024-07-05', 'ラリー・ペイジ', 'test@gmal.com', 'ssss', 'eスポーツ', '', '2024-07-05 09:13:16'),
(15, '2024-07-05', '緑谷出久', 'test@gmal.com', 'ssss', 'サッカー', '', '2024-07-05 09:09:03'),
(16, '2024-07-05', '空閑悠馬', 'test@gmal.com', 'ssss', 'サッカー、eスポーツ', '', '2024-07-05 09:26:38'),
(17, '2024-07-05', '孫正義', 'test@gmal.com', 'ssss', NULL, '', '2024-07-05 09:27:34'),
(18, '2024-07-05', '三雲修', 'test@gmal.com', 'aaaa', 'eスポーツ', '', '2024-07-05 09:29:13'),
(20, '2024-07-05', 'サンジ', 'test@gmal.com', 'ssss', 'サッカー', '', '2024-07-05 09:44:45'),
(21, '2024-07-05', '山田太郎', 'test@gmal.com', 'ssss', '競馬', '', '2024-07-05 09:50:20'),
(22, '2024-07-05', 'ルフィ', 'test@gmal.com', 'aaaa', 'サッカー', '', '2024-07-05 09:57:10'),
(23, '2024-07-05', '山田太郎', 'test@gmal.com', 'ssss', '競馬', '', '2024-07-05 10:01:27'),
(24, '2024-07-05', '山田太郎', 'test@gmal.com', 'ssss', 'ゴルフ', '', '2024-07-05 10:02:13'),
(25, '2024-07-05', 'サンジ', 'test@gmal.com', 'ssss', 'eスポーツ', '', '2024-07-05 10:02:43');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cheerpark_an_table3`
--
ALTER TABLE `cheerpark_an_table3`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cheerpark_an_table3`
--
ALTER TABLE `cheerpark_an_table3`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
