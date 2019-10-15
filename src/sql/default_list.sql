-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 19-09-14 13:43
-- 서버 버전: 8.0.17
-- PHP 버전: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `id10675326_suninsls`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `list`
--

CREATE TABLE `list` (
  `id` int(4) NOT NULL COMMENT '순번',
  `type` enum('대여','반납') NOT NULL COMMENT '대여 / 반납 여부',
  `user` varchar(10) NOT NULL COMMENT '사용자',
  `laptop` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '노트북 번호',
  `time` datetime NOT NULL COMMENT '날짜 및 시각'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='노트북 대여 / 반납 목록';

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `list`
--
ALTER TABLE `list`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '순번', AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
