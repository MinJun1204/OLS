-- phpMyAdmin SQL Dump
-- version 5.0.0-alpha1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 19-10-14 00:46
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
-- 테이블 구조 `laptop`
--

CREATE TABLE `laptop` (
  `id` int(2) NOT NULL COMMENT '노트북 번호',
  `user` varchar(10) NOT NULL COMMENT '사용자',
  `broken` int(1) NOT NULL DEFAULT '0' COMMENT '고장 여부'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Laptop List';

--
-- 테이블의 덤프 데이터 `laptop`
--

INSERT INTO `laptop` (`id`, `user`, `broken`) VALUES
(1, '', 1),
(2, '', 1),
(3, '', 1),
(4, '김민준', 0),
(5, '', 0),
(6, '', 0),
(7, '', 0),
(8, '', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '', 0),
(19, '', 0),
(20, '', 0),
(21, '', 0),
(22, '', 0),
(23, '', 0),
(24, '', 0),
(25, '', 0),
(26, '', 0),
(27, '', 0),
(28, '', 0),
(29, '', 0),
(30, '', 0),
(31, '', 0),
(32, '', 0),
(33, '', 0),
(34, '', 0),
(35, '', 0),
(36, '', 0),
(37, '', 0),
(38, '', 0),
(39, '', 0),
(40, '', 0),
(41, '', 0),
(42, '', 0),
(43, '', 0),
(44, '', 0),
(45, '', 0),
(46, '', 0),
(47, '', 0),
(48, '', 0),
(49, '', 0),
(50, '', 0),
(51, '', 0);

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
-- 테이블의 덤프 데이터 `list`
--

INSERT INTO `list` (`id`, `type`, `user`, `laptop`, `time`) VALUES
(41, '대여', '김민준', '2 | 3 | 4', '2019-09-14 14:13:56'),
(42, '반납', '김민준', '2 | 3 | 4', '2019-09-14 14:14:19'),
(43, '대여', '', '1 | 2', '2019-10-13 23:35:20'),
(44, '대여', '', '3 | 4', '2019-10-13 23:36:51'),
(45, '대여', '김민준', '3 | 4', '2019-10-14 00:01:07'),
(46, '대여', '김민준', '3 | 4', '2019-10-14 00:02:27'),
(47, '대여', '김민준', '3 | 4 | 5 | 31 | 32', '2019-10-14 00:03:05'),
(48, '반납', '김민준', '3 | 4 | 5', '2019-10-14 00:05:45'),
(49, '대여', '김민준', '3 | 4 | 5 | 6', '2019-10-14 00:09:22'),
(50, '반납', '김민준', '4 | 5 | 6 | 31 | 32', '2019-10-14 00:09:41'),
(51, '대여', '김민준', '4 | 5 | 6', '2019-10-14 00:12:49'),
(52, '반납', '김민준', '3 | 4 | 5 | 6', '2019-10-14 00:13:05'),
(53, '대여', '김민준', '4', '2019-10-14 00:23:44');

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `name` varchar(10) NOT NULL COMMENT '이름',
  `pw` varchar(20) NOT NULL COMMENT '비밀번호',
  `admin` int(1) DEFAULT NULL COMMENT '관리자 여부'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Login Table';

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`name`, `pw`, `admin`) VALUES
('김민준', '12345', NULL),
('최수환', 'abcde', NULL),
('김민준', '12345', 1),
('김민준', '12345', 1),
('김민준', '12345', 1),
('김민준', '12345', 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT COMMENT '노트북 번호', AUTO_INCREMENT=52;

--
-- 테이블의 AUTO_INCREMENT `list`
--
ALTER TABLE `list`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '순번', AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

