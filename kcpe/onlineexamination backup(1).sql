-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 09:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexamination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('mangalamgupta@onlineexamination.com', '9876543210'),
('', ''),
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5ca45a24022f5', '5ca45a241f46c'),
('5ca45a461e7b7', '5ca45a463e994'),
('5cac58ca93dff', '5cac58cab532b'),
('5caf9247da7b4', '5caf924806038'),
('5cb568990120e', '5cb56899349ad'),
('5cb56899759b2', '5cb568997dbba'),
('5cb56899cefe9', '5cb56899d9d3f'),
('5cb5689a318ab', '5cb5689a4f596'),
('5cb5689a77fb3', '5cb5689a801d3'),
('5cc2d4e6c4f23', '5cc2d4e6dda05'),
('5cc2d4e7252bb', '5cc2d4e72feb6'),
('5cc2d4e79993b', '5cc2d4e7b1669'),
('5cc2d4e7daa18', '5cc2d4e7e22bc'),
('5cc2d4e81738b', '5cc2d4e81ecf0'),
('5cc6988829364', '5cc6988844d15'),
('5cc6988890a92', '5cc698889b80b'),
('5cc69888cb8ce', '5cc69888d9ce8'),
('5cc698894477f', '5cc6988964559'),
('5cc69889a65eb', '5cc69889bbabc'),
('5cc6988a0df83', '5cc6988a156af'),
('5cc6988a41758', '5cc6988a48e51'),
('5cc6988a74e94', '5cc6988a7c611'),
('5cc6988aa5abf', '5cc6988ab5ecc'),
('5cc6988b05818', '5cc6988b10577'),
('5cc6988b411cb', '5cc6988b489aa'),
('5cc6988b7f6f2', '5cc6988b8cf63'),
('5cc6988bc06e9', '5cc6988bca86f'),
('5cc6988c1d8ed', '5cc6988c28103'),
('5cc6988c5e930', '5cc6988c6988c'),
('5cc6988ca24ac', '5cc6988cacacb'),
('5cc6988cf38f0', '5cc6988d0a414'),
('5cc6988d4dfaa', '5cc6988d5649e'),
('5cc6988d9f76b', '5cc6988da68fc'),
('5cc6988ddcafd', '5cc6988deb228'),
('5cc6988e2a6ee', '5cc6988e345c0'),
('5cc6988e759d1', '5cc6988e83d3e'),
('5cc6988eb92ef', '5cc6988ec2213'),
('5cc6988eeca27', '5cc6988f01763'),
('5cc6988f31653', '5cc6988f3a585'),
('5cc6988f7e117', '5cc6988f8e98c'),
('5cc6988fce11f', '5cc6988fdd80c'),
('5cc6989026a7c', '5cc6989034442'),
('5cc69890655c2', '5cc698906cd21'),
('5cc69890980c0', '5cc69890a0f36'),
('5cc69890c8b64', '5cc69890d1b70'),
('5cc69891192e7', '5cc6989126f27'),
('5cc698915ebf1', '5cc698916a868'),
('5cc6989192379', '5cc698919b3c0'),
('5cc69891c2fc4', '5cc69891cbfcb'),
('5cc69891f3bdf', '5cc698920b496'),
('5cc69892442e2', '5cc698924ba54'),
('5cc6989274f46', '5cc698927c667'),
('5cc69892ad0f8', '5cc69892bb602'),
('5cc69892e5d08', '5cc69892eed8d'),
('5cc69893252ad', '5cc698932e2c6'),
('5cc6989363764', '5cc698936c80d'),
('5cc69893943b8', '5cc698939d3cf'),
('5cc69893c7bc9', '5cc69893d36d3'),
('5cc6989409c21', '5cc6989415770'),
('5cc698943d402', '5cc698944639e'),
('5cc698947c65d', '5cc6989486ecc'),
('5cc69894c2dbd', '5cc69894ca200'),
('5cc6989501745', '5cc698950a4c8'),
('5cc6989535a3e', '5cc698953cee0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Abc', 'abc@gmail.com', 'Great Work..!!'),
('dennis', 'dien@mail.com', 'come on\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('5caf84072b8e4', 'Mike', 'mike@mail.com', 'Marks', 'marks', '2019-04-11', '08:14:31pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('milesian85@gmail.com', '5ca459ec09cbc', 0, 1, 1, 0, '2019-04-03 07:04:25'),
('milesian85@gmail.com', '5ca45a0e4a078', 100, 1, 1, 0, '2019-04-03 07:05:33'),
('milesian85@gmail.com', '5ca45a35ab398', 1, 1, 1, 0, '2019-04-09 08:24:54'),
('milesian85@gmail.com', '5cac58a996f8b', 0, 1, 0, 1, '2019-04-09 08:37:06'),
('admin@admin.com', '5caf923514cf6', 100, 1, 1, 0, '2019-04-11 19:15:43'),
('milesian85@gmail.com', '5caf923514cf6', 0, 1, 0, 1, '2019-04-11 19:16:29'),
('milesian85@gmail.com', '5cb568524f210', 100, 5, 5, 0, '2019-04-26 09:50:07'),
('milesian85@gmail.com', '5cc69877a6ef4', 4, 50, 2, 49, '2019-04-29 06:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5ca45a24022f5', '1', '5ca45a241f458'),
('5ca45a24022f5', '2', '5ca45a241f465'),
('5ca45a24022f5', '8', '5ca45a241f469'),
('5ca45a24022f5', '10', '5ca45a241f46c'),
('5ca45a461e7b7', '1', '5ca45a463e981'),
('5ca45a461e7b7', '5', '5ca45a463e98d'),
('5ca45a461e7b7', '7', '5ca45a463e991'),
('5ca45a461e7b7', '10', '5ca45a463e994'),
('5cac58ca93dff', '0', '5cac58cab531f'),
('5cac58ca93dff', '0', '5cac58cab5329'),
('5cac58ca93dff', '0', '5cac58cab532b'),
('5cac58ca93dff', '0', '5cac58cab532d'),
('5caf9247da7b4', '1', '5caf92480602f'),
('5caf9247da7b4', '1', '5caf924806038'),
('5caf9247da7b4', '1', '5caf92480603a'),
('5caf9247da7b4', '1', '5caf92480603b'),
('5cb568990120e', '1', '5cb568993499f'),
('5cb568990120e', '2', '5cb56899349ad'),
('5cb568990120e', '3', '5cb56899349af'),
('5cb568990120e', '4', '5cb56899349b1'),
('5cb56899759b2', '4', '5cb568997dbaf'),
('5cb56899759b2', '6', '5cb568997dbb8'),
('5cb56899759b2', '5', '5cb568997dbba'),
('5cb56899759b2', '7', '5cb568997dbbd'),
('5cb56899cefe9', '1', '5cb56899d9d32'),
('5cb56899cefe9', '2', '5cb56899d9d3b'),
('5cb56899cefe9', '4', '5cb56899d9d3d'),
('5cb56899cefe9', '3', '5cb56899d9d3f'),
('5cb5689a318ab', '72', '5cb5689a4f58c'),
('5cb5689a318ab', '62', '5cb5689a4f595'),
('5cb5689a318ab', '27', '5cb5689a4f596'),
('5cb5689a318ab', '26', '5cb5689a4f598'),
('5cb5689a77fb3', '56', '5cb5689a801c7'),
('5cb5689a77fb3', '52', '5cb5689a801d0'),
('5cb5689a77fb3', '24', '5cb5689a801d2'),
('5cb5689a77fb3', '45', '5cb5689a801d3'),
('5cc2d4e6c4f23', '1', '5cc2d4e6dd9f9'),
('5cc2d4e6c4f23', '9', '5cc2d4e6dda02'),
('5cc2d4e6c4f23', '0', '5cc2d4e6dda05'),
('5cc2d4e6c4f23', '8', '5cc2d4e6dda07'),
('5cc2d4e7252bb', '7', '5cc2d4e72fea9'),
('5cc2d4e7252bb', '8', '5cc2d4e72feb3'),
('5cc2d4e7252bb', '9', '5cc2d4e72feb6'),
('5cc2d4e7252bb', '1', '5cc2d4e72feb8'),
('5cc2d4e79993b', '3', '5cc2d4e7b165a'),
('5cc2d4e79993b', '4', '5cc2d4e7b1664'),
('5cc2d4e79993b', '2', '5cc2d4e7b1667'),
('5cc2d4e79993b', '5', '5cc2d4e7b1669'),
('5cc2d4e7daa18', '7', '5cc2d4e7e22ae'),
('5cc2d4e7daa18', '8', '5cc2d4e7e22b8'),
('5cc2d4e7daa18', '9', '5cc2d4e7e22ba'),
('5cc2d4e7daa18', '0', '5cc2d4e7e22bc'),
('5cc2d4e81738b', '0', '5cc2d4e81ece1'),
('5cc2d4e81738b', '9', '5cc2d4e81eceb'),
('5cc2d4e81738b', '7', '5cc2d4e81eced'),
('5cc2d4e81738b', '5', '5cc2d4e81ecf0'),
('5cc6988829364', '', '5cc6988844d15'),
('5cc6988829364', '', '5cc6988844d20'),
('5cc6988829364', '', '5cc6988844d23'),
('5cc6988829364', '', '5cc6988844d26'),
('5cc6988890a92', '', '5cc698889b80b'),
('5cc6988890a92', '', '5cc698889b817'),
('5cc6988890a92', '', '5cc698889b81b'),
('5cc6988890a92', '', '5cc698889b81e'),
('5cc69888cb8ce', '', '5cc69888d9ce8'),
('5cc69888cb8ce', '', '5cc69888d9cf4'),
('5cc69888cb8ce', '', '5cc69888d9cf8'),
('5cc69888cb8ce', '', '5cc69888d9cfb'),
('5cc698894477f', '', '5cc6988964559'),
('5cc698894477f', '', '5cc6988964564'),
('5cc698894477f', '', '5cc6988964568'),
('5cc698894477f', '', '5cc698896456b'),
('5cc69889a65eb', '', '5cc69889bbabc'),
('5cc69889a65eb', '', '5cc69889bbac7'),
('5cc69889a65eb', '', '5cc69889bbacb'),
('5cc69889a65eb', '', '5cc69889bbace'),
('5cc6988a0df83', '', '5cc6988a156af'),
('5cc6988a0df83', '', '5cc6988a156bb'),
('5cc6988a0df83', '', '5cc6988a156be'),
('5cc6988a0df83', '', '5cc6988a156c1'),
('5cc6988a41758', '', '5cc6988a48e51'),
('5cc6988a41758', '', '5cc6988a48e5c'),
('5cc6988a41758', '', '5cc6988a48e5f'),
('5cc6988a41758', '', '5cc6988a48e63'),
('5cc6988a74e94', '', '5cc6988a7c611'),
('5cc6988a74e94', '', '5cc6988a7c61d'),
('5cc6988a74e94', '', '5cc6988a7c621'),
('5cc6988a74e94', '', '5cc6988a7c624'),
('5cc6988aa5abf', '', '5cc6988ab5ecc'),
('5cc6988aa5abf', '', '5cc6988ab5ed8'),
('5cc6988aa5abf', '', '5cc6988ab5edc'),
('5cc6988aa5abf', '', '5cc6988ab5edf'),
('5cc6988b05818', '', '5cc6988b10577'),
('5cc6988b05818', '', '5cc6988b10583'),
('5cc6988b05818', '', '5cc6988b10587'),
('5cc6988b05818', '', '5cc6988b1058a'),
('5cc6988b411cb', '', '5cc6988b489aa'),
('5cc6988b411cb', '', '5cc6988b489b6'),
('5cc6988b411cb', '', '5cc6988b489b9'),
('5cc6988b411cb', '', '5cc6988b489bc'),
('5cc6988b7f6f2', '', '5cc6988b8cf63'),
('5cc6988b7f6f2', '', '5cc6988b8cf7e'),
('5cc6988b7f6f2', '', '5cc6988b8cf82'),
('5cc6988b7f6f2', '', '5cc6988b8cf85'),
('5cc6988bc06e9', '', '5cc6988bca86f'),
('5cc6988bc06e9', '', '5cc6988bca87a'),
('5cc6988bc06e9', '', '5cc6988bca87e'),
('5cc6988bc06e9', '', '5cc6988bca881'),
('5cc6988c1d8ed', '', '5cc6988c28103'),
('5cc6988c1d8ed', '', '5cc6988c2810f'),
('5cc6988c1d8ed', '', '5cc6988c28112'),
('5cc6988c1d8ed', '', '5cc6988c28115'),
('5cc6988c5e930', '', '5cc6988c6988c'),
('5cc6988c5e930', '', '5cc6988c6989e'),
('5cc6988c5e930', '', '5cc6988c698a2'),
('5cc6988c5e930', '', '5cc6988c698a5'),
('5cc6988ca24ac', '', '5cc6988cacacb'),
('5cc6988ca24ac', '', '5cc6988cacad8'),
('5cc6988ca24ac', '', '5cc6988cacadb'),
('5cc6988ca24ac', '', '5cc6988cacade'),
('5cc6988cf38f0', '', '5cc6988d0a414'),
('5cc6988cf38f0', '', '5cc6988d0a420'),
('5cc6988cf38f0', '', '5cc6988d0a423'),
('5cc6988cf38f0', '', '5cc6988d0a426'),
('5cc6988d4dfaa', '', '5cc6988d5649e'),
('5cc6988d4dfaa', '', '5cc6988d564aa'),
('5cc6988d4dfaa', '', '5cc6988d564ae'),
('5cc6988d4dfaa', '', '5cc6988d564b1'),
('5cc6988d9f76b', '', '5cc6988da68fc'),
('5cc6988d9f76b', '', '5cc6988da6908'),
('5cc6988d9f76b', '', '5cc6988da690c'),
('5cc6988d9f76b', '', '5cc6988da690f'),
('5cc6988ddcafd', '', '5cc6988deb228'),
('5cc6988ddcafd', '', '5cc6988deb234'),
('5cc6988ddcafd', '', '5cc6988deb238'),
('5cc6988ddcafd', '', '5cc6988deb23b'),
('5cc6988e2a6ee', '', '5cc6988e345c0'),
('5cc6988e2a6ee', '', '5cc6988e345cc'),
('5cc6988e2a6ee', '', '5cc6988e345d0'),
('5cc6988e2a6ee', '', '5cc6988e345d3'),
('5cc6988e759d1', '', '5cc6988e83d3e'),
('5cc6988e759d1', '', '5cc6988e83d4a'),
('5cc6988e759d1', '', '5cc6988e83d4e'),
('5cc6988e759d1', '', '5cc6988e83d51'),
('5cc6988eb92ef', '', '5cc6988ec2213'),
('5cc6988eb92ef', '', '5cc6988ec2220'),
('5cc6988eb92ef', '', '5cc6988ec2224'),
('5cc6988eb92ef', '', '5cc6988ec2227'),
('5cc6988eeca27', '', '5cc6988f01763'),
('5cc6988eeca27', '', '5cc6988f01770'),
('5cc6988eeca27', '', '5cc6988f01774'),
('5cc6988eeca27', '', '5cc6988f01777'),
('5cc6988f31653', '', '5cc6988f3a585'),
('5cc6988f31653', '', '5cc6988f3a591'),
('5cc6988f31653', '', '5cc6988f3a594'),
('5cc6988f31653', '', '5cc6988f3a597'),
('5cc6988f7e117', '', '5cc6988f8e98c'),
('5cc6988f7e117', '', '5cc6988f8e999'),
('5cc6988f7e117', '', '5cc6988f8e99c'),
('5cc6988f7e117', '', '5cc6988f8e99f'),
('5cc6988fce11f', '', '5cc6988fdd80c'),
('5cc6988fce11f', '', '5cc6988fdd818'),
('5cc6988fce11f', '', '5cc6988fdd81c'),
('5cc6988fce11f', '', '5cc6988fdd81f'),
('5cc6989026a7c', '', '5cc6989034442'),
('5cc6989026a7c', '', '5cc698903444d'),
('5cc6989026a7c', '', '5cc6989034451'),
('5cc6989026a7c', '', '5cc6989034454'),
('5cc69890655c2', '', '5cc698906cd21'),
('5cc69890655c2', '', '5cc698906cd2d'),
('5cc69890655c2', '', '5cc698906cd30'),
('5cc69890655c2', '', '5cc698906cd33'),
('5cc69890980c0', '', '5cc69890a0f36'),
('5cc69890980c0', '', '5cc69890a0f42'),
('5cc69890980c0', '', '5cc69890a0f46'),
('5cc69890980c0', '', '5cc69890a0f48'),
('5cc69890c8b64', '', '5cc69890d1b70'),
('5cc69890c8b64', '', '5cc69890d1b7c'),
('5cc69890c8b64', '', '5cc69890d1b80'),
('5cc69890c8b64', '', '5cc69890d1b83'),
('5cc69891192e7', '', '5cc6989126f27'),
('5cc69891192e7', '', '5cc6989126f33'),
('5cc69891192e7', '', '5cc6989126f37'),
('5cc69891192e7', '', '5cc6989126f3a'),
('5cc698915ebf1', '', '5cc698916a868'),
('5cc698915ebf1', '', '5cc698916a875'),
('5cc698915ebf1', '', '5cc698916a879'),
('5cc698915ebf1', '', '5cc698916a87c'),
('5cc6989192379', '', '5cc698919b3c0'),
('5cc6989192379', '', '5cc698919b3cd'),
('5cc6989192379', '', '5cc698919b3d1'),
('5cc6989192379', '', '5cc698919b3d4'),
('5cc69891c2fc4', '', '5cc69891cbfcb'),
('5cc69891c2fc4', '', '5cc69891cbfd7'),
('5cc69891c2fc4', '', '5cc69891cbfda'),
('5cc69891c2fc4', '', '5cc69891cbfde'),
('5cc69891f3bdf', '', '5cc698920b496'),
('5cc69891f3bdf', '', '5cc698920b4a1'),
('5cc69891f3bdf', '', '5cc698920b4a5'),
('5cc69891f3bdf', '', '5cc698920b4a8'),
('5cc69892442e2', '', '5cc698924ba54'),
('5cc69892442e2', '', '5cc698924ba60'),
('5cc69892442e2', '', '5cc698924ba63'),
('5cc69892442e2', '', '5cc698924ba66'),
('5cc6989274f46', '', '5cc698927c667'),
('5cc6989274f46', '', '5cc698927c673'),
('5cc6989274f46', '', '5cc698927c676'),
('5cc6989274f46', '', '5cc698927c679'),
('5cc69892ad0f8', '', '5cc69892bb602'),
('5cc69892ad0f8', '', '5cc69892bb60e'),
('5cc69892ad0f8', '', '5cc69892bb611'),
('5cc69892ad0f8', '', '5cc69892bb614'),
('5cc69892e5d08', '', '5cc69892eed8d'),
('5cc69892e5d08', '', '5cc69892eed98'),
('5cc69892e5d08', '', '5cc69892eed9c'),
('5cc69892e5d08', '', '5cc69892eed9f'),
('5cc69893252ad', '', '5cc698932e2c6'),
('5cc69893252ad', '', '5cc698932e2d2'),
('5cc69893252ad', '', '5cc698932e2d6'),
('5cc69893252ad', '', '5cc698932e2d8'),
('5cc6989363764', '', '5cc698936c80d'),
('5cc6989363764', '', '5cc698936c81a'),
('5cc6989363764', '', '5cc698936c81d'),
('5cc6989363764', '', '5cc698936c820'),
('5cc69893943b8', '', '5cc698939d3cf'),
('5cc69893943b8', '', '5cc698939d3db'),
('5cc69893943b8', '', '5cc698939d3df'),
('5cc69893943b8', '', '5cc698939d3e2'),
('5cc69893c7bc9', '', '5cc69893d36d3'),
('5cc69893c7bc9', '', '5cc69893d36de'),
('5cc69893c7bc9', '', '5cc69893d36e2'),
('5cc69893c7bc9', '', '5cc69893d36e5'),
('5cc6989409c21', '', '5cc6989415770'),
('5cc6989409c21', '', '5cc698941577c'),
('5cc6989409c21', '', '5cc698941577f'),
('5cc6989409c21', '', '5cc6989415782'),
('5cc698943d402', '', '5cc698944639e'),
('5cc698943d402', '', '5cc69894463a9'),
('5cc698943d402', '', '5cc69894463ad'),
('5cc698943d402', '', '5cc69894463b0'),
('5cc698947c65d', '', '5cc6989486ecc'),
('5cc698947c65d', '', '5cc6989486ed7'),
('5cc698947c65d', '', '5cc6989486edb'),
('5cc698947c65d', '', '5cc6989486ede'),
('5cc69894c2dbd', '', '5cc69894ca200'),
('5cc69894c2dbd', '', '5cc69894ca20b'),
('5cc69894c2dbd', '', '5cc69894ca20f'),
('5cc69894c2dbd', '', '5cc69894ca212'),
('5cc6989501745', '', '5cc698950a4c8'),
('5cc6989501745', '', '5cc698950a4d4'),
('5cc6989501745', '', '5cc698950a4d8'),
('5cc6989501745', '', '5cc698950a4db'),
('5cc6989535a3e', '', '5cc698953cee0'),
('5cc6989535a3e', '', '5cc698953ceeb'),
('5cc6989535a3e', '', '5cc698953ceef'),
('5cc6989535a3e', '', '5cc698953cef2');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5ca45a0e4a078', '5ca45a24022f5', '9+1', 4, 1),
('5ca45a35ab398', '5ca45a461e7b7', '8+2', 4, 1),
('5cac58a996f8b', '5cac58ca93dff', '1-1', 4, 1),
('5caf923514cf6', '5caf9247da7b4', '1', 4, 1),
('5cb568524f210', '5cb568990120e', '1+1', 4, 1),
('5cb568524f210', '5cb56899759b2', '2+3', 4, 2),
('5cb568524f210', '5cb56899cefe9', '5-2', 4, 3),
('5cb568524f210', '5cb5689a318ab', '9*3', 4, 4),
('5cb568524f210', '5cb5689a77fb3', '90/2', 4, 5),
('5cc2d48e3ca03', '5cc2d4e6c4f23', '1-1', 4, 1),
('5cc2d48e3ca03', '5cc2d4e7252bb', '7+2', 4, 2),
('5cc2d48e3ca03', '5cc2d4e79993b', '2+3', 4, 3),
('5cc2d48e3ca03', '5cc2d4e7daa18', '1-1', 4, 4),
('5cc2d48e3ca03', '5cc2d4e81738b', '7-2', 4, 5),
('5cc69877a6ef4', '5cc6988829364', '', 4, 1),
('5cc69877a6ef4', '5cc6988890a92', '', 4, 2),
('5cc69877a6ef4', '5cc69888cb8ce', '', 4, 3),
('5cc69877a6ef4', '5cc698894477f', '', 4, 4),
('5cc69877a6ef4', '5cc69889a65eb', '', 4, 5),
('5cc69877a6ef4', '5cc6988a0df83', '', 4, 6),
('5cc69877a6ef4', '5cc6988a41758', '', 4, 7),
('5cc69877a6ef4', '5cc6988a74e94', '', 4, 8),
('5cc69877a6ef4', '5cc6988aa5abf', '', 4, 9),
('5cc69877a6ef4', '5cc6988b05818', '', 4, 10),
('5cc69877a6ef4', '5cc6988b411cb', '', 4, 11),
('5cc69877a6ef4', '5cc6988b7f6f2', '', 4, 12),
('5cc69877a6ef4', '5cc6988bc06e9', '', 4, 13),
('5cc69877a6ef4', '5cc6988c1d8ed', '', 4, 14),
('5cc69877a6ef4', '5cc6988c5e930', '', 4, 15),
('5cc69877a6ef4', '5cc6988ca24ac', '', 4, 16),
('5cc69877a6ef4', '5cc6988cf38f0', '', 4, 17),
('5cc69877a6ef4', '5cc6988d4dfaa', '', 4, 18),
('5cc69877a6ef4', '5cc6988d9f76b', '', 4, 19),
('5cc69877a6ef4', '5cc6988ddcafd', '', 4, 20),
('5cc69877a6ef4', '5cc6988e2a6ee', '', 4, 21),
('5cc69877a6ef4', '5cc6988e759d1', '', 4, 22),
('5cc69877a6ef4', '5cc6988eb92ef', '', 4, 23),
('5cc69877a6ef4', '5cc6988eeca27', '', 4, 24),
('5cc69877a6ef4', '5cc6988f31653', '', 4, 25),
('5cc69877a6ef4', '5cc6988f7e117', '', 4, 26),
('5cc69877a6ef4', '5cc6988fce11f', '', 4, 27),
('5cc69877a6ef4', '5cc6989026a7c', '', 4, 28),
('5cc69877a6ef4', '5cc69890655c2', '', 4, 29),
('5cc69877a6ef4', '5cc69890980c0', '', 4, 30),
('5cc69877a6ef4', '5cc69890c8b64', '', 4, 31),
('5cc69877a6ef4', '5cc69891192e7', '', 4, 32),
('5cc69877a6ef4', '5cc698915ebf1', '', 4, 33),
('5cc69877a6ef4', '5cc6989192379', '', 4, 34),
('5cc69877a6ef4', '5cc69891c2fc4', '', 4, 35),
('5cc69877a6ef4', '5cc69891f3bdf', '', 4, 36),
('5cc69877a6ef4', '5cc69892442e2', '', 4, 37),
('5cc69877a6ef4', '5cc6989274f46', '', 4, 38),
('5cc69877a6ef4', '5cc69892ad0f8', '', 4, 39),
('5cc69877a6ef4', '5cc69892e5d08', '', 4, 40),
('5cc69877a6ef4', '5cc69893252ad', '', 4, 41),
('5cc69877a6ef4', '5cc6989363764', '', 4, 42),
('5cc69877a6ef4', '5cc69893943b8', '', 4, 43),
('5cc69877a6ef4', '5cc69893c7bc9', '', 4, 44),
('5cc69877a6ef4', '5cc6989409c21', '', 4, 45),
('5cc69877a6ef4', '5cc698943d402', '', 4, 46),
('5cc69877a6ef4', '5cc698947c65d', '', 4, 47),
('5cc69877a6ef4', '5cc69894c2dbd', '', 4, 48),
('5cc69877a6ef4', '5cc6989501745', '', 4, 49),
('5cc69877a6ef4', '5cc6989535a3e', '', 4, 50);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('5ca459ec09cbc', 'Test1', 0, 0, 0, 0, '', '', '2019-04-03 06:59:56'),
('5ca45a0e4a078', 'Test2', 100, 0, 1, 1, '10', '', '2019-04-03 07:00:30'),
('5ca45a35ab398', 'Test3', 1, 0, 1, 9, '1', '', '2019-04-03 07:01:09'),
('5cac58a996f8b', 'Test5', 1, 0, 1, 1, '1', '1', '2019-04-09 08:32:41'),
('5caf923514cf6', 'Hisabati', 100, 0, 1, 1, '1', '', '2019-04-11 19:15:01'),
('5cb568524f210', 'Exam', 20, 0, 5, 10, 'index', '', '2019-04-16 05:29:54'),
('5cc2d48e3ca03', 'Mao', 20, 0, 5, 1, '1', '', '2019-04-26 09:51:10'),
('5cc69877a6ef4', 'Tst', 2, 0, 50, 120, '1', '', '2019-04-29 06:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('test@nitsikkim.ac.in', 43, '2017-10-16 16:41:43'),
('test1@nitsikkim.ac.in', 39, '2017-10-16 16:51:04'),
('b150073ee@nitsikkim.ac.in', 47, '2017-10-16 16:58:01'),
('milesian85@gmail.com', 715, '2019-04-29 06:26:06'),
('jm@user.com', 60, '2019-04-01 08:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `phone`, `password`) VALUES
('', 'M', '', '', 0, 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
('James Maina', 'Male', 'New York', 'jm@user.com', 712345678, '12b03226a6d8be9c6e8cd5e55dc6c7920caaa39df14aab92d5e3ea9340d1c8a4d3d0b8e4314f1f6ef131ba4bf1ceb9186ab87c801af0d5c95b1befb8cedae2b9'),
('Ian', 'M', 'Meru', 'milesian85@gmail.com', 254702080116, '12b03226a6d8be9c6e8cd5e55dc6c7920caaa39df14aab92d5e3ea9340d1c8a4d3d0b8e4314f1f6ef131ba4bf1ceb9186ab87c801af0d5c95b1befb8cedae2b9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
