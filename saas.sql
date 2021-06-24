-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 05:42 PM
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
-- Database: `saas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `USERNAME` varchar(25) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `NAME`, `EMAIL`, `PASSWORD`) VALUES
('admin', 'ad min', 'admin@gmail.com', 'admin123'),
('galfo', 'fernando galfo', 'fernandogalfo@gmail.com', 'galfo123'),
('rodel', 'aldrin', 'rodel@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `filename` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`filename`) VALUES
('NEU_Main2.jpg'),
('NEU_Main.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `output` varchar(25) NOT NULL,
  `filename` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`output`, `filename`) VALUES
('events', 'events.png'),
('mainservice1icon', 'usericon1.png'),
('mainservice2icon', 'usericon2.png'),
('mainservice3icon', 'usericon3.png'),
('welcomeimg11', '1.1.png'),
('welcomeimg12', '1.2.png'),
('welcomeimg13', '1.3.png'),
('welcomeimg14', '1.4.png'),
('welcomeimg15', '1.5.png'),
('welcomeimg21', '2.1.png'),
('welcomeimg22', '2.2.png'),
('welcomeimg23', '2.3.png'),
('welcomeimg24', '2.4.png'),
('welcomeimg25', '2.5.png'),
('welcomeimg31', '3.1.png'),
('welcomeimg32', '3.2.png'),
('welcomeimg33', '3.3.png'),
('welcomeimg34', '3.4.png'),
('welcomeimg35', '3.5.png'),
('welcomeimg36', '3.6.png'),
('welcomeimg37', '3.7.png'),
('welcomeimg38', '3.8.png'),
('welcomeimg39', '3.9.png'),
('welcomeimg310', '3.10.png'),
('welcomeimg311', '3.11.png'),
('welcomeimg312', '3.12.png'),
('slide111', 'secB.png'),
('slide211', 'neu1.jfif'),
('slide112', 'secB.png'),
('slide212', 'neu1.jfif'),
('slide213', 'neu1.jfif'),
('slide114', 'secB.png'),
('slide214', 'neu1.jfif'),
('slide115', 'secB.png'),
('slide215', 'neu1.jfif'),
('slide113', 'secB.png'),
('slide121', 'secB.png'),
('slide221', 'neu1.jfif'),
('slide122', 'secB.png'),
('slide222', 'neu1.jfif'),
('slide123', 'secB.png'),
('slide223', 'neu1.jfif'),
('slide124', 'secB.png'),
('slide224', 'neu1.jfif'),
('slide125', 'secB.png'),
('slide225', 'neu1.jfif'),
('slide131', 'secB.png'),
('slide231', 'neu1.jfif'),
('slide132', 'secB.png'),
('slide232', 'neu1.jfif'),
('slide133', 'secB.png'),
('slide233', 'neu1.jfif'),
('slide134', 'secB.png'),
('slide234', 'neu1.jfif'),
('slide135', 'secB.png'),
('slide235', 'neu1.jfif'),
('slide136', 'secB.png'),
('slide236', 'neu1.jfif'),
('slide137', 'secB.png'),
('slide237', 'neu1.jfif'),
('slide138', 'secB.png'),
('slide238', 'neu1.jfif'),
('slide139', 'secB.png'),
('slide239', 'neu1.jfif'),
('slide1310', 'secB.png'),
('slide2310', 'neu1.jfif'),
('slide1311', 'secB.png'),
('slide2311', 'neu1.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `USER` varchar(25) NOT NULL,
  `KEYWORD` varchar(35) NOT NULL,
  `OLD` text NOT NULL,
  `NEW` text NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`USER`, `KEYWORD`, `OLD`, `NEW`, `TIMESTAMP`) VALUES
('gal', 'mainwelcometxtheader', 'WELCOME HUNTER', 'WELCOME HUNTERS', '2021-06-22 16:50:33'),
('ald', 'mainwelcometxtheader', 'WELCOME HUNTERS', 'WELCOMING HUNTERS', '2021-06-23 05:14:05'),
('galfo', 'mainheadertxt', 'STUDENTS AFFAIRS AND SERVICES', 'STUDENTS AFFAIRS AND SERVICESS', '2021-06-24 08:56:07'),
('galfo', 'mainheadertxt', 'STUDENTS AFFAIRS AND SERVICESS', 'STUDENTS AFFAIRS AND SERVICES', '2021-06-24 08:56:35'),
('galfo', 'events', 'events', 'NEU_Main.jpg', '2021-06-24 09:22:37'),
('galfo', 'events', 'NEU_Main.jpg', 'events.png', '2021-06-24 09:53:06'),
('galfo', 'mainslide', '**ADDED**', 'default', '2021-06-24 10:07:51'),
('galfo', 'mainslide', '**DELETED**', 'default', '2021-06-24 10:08:21'),
('galfo', 'mainslide', '**ADDED**', 'default', '2021-06-24 10:09:21'),
('galfo', 'mainslide', '**DELETED**', 'default', '2021-06-24 10:11:22'),
('galfo', 'mainslide', '**ADDED**', 'events.png', '2021-06-24 10:11:38'),
('galfo', 'mainslide', '**DELETED**', 'events.png', '2021-06-24 10:11:57'),
('galfo', 'mainservice1icon', 'usericon1.png', 'usericon2.png', '2021-06-24 10:15:01'),
('galfo', 'mainservice1icon', 'usericon2.png', 'usericon1.png', '2021-06-24 10:15:23'),
('galfo', 'mainservice2icon', 'usericon2.png', 'usericon1.png', '2021-06-24 10:18:34'),
('galfo', 'mainservice2icon', 'usericon1.png', 'usericon2.png', '2021-06-24 10:18:52'),
('galfo', 'mainservice3icon', 'usericon3.png', 'usericon3.png', '2021-06-24 10:19:05'),
('galfo', '1.1embedUrl', 'https://www.youtube.com/embed/-laHrCrn64U', 'https://www.youtube.com/embed/-laHrCrn64U', '2021-06-24 10:21:48'),
('galfo', 'welcomeimg11', '1.1.png', '1.1.png', '2021-06-24 10:33:29'),
('galfo', 'slide111', 'secB.png', 'secB.png', '2021-06-24 10:34:21'),
('galfo', 'slide211', 'neu1.jfif', 'neu1.jfif', '2021-06-24 10:34:38'),
('galfo', 'welcometextheader12', 'GUIDANCE AND COUNSELING SERVICES', 'GUIDANCE AND COUNSELING SERVICES', '2021-06-24 10:55:51'),
('galfo', 'welcometext12', 'New Era University is more than welcome to help you in every aspect and part of that is to see you grow not only academically, but also mentally and emotionally. The Guidance and Counseling Department offers consultation services and mental health awareness programs to students.', 'New Era University is more than welcome to help you in every aspect and part of that is to see you grow not only academically, but also mentally and emotionally. The Guidance and Counseling Department offers consultation services and mental health awareness programs to students.', '2021-06-24 10:55:59'),
('galfo', 'welcomeimg12', '1.2.png', '1.2.png', '2021-06-24 10:56:17'),
('galfo', 'slide112', 'secB.png', 'secB.png', '2021-06-24 10:56:39'),
('galfo', 'slide212', 'neu1.jfif', 'neu1.jfif', '2021-06-24 10:56:50'),
('galfo', 'department12', 'DEPARTMENT: OSAS', 'DEPARTMENT: OSAS', '2021-06-24 10:56:56'),
('galfo', 'mng12', 'MNG: Mr. John Doe', 'MNG: Mr. John Doe', '2021-06-24 10:57:02'),
('galfo', 'contact12', '+09961234567', '+09961234567', '2021-06-24 10:57:08'),
('galfo', 'email12', 'Johndoe@neu.edu', 'Johndoe@neu.edu', '2021-06-24 10:57:14'),
('galfo', '1.1embedUrl', 'https://www.youtube.com/embed/-laHrCrn64U', 'https://www.youtube.com/embed/-laHrCrn64U', '2021-06-24 10:57:19'),
('galfo', 'welcometextheader311', 'SOCIAL AND COMMUNITY INVOLVEMENT PROGRAMS', 'SOCIAL AND COMMUNITY INVOLVEMENT PROGRAMS', '2021-06-24 12:09:19'),
('galfo', 'slide1311', 'secB.png', 'secB.png', '2021-06-24 12:09:40'),
('galfo', 'welcometextheader25', 'Student Publication/ Yearbook', 'Student Publication/ Yearbook', '2021-06-24 12:09:49'),
('galfo', 'welcometextheader24', 'Student Discipline', 'Student Discipline', '2021-06-24 14:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `content` text NOT NULL,
  `output` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`content`, `output`) VALUES
('Lorem ipis dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna', 'mainwelcometxt'),
('STUDENTS AFFAIRS AND SERVICES', 'mainheadertxt'),
('WELCOMING HUNTERS', 'mainwelcometxtheader'),
('VISIT NEW ERA UNIVERSITY MAIN PAGE', 'mainneupagelink'),
('STUDENT WELFARE<br> SERVICES', 'mainservice1'),
('<br>STUDENT DEVELOPMENT', 'mainservice2'),
('INSTITUTIONAL <br> STUDENT PROGRAMS <br> AND SERVICES', 'mainservice3'),
('https://www.youtube.com/embed/-laHrCrn64U', '1.1embedUrl'),
('The Office of the Student Affairs and Services (OSAS) offers services to make you knowledgeable about all things university-related. Here are short introductory videos about the university for you to be ready for the new academic year.', 'welcometext11'),
('INFORMATION AND ORIENTATION SERVICES', 'welcometextheader11'),
('DEPARTMENT: OSAS', 'department11'),
('MNG: Mr. John Doe', 'mng11'),
('09961234567', 'contact11'),
('Johndoe@neu.edu.', 'email11'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl12'),
('New Era University is more than welcome to help you in every aspect and part of that is to see you grow not only academically, but also mentally and emotionally. The Guidance and Counseling Department offers consultation services and mental health awareness programs to students.', 'welcometext12'),
('GUIDANCE AND COUNSELING SERVICES', 'welcometextheader12'),
('DEPARTMENT: OSAS', 'department12'),
('MNG: Mr. John Doe', 'mng12'),
('+09961234567', 'contact12'),
('Johndoe@neu.edu', 'email12'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl13'),
('New Era University is here to guide and prepare you in every step towards employment through career consultations and various training programs. As early as studentship, there are a lot of career opportunities awaiting you.', 'welcometext13'),
('CAREER AND JOB PLACEMENT SERVICES', 'welcometextheader13'),
('DEPARTMENT: OSAS', 'department13'),
('MNG: Mr. John Doe', 'mng13'),
('+09961334567', 'contact13'),
('Johndoe@neu.edu', 'email13'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl14'),
(' It refers to services and programs that will cater economic needs of students such as, but not limited to student cooperatives, entrepreneurial, income generating projects, and savings', 'welcometext14'),
('ECONOMIC ENTERPRISE DEVELOPMENT', 'welcometextheader14'),
('DEPARTMENT: OSAS', 'department14'),
('MNG: Mr. John Doe', 'mng14'),
('+09961334567', 'contact14'),
('Johndoe@neu.edu', 'email14'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl15'),
('There will always be ground rules upon enrolling in a university. Know the university’s policies, rules and regulations for students through the NEU Student Handbook.', 'welcometext15'),
('STUDENT HANDBOOK DEVELOPMENT', 'welcometextheader15'),
('DEPARTMENT: OSAS', 'department15'),
('MNG: Mr. John Doe', 'mng15'),
('+09961534567', 'contact15'),
('Johndoe@neu.edu', 'email15'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl21'),
('Are you ready to feel the school spirit? Connect with the students in your college and be part of one of the 43 student organizations of the university. Get to know your student organization leaders and be up to date with the latest news and activities of your college.', 'welcometext21'),
('Student Organizations and Activities', 'welcometextheader21'),
('DEPARTMENT: OSAS', 'department21'),
('MNG: Mr. John Doe', 'mng21'),
('+09962134567', 'contact21'),
('Johndoe@neu.edu', 'email21'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl22'),
('DEPARTMENT: OSAS', 'department22'),
('MNG: Mr. John Doe', 'mng22'),
('+09962234567', 'contact22'),
('Johndoe@neu.edu', 'email22'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl23'),
('DEPARTMENT: OSAS', 'department23'),
('MNG: Mr. John Doe', 'mng23'),
('+09962334567', 'contact23'),
('Johndoe@neu.edu', 'email23'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl24'),
('DEPARTMENT: OSAS', 'department24'),
('MNG: Mr. John Doe', 'mng24'),
('+09962434567', 'contact24'),
('Johndoe@neu.edu', 'email24'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl25'),
('DEPARTMENT: OSAS', 'department25'),
('MNG: Mr. John Doe', 'mng25'),
('+09962534567', 'contact25'),
('Johndoe@neu.edu', 'email25'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl31'),
('DEPARTMENT: OSAS', 'department31'),
('MNG: Mr. John Doe', 'mng31'),
('+09963134567', 'contact31'),
('Johndoe@neu.edu', 'email31'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl32'),
('DEPARTMENT: OSAS', 'department32'),
('MNG: Mr. John Doe', 'mng32'),
('+09963234567', 'contact32'),
('Johndoe@neu.edu', 'email32'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl33'),
('DEPARTMENT: OSAS', 'department33'),
('MNG: Mr. John Doe', 'mng33'),
('+09963334567', 'contact33'),
('Johndoe@neu.edu', 'email33'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl34'),
('DEPARTMENT: OSAS', 'department34'),
('MNG: Mr. John Doe', 'mng34'),
('+09963434567', 'contact34'),
('Johndoe@neu.edu', 'email34'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl35'),
('DEPARTMENT: OSAS', 'department35'),
('MNG: Mr. John Doe', 'mng35'),
('+09963534567', 'contact35'),
('Johndoe@neu.edu', 'email35'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl36'),
('DEPARTMENT: OSAS', 'department36'),
('MNG: Mr. John Doe', 'mng36'),
('+09963634567', 'contact36'),
('Johndoe@neu.edu', 'email36'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl37'),
('DEPARTMENT: OSAS', 'department37'),
('MNG: Mr. John Doe', 'mng37'),
('+09963734567', 'contact37'),
('Johndoe@neu.edu', 'email37'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl38'),
('DEPARTMENT: OSAS', 'department38'),
('MNG: Mr. John Doe', 'mng38'),
('+09963834567', 'contact38'),
('Johndoe@neu.edu', 'email38'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl39'),
('DEPARTMENT: OSAS', 'department39'),
('MNG: Mr. John Doe', 'mng39'),
('+09963934567', 'contact39'),
('Johndoe@neu.edu', 'email39'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl310'),
('DEPARTMENT: OSAS', 'department310'),
('MNG: Mr. John Doe', 'mng310'),
('+099631034567', 'contact310'),
('Johndoe@neu.edu', 'email310'),
('https://www.youtube.com/embed/-laHrCrn64U', 'embedUrl311'),
('DEPARTMENT: OSAS', 'department311'),
('MNG: Mr. John Doe', 'mng311'),
('+099631134567', 'contact311'),
('Johndoe@neu.edu', 'email311'),
('Every student has the capability of being a student leader. The university offers programs and opportunities to enhance one’s leadership and management skills.', 'welcometext22'),
('Leadership Training', 'welcometextheader22'),
('Get to know NEU’s student government, the Central Student Council. Be updated with the university\'s biggest events hosted by the CSC.', 'welcometext23'),
('Student Council/ Government', 'welcometextheader23'),
('The Office of Student Discipline makes sure that everyone is observing proper conduct. Find the guidelines to conduct yourselves as NEU students.', 'welcometext24'),
('Student Discipline', 'welcometextheader24'),
('Hudyat is the official school publication of NEU. You can easily visit its page to always be informed about the happenings on-and-off campus.', 'welcometext25'),
('Student Publication/ Yearbook', 'welcometextheader25'),
('Hi there! Are you new to NEU? Ever have a question about enrolling that bugs your mind? The Admission, Scholarship, and Financial Assistance Office is here to help you become an NEU Hunter.', 'welcometext31'),
('ADMISSION SERVICES', 'welcometextheader31'),
('The Admission, Scholarship, and Financial Assistance Office offers university and government scholarships for qualified students.', 'welcometext32'),
('SCHOLARSHIPS AND FINANCIAL ASSISTANCE', 'welcometextheader32'),
('New Era University provides healthy, safe and adequate food within the campus grounds.', 'welcometext33'),
('FOOD SERVICES', 'welcometextheader33'),
('Health is wealth! Inasmuch as studying is important, it is essential for us to look after our own physical, mental, emotional, and social well-being. Keep yourself informed of primary health and safety protocols and look forward to health and wellness programs.', 'welcometext34'),
('HEALTH SERVICES', 'welcometextheader34'),
('our safety is NEU’s priority! The university takes pride on providing a safe and secure environment for its academic community. Get ahead of safety and security guidelines and information on disaster risk reduction and management. ', 'welcometext35'),
('SAFETY AND SECURITY SERVICES', 'welcometextheader35'),
('Want to feel the the campus vibes? Check out the university residences.', 'welcometext36'),
('STUDENT HOUSING AND RESIDENTIAL', 'welcometextheader36'),
('Are you a foreign student? Don’t worry, students of any race and nationality are welcome at NEU! If you need assistance on admission requirements and other student–related documents, the Office of International Student Affairs is here to help you out.', 'welcometext37'),
('FOREIGN/ INTERNATIONAL STUDENTS SERVICES', 'welcometextheader37'),
('True to its commitment of inclusion, New Era University offers programs specifically designed to cater to the needs of students with special needs.', 'welcometext38'),
('SERVICES FOR SPECIFIC STUDENTS GUIDANCE', 'welcometextheader38'),
('Do you have a thing for the arts that you want to share to the public? Or perhaps you want to try something new? New Era University has a host of art-related programs and clubs.', 'welcometext39'),
('CULTURAL ARTS PROGRAMS', 'welcometextheader39'),
('Feel the Hunter spirit by joining the university\'s various varsities such as basketball, volleyball, weightlifting, football, archery, and others. ', 'welcometext310'),
('SPORTS DEVELOPMENT PROGRAMS', 'welcometextheader310'),
('New Era University social and community involvement programs', 'welcometext311'),
('SOCIAL AND COMMUNITY INVOLVEMENT PROGRAMS', 'welcometextheader311');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
