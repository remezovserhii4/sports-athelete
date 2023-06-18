-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2017 at 12:38 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theproto_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `beta`
--

CREATE TABLE `beta` (
  `ID` int(11) NOT NULL,
  `emailBeta` varchar(100) CHARACTER SET utf16 NOT NULL,
  `betaupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beta`
--

INSERT INTO `beta` (`ID`, `emailBeta`, `betaupdate`) VALUES
(1, 'philibin.5@osu.edu', '2017-06-25 03:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT '',
  `comment` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `title`, `image`, `address`, `comment`) VALUES
(1, 'Abilene Christian Wildcats', 'Abilene-Christian-Wildcats-40.png', '', ''),
(2, 'Air Force Falcons', 'Air-Force-Falcons-40.png', '', ''),
(3, 'Akron Zips', 'Akron-Zips-40.png', '', ''),
(4, 'Alabama Crimson Tide', 'Alabama-Crimson-Tide-40.png', '', ''),
(5, 'Alabama A&M Bulldogs', 'Alabama-A&M-Bulldogs-40.png', '', ''),
(6, 'Alabama State Hornets', 'Alabama-State-Hornets-40.png', '', ''),
(7, 'Albany Great Danes', 'Albany-Great-Danes-40.png', '', ''),
(8, 'Alcorn State Braves', 'Alcorn-State-Braves-40.png', '', ''),
(9, 'American Eagles', 'American-Eagles-40.png', '', ''),
(10, 'Appalachian State Mountaineers', 'Appalachian-State-Mountaineers-40.png', '', ''),
(11, 'Arizona Wildcats', 'Arizona-Wildcats-40.png', '', ''),
(12, 'Arizona State Sun Devils', 'Arizona-State-Sun-Devils-40.png', '', ''),
(13, 'Arkansas Razorbacks', 'Arkansas-Razorbacks-40.png', '', ''),
(14, 'Arkansas-Pine Bluff Golden Lions', 'Arkansas-Pine-Bluff-Golden-Lions-40.png', '', ''),
(15, 'Arkansas State Red Wolves', 'Arkansas-State-Red-Wolves-40.png', '', ''),
(16, 'Army Black Knights', 'Army-Black-Knights-40.png', '', ''),
(17, 'Auburn Tigers', 'Auburn-Tigers-40.png', '', ''),
(18, 'Austin Peay Governors', 'Austin-Peay-Governors-40.png', '', ''),
(19, 'Ball State Cardinals', 'Ball-State-Cardinals-40.png', '', ''),
(20, 'Baylor Bears', 'Baylor-Bears-40.png', '', ''),
(21, 'Belmont Bruins', 'Belmont-Bruins-40.png', '', ''),
(22, 'Bethune Cookman Wildcats', 'Bethune-Cookman-Wildcats-40.png', '', ''),
(23, 'Binghampton Bearcats', 'Binghampton-Bearcats-40.png', '', ''),
(24, 'Boise State Broncos', 'Boise-State-Broncos-40.png', '', ''),
(25, 'Boston College Eagles', 'Boston-College-Eagles-40.png', '', ''),
(26, 'Boston Terriers', 'Boston-Terriers-40.png', '', ''),
(27, 'Bowling Green Falcons', 'Bowling-Green-Falcons-40.png', '', ''),
(28, 'Bradley Braves', 'Bradley-Braves-40.png', '', ''),
(29, 'Brown Bears', 'Brown-Bears-40.png', '', ''),
(30, 'Bryant Bulldogs', 'Bryant-Bulldogs-40.png', '', ''),
(31, 'Bucknell Bison', 'Bucknell-Bison-40.png', '', ''),
(32, 'Buffalo Bulls', 'Buffalo-Bulls-40.png', '', ''),
(33, 'Butler Bulldogs', 'Butler-Bulldogs-40.png', '', ''),
(34, 'BYU Cougars', 'BYU-Cougars-40.png', '', ''),
(35, 'Cal Poly Mustangs', 'Cal-Poly-Mustangs-40.png', '', ''),
(36, 'Cal State Bakersfield Roadrunners', 'Cal-State-Bakersfield-Roadrunners-40.png', '', ''),
(37, 'Cal State Fullerton Titans', 'Cal-State-Fullerton-Titans-40.png', '', ''),
(38, 'Cal State Northridge Matadors', 'Cal-State-Northridge-Matadors-40.png', '', ''),
(39, 'California Golden Bears', 'California-Golden-Bears-40.png', '', ''),
(40, 'Campbell Fighting Camels', 'Campbell-Fighting-Camels-40.png', '', ''),
(41, 'Canisius Golden Griffins', 'Canisius-Golden-Griffins-40.png', '', ''),
(42, 'Central Arkansas Bears', 'Central-Arkansas-Bears-40.png', '', ''),
(43, 'Central Connecticut Blue Devils', 'Central-Connecticut-Blue-Devils-40.png', '', ''),
(44, 'Central Michigan Chippewas', 'Central-Michigan-Chippewas-40.png', '', ''),
(45, 'Charleston Cougars', 'Charleston-Cougars-40.png', '', ''),
(46, 'Charleston Southern Buccaneers', 'Charleston-Southern-Buccaneers-40.png', '', ''),
(47, 'Charlotte 49ers', 'Charlotte-49ers-40.png', '', ''),
(48, 'Chattanooga Mocs', 'Chattanooga-Mocs-40.png', '', ''),
(49, 'Chicago State Cougars', 'Chicago-State-Cougars-40.png', '', ''),
(50, 'Cincinnati Bearcats', 'Cincinnati-Bearcats-40.png', '', ''),
(51, 'The Citadel Bulldogs', 'The-Citadel-Bulldogs-40.png', '', ''),
(52, 'Clemson Tigers', 'Clemson-Tigers-40.png', '', ''),
(53, 'Cleveland State Vikings', 'Cleveland-State-Vikings-40.png', '', ''),
(54, 'Coastal Carolina Chanticleers', 'Coastal-Carolina-Chanticleers-40.png', '', ''),
(55, 'Colgate Raiders', 'Colgate-Raiders-40.png', '', ''),
(56, 'Colorado Buffaloes', 'Colorado-Buffaloes-40.png', '', ''),
(57, 'Colorado State Rams', 'Colorado-State-Rams-40.png', '', ''),
(58, 'Columbia Lions', 'Columbia-Lions-40.png', '', ''),
(59, 'Connecticut Huskies', 'Connecticut-Huskies-40.png', '', ''),
(60, 'Coppin State Eagles', 'Coppin-State-Eagles-40.png', '', ''),
(61, 'Cornell Big Red', 'Cornell-Big-Red-40.png', '', ''),
(62, 'Creighton Bluejays', 'Creighton-Blue-Jays-40.png', '', ''),
(63, 'Dartmouth Big Green', 'Dartmouth-Big-Green-40.png', '', ''),
(64, 'Davidson Wildcats', 'Davidson-Wildcats-40.png', '', ''),
(65, 'Dayton Flyers', 'Dayton-Flyers-40.png', '', ''),
(66, 'Delaware Fightin\' Blue Hens', 'Delaware-Fightin-Blue-Hens-40.png', '', ''),
(67, 'Delaware State Hornets', 'Delaware-State-Hornets-40.png', '', ''),
(68, 'Denver Pioneers', 'Denver-Pioneers-40.png', '', ''),
(69, 'DePaul Blue Demons', 'DePaul-Blue-Demons-40.png', '', ''),
(70, 'Detroit Titans', 'Detroit-Titans-40.png', '', ''),
(71, 'Drake Bulldogs', 'Drake-Bulldogs-40.png', '', ''),
(72, 'Drexel Dragons', 'Drexel-Dragons-40.png', '', ''),
(73, 'Duke Blue Devils', 'Duke-Blue-Devils-40.png', '', ''),
(74, 'Duquense Dukes', 'Duquense-Dukes-40.png', '', ''),
(75, 'East Carolina Pirates', 'East-Carolina-Pirates-40.png', '', ''),
(76, 'East Tennessee State Buccaneers', 'East-Tennessee-State-Buccaneers-40.png', '', ''),
(77, 'Eastern Illinois Panthers', 'Eastern-Illinois-Panthers-40.png', '', ''),
(78, 'Eastern Kentucky Colonels', 'Eastern-Kentucky-Colonels-40.png', '', ''),
(79, 'Eastern Michigan Eagles', 'Eastern-Michigan-Eagles-40.png', '', ''),
(80, 'Eastern Washington Eagles', 'Eastern-Washington-Eagles-40.png', '', ''),
(81, 'Elon Phoenix', 'Elon-Phoenix-40.png', '', ''),
(82, 'Evansville Purple Aces', 'Evansville-Purple-Aces-40.png', '', ''),
(83, 'Fairfield Stags', 'Fairfield-Stags-40.png', '', ''),
(84, 'Fairleigh Dickinson Knights', 'Fairleight-Dickinson-Knights-40.png', '', ''),
(85, 'Florida International Panthers', 'Florida-International-Panthers-40.png', '', ''),
(86, 'Florida Gators', 'Florida-Gators-40.png', '', ''),
(87, 'Florida A&M Rattlers', 'Florida-A&M-Rattlers-40.png', '', ''),
(88, 'Florida Atlantic Owls', 'Florida-Atlantic-Owls-40.png', '', ''),
(89, 'Florida Gulf Coast Eagles', 'Florida-Gulf-Coast-Eagles-40.png', '', ''),
(90, 'Florida State Seminoles', 'Florida-State-Seminoles-40.png', '', ''),
(91, 'Fordham Rams', 'Fordham-Rams-40.png', '', ''),
(92, 'Fort Wayne (IN) Mastodons', 'Fort-Wayne-IN-Mastodons-40.png', '', ''),
(93, 'Fresno State Bulldogs', 'Fresno-State-Bulldogs-40.png', '', ''),
(94, 'Furman Paladins', 'Furman-Paladins-40.png', '', ''),
(95, 'Gardner Webb Runnin\' Bulldogs', 'Gardner-Webb-Runnin-Bulldogs-40.png', '', ''),
(96, 'George Mason Patriots', 'George-Mason-Patriots-40.png', '', ''),
(97, 'George Washington Colonials', 'George-Washington-Colonials-40.png', '', ''),
(98, 'Georgetown Hoyas', 'Georgetown-Hoyas-40.png', '', ''),
(99, 'Georgia Bulldogs', 'Georgia-Bulldogs-40.png', '', ''),
(100, 'Georgia Southern Eagles', 'Georgia-Southern-Eagles-40.png', '', ''),
(101, 'Georgia State Panthers', 'Georgia-State-Panthers-40.png', '', ''),
(102, 'Georgia Tech Yellow Jackets', 'Georgia-Tech-Yellow-Jackets-40.png', '', ''),
(103, 'Gonzaga Bulldogs', 'Gonzaga-Bulldogs-40.png', '', ''),
(104, 'Grambling State Tigers', 'Grambling-State-Tigers-40.png', '', ''),
(105, 'Grand Canyon Antelopes', 'Grand-Canyon-Antelopes-40.png', '', ''),
(106, 'Green Bay (WI) Phoenix', 'Green-Bay-WI-Phoenix-40.png', '', ''),
(107, 'Hampton Pirates', 'Hampton-Pirates-40.png', '', ''),
(108, 'Hartford Hawks', 'Hartford-Hawks-40.png', '', ''),
(109, 'Harvard Crimson', 'Harvard-Crimson-40.png', '', ''),
(110, 'Hawaii Rainbow Warriors', 'Hawaii-Rainbow-Warriors-40.png', '', ''),
(111, 'High Point Panthers', 'High-Point-Panthers-40.png', '', ''),
(112, 'Hofstra Pride', 'Hofstra-Pride-40.png', '', ''),
(113, 'Holy Cross Crusaders', 'Holy-Cross-Crusaders-40.png', '', ''),
(114, 'Houston Cougars', 'Houston-Cougars-40.png', '', ''),
(115, 'Houston Baptist Huskies', 'Houston-Baptist-Huskies-40.png', '', ''),
(116, 'Howard Bison', 'Howard-Bisons-40.png', '', ''),
(117, 'Idaho Vandals', 'Idaho-Vandals-40.png', '', ''),
(118, 'Idaho State Bengals', 'Idaho-State-Bengals-40.png', '', ''),
(119, 'Illinois Fighting Illini', 'Illinois-Fighting-Illini-40.png', '', ''),
(120, 'Illinois State Redbirds', 'Illinois-State-Redbirds-40.png', '', ''),
(121, 'Incarnate Word Cardinals', 'Incarnate-Word-Cardinals-40.png', '', ''),
(122, 'Indiana Hoosiers', 'Indiana-Hoosiers-40.png', '', ''),
(123, 'Indiana State Sycamores', 'Indiana-State-Sycamores-40.png', '', ''),
(124, 'Iona Gaels', 'Iona-Gaels-40.png', '', ''),
(125, 'Iowa Hawkeyes', 'Iowa-Hawkeyes-40.png', '', ''),
(126, 'Iowa State Cyclones', 'Iowa-State-Cyclones-40.png', '', ''),
(127, 'IUPUI Jaguars', 'IUPUI-Jaguars-40.png', '', ''),
(128, 'Jackson State Tigers', 'Jackson-State-Tigers-40.png', '', ''),
(129, 'Jacksonville State Gamecocks', 'Jacksonville-State-Gamecocks-40.png', '', ''),
(130, 'Jacksonville Dolphins', 'Jacksonville-Dolphins-40.png', '', ''),
(131, 'James Madison Dukes', 'James-Madison-Dukes-40.png', '', ''),
(132, 'Kansas Jayhawks', 'Kansas-Jayhawks-40.png', '', ''),
(133, 'Kansas State Wildcats', 'Kansas-State-Wildcats-40.png', '', ''),
(134, 'Kennesaw State Owls', 'Kennesaw-State-Owls-40.png', '', ''),
(135, 'Kent State Golden Flashes', 'Kent-State-Golden-Flashes-40.png', '', ''),
(136, 'Kentucky Wildcats', 'Kentucky-Wildcats-40.png', '', ''),
(137, 'La Salle Explorers', 'La-Salle-Explorers-40.png', '', ''),
(138, 'Lafayette Leopards', 'Lafayette-Leopards-40.png', '', ''),
(139, 'Lamar Cardinals', 'Lamar-Cardinals-40.png', '', ''),
(140, 'Lehigh Mountain Hawks', 'Lehigh-Mountain-Hawks-40.png', '', ''),
(141, 'Liberty Flames', 'Liberty-Flames-40.png', '', ''),
(142, 'Lipscomb Bisons', 'Lipscomb-Bisons-40.png', '', ''),
(143, 'Little Rock (AR) Trojans', 'Little-Rock-AR-Trojans-40.png', '', ''),
(144, 'Long Beach State 49ers', 'Long-Beach-State-49ers-40.png', '', ''),
(145, 'LIU Brooklyn Blackbirds', 'LIU-Brooklyn-Blackbirds-40.png', '', ''),
(146, 'Longwood Lancers', 'Longwood-Lancers-40.png', '', ''),
(147, 'UL-Lafayette Ragin\' Cajuns', 'UL-Lafayette-Ragin-Cajuns-40.png', '', ''),
(148, 'UL-Monroe Warhawks', 'UL-Monroe-Warhawks-40.png', '', ''),
(149, 'Louisiana Tech Bulldogs', 'Louisiana-Tech-Bulldogs-40.png', '', ''),
(150, 'Louisville Cardinals', 'Louisville-Cardinals-40.png', '', ''),
(151, 'Loyola Chicago Ramblers', 'Loyola-Chicago-Ramblers-40.png', '', ''),
(152, 'Loyola (MD) Greyhounds', 'Loyola-MD-Greyhounds-40.png', '', ''),
(153, 'Loyola Marymount Lions', 'Loyola-Marymount-Lions-40.png', '', ''),
(154, 'Louisiana State Tigers', 'Louisiana-State-Tigers-40.png', '', ''),
(155, 'Maine Black Bears', 'Maine-Black-Bears-40.png', '', ''),
(156, 'Manhattan Jaspers', 'Manhattan-Jaspers-40.png', '', ''),
(157, 'Marist Red Foxes', 'Marist-Red-Foxes-40.png', '', ''),
(158, 'Marquette Golden Eagles', 'Marquette-Golden-Eagles-40.png', '', ''),
(159, 'Maryland Terrapins', 'Maryland-Terrapins-40.png', '', ''),
(160, 'Maryland-Baltimore County Retrievers', 'Maryland-Baltimore-County-Retrievers-40.png', '', ''),
(161, 'Maryland-Eastern Shore Hawks', 'Maryland-Eastern-Shore-Hawks-40.png', '', ''),
(162, 'Massachusetts Minutemen', 'Massachusetts-Minutemen-40.png', '', ''),
(163, 'Massachusetts-Lowell River Hawks', 'Massachusetts-Lowell-River-Hawks-40.png', '', ''),
(164, 'McNeese State Cowboys', 'McNeese-State-Cowboys-40.png', '', ''),
(165, 'Memphis Tigers', 'Memphis-Tigers-40.png', '', ''),
(166, 'Mercer Bears', 'Mercer-Bears-40.png', '', ''),
(167, 'Miami (FL) Hurricanes', 'Miami-FL-Hurricanes-40.png', '', ''),
(168, 'Miami (OH) RedHawks', 'Miami-OH-RedHawks-40.png', '', ''),
(169, 'Michigan Wolverines', 'Michigan-Wolverines-40.png', '', ''),
(170, 'Michigan State Spartans', 'Michigan-State-Spartans-40.png', '', ''),
(171, 'Middle Tennessee State Blue Raiders', 'Middle-Tennessee-State-Blue-Raiders-40.png', '', ''),
(172, 'Milwaukee (WI) Panthers', 'Milwaukee-WI-Panthers-40.png', '', ''),
(173, 'Minnesota Golden Gophers', 'Minnesota-Golden-Gophers-40.png', '', ''),
(174, 'Mississippi Rebels', 'Mississippi-Rebels-40.png', '', ''),
(175, 'Mississippi State Bulldogs', 'Mississippi-State-Bulldogs-40.png', '', ''),
(176, 'Mississippi Valley State Delta Devils', 'Mississippi-Valley-State-Delta-Devils-40.png', '', ''),
(177, 'Missouri Tigers', 'Missouri-Tigers-40.png', '', ''),
(178, 'Missouri-Kansas City Kangaroos', 'Missouri-Kansas-City-Kangaroos-40.png', '', ''),
(179, 'Missouri State Bears', 'Missouri-State-Bears-40.png', '', ''),
(180, 'Monmouth Hawks', 'Monmouth-Hawks-40.png', '', ''),
(181, 'Montana Grizzlies', 'Montana-Grizzlies-40.png', '', ''),
(182, 'Montana State Bobcats', 'Montana-State-Bobcats-40.png', '', ''),
(183, 'Morehead State Eagles', 'Morehead-State-Eagles-40.png', '', ''),
(184, 'Morgan State Bears', 'Morgan-State-Bears-40.png', '', ''),
(185, 'Mount St. Mary\'s Mountaineers', 'Mount-St-Marys-Mountaineers-40.png', '', ''),
(186, 'Murray State Racers', 'Murray-State-Racers-40.png', '', ''),
(187, 'Navy Midshipmen', 'Navy-Midshipmen-40.png', '', ''),
(188, 'North Carolina State Wolfpack', 'North-Carolina-State-Wolfpack-40.png', '', ''),
(189, 'Nebraska Cornhuskers', 'Nebraska-Cornhuskers-40.png', '', ''),
(190, 'Nevada Wolf Pack', 'Nevada-Wolf-Pack-40.png', '', ''),
(191, 'New Hampshire Wildcats', 'New-Hampshire-Wildcats-40.png', '', ''),
(192, 'New Mexico Lobos', 'New-Mexico-Lobos-40.png', '', ''),
(193, 'New Mexico State Aggies', 'New-Mexico-State-Aggies-40.png', '', ''),
(194, 'New Orleans Privateers', 'New-Orleans-Privateers-40.png', '', ''),
(195, 'Niagara Purple Eagles', 'Niagara-Purple-Eagles-40.png', '', ''),
(196, 'Nicholls State Colonels', 'Nicholls-State-Colonels-40.png', '', ''),
(197, 'NJIT Highlanders', 'NJIT-Highlanders-40.png', '', ''),
(198, 'Norfolk State Spartans', 'Norfolk-State-Spartans-40.png', '', ''),
(199, 'North Carolina Tar Heels', 'North-Carolina-Tar-Heels-40.png', '', ''),
(200, 'North Carolina A&T Aggies', 'North-Carolina-A&T-Aggies-40.png', '', ''),
(201, 'North Carolina Central Eagles', 'North-Carolina-Central-Eagles-40.png', '', ''),
(202, 'North Dakota Fighting Hawks', 'North-Dakota-Fighting-Hawks-40.png', '', ''),
(203, 'North Dakota State Bison', 'North-Dakota-State-Bison-40.png', '', ''),
(204, 'North Florida Ospreys', 'North-Florida-Ospreys-40.png', '', ''),
(205, 'North Texas Mean Green', 'North-Texas-Mean-Green-40.png', '', ''),
(206, 'Northeastern Huskies', 'Northeastern-Huskies-40.png', '', ''),
(207, 'Northern Arizona Lumberjacks', 'North-Arizona-Lumberjacks-40.png', '', ''),
(208, 'Northern Colorado Bears', 'Northern-Colorado-Bears-40.png', '', ''),
(209, 'Northern Illinois Huskies', 'Northern-Illinois-Huskies-40.png', '', ''),
(210, 'Northern Iowa Panthers', 'Northern-Iowa-Panthers-40.png', '', ''),
(211, 'Northern Kentucky Norse', 'Northern-Kentucky-Norse-40.png', '', ''),
(212, 'Northwestern State Demons', 'Northwestern-State-Demons-40.png', '', ''),
(213, 'Northwestern Wildcats', 'Northwestern-Wildcats-40.png', '', ''),
(214, 'Notre Dame Fighting Irish', 'Notre-Dame-Fighting-Irish-40.png', '', ''),
(215, 'Oakland Golden Grizzlies', 'Oakland-Golden-Grizzlies-40.png', '', ''),
(216, 'Ohio State Buckeyes', 'Ohio-State-Buckeyes-40.png', '', ''),
(217, 'Ohio Bobcats', 'Ohio-Bobcats-40.png', '', ''),
(218, 'Oklahoma Sooners', 'Oklahoma-Sooners-40.png', '', ''),
(219, 'Oklahoma State Cowboys', 'Oklahoma-State-Cowboys-40.png', '', ''),
(220, 'Old Dominion Monarchs', 'Old-Dominion-Monarchs-40.png', '', ''),
(221, 'Omaha (NE) Mavericks', 'Omaha-NE-Mavericks-40.png', '', ''),
(222, 'Oral Roberts Golden Eagles', 'Oral-Roberts-Golden-Eagles-40.png', '', ''),
(223, 'Oregon Ducks', 'Oregon-Ducks-40.png', '', ''),
(224, 'Oregon State Beavers', 'Oregon-State-Beavers-40.png', '', ''),
(225, 'Pacific Tigers', 'Pacific-Tigers-40.png', '', ''),
(226, 'Penn Quakers', 'Penn-Quakers-40.png', '', ''),
(227, 'Penn State Nittany Lions', 'Penn-State-Nittany-Lions-40.png', '', ''),
(228, 'Pepperdine Waves', 'Pepperdine-Waves-40.png', '', ''),
(229, 'Pittsburgh Panthers', 'Pittsburgh-Panthers-40.png', '', ''),
(230, 'Portland Pilots', 'Portland-Pilots-40.png', '', ''),
(231, 'Portland State Vikings', 'Portland-State-Vikings-40.png', '', ''),
(232, 'Prarie View A&M Panthers', 'Prarie-View-A&M_Panthers-40.png', '', ''),
(233, 'Presbyterian Blue Hose', 'Presbyterian-Blue-Hose-40.png', '', ''),
(234, 'Princeton Tigers', 'Princeton-Tigers-40.png', '', ''),
(235, 'Providence Friars', 'Providence-Friars-40.png', '', ''),
(236, 'Purdue Boilermakers', 'Purdue-Boilermakers-40.png', '', ''),
(237, 'Quinnipiac Bobcats', 'Quinnipiac-Bobcats-40.png', '', ''),
(238, 'Radford Highlanders', 'Radford-Highlanders-40.png', '', ''),
(239, 'Rhode Island Rams', 'Rhode-Island-Rams-40.png', '', ''),
(240, 'Rice Owls', 'Rice-Owls-40.png', '', ''),
(241, 'Richmond Spiders', 'Richmond-Spiders-40.png', '', ''),
(242, 'Rider Broncs', 'Rider-Broncs-40.png', '', ''),
(243, 'Robert Morris Colonials', 'Robert-Morris-Colonials-40.png', '', ''),
(244, 'Rutgers Scarlet Knights', 'Rutgers-Scarlet-Knights-40.png', '', ''),
(245, 'Sacramento State Hornets', 'Sacramento-State-Hornets-40.png', '', ''),
(246, 'Sacred Heart Pioneers', 'Sacred-Heart-Pioneers-40.png', '', ''),
(247, 'St. Bonaventure Bonnies', 'St-Bonaventure-Bonnies-40.png', '', ''),
(248, 'St. Francis (NY) Terriers', 'St-Francis-NY-Terriers-40.png', '', ''),
(249, 'St. Francis (PA) Red Flash', 'St-Francis-PA-Red-Flash-40.png', '', ''),
(250, 'St. John\'s Red Storm', 'St-Johns-Red-Storm-40.png', '', ''),
(251, 'Saint Joseph\'s Hawks', 'Alabama-Crimson-Tide-40.png', '', ''),
(252, 'Saint Louis Billikens', 'Alabama-Crimson-Tide-40.png', '', ''),
(253, 'Saint Mary\'s (CA) Gaels', 'Alabama-Crimson-Tide-40.png', '', ''),
(254, 'Saint Peter\'s Peacocks', 'Alabama-Crimson-Tide-40.png', '', ''),
(255, 'Sam Houston State Bearkats', 'Alabama-Crimson-Tide-40.png', '', ''),
(256, 'Samford Bulldogs', 'Alabama-Crimson-Tide-40.png', '', ''),
(257, 'San Diego Toreros', 'Alabama-Crimson-Tide-40.png', '', ''),
(258, 'San Diego State Aztecs', 'Alabama-Crimson-Tide-40.png', '', ''),
(259, 'San Francisco Dons', 'Alabama-Crimson-Tide-40.png', '', ''),
(260, 'San Jose State Spartans', 'Alabama-Crimson-Tide-40.png', '', ''),
(261, 'Santa Clara Broncos', 'Alabama-Crimson-Tide-40.png', '', ''),
(262, 'Savannah State Tigers', 'Alabama-Crimson-Tide-40.png', '', ''),
(263, 'Seattle Redhawks', 'Alabama-Crimson-Tide-40.png', '', ''),
(264, 'Seton Hall Pirates', 'Alabama-Crimson-Tide-40.png', '', ''),
(265, 'Siena Saints', 'Alabama-Crimson-Tide-40.png', '', ''),
(266, 'SIU Edwardsville Cougars', 'Alabama-Crimson-Tide-40.png', '', ''),
(267, 'Southern Methodist Mustangs', 'Alabama-Crimson-Tide-40.png', '', ''),
(268, 'South Alabama Jaguars', 'Alabama-Crimson-Tide-40.png', '', ''),
(269, 'South Carolina Gamecocks', 'Alabama-Crimson-Tide-40.png', '', ''),
(270, 'South Carolina State Bulldogs', 'Alabama-Crimson-Tide-40.png', '', ''),
(271, 'South Carolina Upstate Spartans', 'Alabama-Crimson-Tide-40.png', '', ''),
(272, 'South Dakota Coyotes', 'Alabama-Crimson-Tide-40.png', '', ''),
(273, 'South Dakota State Jackrabbits', 'Alabama-Crimson-Tide-40.png', '', ''),
(274, 'South Florida Bulls', 'Alabama-Crimson-Tide-40.png', '', ''),
(275, 'Southeast Missouri State Redhawks', 'Alabama-Crimson-Tide-40.png', '', ''),
(276, 'Southeastern Louisiana Lions', 'Alabama-Crimson-Tide-40.png', '', ''),
(277, 'Southern Illinois Salukis', 'Alabama-Crimson-Tide-40.png', '', ''),
(278, 'Southern Mississippi Golden Eagles', 'Alabama-Crimson-Tide-40.png', '', ''),
(279, 'Southern Jaguars', 'Alabama-Crimson-Tide-40.png', '', ''),
(280, 'Southern Utah Thunderbirds', 'Alabama-Crimson-Tide-40.png', '', ''),
(281, 'Stanford Cardinal', 'Alabama-Crimson-Tide-40.png', '', ''),
(282, 'Stephen F. Austin Lumberjacks', 'Alabama-Crimson-Tide-40.png', '', ''),
(283, 'Stetson Hatters', 'Alabama-Crimson-Tide-40.png', '', ''),
(284, 'Stony Brook Seawolves', 'Alabama-Crimson-Tide-40.png', '', ''),
(285, 'Syracuse Orange', 'Alabama-Crimson-Tide-40.png', '', ''),
(286, 'Texas Christian Horned Frogs', 'Alabama-Crimson-Tide-40.png', '', ''),
(287, 'Temple Owls', 'Alabama-Crimson-Tide-40.png', '', ''),
(288, 'Tennessee Volunteers', 'Alabama-Crimson-Tide-40.png', '', ''),
(289, 'Tennessee-Martin Skyhawks', 'Alabama-Crimson-Tide-40.png', '', ''),
(290, 'Tennessee State Tigers', 'Alabama-Crimson-Tide-40.png', '', ''),
(291, 'Tennessee Tech Golden Eagles', 'Alabama-Crimson-Tide-40.png', '', ''),
(292, 'Texas Longhorns', 'Alabama-Crimson-Tide-40.png', '', ''),
(293, 'Texas A&M-Corpus Christi Islanders', 'Alabama-Crimson-Tide-40.png', '', ''),
(294, 'Texas A&M Aggies', 'Alabama-Crimson-Tide-40.png', '', ''),
(295, 'Texas Southern Tigers', 'Alabama-Crimson-Tide-40.png', '', ''),
(296, 'Texas State Bobcats', 'Alabama-Crimson-Tide-40.png', '', ''),
(297, 'Texas Tech Red Raiders', 'Alabama-Crimson-Tide-40.png', '', ''),
(298, 'Toledo Rockets', 'Alabama-Crimson-Tide-40.png', '', ''),
(299, 'Towson Tigers', 'Alabama-Crimson-Tide-40.png', '', ''),
(300, 'Troy Trojans', 'Alabama-Crimson-Tide-40.png', '', ''),
(301, 'Tulane Green Wave', 'Alabama-Crimson-Tide-40.png', '', ''),
(302, 'Tulsa Golden Hurricane', 'Alabama-Crimson-Tide-40.png', '', ''),
(303, 'UAB Blazers', 'Alabama-Crimson-Tide-40.png', '', ''),
(304, 'UC Davis Aggies', 'Alabama-Crimson-Tide-40.png', '', ''),
(305, 'UC Irvine Anteaters', 'Alabama-Crimson-Tide-40.png', '', ''),
(306, 'UC Riverside Highlanders', 'Alabama-Crimson-Tide-40.png', '', ''),
(307, 'UC Santa Barbara Gauchos', 'Alabama-Crimson-Tide-40.png', '', ''),
(308, 'UCF Knights', 'Alabama-Crimson-Tide-40.png', '', ''),
(309, 'UCLA Bruins', 'Alabama-Crimson-Tide-40.png', '', ''),
(310, 'UIC FLames', 'Alabama-Crimson-Tide-40.png', '', ''),
(311, 'UNC Asheville Bulldogs', 'Alabama-Crimson-Tide-40.png', '', ''),
(312, 'UNC Greensboro Spartans', 'Alabama-Crimson-Tide-40.png', '', ''),
(313, 'UNC Wilmington Seahawks', 'Alabama-Crimson-Tide-40.png', '', ''),
(314, 'UNLV Runnin\' Rebels', 'Alabama-Crimson-Tide-40.png', '', ''),
(315, 'USC Trojans', 'Alabama-Crimson-Tide-40.png', '', ''),
(316, 'UT Arlington Mavericks', 'Alabama-Crimson-Tide-40.png', '', ''),
(317, 'UT Rio Grande Valley Vaqueros', 'Alabama-Crimson-Tide-40.png', '', ''),
(318, 'UTSA Roadrunners', 'Alabama-Crimson-Tide-40.png', '', ''),
(319, 'Utah Utes', 'Alabama-Crimson-Tide-40.png', '', ''),
(320, 'Utah State Aggies', 'Alabama-Crimson-Tide-40.png', '', ''),
(321, 'Utah Valley Wolverines', 'Alabama-Crimson-Tide-40.png', '', ''),
(322, 'Valparaiso Crusaders', 'Alabama-Crimson-Tide-40.png', '', ''),
(323, 'Vanderbilt Commodores', 'Alabama-Crimson-Tide-40.png', '', ''),
(324, 'VCU Rams', 'Alabama-Crimson-Tide-40.png', '', ''),
(325, 'Vermont Catamounts', 'Alabama-Crimson-Tide-40.png', '', ''),
(326, 'Villanova Wildcats', 'Alabama-Crimson-Tide-40.png', '', ''),
(327, 'Virginia Cavaliers', 'Alabama-Crimson-Tide-40.png', '', ''),
(328, 'Virginia Tech Hokies', 'Alabama-Crimson-Tide-40.png', '', ''),
(329, 'VMI Keydets', 'Alabama-Crimson-Tide-40.png', '', ''),
(330, 'Wagner Seahawks', 'Alabama-Crimson-Tide-40.png', '', ''),
(331, 'Wake Forest Demon Deacons', 'Alabama-Crimson-Tide-40.png', '', ''),
(332, 'Washington Huskies', 'Alabama-Crimson-Tide-40.png', '', ''),
(333, 'Washington State Cougars', 'Alabama-Crimson-Tide-40.png', '', ''),
(334, 'Weber State Wildcats', 'Alabama-Crimson-Tide-40.png', '', ''),
(335, 'West Virginia Mountaineers', 'Alabama-Crimson-Tide-40.png', '', ''),
(336, 'Western Carolina Catamounts', 'Alabama-Crimson-Tide-40.png', '', ''),
(337, 'Western Illinois Leathernecks', 'Alabama-Crimson-Tide-40.png', '', ''),
(338, 'Western Kentucky Hilltoppers', 'Alabama-Crimson-Tide-40.png', '', ''),
(339, 'Western Michigan Broncos', 'Alabama-Crimson-Tide-40.png', '', ''),
(340, 'Wichita State Shockers', 'Alabama-Crimson-Tide-40.png', '', ''),
(341, 'William & Mary Tribe', 'Alabama-Crimson-Tide-40.png', '', ''),
(342, 'Winthrop Eagles', 'Alabama-Crimson-Tide-40.png', '', ''),
(343, 'Wisconsin Badgers', 'Alabama-Crimson-Tide-40.png', '', ''),
(344, 'Wofford Terriers', 'Alabama-Crimson-Tide-40.png', '', ''),
(345, 'Wright State Raiders', 'Alabama-Crimson-Tide-40.png', '', ''),
(346, 'Wyoming Cowboys', 'Alabama-Crimson-Tide-40.png', '', ''),
(347, 'Xavier Musketeers', 'Alabama-Crimson-Tide-40.png', '', ''),
(348, 'Yale Bulldogs', 'Alabama-Crimson-Tide-40.png', '', ''),
(349, 'Youngstown State Penguins', 'Alabama-Crimson-Tide-40.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `commitments`
--

CREATE TABLE `commitments` (
  `id` int(20) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `level` text,
  `topcollege` int(11) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `commitmessage` text,
  `createcommit` varchar(90) DEFAULT NULL,
  `updatecommit` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commitments`
--

INSERT INTO `commitments` (`id`, `userid`, `level`, `topcollege`, `percentage`, `commitmessage`, `createcommit`, `updatecommit`) VALUES
(NULL, 46, 'Hard Commitment', 73, 100, 'Thank you Coach K for giving me the chance of a lifetime!', '2017-06-25 00:48:33', '2017-06-25 00:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `ID` int(20) NOT NULL,
  `videotitle` text CHARACTER SET utf8,
  `highlight` text CHARACTER SET utf8,
  `videodescription` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`ID`, `videotitle`, `highlight`, `videodescription`) VALUES
(16, '2017 Senior Highlights', 'FRQNW_MAPlQ', '2017 senior highlights entered here as my description...');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `createcomment` varchar(30) DEFAULT '00-00-00 00:00:00',
  `updatecomment` varchar(30) DEFAULT '00-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `userid`, `comment`, `createcomment`, `updatecomment`) VALUES
(8, 46, 'Thank you to those that helped me realize my dream and help me strive to become better everyday!', '2017-06-25 00:49:39', '2017-06-25 00:49:39'),
(10, 49, 'If UTEP is able to get a commitment from Michael Philibin, our championship drought is over! Mark it down!', '2017-06-25 02:16:49', '2017-06-25 02:16:49'),
(11, 47, '400 yds through the air and 150 yds on the ground - Still not enough to get the eye of California football! #smh', '2017-06-25 03:50:27', '2017-06-25 03:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `usercollege`
--

CREATE TABLE `usercollege` (
  `id` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `collegeid` int(11) UNSIGNED NOT NULL,
  `sport` varchar(128) NOT NULL,
  `scholar` varchar(128) NOT NULL,
  `interest` varchar(128) NOT NULL,
  `createdate` varchar(128) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercollege`
--

INSERT INTO `usercollege` (`id`, `userid`, `collegeid`, `sport`, `scholar`, `interest`, `createdate`) VALUES
(49, 46, 59, 'Basketball', 'Yes', 'Extreme', '2017-06-23 00:54:33'),
(50, 46, 73, 'Basketball', 'Yes', 'Extreme', '2017-06-23 00:54:33'),
(51, 46, 20, 'Basketball', 'Yes', 'High', '2017-06-23 00:55:10'),
(52, 46, 17, 'Basketball', 'Yes', 'High', '2017-06-23 00:55:10'),
(53, 46, 33, 'Basketball', 'Yes', 'High', '2017-06-23 00:55:10'),
(54, 46, 86, 'Basketball', 'No', 'Medium', '2017-06-23 00:57:48'),
(55, 46, 90, 'Basketball', 'No', 'Medium', '2017-06-23 00:57:48'),
(56, 46, 11, 'Basketball', 'No', 'Low', '2017-06-23 00:57:48'),
(62, 46, 169, 'Basketball', 'No', 'Low', '2017-06-24 13:52:08'),
(65, 46, 236, 'Basketball', 'Yes', 'Low', '2017-06-25 01:04:18'),
(66, 47, 87, 'Football', 'Yes', 'Extreme', '2017-06-25 03:49:37'),
(67, 47, 152, 'Football', 'Yes', 'High', '2017-06-25 03:49:37'),
(68, 47, 205, 'Football', 'Yes', 'High', '2017-06-25 03:49:37'),
(69, 47, 181, 'Football', 'Yes', 'Medium', '2017-06-25 03:49:37'),
(70, 47, 39, 'Football', 'No', 'Extreme', '2017-06-25 03:49:37'),
(71, 47, 217, 'Football', 'No', 'Low', '2017-06-25 03:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `profileImage` text,
  `fname` varchar(32) NOT NULL DEFAULT '',
  `lname` varchar(64) NOT NULL DEFAULT '',
  `bdate` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `token` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `ipaddress` varchar(32) NOT NULL DEFAULT '',
  `level` text NOT NULL,
  `parental` text NOT NULL,
  `regdate` date NOT NULL,
  `sex` text,
  `primarysport` text,
  `height` text,
  `weight` text,
  `city` text,
  `state` text,
  `highschool` text,
  `coach` text,
  `primposition` text,
  `secposition` text,
  `year` text,
  `gradyear` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profileImage`, `fname`, `lname`, `bdate`, `username`, `password`, `token`, `email`, `ipaddress`, `level`, `parental`, `regdate`, `sex`, `primarysport`, `height`, `weight`, `city`, `state`, `highschool`, `coach`, `primposition`, `secposition`, `year`, `gradyear`) VALUES
(46, 'http://i66.tinypic.com/2r5837n.jpg', 'Chiristian', 'Klose', '1990-11-11', 'Klose1201', '$2y$11$Fc.iOOXrKulwam2oHmCBMu1YU9QAE8tJ/kuOkJChzqqJkizduo5Ba', '', 'christian.klose1201@outlook.com', '24.192.76.209', 'Athlete Profile', 'Yes', '2017-06-13', 'Male', 'Football', '68', '210', 'Powell', 'Ohio', 'King HS', 'Tim Harper', 'QB', 'MLB', 'Sophomore', '2019'),
(47, 'http://i63.tinypic.com/s4s2ue.jpg', 'Michael', 'Philibin', '2017-11-11', 'Phily915', '$2y$11$.nMpWaUBOgJSDo1f77rPcezimFQQeAS0YFT8DWakCZOBDBBWOwJly', '', 'philibin.5@osu.edu', '24.192.76.209', 'Athlete Profile', 'Yes', '2017-06-25', 'Male', 'Football', '72', '185', 'Los Angeles', 'California', 'Los Angeles Prep', 'Terry Murphy', 'QB', 'CB', 'Junior', '2019'),
(49, 'http://i68.tinypic.com/f2077m.jpg', 'Kevin', 'Philibin', '2010-01-02', 'Kphil', '$2y$11$QVBPg2C3bxP1mamsW8rxs.X4VJCisI5BaF5EOgP0ZDVy.6y8mQV2y', '', 'kphilibin@gmail.com', '24.192.76.209', 'Fan Profile', 'Yes', '2017-06-25', 'Male', 'Football', NULL, NULL, 'El Paso', 'Texas', 'Northwestern El Paso', NULL, NULL, NULL, NULL, '1999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beta`
--
ALTER TABLE `beta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercollege`
--
ALTER TABLE `usercollege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ix_users` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beta`
--
ALTER TABLE `beta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;
--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usercollege`
--
ALTER TABLE `usercollege`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
