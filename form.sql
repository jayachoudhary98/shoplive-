-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2022 at 10:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdetail`
--

CREATE TABLE `formdetail` (
  `id` int(59) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `lname` varchar(59) NOT NULL,
  `email` varchar(59) NOT NULL,
  `num` varchar(59) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `passwor` varchar(59) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdetail`
--

INSERT INTO `formdetail` (`id`, `uname`, `lname`, `email`, `num`, `gender`, `fname`, `passwor`, `cpassword`) VALUES
(39, 'happy', 'Birthday', 'happybirthdayjaya@gmail.com', '123', 'on', '', '11', '11'),
(40, 'zz', 'zz', 'zz@gmail.com', '11', 'on', '', '22', '22'),
(41, 'dd', 'dd', 'dd1@gmail.com', '33', 'on', '', '33', '33'),
(42, 'hh', 'hh', 'hh@gmail.com', '44', 'on', '', '44', '44'),
(47, 'admin', 'choudhary', 'jayadevloper13@gmail.com', '22', 'g', '', '11', '11'),
(49, '44', '44', 'jayadevloper13@gmail.com', '44', 'g', '', '44', '44'),
(53, 'klk', 'klk', 'jayadevloper13@gmail.com', '76867', 'g', '', '11', '11'),
(54, 'Java', 'Choose ', 'jk@12gmail.com', '12345678', 'g', '', '22', '22'),
(55, 'Java', 'Choose ', 'jk@12gmail.com', '12345678', 'g', '', '22', '22'),
(56, 'neha', 'jha', 'jk@12gmail.com', '123456', 'g', '', '44', '44'),
(57, 'neha', 'jha', 'jk@12gmail.com', '123456', 'g', '', '44', '44'),
(61, 'jaya', 'choudhary', 'jayadevloper13@gmail.com', '124567', 'g', '', '44', '44'),
(62, 'jaya', 'choudhary', 'jayadevloper13@gmail.com', '124567', 'g', '', '44', '44'),
(63, 'jaya', 'choudhary', 'jayadevloper13@gmail.com', '123456', 'g', '', '99', '99'),
(64, 'ee', 'ee', 'ee@gamil.com', '7876867', 'g', '', '$2y$10$RonCh8M7uee9rGGTcAS7DuAw2lWWpe3juPh9ZWTGT8MLl3kpttPT', '$2y$10$IigPZxDALae/Yt8ZqNRT/uIf.xZBOQf/A9WSLYsBqyx'),
(65, 'PP', 'PP', 'PP@GMAIL.COM', '3534534', 'g', '', '$2y$10$NtoNH7ACK4RwMTA6veja.Ovfz3kDMRGyQz0gLPfXUyhRPSa3HPcq', '$2y$10$.sFz8YfzDCJMyLESDUUs3.htvvv8ePDuAn1ZT1gEERD'),
(66, 'lsas', 'sdsd', 'jaya@123gmail.com', '123456', 'g', '', '$2y$10$N9XQkIC1cleDQJdgEDTt5eoLt9tsQ5mLaoONNj.JcFBiFDIpi1OH', '$2y$10$oenmfUeT9lxwARhGXJ.GeeMqYoNNVGRql/YJ6WZdLBl'),
(67, 'kameshwar', 'sah', 'kk12@gmail.com', '1234567', 'g', '', '$2y$10$NeASK2VRMbQ6vySw3rRl6uqQ50xyPYBMDBrwjtbQD8GQ9IzBVsAu', '$2y$10$ggCDByybsRMilriFHXRjauJG1SnimnTJNerydLT56S1'),
(68, 'jaya', 'choudhary', 'KK13@gmail.com', '1234567890', 'g', '', '$2y$10$ljkNjLJiluia8ZvqsM3OsOCvFPyVfq5S.nCrGf9vdq3WRsHOuvEN', '$2y$10$KKDInvuyhtvswTmJ8HSDPegp.gF3f5rOFqlp0VasLRe'),
(69, 'jaya', 'klk', 'kkk13@gamil.com', '1234567890', 'g', '', '$2y$10$ZJ.OTJBjWSWZORsnKJA9YO8.HMgWNvbiJvBFBItD7Qi440gTzD8F', '$2y$10$b9qif5dcZ2CWbEnxLFHpE.fwUiNF258R9r06aVhF1R1'),
(70, 'kaaa', 'wer', 'uk12@gmail.com', '12345678990', 'g', '', '$2y$10$B48ap5RhSb0jlgE7cPC6fODrFWRkCD/dG0kAal.W/4tvTgFqHbjR', '$2y$10$J7scLZjjPViT1aBQTSCgWO4B4Mpe.3xDYINKYZQtKKu'),
(71, 'asdgha', 'asdfghmjkgk', 'jaya5624162@gmail.com', '4352764833', 'g', '', '$2y$10$EYkhtTrmUBiP1VBLu7UALOY6iOAb8a6HDmc1SBMe7SmV/KhgQetd', '$2y$10$gA/0TgPe05W6opn7MYY1tOHu/dbLxLtuYvC7yucYTqo'),
(72, 'asdgha', 'asdfghmjkgk', 'jaya5624162435@gmail.com', '2134567890', 'g', '', '$2y$10$QOVxfVKp.t4TskZMGN3epefefPOEOeWi81NY4GK.y8z0wDqgs2sO', '$2y$10$CSpOsz3JfW42Pi35eAhmIOizHKTZYAmTK5XsEdEt5ax'),
(73, 'aa', 'aa', 'jaaa5624162435@gmail.com', '4352764833', 'g', '', '$2y$10$KjNLZ2lVwBHV1BepLEvcTOZfl7tf90/dp97j3P1uCRNHWQnb21MN', '$2y$10$7xnUpDWZvm7RnKZUTuEhl.0NCo51BLJie3L6lGa0c2.'),
(74, 'ff', 'ff', 'ff5624162@gmail.com', '2134567890', 'g', '', '$2y$10$obMC4Y3E75nUGcEVhf5zv.Js7VFs/05M7cEZ/kFp5SBad.LO4HXa', '$2y$10$9Bl/qEV3kPYe9XfkYBaYmOETN2u51dSxRIopQFVeO69'),
(75, 'ww', 'ww', 'ww5624162@gmail.com', '11', 'g', '', '$2y$10$/1Rawyso1YYBWMpQ0AaYruEcydZf.hFQEMYxpavL9ETpffLH/f3C', '$2y$10$7fGiKgZe6qnVJy4pyEGtf.fKGbRnrBnERwg/VoMkv0T'),
(76, 'bb', 'bb', 'bb5624162@gmail.com', '55', 'g', '', '$2y$10$/w/lmfYZbzukTCkcHYSSROSTaw8K2VkvKuGY0J7WYn5aBnp64gEj', '$2y$10$gKGZCEf5KGUJLkbH3Z.k4.Jx4MxEc6lOaEsqsBCfw8a'),
(77, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', 'pic.jpg', '[value-8]', '[value-9]'),
(78, 'qq', 'qq', 'qq5624162435@gmail.com', '11', 'g', '', '$2y$10$omJLwpSoPPqJbDh.uUSenu28jKQ6E4B/fJa1GJt8y5.3f//NF9HE', '$2y$10$gqj7EsBLFI3KN4vS3IcIvOQ/HOjd4qH1t/jajqsfTQb'),
(79, 'gg', 'gg', 'gg5624162@gmail.com', '11', 'g', '', '$2y$10$bH/P1P2GRDwjUjK1iYJlsu8RtpJymrEk2ObP/SitguYTj66KENxt', '$2y$10$Q/KSFkHD8uN1zssRi4XVkObe1pKuZR65hSEV9fcBGC/'),
(80, 'mm', 'mm', 'mm5624162@gmail.com', '4352764833', 'g', 'll', '$2y$10$OXb50rUjI0xD0AKYShDdQO5Pi/jGUMLuBVtJIOJ3qaaJ2xS6N2tf', '$2y$10$1.8ZfibJ/Uktsq/0QkitZ.B/fUMp3FYYJcQgHirGdDx'),
(81, 'ee', 'ee', 'ee5624162@gmail.com', '44', 'g', '', '$2y$10$W1jLJCCfDgo4DrQ58mAeqOMHJum9tNMWqHr3AjWPpuMn0bBvx8rd', '$2y$10$Ultj4DQ9vbwYmuNevlWGk.te0..XlWrsJPB7CJjZmRL'),
(82, 'pp', 'pp', 'pp5624162435@gmail.com', '12', 'g', 'Array', '$2y$10$gD8IJUj63frnfxVa6gDIjesLj7bZocR/HK.DqjNbNP/Tfq6OBc7c', '$2y$10$H/JqtEzzHPOVYm2VNpXak.a/mGZpHqGQyhuG.uuvKuJ'),
(83, '11', '11', '1a5624162@gmail.com', '22', 'g', 'Array', '$2y$10$HPFqF.QyqDEXHic2Jphiv.pKyJBHtInnisTV7AVLSgAjUsELU./S', '$2y$10$8rk9DIuUQYydACHNXuj1aeEgZC76UeQYw9dN6UuOBp8'),
(84, '55', '55', '555624162@gmail.com', '44', 'g', 'pic.jpg', '$2y$10$jmljMtkb56uFOn9gfK0V8uSPqkqUCIPKqdjVJtY/CR0V1C.E9BW/', '$2y$10$Lyo.cT/BYTW3j52Zx/61Y./w8Xv3632I4BKLaCp7NDc'),
(85, 'oo', 'oo', 'oo624162@gmail.com', '00', 'g', 'pic.jpg', '$2y$10$tLYN8cmKHrd0wtJy9Lhu/OXje4M2NBasuAqFUl7W3S/IkjwQ/54o', '$2y$10$8nP19EDBxcaYlflIOdhSk.DnX4WW9l3je.fdwAnmxvx'),
(86, 'rr', 'rr', 'rr5624162@gmail.com', '4352764833', 'g', 'images.png', '$2y$10$ZDwF6XREp6QXrCU6vssN4uOowTNIGfKNYxn/fXRBFvNy9pLtgdyY', '$2y$10$/LYilfKdMiLi3.2DpjFyBuUgJ05uB7iMW65.lDw33gU'),
(87, 'll', 'll', 'lla5624162@gmail.com', '11', 'g', 'pic.jpg', '$2y$10$NxrCpxHaZxNJqZmNMiWyhODaeCtKJqPH4fO6BMvTqxKrHFJhe3L7', '$2y$10$bKeLy7bBIxiGNy0E/PPVrenqzHUOpCazY5WbN4A7pGL'),
(88, 'tt', 'tt', 'tt5624162@gmail.com', '4352764833', 'g', 'images.png', '$2y$10$PQX/BaQwR0WfM.D/hPr7YOLN5UY4ye236Dh1jksG9LINeQB4TALD', '$2y$10$jRT61JJUl/6fhruaBa9T.OsfuibjF21DN3oFQ/X9sjw'),
(89, 'yy', 'yy', 'yy5624162@gmail.com', '4352764833', 'g', 'pic.jpg', '$2y$10$f8kzXtkJqCjTAf1oKV7fNuuZFRUzVB14Jya4OB9HvR1bB2oQSeKj', '$2y$10$MnDGFPYB95fyMgVgLVrZ.eFkun3YDqoHLf2T/0oUk6q'),
(90, 'nn', 'nn', 'nn5624162@gmail.com', '11', 'g', 'pic.jpg', '$2y$10$crFkwUY/1dMIuDFEBvPbVuF1gB00OTKriNW1L0LEbUCh22OW3a4A', '$2y$10$fBqN63YCI78SSdlLfcAqW.0No.MhgupUHOVsMk3Y62u'),
(91, 'fffff', 'ffffff', 'fff5624162@gmail.com', '11', 'g', 'images.png', '$2y$10$IHbGysGMqtQoY0z1E6dNzOgPOLOf2dVDRMx2/SbQFSzAy1h7n8rP', '$2y$10$VgfWQeWmQdyoTL4HxALBKO40QehEstO/SK.7NRWdwDc'),
(92, 'hhh', 'hhh', 'hh5624162@gmail.com', '11', 'g', 'pic.jpg', '$2y$10$T1LFfNnjC5EUWSemAEJWPOKfrh7RU6b.WP7X9kW9rh66VXDNiJRq', '$2y$10$GtgMIhyeuea1UvxbOa52MOfWue0FQcojRVd7YtY1lv0'),
(93, 'kkk', 'kkk', 'kk5624162435@gmail.com', '12345678', 'g', 'pic.jpg', '$2y$10$lwkBdd6ejrH6xMVq5U/jIu3G6BO02ooHHd6wAgwqN53xIeAgRCV3', '$2y$10$JjyIDdqFXq0UPFBJo/hPueyXClAFDy7ZcR27XXmsoOm'),
(94, 'gggg', 'gggg', 'gg624162@gmail.com', '12345678', 'g', 'pic.jpg', '$2y$10$VSvkZXmnP7EBTxIhVYxkq.8RPw.rL9Vd2sS15BfKMMLApa3MzdFf', '$2y$10$IVtUxLKMVWfNPhI3V3YQ8e.e9ukHutXzmBf5gJL29pA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdetail`
--
ALTER TABLE `formdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdetail`
--
ALTER TABLE `formdetail`
  MODIFY `id` int(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
