-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 05:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `bid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`bid`, `qid`, `uid`) VALUES
(12, 23, 1),
(14, 8, 1),
(35, 136, 1),
(36, 132, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `contactno`, `query`) VALUES
(1, 'hemil patel', 'hempatel@gmail.com', '8725542322', 'i want to give exam but sometimes issue comes up..and it is loading again and again');

-- --------------------------------------------------------

--
-- Table structure for table `drivingschool`
--

CREATE TABLE `drivingschool` (
  `id` int(11) NOT NULL,
  `city` text NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drivingschool`
--

INSERT INTO `drivingschool` (`id`, `city`, `name`, `mobile`, `address`) VALUES
(1, 'Ahmedabad', 'Driving at Home', '9152120032', 'Sindhubhavan Road, Shyamal, Ahmedabad-380015'),
(2, 'Ahmedabad', 'Khodal Moter Driving Schools', '9152273695', 'Shop 2 Siminder Complex, K K Nager Road, Ghatlodiya, Ahmedabad-380061'),
(3, 'Ahmedabad', 'New Darshna Driving Schools', '9152140263', 'C/G 11, Subh Amar Complex, Satellite, Ahmedabad-380015'),
(4, 'Ahmedabad', 'Adarsh Driving Schools', '9152161714', '14, Azan Complex, Sarkhej Road, Juhapura, Ahmedabad-380055'),
(5, 'Ahmedabad', 'New Om Moter Driving School', '9152197509', 'Shop No 9 Yogeshwar Complex, Near Kameshwar School, Satellite Road, Ahmedabad-380015'),
(6, 'Ahmedabad', 'Nilam Motor Driving School', '9152120072', '207-2nd Floor Sahjanand Complex, OPP Rahul Tower, Above Gopi Driving Hall, 100 Ft Anandnagar Road, Satellite, Ahmedabad-380015'),
(7, 'Ahmedabad', 'Classic Driving School', '9152776971', 'Shop Number 3, Sunpoint Complex, Gurukul, Ahmedabad-380052'),
(8, 'Ahmedabad', 'Dhaval Motor Driving School', '9152122880', '5, Adarsh Complex, Opp Murlidhar Society, Nr Chhotalal Chawl, Odhav, Ahmedabad-382120'),
(9, 'Ahmedabad', 'Vipsha Motor Driving School', '9152875495', 'Shop No.C-12, Shwetang Complex Devi Cinema Road, Naroda Road, Ahmedabad-380015'),
(10, 'Ahmedabad', 'Modi Motor Driving School', '9152139998', 'A 10 Chetnani Shopping Center, Dev Cinema Road, Naroda Road, Ahmedabad-382330'),
(11, 'Ahmedabad', 'The Best Motor Driving School', '9152956778', 'Shop No 30 Supreme Tower, Ambawadi-380006'),
(12, 'Ahmedabad', 'Life Driving School', '9586810128', 'GF-1, Sahjanand Complex, Paldi Road, Ellis Bridge, Ahmedabad-380006'),
(13, 'Ahmedabad', 'Maruti Motor Driving School', '9824267525', '26, 27  Rameshvar Raw House, Satellite, Ahmedabad-380015'),
(14, 'Ahmedabad', 'Gopal Krishna Motor Driving School', '9152119626', 'A 14, Ganesh Park Shopping Center, Vibhag 01, R C Technical Road, Chanakyapuri-Ghatlodia, Ahmedabad-380061'),
(15, 'Ahmedabad', 'Gujarat Motor Driving School', '9152158204', '7 Sanskar Complex, Polytechnic Road, Ambawadi, Ahmedabad-380015'),
(16, 'Ahmedabad', 'Peoples Motor Driving School', '9152923010', 'Jitendra Chambers Ground Floor, Income Tax, Ahmedabad-380014'),
(17, 'Ahmedabad', 'shree Ram Motor Driving School', '9152167295', 'BA Estate, State BAnk Road, Bapunagar, Ahmedabad-380024'),
(18, 'Ahmedabad', 'MD Motor Motor Driving School', '9426455519', 'Shop No 5, Kailash Colony, Amraiwadi, Ahmedabad-380026'),
(19, 'Ahmedabad', 'Uday Auto Motor Driving School', '9687677170', 'Galaxy Corporate House, Sardar Patel Ring Road, Kathwada, Ahmedabad-382430'),
(20, 'Ahmedabad', 'Castrol Institute of Motoring', '9825083042', 'Pandurang Society, Judges Bungalow Road, Bodakdev, Ahmedabad-380054'),
(21, 'Ahmedabad', 'jagdish Motor Driving School', '9824011540', '7/B, Love Comlex, Maninagar Road, Kankaria, Ahmedabad-380022'),
(22, 'Ahmedabad', 'Maruti Driving School', '7927911333', '2/3, Sahjanand Arcade, 132 Ft Ring Road, Memnagar, Ahmedabad-380052'),
(23, 'Ahmedabad', 'Shreenath Motor Driving School', '7940037028', 'Shop No 6, Ground Floor, Raviniketan Shoping centre, Vastrapur, Ahmedabad-380015'),
(24, 'Amreli', 'Janta Motor driving School', '9327633207', 'Manibhai Chowk, amreli-364515'),
(25, 'Amreli', 'Royal Motors', '8238023100', 'Amreli-365601'),
(26, 'Amreli', 'Sidhi Vinayak Motors', '9879108936', 'Amreli-365601'),
(27, 'Amreli', 'Viraj Motors', '9099968469', 'Amreli-365601'),
(28, 'Amreli', 'Ashapura Radio Station', '9824804561', 'Station Road, Amreli-365601'),
(29, 'Amreli', 'angel Auto Advisor Or Motor Driving School', '9426484561', '1st Floor, White House Amreli HO, Amreli-365601'),
(30, 'Amreli', 'Radhe Motor Driving School', '9998938852', 'Manek para Station Road Amreli, Amreli-365601'),
(31, 'Amreli', 'Hanumant MOTOR Driving Training School', '8000059983', '02, HINDORANA CHOWKDI, Rajula, Amreli-364560'),
(32, 'Amreli', 'Saibaba Auto Driving School', '9427427738', 'Dhari, Shakti Nagar, Amreli-365640'),
(33, 'Amreli', 'Yash Driving School', '9904155364', 'Savarkundla Rd cokadi, Laxmi Diamond Circle Same, Sankul, Panihari Society Amreli, Gujarat 365601, Savarkundla Road, Amreli-365601'),
(34, 'Amreli', 'Gujarat Motor Driving School', '9974537429', '1st Floor, Raj Mandir Complex, Rainbow Society, Jhafrabad Road, Rajula, Amreli-365560'),
(35, 'Anand', 'Spartan Motor Driving School', '9824067370', 'Ground Floor, Vaghasiwala Building, Amul Dairy Road, Amul Dairy, Anand-388001'),
(36, 'Anand', 'Navchetan Driving School', '9879444944', 'Amul Dairy Road, Amul Dairy, Anand-388001'),
(37, 'Anand', 'Aakash Driving School', '9879444336', 'shree Ram Shopping Center, Petlad, Anand-388450'),
(38, 'Anand', 'Indian Motor Training School', '9925548858', 'Opp, Nalini Arts College, Vallabh Vidyanagar, Anand-388120'),
(39, 'Anand', 'New Gujarat Motor Training School', '9925151677', 'B-12 ocian complex, Nana bazar, Vallabh Vidyanagar, anand-388120'),
(40, 'Anand', 'Modern Motor Motor Training School', '2692232342', 'Near Bhaikaka, Mota Bazar, Anand-388001'),
(41, 'Anand', 'Modern Motor Training School', '2692232342', 'Near Bhaikaka, Mota Bazar, Anand-388001'),
(42, 'Anand', 'Tarun Motor Driving School', '9825361190', 'Office No 6 Viral Plaza, Motor Bazar, Commercial Bank Beside, Vallabh Vidyanagar Anand-388120'),
(43, 'Anand', 'Pragati Driving School', '9428153800', 'Second Floor, Sanket Tower, Grid Cross Road, Anand-388001'),
(44, 'Anand', 'New Gujarat Driving School', '9925151677', 'Nana Bazaar, Bakrol, Vallabh Vidyanagar, Anand-388120'),
(45, 'Anand', 'Maruti Driving School', '9638803281', 'AMAR CARS PVT LTD, JANTA CROSSING< Vallabh Vidyanagar, Anand-388120'),
(46, 'Anand', 'Super Motor Training School', '2692251797', '12, Shyam Plaza, I G Road, Anand-388120'),
(47, 'Dahod ', 'Rasmi Motor Training School', '224781', '5177 Dolat Ganj Bazar, Dahod, Dahod Ho, Dahod 389151'),
(48, 'Dhule ', 'Chhtrapati Motor Driving School', ' 9767554474', 'Surat Navsari Road, Dhule - 424304'),
(49, 'Gandhidham ', 'Jeel Motor Driving School', '9662666100', 'Office No 14, Ward 3a, Maitri Road, Gandhidham - 370201'),
(50, 'Gandhidham ', 'Mukesh Motor Driving School', '9426215161, 233232', 'Shop No 5 to 10, Madhav Chambers, Plot No 326, Gandhidham - 370201'),
(51, 'Gandhidham ', 'Shrihari Motor Driving School', '9152835558', 'Plot No 49, Ward No 11/B, Gandhidham Ho, Gandhidham - 370201'),
(52, 'Gandhidham ', 'Bharat personal Driving School Home service', '9925950908', 'Adipur Kutch, Gandhidham - 370205'),
(53, 'Gandhidham ', 'Ashwin Motor Driving School', '9726174629', 'B-207 Nu-4 Sapnanagar, Gandhidham Sector 3, Gandhidham - 370201'),
(54, 'Gandhidham ', 'Prince Motor Driving School', '9825988053', 'Office No. G 10, Plot No. 601, Goyal Embassy, 12c Police Station Road, Gandhidham - 370201'),
(55, 'Gandhidham ', 'ronak motor driving school', '9825894854', 'Sector 1, Gandhidham - 370201'),
(56, 'Gandhinagar', 'Shree Jaliyan Moter Driving School', '9152850190', 'A 108, Sahjand Shlok Complex, Near Pramukhnagar, Sargasan, Gandhinagar-Gujarat - 382421'),
(57, 'Gandhinagar', 'New Jay Motor Training School', '9152967326', 'Chip-type, Shopping Center., Opp.post Office., Gandhinagar Sector 22, Gandhinagar-gujarat 382021'),
(58, 'Gandhinagar', 'Arti Motor Driving School', '9152588957', 'Plot No 308, Yogideep Complex., Gandhinagar Sector 29, Gandhinagar-gujarat - 382030'),
(59, 'Gandhinagar', 'Perfect Motor', '9152683140', 'G-3, Shreeji Apartment, Sector-6/5, Ga-2 Cross Road, Gandhinagar Sector 6, Gandhinagar-Gujarat - 382006'),
(60, 'Gandhinagar', ' Happy Motor Driving School', '9879575412', 'Plot No 1601 Shop No. F/2, Jalaram Complex, Gandhinagar Sector 3, Gandhinagar-Gujarat - 382016'),
(61, 'Gandhinagar', 'Shakti Motor Driving School', '9824518848', 'Shop: 4, New Chip Type Shopping Centre, Sector - 23, Gandhinagar Sector 23, Gandhinagar-Gujarat - 382024'),
(62, 'Gandhinagar', 'Happy Motor Driving School', '9879575412', '23/24, 1st Floor, Main Road, Gandhinagar Sector 24, Gandhinagar-Gujarat - 382024'),
(63, 'Gandhinagar', 'Anjana Motor Training Driving School', '9998988069', '6, Ground Floor, Siddhi Vinayak Appartment, Sargasan, Gandhinagar-Gujarat - 382421'),
(64, 'Gandhinagar', 'Jyot Motor Driving School', '9998527286', 'G/8, 291, Sky View Complex, Bus stop 17, Gandhinagar Sector 22, Gandhinagar-Gujarat 382021'),
(65, 'Gandhinagar', 'Royal Motor Driving School', '9825324980', 'A 204, Swagat Rain Forest 3, Sargasan, Gandhinagar-Gujarat - 382421'),
(66, 'Gandhinagar', 'Maruti Driving School', '7965728231', 'Shop No. 314, /D/1-2, Super Mall-1, Infocity, Gandhinagar HO, Gandhinagar-Gujarat - 382010'),
(67, 'Gandhinagar', 'Unnati Motor Training School', '7923245487', '12 Chip Type Shopping Centre, Civil Hospital Compound, Sector 12, Gandhinagar HO, Gandhinagar-Gujarat - 382010'),
(68, 'Gandhinagar', 'Royal Motor Driving School & Travels', '9825324980', 'B 117, Shyam Shrusti Complex, Kudasan Road, Gandhinagar HO, Gandhinagar-Gujarat - 382010'),
(69, 'Gandhinagar', 'New Radhe Motor Driving School', '7923243756', 'B-1, Siddhi Vinayak Complex, Main Shopping Centre, Gandhinagar Sector 7, Gandhinagar-Gujarat - 382007'),
(70, 'Gandhinagar', 'Madhav Motor Driving School', '9725167914', 'Shop No 154, Krushnakunj Complex, Gandhinagar, Gandhinagar-Gujarat - 382030'),
(71, 'Gandhinagar', 'Chaudhary Motor Training School', '9824499505', 'Plot Number 539/2, Chandan Apartment, Gandhinagar Sector 23, Gandhinagar-Gujarat 382024'),
(72, 'Gandhinagar', 'Agastya Motor Driving School', '9925166711', 'Opp. Bank Of Baroda, Dehgam-Naroda Road, Dehgam, Gandhinagar-Gujarat - 382305'),
(73, 'Gandhinagar', 'Jignasa Motor Training School', '9152476544', '556 D 2, Chip Type Shopping Center, Gandhinagar Sector 22, Gandhinagar-Gujarat - 382021'),
(74, 'Gandhinagar', 'Om Sai Motor Training School', '9725646698', 'Plot No 822/2, Gandhinagar Ho, Gandhinagar-gujarat - 382010'),
(75, 'Gandhinagar', 'Drashti Motor Driving School', '9825199984', 'Shop no 8, Main Shopping Center, Gandhinagar Sector 6, Gandhinagar-Gujarat - 382006'),
(76, 'Gandhinagar', 'Jignasha MOTOR Training School', '9978630990', '556/D/2, CHIP TYPE SHOPPING CENTER, NR. GMC KETTLE YARD, Gandhinagar, Gandhinagar-Gujarat - 382030'),
(77, 'Gandhinagar', 'G S Motor Driving School', '9723213805', 'Gandhinagar Sector 2, Near Gh 2 Circle, Behind Havmor Parlour, Sector 2 C, Gandhinagar-Gujarat 382016'),
(78, 'Gandhinagar', 'New Shreeji Motor Driving School', '9824020712', 'Plot No. 651, Behind Surbhi Complex, Near G-2 Circle, Sector-6/B Corner, Gandhinagar Sector 6, Gandhinagar-Gujarat - 382006'),
(79, 'Gandhinagar', 'Mahadev Car Driving School', '9106744714', 'Gandhinagar, Gujarat - 382355'),
(80, 'Halol', 'Adarsh Residential School', '2676220751', 'Narmada Colony, Pavagadh Road, Halol, Panchmahal - 389350'),
(81, 'Halol', 'Pks Sarvajanik School', '2676235858', '201 - Derol, Station Road, Halol, Panchmahal 389350'),
(82, 'Himatnagar ', 'Panchal Motor Driving School', '9426405677', 'Vijapur Highway Road, Himatnagar - 383001'),
(83, 'Panchmahal', 'India Motars Training School', '9426061235', 'Nr HDFC Bank, Opp. LIC Marg, Godhra,\r\nPanchmahal - 389001'),
(84, 'Himatnagar ', 'Shiv Shakti Motor Driving School & Advisor', '2772222406', '8 Royal Complex, Opposite New RTO Office, Hajipura, Himatnagar - 383001'),
(85, 'Panchmahal', 'Pks Sarvajanik School', '238439', '201 - Derol, Station Road, Halol, Panchmahal - \r\n389350'),
(86, 'Himatnagar ', 'Panchal Motor Driving School', '9426405677, 235658', 'Vijapur Highway Road, Himatnagar HO, Himatnagar - 383001'),
(87, 'Panchmahal', 'Adarsh Residential School', '223332', 'Narmada Colony, Pavagadh Road, Halol, \r\nPanchmahal - 389350'),
(88, 'Himatnagar ', 'Shree Dutt Driving School', '9409166908', 'Himatnagar Ho, Himatnagar - 383001'),
(89, 'Himatnagar ', 'Aman Motor Training School', '9825836766', 'Shop No 22, Royal Complex, Vijapur Bypass Road, Himatnagar - 383001'),
(90, 'Kheda', 'Om moter Driving school', '7041222131', 'kheda-387411'),
(91, 'Himatnagar ', 'Kiran Motors Ltd', '7359288397', 'Plot No. 4, Motipura, Himmatnagar, Star City Service Road, Star City Service Roadgidc Road, Himatnagar - 383001'),
(92, 'Panchmahal', 'Binal Motor Driving School', '9825140201', 'A-01, Kalal Darwaja Road, Panjarapole, Godhra, Panchmahal - 389001'),
(93, 'Himatnagar ', 'Chintamani Motor Driving School', '9428184309', 'Anand Sagar Apartment, Sahakari Jin Road, Himatnagar - 383001'),
(94, 'Himatnagar ', 'Astha Motor Driving School', '9574902916', 'Savgadh, Himatnagar - 383001'),
(95, 'Panchmahal', 'India Motor Training School', '246611', 'Chitra Road, Godhra, Panchmahal - 389001'),
(96, 'Himatnagar ', 'Aradhana Motor Driving School', '9925632347', 'Avion Plaza Complex, Himatnagar - 383001'),
(97, 'Panchmahal', 'Rashmi Motor Training School', '224780', '5177, Dolat Gunj Bazar, Godhra, Panchmahal - \r\n389001'),
(98, 'Kutch', 'Sarita Driving School', '8320502045', 'Anjar ,Kutch - 370110'),
(99, 'Panchmahal', 'Saikrupa Motor Driving School', '8866703399', 'Rannchhodji Mandir, Soniwada, Shera, Godhra, Panchmahal - 389001'),
(100, 'Kutch', 'Sarita motor Driving School', '9328277397', 'Anjar ,Kutch - 370110'),
(101, 'Panchmahal', 'Rb Cars Pvt Ltd', '9925270385', 'Maruti Driving School, R B Cars Pvy Ltd, Plot No. \r\n112/11, 12 At. Vavdi., Dah, Godhra, Panchmahal - 389001'),
(102, 'Panchmahal', 'Pranami Motor Training School', '9924947320', 'Shop Number 8, Gitamrut Avenue, Godhra, \r\nPanchmahal - 389001'),
(103, 'Latur', 'Super motor Driving School', '9422470726', 'Bharudi Complex,Ambejogai Road,Latur-413512'),
(104, 'Patan', 'Sarthi Motor Driving School', '9825793411', 'Harij, Patan-Gujarat - 384240'),
(105, 'Patan', 'Dolatram Driving School', '9979549296', '3 G, Siddhpur Char Rasta, Patan-Gujarat - 384265'),
(106, 'Mandvi', 'Shreeji motor Driving School', '9825527924', '4,Devgadh Mandii New Shopping Center, Mandvi-370465'),
(107, 'Porbandar', 'Shree Gatral Auto Driving School', '9428706225', 'Porbandar Ho, Porbandar 360575'),
(108, 'Porbandar', 'Jay Ambe Motor Driving School', '9375986216', 'MG Road, Porbandar - 360575'),
(109, 'Mandvi', 'Sama motor Driving School', '9687313183', 'Maska Road, Mandvi-370465'),
(110, 'Rajkot', 'Jay Balaji Puc & Motor Driving School', '9152618226', 'Shop Number 18 Ground Floor Prince Palace,\r\n University Road, Rajkot - 360005'),
(111, 'Mandvi', 'Sanghvi motor Driving School', '9428829934', 'Nana Lal Vora Marg Mandvi-370465'),
(112, 'Mehsana', 'Starline Cars Pvt Ltd', '9924011888', 'Nagalpur Highway, Nagalpur, Mehsana 384001'),
(113, 'Mehsana', 'Premier Motor Driving School', '9924389939', 'Visnagar Road, Opposite Geb, Near Ganesh Nagar, Mehsana - 384001'),
(114, 'Mehsana', 'Patidar Motor Driving School', '9428955601', 'Sardar Society, Radhanpur Road, Industrial Estate, Mehsana - 384002'),
(115, 'Mehsana', 'Satyam Motors', '9067063086', 'Sneha Complex, Highway Road, Mehsana 384001'),
(116, 'Mehsana', 'Premier Motor Driving School', '9081811567', 'Classic Plaza, Highway, Mehsana - 382715'),
(117, 'Mehsana', 'Maruti Motor Driving School', '9723200147', 'F56, K.D.Plaza Complex, Becharaji, Viramgam Road, Mehsana - 384210'),
(118, 'Mehsana', 'Varahi Motor Driving School', '9925522420', 'Hat Krupa, Mehsana Industrial Estate, Mehsana - 384002'),
(119, 'Mehsana', 'MOTIBHA BUS DRIVING SCHOOL', '9909587074', 'Basna, Mehsana - 384305'),
(120, 'Mehsana', 'Ashapura Driving School', '9925899458', 'Ghanshyam Complex, Meu Highway Road, Gozaria Mahesana, Mehsana - 382825'),
(121, 'Mehsana', 'Mukesh Motors', '9725872023', 'Panchratna Complex, Mehsana Highway, Highway, Mehsana - 382715'),
(122, 'Mehsana', 'Ravi Motor Driving School', '9909534111', 'Ambaji Highway, Satlasana Mehesana, Mehsana - 384330'),
(123, 'Mehsana', 'Chirag Patel', '9426086047', 'Pavan Complex, Unjha Highway, Unjha, Mehsana - 384170'),
(124, 'Mehsana', 'Taru Motors', '2762220626', 'Milan Complex, Ground Floor, Kalol, Mehsana - 384002'),
(125, 'Himatnagar ', 'Eklavya Motor Driving School', '9428555433', 'Avion Plaza Complex, Himatnagar - 383001'),
(126, 'Himatnagar ', 'Rao Motor Driving School', '9427694800', 'Avion Plaza Complex, Himatnagar - 383001'),
(127, 'Jamnagar ', 'Jay Khodiyar Motor Driving School', '8401100131', 'Block No 1620 Janta Fatak, Ranjitnagar, Jamnagar - 361005'),
(128, 'Jamnagar ', 'Milan Driving School', '9714336233', 'Maitrya Gift House, Patel Colony Road, Patel Colony, Jamnagar - 361008'),
(129, 'Jamnagar ', 'Ajay Moter School', '9898089143', 'City Arcale, Amber Road, Jamnagar - 361001'),
(130, 'Jamnagar ', 'Yadunandan Motor Driving School', '9974901943', 'Jam Raval, Chandravada Road, Jangambari, Jamnagar - 361315'),
(131, 'Jamnagar ', 'Brahmbhatt Barot Foundation', '9824295314', 'Siddharth Shopping Centre, 1st Floor,, Beside New Payal Travels & Near Jolly Bunglow, Jamnagar - 361005'),
(132, 'Jamnagar ', 'Pithadiya Motor Driving School', '9152819878', 'Plot No 17, Digvijay Plot, Jamnagar - 361005'),
(133, 'Jamnagar ', 'Bharat Motor Driving School', '9152831060', 'Gandhinagar, Aakashm, Near Saibaba Mandir, Jamnagar - 361001'),
(134, 'Jamnagar ', 'SHIV Motor Training Schools', '9152554389', 'Ground Floor, Omkar Bunglow, Gandhinagar Main Road, Jamnagar - 361001'),
(135, 'Jamnagar ', 'Yash Motor Driving School', '9426627781', 'Sopan Residency, Sunshine School Street, Jamnagar - 361001'),
(136, 'Jamnagar ', 'Devansh Motor Driving School', '9152748153', 'Siddharth Shopping Centre 1st Floor, Summair Club Road, Digvijay, Jamnagar - 361004'),
(137, 'Jamnagar ', 'Naman Motor Driving School', '9909009948', '401 Golden Plaza, Khodiyar Colony Main Road, Khodiyar Colony, Jamnagar - 361006'),
(138, 'Jamnagar ', 'Maruti Driving School', '9228024365', 'Swastik Society, Park Colony, Patel Colony, Jamnagar - 361008'),
(139, 'Jamnagar ', 'Sagar Motor Driving School', '9824800345', '5, Minal Apartment, Summair Club Road, Jamnagar - 361005'),
(140, 'Jamnagar ', 'Maruti Driving School', '9824550042', 'Shop No G-7/8, Ground Floor, Manu Smurti App, Saru Section Road, Palace Ground Road, Jamnagar - 361008'),
(141, 'Jamnagar ', 'Patel Motor Driving School', '9427773387', 'Celler No 1, Pandit Nehru Marg, Jamnagar 361008'),
(142, 'Jamnagar ', 'PP CAR DECOR', '7227077192', 'Bhangar Bajar Road, Bedi Gate, Jamnagar - 361001'),
(143, 'Jamnagar ', 'Atul Automotives - Maruti Driving', '9228041221', 'Lalpur Bypass, Ranjit Sagar Road, Kedarnagar, Jamnagar - 361005'),
(144, 'Jamnagar ', 'Maruti Motor Driving', '9099167878', 'Sh 6, Motikhavdi, Reliance Greens, Jamnagar - 361142'),
(145, 'Jamnagar ', 'Karia Consultant', '9909916567', 'Shop No 103, Divyam Complex, Khodiyar Colony, Jamnagar - 361006'),
(146, 'Jamnagar ', 'Sagar Driving School', '8758815162', 'Greencity Plaza, Ranjitsagar Road, Jamnagar - 361001'),
(147, 'Jamnagar ', 'Milan Motor Driving School', '9714336233', 'Milan Motor Driving School, Near Dominoz Pizza, Patel Colony, Jamnagar - 361008'),
(148, 'Jamnagar ', 'Megha Motor Driving School', '9824720846', 'Plot No 75, Indira Marg, Jamnagar - 361001'),
(149, 'Jamnagar ', 'Ajay Motor Driving School', '2671913', '2/1st Flr Avantika Cplx, Cricket Bunglow Rd, Jamnagar - 361001'),
(150, 'Jamnagar ', 'Sagar Motor Driving School', '9824800345, 2677378', '5, Minal Apartment, Summair Club Road, Jamnagar - 361005'),
(151, 'Junagadh ', 'Maruti Driving School', '9426420616', 'Girnar Society, Near Motibaug, Zudvali, Junagadh - 362530'),
(152, 'Junagadh ', 'Krishna Motor Driving School', '9099966227', 'Gopal Complex, Zanzarada Road, Junagadh 362001'),
(153, 'Junagadh ', 'Gorad Driving School & RTO Agent', '9099966733', 'Maruti Complex, Zanzerda Road, Junagadh 362001'),
(154, 'Junagadh ', 'Maruti Motor Driving School', '9924569145', 'NAGRIK BANK STREET, Junagadh - 362001'),
(155, 'Junagadh ', 'Gorad Motor Driving School', '9879566733', 'Maruti Complex, Zanzarda Road, Sadar Baug, Junagadh - 362001'),
(156, 'Junagadh ', 'Kohinoor Motor Driving School', '9879519915', 'MG Road, Opposite Old Bus Stand, Beside Home Guard Office Junagadh - 362001'),
(157, 'Junagadh ', 'Om Car Driving School & PUC Center', '9824227309', '5, Bharti Complex, Giriraj Main Road, Junagadh 362001'),
(158, 'Junagadh ', 'Om Driving School Una', '8866610016', 'Somanath Una Hwy, Srinagar, Una, UNA Junagadh, Junagadh - 362560'),
(159, 'Junagadh ', 'Krishna Driving School', '9228189130', 'S Colony Road, Ambuja Nagar, Vadnagar, Junagadh - 362725'),
(160, 'Junagadh ', 'Shivam Driving school', '9979554603', 'Talav Darvaja, Priya Apartment, Junagadh - 362001'),
(161, 'Junagadh ', 'Maruti Motor Driving School', '9924569054', 'NAGRIK BANK STREET, Junagadh HO, Junagadh 362001'),
(162, 'Junagadh ', 'Om Car Driving School & PUC Center', '9824227218, 2636436', '5, Bharti Complex, Giriraj Main Road, Junagadh - 362001'),
(163, 'Junagadh ', 'Gorad Driving School & RTO Agent', '9879566642', 'Maruti Complex, Zanzerda Road, Junagadh Ho, Junagadh - 362001'),
(164, 'Junagadh ', 'Kohinoor Motor Driving School', '9879519915', 'MG Road, Junagadh - 362001'),
(165, 'Rajkot', 'Jay Balaji Puc & Motor Driving School', '9152618226', 'Shop Number 18 Ground Floor Prince Palace,\r\n University Road, Rajkot - 360005'),
(166, 'Junagadh ', 'Om Driving School Una', '8866609925', 'Somanath Una Hwy, Srinagar, Una, Junagadh - 362560'),
(167, 'Junagadh ', 'Krishna Driving School', '9228189039', 'S Colony Road, Ambuja Nagar, Vadnagar, Junagadh - 362725'),
(168, 'Junagadh ', 'Jalaram Driving School', '9898989898', 'Junagadh-Somanath Hwy, Gadu, Junagadh - 362250'),
(169, 'Junagadh ', 'Shivam Driving School', '9979554512, 2655765', 'Talav Darvaja, Priya Apartment, Junagadh - 362001'),
(170, 'Junagadh ', 'Vidhata Motor Driving School', '9825644068', 'Shop No 129, 1st Floor, Shivalay Complex, Khavdhari Street, Una Junagadh, Junagadh - 362560\r\n'),
(171, 'Junagadh ', 'Perfect Maruti Driving School', '7227004109', 'Opp Marketting Yard, Dargah Wali Sheri, Rajkot Highway, Dolatpura, Junagadh - 362037'),
(172, 'Khambhalia ', 'Rezonnance Motor Driving Schools', '7016695988', 'Kakabhai Sihan, Khambhalia - 361305'),
(173, 'Khambhalia ', 'Krishna Motor Driving School', '9737898933', 'Station road opposite parag guest House, Near narsi bhavan, Khambhalia - 361305'),
(174, 'Valsad ', 'Sun Motor Driving And Training School', '9152630731', 'Plot No 2568, Siddh Shila House, Kachigam Road, Vapi Town, Valsad - 396191'),
(175, 'Valsad ', 'Kismat Motor Training School', '9152544896', '105/106, Silver Point, Gidc Cross Road, Vapi Industrial Estate, Valsad - 396195'),
(176, 'Valsad ', 'Baba Motor Driving School', '9824598398', 'Koparli Road, Vapi Industrial Estate, Valsad 396195'),
(177, 'Valsad ', 'Bhupendra Motor Driving & Training School', '9081128080', 'Subh Labh Tower, Vapi Industrial Estate, Valsad 396195'),
(178, 'Valsad ', 'Shreeji Car Driving Training School', '9825282232', 'Ground Floor, Hira Moti Apartment, Tithal Road, Tithal, Valsad - 396001'),
(179, 'Valsad ', 'Shreeji Motor Driving School', '9825731498', 'Shop No 38, City Point, Dharampur Road, Abrama, Valsad - 396002'),
(180, 'Valsad ', 'Shivji Driving School', '8238923055', 'Abrama, Sonanagar, Valsad - 396002'),
(181, 'Valsad ', 'Jigar Motor Driving Training School', '9824493408', 'Mehsana Nagar Society, Opp. ICICI Bank, Near Imrannagar, Vapi Industrial Estate, Valsad - 396195'),
(182, 'Valsad ', 'Meha Motor Driving And Training school', '9824159400', '6, Sanidhya Apartment, Custom Road, Vapi Town, Valsad - 396191'),
(183, 'Valsad ', 'Om Motor Driving School', '9925412228', '127, Seven Jewels, Station road, Vapi Town, Valsad - 396191'),
(184, 'Valsad ', 'Sun Auto Advisor And Motor Training School', '7405404845', 'UG-8, Mohit Tower, Daman Road, Chala, Valsad 396191'),
(185, 'Valsad ', 'Gujarat Motor Driving School', '9427901000', '1st Floor, Yash Chamber, Gidc Road, Vapi Industrial Estate, Valsad - 396195'),
(186, 'Valsad ', 'Preet motors training school', '9328034124', 'Shop no:-13, Bhanu darshan, near gunjan cinema, koparli road, gidc, vapi, Vapi Town, Valsad - 396191'),
(187, 'Valsad ', 'Sun Star Motor Driving And Training School', '9426258449', 'G-4/5, Chandralok Tower, Near Cine Park, Silvassa road, Chanod, Vapi Industrial Estate, Valsad - 396195'),
(188, 'Valsad ', 'Baba Motor Driving School', '2602410060', 'Koparli Rd, Valsad - 396191'),
(189, 'Valsad ', 'Radhika Motor School', '9825408181, 251196', '12, Anukul Apartment, Tithal Road, Valsad - 396001'),
(190, 'Valsad ', 'Carewells Motors', '428110', 'Plot No 165 B 15-16 2 Gidc Phase -2, Valsad - 396001'),
(191, 'Valsad ', 'Shivji Motor Driving Training School', '9726610168', 'Shop No 9, Prabha Park Apartment, Dharampur Road, Valsad - 396001'),
(192, 'Valsad ', 'Shivji Driving School', '8238922964', 'Valsad, Sonanagar, Valsad - 396002'),
(193, 'Valsad ', 'Kismat Motor Training School', '9152544805', '105/106, Silver Point, Gidc Cross Road, Vapi Industrial Estate, Valsad - 396195'),
(194, 'Valsad ', 'Sun Motor Driving And Training School', '9152630640', 'Plot No 2568, Siddh Shila House, Kachigam Road, Vapi, Valsad - 396191'),
(195, 'Valsad ', 'Meha Motor Driving And Training School', '9824159309', '6, Sanidhya Apartment, Custom Road, Vapi, Valsad - 396191'),
(196, 'Valsad ', 'Om Motor Driving School', '9824325134', 'Plot No C7/17, Commercial Area, Gidc, Surya Hospital Road, Vapi Industrial Estate, Valsad - 396195'),
(197, 'Vapi ', 'Gujarat Motor', '9427900909', 'Num 2, Yash Chamber, Gidc Road, Vapi - 396191'),
(198, 'Mehsana', 'Premier Motor Driving School', '9924389939', 'Visnagar Road, Mehsana Ho, Mehsana - 384001'),
(199, 'Mehsana', 'Satyam Motors', '9067062995', 'Sneha Complex, Highway Road, Mehsana HO, Mehsana - 384001'),
(200, 'Mehsana', 'Varahi Motor Driving School', '9998865249', '7, 1st Floor, Crystal Plaza, Kadi Chattral Road, Kadi, Mehsana - 382715'),
(201, 'Mehsana', 'Patidar Motor Driving School', '8591685616', 'Someswar Shoping Mall, Modhera Road, Mehsana - 384002'),
(202, 'Mehsana', 'Patel Motor Driving School & PUC Center', '9374217399', '14, Shree Ram Shopping Center, Kadi, Mehsana - 382705'),
(203, 'Mehsana', 'Chirag Motor Driving School', '7778988918', 'Bhagyoday Hosapital Road, Bhaupura, Kadi, Mehsana - 382715'),
(204, 'Mehsana', 'Avakar Motor Driving School', '9106397613', 'Radhanpur Cross Road Diry Road, Mahesana 2, Radhanpur Road Mahesana, Mehsana - 384002\r\n'),
(205, 'Mehsana', 'MOTIBHA BUS DRIVING SCHOOL\r\n', '9909586983', 'Basna, Mehsana - 384305'),
(206, 'Mehsana', 'Khodiyar Sadhi Motar Driving', '7573800615', 'Bhaupura, Kadi, Mehsana - 382715'),
(207, 'Mehsana', 'Maruti Motor Driving School', '9723200056', 'F56, K.D.Plaza Complex, Becharaji, Viramgam Road, Mehsana - 384210'),
(208, 'Mehsana', 'Varahi Moter Driving School', '9924651512', 'F3, 1 st Floor, Shikago Park, Pani Tanki Pase, Karannagar Road, Kadi, Mehsana - 382715'),
(209, 'Mehsana', 'Aavkar Motor Driving School', '9924285065', 'Randhanpur Circle, Industrial Estate, Mehsana - 384002'),
(210, 'Anand', 'Modern Driving School', '3445678923', '102, 1st Floor, Vsquare, Biulding, Mota Bazaar, Vallabh Vidyanagar, Anand-388120'),
(211, 'Anand', 'Nav Gujarat Driving School', '9925151586', 'Navdurga Motor Driving Training School'),
(212, 'Anand', 'Nav Gujarat Driving School', '9925151586', 'Nana Bazaar, Bakrol, Anand - 388120\r\n'),
(213, 'Anand', 'Navdurga Motor Driving Training School', '9376812171', 'Shivalay Complex, Chaklasi, Chaklashi, Anand - 387315\r\n'),
(214, 'Anand', 'Akash Driving School', '9265222504\r\n', 'Sardar Super Market Ni Same, College Road, Petlad, Anand-388430'),
(215, 'Anand', 'KG N Motor Driving School', '8000220219\r\n', 'Bus Stand, Anand - 388620'),
(216, 'Anand', 'Radhe Moter Trening School', '9714466262\r\n', '40, Sardar Shopping Center, Vasad Chowkadi, Borsad, Anand-388540'),
(217, 'Anand', 'Navdurga Motor Driving Training School', '9376812262\r\n', 'Shivalay Complex, Chaklasi, Chopasni Housing Board, Anand-387315'),
(218, 'Anand', 'New Perfect Motor Driving School', '9428153800\r\n', 'Nr. Sharda High School, Station Road, Anand - 388001'),
(219, 'Anand', 'Pragati Driving School', '2692249898\r\n', 'Second Floor, Sanket Tower, Grid Cross Road, Anand - 388001'),
(220, 'Anand', 'Modern Motor Training School', '2349434567', 'Anand-388001'),
(221, 'Anand', 'Super Motor Training School', '2543984567', '12, Shyam Plaza, I G Road, Anand - 388001'),
(222, 'Anand', 'New Perfect Motor Training School', '9879559860', 'Station Road, Anand - 388121'),
(223, 'Anand', 'New Indian Motor Training School', '8000171125', 'A V Road, Vallabh Vidyanagar, Anand - 388120'),
(224, 'Anand', 'A J Motor Training School', '9427062207', 'Shop No.B-8, Tanmay Complex, Near Bhaikaka Statue, Vallabh Vidyanagar, Anand - 388121'),
(225, 'Anand', 'New Perfect Motor Driving School', '2692241225', 'Nr. Sharda High School, Station Road, Anand - 388001'),
(226, 'Anand', 'Charotar Motor Driving School', '9898464864', 'A-3 Aedan Avenue, Near City Point Restaurant, Town, Anand - 388001'),
(227, 'Anand', 'New Pragatishil Training School', '9227753100', '2nd Floor, Super Market, Vallabh Vidyanagar, Anand 388120'),
(228, 'Anand', 'New Perfect Motor Training School', '9879559860', 'Station Road, Near Sharda High SchoolAnand - 388121'),
(229, 'Ankleshwar', 'New Famous', '9924977786', 'B-5, Galaxy Complex, Ankleshwar - 393001'),
(230, 'Ankleshwar', 'Shree Krishna Motor Driving Training', '2265616789', 'G-57, Ravi Complex, GIDC, Ankleshwar GIDC, Ankleshwar - 393001'),
(231, 'Ankleshwar', 'Shri Shakti Motor Driving School', '9152821813', '12, Shyam Complex, Ankleshwar Gidc, Ankleshwar - 393001'),
(232, 'Ankleshwar', 'Gujarat Moters Driving Training School', '8469414874', '159 Ghh 13 Steat Higway Netrang, Netrang, Netrang Bharuch, Ankleshwar - 393130'),
(233, 'Ankleshwar', 'Naseeb Car Driving School', '9879845586', 'Shop No 106, 1st Floor, Radhe Complex, GIDC, Ankleshwar - 393001'),
(234, 'Ankleshwar', 'Thakor Motor Driving Training School', '9152596217', 'Shop No 3, Golden Tower, Valiya Road, Kosamdi, Ankleshwar - 393001'),
(235, 'Banaskantha', 'Ajay Motor Driving School', '9152596217', 'Deesa, Banaskantha - 385535'),
(236, 'Banaskantha', 'Shreeji Motor Driving School Deesa', '9998938284', 'Neelkanth Arcade Complex, Palanpur Highway Deesa, Deesa, Banaskantha - 385535'),
(237, 'Banaskantha', 'Bahuchar Motor Driving School', '9898595677', 'Shop No. 15, 2nd Flooor Amaranth Complex, Highway, Road, Deesa, Banaskantha - 385535'),
(238, 'Bhandara', 'Wazalwar Driving School', '7020123993', 'Indraprast Building, NH 6, Bhandara - 441904'),
(239, 'Talaja', 'Hariom Auto Advertiges', '9426917787', 'Shop No 32, Second Floor, Vyayamshala Shoping Center, Talaja-364140'),
(240, 'Talaja', 'Hariom Auto Advertiges', '9426917787', 'Shop No 32, Second Floor, Vyayamshala Shoping Center, Talaja-364140'),
(241, 'Bharuch', 'Shri Krishna Motor Driving School', '9152625759', 'Shop No-G9 Shri Niketan Resi Plaza, Zadeshwar Road, Zadeshwar Road, Bharuch - 392011'),
(242, 'Bharuch', 'Patrawala Motor Driving Training School', '9824043663', 'A9/4, Patel Super Market, Station Road, Panch Batti, Bharuch-392001'),
(243, 'Bharuch', 'Krishna Motor Driving School', '9824043663', '9, Shree Niketan Residential Plaza, Main Road, Bharuch 392001'),
(244, 'Bharuch', '\r\nBhola Motor Driving', '9824043663', 'Opposite Rang Upavan, Panchbatti, Panch Batti, Bharuch > - 392001'),
(245, 'Bharuch', 'Shree Sai Motor Driving Training School', '9898111388', 'Shop No F/13, VD Township, Dahej Bypass Road, Bharuch-392001'),
(246, 'Bharuch', 'Famous Motor Driving Training School', '9898048583', '197, Patel Super Market, Station Road, Panch Batti, Bharuch-392001'),
(247, 'Bharuch', 'Makkah Motor Driving Training School', '9173920186', '28, 1st Floor, Shastri Market, Bharuch City, Bharuch 392001'),
(248, 'Bharuch', 'Shree Krishna Motor Driving Training School', '9925005277', 'Shop No C-2, Nilkanth Apartment, Sevashram Road, Bharuch-392001'),
(249, 'Bharuch', 'Bhola Motor & Training Driving School', '9925005277', 'Bharuch-392001'),
(250, 'Bharuch', 'Raviratana Motors Pvt. Ltd.', '9687690975', '8-11, Aastha Complex, Opp Ipcl Colony (Yamuna), Dahej Bharuch, Bharuch - 392130'),
(251, 'Bharuch', 'Krishna Motor Driving School', '2289007898', '9, Shree Niketan Residential Plaza, Main Road, Bharuch HO, Bharuch - 392001'),
(252, 'Bharuch', 'Shree Krishna Motor Driving Training School', '9925005177', 'Shop No C-2, Nilkanth Apartment, Sevashram Road, Bharuch-392001'),
(253, 'Bharuch', 'Bhola Motor & Training Driving School', '2668536756', 'Bharuch-392001'),
(254, 'Bharuch', 'Patrawala Motor Driving School', '9427584320', 'A 9/1, Patel Super Market, Station Road, Bharuch Ho, Bharuch-392001'),
(255, 'Bharuch', 'Shri Krishna Motor Driving', '2655614534', 'Bharuch-392001'),
(256, 'Bharuch', 'Shiv Shakti Motor Training School', '9925224701', '30, Shakti Chowk Complex, Gacl Chowkdi, Dahej, Bharuch -392135'),
(257, 'Bharuch', 'Jatin Motor Training', '9998970081', '13, Surbhi Bunglows, Zadeshwar Road, Bharuch - 392011'),
(258, 'Bhavnagar', 'New Patel Motor Driving School', '9152631235', 'Near Parag Travels, Waghawadi Road, Bhavnagar 364002'),
(259, 'Bhavnagar', 'Yuvraj Motor Driving School', '9152643616', 'Near Alekh Complex, Sidsar Road, Bhavnagar - 364001'),
(260, 'Bhavnagar', 'HET Car Consultant', '9152966315', 'G-13, Shanti Niketan Complex, Atabhai Road, Attabhai Circle, Bhavnagar - 364002'),
(261, 'Bhavnagar', 'Sainik Travels & MOTOR Driving School Sihor', '9152662399', 'F 1 YOGI COMPLEX, SHOP NO 2, Bhavnagar Rajkot Road, Sihor, Bhavnagar - 364240'),
(262, 'Bhavnagar', 'Shiv Motors Driving School', '8866309516', '1, Anjan Amrut Complex, Mahila College, Near Dena bank, Bhavnagar - 364001'),
(263, 'Bhavnagar', 'Shubh Motor Driving School\r\n', '9408986598', 'Shop No G 26 Swastik Arcade, Sidsar Road to Top 3, Adhewada, Bhavnagar - 364002'),
(264, 'Bhavnagar', 'Shree Shakti Mahila Driving School & Auto Advisor', '9825853232', 'Shop No 1, DSP Office Road, Kalanala, Bhavnagar 364001'),
(265, 'Bhavnagar', 'Maruti Driving School', '9662154154', '2130/A-2, Aatabhai Road, Bhavnagar - 364001'),
(266, 'Bhavnagar', 'Dev Motor Driving School', '9924885556', 'Shop No 20, S L Tradus Center, Rto Road, Vijayraj Nagar, Bhavnagar - 364002'),
(267, 'Bhavnagar', 'ST Xaviers School', '9924885556', 'Rampara Road, Talaja, Bhavnagar - 364001'),
(268, 'Bhavnagar', 'Rajshree Auto Advisors & Motor Driving School', '9924595496', '18 First Floor, Rameshwar Complex, Gogha Circle, Bhavnagar-364001'),
(269, 'Bhavnagar', 'Vidya Motor Driving School', '9737383838', 'BG-5, Matru Chhaya Complex, Near Mahila College, Mahila College Circle, Krishna Nagar, Bhavnagar - 364001'),
(270, 'Bhavnagar', 'Amardeep Driving School', '9662720901', 'Paliyad, Bhavnagar - 364720'),
(271, 'Bhavnagar', 'Apa Motor Driving School', '9426463132', '11, Harikrushna Complex, Bhavnagar - 364001'),
(272, 'Bhavnagar', 'Bhavnagar Motor Driving School - Govrt Approved', '9737056666', 'Behind Parag Travel, Waghawadi Road, Krishna Nagar, Bhavnagar - 364001'),
(273, 'Bhavnagar', 'Deep Motor Drving School', '9638545454', 'White House, RTO Road, Bhavnagar - 364001'),
(274, 'Bhavnagar', 'Arjun Motor Driving School', '9998881585', 'Sardarnagar Road, Sardarnagar, Bhavnagar - 364001'),
(275, 'Bhavnagar', 'Patel Motor Driving School & Auto Advisor', '9925292211', 'Shop No. 65, Muncipalty Shopping Centre, Nirmal Nagar, Bhavnagar - 364001'),
(276, 'Bhavnagar', 'Mahadev Driving School', '9909397776', 'Palitanagariyadhar Hwy, Bela, Gariyadhar, Bhavnagar - 364505'),
(277, 'Bhavnagar', 'New Yuvraj Motor Driving School', '9601925522', '1st Floor, Parth Complex, Opp B Div Police Station, Sardarnagar, Bhavnagar - 364001'),
(278, 'Bhavnagar', 'Diamond Motor Driving School', '9726595646', 'Bhavnagar - 364001'),
(279, 'Bhavnagar', 'Om Auto Sales & Consult Insurance Services', '9723060616', 'Shop No:104, White House Complex, Jewel Circle, Bhavnagar - 364002'),
(280, 'Bhavnagar', 'Paras Motor Driving School & Auto Advisor', '9033707070', 'Shop No 14, Mahek Complex, Bhavnagar - 364001'),
(281, 'Bhavnagar', 'Vijay Motor Driving School', '9898190634', '7, Om Shopping Center, GIDC, Bhavnagar 364001'),
(282, 'Bhavnagar', 'Rajvi Motor Driving School & Auto Advisor', '9624869999', 'Office No: 3, White House Complex, Kalanala, Bhavnagar 364001'),
(283, 'Bhavnagar', 'Shree Khodiyar Motor Driving School', '9624869999', 'Shop No 6, Sidsar Road, Sidsar, Bhavnagar - 364060'),
(284, 'Bhavnagar', 'Diamond Motor Driving School', '9429582225', 'Shop No 5, Kirshna Complex, Opposite Rto Gate No 1, Vijayrajnagar, Gadhechi Vadla, Bhavnagar - 364001'),
(285, 'Bhavnagar', 'Janki Motor Driving School', '9033219595', 'RTO Gate No 3 Ni Same, RTO Bhavnagar, Para, Bhavnagar -364003'),
(286, 'Bhavnagar', 'Rajvi Motor Driving School & Auto Advisor', '9574469999', 'Shop No:5, Om Complex, Sidsar Road, Bhavnagar - 364001'),
(287, 'Bhavnagar', 'Shree Sainath Driving School', '7383846555', 'Lakhubha Hall, Kaliyabid, Ram Mndir Road, Bhavnagar - 364001'),
(288, 'Bhavnagar', 'Diamond Motor Driving School', '9726595555', 'Bhavnagar-364001'),
(289, 'Bhuj', 'Sanghvi Auto Advisor & Motor Driving School', '9427131238', 'Shop No 14, Bhid Gate, Near Noorani Hotel, Bhuj - 370001'),
(290, 'Bhuj', 'Maruti Driving School', '9909953052', 'Plot No 5/6, 14, Uma Nagar, Mirzapar Highway, Mirzapur, Bhuj - 370001'),
(291, 'Bhuj', 'Gujarat Motor Driving School', '9726613365', 'Shop No.: 6, Near Sur-mandir Talkies, Oppos, S.T Road, Bhuj - 370001'),
(292, 'Bhuj', 'Tanna Motor Driving School And Auto Advisor', '9913969996', 'No 2, 1st Floor, Uma Complex, Bhuj Madhapar Highway, Madhapar, Bhuj - 370020'),
(293, 'Bhuj', 'Haji Motor Drivar School', '9978220006', '14 Street, BSF Camp, Ravalvadi Relocation Side, Bhuj - 370015'),
(294, 'Bhuj', 'Gujarat Motor Driving School', '9726613365', 'Shop No.: 6, Near Sur-mandir Talkies, Oppos, S.T Road, Bhuj - 370001'),
(295, 'Bhuj', 'Tanna Motor Driving School And Auto Advisor', '9913969996', 'No 2, 1st Floor, Uma Complex, Bhuj Madhapar Highway, Madhapar, Bhuj - 370020'),
(296, 'Bhuj', 'Haji Motor Drivar School', '9978220006', '14 Street, BSF Camp, Ravalvadi Relocation Side, Bhuj - 370015'),
(297, 'Bhuj', 'Sanghvi Auto Advisor & Motor Driving School', '9374331782', 'Shop No 14, Bhuj - 370001'),
(298, 'Bhuj', 'Gujarat Motor Driving School', '9726613274', 'Shop No.: 6, Near Sur-mandir Talkies, Oppos, S.T Road, Bhuj HO, Bhuj - 370001'),
(299, 'Bhuj', 'Om Car Motor Driving School', '9978316874', 'Shop No 3, Madhapar, Bhuj - 370020'),
(300, 'Bhuj', 'Sanghvi Auto Advisor & Motor Driving School', '9374331782', 'Shop No 14, Bhuj - 370001'),
(301, 'Bhuj', 'Gujarat Motor Driving School', '9726613274', 'Shop No.: 6, Near Sur-mandir Talkies, Oppos, S.T Road, Bhuj HO, Bhuj - 370001'),
(302, 'Bhuj', 'Om Car Motor Driving School', '9978316874', 'Shop No 3, Madhapar, Bhuj - 370020'),
(303, '', '', '', ''),
(304, 'Rajkot', 'Patel Driving School', '9152747973', 'Patel Driving School, Above Ram Aur Shyam\r\nGola, 150 Feet Ring Road, Rajkot - 360005'),
(305, 'Rajkot', 'Radhe Motor Driving School', '9998938943', '4- Amphee Complex, Nandi Park Main Road, \r\nNear SNK School, University Road, Rajkot - \r\n360005'),
(306, 'Rajkot', 'Smit Motor Driving School\r\n', '9152879238', 'Pushkardham, Nandi Park Main Road, University\r\nRoad, University Road, Rajkot - 360005'),
(307, 'Rajkot', 'Shakti Motor Driving School', '9426473632', 'Raiya Main Road, Near Brahmsamaj Chowk,\r\nRaiya Road, Rajkot - 360007'),
(308, 'Rajkot', 'Shiv Krupa Motor Driving School', '9152640846', 'Shop No 2 Shrinathji Complex, Jaldeep Park, \r\nKalawad Road, Rajkot - 360007'),
(309, 'Rajkot', 'Shree Maruti Motor Driving School', '9152631389', '3 Shyam Complex, Ground Floor, Patel Colony-3, Corners, Parivar Park, Mayani Main Road, Chandreshnagar, Rajkot - 360004'),
(310, 'Rajkot', 'Perfect Maruti Driving School', '9152388381', 'Madhuvan Plaza, Panchvati Main Road, \r\nPanchwati Road, Rajkot - 360001'),
(311, 'Rajkot', 'Varun Driving School', '9152689905', 'Shop No 3 Kailash Complex, University Road, Rajkot 360005'),
(312, 'Rajkot', 'Gurukrupa Motor Training School', '9152605451', 'Live Appartment, Shop No 2, University Road, \r\nRajkot 360005'),
(313, 'Rajkot', 'Nensi Motor Driving School', '9152616258', 'Hapariya Park Corner, New Radhe Shyam, \r\nKotharia Main Road, Rajkot - 360002'),
(314, 'Rajkot', 'Jasmine Driving School', '9825429367', 'Kalamandir Apartment, Mahakali Temple Road, \r\nRajkot City, Rajkot - 360001'),
(315, 'Rajkot', 'Varun Driving School', '9714668945', 'Rajnagar Street No 5, Chandresh Main Road, \r\nNana Mava Main Road, Rajkot - 360005'),
(316, 'Rajkot', 'Makkam Motor Driving School\r\n', '9825507321', 'Makkam Chowk, Near Reliance Petrol Pump,\r\nGondal Road, Rajkot - 360002'),
(317, 'Sabarkantha', 'Shubham Motors Driving School', '9409583256', 'Ambica Complex, Bunglow Vistsar, Idar, \r\nSabarkantha - 383430'),
(318, 'Sabarkantha', 'Ekta Auto Parts', '9428061535', 'Bhiloda Tran Rasta, Idar, Idar, Sabarkantha - \r\n383430'),
(319, 'Sabarkantha', 'Laxmi Motor Driving School\r\n', '9427481165', 'Govind Nagar, Bhiloda, Sabarkantha - 383245'),
(320, 'Sabarkantha', 'Amit Motor Driving School', '9427038364', 'State Highway No 9, Khedbrahma, Sabarkantha - \r\n383255'),
(321, 'Sabarkantha', 'Raj Motors Driving School\r\n', '9909302908', 'Near Navjivan Hospital, Near Navjivan Hospital, \r\nKhedbrahma, Sabarkantha - 383255'),
(322, 'Sabarkantha', 'parshva motars', '9427365152', 'Sabarkantha - 383006'),
(323, 'Sabarkantha', 'Tridev Motor Driving School\r\n', '9377361353', 'Shop No 109, First Floor, Vinayak Chambers, \r\nAproch Road, Prantij, Sabarkantha - 383205'),
(324, 'Sabarkantha', 'Shree Datt Motor Driving School', '9724701353', 'Gopinath Complex, Approach Road, Prantij, \r\nSabarkantha - 383205'),
(325, 'Sabarkantha', 'Shree Gurudatt Motor Driving School', '8238417224', 'Shreeji Complex, G E B Road, National Highway \r\nNo 8, Gambhoi, Sabarkantha - 383030'),
(326, 'Sabarkantha', 'Zala Motor Driving School', '9377661445', 'Shop No 231, Shanay Complex, Idar, Sabarkantha \r\n-383430'),
(327, 'Sabarkantha', 'Prabhukrupa Motor Driving School', '9426342140', 'Modasa Road, Dhansura, Sabarkantha - 383310'),
(328, 'Sabarkantha', 'D N Chuhan Motor Driving School', '9409557399', 'Dena Gramin Bank, Sabarkantha - 383245'),
(329, 'Sambalpur', 'Christ Motor Driving Training Institute', '9437293946', 'National Highway 6, Barbazar, Sambalpur - \r\n768006'),
(330, 'Sanand', 'Faiz Motor Driving School', '9904536729', 'Shop. No 27 Vaghela Shopping Centre Opp \r\nPolice Station Sanand Sanand, Ahmedabad, \r\nSanand-382110'),
(331, 'Sanand', 'Dev P.u.c Center', '9879731020', 'SANAND HEIGHTS, SHOP NO.06, Sanand - \r\n382110'),
(332, 'Sanand', 'New Maitry Motor Driving School\r\n', '9998258335', 'But Bhavani Tample Sanad, Ahmedabad, Sanand \r\n-382110'),
(333, 'Sanand', 'sukan motar drving school', '9824120096', '114 Akar Arcked 106 Narmdavasavat, Ner Sbi \r\nBank, Sanand - 382110'),
(334, 'Surat', 'Drive With Confidence', '7778080808', '1085, West Field Shopping Center, Ghoddod \r\nRoad, Surat - 395007'),
(335, 'Surat', 'SG Personal Trainer', '9152750528', 'Vesu, Vesu Main Road, Vesu, Surat - 395007'),
(336, 'Surat', 'Parth Sarthi Motor Driving Training School', '9152961779', 'U 1 Raj Laxmi Complex, Citylight Road, Surat - \r\n395007'),
(337, 'Surat', 'Shubham Motor Driving Training School', '9152776658', 'Shop Number U G 6 Rudram Avenue Appartment, \r\nVesu, Surat - 395007'),
(338, 'Surat', 'KAMANI MOTOR DRIVING TRAINING SCHOOL', '9152906870', 'KAMANI DRIVING SCHOOL, SHOP NO 2 \r\nKARUNASAGAR SHOPPING CENTER, Katargam, \r\nSurat-395004'),
(339, 'Surat', 'Vishal Motor Driving School', '9152540057', 'G 8, Heta Complex, Palanpur Jakatnaka Road, \r\nAdajan Dn, Surat - 395009'),
(340, 'Surat', 'Modi Motor Driving Training School', '9152685154', 'A 4, Crown Plaza Apartment, Pipardi Street, \r\nSalabatpura, Surat - 395003'),
(341, 'Surat', 'Atmiya Motor Driving Training School', '9978502929', 'Shop No.108, Satyam Apartment, Tadwadi Main \r\nRoad, Rander Road, Surat - 395005'),
(342, 'Surat', 'Honey Motor Driving Training School\r\n', '9152667668', 'Shop No 103, Jay Arcade, Rustampura, Surat - \r\n395002'),
(343, 'Surat', 'Parth Motor Driving Training School', '9152806654', '1008, Vaibhav Complex, Bhatar Main Road, \r\nBhatar Road, Surat - 395007'),
(344, 'Surat', 'American RTO Consultancy', '9152764045', '127, Rang Avdhut 3, Rander Main Road, \r\nRamnagar, Surat - 395005'),
(345, 'Surat', 'Avdhut Automobiles', '9152358878', 'G 11, Sayona Plaza, Canal Road, Punagam, Surat \r\n-394210'),
(346, 'Surat', 'Ganesh Motor Driving Training School', '9152966717', 'Shop No.U-25, Shiv Smruti Complex, Main Road, \r\nGhoddod Road, Surat-395007'),
(347, 'Surat', 'Bhavik Motor Driving Training School', '9152415854', 'Shop No 1, Dipanjali Society, Palanpur Jakatnaka \r\nRoad, Rander Road, Surat - 395005'),
(348, 'Surat', 'Lucky Motor Driving Training School\r\n', '7600013174', 'No 103, Baneshwari Palace, Jalaram Society-2, \r\nPuna Kumbharia Road, Parvat Patia, Surat -\r\n 395010'),
(349, 'Surendranagar', 'A One Motor Driving School', '9428720002', 'Chember 1, Bhogilal Chamber, Main Rd, \r\nSurendranagar Ho, Surendra Nagar-gujarat - \r\n363001'),
(350, 'Surendranagar', 'Krishna Auto Advisor', '9825522467', 'Shiv Chambers, Surendranagar Ho, Surendra \r\nNagar-Gujarat - 363001'),
(351, 'Surendranagar', 'Shiv Motor Driving School', '9825188719', 'Surendranagar Ho, Surendra Nagar-Gujarat- \r\n363001'),
(352, 'Surendranagar', 'Krunal Driving School', '243990', 'Surendranagar Ho, Surendra Nagar-Gujarat-\r\n 363001'),
(353, 'Surendranagar', 'JAY Bharat Driving School', '240260', 'Surendranagar Ho, Surendra Nagar-Gujarat - \r\n363001'),
(354, 'Surendranagar', 'Zalavad Driving School', '224244', 'Surendranagar Ho, Surendra Nagar-Gujarat- \r\n363001'),
(355, 'Surendranagar', 'Shivam Driving School', '9825899397', 'Surendranagar Ho, Surendra Nagar-Gujarat- \r\n363001'),
(356, 'Surendranagar', 'Shiv Driving School\r\n', '9825188719', 'Surendranagar Ho, Surendra Nagar-Gujarat - \r\n363001'),
(357, 'Surendranagar', 'A One Motor Dr. School', '9825898957', 'Surendranagar Ho, Surendra Nagar-Gujarat- \r\n\r\n363001'),
(358, 'Surendranagar', 'Maruti Driving School', '9825409052', 'Surendranagar Ho, Surendra Nagar-Gujarat- \r\n363001'),
(359, 'Surendranagar', 'Shreeji Motor Driving School\r\n', '8000095305', 'Ground Floor, Rameshwar Township, \r\nRemeshwar Township Road, Ratanpar, Surendra \r\nNagar-Gujarat - 363020'),
(360, 'Surendranagar', 'Mahavir Moter Driving School', '8140592899', '34 No. Chora Pase, Ratanpar, Ratanpar, Surendra \r\nNagar-Gujarat - 363020'),
(361, 'Surendranagar', 'Dream Vehicles Pvt Ltd', '9227775642', 'Plot No261/P, Gidc Area, Wadhwan, City, \r\nSurendranagar, Surendra Nagar-Gujarat - 363001'),
(362, 'Visnagar', 'Gujarat Motor Driving School', '9879096944', 'Vijay Para, Visnagar - 384315'),
(363, 'Visnagar', 'Maruti Driving School\r\n', '9825185217', '139, Chirag Plaza, Manav Ashram Cross Road, \r\nVisnagar Road, Visnagar HO, Visnagar - 384315'),
(364, '', '', '', ''),
(365, 'Morbi', 'Om Sainath Smart Driving School', '9712407807', '35, Galaxy Plaza, Near Umiya Circle, Sanada Road, Ravapar Road, Morbi - 363641'),
(366, 'Morbi', 'Krishna Motor Driving School', '9152444715', '7, 1st Floor, Anand Complex, Mahendrasinh Hospital Road, Morbi - 363641'),
(367, 'Morbi', 'Patel Auto Advisor & Driving School', '9099218555', 'Shop No 1, First Floor, Satnam Complex, Ravapar Road, Morbi - 363641'),
(368, 'Morbi', 'Jay Ambe Motor Driving School', '9825564866', '2nd Floor, Patidar Complex, Ravapar Road, Morbi - 363641'),
(369, 'Morbi', 'New Pruthvi Motor Driving School', '9429316602', 'Devi Complex, Sanala Road, Morbi - 363641'),
(370, 'Morbi', 'Om Prithvi Motor Driving School', '9428790981', 'Yadunandan Park, Sardar Nagar, Sanala Ravapar Road, Morbi - 363641'),
(371, 'Morbi', 'Patel Auto Advisor & Driving School', '9099218464', 'Shop No 1, First Floor, Satnam Complex, Ravapar Road, Morbi - 363641'),
(372, 'Morbi', 'Krishna Motor Driving School', '9152444624', '7, 1st Floor, Anand Complex, Mahendrasinh Hospital Road, Morbi HO, Morbi - 363641'),
(373, 'Morbi', 'Om Sainath Smart Driving School', '9712407716', '35, Galaxy Plaza, Near Umiya Circle, Sanada Road, Morbi - 363641'),
(374, 'Morbi', 'New Pruthvi Motor Driving School', '9429316511', 'Devi Complex, Sanala Road, Shakat Sanala, Morbi - 363641'),
(375, 'Morbi', 'Radhe Moter Trening School', '9152849022', 'Mission Hospital Road, Nadiad - 387001'),
(376, 'Nadiad', 'Radhe Moter Trening School', '9152849022', 'Mission Hospital Road, Nadiad - 387001'),
(377, 'Nadiad', 'Santram Motor Training School', '9825524618', 'Vkv Road, Near Premjani Hospital, Nadiad - 387001'),
(378, 'Nadiad', 'Navchetan Motor Training School', '9998981495', 'Mafatalal Mill Road, Nadiad - 387001'),
(379, 'Nadiad', 'Shree Hari Motor Training School', '8511234456', 'Shop No 1, Near Vallabhnagar Police Choky, Jyoti Apartment, Nadiad - 387001'),
(380, 'Nadiad', 'Santram driving school', '9825367663', 'Santram Driving School Nr Shushil Hospital'),
(381, 'Nadiad', 'Shree Hari motor driving school', '8980837056', '1st Floor, Shiv Apprt, Vallbh Nagar Soc, Nadiad - 387001'),
(382, 'Nadiad', 'Purohit motor training school', '9924433742', 'Nadiad - 387001'),
(383, 'Nadiad', 'Mihir Motor Training School', '2558917', 'Nadiad HO, Nadiad - 387001'),
(384, 'Nadiad', 'Navchetan Motor Training School', '9825610260', 'Mafatalal Mill Road, Nadiad - 387001'),
(385, 'Nadiad', 'Santram Motor Training School', '7016161203', 'Vkv Road, Nadiad Ho, Nadiad - 387001'),
(386, 'Navsari', 'Mustak Auto Advisor Motor Driving Training School', '9825181636', 'Chara Pool Road, Opp. ST Depot, 77, Navsari - 396445'),
(387, 'Navsari', 'Adarsh Motor Driving Training School', '9825378747', '3/345, Darga Road, Kothamadi, Navsari 396445'),
(388, 'Navsari', 'kiran motor training school', '9825547609', 'dev complex, chhapra road, Navsari 396445'),
(389, 'Navsari', 'Om Motor Driving Training School', '9898048408', '8, Gagandeep Complex, Golwad Gate, Navsari - 396445'),
(390, 'Navsari', 'Krishna Motor Driving School Auto Consultant', '9825127026', 'Shop Number L 17 Ashoka Tower, Railway Station Road, Asha Baug, Navsari - 396445'),
(391, 'Navsari', 'S S Motor Training School', '9879685568', 'Rami Appartment, Kumbhadwad, Kadiawad, Navsari - 396445'),
(392, 'Navsari', 'IOT Driving Training School', '9909240559', 'Nishra Apartment, Eru Main Road, Navsari 396445'),
(393, 'Navsari', 'IOT Driving Training School', '9909240559', 'Nishra Apartment, Eru Main Road, Navsari 396445'),
(394, 'Navsari', 'Rupa Motor Driving Hoolrupa Motor Consultant', '9099718649', '505 Woodland Apartment, Adarsh Nagar, Kaliavadi, Navsari - 396427');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `signs` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `signs`, `category`, `que`, `option1`, `option2`, `option3`, `ans`) VALUES
(8, 'nosign', 'text', 'Validity of P.U.C.C. Pollution under control certificate?', '6 Months', '1 Year', '2 Year', '6 Months'),
(10, 'nosign', 'text', 'When school buses are stopped for picking up or setting down students….', 'Blow horn and proceed', 'proceed slowly and cautiously since there is  chance of  students suddenly crossing the road', 'No special care is required', 'proceed slowly and cautiously since there is  chance of  students suddenly crossing the road'),
(18, 'nosign', 'text', 'When a blind person crosses the road holding   White Cane….', 'The driver of a vehicle shall consider the white  cane as a traffic sign to stop the vehicle', 'Blow the horn and proceed', 'Slow down and proceed with caution', 'The driver of a vehicle shall consider the white  cane as a traffic sign to stop the vehicle'),
(19, 'nosign', 'text', 'When a motor vehicle is involved in an accident…..', 'shall report to the nearest police station within  24 hours', 'shall report to the nearest police station within 12 hours', 'shall report to the nearest police station within  48 hours', 'shall report to the nearest police station within  24 hours'),
(20, 'nosign', 'text', 'When any property of a third party is damaged  due to an accident….', 'need not report to any police station', 'driver shall report to the nearest police station  within 7 days', 'driver shall report to the nearest police station within 24 hours', 'driver shall report to the nearest police station within 24 hours'),
(21, 'nosign', 'text', 'When the vehicle behind has begun to over take our vehicle….', 'we can over take another vehicle.', 'We shall not overtake another vehicle.', 'we can overtake another vehicle blowing horn', 'We shall not overtake another vehicle.'),
(22, 'nosign', 'text', 'The driver of the vehicle in front has not given  signal for over taking……', 'We can overtake', 'we can overtake blowing horn', 'we shall not overtake', 'we shall not overtake'),
(23, 'nosign', 'text', 'When our vehicle is being over taken…', 'We shall not increase speed', 'We can increase speed', 'We can increase speed with due care', 'We shall not increase speed'),
(24, 'nosign', 'text', 'Parking is prohibited in the following place…..', 'Left side of the road', 'Entrance of hospital', 'Market area', 'Entrance of hospital'),
(25, 'nosign', 'text', 'Parking is prohibited in the following place…..', 'near a public well', 'left side of the road', 'blocking a fire hydrant', 'blocking a fire hydrant'),
(26, 'nosign', 'text', 'To carry pillion rider on a motor cycle….', 'the vehicle shall be provided with foot rest, hand grip and sari guard', 'the vehicle shall be provided with side car', 'vehicle shall be provided with rear view mirror', 'the vehicle shall be provided with foot rest, hand grip and sari guard'),
(27, 'nosign', 'text', 'Smoking while driving public service vehicle…', 'can attract fine only', 'can attract suspension of driving licence', 'None of the above', 'can attract suspension of driving licence'),
(28, 'nosign', 'text', 'Abandoning vehicle in a public place causing in  convenience to others or passengers……', 'the driving licence is liable to be suspended or     cancelled', 'only fine is attracted', 'None of the above', 'the driving licence is liable to be suspended or     cancelled'),
(29, 'nosign', 'text', 'Abandoning a transport vehicle as a mark of  protest or agitation or any kind of strike, in a  public place or in any other place causing  obstruction or inconvenience to the public or  passengers or other users of such places…', 'the driving licence is liable to be suspended or     cancelled', 'only fine is attracted', 'Legitimate right of driver', 'the driving licence is liable to be suspended or     cancelled'),
(30, 'nosign', 'text', 'Carrying overload in goods carriages….', 'can attract suspension or cancellation of driving  licence', 'legally not punishable', 'Only fine is attracted', 'can attract suspension or cancellation of driving  licence'),
(31, 'nosign', 'text', 'The driver of a taxi refusing the offer for journey for the reason that the distance is short…', 'only fine is attracted', 'can attract suspension / cancellation of driving  licence', 'None of the above', 'can attract suspension / cancellation of driving  licence'),
(32, 'nosign', 'text', 'When you reach an intersection where there is  no signal light or police man, you will…', 'Give way to traffic approaching the intersection  from other roads', 'Give way to the traffic approaching the intersection on your right side and proceed after giving  necessary signals.', 'Give proper signal, sound the horn and proceed', 'Give way to the traffic approaching the intersection on your right side and proceed after giving  necessary signals.'),
(33, 'nosign', 'text', 'Give proper signal, sound the horn and proceed', 'Stop the vehicle and wait for the green light to  appear', 'As there is no restriction,  proceed at the same       speed', 'Slow down the vehicle and proceed only after  ensuring that it is safe to do so', 'Slow down the vehicle and proceed only after  ensuring that it is safe to do so'),
(34, 'nosign', 'text', 'Where the road is marked with continuous  yellow line the vehicle should…', 'Allow to overtake only through the right side of  yellow line', 'Not touch or cross the yellow line', 'Cross the line only when overtaking a vehicle in  front', 'Not touch or cross the yellow line'),
(35, 'nosign', 'text', 'While you are driving on gradient roads,  you  should….', 'Give precedence to the vehicles going up the hill', 'Give precedence to the vehicles coming down the hil', 'Give precedence to the vehicles carrying heavy  load', 'Give precedence to the vehicles going up the hill'),
(36, 'nosign', 'text', 'The driver of a tractor shall not carry….', 'More than three persons other than the driver.', 'Any person other than the driver', 'More than two persons including the driver.', 'Any person other than the driver'),
(37, 'nosign', 'text', 'While a vehicle entering a main road from a  branch road, the driver shall give preference…', 'To the vehicles coming from the left', 'To the vehicles coming from the right', 'To all vehicles proceeding along the main road', 'To all vehicles proceeding along the main road'),
(38, 'nosign', 'text', 'You can overtake a vehicle through the left side if…', 'There is sufficient space on the left side', 'The driver of that vehicle indicates his intention  to turn  right and proceeds to the center of the  road', 'That vehicle moves slowly', 'The driver of that vehicle indicates his intention  to turn  right and proceeds to the center of the  road'),
(39, 'nosign', 'text', 'What is \"Tail-gating\" ?', 'Keeping safe distance from the vehicle ahead  regulating the speed proportionately.', 'Driving too close behind a vehicle in a dangerousmanne r.', 'Keeping a distance of atleast  7  metres from the vehicle ahead.', 'Driving too close behind a vehicle in a dangerousmanne r.'),
(40, 'nosign', 'text', 'A vehicle can be seized by authorised officers, if…', 'The vehicle is not covered by a  valid insurance', 'The vehicle exceeds the speed limit', 'The vehicle is not covered by a valid registration or permit', 'The vehicle is not covered by a valid registration or permit'),
(43, 'nosign', 'text', 'Road on which driving in reverse gear is  prohibited…', 'One-way road', 'Steep descending road', 'Steep ascending road', 'One-way road'),
(44, 'nosign', 'text', 'Type of horn permitted…', 'Air- horn', 'Multi-toned horn', 'Electric horn', 'Electric horn'),
(45, 'nosign', 'text', 'If drunken driving is detected, the driver is liable to be punished with…', 'Imprisonment which may extent to 1 year or fine up to Rs.4000/- or both', 'Imprisonment which may extent to 6 months or Rs.2000/- as fine or both', '2 years rigorous imprisonment', 'Imprisonment which may extent to 6 months or Rs.2000/- as fine or both'),
(46, 'nosign', 'text', 'You hold a  learners licence for motor cycle ….', 'You will drive when the traffic is less', 'You will not carry any other person on the motor cycle except for the purpose of getting instructions from an instructor who holds a valid driving  licence to drive motor cycle', 'You will drive the vehicle only when an  instructor holding driving licence to drive motor cycle accompanies', 'You will not carry any other person on the motor cycle except for the purpose of getting instructions from an instructor who holds a valid driving  licence to drive motor cycle'),
(47, 'nosign', 'text', 'When the yellow light at an intersection appear  on the signal light, the driver of a approaching  vehicle should…', 'Slow down to stop', 'Ensure safety and drive away', 'Sound horn and proceed', 'Slow down to stop'),
(48, 'nosign', 'text', 'All motor vehicles must be covered by….', 'Third party Insurance', 'Life Insurance', 'Comprehensive Insurance', 'Third party Insurance'),
(49, 'nosign', 'text', 'Near a pedestrian crossing,\r\nwhen the\r\npedestrians are waiting to\r\ncross the road, you should', 'Sound horn and\r\nproceed\r\n', 'Slow down, sound horn\r\nand pass', 'Stop the vehicle and wait\r\ntill the pedestrians\r\ncross the road and then\r\nproceed', 'Stop the vehicle and wait\r\ntill the pedestrians\r\ncross the road and then\r\nproceed'),
(50, 'nosign', 'text', 'You are approaching a\r\nnarrow bridge, another\r\nvehicle is about to enter the\r\nbridge from opposite side you\r\nshould', 'Increase the\r\nspeed and try to\r\ncross the bridge\r\nas fast as\r\npossible', 'Put on the head light and\r\npass the bridge', 'Wait till the other vehicle\r\ncrosses the bridge and\r\nthen proceed', 'Wait till the other vehicle\r\ncrosses the bridge and\r\nthen proceed'),
(51, 'nosign', 'text', 'You are overtaking a car at night. You must ensure that….', 'you do not dazzle other road users', 'you flash headlamps before overtaking', 'your rear fog lights are switched on', 'you flash headlamps before overtaking'),
(52, 'nosign', 'text', 'The middle lane is for….', 'overtaking', 'two wheelers', 'traffic at 40 km/h', 'traffic at 40 km/h'),
(53, 'nosign', 'text', 'A flashing yellow signal is used when…..', 'traffic lights aren’t working', 'you should slow down & proceed with caution', 'men are at work', 'you should slow down & proceed with caution'),
(54, 'nosign', 'text', 'You  stop  for  pedestrians  waiting  to  cross   at   a           zebra crossing. They do not start to cross. What should    you do ?', 'sound your horn', 'be patient and wait', 'drive on', 'be patient and wait'),
(55, 'nosign', 'text', 'You are allowed to park….', 'on a footpath', 'at top of a hill', 'neither of these two alternatives', 'neither of these two alternatives'),
(56, 'nosign', 'text', 'A high beam in foggy conditions….', 'is good because you can see more', 'is bad because it reflects back and can dazzle', 'make sure others can see you', 'is bad because it reflects back and can dazzle'),
(57, 'nosign', 'text', 'Dipping your lights is necessary when…..', 'you want to overtake', 'it is foggy', 'following a vehicle', 'it is foggy'),
(58, 'nosign', 'text', 'When  approaching  a  crossing  where you are  to  go       straight….', 'change lanes to the right lane', 'change lanes at least 50 mts ahead to the middle lane', 'change lanes to the middle lane at the crossing', 'change lanes at least 50 mts ahead to the middle lane'),
(59, 'nosign', 'text', 'You are driving. A vehicle comes up quickly behind, flashing head lamps. You should…..', 'accelerate to maintain gap behind you', 'touch the breaks to show your brake lights', 'allow the vehicle to over take, if safe', 'allow the vehicle to over take, if safe'),
(60, 'nosign', 'text', 'When must you use a dipped high beam headlight during the day ?', 'in poor visibility and highways', 'on country roads', 'along narrow streets', 'in poor visibility and highways'),
(61, 'nosign', 'text', 'You are driving in rain. Why should you keep well back from the vehicle in front ?', 'in case it changes direction suddenly', 'in case its fog lights dazzle you', 'in case it stop suddenly', 'in case it stop suddenly'),
(62, 'nosign', 'text', 'What can cause hard steering', 'badly worn tyre', 'over inflated tyre', 'under inflated tyre', 'under inflated tyre'),
(63, 'nosign', 'text', 'Motor cyclists usually cause hazard by', 'Speed more than permitted', 'passing very close to you by driving in the zig zag manner', 'all of the above', 'all of the above'),
(64, 'nosign', 'text', 'You are waiting at a TJunction, A vehicle is coming from the left with right signal flashing, you should', 'accelerate hard and move forward', 'move forward slowly', 'wait until the vehicle turn to right side', 'wait until the vehicle turn to right side'),
(65, 'nosign', 'text', 'While you reach a junction with limited visibility you should', 'look both ways and move carefully', 'look at right and move slowly', 'move quickly', 'look both ways and move carefully'),
(66, 'nosign', 'text', 'You should switch on your hazard warning lights', 'When you are moving straight', 'When your vehicle is parked and the same is causing inconvenience to other road users', 'when your vehicle  parked at a no parking area', 'When your vehicle is parked and the same is causing inconvenience to other road users'),
(67, 'nosign', 'text', 'You are driving on a well-lit motor way at night, you must', 'use your head light on high beam', 'always use your head lights in low beam', 'always use hazard light', 'always use your head lights in low beam'),
(68, 'nosign', 'text', 'Anti lock braking system prevents wheels from locking. This avoid tyres to ', 'Puncture', 'skid', 'wear', 'skid'),
(69, 'nosign', 'text', 'While travelling over motor way at night with other vehicles just ahead, better the switched on lights should be', 'hazard warning light', 'low beam head light', 'high beam head light', 'low beam head light'),
(70, 'nosign', 'text', ' A cyclist is signalling to turn right and drawn to center of the road, you should', 'over take through left side', 'sound horn continually', 'overtake through right side only', 'over take through left side'),
(71, 'nosign', 'text', 'Driving at high speed', 'gives you better fuel efficiency', 'take less time for your journey', 'reduces time to react to hazard', 'reduces time to react to hazard'),
(72, 'nosign', 'text', 'While driving, avoid', 'observing traffic rules', 'reacting to wrong behaviour of other drivers', 'reacting to wrong behaviour of other drivers', 'reacting to wrong behaviour of other drivers'),
(73, 'nosign', 'text', 'The continuous yellow line in the centre of the road means', 'no parking', 'no parking', 'stop', 'no parking'),
(74, 'nosign', 'text', 'The continuous yellow line in the centre of the road means', 'no parking', 'do not over take', 'stop', 'do not over take'),
(75, 'nosign', 'text', 'When you approach a bridge you should', 'slow down and do not over take', 'beware of pedestrians', 'switch on the head lights', 'slow down and do not over take'),
(76, 'nosign', 'text', 'When approaching a right hand curve, you should keep well to the left to', 'improve your view of the road', 'avoid skid', 'to pass the vehicle from behind', 'improve your view of the road'),
(77, 'nosign', 'text', 'At the Blind Junction you must stop', 'only if there is traffic on the main road', 'behind the line and move forward slowly as vision improves', 'only if you are turning to the right', 'behind the line and move forward slowly as vision improves'),
(78, 'nosign', 'text', 'You entered  a one-way in the opposite direction unknowingly, you should', 'reverse out of the road', 'Turn back carefully and drive away', 'continue to the end of the road', 'Turn back carefully and drive away'),
(79, 'nosign', 'text', 'While driving through a main road another vehicle is reversing from a side road, You should', 'Move to the opposite side of the road', 'speed up and drive through quickly', 'sound your horn and be prepared to stop', 'sound your horn and be prepared to stop'),
(80, 'nosign', 'text', 'Approaching a cross road, the driver of the long vehicle ahead of you, signals right and moves to left, You should', 'sound horn and warn the driver', 'wait behind the vehicle', 'over take on the right hand side', 'wait behind the vehicle'),
(81, 'nosign', 'text', 'Basic rule on a two lane high way is ', 'keep to the left lane unless over taking', 'keep the lane with the least traffic', 'always keep to the right lane at high speed ', 'keep to the left lane unless over taking'),
(82, 'nosign', 'text', 'You meet an obstruction on your side of the road, You should', 'move on as you have priority', 'accelerate to move quickly', 'give way to on coming traffic', 'give way to on coming traffic'),
(83, 'nosign', 'text', 'The white line along the side of the road ', 'means no parking', 'means no overtaking', 'edge of carriage way', 'edge of carriage way'),
(84, 'nosign', 'text', 'The mandatory signs giving orders  are mostly in', 'Red/Blue circles', 'Red Triangles', 'Base triangles', 'Red/Blue circles'),
(85, 'nosign', 'text', 'Before you make an \"U\" turn you should ', 'Select the neutral gear and the indicator', 'show the signal for a right turn , watch in the rear wiew mirror  ', 'wait for signal to turn red', 'show the signal for a right turn , watch in the rear wiew mirror  '),
(86, 'nosign', 'text', 'When you are moving from a parking place, You should', 'use the rear view mirrors, check in the blind spot and give signal', 'look around the vehicle', 'sound horn and move ahead', 'use the rear view mirrors, check in the blind spot and give signal'),
(87, 'nosign', 'text', 'When do you stop on a motor way ', 'when ordered by police or if traffic signal is red', 'in an emergency or brake down', 'all of the above', 'all of the above'),
(88, 'nosign', 'text', 'You are intending to turn left , you should position your vehicle at ', ' the middle lane', ' the left hand lane', 'on the shoulder of the road', ' the left hand lane'),
(89, 'nosign', 'text', 'You are in a wrong lane while approaching a busy Junction you should', 'continue in that lane', 'stop until other lane is cleared', 'show signal and cut across', 'continue in that lane'),
(90, 'nosign', 'text', 'When going straight ahead at a round about', 'indicate right signal and then left signal', 'No signals is required', 'use hazard warning lamp', 'No signals is required'),
(91, 'nosign', 'text', 'You must not reverse your vehicle', 'on a busy road', 'on a one way road', 'all of the above', 'all of the above'),
(92, 'nosign', 'text', 'When do you reverse from a side road in to a main road', 'only if both roads are clear and empty', 'at any time', 'legally not permitted', 'legally not permitted'),
(93, 'nosign', 'text', 'When approaching from the rear, where two lanes of traffic have stopped at a signal, you should', 'pass all the vehicle and stop in front of them', 'stop behind the last vehicle in the appropriate lane', 'stop any where', 'stop behind the last vehicle in the appropriate lane'),
(94, 'nosign', 'text', 'Rear Mirror is slightly curved to', 'give a wider field of vision', 'cover the blind spot totally', 'judge the speed of following vehicle', 'give a wider field of vision'),
(95, 'nosign', 'text', 'Noise pollution may result in', 'disturbing mental equilibrium', 'Disturbing the concentration of the driver', 'all of the above', 'all of the above'),
(96, 'nosign', 'text', 'Air pollution affects', 'Human beings only', 'plants and animals only', 'all of the above', 'all of the above'),
(97, 'nosign', 'text', 'Fitment of multi toned horns on a motor vehicle is ', 'permitted only in emergency', 'an offence under the law as it causes  noise pollution ', 'or avoiding accident', 'an offence under the law as it causes  noise pollution '),
(98, 'nosign', 'text', 'Your vehicle pulls to one side while braking, You should', 'change the tyres around', 'pump the pedal when braking', 'consult your mechanic', 'consult your mechanic'),
(99, 'nosign', 'text', 'What is the common cause of skidding', 'bad condition of tyres and road', 'error of driver', 'both of the above', 'both of the above'),
(100, 'nosign', 'text', 'While travelling  you are dazzled by head lights of on coming vehicle, you should', 'pull down your sun visor', 'slow down and stop', 'switch on your main beam', 'slow down and stop'),
(101, 'nosign', 'text', 'What is blind spot', 'An area not seen in your rear view mirrors', 'an area not covered by head lights', 'an area not covered by the  rear view mirror inside your vehicle', 'An area not seen in your rear view mirrors'),
(102, 'nosign', 'text', 'While approaching a road under repair, you comply the permitted speed limit', 'during day time and working is going on ', 'During night time only', 'at all times', 'at all times'),
(103, 'nosign', 'text', 'Section 185 of MV Act pertains to', 'Driving at excessive speed', 'Drunken driving ', 'Both of the above', 'Drunken driving '),
(104, 'nosign', 'text', 'Dangerous driving is ', 'allowed in an emergency situation', 'punishable offence under section 184of M.V. act', 'both of the above are correct', 'punishable offence under section 184of M.V. act'),
(105, 'nosign', 'text', 'An accident has just happened and the injured person is lying on the road, you should ', 'protect the area and inform the authorities', 'protect the area and give first aid to injured', 'protect the area, give first aid ,take the injured to the hospital  and inform the authorities', 'protect the area, give first aid ,take the injured to the hospital  and inform the authorities'),
(106, 'nosign', 'text', 'What is the main aim of the first aid', 'To treat the injury', 'To prevent aggravating the injury  and its effects', 'all of the above', 'To prevent aggravating the injury  and its effects'),
(107, 'nosign', 'text', 'How does alcohol affect your driving', 'It increase your awareness', 'it reduce your concentration and attention', 'it increase your confidence', 'it reduce your concentration and attention'),
(108, 'nosign', 'text', 'Which of these lights will come after Amber at a traffic light', 'Red', 'Green', 'red or greeen', 'Red'),
(109, 'nosign', 'text', 'While driving you start feeling tired or unable to concentrate, You should ', 'Stop as soon as it is safe to do so and take rest', 'switch on the stereo to help you concentrate', 'speed up to get your destination sooner', 'Stop as soon as it is safe to do so and take rest'),
(110, 'nosign', 'text', 'You are drivng at night, what can you do to help you to keep alert?', 'takes proper rest periods at correct intervals', 'walk around in fresh air after a rest stop', 'both of the above', 'walk around in fresh air after a rest stop'),
(111, 'nosign', 'text', 'You are driving a car during a journey you are feeling ill and unable to concentrate, what should you do?', 'increase your speed to finish your work earlier', 'continue your journey and keep your windows open', 'stop in a safe place and if possible seek for medical attention', 'stop in a safe place and if possible seek for medical attention'),
(112, 'nosign', 'text', 'Anti lock braking system is designed to ', 'prevent the driving wheel from spinning', 'prevent moisture from building up inside the braking system', 'prevent wheels from locking up on braking and avoid skidding of the tyres', 'prevent wheels from locking up on braking and avoid skidding of the tyres'),
(113, 'nosign', 'text', 'What is \"brake fade\"', 'A reduction of air pressure', 'smooth progressive braking', 'reduction of braking effectiveness', 'reduction of braking effectiveness'),
(114, 'nosign', 'text', 'To prevent brake fade while descending you should', 'select neutral for a short distance', 'repeatedly pump the brake pedal', 'select a suitable higher power gear and apply brakes if only necessary', 'select a suitable higher power gear and apply brakes if only necessary'),
(115, 'nosign', 'text', 'When stopping on an uphill gradient, one should ', 'Hold the vehicle on the clutch', 'Hold the vehicle on the foot brake', 'Hold the vehicle applying parking brake after stopping', 'Hold the vehicle applying parking brake after stopping'),
(116, 'nosign', 'text', 'You are driving behind a large vehicle, how can you improve your view ahead?', 'Overtake as soon as you can', 'Move over to the left', 'Stay further back', 'Stay further back'),
(117, 'nosign', 'text', 'While driving through a flooded road what should you do?', 'Stop the vehicle until the flood stops', ' Watch flood level guage drive in high torque gear with high acceleration', 'Drive in high torque gear with low acceleration', ' Watch flood level guage drive in high torque gear with high acceleration'),
(118, 'nosign', 'text', 'Driving the vehicle in a neutral gear in down hill is dangerous because it affects the', 'Cooling system', 'Speed governor ', 'Brake system', 'Brake system'),
(119, 'nosign', 'text', 'what is the benefit of   power assisted steering', 'Reduce tyre wear', 'assist with braking', 'reduce driving effort', 'reduce driving effort'),
(120, 'nosign', 'text', 'How can you avoid harsh driving?', 'gently apply the parking brake', 'plan and take earlier action in using brake', 'slow down by using gears only', 'plan and take earlier action in using brake'),
(121, 'nosign', 'text', 'On which occasions would passengers be most likely to notice weight transfer?', 'braking', 'cornering', 'both of the above', 'both of the above'),
(122, 'nosign', 'text', 'Which of the following should you do before a bend, round about or corner?', 'select the appropriate gear', 'adjust your speed', 'both of the above', 'both of the above'),
(123, 'nosign', 'text', 'Hazard warning lamps may only be used at certain times', 'for going ahead at a junction', 'For slowing down the rear vehicle', 'for emergency parking especially on high ways and busy roads', 'for emergency parking especially on high ways and busy roads'),
(124, 'nosign', 'text', 'A laminated safety wind screen glass is one which', 'will not shatter', 'has a plastic layer pasted between dual glasses', 'both of the above', 'both of the above'),
(125, 'nosign', 'text', 'What must you do if your vehicle is involved in an accident?', 'stop at the scene of the accident, give First Aid to the victim if possible and help him to get medical attention', 'drive the vehicle to the nearest police station', 'inform the insurance authorities at the earliest', 'stop at the scene of the accident, give First Aid to the victim if possible and help him to get medical attention'),
(126, 'nosign', 'text', 'Your vehicle has hit a parked vehicle.  The owner of that vehicle could not be traced out  at the time, you must ', 'drive away from the accident spot and clear the damage at the earliest', 'inform the insurance authorities as soon as possible', 'inform the police station having jurisdiction over the place in which the accident occurred within 24 hours', 'inform the police station having jurisdiction over the place in which the accident occurred within 24 hours'),
(127, 'nosign', 'text', 'While  driving your vehicle on a motor way a front tyre gets burst.  You should', 'loosen  the grip on the steering wheel', 'brake firmly for a stop', 'hold the steering wheel firmly and stop safely by  using brake', 'hold the steering wheel firmly and stop safely by  using brake'),
(132, 'uploads/sign38416013.jpg', 'sign', 'The following sign represents..', 'Right turn prohibited ', 'Sharp curve to the right ', 'U-turn prohibited ', 'U-turn prohibited '),
(134, 'uploads/sign900784989.jpg', 'sign', 'The following sign represents..', 'Right turn prohibited ', 'Sharp curve to the right ', 'U-turn prohibited ', 'U-turn prohibited '),
(135, 'uploads/sign493513119.jpg', 'sign', 'The following sign represents..', 'Pedestrian crossing ', 'Pedestrian may enter ', 'Pedestrian prohibited ', 'Pedestrian crossing '),
(136, 'uploads/sign113373094.jpg', 'sign', 'The following sign represents..', 'Keep right side ', 'Parking on the right allowed ', 'Compulsory turn to right ', 'Parking on the right allowed '),
(137, 'uploads/sign643863997.jpg', 'sign', 'The following sign represents..', 'U-turn prohibited ', 'Right turn prohibited ', 'Overtaking through left prohibited ', 'Right turn prohibited '),
(138, 'uploads/sign767574555.jpg', 'sign', 'The following sign represents..', 'Horn prohibited ', 'Compulsory sound horn ', 'May sound horn ', 'Horn prohibited '),
(139, 'uploads/sign56436244.jpg', 'sign', 'The following sign represents..', 'Roads on both sides in front ', 'Narrow bridge ahead ', 'Narrow road ahead ', 'Narrow bridge ahead '),
(140, 'uploads/sign853325678.jpg', 'sign', 'The following sign represents..', 'First aid post ', 'Resting place ', 'Hospital ', 'Hospital '),
(141, 'uploads/sign235195523.jpg', 'sign', 'The following sign represents..', 'First aid post ', 'Resting place ', 'Hospital ', 'First aid post '),
(142, 'uploads/sign943394741.jpg', 'sign', 'The following sign represents..', 'Hospital ', 'Resting place ', 'First aid post ', 'Resting place '),
(144, 'uploads/sign696328227.jpg', 'sign', 'The following sign represents..', 'Narrow road ahead ', 'Narrow bridge ahead ', 'Roads on both sides ahead ', 'Narrow road ahead '),
(145, 'uploads/sign147912378.jpg', 'sign', 'The following sign represents..', 'Railway station near ', 'Level crossing unguarded ', 'Level crossing Guarded ', 'Level crossing unguarded '),
(146, 'uploads/sign487984440.jpg', 'sign', 'The following sign represents..', 'Entry through right side prohibited ', 'Entry through left prohibited ', 'Overtaking prohibited ', 'Overtaking prohibited '),
(147, 'uploads/sign47466604.jpg', 'sign', 'The following sign represents..', 'Cross road ', 'No entry ', 'Hospital ', 'Cross road '),
(148, 'uploads/sign371343723.jpg', 'sign', 'The following sign represents..', 'Restriction ends ', 'No entry ', 'No overtaking ', 'No entry '),
(149, 'uploads/sign291899326.jpg', 'sign', 'The following sign represents..', 'May turn to left ', 'Compulsory go ahead or turn left ', 'Side road left ', 'Side road left '),
(150, 'uploads/sign850310713.jpg', 'sign', 'The following sign represents..', 'Sound horn compulsory ', 'Sound horn continuously ', 'Horn prohibited ', 'Sound horn compulsory '),
(151, 'uploads/sign155080174.jpg', 'sign', 'The following sign represents..', 'Road to the right in front ', 'Compulsory turn right ', 'Turn to right prohibited ', 'Compulsory turn right '),
(152, 'uploads/sign95879441.jpg', 'sign', 'The following sign represents..', 'End of restriction ', 'Do not stop ', 'No parking ', 'No parking '),
(153, 'uploads/sign283687848.jpg', 'sign', 'The following sign represents..', 'Go straight ', 'One-way ', 'Prohibited in both directions ', 'One-way '),
(154, 'uploads/sign875285668.jpg', 'sign', 'The following sign represents..', 'No entry for motor vehicle ', 'No entry for cars and motorcycles ', 'Entry allowed for cars and motor vehicle ', 'No entry for cars and motorcycles '),
(155, 'uploads/sign735888596.jpg', 'sign', 'The following sign represents..', 'Trucks prohibited ', 'Bus prohibited ', 'Heavy vehicles prohibited ', 'Trucks prohibited '),
(156, 'uploads/sign97261655.jpg', 'sign', 'The following sign represents..', 'Bullock cart prohibited ', 'Cycle prohibited ', 'All vehicles prohibited ', 'Bullock cart prohibited '),
(157, 'uploads/sign604199590.jpg', 'sign', 'The following sign represents..', 'Student prohibited ', 'Pedestrian permitted ', 'Pedestrian prohibited ', 'Pedestrian prohibited '),
(158, 'uploads/sign707332728.jpg', 'sign', 'The following sign represents..', 'Overtaking prohibited through the right side', 'Turn left ', 'Left turn prohibited ', 'Left turn prohibited '),
(159, 'uploads/sign362388883.jpg', 'sign', 'The following sign represents..', 'Drive the vehicle not exceeding 50 km/ hr ', 'Drive the vehicle at 50 km/hr', 'Drive the vehicle exceeding 50 km/hr', 'Drive the vehicle not exceeding 50 km/hr'),
(160, 'uploads/sign960999331.jpg', 'sign', 'The following sign represents..', 'Speed limit 2 km/hr', 'No entry for vehicles having more than 2 meters width ', 'No entry for vehicles having more than 2 meters height ', 'No entry for vehicles having more than 2 meters width '),
(161, 'uploads/sign223754710.jpg', 'sign', 'The following sign represents..', 'Entry only for vehicles with height above 3.5 meters ', 'Entry only for vehicles with width above 3.5 meters', 'Entry for vehicles having height not exceeding 3.5 meters ', 'Entry for vehicles having height not exceeding 3.5 meters '),
(162, 'uploads/sign496969663.jpg', 'sign', 'The following sign represents..', 'Stop', 'No stopping or standing ', 'Junction ', 'No stopping or standing '),
(163, 'uploads/sign908065075.jpg', 'sign', 'The following sign represents..', 'No entry ', 'Ahead only ', 'Entry in both directions ', 'Ahead only '),
(164, 'uploads/sign793796556.jpg', 'sign', 'The following sign represents..', 'Compulsory ahead or turn right ', 'Compulsory ahead or turn left ', 'Side road ahead ', 'Compulsory ahead or turn left '),
(165, 'uploads/sign520431478.jpg', 'sign', 'The following sign represents..', 'Stop on the left side ', 'Compulsory keep left ', 'Turn left ', 'Compulsory keep left'),
(166, 'uploads/sign882193228.jpg', 'sign', 'The following sign represents..', 'Right ascend ', 'Right hand curve ', 'Keep right ', 'Right hand curve '),
(167, 'uploads/sign111761698.jpg', 'sign', 'The following sign represents..', 'Left hand curve ', 'Left ascend ', 'Keep left ', 'Left hand curve '),
(168, 'uploads/sign609327073.jpg', 'sign', 'The following sign represents..', 'Right hair pin bend ', 'Right ascend and descend ', 'Right descend ', 'Right hair pin bend '),
(169, 'uploads/sign362695219.jpg', 'sign', 'The following sign represents..', 'Left descend ', 'Left hair pin bend ', 'Keep left ', 'Left hair pin bend '),
(170, 'uploads/sign673654040.jpg', 'sign', 'The following sign represents..', 'Right reverse bend ', 'Left reverse bend ', 'Turn right and go ahead ', 'Right reverse bend '),
(171, 'uploads/sign384838695.jpg', 'sign', 'The following sign represents..', 'Right reverse bend ', 'Left reverse bend ', 'Turn left and go ahead ', 'Left reverse bend '),
(172, 'uploads/sign878981718.jpg', 'sign', 'The following sign represents..', 'Side road left ', 'Speed limit ', 'Axle weight limit ', 'Axle weight limit '),
(173, 'uploads/sign180932379.jpg', 'sign', 'The following sign represents..', 'Turn right ', 'Side road right ', 'Keep right ', 'Side road right '),
(174, 'uploads/sign159624041.jpg', 'sign', 'The following sign represents..', 'Major road ahead ', 'Cross road ahead ', 'Narrow road ahead ', 'Major road ahead '),
(175, 'uploads/sign589153192.jpg', 'sign', 'The following sign represents..', 'Turn right ', 'Turn left ', 'Round about ', 'Round about '),
(176, 'uploads/sign229778672.jpg', 'sign', 'The following sign represents..', 'Narrow road ahead ', 'Dangerous dip ', 'Ferry ', 'Dangerous dip '),
(177, 'uploads/sign599716824.jpg', 'sign', 'The following sign represents..', 'Guarded level cross ', 'Unguarded level cross', 'Barrier ahead ', 'Guarded level cross '),
(178, 'uploads/sign410194964.jpg', 'sign', 'The following sign represents..', 'Y-inter section left ', 'Y-inter section right ', 'Side road left ', 'Y-inter section left '),
(179, 'uploads/sign120089382.jpg', 'sign', 'The following sign represents..', 'Y-inter section left ', 'Y-inter section right ', 'Side road right ', 'Y-inter section right '),
(180, 'nosign', 'text', 'Can you give a motor vehicle \r\nfor driving to a person who \r\ndoes not have a valid \r\nlicence? ', 'yes, since the \r\ndriver solely is \r\nresponsible', 'No, since it is a serious \r\noffence', 'an offence only if the \r\nvehicle involves in an \r\naccident\r\n', 'No, since it is a serious \r\noffence\r\n'),
(181, 'nosign', 'text', 'Whether extra head light can \r\nbe provided other than the \r\nstandard head lights.', 'yes, adding extra \r\nlight brightens \r\nthe road', 'No, you should not', 'Can be provided on the \r\nbottom part of the vehicle\r\n', 'No, you should not'),
(182, 'nosign', 'text', 'Driving of a vehicle with the \r\npollution values exceeding \r\nthe limits.', 'is permitted in \r\nemergency', 'is an offence under law', 'is liable for a strict \r\nwarning from authorities', 'is an offence under law'),
(183, 'nosign', 'text', 'Abrupt braking shall not be \r\nresorted to', 'unless it is \r\nabsolutely \r\nnecessary', 'on down hil', 'on main road ', 'unless it is \r\nabsolutely \r\nnecessary'),
(184, 'nosign', 'text', 'Attaching or hanging of \r\nsomething on the rear view \r\nmirror is ', 'against \r\nregulation\r\n', 'permitted, depending upon \r\nits size', 'permitted if the object \r\ndoes not obstruct the \r\nview of the driver', 'against \r\nregulation\r\n'),
(185, 'nosign', 'text', 'While passing a procession, \r\nbody of troops or men at \r\nwork you should\r\n', 'proceed at \r\nregular speed\r\n', 'stop', 'proceed with not more \r\nthan 25 Km/hr and \r\ncarefully', 'proceed with not more \r\nthan 25 Km/hr and \r\ncarefully\r\n'),
(186, 'nosign', 'text', 'To stop a motor cycle', 'apply rear brakes \r\nand after slowing \r\napply front \r\nbrakes\r\n', 'apply both front and rear \r\nbrakes simultaneously\r\n', 'apply rear brake only', 'apply both front and rear \r\nbrakes simultaneously\r\n\r\n'),
(187, 'nosign', 'text', 'While travelling together \r\n(group riding) two or more \r\nmotor cycles can take the \r\nposition\r\n', 'side by side', 'maintain the lane in a \r\nstaggered position \r\nkeeping a proper distance \r\nbetween motor cycle', 'travel behind each other \r\nin a single line\r\n', 'maintain the lane in a \r\nstaggered position \r\nkeeping a proper distance \r\nbetween motor cycle\r\n\r\n'),
(188, 'nosign', 'text', 'While approaching a section \r\nof road way when there is \r\nloose sand or gravel, you \r\nshould\r\n\r\n', 'hit the area as \r\nfast as possible\r\n', 'go as slowly as possible', 'slow down change to \r\nhigh torque gears before \r\nentering\r\n\r\n', 'go as slowly as possible\r\n\r\n'),
(189, 'nosign', 'text', 'You can conserve fuel when \r\nyou drive the vehicle at\r\n', 'high speeds in \r\nhigh torque gears', 'high speed in low torque \r\ngears\r\n', 'a moderate uniform \r\nspeed of 45-55 KMPH in \r\ntop gear\r\n', 'a moderate uniform \r\nspeed of 45-55 KMPH in \r\ntop gear\r\n\r\n'),
(190, 'nosign', 'text', 'Exhaust of your vehicle \r\ncontains\r\n', 'oxygen, Nitrogen \r\nand hydrogen\r\n', 'carbon dioxide, nitrogen \r\nand water\r\n', 'carbon monoxide, \r\nnitrogen oxide, and hydro \r\ncarbon\r\n', 'carbon monoxide, \r\nnitrogen oxide, and hydro \r\ncarbon\r\n'),
(191, 'nosign', 'text', 'Failed to produce the P.U.C \r\nCertificate within 7 days of \r\nthe detection by the \r\nInspecting officer will attract', 'cancellation of \r\ndriving licence\r\n', 'Suspension of \r\nRegistration Certificates', 'Cancellation of Insurance \r\nCertificates\r\n', 'Suspension of \r\nRegistration Certificates'),
(192, 'nosign', 'text', 'Which is the poison gas \r\nemitted through the exhaust \r\ngas of petrol vehicle', 'ammonia\r\n', 'carbon monoxide', 'chlorine\r\n', 'carbon monoxide'),
(193, 'nosign', 'text', 'It is dangerous to drive with \r\nbald(worn out) tyres, since', 'the vehicle pick \r\nup speed quickly\r\n\r\n', 'It has little road grip', 'it has too much road grip\r\n', 'It has little road grip'),
(194, 'nosign', 'text', 'A vehicle with a temporary \r\nRegistration number plate \r\ncan be used on road\r\n', 'for 30 days', 'only for the purpose of \r\nregistration', 'for 6 months', 'only for the purpose of \r\nregistration'),
(195, 'nosign', 'text', 'Over speeding or dangerous \r\ndriving may\r\n', 'attracts a strict \r\nwarning for the \r\nauthorities\r\n', 'is an offence and is \r\npunishable ', 'attract other road users', 'is an offence and is \r\npunishable '),
(196, 'nosign', 'text', 'Clutch riding or Riding on \r\nclutch means', 'using clutch \r\nfrequently\r\n', 'keeping a foot on the \r\nclutch pedal', 'not using clutch at all ', 'keeping a foot on the \r\nclutch pedal'),
(197, 'nosign', 'text', 'When a vehicle is \r\napproaching with flashing \r\nred or blue light you should', 'keep to the left of \r\nthe road and \r\nslow down\r\n', 'stop where you are', 'ignore the vehicle ', 'keep to the left of \r\nthe road and \r\nslow down'),
(198, 'nosign', 'text', 'You can open the doors on \r\nthe traffic side(right side) \r\nwhen', 'traffic is clear', 'the car stop completely', 'after signalling other cars \r\nto side', 'traffic is clear'),
(199, 'nosign', 'text', 'To park in a space where \r\nthere is room for only one \r\ncar. You should', 'pull slowly into \r\nthe parking \r\nspace', 'park carefully into the \r\nparking space', 'park in front of the space', 'park carefully into the \r\nparking space'),
(200, 'nosign', 'text', 'When your vehicle skid while \r\ndriving, You should', 'turn steering both \r\nthe left and right', 'put on the brakes first', 'turn the steering wheel in \r\nthe direction of the car is \r\nskidding\r\n', 'turn the steering wheel in \r\nthe direction of the car is \r\nskidding\r\n'),
(201, 'nosign', 'text', 'Fitment of a multi toned horn \r\nin a vehicle is', 'allowed', 'not recommended since it \r\nis a costly alternative', 'is against law', 'is against law\r\n'),
(202, 'nosign', 'text', 'Flashing yellow traffic light \r\nmeans', 'continue at the \r\nsame speed', 'stop, if possible to do so. ', 'slow down and proceed \r\nwith caution', 'slow down and proceed \r\nwith caution'),
(203, 'nosign', 'text', 'When you observe a yellow \r\ntraffic light glowing in an \r\nintersection, you should ', 'hurry to cross', 'stop at the stop line', 'proceed across the \r\nintersection with caution', 'proceed across the \r\nintersection with caution'),
(204, 'nosign', 'text', 'proceed across the \r\nintersection with caution', 'continue into the \r\ncircular traffic at \r\nslow speed\r\n', 'give way to the vehicles \r\ncoming from the right \r\ndirection', 'use the outside lane only', 'give way to the vehicles \r\ncoming from the right \r\ndirection'),
(205, 'nosign', 'text', 'When you approach an \r\nintersection and you are in \r\nmain road without traffic \r\nlights, police man and traffic \r\nsigns, you should', 'slow down and \r\nbe cautious to \r\nnegotiate the \r\nintersection\r\n', 'come to full stop and \r\nproceed with caution', 'not change speed if the \r\nway is clear\r\n', 'slow down and \r\nbe cautious to \r\nnegotiate the \r\nintersection\r\n'),
(206, 'nosign', 'text', 'Emergency vehicles means', 'road rollers and \r\ncranes\r\n', 'mobile automobile work \r\nshop\r\n', 'ambulance and fire \r\nservice vehicles', 'ambulance and fire \r\nservice vehicles'),
(207, 'nosign', 'text', 'Drivers should not sound \r\nhorn ', 'in one way', 'on main road\r\n', 'at silent zone', 'at silent zone'),
(208, 'nosign', 'text', 'Registration numbers should \r\nbe illuminated by', 'red light', 'white light', 'blue light', 'white light'),
(212, '', 'text', 'ii', 'hh', 'jj', 'qq', 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `rtooffice`
--

CREATE TABLE `rtooffice` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contactno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rtooffice`
--

INSERT INTO `rtooffice` (`id`, `city`, `address`, `contactno`) VALUES
(1, 'GJ01-Ahmedabad', '3H8J+MHM, SH-41, Sastri Nagar, Hridaya Kunj, Old Wadaj, Ahmedabad, Gujarat 380027', '079 2991 4473'),
(2, 'GJ02-Mehsana', 'H9F8+PWX, RTO, Palavasna, Mehsana, Gujarat 384003', '02762 225 078'),
(3, 'GJO3-Rajkot', 'Rajkot, RTO road, Marketing Yard, Rajkot, Gujarat 360003', ' 079 2325 1363'),
(4, 'GJ04-Bhavnagar', 'Sardar Patel circle, Gadhechi Vadala, Bhavnagar, Gujarat 364003', '0278 242 4004'),
(5, 'GJ05-Surat', 'Hazira - Adajan Rd, Adajan Gam, Surat, Gujarat 395009', '079 2991 4473'),
(6, 'GJ06-Vadodara', 'National Hwy 8 Dumad Service Rd, near Golden Quartet, Darjeepura, Vadodara, Gujarat 390006', '0265 254 0016'),
(7, 'GJ07-Kheda(Nadiad)', 'Mile Road, Nadiad, Kheda, Gujarat - 387001', '+(91)-268-2550213'),
(8, 'GJ08-Banaskatha(Palanpur)', 'Balaram Road, Highway, Palanpur, Banaskantha, Gujarat - 385001', '+(91)-2742-252370\r\n\r\n'),
(9, 'GJ09-SabarKantha(Himatnagar)', 'Savgadh Vijapur Road, Himatnagar, Sabarkantha, Gujarat - 383001', '+(91)-2772-222597'),
(10, 'GJ10-Jamnagar', 'Lal Bangla Compound, Jamnagar, Gujarat - 388005', '+(91)-288-2672100'),
(11, 'GJ11-Junagadh', 'Majevadi Darvaja, Junagadh, Gujarat - 362001', '+(91)-285-2657609'),
(12, 'GJ12-Kutch(Kutch-Bhuj)', 'Madhaper Road, Near Military Hospital, Kuch-Bhuj, Gujarat - 370000', '+(91)-2832-251566'),
(13, 'GJ13-Surendranagar\r\n', 'C Block, MS Building, Khorali Road, Surendranagar, Gujarat - 363001', '+(91)-2752-283152'),
(14, 'GJ14-Amreli', 'MS Building, Rajmahel Compound, Rajula, Amreli, Gujarat - 365001', '+(91)-2792-223313'),
(15, 'GJ15-Valsad', 'Atakpardi, Dharanpur Road, Valsad, Gujarat - 369001', '+(91)-2632-226622'),
(16, 'GJ16-Bharuch', 'Nandevan Chockdi, Bharuch, Gujarat - 392001', '+(91)-2642-240653'),
(17, 'GJ17-Panchmahal(Godhara)', 'Near Commerce College, Godhra, Panchmahal, Gujarat - 389001', '+(91)-2672-242724'),
(18, 'GJ18-Gandhinagar', 'Near G0 Circle, Gandhinagar, Gujarat - 382421', '+(91)-79232-40954'),
(19, 'GJ19-Bardoli', 'Octroi Naka, opposite Power House, Bardoli, Gujarat 394601', ' 02622 223 457'),
(20, 'GJ20-Dahod', 'Dharbada Chockdi, Highway Bypass, Dahod, Gujarat - 389051', '+(91)-2673-243200\r\n\r\n'),
(21, 'GJ21-Navsari', 'Italva, Navsari, Gujarat - 396445', '+(91)-2638-250525'),
(22, 'GJ22-Narmada(Rajpipala)', 'Collector Office Building, Rajpepla, Narmada, Gujarat - 393145', '+(91)-2640-224948'),
(23, 'GJ23-Anand', 'Sevasadan Ground, DSP Office, Borsad Chockdi, Anand, Gujarat - 388001', '+(91)-2692-264800'),
(24, 'GJ24-Patan', 'GIDC Astet Building, Near Navjivan Hotel, Sidhpur Cross Road, Patan, Gujarat - 384265', '+(91)-2766-223100'),
(25, 'GJ25-Porbandar', 'Opposite DSP Office, New Kuvara, Vadia Road, Porbandar, Gujarat - 360575', '+(91)-286-2222215'),
(26, 'GJ26-Vyara', 'Panvadi, Bhenskatri Road, Vyara, Gujarat - 394650', '+(91)-2626-223390'),
(27, 'GJ27-Ahmedabad East', 'Mahadev Nagar Tekra, C-2, RTO Rd, Vastral, Ahmedabad, Gujarat 382418', '+(91)-79-27559695'),
(28, 'GJ30-Dang(Ahwa)', 'Ghandhi Colony, Ahwa, Gujarat 394710', 'NIL'),
(29, 'GJ31-Aravalli - Modasa', 'Mukund Vithal Bhumi Shah Pharmacy College, Modasahighway, Modasa', 'NIL'),
(30, 'GJ32-Girsomnath (veraval)', 'Near Birla Mandir Gir Somnath', 'NIL'),
(31, 'GJ33-Botad', 'Al noor Park, Military Road, opp. R T Office, Botad, Gujarat 364710', '\r\n+(91)-284-9255509'),
(32, 'GJ34-chhota Udepur', 'Chhota Udepur RTO, Near ST Workshop, Bodeli Road, Chhota Udepur, Gujarat, India\r\n', ' +91-2669-233023'),
(33, 'GJ35-Mahisagar(Lunawada)', 'Bhadar Sinchai Colony, Lunawada, Mahisagar - 389230 (Opposite S.T. Stand Lunawada)', 'NIL'),
(34, 'GJ36-Morbi', 'Morbi By Pass Road, Morbi Ho, Morbi - 363641 (Dharampur)', '0120 492 5505'),
(35, 'GJ37-Khambhaliya', 'ARTO Office, Opp: New ITI Jamnagar Highway, Khambhaliya-361305.', '02833-233300');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `mobile`, `pass`) VALUES
(1, 'arpita', 'arpita@gmail.com', '9898999999', 'arpita'),
(2, 'admin', 'admin@co.in', '9635821588', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `qid` (`qid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivingschool`
--
ALTER TABLE `drivingschool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `rtooffice`
--
ALTER TABLE `rtooffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivingschool`
--
ALTER TABLE `drivingschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `rtooffice`
--
ALTER TABLE `rtooffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `question` (`qid`),
  ADD CONSTRAINT `bookmark_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
