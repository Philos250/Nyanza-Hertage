-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 07:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nyanza`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`artid` int(5) NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`artid`, `title`, `image`, `content`, `time`) VALUES
(1, 'About Nyanza Hertage ', 'head2.jpg', '<p><strong><var>Located in Nyanza District about 85 km from Kigali City, this museum displays contemporary Rwandan artwork which testifies to the originality of Rwandan creativity while not overlooking either tradition or national history. The museum was originally built as a Palace for King Mutara III Rudahigwa but he passed away before occupying it.</var></strong></p>\r\n\r\n<p>We have now also joined the world, annually celebrating the International Council Organisation of Museums (<strong>ICOM</strong>) day in May which takes place at the National Art Gallery Rwesero Southern Province. The Art Gallery has brought in kids&#39; studio with the theme &ldquo;let it grow&rdquo;. The Institute is collecting drawings around the world and so far we have Rwandan kids&#39; drawings and are expecting more from, UK, Japan, Uganda and the Netherlands. These have filled some parts of the studio and still need to involve more kids for Rwandan children&rsquo;s&rsquo; fun. The studio focuses on the ages between four and fifteen. The idea is to equip the kids with social, cultural and art skills, which all come through curiosity, creativity, inquisition and general knowledge from young ones.</p>\r\n', '2017-12-06 21:00:29'),
(2, 'New image of the Museum of Environment.', 'IMG_2337.JPG', '<p>The Museum of Environment exhibits collections related to environment since its official opening in July 2015. The collections were mainly composed of non-renewable and renewable sources of energy illustrated through texts, photos and films.</p>\r\n\r\n<p>Based on its mandate to regularly review permanent exhibitions of different museums and upgrade them, the Institute of National Museums of Rwanda brought in new collections related to zoological, botanical items, minerals items, volcanic information, natural evolution and natural of universe, &hellip;</p>\r\n\r\n<p>&ldquo;These new exhibits changed the image of this museum as they give it a wide and rich environmental exhibition.&rdquo; Said Hon. Minister of Sports and Culture during the official opening on October 13<sup>th</sup>, 2017. She added that the transfer of those collections from the Natural History Museum to the Museum of Environment was part of a wider plan to revamp country&rsquo;s museums in order to make them attractive and to avoid duplication between museum exhibitions, including Natural History museum and Museum of Environment.&nbsp;</p>\r\n\r\n<p><img alt="" src="https://i.imgur.com/undefined.jpg" /><img alt="" src="https://i.imgur.com/undefined.jpg" /><img alt="" src="https://i.imgur.com/JM6T4hs.jpg" style="height:auto; width:100%" /></p>\r\n', '2017-12-06 20:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`idcom` int(5) NOT NULL,
  `names` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telephone` int(12) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idcom`, `names`, `email`, `telephone`, `comment`, `time`) VALUES
(2, 'HABIMANA Jean de Dieu', 'jellywestphiloskigali@gmail.com', 786790914, 'Hello Guys ndabona muje mwari mukenewe kbs kuko kuri ubu byari bigoranya rwose kuba wabona ahantu wakura ibikoresho bya Kinyarwanda nkibi mufite aha Murakoze cyane rwose', '2017-02-12 16:02:27'),
(4, 'IRADUKUNDA Michelle', 'iradukundamichelle@gmail.com', 787674375, 'Hello!\r\nWe are happy for being here for us', '2017-12-06 21:31:32'),
(5, 'IRADUKUNDA Michelle', 'iradukundamichelle@gmail.com', 787674375, 'Hello!\r\nWe are happy for being here for us', '2017-12-06 21:31:54'),
(6, 'NIYITUGENERA Josiane', 'abou@yahoo.com', 787674375, 'Woooow!\r\nMbega byiza we i am happy for this new system of nyanza hertage', '2017-12-06 21:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `ibikoresho`
--

CREATE TABLE IF NOT EXISTS `ibikoresho` (
`ID` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` varchar(11) NOT NULL,
  `year` int(10) NOT NULL,
  `chamber` varchar(20) NOT NULL,
  `decs` mediumtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibikoresho`
--

INSERT INTO `ibikoresho` (`ID`, `name`, `image`, `size`, `year`, `chamber`, `decs`, `time`) VALUES
(1, 'Ingoma', 'ingoma.jpg', '1.76 Inches', 1991, 'NYANZA C/B 120', 'The ingoma is a drum covered with a membrane of animal skin. The top of the drum is always broader than the bottom. The ingoma is usually cylindrical in form, tapering only in the lower section of the instrument, although the drum shell can also taper gradually over its entire length. Making an ingoma is a long and delicate process and is therefore entrusted to specialised drum makers, assisted by a woodworker who prepares the hide.\r\n\r\nThe drum shell (resonator) is a hollowed-out tree trunk, usually from the umuvugangoma, which literally means ‘the wood that makes the drum resonate’, although other types of trees are also suitable. The drum maker chooses a tree from which he can make four or five ingoma. Once the tree has been felled and sawn up, the trunk is left in situ to allow it to dry out for a while before being roughly hollowed out. Further work on the trunk is carried out at the drum maker’s home. The outside is polished and the inside is hollowed out further until the walls are about 20-23 mm thick. The size of the drum shell may vary from 40 to 130 cm high with a diameter of 50 to 70 cm at the top and 10 to 20 cm at the bottom. Nowadays a metal barrel (200 l) can also be used to make a drum, which is not only cheaper but also easier to make. The sound it produces is not comparable to that of a wooden drum, however, so that only a few drums are made this way. Both openings of the drum shell are then covered with hide, the hairy side of the pelt on the outside. To prepare the hides, they are first soaked, then scraped to remove meat, fat and membranes and finally stretched and left to dry in the sun. The way in which the hides are stretched over the drum shell is peculiar to the ingoma and differs from the method used for other membranophones. Narrow strips of hide affixed vertically bind the top membrane to the bottom membrane and keep them both taut over the drum shell. The process of tightening is complex, involving several people to ensure that everything proceeds correctly. Large instruments need about 50 running metres of these strips of hide.\r\n\r\nThe ingoma ensemble that plays nowadays comprises eight to ten drummers, each with his own drum. There are three types of drum, each having a different pitch: the ishakwe, the inyahura and the igihumurizo:\r\n\r\nThe ishakwe is the smallest (47 cm high) and has a high tone. There is always just one in the ensemble, with the task of establishing the rhythm and then playing an ostinato rhythm as the basis for the other drums.\r\nThe inyahura (up to 78 cm high) has a medium tone and the ensemble usually has three or four of these. The leader of the ensemble plays this type of drum. He is also the one who plays the solo rhythm and ensures continuity between the various successive rhythms.\r\nThe drums with the deepest tone are called the igihumurizo and are 85 cm high, although they have a much larger diameter than the inyahura. They usually play an invariable ostinato rhythm together with the inyahura.\r\nThe ingoma is only played by men on festive occasions or to welcome an important guest. The drummers use two wooden sticks called imirishyo. To ensure that the instrument plays the right tone, the membrane is warmed up by placing it near a fire or in the sun.\r\n\r\nDrums of a similar shape used to play an important part in the king’s cult. The drums used for this purpose were known as ingabe and were even kept in a separate hut. They were not allowed to touch the ground and were rubbed with bull’s blood once a month. There are four ingabe: the karinga, the cyimumugizi, the mpatsibihugu and the kiragutse. There has been no trace found of these ingabe drums, symbol of royal power, since 1960 when the Tutsi kingdom disappeared.\r\n\r\nThe karinga is the most important and, according to oral tradition, dates back to the time of Ruganza II Ndori (1590-1617). It accompanied the King in his travels and even acquired several forenames in an attempt to personify it.\r\nThe cyimumugizi is the oldest of the four and tradition has it that it was brought into use by Gihanga. During a battle it was saved while the karinga of the time (Rwoga) was destroyed. The cyimumugizi symbolises the female sex and the queen, while the karinga represents the male sex and the king.\r\nThe mpatsibihugu and the kiragutse are much younger and were incorporated into the king’s cult by Kigeri IV Rwabugiri (1860-1896) to commemorate his father and his father’s victories respectively. One example of the latter is the legendary battle of Butembo.\r\nBesides the royal ingabe, there are other types of ingoma such as the indamutsu, which was played to greet the king, to announce audiences with the king and during court cases. Each king was presented with a personal indamutsa at his coronation, which in turn was accompanied by the nyampundu. This was made at the same time and was played during the same rituals. A third and final type, the impuruza, had a signalling function and warned of danger.\r\n\r\n\r\nFor more information consult the following publications edited by the RMCA:\r\n\r\nGANSEMANS, J. Les instruments de musique du Rwanda. Étude ethnomusicologique, Annales RMCA n° 127, 361 pp. + 102 photos\r\nCompact Disc :\r\nRujindiri, maître de l’inanga (fmd 186)\r\nRWANDA : Polyphonie des Twa (fmd 196)\r\nMusiques du Rwanda (fmd 206)', '2017-02-11 13:34:31'),
(2, 'Agaseke', 'agaseke.jpg', '1.2 Inches', 1908, 'NYANZA C/B 121', 'The ishakwe is the smallest (47 cm high) and has a high tone. There is always just one in the ensemble, with the task of establishing the rhythm and then playing an ostinato rhythm as the basis for the other drums.\r\nThe inyahura (up to 78 cm high) has a medium tone and the ensemble usually has three or four of these. The leader of the ensemble plays this type of drum. He is also the one who plays the solo rhythm and ensures continuity between the various successive rhythms.\r\nThe drums with the deepest tone are called the igihumurizo and are 85 cm high, although they have a much larger diameter than the inyahura. They usually play an invariable ostinato rhythm together with the inyahura.', '2017-02-11 16:40:55'),
(3, 'Akibo', 'ikibo.jpg', '0.5 Inches', 1800, 'NYANZA C/B 1', 'Akibo is just like circular traditional plate that was used by early rwandan people for keeping their rest food, fruit and flour. But today is used as decoration.', '2017-02-12 00:14:33'),
(4, 'Inanga', 'inangaC.jpg', '4 inches', 4000, 'NYANZA C/B 105', 'Inanga was used to make music, is a basic instrument which which is used to make and to found melody on any traditional song \r\n\r\nRgindiri was the first to play inanga and was an exert on it ', '2017-02-12 00:21:14'),
(5, 'Imbehe', 'imbehe.jpg', '1 Inches', 3000, 'NYANZA C/B 102', 'Imbehe was Ellipse sharp which used as a plate for preparing food on it', '2017-02-12 00:25:21'),
(6, 'Umuheto n''umumwambi', 'umuheto-umwambi.jpg', '6 inches', 1800, 'NYANZA C/B 1', 'Umuheto n''umumwambi was used as traditional weapon for rwandan people. This tool is used by Soulja for protecting country and people again enemies.', '2017-02-12 00:30:14'),
(11, 'Isuka', 'isuka.jpg', '20 inches', 200, 'C/B sh 580990', 'Isuku cyari igikoresho nkenerwa mumuco nyarwanda kuko  nicyo cyakoreshwaga bahinga imyaka ', '2017-12-06 20:52:16'),
(10, 'Ishoka', 'ishoka.jpg', '12 inches', 1887, 'C/B sh 5809', 'Ishoka ni igikoresho cyakoreshwaga mukwasa inkwi zo gucana umuriro', '2017-12-06 20:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'nyanza', 'nyanza2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`artid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`idcom`);

--
-- Indexes for table `ibikoresho`
--
ALTER TABLE `ibikoresho`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `artid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `idcom` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ibikoresho`
--
ALTER TABLE `ibikoresho`
MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
