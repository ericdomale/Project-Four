-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 13, 2021 at 11:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mossystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `annid` int(11) NOT NULL,
  `anndate` date NOT NULL,
  `anntype` set('Celebration','Meeting','Ceremonial','Mourning','Others') NOT NULL,
  `anninfo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`annid`, `anndate`, `anntype`, `anninfo`) VALUES
(1, '2021-09-25', 'Celebration', '1.Child Dedication this coming Sunday and Baptism\r\n2.Thanksgiving Service for Newly Wed Couples'),
(2, '2021-09-04', 'Meeting', '1.Shepherd School Meeting with Pastor'),
(3, '2021-09-18', 'Meeting', '1.Meeting with New Members by P.Assistant');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `aid` int(11) NOT NULL,
  `assetdate` date NOT NULL,
  `assetname` varchar(500) NOT NULL,
  `assetamount` decimal(15,2) NOT NULL,
  `assetlocation` varchar(500) NOT NULL,
  `assetspecs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`aid`, `assetdate`, `assetname`, `assetamount`, `assetlocation`, `assetspecs`) VALUES
(1, '2021-10-05', 'Bass Drums', '670.00', 'Main Auditorium', '2x large drum'),
(2, '2021-11-24', 'Pulpit', '600.00', 'Main Auditorium', 'Frosted glass');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `atid` int(11) NOT NULL,
  `atdate` date NOT NULL,
  `atmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `memtotal` varchar(500) NOT NULL,
  `vistotal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atid`, `atdate`, `atmonth`, `memtotal`, `vistotal`) VALUES
(1, '2021-09-25', 'September', '150', '40'),
(2, '2021-09-24', 'September', '200', '12'),
(3, '2021-01-18', 'January', '5', '16'),
(4, '2021-08-01', 'August', '345', '122'),
(5, '2021-09-25', 'November', '150', '40'),
(6, '2021-07-31', 'July', '555', '111'),
(9, '2021-09-27', 'January', '40', '15'),
(10, '2021-09-28', 'September', '100', '80'),
(11, '2021-09-28', 'September', '70', '42');

-- --------------------------------------------------------

--
-- Table structure for table `baptisms`
--

CREATE TABLE `baptisms` (
  `baptid` int(11) NOT NULL,
  `baptname` varchar(500) NOT NULL,
  `baptdate` date NOT NULL,
  `baptizer` varchar(500) NOT NULL,
  `baptvenue` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baptisms`
--

INSERT INTO `baptisms` (`baptid`, `baptname`, `baptdate`, `baptizer`, `baptvenue`) VALUES
(2, 'Edwina Rhule', '2021-10-07', 'Rev.Obed Kwao', 'Church Premises'),
(3, 'Jane Doe', '2021-10-08', 'Rev.Mrs.Kwao', 'Madina Estates');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `bkgprogram` varchar(255) NOT NULL,
  `bkgdate` date NOT NULL,
  `bkgvenue` text NOT NULL,
  `bkgemail` varchar(255) NOT NULL,
  `rsvp` varchar(255) NOT NULL,
  `bkgcontact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bkgprogram`, `bkgdate`, `bkgvenue`, `bkgemail`, `rsvp`, `bkgcontact`) VALUES
(1, 'Hospital Visitation', '2021-10-14', 'Accra', 'mabel@ymail.com', 'Mabel Osei', '0233456777'),
(2, 'Baby Dedication', '2021-10-13', 'Church Auditorium', 'zuiybel@ymail.com', 'Seth Ashong', '023345600');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bkid` int(11) NOT NULL,
  `bktitle` varchar(500) NOT NULL,
  `pubstatus` set('First Published','Second Published','Third Published','Fourth Published','Fifth Published') NOT NULL,
  `bkdate` date NOT NULL,
  `quantity` set('First Quantity','Second Quantity','Third Quantity','Fourth Quantity','Fifth Quantity') NOT NULL,
  `bktotal` text NOT NULL,
  `isbn` text NOT NULL,
  `pubcost` decimal(15,2) NOT NULL,
  `retamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bkid`, `bktitle`, `pubstatus`, `bkdate`, `quantity`, `bktotal`, `isbn`, `pubcost`, `retamount`) VALUES
(1, 'Amazing Grace', 'First Published', '2021-10-01', 'First Quantity', '1000', '080-900-789', '300.00', '50.00'),
(7, 'Hard Sayings', 'Second Published', '2021-12-07', 'Second Quantity', '250', '080-098-122', '4500.00', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `cid` int(11) NOT NULL,
  `certdate` date NOT NULL,
  `certname` varchar(500) NOT NULL,
  `certype` set('Baptism','Membership','Baby Dedication','Pastoral','Leadership (ADLT)','Marriage') NOT NULL,
  `awdate` date NOT NULL,
  `certschool` set('School of Marriage','Shepherds School','Bible School','Ministry/Discipleship','Others') NOT NULL,
  `certduration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`cid`, `certdate`, `certname`, `certype`, `awdate`, `certschool`, `certduration`) VALUES
(3, '2021-10-01', 'Mary Sarkwa', 'Membership', '2021-10-06', 'Shepherds School', '2 Months'),
(4, '2021-10-01', 'Vivanne Medieama', 'Pastoral', '2021-10-07', 'Ministry/Discipleship', '6 Months');

-- --------------------------------------------------------

--
-- Table structure for table `childlist`
--

CREATE TABLE `childlist` (
  `cid` int(11) NOT NULL,
  `childno` varchar(255) NOT NULL,
  `childname` varchar(500) NOT NULL,
  `childbirth` date NOT NULL,
  `agegroup` set('0-2yrs','3-5yrs','6-9yrs','10-12yrs','13-19yrs','20-above') NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `childfather` varchar(500) NOT NULL,
  `childmother` varchar(500) NOT NULL,
  `childaddress` text NOT NULL,
  `childschool` varchar(500) NOT NULL,
  `childclass` varchar(255) NOT NULL,
  `childteacher` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childlist`
--

INSERT INTO `childlist` (`cid`, `childno`, `childname`, `childbirth`, `agegroup`, `gender`, `childfather`, `childmother`, `childaddress`, `childschool`, `childclass`, `childteacher`) VALUES
(1, 'MCH-01', 'Peter Mensah', '2021-10-07', '3-5yrs', 'Male', 'John Mensah', 'Sarah Mensah', 'P.O.BOX 12 Madina', 'Presec Primary', 'Class 3', 'Jonathan Asiedu'),
(2, 'MCH-02', 'Dora Nkrumah', '2021-10-06', '10-12yrs', 'Female', 'Anthony Nkrumah', 'Jane Nkrumah', 'PMB 456, Tema', 'Montessori School', 'Class 6', 'Francis Amu'),
(4, 'MCH-03', 'Mercy Ama', '2021-10-08', '13-19yrs', 'Female', 'Anthony Babin', 'Sarah Connor', 'PMB 456, Tamale', 'Montessori School', 'Class 6', 'Francis Amu'),
(5, 'MCH-04', 'Selassie Tay', '2021-10-01', '13-19yrs', 'Male', 'Anthony Babin', 'Sarah Connor', 'PMB 456, Tamale', 'Montessori School', 'Class 4', 'Madam Regina Tetteh'),
(6, 'MCH-05', 'Helen Osei', '2021-11-30', '0-2yrs', 'Female', 'Peter Osei', 'Mercy Osei', 'Accra', 'Tema Creche', 'Nursery 1', 'Madam Hawa');

-- --------------------------------------------------------

--
-- Table structure for table `chprograms`
--

CREATE TABLE `chprograms` (
  `chprogid` int(11) NOT NULL,
  `chprogdate` date NOT NULL,
  `chprogname` set('Conferences','Shepherds Camp','Church Workers Camp','Easter','Christmas Service','31st Dec','Pastors Conference','Thanksgiving Service') NOT NULL,
  `chprogrevenue` decimal(15,2) NOT NULL,
  `chprogexpend` decimal(15,2) NOT NULL,
  `supdef` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chprograms`
--

INSERT INTO `chprograms` (`chprogid`, `chprogdate`, `chprogname`, `chprogrevenue`, `chprogexpend`, `supdef`) VALUES
(1, '2021-09-25', 'Conferences', '280.00', '158.00', '10670.00'),
(2, '2021-09-23', 'Shepherds Camp', '20.00', '100.00', '245.00'),
(3, '2021-09-03', 'Church Workers Camp', '145.00', '333.00', '900.00');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `cid` varchar(250) NOT NULL,
  `company` varchar(500) NOT NULL,
  `owner` varchar(500) NOT NULL,
  `contact` text NOT NULL,
  `function` text NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `cid`, `company`, `owner`, `contact`, `function`, `location`) VALUES
(1, 'C-01', 'Latex Foam Limited', 'Sampson Atoo', '05444446', 'Production of mattress and foams', 'Accra'),
(2, 'C-02', 'Melcolm Ghana Limited', 'Singh Khan', '023380099', 'Retail of Consumer Goods and Products', 'Tema'),
(3, 'C-03', 'Bprint House', 'Nii Ayi', '054440893', 'Printing of Flyers and Banners', 'Spintex Road'),
(4, 'C-04', 'Fanmilk Ghana Limited', 'Sampson Atoo', '05444446', 'Production of Ice Cream and Yoghurt', 'Circle'),
(5, 'C-05', 'Antenna Group', 'Eric Domale', '0268077657', 'Software Development ', 'Accra'),
(6, 'C-06', 'James Plumbing Enterprise', 'James Ansah', '020987654', 'Sales of Plumbing Materials', 'Teshie');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `eventname` varchar(500) NOT NULL,
  `eventvenue` varchar(500) NOT NULL,
  `eventkind` set('Celebration','Mourning','Ceremonial') NOT NULL,
  `eventype` varchar(500) NOT NULL,
  `dresscode` set('Casual','Smart Casual','Strictly Official') NOT NULL,
  `eventcolours` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `eventdate`, `eventname`, `eventvenue`, `eventkind`, `eventype`, `dresscode`, `eventcolours`) VALUES
(2, '2021-11-24', 'Esther Birthday', 'Accra', 'Celebration', '--Select One--', 'Strictly Official', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expid` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `expmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `expname` varchar(255) NOT NULL,
  `expgory` set('Fuel','Sundry','Salaries','Internet','Air Condition','Office Stationery','General Maintenance','Communion','Phone Bills','Water','Others') NOT NULL,
  `paytm` set('Cash','Mobile Money','Bank Transfer','Debit Card','Bank Deposit') NOT NULL,
  `expamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expid`, `expdate`, `expmonth`, `expname`, `expgory`, `paytm`, `expamount`) VALUES
(5, '2021-09-29', 'September', 'Bottle Water', 'Water', 'Cash', '300.00'),
(6, '2021-09-29', 'September', 'Pastor Car Fuel', 'Fuel', 'Mobile Money', '600.00'),
(7, '2021-11-24', 'November', 'Books', 'Office Stationery', 'Cash', '880.00');

-- --------------------------------------------------------

--
-- Table structure for table `indietithes`
--

CREATE TABLE `indietithes` (
  `id` int(11) NOT NULL,
  `memberno` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `contact` text NOT NULL,
  `titdate` date NOT NULL,
  `titmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `titamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indietithes`
--

INSERT INTO `indietithes` (`id`, `memberno`, `fullname`, `contact`, `titdate`, `titmonth`, `titamount`) VALUES
(1, 'MOS-01', 'John Doe', '02421010', '2021-11-08', 'December', '9008.00'),
(5, 'MOS-20', 'Mary Domale', '054118923', '2021-11-25', 'November', '7800.00'),
(18, 'MOS-20', 'Mary Domale', '026771098', '2021-11-25', 'November', '400.00');

-- --------------------------------------------------------

--
-- Table structure for table `jointithes`
--

CREATE TABLE `jointithes` (
  `id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `company` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `contact` text NOT NULL,
  `titdate` date NOT NULL,
  `titmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `titamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jointithes`
--

INSERT INTO `jointithes` (`id`, `cid`, `company`, `fullname`, `contact`, `titdate`, `titmonth`, `titamount`) VALUES
(1, 'C-01', 'Latex Foam Limited', 'John Doe', '024200001', '2021-12-07', 'December', '5800.00'),
(2, 'C-02', 'Melcom Ghana Limited', 'Grace Omea', '05444446', '2021-12-07', 'December', '770.00');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `ltid` varchar(250) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `appdate` date NOT NULL,
  `school` set('School of Marriage','Shepherds School','Bible School','Ministry/Discipleship') NOT NULL,
  `qualify` text NOT NULL,
  `trainings` text NOT NULL,
  `lectstatus` set('Part-Time','Full-Time','Visiting','Volunteer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `ltid`, `fullname`, `appdate`, `school`, `qualify`, `trainings`, `lectstatus`) VALUES
(2, 'MOS-02', 'Jane Doe', '2021-12-07', 'Shepherds School', 'HND Diploma Education', 'ICGC Camp', 'Full-Time'),
(1, 'MOS-04', 'Tetteh Frank', '2021-12-07', 'School of Marriage', 'HND Diploma Education', 'None', 'Part-Time');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'overseer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'Pastor', 'mos123', 'overseer'),
(2, 'Admin', 'admin123', 'admin'),
(3, 'Finance', 'fin123', 'finance'),
(4, 'Assistant', 'assist123', 'assistant');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `id` int(11) NOT NULL,
  `erlid` varchar(250) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `bdate` date NOT NULL,
  `erldate` date NOT NULL,
  `duration` text NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `erlmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `contact` text NOT NULL,
  `maddress` text NOT NULL,
  `cstatus` set('Church Member','Non-member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `erlid`, `fullname`, `bdate`, `erldate`, `duration`, `startdate`, `enddate`, `erlmonth`, `contact`, `maddress`, `cstatus`) VALUES
(1, 'MOS-01', 'John Doe', '2021-11-30', '2021-11-30', '1 month', '2021-12-07', '2021-12-31', 'November', '024567899', 'GE-99899', 'Church Member'),
(2, 'MOS-04', 'Tetteh Frank', '2021-12-01', '2021-12-07', '1 month', '2021-12-07', '2021-12-31', 'December', '055776432', 'GE-0987', 'Non-member');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `memberno` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `memdate` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `status` set('Single','Married','Divorced','Widow','Widower') NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `maddress` text NOT NULL,
  `paddress` text NOT NULL,
  `work` varchar(255) NOT NULL,
  `chgroup` set('Protocol','Ushers','Prayer','Choir','Instrumentals') NOT NULL,
  `cell` set('Overcomers','Open Heavens','Breakthrough','Bread of Life','Dunamis','Wellspring','Passion','Holy Hill','Good Shepherd','Morning Star') NOT NULL,
  `since` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `memberno`, `fullname`, `memdate`, `gender`, `status`, `email`, `contact`, `maddress`, `paddress`, `work`, `chgroup`, `cell`, `since`) VALUES
(1, 'MOS-01', 'John Doe', '2021-09-18', 'Male', 'Single', 'john@gmail.com', '024533709', 'Accra, Madina', 'GE-123', 'Banker', 'Protocol', 'Overcomers', '2001'),
(3, 'MOS-02', 'Jane Doe', '2021-09-17', 'Female', 'Single', 'jane@gmail.com', '0244567890', 'Tema, Com 1', 'GA-2345', 'Trader', 'Ushers', 'Open Heavens', '1990'),
(4, 'MOS-03', 'Mark Daniel', '2021-09-17', 'Male', 'Married', 'mark@ymail.com', '023333333', 'Madina', 'GE-0033', 'Teacher', 'Prayer', 'Breakthrough', '1991'),
(5, 'MOS-04', 'Tetteh Frank', '2021-09-18', 'Male', 'Divorced', 'frank@ymail.com', '02766666', 'Madina', 'GE-00389', 'Teacher', 'Instrumentals', 'Bread of Life', '2000'),
(6, 'MOS-05', 'Grace Omea', '2021-09-01', 'Female', 'Married', 'grace@gmail.com', '02766689', 'Madina', 'GE-0011', 'Student', 'Protocol', 'Dunamis', '1991'),
(7, 'MOS-06', 'Eddie Blay', '2021-09-18', 'Male', 'Married', 'eddie@gmai.com', '23344444', 'Accra', 'GE-1234', 'Painter', 'Ushers', 'Wellspring', '2021'),
(8, 'MOS-07', 'Sarah Herbert', '2021-09-08', 'Female', 'Married', 'uddie@gmail.com', '23344444', 'Accra', 'GE-1234', 'Painter', 'Protocol', 'Passion', '2021'),
(9, 'MOS-08', 'Dora Ajeyi', '2021-09-18', 'Female', 'Single', 'uddie@gmail.com', '23344444', 'Accra', 'GE-1234', 'Painter', 'Protocol', 'Holy Hill', '2021'),
(10, 'MOS-09', 'Erling Haaland', '1992-08-10', 'Male', 'Single', 'haaland@live.com', '0268047657', 'Dortmund', 'KM-1238', 'Footballer', 'Instrumentals', 'Good Shepherd', '2017'),
(11, 'MOS-10', 'Vivianne Medieama', '1991-08-22', 'Female', 'Married', 'med@outlook.com', '024533701', 'Amsterdam', 'BA-2345', 'Footballer', 'Choir', 'Morning Star', '2011'),
(12, 'MOS-11', 'Martins Indi', '1993-03-11', 'Male', 'Divorced', 'indi@ymail.com', '0255309999', 'Kasoa', 'KE-1222', 'Civil Servant', 'Protocol', 'Overcomers', '2011'),
(13, 'MOS-12', 'Mary Domale', '1957-12-20', 'Female', 'Divorced', 'mary@gmail.com', '0242533709', 'Woe-Keta', 'BA-2345', 'Caterer', 'Prayer', 'Open Heavens', '2012'),
(14, 'MOS-13', 'Edwin Tsatsu', '1994-01-08', 'Male', 'Single', 'tsatsu@ymail.com', '0255309997', 'Amsterdam', 'GA-8770', 'Businessman', 'Protocol', 'Breakthrough', '2011'),
(15, 'MOS-14', 'Naa May', '1980-11-09', 'Female', 'Widow', 'may@outlook.com', '024253322', 'Kasoa', 'GA-8770', 'Civil Servant', 'Prayer', 'Bread of Life', '2020'),
(16, 'MOS-15', 'Maroins Indis', '1998-01-22', 'Male', 'Single', 'hindi@ymail.com', '0255309999', 'Kasoa', 'GA-8770', 'Caterer', 'Choir', 'Dunamis', '2011'),
(17, 'MOS-16', 'Peter Pan', '2021-09-21', 'Male', 'Single', 'iyyndi@ymail.com', '0242533709', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Wellspring', '2011'),
(19, 'MOS-17', 'Oko Kofi', '2021-09-21', 'Male', 'Married', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Passion', '2020'),
(20, 'MOS-18', 'Kevin De Bruyne', '2021-08-30', 'Male', 'Married', 'kev@gmail.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Ushers', 'Holy Hill', '2011'),
(21, 'MOS-19', 'Vivianne Medieama', '2021-09-21', 'Female', 'Divorced', 'hindi@ymail.com', '0255309999', 'Kasoa', 'BA-2345', 'Civil Servant', 'Protocol', 'Good Shepherd', '2011'),
(22, 'MOS-20', 'Mary Domale', '2021-09-21', 'Female', 'Single', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Morning Star', '2011'),
(23, 'MOS-21', 'Lionel Messi', '2021-09-03', 'Male', 'Single', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Caterer', 'Protocol', 'Overcomers', '2020'),
(24, 'MOS-22', 'Jack Grealish', '2021-09-21', 'Male', 'Single', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Open Heavens', '2011'),
(25, 'MOS-23', 'Francis Atikpo', '2021-09-21', 'Male', 'Married', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Breakthrough', '2011'),
(26, 'MOS-24', 'Jack Grealish', '2021-09-21', 'Male', 'Single', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Dunamis', '2020'),
(27, 'MOS-25', 'Lionel Osei', '2021-09-21', 'Male', 'Married', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Wellspring', '2011'),
(28, 'MOS-26', 'Erico Doe', '2021-09-21', 'Male', 'Married', 'er@live.com', '1234567', 'London', 'BA-2345', 'Businessman', 'Instrumentals', 'Passion', '2020'),
(29, 'MOS-27', 'Flavia Nuru', '2021-09-21', 'Female', 'Single', 'hindi@ymail.com', '0242533709', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Breakthrough', '2011'),
(30, 'MOS-28', 'Roberto Fimino', '2021-09-24', 'Male', 'Married', 'tsatsu@ymail.com', '0255309999', 'London', 'GA-8770', 'Businessman', 'Protocol', 'Holy Hill', '2011'),
(31, 'MOS-29', 'Jack Grealish', '2021-09-24', 'Male', 'Single', 'hindi@ymail.com', '0242533709', 'Kasoa', 'BA-2345', 'Civil Servant', 'Ushers', 'Good Shepherd', '2012'),
(32, 'MOS-30', 'Stella Owuwsu', '2021-09-21', 'Female', 'Widow', 'mary@gmail.com', '1234567', 'Woe-Keta', 'KE-1222', 'Caterer', 'Choir', 'Morning Star', '2020'),
(33, 'MOS-31', 'Joao Pedro', '2021-09-22', 'Male', 'Single', 'joao@ymail.com', '233450912', 'Madrid', 'CE-0871', 'Bus Driver', 'Instrumentals', 'Holy Hill', '1999'),
(34, 'MOS-32', 'Joao Felix', '2021-09-23', 'Male', 'Married', 'jack@gmail.com', '233455655', 'Woe-Keta', 'CE-0871', 'Caterer', 'Protocol', 'Overcomers', '2011'),
(35, 'MOS-33', 'Ralph Kotei', '2021-09-24', 'Male', 'Married', 'hindi@ymail.com', '0242533709', 'Woe-Keta', 'GA-8770', 'Civil Servant', 'Protocol', 'Open Heavens', '2011'),
(36, 'MOS-34', 'Abena Donkor', '2021-09-01', 'Male', 'Widower', 'med@outlook.com', '0255309999', 'Kasoa', 'BA-2345', 'Civil Servant', 'Protocol', 'Breakthrough', '2020'),
(37, 'MOS-35', 'Martins Indi', '2021-09-17', 'Male', 'Married', 'hindi@ymail.com', '0255309999', 'Woe-Keta', 'BA-2345', 'Civil Servant', 'Ushers', 'Bread of Life', '2011'),
(38, 'MOS-36', 'Charles Xavier', '2021-09-05', 'Male', 'Single', 'hindi@ymail.com', '0242533709', 'Woe-Keta', 'BA-2345', 'Businessman', 'Ushers', 'Dunamis', '2020'),
(39, 'MOS-37', 'Jack Dorsey', '2021-09-19', 'Male', 'Single', 'hindi@ymail.com', '0255309999', 'Kasoa', 'BA-2345', 'Caterer', 'Protocol', 'Holy Hill', '2011'),
(40, 'MOS-38', 'Rhoda Domale', '2021-09-04', 'Female', 'Married', 'mary@gmail.com', '0255309997', 'London', 'BA-2345', 'Goalkeeper', 'Ushers', 'Passion', '1999'),
(41, 'MOS-39', 'Viviann Shika', '2021-09-23', 'Female', 'Married', 'indi@ymail.com', '0242533709', 'Woe-Keta', 'BA-2345', 'Businessman', 'Protocol', 'Wellspring', '2011'),
(42, 'MOS-40', 'Tsikata Tsatsu', '2021-09-12', 'Male', 'Single', 'hindi@ymail.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Good Shepherd', '2020'),
(43, 'MOS-41', 'Edwin Cephas', '2021-09-11', 'Male', 'Married', 'med@outlook.com', '0242533709', 'London', 'GA-8770', 'Businessman', 'Protocol', 'Morning Star', '2020'),
(44, 'MOS-42', 'Felix Indi', '2021-09-04', 'Male', 'Married', 'indi@ymail.com', '0242533709', 'Woe-Keta', 'BA-2345', 'Caterer', 'Protocol', 'Overcomers', '2011'),
(45, 'MOS-43', 'Asamoah Addo', '2021-09-04', 'Male', 'Single', 'med@outlook.com', '0242533709', 'Woe-Keta', 'GA-8770', 'Caterer', 'Protocol', 'Open Heavens', '2011'),
(46, 'MOS-44', 'Giftson   William', '2021-09-04', 'Male', 'Single', 'hindi@ymail.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Breakthrough', '2011'),
(47, 'MOS-45', 'Harriet  Ofori', '2021-09-05', 'Female', 'Single', 'med@outlook.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Bread of Life', '2011'),
(48, 'MOS-46', 'Obed Kwao', '2021-09-25', 'Male', 'Married', 'obed@ymail.com', '0242533709', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Dunamis', '2011'),
(49, 'MOS-47', 'Theo Sunday', '2021-09-25', 'Male', 'Single', 'theo@gmail.com', '234112076', 'Abuja', 'NA-0074', 'Ministrel', 'Choir', 'Wellspring', '2008'),
(50, 'MOS-48', 'Micheal Orokpo', '2021-09-04', 'Male', 'Married', 'orokpo@ymail.com', '02555688', 'Lagos', 'LE-899', 'Pastor', 'Prayer', 'Morning Star', '2008'),
(51, 'MOS-49', 'Mark Cuban', '2021-09-01', 'Male', 'Single', 'mark@gmail.com', '0255309999', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Passion', '2008'),
(52, 'MOS-50', 'Sarah Owusu', '2021-09-02', 'Female', 'Married', 'hindi@ymail.com', '0255309999', 'Kasoa', 'BA-2345', 'Caterer', 'Prayer', 'Holy Hill', '2012'),
(53, 'MOS-51', 'Dora Kerr', '1995-08-22', 'Female', 'Single', 'dora@outlook.com', '23345678', 'Brussels', 'GR-9001', 'Teacher', 'Ushers', 'Wellspring', '2008'),
(54, 'MOS-52', 'Jadon Sancho', '2021-09-16', 'Male', 'Single', 'sancho@ymail.com', '0255309997', 'Dortmund', 'KE-1222', 'Businessman', 'Instrumentals', 'Dunamis', '1999'),
(55, 'MOS-53', 'Martha Nkrumah', '2021-09-27', 'Female', 'Divorced', 'martha@ymail.com', '02667890', 'Tema', 'TS-1234', 'Actress', 'Choir', 'Bread of Life', '2001'),
(56, 'MOS-54', 'Paul Oduro', '2021-09-27', 'Male', 'Widower', 'paul@live.com', '02234567', 'Cape Coast', 'CA-8770', 'Banker', 'Instrumentals', 'Breakthrough', '2001'),
(57, 'MOS-55', 'Nathan Bassey', '2021-09-27', 'Male', 'Married', 'bassey@yahoo.com', '0255309999', 'Lagos', 'LE-899', 'Singer', 'Protocol', 'Open Heavens', '2001'),
(58, 'MOS-56', 'Emma Katamani', '2021-09-27', 'Male', 'Single', 'kata@ymail.com', '1234567', 'Woe-Keta', 'GA-8770', 'Evangelist', 'Protocol', 'Overcomers', '2020'),
(59, 'MOS-57', 'Kehinde Ghattie', '2021-09-05', 'Male', 'Married', 'ghat@gmail.com', '0255309997', 'Kasoa', 'GA-8770', 'Civil Servant', 'Protocol', 'Good Shepherd', '2001'),
(60, 'MOS-58', 'Kelvin Laryea', '2021-09-27', 'Male', 'Single', 'laryea@ymail.com', '0204156789', 'Spintex', 'GS-1235', 'Bodybuilder', 'Instrumentals', 'Passion', '2011'),
(61, 'MOS-59', 'Psalm Cole', '2000-11-01', 'Male', 'Divorced', 'cole@gmail.com', '020988886', 'Kumasi', 'KS-1222', 'Student', 'Prayer', 'Open Heavens', '2004'),
(62, 'MOS-60', 'Patricia Laryea', '2021-09-27', 'Female', 'Single', 'pat@ymail.com', '0204156789', 'Spintex', 'GS-1235', 'Trader', 'Protocol', 'Morning Star', '2011'),
(63, 'MOS-61', 'Ivy Krachi', '2021-09-28', 'Female', 'Single', 'krachi@ymail.com', '024567888', 'Oyarifa', 'GE-0833', 'Trader', 'Protocol', 'Good Shepherd', '2009'),
(64, 'MOS-62', 'Ernest Andoh', '2021-09-28', 'Male', 'Single', 'enrstachi@ymail.com', '02425000897', 'Oyarifa', 'GE-0833', 'Trader', 'Ushers', 'Holy Hill', '2009'),
(65, 'MOS-63', 'Andrea Syliva', '2021-08-31', 'Female', 'Married', 'andreachi@ymail.com', '02425000897', 'Kpone', 'GE-0807', 'Baker', 'Prayer', 'Dunamis', '2009'),
(66, 'MOS-64', 'Luke Skywalker', '2021-09-01', 'Male', 'Married', 'sky@ymail.com', '026777123', 'Bonn', 'GE-0102', 'Tourist', 'Choir', 'Dunamis', '2002'),
(67, 'MOS-65', 'Nina Jerome', '2021-09-02', 'Female', 'Single', 'nina@gmail.com', '024456789', 'London', 'GE-0102', 'Tourist', 'Ushers', 'Overcomers', '2002');

-- --------------------------------------------------------

--
-- Table structure for table `offerings`
--

CREATE TABLE `offerings` (
  `offid` int(11) NOT NULL,
  `offweek` varchar(50) NOT NULL,
  `offdate` date NOT NULL,
  `offprogram` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `offertype` set('Sunday Offering','Seed Offering','Thanksgiving','Special Offering','First Fruit','Sacrifice Offering','Tuesday Offering','Friday Night Offering') NOT NULL,
  `ofamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offerings`
--

INSERT INTO `offerings` (`offid`, `offweek`, `offdate`, `offprogram`, `offertype`, `ofamount`) VALUES
(2, '2021-W38', '2021-09-21', 'Tuesday Service', 'Tuesday Offering', '500.00'),
(3, '2021-W30', '2021-08-01', 'Sunday Service', 'Sunday Offering', '4508.00'),
(4, '2021-W22', '2021-06-04', 'Friday Night Service', 'Friday Night Offering', '2220.00'),
(6, '2021-W39', '2021-09-30', 'Special Service', 'Special Offering', '700.00'),
(7, '2021-W39', '2021-10-01', 'Friday Night Service', 'Friday Night Offering', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `partnerno` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `partdate` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `status` set('Single','Married','Divorced','Widow','Widower') NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `partaddress` text NOT NULL,
  `gpsaddress` text NOT NULL,
  `work` varchar(255) NOT NULL,
  `since` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partnerno`, `fullname`, `partdate`, `gender`, `status`, `email`, `contact`, `partaddress`, `gpsaddress`, `work`, `since`) VALUES
(1, 'POS-01', 'Zack Orji', '2021-10-01', 'Male', 'Single', 'konadu@gmail.com', '023345671', 'Cantoments 16', 'GE-00912', 'Coach', '2011'),
(2, 'POS-02', 'Elon Musk', '2021-09-01', 'Male', 'Married', 'musk@ymail.com', '054676789', 'Cantoments 11', 'GE-88812', 'Enigneer', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `pdgid` int(11) NOT NULL,
  `pledger` varchar(500) NOT NULL,
  `pdgdate` date NOT NULL,
  `pdgmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `pdgprogram` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `pdgstatus` set('Paid','Unpaid') NOT NULL,
  `pdgamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`pdgid`, `pledger`, `pdgdate`, `pdgmonth`, `pdgprogram`, `pdgstatus`, `pdgamount`) VALUES
(2, 'Esther  Smith', '2021-08-01', 'August', 'Thanksgiving Service', 'Paid', '600.00'),
(4, 'Bukayo  Saka', '2021-09-29', 'September', 'Sunday Service', 'Unpaid', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `prayers`
--

CREATE TABLE `prayers` (
  `prayid` int(11) NOT NULL,
  `praydate` date NOT NULL,
  `prayname` varchar(500) NOT NULL,
  `praykind` text NOT NULL,
  `datescheduled` date NOT NULL,
  `prayvenue` text NOT NULL,
  `praycontact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prayers`
--

INSERT INTO `prayers` (`prayid`, `praydate`, `prayname`, `praykind`, `datescheduled`, `prayvenue`, `praycontact`) VALUES
(1, '2021-10-07', 'John Doe', 'Prayers for Exams Success', '2021-10-06', 'Church Premises', '02456789'),
(2, '2021-10-06', 'Edwin Tstsu', 'Prayers for Marriage', '2021-11-08', 'Church Premises', '0542211109'),
(4, '2021-11-24', 'Jane Doe', 'Deliverance', '2021-11-24', 'Church Premises', '054001234');

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE `procurement` (
  `proid` int(11) NOT NULL,
  `prodate` date NOT NULL,
  `proname` varchar(500) NOT NULL,
  `quantity` text NOT NULL,
  `vendor` varchar(500) NOT NULL,
  `ventact` text NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `proamount` decimal(15,2) NOT NULL,
  `receiver` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procurement`
--

INSERT INTO `procurement` (`proid`, `prodate`, `proname`, `quantity`, `vendor`, `ventact`, `purpose`, `proamount`, `receiver`) VALUES
(2, '2021-08-01', 'Pens', '45', 'Accra Bookshop', '02345567', 'For Church Members', '100.00', 'Selorm Tay'),
(3, '2021-09-25', 'Footballs', '67', 'Joy Ventures', '0567779', 'For Church Games', '200.00', 'Tim Sunday'),
(4, '2021-08-07', 'Caps', '12', 'Bprint Group', '024566789', 'Celebration', '4500.00', 'Leonard Ravenhill'),
(7, '2021-09-28', 'Brooms', '10', 'Melcom', '23309876', 'Sweeping of surroundings', '200.00', 'Edwin Tsatsu'),
(8, '2021-10-05', 'Ceiling Fans', '10', 'Melcom', '23309876', 'For Main Auditorium', '200.00', 'Jane Doe');

-- --------------------------------------------------------

--
-- Table structure for table `revbooks`
--

CREATE TABLE `revbooks` (
  `revid` int(11) NOT NULL,
  `revtitle` varchar(500) NOT NULL,
  `pubstatus` set('First Published','Second Published','Third Published','Fourth Published','Fifth Published') NOT NULL,
  `revdate` date NOT NULL,
  `isbn` text NOT NULL,
  `quantity` text NOT NULL,
  `editors` varchar(500) NOT NULL,
  `pubhouse` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revbooks`
--

INSERT INTO `revbooks` (`revid`, `revtitle`, `pubstatus`, `revdate`, `isbn`, `quantity`, `editors`, `pubhouse`) VALUES
(1, 'Hard Sayings', 'First Published', '2021-10-15', '1234-890', '400', 'Johnson Mensah', 'Samuel Book House');

-- --------------------------------------------------------

--
-- Table structure for table `shepassist`
--

CREATE TABLE `shepassist` (
  `id` int(11) NOT NULL,
  `assid` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `appdate` date NOT NULL,
  `cell` set('Overcomers','Open Heavens','Breakthrough','Bread of Life','Dunamis','Wellspring','Passion','Holy Hill','Good Shepherd','Morning Star') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shepassist`
--

INSERT INTO `shepassist` (`id`, `assid`, `fullname`, `appdate`, `cell`) VALUES
(1, 'MOS-03', 'Mark Dan', '2021-11-03', 'Holy Hill'),
(3, 'MOS-07', 'Sarah Aje', '2021-11-03', 'Morning Star'),
(4, 'MOS-11', 'Martins Indi', '2021-11-03', 'Bread of Life'),
(2, 'MOS-54', 'Paul Oduro', '2021-11-03', 'Overcomers');

-- --------------------------------------------------------

--
-- Table structure for table `sheplist`
--

CREATE TABLE `sheplist` (
  `id` int(11) NOT NULL,
  `shpid` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `appdate` date NOT NULL,
  `position` set('Leader') NOT NULL,
  `cell` set('Overcomers','Open Heavens','Breakthrough','Bread of Life','Dunamis','Wellspring','Passion','Holy Hill','Good Shepherd') NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sheplist`
--

INSERT INTO `sheplist` (`id`, `shpid`, `fullname`, `appdate`, `position`, `cell`, `location`) VALUES
(1, 'MOS-01', 'John Doe', '2021-10-15', 'Leader', 'Dunamis', 'Madina'),
(2, 'MOS-02', 'Jane Doe', '2021-10-15', 'Leader', 'Dunamis', 'Madina'),
(3, 'MOS-04', 'Tetteh Frank', '2021-12-07', 'Leader', 'Overcomers', 'UPSA'),
(4, 'MOS-51', 'Dora Kerr', '2021-12-07', 'Leader', 'Passion', 'Oyarifa');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `srid` int(11) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `staffname` varchar(500) NOT NULL,
  `department` set('Admin','Finance','Event') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`srid`, `staffid`, `staffname`, `department`) VALUES
(6, 'MOS-51', 'Dora Kerr', 'Admin'),
(8, 'MOS-29', 'Jack Grealish', 'Event'),
(9, 'MOS-09', 'Erling Haaland', 'Finance'),
(10, 'MOS-01', 'John Doe', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacherno` varchar(250) NOT NULL,
  `teachername` varchar(500) NOT NULL,
  `teachbirth` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `classgroup` set('0-2yrs','3-5yrs','6-9yrs','10-12yrs','13-19yrs','20-above') NOT NULL,
  `qualify` text NOT NULL,
  `work` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacherno`, `teachername`, `teachbirth`, `gender`, `classgroup`, `qualify`, `work`) VALUES
(1, 'MOS-01', 'John Doe', '2021-11-30', 'Male', '20-above', 'WASSCE', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tithes`
--

CREATE TABLE `tithes` (
  `titid` int(11) NOT NULL,
  `titweek` varchar(50) NOT NULL,
  `titdate` date NOT NULL,
  `titmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `titprogram` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `titamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tithes`
--

INSERT INTO `tithes` (`titid`, `titweek`, `titdate`, `titmonth`, `titprogram`, `titamount`) VALUES
(1, '2021-W39', '2021-09-29', 'September', 'Sunday Service', '7000.00'),
(2, '2021-W39', '2021-09-29', 'October', 'Sunday Service', '3300.00'),
(3, '2021-W34', '2021-08-24', 'July', 'Friday Night Service', '4300.00');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `vid` int(11) NOT NULL,
  `visdate` date NOT NULL,
  `visname` varchar(500) NOT NULL,
  `service` set('Mid-Week Communion','Friday Healing Service','Thanksgiving Service','Sunday First Service','Sunday Second Service','Allnight Service','Conferences','Healing/Deliverance Service') NOT NULL,
  `vstatus` set('First Timer','Second Timer','Just For A Visit','Become A Member') NOT NULL,
  `chinfo` set('Member/Friend Invitation','Recommendation','Social Media','Evangelism','Others') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`vid`, `visdate`, `visname`, `service`, `vstatus`, `chinfo`) VALUES
(1, '2021-10-01', 'Sam Jonah', 'Friday Healing Service', 'First Timer', 'Social Media'),
(2, '2021-10-01', 'Stephen Oduro', 'Mid-Week Communion', 'Just For A Visit', 'Member/Friend Invitation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`annid`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD UNIQUE KEY `aid_2` (`aid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `baptisms`
--
ALTER TABLE `baptisms`
  ADD PRIMARY KEY (`baptid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bkid`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `childlist`
--
ALTER TABLE `childlist`
  ADD PRIMARY KEY (`childno`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `chprograms`
--
ALTER TABLE `chprograms`
  ADD PRIMARY KEY (`chprogid`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expid`);

--
-- Indexes for table `indietithes`
--
ALTER TABLE `indietithes`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `memberno` (`memberno`) USING BTREE;

--
-- Indexes for table `jointithes`
--
ALTER TABLE `jointithes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`ltid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`erlid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`memberno`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `offerings`
--
ALTER TABLE `offerings`
  ADD PRIMARY KEY (`offid`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partnerno`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`pdgid`);

--
-- Indexes for table `prayers`
--
ALTER TABLE `prayers`
  ADD PRIMARY KEY (`prayid`);

--
-- Indexes for table `procurement`
--
ALTER TABLE `procurement`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `revbooks`
--
ALTER TABLE `revbooks`
  ADD PRIMARY KEY (`revid`);

--
-- Indexes for table `shepassist`
--
ALTER TABLE `shepassist`
  ADD PRIMARY KEY (`assid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sheplist`
--
ALTER TABLE `sheplist`
  ADD PRIMARY KEY (`shpid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`srid`),
  ADD UNIQUE KEY `staffid` (`staffid`),
  ADD KEY `sid` (`srid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherno`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tithes`
--
ALTER TABLE `tithes`
  ADD PRIMARY KEY (`titid`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `annid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `baptisms`
--
ALTER TABLE `baptisms`
  MODIFY `baptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `childlist`
--
ALTER TABLE `childlist`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chprograms`
--
ALTER TABLE `chprograms`
  MODIFY `chprogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `indietithes`
--
ALTER TABLE `indietithes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jointithes`
--
ALTER TABLE `jointithes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `offerings`
--
ALTER TABLE `offerings`
  MODIFY `offid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `pdgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prayers`
--
ALTER TABLE `prayers`
  MODIFY `prayid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `procurement`
--
ALTER TABLE `procurement`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `revbooks`
--
ALTER TABLE `revbooks`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shepassist`
--
ALTER TABLE `shepassist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sheplist`
--
ALTER TABLE `sheplist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `srid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tithes`
--
ALTER TABLE `tithes`
  MODIFY `titid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indietithes`
--
ALTER TABLE `indietithes`
  ADD CONSTRAINT `indietithes_ibfk_1` FOREIGN KEY (`memberno`) REFERENCES `membership` (`memberno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
