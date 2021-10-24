-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 08:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcesports`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `admin`, `password`) VALUES
(1, 'Bibash Thapa Magar', 'be2018se635@gces.edu.np', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `badmintonpanel`
--

CREATE TABLE `badmintonpanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` varchar(255) NOT NULL,
  `grouped` varchar(255) NOT NULL,
  `unid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badmintonpanel`
--

INSERT INTO `badmintonpanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`, `grouped`, `unid`) VALUES
(15, 'badminton', 'first year', 'boys', 'COM', 'Bibash Thapa Magar', 'team', '1633698597'),
(16, 'badminton', 'first year', 'boys', 'COM', 'Rajan Aryal', 'team', '1633698597'),
(17, 'badminton', 'first year', 'boys', 'COM', 'Aasish Bandari', 'team', '1633698618'),
(18, 'badminton', 'first year', 'boys', 'COM', 'Bigyan Bista', 'team', '1633698618'),
(21, 'badminton', 'first year', 'boys', 'SOF', 'Krishna Prasad Khadka', 'team', '1633698731'),
(22, 'badminton', 'first year', 'boys', 'SOF', 'Charles Wilson', 'team', '1633698731'),
(23, 'badminton', 'first year', 'boys', 'COM', 'Bibash Thapa Magar', 'solo', '1633698869'),
(24, 'badminton', 'first year', 'boys', 'COM', 'Aasish Bandari', 'solo', '1633698943'),
(25, 'badminton', 'first year', 'boys', 'COM', 'Bigyan Bista', 'solo', '1633699001'),
(26, 'badminton', 'first year', 'boys', 'COM', 'Rajan Aryal', 'solo', '1633699036');

-- --------------------------------------------------------

--
-- Table structure for table `basketballpanel`
--

CREATE TABLE `basketballpanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `jerseynumber` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basketballpanel`
--

INSERT INTO `basketballpanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`, `position`, `jerseynumber`, `extra`) VALUES
(9, 'basketball', 'third year', 'boys', 'SOF', 'Bigyan Bista', 'PG', '11', '0'),
(10, 'basketball', 'third year', 'boys', 'SOF', 'Sushant Rahapal', 'SG', '23', '0'),
(11, 'basketball', 'third year', 'boys', 'SOF', 'Utsab Gurung', 'SF', '32', '0'),
(12, 'basketball', 'third year', 'boys', 'SOF', 'Suman Darji', 'PF', '07', '0'),
(13, 'basketball', 'third year', 'boys', 'SOF', 'Rajan Aryal', 'C', '10', '0'),
(14, 'basketball', 'third year', 'boys', 'SOF', 'Sanket Adhikari', 'SG', '20', '1'),
(15, 'basketball', 'third year', 'boys', 'SOF', 'Parbat Buda', 'SF', '15', '1'),
(16, 'basketball', 'third year', 'boys', 'SOF', 'Ujwal Lamechaney', 'PF', '18', '1'),
(17, 'basketball', 'fourth year', 'girls', 'SOF', 'Mary May', 'PG', '15', '0'),
(18, 'basketball', 'fourth year', 'girls', 'SOF', 'Angela Gill', 'SG', '19', '0'),
(19, 'basketball', 'fourth year', 'girls', 'SOF', 'Ella Coleman', 'SF', '07', '0'),
(20, 'basketball', 'fourth year', 'girls', 'SOF', 'Emily Welch', 'PF', '03', '0'),
(21, 'basketball', 'fourth year', 'girls', 'SOF', 'Wendy Wallace', 'C', '21', '0'),
(22, 'basketball', 'fourth year', 'girls', 'SOF', 'Lily Glover', 'SG', '11', '1'),
(23, 'basketball', 'fourth year', 'girls', 'SOF', 'Penelope Mitchell', 'SF', '09', '1'),
(24, 'basketball', 'fourth year', 'girls', 'SOF', 'Elizabeth Berry', 'PF', '01', '1'),
(25, 'basketball', 'third year', 'girls', 'SOF', 'Anuska Parajuli', 'PG', '01', '0'),
(26, 'basketball', 'third year', 'girls', 'SOF', 'Salipa Gurung', 'SG', '99', '0'),
(27, 'basketball', 'third year', 'girls', 'SOF', 'Pratigya Dhakal', 'SF', '33', '0'),
(28, 'basketball', 'third year', 'girls', 'SOF', 'Aiyana Koirala', 'PF', '11', '0'),
(29, 'basketball', 'third year', 'girls', 'SOF', 'Sita Kumari', 'C', '15', '0'),
(30, 'basketball', 'third year', 'girls', 'SOF', 'Maya Sharma', 'SF', '22', '1'),
(31, 'basketball', 'third year', 'girls', 'SOF', 'Trisala rai', 'SG', '66', '1'),
(32, 'basketball', 'third year', 'girls', 'SOF', 'Simran Gurung', 'PF', '43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `chesspanel`
--

CREATE TABLE `chesspanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chesspanel`
--

INSERT INTO `chesspanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`) VALUES
(11, 'chess', 'third year', 'boys', 'SOF', 'Bibash Thapa Magar'),
(12, 'chess', 'third year', 'boys', 'SOF', 'Rajan Aryal'),
(13, 'chess', 'third year', 'boys', 'SOF', 'Sanket Adhikari');

-- --------------------------------------------------------

--
-- Table structure for table `cricketpanel`
--

CREATE TABLE `cricketpanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `jerseynumber` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cricketpanel`
--

INSERT INTO `cricketpanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`, `position`, `jerseynumber`, `extra`) VALUES
(1, 'cricket', 'fourth year', 'boys', 'SOF', 'Jacob Abraham', 'WK', '33', '0'),
(2, 'cricket', 'fourth year', 'boys', 'SOF', 'Boris Mackenzie', 'C', '69', '0'),
(3, 'cricket', 'fourth year', 'boys', 'SOF', 'Alexander Morrison', 'AR', '06', '0'),
(4, 'cricket', 'fourth year', 'boys', 'SOF', 'Blake Hemmings', 'BATS', '11', '0'),
(5, 'cricket', 'fourth year', 'boys', 'SOF', 'Luke Allan', 'BOWL', '05', '0'),
(6, 'cricket', 'fourth year', 'boys', 'SOF', 'Anthony Morgan', 'BATS', '19', '0'),
(7, 'cricket', 'fourth year', 'boys', 'SOF', 'Sean Reid', 'BOWL', '15', '0'),
(8, 'cricket', 'fourth year', 'boys', 'SOF', 'Peter Peake', 'BATS', '36', '0'),
(9, 'cricket', 'fourth year', 'boys', 'SOF', 'Charles Sanderson', 'BOWL', '99', '0'),
(10, 'cricket', 'fourth year', 'boys', 'SOF', 'Trevor Lee', 'BATS', '01', '0'),
(11, 'cricket', 'fourth year', 'boys', 'SOF', 'Justin	Clark', 'BOWL', '14', '0'),
(12, 'cricket', 'fourth year', 'boys', 'SOF', 'Joseph	May', 'WK', '21', '1'),
(13, 'cricket', 'fourth year', 'boys', 'SOF', 'Connor	Jones', 'BATS', '07', '1'),
(14, 'cricket', 'fourth year', 'boys', 'SOF', 'Julian	Berry', 'BOWL', '56', '1'),
(15, 'cricket', 'fourth year', 'boys', 'SOF', 'Nathan	White', 'BATS', '23', '1'),
(16, 'cricket', 'fourth year', 'boys', 'SOF', 'Sebastian	Blake', 'BOWL', '44', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fixturespanel`
--

CREATE TABLE `fixturespanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `firstfaculty` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `secondfaculty` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixturespanel`
--

INSERT INTO `fixturespanel` (`id`, `sports`, `gender`, `firstname`, `firstfaculty`, `secondname`, `secondfaculty`, `date`, `time`, `title`, `info`) VALUES
(20, 'football', 'boys', 'first year', 'COM', 'second year', 'SOF', '2021-10-14', '09:00:00', 'Begining of today event with first year boys vs second year boys', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '),
(21, 'football', 'boys', 'third year', 'SOF', 'fourth year', 'SOF', '2021-10-14', '12:00:00', 'Second Match of the day.', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '),
(22, 'basketball', 'girls', 'first year', 'COM', 'second year', 'COM', '2021-10-17', '09:00:00', 'Begining Basketball girls tournament 2021', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ');

-- --------------------------------------------------------

--
-- Table structure for table `footballpanel`
--

CREATE TABLE `footballpanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `jerseynumber` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footballpanel`
--

INSERT INTO `footballpanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`, `position`, `jerseynumber`, `extra`) VALUES
(17, 'football', 'third year', 'boys', 'SOF', 'Aasish Bandari', 'GK', '01', '0'),
(18, 'football', 'third year', 'boys', 'SOF', 'Parbat Buda', 'DF', '32', '0'),
(19, 'football', 'third year', 'boys', 'SOF', 'Anil Bhujel', 'DF', '15', '0'),
(20, 'football', 'third year', 'boys', 'SOF', 'saksam Giri', 'DF', '05', '0'),
(21, 'football', 'third year', 'boys', 'SOF', 'Asmit Nepali', 'DF', '03', '0'),
(22, 'football', 'third year', 'boys', 'SOF', 'Arjun Adhikari', 'MF', '22', '0'),
(23, 'football', 'third year', 'boys', 'SOF', 'Rajan Aryal', 'MF', '11', '0'),
(24, 'football', 'third year', 'boys', 'SOF', 'Sushant Basnet', 'MF', '18', '0'),
(25, 'football', 'third year', 'boys', 'SOF', 'Prasiddha Khadka', 'FW', '13', '0'),
(26, 'football', 'third year', 'boys', 'SOF', 'Prakash Lagun', 'FW', '10', '0'),
(27, 'football', 'third year', 'boys', 'SOF', 'Suman Darji', 'FW', '07', '0'),
(28, 'football', 'third year', 'boys', 'SOF', 'Anurag Dahal', 'GK', '99', '1'),
(29, 'football', 'third year', 'boys', 'SOF', 'Sumit Gurung', 'DF', '01', '1'),
(30, 'football', 'third year', 'boys', 'SOF', 'Utsab Gurung', 'MF', '32', '1'),
(31, 'football', 'third year', 'boys', 'SOF', 'Ujwal Lamachane', 'MF', '33', '1'),
(32, 'football', 'third year', 'boys', 'SOF', 'Alson Garbuja', 'FW', '27', '1'),
(33, 'football', 'second year', 'boys', 'COM', 'Charles Wilson', 'GK', '33', '0'),
(34, 'football', 'second year', 'boys', 'COM', 'Stephen Clark', 'DF', '05', '0'),
(35, 'football', 'second year', 'boys', 'COM', 'Liam Kelly', 'DF', '36', '0'),
(36, 'football', 'second year', 'boys', 'COM', 'Julian Ross', 'DF', '07', '0'),
(37, 'football', 'second year', 'boys', 'COM', 'Nicholas Campbell', 'DF', '45', '0'),
(38, 'football', 'second year', 'boys', 'COM', 'Christopher Berry', 'MF', '47', '0'),
(39, 'football', 'second year', 'boys', 'COM', 'Harry Turner', 'MF', '46', '0'),
(40, 'football', 'second year', 'boys', 'COM', 'Joseph Hughes', 'MF', '78', '0'),
(41, 'football', 'second year', 'boys', 'COM', 'Benjamin	Henderson', 'FW', '85', '0'),
(42, 'football', 'second year', 'boys', 'COM', 'Ian Hunter', 'FW', '23', '0'),
(43, 'football', 'second year', 'boys', 'COM', 'Joshua Hemmings', 'FW', '25', '0'),
(44, 'football', 'second year', 'boys', 'COM', 'Owen Bailey', 'GK', '96', '1'),
(45, 'football', 'second year', 'boys', 'COM', 'Joshua Poole', 'DF', '17', '1'),
(46, 'football', 'second year', 'boys', 'COM', 'Jason White', 'MF', '7', '1'),
(47, 'football', 'second year', 'boys', 'COM', 'Brian Duncan', 'MF', '10', '1'),
(48, 'football', 'second year', 'boys', 'COM', 'Sam	Arnold', 'FW', '11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallerypanel`
--

CREATE TABLE `gallerypanel` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerypanel`
--

INSERT INTO `gallerypanel` (`id`, `name`, `image`, `date`) VALUES
(3, 'Football match(first half)', '162098381811side-football.jpg', '2020-12-14'),
(4, 'Chess match between teacher and student', '1620983867chess-student-vs-sir.jpg', '2020-12-31'),
(5, 'First Match of cricket', '1620983897Cricket-Match.jpg', '2021-02-17'),
(6, 'Sunshine and Cricket', '1620983923cricket-photoshoot.jpg', '2021-02-18'),
(7, 'Chess Match ', '1620983958chess01.jpg', '2021-02-24'),
(8, 'warming up', '1620983991DglYdmDXcAA199-.jpg', '2021-01-19'),
(9, 'team 3', '1620984010DglYdmGXUAAbL_G.jpg', '2021-01-19'),
(10, 'Discussion between coach and players', '1620984030discussion.jpg', '2020-10-15'),
(11, 'Second day and second match', '1620984065download (1).jpg', '2021-01-20'),
(12, 'Basketball moments', '1620984082download.jpg', '2021-02-23'),
(13, 'Volleyball match', '1620984111DPSL4621-scaled.jpg', '2021-03-03'),
(14, 'team photo', '1620984139El9B3VbVkAA2-V4.jpg', '2021-05-12'),
(15, 'Team 2 vs Team 3 (Volleyball)', '1620984174EynTucoW8AIRTb2.jpg', '2021-04-27'),
(16, 'Football match 101', '1620984199football-local-football-delhi.webp', '2021-02-25'),
(17, 'Football match 1011010', '1620984219football-match-1.jpg', '2021-05-04'),
(18, 'Celebration', '1620984240frRFTqSuNF.jpg', '2020-11-19'),
(19, 'Girls play basketball', '1620984268GBB 121417.jpg', '2019-07-23'),
(20, 'girls play badminton', '1620984304girls-badminton-match.jpg', '2018-12-12'),
(21, 'girls play football', '1620984326girls-football.jpg', '2021-01-14'),
(22, 'good luck bois', '1620984350good-luck-tt.jpg', '2021-06-01'),
(23, 'boys basketball match', '1620984373IMG-5751.jpg', '2021-09-02'),
(24, 'Intense chess match', '1620984394intense-chess-match.jpg', '2021-07-16'),
(25, 'girls badminton', '1620984420jpg.jpg', '2021-06-05'),
(26, 'table tennis', '1620984439l30196.jpg', '2021-05-03'),
(27, 'tennis tournament', '1620984463LDI-tennis-tournament.jpg', '2020-12-18'),
(28, 'Chess cup for girls', '1620984485girls-play-chess.jpg', '2020-12-11'),
(29, 'Starting soon', '1620984500WhatsApp-Image-2020-10-19-at-7.55.04-PM.jpeg', '2021-01-08'),
(30, 'what a six', '1620984521what-a-shot.jpg', '2020-12-16'),
(31, 'tug of warssss', '1620984538Tug-of-war-US-Naval-Academy-Maryland-Annapolis-2005.jpg', '2021-05-15'),
(32, 'tuggers tuggers', '1620984566tuggers101.jpg', '2021-01-26'),
(33, 'tt match', '1620984581tt-match.jpg', '2020-11-19'),
(34, 'team second', '1620984605team-2.jpg', '2019-01-14'),
(35, 'behind the scenes', '1620984626table-tennis-bts.png', '2020-09-30'),
(36, 'scores', '1620984646score.jpg', '2020-11-19'),
(37, 'supporterrs', '1620984665supporters.jpg', '2020-12-24'),
(38, 'team 4', '1620984685WhatsApp-Image-2020-10-19-at-7.55.04-PM.jpeg', '2020-12-18'),
(39, 'staff volleyball', '1620984707staff-volleyball.jpg', '2022-01-18'),
(40, 'friendly match', '1620984759local-footy-match_1brx0advykp8t17ytdemeq0u4z.jpg', '2021-05-12'),
(41, 'final match', '1620984779Pokhara-Cup_Ram-Gurung.jpg', '2020-12-02'),
(42, 'Live', '1620984810qoc8c1sg_minehead-cricket-club-match-08-2018-twitter_625x300_07_August_18.webp', '2021-08-07'),
(43, 'lovely audience', '1620984843lovely-audience.jpg', '2021-07-08'),
(44, 'men\'s final volleyball match', '1620984889men-volleyball.jpg', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `newspanel`
--

CREATE TABLE `newspanel` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `featured` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newspanel`
--

INSERT INTO `newspanel` (`id`, `title`, `body`, `image`, `date`, `featured`) VALUES
(1, 'ICC Postpones T20 World Cup 2020 Over COVID-19', 'As expected, the coronavirus pandemic has compelled the International Cricket Council (ICC) to postpone the 2020 edition of the T20 World Cup scheduled during October-November in Australia.\r\n\r\nThe ICC has taken the decision during a virtual board meeting on July 20, after four months of monitoring.\r\n\r\nThe ICC has been exploring contingency plans since hosts Cricket Australia (CA) acknowledged the logistical challenges involved in staging a 16-team tournament amid the pandemic.\r\n\r\n \r\n“The decision to postpone the ICC Men’s T20 World Cup was taken after careful consideration of all of the options available to us and gives us the best possible opportunity of delivering two safe and successful T20 World Cups for fans around the world,” said ICC Chief Executive Manu Sawhney.', '1619784998icc-t20-world-cup-postpones.jpg', '2020-07-21', 0),
(13, 'After 37 Years Nepal Bags Tri-nations Cup 2021 Title!', 'After 37 Years Nepal Bags Tri-nations Cup 2021 Title!\r\nNepal defeated Bangladesh 2-1 to lift the trophy.\r\n \r\nAfter 37 Years Nepal Bags Tri-nations Cup 2021 Title!\r\nThough Nepal showed nominal performance in the group matches, it has come back stronger in the final match. Nepal has won the trophy after 37 years.\r\n\r\nThe Nepali team inflicted a crushing defeat on Bangladesh, winning by 2-1 to lift the title of Three Nations Cup 2021 held at Dashrath Stadium, Tripureshwor, on Monday.\r\n\r\nNepal showed dominance over Bangladesh since the very start of the match and took a 2-0 lead in the first half of the match.\r\n\r\n \r\nNepal’s Sanjog Rai made the opening score in the 18th minute and Bishal Rai in the 41st minute to give the host country a 2-0 dominance against Bangladesh in the first half.\r\n\r\nHowever, the second half became more excited when Bangladesh scored a goal.', '1619785632nepal-bags-tri-nations-cup-2021-title.jpg', '2021-03-30', 0),
(14, 'Nepal Appoints Dav Whatmore as National Cricket Team Head Coach!', 'Nepal Appoints Dav Whatmore as National Cricket Team Head Coach!\r\nWhatmore has previously coached Sri Lanka, Pakistan, and Bangladesh.\r\n \r\nNepal Appoints Dav Whatmore as National Cricket Team Head Coach!\r\nThe Cricket Association of Nepal (CAN) has appointed world cup winning coach Dav Whatmore as the new head coach of the national cricket team.\r\n\r\nThe Sri Lanka-born Australian cricketer Whatmore’s appointment will bring a great experience to Nepal at a time when the team is reeling from the failure to secure a berth at the 2021 T20 World Cup in India. The coach’s primary task will be to secure Nepal’s qualification for the 2022 T20 World Cup in Australia.\r\n\r\nHis appointment will also fill the position that had remained vacant for nearly a year after Indian Coach Umesh Patwal stepped down in February 2020.\r\n\r\n \r\n“Dave is extremely keen to take on this new challenge, as he strongly believes Nepal has great talent and a very bright future in cricket. Nepal is a beautiful country, and Dav is looking forward to this new challenge with a bunch of young talent of Nepal,” said Dav’s high profile manager Kaustav Lahiri after the appointment.', '1619785692nepal-cricket-head-coach.jpg', '2020-12-18', 0),
(15, 'Nepal’s Marathoner Gopichandra to Participate in 2021 Tokyo Olympics!', 'Nepal’s marathon runner Gopi Chandra Parki of the Armed Police Force (APF) Club is set to participate in the upcoming 2021 Tokyo Olympics.\r\n\r\nHis selection to compete in the marathon event in the Olympics is confirmed after he bagged the title of the Marathon held in Nepalgunj, Banke on Saturday.\r\n\r\nIn the 13th South Asian Games held in Nepal last year, Parki had won a gold medal in the 5,000 meters race.', '1619785746nepals-marathon-runner.jpg', '2020-11-27', 0),
(16, 'Nepal’s Paras Khadka in Nominations for ICC Men’s Player of the Decade!', 'As the current decade is coming to an end, the International Cricket Council (ICC) today released the nominations for the silverware to be bestowed on cricketers for their performances over the decade.\r\n\r\nThe big news for Nepali cricket fans is that Nepal’s former captain Paras Khadka has been nominated for the prestigious ICC Men’s Associate Player of the Decade.\r\n\r\nAccording to the list released on November 24, six players have been nominated for the accolade. Besides Paras, Callum Macleod (Scotland), Kyle Coetzer (Scotland), Richie Berrington (Scotland), Peter Borren (the Netherlands), and Asad Vala (Papua New Guinea) have been selected.', '1619785805paras-khadka-ICC.jpg', '2020-11-24', 1),
(17, 'Five Nepali Athletes to Participate in 2020 World Powerlifting Championship!', 'Nepal is all set to participate in the upcoming 25th edition of the World Powerlifting Championship scheduled to be held from December 4 – 7, 2020, in Maharashtra, India.\r\n\r\n“The 2020 Powerlifting Championship will see athletes from 25 countries, including Nepal,” said Jiban Giri, Vice-President of the Asian Powerlifting Federation.\r\n\r\nAccording to the Nepal Powerlifting Association (NPA), five Nepali athletes, four men, and a woman will compete with the international players in the 2020 World Powerlifting Championship.', '1619785847world-powerlifting-championship-2020.jpg', '2020-11-23', 0),
(18, 'Nepali Football Team to Play A Friendly Match with Bangladesh!', 'Nepali national football team left for Dhaka to play a friendly match with Bangladesh national football team on November 13 and 17. The friendly match will pave the way for the selection of the FIFA World Cup second round.\r\n\r\nThe All Nepal Football Association (ANFA) had bid a farewell to the 34-member team at the Tribhuvan University International Airport on November 05, 2020.\r\n\r\nThe ANFA has selected eight new players for the 34-member team in place of regular national players who tested positive for COVID-19. In addition, national player Rohit Chand was also dropped from the team due to an injury', '1619785893national-football-team.jpg', '2020-11-06', 1),
(19, 'Nepal Bags 4 Gold Medals in ‘Virtual Taekwondo’ Championship!', 'The morale and enthusiasm of the players worldwide could have been certainly dampened due to the unprecedented postponement of sports events in view of coronavirus pandemic.\r\n\r\nAt this juncture, the International Open Friendly Taekwondo Championship (IOFTC) organizers have come up with an innovative thought to boost the morale of the players.\r\n\r\nThe IOFTC, in association with the Everest Taekwondo Association and Universal United Nepalis Taekwondo Federation, has organized ‘Lockdown COVID-19 Poomsae Online Video Championship 2020’.\r\n\r\n \r\nIn the virtual competition, Nepal has bagged four gold medals, three silver medals and 14 bronze medals', '1619785936virtual-nepal-taekwondo-sports.jpg', '2020-07-24', 0),
(22, 'Nepal pull second win in SAFF Championship', 'Nepal edged Sri Lanka 3-1 on Monday to register their second victory in a row and strengthen their bid for the first SAFF Championship final taking place at the National Football Stadium in Male, Maldives.\r\n\r\nNepal, which has never reached the final of the tournament since its inception in 1993, have made a strong start to their campaign with two back-to-back wins. They defeated hosts and defending champions Maldives in their first match on Friday.\r\n\r\nYouth forward Suman Lama put Nepal ahead before the break while Anjan Bista and Ayush Ghalan struck in the second half. Marvin Hamilton and Dillon De Silva were on target for Sri Lanka.\r\n\r\nThe outcome puts Nepal on top of the standings with six points. The top two sides will go into the final. Bangladesh are second with four points, India third with one point while Maldives and Sri Lanka are yet to register wins. India and Maldives have played only one match while other sides have played two matches each.\r\n\r\nNepal will play their next match against India on October 10.\r\n\r\nSri Lanka, who lost 1-0 against Bangladesh in their last match, started the game brightly and dominated possession but Nepal troubled the islanders with their quick pace and counter attacks.\r\n\r\n\"I am happy with three points and it was a very difficult game,\" said Nepal\'s coach Abdullah Almutairi. \"Now maybe we have a chance to qualify for the final.\"\r\n\r\n\r\nRegarding his team\'s approach of counter attack, Almutairi said: \"In the competition, we don\'t care about performance but points. If you want to keep the ball, keep it and I keep the points.\"\r\n\r\n\"Performance is important in friendly matches because that makes you better for competition. But points are important in competition,\" he said.\r\n\r\nNepal once again played with compact defence with Gautam Shrestha, Rohit Chand, Ananta Tamang and Suman Aryal. Scorer Bista and Lama were paired alongside Nawayug Shrestha in the attacking department, while Pujan Uparkoti, Tej Tamang and Bishal Rai started as midfielders.\r\n\r\nMidfielder Rai came in place of Sujal Shrestha who started in the last game, while forward Lama was on the starting lineup with defender Dinesh Rajbanshi benched for the match.\r\n\r\nDe Silva tried to trouble Nepali goalkeeper and captain Kiran Limbu in the 19th minute but ended up firing wide after dribbling past Gautam Shrestha.\r\n\r\nLama opened the scoring for Nepal at the half hour mark through Nawayug Shrestha’s pass. Lama’s scorcher from a close range forced the ball past Sri Lankan goalie Suman Perera after the ball struck the inner edge of the post and dropped at the goalline. It was Lama’s first goal for the national team.\r\n\r\nPerera made a spectacular save in the early second half as he punched Anjan Bista\'s freekick. But Bista scored shortly afterwards in the 51st minute as he tapped in goalie Perera\'s rebounder off Nawayug’s close range shot. It was his sixth international goal.\r\n\r\n\r\nDefender Aryal rescued Nepal in the 55th minute as he made a goal line clearance to prevent Kavindu Ishan\'s strike when goalie Limbu was out of his position. But Sri Lanka cut the deficit in the 57th minute through Marvin Hamilton.\r\n\r\nIn the 67th minute, Sri Lankan goalie Perera denied Santosh Tamang a one-on-one goal scoring opportunity set up by Manish Dangi. Nepal restored their two-goal lead in the 86th minute when Ayush Ghalan, the replacement of Bishal Rai, made a cool finish controlling the pass of Tej Tamang. It was Ghalan’s first international goal.\r\n\r\nSri Lanka made it 3-2 in the stoppage time through penalty after Gautam Shrestha handled the ball inside the area. De Silva converted the penalty.  \r\n', '1633712725Nepal-SAFF.jpg', '2021-10-05', 0),
(23, 'Pokhara Rhinos enter final of the Championship', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', '1634035916rhino-final.jpg', '2021-10-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(255) NOT NULL,
  `sports` text NOT NULL,
  `playername` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `points` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `sports`, `playername`, `image`, `points`) VALUES
(1, 'football', 'Rajan Aryal', '1634064134unknown101.png', 22),
(3, 'basketball', 'Sanket Adhikari', '1634064156unknown101.png', 15),
(4, 'volleyball', 'Parbat Buda', '1634064472unknown101.png', 55),
(5, 'cricket', 'Yogesh Thapa', '1634064501unknown101.png', 40),
(6, 'football', 'Suman Darji', '1634105113unknown101.png', 8),
(7, 'basketball', 'Sushant Rahapal', '1634105157unknown101.png', 20),
(8, 'volleyball', 'Alson Garbuja', '1634105281unknown101.png', 30);

-- --------------------------------------------------------

--
-- Table structure for table `resultspanel`
--

CREATE TABLE `resultspanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `firstfaculty` varchar(255) NOT NULL,
  `firstscore` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `secondfaculty` varchar(255) NOT NULL,
  `secondscore` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resultspanel`
--

INSERT INTO `resultspanel` (`id`, `sports`, `gender`, `firstname`, `firstfaculty`, `firstscore`, `secondname`, `secondfaculty`, `secondscore`, `date`, `time`, `title`, `info`) VALUES
(20, 'football', 'boys', 'first year', 'COM', '4', 'second year', 'SOF', '2', '2021-10-14', '09:00:00', 'Begining of today event with first year boys vs second year boys', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '),
(21, 'football', 'boys', 'third year', 'SOF', '?', 'fourth year', 'SOF', '?', '2021-10-14', '12:00:00', 'Second Match of the day.', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem '),
(22, 'basketball', 'girls', 'first year', 'COM', '?', 'second year', 'COM', '?', '2021-10-17', '09:00:00', 'Begining Basketball girls tournament 2021', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ');

-- --------------------------------------------------------

--
-- Table structure for table `tabletennispanel`
--

CREATE TABLE `tabletennispanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` varchar(255) NOT NULL,
  `grouped` varchar(255) NOT NULL,
  `unid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabletennispanel`
--

INSERT INTO `tabletennispanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`, `grouped`, `unid`) VALUES
(10, 'tabletennis', 'first year', 'boys', 'SOF', 'Ram Bahadur', 'solo', '1633710436'),
(11, 'tabletennis', 'first year', 'boys', 'SOF', 'Shyam Bahadur', 'solo', '1633710475'),
(12, 'tabletennis', 'first year', 'boys', 'SOF', 'Shyam Bahadur', 'team', '1633710509'),
(13, 'tabletennis', 'first year', 'boys', 'SOF', 'Ram Bahadur', 'team', '1633710509');

-- --------------------------------------------------------

--
-- Table structure for table `volleyballpanel`
--

CREATE TABLE `volleyballpanel` (
  `id` int(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamgender` varchar(255) NOT NULL,
  `teamfaculty` varchar(255) NOT NULL,
  `playername` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `jerseynumber` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volleyballpanel`
--

INSERT INTO `volleyballpanel` (`id`, `sports`, `teamname`, `teamgender`, `teamfaculty`, `playername`, `position`, `jerseynumber`, `extra`) VALUES
(9, 'volleyball', 'second year', 'boys', 'SOF', 'Ram Bdr', 'S', '01', '0'),
(10, 'volleyball', 'second year', 'boys', 'SOF', 'Shyam Bdr', 'OH', '02', '0'),
(11, 'volleyball', 'second year', 'boys', 'SOF', 'Hari Bdr', 'OPP', '03', '0'),
(12, 'volleyball', 'second year', 'boys', 'SOF', 'Krishna Bdr', 'MB', '33', '0'),
(13, 'volleyball', 'second year', 'boys', 'SOF', 'Muni Bdr', 'L', '04', '0'),
(14, 'volleyball', 'second year', 'boys', 'SOF', 'Shreeram Bdr', 'DS', '05', '0'),
(15, 'volleyball', 'second year', 'boys', 'SOF', 'Rishiram Bdr', 'SS', '06', '1'),
(16, 'volleyball', 'second year', 'boys', 'SOF', 'Ram Prasad', 'S', '11', '1'),
(17, 'volleyball', 'second year', 'boys', 'SOF', 'Shyam Prasad', 'OH', '12', '1'),
(18, 'volleyball', 'second year', 'boys', 'SOF', 'Hari Prasad', 'OPP', '17', '1'),
(19, 'volleyball', 'second year', 'boys', 'SOF', 'Krishna Prasad', 'MB', '13', '1'),
(20, 'volleyball', 'second year', 'boys', 'SOF', 'Muni Prasad', 'L', '14', '1'),
(23, 'volleyball', 'third year', 'boys', 'SOF', 'Bigyan Bista', 'S', '01', '0'),
(24, 'volleyball', 'third year', 'boys', 'SOF', 'Alson Garbuja', 'OH', '99', '0'),
(25, 'volleyball', 'third year', 'boys', 'SOF', 'Suman Darji', 'OPP', '33', '0'),
(26, 'volleyball', 'third year', 'boys', 'SOF', 'Parbat Buda', 'MB', '11', '0'),
(27, 'volleyball', 'third year', 'boys', 'SOF', 'Anil Bhujel', 'L', '15', '0'),
(28, 'volleyball', 'third year', 'boys', 'SOF', 'Adarsha Baral', 'DS', '21', '0'),
(29, 'volleyball', 'third year', 'boys', 'SOF', 'Rajan Aryal', 'MB', '07', '1'),
(30, 'volleyball', 'third year', 'boys', 'SOF', 'Sumit Gurung', 'SS', '19', '1'),
(31, 'volleyball', 'third year', 'boys', 'SOF', 'Utsab Gurung', 'SS', '33', '1'),
(32, 'volleyball', 'third year', 'boys', 'SOF', 'Aasish Bandari', 'MB', '69', '1'),
(33, 'volleyball', 'third year', 'boys', 'SOF', 'Yogesh Thapa', 'OPP', '99', '1'),
(34, 'volleyball', 'third year', 'boys', 'SOF', 'sushant basnet', 'OH', '73', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`admin`),
  ADD UNIQUE KEY `admin-email` (`admin`);

--
-- Indexes for table `badmintonpanel`
--
ALTER TABLE `badmintonpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basketballpanel`
--
ALTER TABLE `basketballpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chesspanel`
--
ALTER TABLE `chesspanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cricketpanel`
--
ALTER TABLE `cricketpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixturespanel`
--
ALTER TABLE `fixturespanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footballpanel`
--
ALTER TABLE `footballpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerypanel`
--
ALTER TABLE `gallerypanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newspanel`
--
ALTER TABLE `newspanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultspanel`
--
ALTER TABLE `resultspanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabletennispanel`
--
ALTER TABLE `tabletennispanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volleyballpanel`
--
ALTER TABLE `volleyballpanel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `badmintonpanel`
--
ALTER TABLE `badmintonpanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `basketballpanel`
--
ALTER TABLE `basketballpanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chesspanel`
--
ALTER TABLE `chesspanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cricketpanel`
--
ALTER TABLE `cricketpanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `fixturespanel`
--
ALTER TABLE `fixturespanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `footballpanel`
--
ALTER TABLE `footballpanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `gallerypanel`
--
ALTER TABLE `gallerypanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `newspanel`
--
ALTER TABLE `newspanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resultspanel`
--
ALTER TABLE `resultspanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tabletennispanel`
--
ALTER TABLE `tabletennispanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `volleyballpanel`
--
ALTER TABLE `volleyballpanel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
