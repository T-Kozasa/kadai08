-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 4 月 02 日 15:08
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_kadai02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `amazon` text NOT NULL,
  `assesment` int(1) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `amazon`, `assesment`, `comment`, `indate`) VALUES
(1, '知覚力を磨く 絵画を観察するように世界を見る技法', 'www.amazon.co.jp/dp/4478111626', 5, '絵の見方が変わるかなり面白い話です。', '2022-06-05 07:28:23'),
(2, '文系でもよくわかる　世界の仕組みを物理学で知る', 'www.amazon.co.jp/dp/B07NDQT6N2', 5, '学び直しにもなりつつ、日常に溢れているけど理解してなかった仕組みに触れる機会をもらえる本です。', '2022-09-05 16:02:47'),
(3, '民族」で読み解く世界史','www.amazon.co.jp/dp/4534055587', 4, '授業の世界史で覚えたものに色付けできるような内容でした。', '2022-06-05 16:06:42');


--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
