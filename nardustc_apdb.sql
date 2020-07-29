-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 03:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nardustc_apdb`
--
-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--
CREATE TABLE IF NOT EXISTS `allocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Units` varchar(100) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- Table structure for table `adminimprest`
--
CREATE TABLE IF NOT EXISTS `adminimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- Table structure for table `packadmin`
--

CREATE TABLE `packadmin` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packadmin`
--

INSERT INTO `packadmin` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------
--
-- Table structure for table `apicimprest`
--
CREATE TABLE IF NOT EXISTS `apicimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--
CREATE TABLE IF NOT EXISTS `attendance` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `TimeSignIn` time NOT NULL,
  `DateSign` date NOT NULL,
  `TimeSignOut` time NOT NULL,
  `Month` varchar(20) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrcomplaintslog`
--
CREATE TABLE IF NOT EXISTS `hrcomplaintslog` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Names` varchar(100) NOT NULL,
  `HostelDepartmentUnit` varchar(500) NOT NULL,
  `PhoneNo` varchar(500) NOT NULL,
  `Complaints` varchar(1000) NOT NULL,
  `ActionPlan` varchar(2000) NOT NULL,
  `OfficeInCharge` varchar(200) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `artisanimprest`
--
CREATE TABLE IF NOT EXISTS `artisanimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banowimprest`
--
CREATE TABLE IF NOT EXISTS `banowimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bookuimprest`
--
CREATE TABLE IF NOT EXISTS `bookuimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bsfimprest`
--
CREATE TABLE IF NOT EXISTS `bsfimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `compostimprest`
--
CREATE TABLE IF NOT EXISTS `compostimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cropimprest`
--
CREATE TABLE IF NOT EXISTS `cropimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distillerimprest`
--
CREATE TABLE IF NOT EXISTS `distillerimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `facilityimprest`
--
CREATE TABLE IF NOT EXISTS `facilityimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `farmventureimprest`
--
CREATE TABLE IF NOT EXISTS `farmventureimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedmillimprest`
--
CREATE TABLE IF NOT EXISTS `feedmillimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fisheryimprest`
--
CREATE TABLE IF NOT EXISTS `fisheryimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fleetimprest`
--
CREATE TABLE IF NOT EXISTS `fleetimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hostelimprest`
--
CREATE TABLE IF NOT EXISTS `hostelimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `livestockimprest`
--
CREATE TABLE IF NOT EXISTS `livestockimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logisticsimprest`
--
CREATE TABLE IF NOT EXISTS `logisticsimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `organicimprest`
--
CREATE TABLE IF NOT EXISTS `organicimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `otulogisticsimprest`
--
CREATE TABLE IF NOT EXISTS `otulogisticsimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `poultryimprest`
--
CREATE TABLE IF NOT EXISTS `poultryimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `securityimprest`
--
CREATE TABLE IF NOT EXISTS `securityimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `snaileryimprest`
--
CREATE TABLE IF NOT EXISTS `snaileryimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `specialprojectimprest`
--
CREATE TABLE IF NOT EXISTS `specialprojectimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tedeimprest`
--
CREATE TABLE IF NOT EXISTS `tedeimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testimprest`
--
CREATE TABLE IF NOT EXISTS `testimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `welfareimprest`
--
CREATE TABLE IF NOT EXISTS `welfareimprest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- Table structure for table `imprestuser`
--

CREATE TABLE IF NOT EXISTS `imprestuser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `imprestuser`
--

INSERT INTO `imprestuser` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------
--
-- Table structure for table `facilityusers`
--

CREATE TABLE IF NOT EXISTS `facilityusers` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilityusers`
--

INSERT INTO `facilityusers` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilityusers`
--
ALTER TABLE `facilityusers`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilityusers`
--
ALTER TABLE `facilityusers`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;

-- --------------------------------------------------------
--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 7, 1, 'userid'),
(2, '000', 79, 1, 'employeeid'),
(3, '1', 135, 1, 'leaves');

-- --------------------------------------------------------

--
-- Table structure for table `tblchildren`
--

CREATE TABLE `tblchildren` (
  `CHILDID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `NAMEOFCHILD` varchar(90) NOT NULL,
  `DATEOFBIRTH` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcivilserviceeligibility`
--

CREATE TABLE `tblcivilserviceeligibility` (
  `CSEID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `CAREER` varchar(125) NOT NULL,
  `RATING` varchar(90) NOT NULL,
  `DATEEXAMINATION` varchar(30) NOT NULL,
  `PLACEEXAMINATION` varchar(125) NOT NULL,
  `LICENSENO` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcivilserviceeligibility`
--

INSERT INTO `tblcivilserviceeligibility` (`CSEID`, `EMPLOYEEID`, `CAREER`, `RATING`, `DATEEXAMINATION`, `PLACEEXAMINATION`, `LICENSENO`) VALUES
(1, '288', 'CIVIL SERVICE ELIGIBLE ( PROF)\r\n\r\n\r\n\r\n\r\n\r\n', '', '04/25/2010', 'ILOILO NATIONAL HIGHSCHOOL', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `DEPARTMENTID` int(11) NOT NULL,
  `DEPARTMENT` varchar(30) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `DEPARTMENTHEAD` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`DEPARTMENTID`, `DEPARTMENT`, `DESCRIPTION`, `DEPARTMENTHEAD`) VALUES
(4, 'ADMIN', 'ADMIN', 'MR. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbldivision`
--

CREATE TABLE `tbldivision` (
  `DIVISIONID` int(11) NOT NULL,
  `DIVISION` varchar(99) NOT NULL,
  `DIVISIONHEAD` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldivision`
--

INSERT INTO `tbldivision` (`DIVISIONID`, `DIVISION`, `DIVISIONHEAD`) VALUES
(4, 'ADMINISTRATIVE', 'MR. MICHAEL');

-- --------------------------------------------------------

--
-- Table structure for table `maintenancelog`
--

CREATE TABLE IF NOT EXISTS `maintenancelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Units` varchar(20) NOT NULL,
  `EquipmentDescription` varchar(500) NOT NULL,
  `SerialNumber` varchar(50) NOT NULL,
  `ModelNumber` varchar(50) NOT NULL,
  `DatePurchase` date NOT NULL,
  `MaintenanceDescription` varchar(50) NOT NULL,
  `MaintenanceDate` date NOT NULL,
  `MonthofMaintenance` varchar(50) NOT NULL,
  `MaintenancePerformedBy` varchar(50) NOT NULL,
  `CostofMaintenance` varchar(50) NOT NULL,
  `NextMaintenancePlan` varchar(50) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `machinelog`
--

CREATE TABLE IF NOT EXISTS `machinelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Units` varchar(20) NOT NULL,
  `MachineDescription` varchar(500) NOT NULL,
  `SerialNumber` varchar(50) NOT NULL,
  `ModelNumber` varchar(50) NOT NULL,
  `DatePurchase` date NOT NULL,
  `MaintenanceDescription` varchar(50) NOT NULL,
  `MaintenanceDate` date NOT NULL,
  `MonthofMaintenance` varchar(50) NOT NULL,
  `MaintenancePerformedBy` varchar(50) NOT NULL,
  `CostofMaintenance` varchar(50) NOT NULL,
  `NextMaintenancePlan` varchar(50) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `buildinglog`
--

CREATE TABLE IF NOT EXISTS `buildinglog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Building` varchar(500) NOT NULL,
  `Location` varchar(1000) NOT NULL,
  `DateChecked` date NOT NULL,
  `ActionRequired` varchar(50) NOT NULL,
  `ActionCompleted` varchar(50) NOT NULL,
  `PersonChecking` varchar(500) NOT NULL,
  `CostofMaintenance` varchar(500) NOT NULL,
  `NextDueDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `repairslog`
--

CREATE TABLE IF NOT EXISTS `repairslog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Units` varchar(20) NOT NULL,
  `EquipmentDescription` varchar(500) NOT NULL,
  `SerialNumber` varchar(50) NOT NULL,
  `ModelNumber` varchar(50) NOT NULL,
  `DatePurchase` date NOT NULL,
  `DescriptionofDefect` varchar(50) NOT NULL,
  `DateTimeRepair` date NOT NULL,
  `MonthofRepairs` varchar(50) NOT NULL,
  `RepairPerformedBy` varchar(500) NOT NULL,
  `CostofRepair` varchar(500) NOT NULL,
  `DescriptionofRepair` varchar(500) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `transferlog`
--

CREATE TABLE IF NOT EXISTS `transferlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EquipmentDescription` varchar(500) NOT NULL,
  `SerialNumber` varchar(50) NOT NULL,
  `ModelNumber` varchar(50) NOT NULL,
  `DatePurchase` date NOT NULL,
  `UnitTransferredFrom` varchar(50) NOT NULL,
  `UnitTransferredTo` varchar(50) NOT NULL,
  `TransferredBy` varchar(50) NOT NULL,
  `DateTransferred` date NOT NULL,
  `MonthofTransfers` varchar(50) NOT NULL,
  `TransferReceivedBy` varchar(200) NOT NULL,
  `ReasonsforTransfer` varchar(500) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `projectreport`
--

CREATE TABLE IF NOT EXISTS `projectreports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(500) NOT NULL,
  `Task` varchar(1000) NOT NULL,
  `DateofReport` date NOT NULL,
  `StartTime` time NOT NULL,
  `FinishTime` time NOT NULL,
  `ResourcesUsed` varchar(500) NOT NULL,
  `CostMaterial` varchar(500) NOT NULL,
  `Supervisor` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


-- --------------------------------------------------------

--
-- Table structure for table `buildingmaintenance`
--

CREATE TABLE IF NOT EXISTS `buildingmaintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Building` varchar(500) NOT NULL,
  `Location` varchar(1000) NOT NULL,
  `DateChecked` date NOT NULL,
  `ActionRequired` varchar(50) NOT NULL,
  `ActionCompleted` varchar(50) NOT NULL,
  `PersonChecking` varchar(500) NOT NULL,
  `CostofMaintenance` varchar(500) NOT NULL,
  `NextDueDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `dailysupply`
--

CREATE TABLE IF NOT EXISTS `dailysupply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(500) NOT NULL,
  `Item` varchar(500) NOT NULL,
  `Quantity` varchar(1000) NOT NULL,
  `CostPerItem` varchar(1000) NOT NULL,
  `TotalCost` varchar(50) NOT NULL,
  `DateSupplied` date NOT NULL,
  `SuppliedByWho` varchar(500) NOT NULL,
  `ReceivedByWho` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `complaintslog`
--

CREATE TABLE IF NOT EXISTS `complaintslog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Units` varchar(20) NOT NULL,
  `ComplaintsNames` varchar(500) NOT NULL,
  `BasisofComplaints` varchar(500) NOT NULL,
  `DateofCompliants` date NOT NULL,
  `MonthofComplaints` varchar(50) NOT NULL,
  `ComplaintsReceivedBy` varchar(500) NOT NULL,
  `ActionPlanForComplaints` varchar(500) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `recommendationlog`
--

CREATE TABLE IF NOT EXISTS `recommendationlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Units` varchar(20) NOT NULL,
  `Recommendation` varchar(500) NOT NULL,
  `DateofRecommendation` date NOT NULL,
  `ReasonsforRecommendation` varchar(500) NOT NULL,
  `MonthRecommendation` varchar(100) NOT NULL,
  `ExpectedChange` varchar(100) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `Admin unit`
--

CREATE TABLE IF NOT EXISTS `adminitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `Post Harvest`
--

CREATE TABLE IF NOT EXISTS `postharvestitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `APIC unit`
--

CREATE TABLE IF NOT EXISTS `apicitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `Clinic unit`
--

CREATE TABLE IF NOT EXISTS `clinicitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `banow unit`
--

CREATE TABLE IF NOT EXISTS `banowitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `booku Processing unit`
--

CREATE TABLE IF NOT EXISTS `bookuitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `bsf unit`
--

CREATE TABLE IF NOT EXISTS `bsfitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `compost unit`
--

CREATE TABLE IF NOT EXISTS `compostitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `crop unit`
--

CREATE TABLE IF NOT EXISTS `cropitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `Distiller unit`
--

CREATE TABLE IF NOT EXISTS `distilleritems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `farmventure unit`
--

CREATE TABLE IF NOT EXISTS `farmventureitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `feedmill unit`
--

CREATE TABLE IF NOT EXISTS `feedmillitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `fishery unit`
--

CREATE TABLE IF NOT EXISTS `fisheryitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `hostel unit`
--

CREATE TABLE IF NOT EXISTS `hostelitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_hostels` varchar(50) NOT NULL,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `livestock unit`
--

CREATE TABLE IF NOT EXISTS `livestockitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `organic unit`
--

CREATE TABLE IF NOT EXISTS `organicitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `poultry unit`
--

CREATE TABLE IF NOT EXISTS `poultryitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
-- --------------------------------------------------------

--
-- Table structure for table `security unit`
--

CREATE TABLE IF NOT EXISTS `securityitems` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_items` varchar(50) NOT NULL,
  `i_qty` int(100) NOT NULL,
  `i_dpurchase` date NOT NULL,
  `i_amount` int(50) NOT NULL,
  `i_purchaseby` varchar(50) NOT NULL,
  `i_receiveby` varchar(100) NOT NULL,
  `i_month` varchar(100) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbleducbackground`
--

CREATE TABLE `tbleducbackground` (
  `EDUCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `ELEMENTARY` varchar(30) NOT NULL,
  `ELEMENTARY_SCHOOL` varchar(90) NOT NULL,
  `ELEMENTARY_SY` varchar(30) NOT NULL,
  `ELEMENTARY_A` text NOT NULL,
  `ELEMENTARY_B` text NOT NULL,
  `ELEMENTARY_C` text NOT NULL,
  `SECONDARY` text NOT NULL,
  `SECONDARY_SCHOOL` text NOT NULL,
  `SECONDARY_SY` text NOT NULL,
  `SECONDARY_A` text NOT NULL,
  `SECONDARY_B` text NOT NULL,
  `SECONDARY_C` text NOT NULL,
  `VOCATIONAL_COURSE` text NOT NULL,
  `VOCATIONAL_SCHOOL` text NOT NULL,
  `VOCATIONAL_SY` text NOT NULL,
  `VOCATIONAL_A` text NOT NULL,
  `VOCATIONAL_B` text NOT NULL,
  `VOCATIONAL_C` text NOT NULL,
  `COLLEGE` text NOT NULL,
  `COLLEGE_SCHOOL` text NOT NULL,
  `COLLEGE_DEGREE` text NOT NULL,
  `COLLEGE_SY` text NOT NULL,
  `COLLEGE_A` text NOT NULL,
  `COLLEGE_B` text NOT NULL,
  `COLLEGE_C` text NOT NULL,
  `GRADUATESTUDIES_SCHOOL` text NOT NULL,
  `GRADUATESTUDIES_2` text NOT NULL,
  `GRADUATESTUDIES_3` text NOT NULL,
  `GRADUATESTUDIES_A` text NOT NULL,
  `GRADUATESTUDIES_B` text NOT NULL,
  `GRADUATESTUDIES_C` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbleducbackground`
--

INSERT INTO `tbleducbackground` (`EDUCID`, `EMPLOYEEID`, `ELEMENTARY`, `ELEMENTARY_SCHOOL`, `ELEMENTARY_SY`, `ELEMENTARY_A`, `ELEMENTARY_B`, `ELEMENTARY_C`, `SECONDARY`, `SECONDARY_SCHOOL`, `SECONDARY_SY`, `SECONDARY_A`, `SECONDARY_B`, `SECONDARY_C`, `VOCATIONAL_COURSE`, `VOCATIONAL_SCHOOL`, `VOCATIONAL_SY`, `VOCATIONAL_A`, `VOCATIONAL_B`, `VOCATIONAL_C`, `COLLEGE`, `COLLEGE_SCHOOL`, `COLLEGE_DEGREE`, `COLLEGE_SY`, `COLLEGE_A`, `COLLEGE_B`, `COLLEGE_C`, `GRADUATESTUDIES_SCHOOL`, `GRADUATESTUDIES_2`, `GRADUATESTUDIES_3`, `GRADUATESTUDIES_A`, `GRADUATESTUDIES_B`, `GRADUATESTUDIES_C`) VALUES
(15, '038310', 'Elementary', '', '', '', '', '', 'Secondary', '', '', '', '', '', 'Vocational/Trade Course', '', '', '', '', '', 'College', '', '', '', '', '', '', '', '', '', '', '', '');
-- --------------------------------------------------------

--
-- Table structure for table `tblGraudateTrainee`
--

DROP TABLE IF EXISTS `tblgt`;
CREATE TABLE IF NOT EXISTS `tblgt` (
  `gtid` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(30) DEFAULT NULL,
  `SNAME` varchar(30) DEFAULT NULL,
  `FNAME` varchar(50) DEFAULT NULL,
  `MNAME` varchar(50) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Religion` varchar(90) DEFAULT NULL,
  `PlaceofBirth` varchar(50) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `Nationality` varchar(50) DEFAULT NULL,
  `StateofOrigin` varchar(20) DEFAULT NULL,
  `LGA` varchar(30) DEFAULT NULL,
  `HomePlace` varchar(50) DEFAULT NULL,
  `RADDRESS` varchar(90) DEFAULT NULL,
  `TELNO` varchar(40) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `MaritalStatus` varchar(90) DEFAULT NULL,
  `HealthLimitations` varchar(90) DEFAULT NULL,
  `BloodGroup` varchar(50) DEFAULT NULL,
  `Geneotype` varchar(50) DEFAULT NULL,
  `LevelEducation` varchar(50) DEFAULT NULL,
  `InstitutionAttended` varchar(50) DEFAULT NULL,
  `CourseofStudy` varchar(50) DEFAULT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `TrainingExpectation` varchar(50) DEFAULT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `CompanyAddress` varchar(50) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `NameofSupervisor` varchar(50) DEFAULT NULL,
  `PhoneNumberSupervisor` varchar(50) DEFAULT NULL,
  `AccountName` varchar(90) DEFAULT NULL,
  `AccountNumber` varchar(90) DEFAULT NULL,
  `KinName` varchar(90) DEFAULT NULL,
  `KinRelationship` varchar(90) DEFAULT NULL,
  `KinAddress` varchar(30) DEFAULT NULL,
  `KinPhoneNumber` varchar(12) DEFAULT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`gtid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


--
-- Table structure for table `tblcorper`
--

DROP TABLE IF EXISTS `tblcorper`;
CREATE TABLE IF NOT EXISTS `tblcorper` (
  `corperid` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(30) DEFAULT NULL,
  `SNAME` varchar(30) DEFAULT NULL,
  `FNAME` varchar(50) DEFAULT NULL,
  `MNAME` varchar(50) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Religion` varchar(90) DEFAULT NULL,
  `PlaceofBirth` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `Nationality` varchar(50) DEFAULT NULL,
  `StateofOrigin` varchar(20) DEFAULT NULL,
  `LGA` varchar(30) DEFAULT NULL,
  `HomePlace` varchar(50) DEFAULT NULL,
  `RADDRESS` varchar(90) DEFAULT NULL,
  `TELNO` varchar(40) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `MaritalStatus` varchar(90) DEFAULT NULL,
  `HealthLimitations` varchar(90) DEFAULT NULL,
  `BloodGroup` varchar(50) DEFAULT NULL,
  `Geneotype` varchar(50) DEFAULT NULL,
  `LevelEducation` varchar(50) DEFAULT NULL,
  `InstitutionAttended` varchar(50) DEFAULT NULL,
  `CourseofStudy` varchar(50) DEFAULT NULL,
  `CoordinatorName` varchar(50) DEFAULT NULL,
  `AccountName` varchar(90) DEFAULT NULL,
  `AccountNumber` varchar(90) DEFAULT NULL,
  `KinName` varchar(90) DEFAULT NULL,
  `KinRelationship` varchar(90) DEFAULT NULL,
  `KinAddress` varchar(30) DEFAULT NULL,
  `KinPhoneNumber` varchar(12) DEFAULT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`corperid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblcontractors`
--

DROP TABLE IF EXISTS `tblcontractors`;
CREATE TABLE IF NOT EXISTS `tblcontractors` (
  `contractorid` int(11) NOT NULL AUTO_INCREMENT,
  `CODENUMBER` varchar(30) DEFAULT NULL,
  `SNAME` varchar(30) DEFAULT NULL,
  `ONAME` varchar(50) DEFAULT NULL,
  `HADDRESS` varchar(90) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Religion` varchar(90) DEFAULT NULL,
  `StateofOrigin` varchar(20) DEFAULT NULL,
  `LGA` varchar(30) DEFAULT NULL,
  `TELNO` varchar(40) DEFAULT NULL,
  `MaritalStatus` varchar(90) DEFAULT NULL,
  `Skills` varchar(50) DEFAULT NULL,
  `WorkArea` varchar(100) DEFAULT NULL,
  `KinName` varchar(90) DEFAULT NULL,
  `KinRelationship` varchar(90) DEFAULT NULL,
  `KinOccupation` varchar(90) DEFAULT NULL,
  `KinAddress` varchar(30) DEFAULT NULL,
  `KinPhoneNumber` varchar(12) DEFAULT NULL,
  `DateResumption` DATE DEFAULT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`contractorid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblpss`
--


DROP TABLE IF EXISTS `tblpss`;
CREATE TABLE IF NOT EXISTS `tblpss` (
  `pssid` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(30) DEFAULT NULL,
  `SNAME` varchar(30) DEFAULT NULL,
  `ONAME` varchar(50) DEFAULT NULL,
  `HADDRESS` varchar(90) DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Religion` varchar(90) DEFAULT NULL,
  `StateofOrigin` varchar(20) DEFAULT NULL,
  `LGA` varchar(30) DEFAULT NULL,
  `TELNO` varchar(40) DEFAULT NULL,
  `MaritalStatus` varchar(90) DEFAULT NULL,
  `ArrivalDate` date DEFAULT NULL,
  `FarmExperience` varchar(50) DEFAULT NULL,
  `Skills` varchar(50) DEFAULT NULL,
  `Trainings` varchar(50) DEFAULT NULL,
  `AccountName` varchar(90) DEFAULT NULL,
  `BankName` varchar(90) DEFAULT NULL,
  `AccountNumber` varchar(90) DEFAULT NULL,
  `KinName` varchar(90) DEFAULT NULL,
  `KinRelationship` varchar(90) DEFAULT NULL,
  `KinOccupation` varchar(90) DEFAULT NULL,
  `KinAddress` varchar(30) DEFAULT NULL,
  `KinPhoneNumber` varchar(12) DEFAULT NULL,
  `DateResumption` date DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `ParkHumanResource` varchar(50) DEFAULT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`pssid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblsiwes`
--

DROP TABLE IF EXISTS `tblsiwes`;
CREATE TABLE IF NOT EXISTS `tblsiwes` (
  `Siwesid` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(30) DEFAULT NULL,
  `FNAME` varchar(30) DEFAULT NULL,
  `LNAME` varchar(50) DEFAULT NULL,
  `MNAME` varchar(50) DEFAULT NULL,
  `HADDRESS` varchar(90) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Religion` varchar(90) DEFAULT NULL,
  `StateofOrigin` varchar(20) DEFAULT NULL,
  `Sex` varchar(30) DEFAULT NULL,
  `LGA` varchar(30) DEFAULT NULL,
  `TELNO` varchar(40) DEFAULT NULL,
  `CIVILSTATUS` varchar(90) DEFAULT NULL,
  `ArrivalDate` date DEFAULT NULL,
  `NameInstitution` varchar(50) DEFAULT NULL,
  `Course` varchar(30) DEFAULT NULL,
  `Siwes` varchar(50) DEFAULT NULL,
  `Account` varchar(50) DEFAULT NULL,
  `Training` varchar(90) DEFAULT NULL,
  `Name` varchar(90) DEFAULT NULL,
  `Relationship` varchar(90) DEFAULT NULL,
  `KinAddress` varchar(30) DEFAULT NULL,
  `PhoneNumber` varchar(12) DEFAULT NULL,
  `DateResumption` date DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `FarmSupervisor` varchar(50) DEFAULT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`Siwesid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblloans`
--

DROP TABLE IF EXISTS `tblloans`;
CREATE TABLE IF NOT EXISTS `tblloans` (
  `Loanid` int(11) NOT NULL AUTO_INCREMENT,
  `Employeeid` varchar(30) DEFAULT NULL,
  `EmployeeNames` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `CodeNumber` varchar(90) DEFAULT NULL,
  `ReasonforLoan` varchar(20) DEFAULT NULL,
  `AmountBorrowed` varchar(90) DEFAULT NULL,
  `ModeofReturn` varchar(20) DEFAULT NULL,
  `DateofReturn` date DEFAULT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `FirstCodeNumber` varchar(40) DEFAULT NULL,
  `FirstDepartment` varchar(90) DEFAULT NULL,
  `SecondName` varchar(90) DEFAULT NULL,
  `SecondCodeNumber` varchar(50) DEFAULT NULL,
  `SecondDepartment` varchar(30) DEFAULT NULL,
  `ThirdName` varchar(50) DEFAULT NULL,
  `ThirdCodeNumber` varchar(50) DEFAULT NULL,
  `ThirdDepartment` varchar(90) DEFAULT NULL,
  `FourthName` varchar(90) DEFAULT NULL,
  `FourthCodeNumber` varchar(90) DEFAULT NULL,
  `FourthDepartment` varchar(30) DEFAULT NULL,
  `FifthName` varchar(12) DEFAULT NULL,
  `FifthCodeNumber` varchar(90) DEFAULT NULL,
  `FifthDepartment` varchar(50) DEFAULT NULL,
  `ApprovalStatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Loanid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblrequisition`
--

DROP TABLE IF EXISTS `tblrequisition`;
CREATE TABLE IF NOT EXISTS `tblrequisition` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `PreparedBy` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Phone_No` varchar(50) DEFAULT NULL,
  `Purpose` varchar(100) DEFAULT NULL,
  `Purchase_Mode` varchar(50) DEFAULT NULL,
  `Name` varchar(90) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `PhoneNO` varchar(20) DEFAULT NULL,
  `Pay_mode` varchar(100) DEFAULT NULL,
  `Description_Expenses` varchar(2000) DEFAULT NULL,
  `Quantity` varchar(90) DEFAULT NULL,
  `Unit_Price` varchar(90) DEFAULT NULL,
  `Amount` varchar(50) DEFAULT NULL,
  `Amount_Word` varchar(1000) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `INCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(90) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(90) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `TELNO` varchar(40) NOT NULL,
  `CITIZENSHIP` varchar(90) NOT NULL,
  `RELIGION` varchar(90) NOT NULL,
  `HEIGHT` varchar(30) NOT NULL,
  `WEIGHT` varchar(30) NOT NULL,
  `BLOODTYPE` varchar(30) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CELLNO` varchar(30) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `WORKSTATS` varchar(90) NOT NULL,
  `DEPARTMENTID` int(11) NOT NULL,
  `DIVISIONID` int(11) NOT NULL,
  `EMPPHOTO` varchar(255) NOT NULL,
  `EMPUSERNAME` varchar(90) NOT NULL,
  `EMPPASSWORD` varchar(125) NOT NULL,
  `DATEHIRED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`INCID`, `EMPLOYEEID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `SEX`, `CIVILSTATUS`, `TELNO`, `CITIZENSHIP`, `RELIGION`, `HEIGHT`, `WEIGHT`, `BLOODTYPE`, `EMAILADDRESS`, `CELLNO`, `POSITION`, `WORKSTATS`, `DEPARTMENTID`, `DIVISIONID`, `EMPPHOTO`, `EMPUSERNAME`, `EMPPASSWORD`, `DATEHIRED`) VALUES
(36, '2019', 'Admin', 'Admin', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '',  'Regular', 0, 0, '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0000-00-00');

--
-- Table structure for table `tblfamilybackground`
--

CREATE TABLE `tblfamilybackground` (
  `FAMID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `SPOUSE_FNAME` varchar(90) NOT NULL,
  `SPOUSE_MNAME` varchar(90) NOT NULL,
  `SPOUSE_LNAME` varchar(90) NOT NULL,
  `OCCUPATION` varchar(90) NOT NULL,
  `EMPLOYER_BUSNAME` varchar(90) NOT NULL,
  `BUSADDRESS` varchar(90) NOT NULL,
  `EMPLOYER_BUSTELNO` varchar(90) NOT NULL,
  `SPOUSE_CONTACTNO` varchar(90) NOT NULL,
  `FATHER_FNAME` varchar(90) NOT NULL,
  `FATHER_MNAME` varchar(90) NOT NULL,
  `FATHER_LNAME` varchar(90) NOT NULL,
  `MOTHER_FNAME` varchar(90) NOT NULL,
  `MOTHER_MNAME` varchar(90) NOT NULL,
  `MOTHER_LNAME` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfamilybackground`
--

INSERT INTO `tblfamilybackground` (`FAMID`, `EMPLOYEEID`, `SPOUSE_FNAME`, `SPOUSE_MNAME`, `SPOUSE_LNAME`, `OCCUPATION`, `EMPLOYER_BUSNAME`, `BUSADDRESS`, `EMPLOYER_BUSTELNO`, `SPOUSE_CONTACTNO`, `FATHER_FNAME`, `FATHER_MNAME`, `FATHER_LNAME`, `MOTHER_FNAME`, `MOTHER_MNAME`, `MOTHER_LNAME`) VALUES
(23, '288', '', '', '', '', '', '', '', '', 'ELMER', 'ESPONILLA', 'GARCENIEGO', 'RHODORA', 'CASTROVERDE', 'CATALUNA'),
(24, '520', '', '', '', '', '', '', '', '', 'ROMEO', 'PASIGNA', 'QUIOCSON', 'LIZA', 'DEL ROSARIO', 'MONTILLA'),
(26, '209', '', '', '', '', '', '', '', '', 'EUGENIO', 'BERDON', 'JACOSALEM', 'JEROLYN', 'MOSQUERA', 'GANON'),
(27, '233', 'MARY GRACE', 'VARGAS', 'SALARDA', 'HOUSEWIFE', '', '', '09281809865', '', 'BALTAZAR', 'BANAAG', 'CALAMAY', 'CARMELITA', 'MADALAG', 'PICO'),
(28, '236', '', '', '', '', '', '', '', '', 'OSCAR', '', 'SERGIO', 'LOLITA ', 'BANCES', 'DAGNAO'),
(29, '019', 'CLODUALDO', 'SOLON', 'ALCALA', '', '', '', '', '', 'VICENTE, SR.', 'BINAY', 'TRIO', 'JULIANA', 'MOBILLION', 'TRIO'),
(30, '014', 'JORGE', 'PELAYO', 'ALBAYDA', 'FARMING', '', '', '', '09213683716', 'PRIMO', 'FLORES', 'BANZUELO', 'CORAZON', 'ABABAO', 'BANZUELO'),
(31, '033', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '094', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '212', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '503', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '038310', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '398', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '0383-10', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '0215', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '022', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '005', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '015', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '006', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '017', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '016', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '012', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '023', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '004', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '020', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '011', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '008', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '024', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '010', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '002', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '003', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '018', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, '025', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '026', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, '096', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, '045', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, '099', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, '0924553', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, '2132132222222222', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, '2019', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblfiles`
--

CREATE TABLE `tblfiles` (
  `FILEID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `EMPLOYEE` varchar(125) NOT NULL,
  `FILENAME` varchar(50) NOT NULL,
  `LOCATION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblinvolveothercivic`
--

CREATE TABLE `tblinvolveothercivic` (
  `IOCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `NAME_ADDRESS_ORG` varchar(128) NOT NULL,
  `DATEFROM` varchar(30) NOT NULL,
  `DATETO` varchar(30) NOT NULL,
  `IOC_POSITION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblinvolveothereducational`
--

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `chat_room_id` int(11) DEFAULT NULL,
  `chat_msg` text,
  `userid` int(11) DEFAULT NULL,
  `chat_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

DROP TABLE IF EXISTS `chat_room`;
CREATE TABLE IF NOT EXISTS `chat_room` (
  `chat_room_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_room_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`chat_room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_room`
--

INSERT INTO `chat_room` (`chat_room_id`, `chat_room_name`) VALUES
(1, 'Welcome to chatME!');

-- --------------------------------------------------------


CREATE TABLE `tblinvolveothereducational` (
  `IOEID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `NAME_ADDRESS_ORG` varchar(128) NOT NULL,
  `DATEFROM` varchar(30) NOT NULL,
  `DATETO` varchar(30) NOT NULL,
  `IOE_POSITION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `tblleavecredits`
--

CREATE TABLE `tblleavecredits` (
  `LCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `EMPLOYEE` varchar(255) NOT NULL,
  `VACATION` double NOT NULL,
  `SICK` double NOT NULL,
  `MATERNITY` double NOT NULL,
  `SSS` double NOT NULL,
  `EMERGENCY` double NOT NULL,
  `OTHERS` double NOT NULL,
  `FORCELEAVE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `LEAVEID` int(11) NOT NULL,
  `Employeeid` varchar(30) NOT NULL,
  `EmployeeNames` varchar(255) NOT NULL,
  `LeaveEntitlement` varchar(30) NOT NULL,
  `LeaveDaysSpent` varchar(30) NOT NULL,
  `CommencementDate` date NOT NULL,
  `ResumptionDate` date NOT NULL,
  `NumberofDaysRequired` varchar(90) NOT NULL,
  `DeductLeave` varchar(90) NOT NULL,
  `LeaveType` varchar(33) NOT NULL,
  `ContactAddress` varchar(33) NOT NULL,
  `PhoneNumber` varchar(90) NOT NULL,
  `Reasons` varchar(900) NOT NULL,
  `NOTEDBY` varchar(90) NOT NULL,
  `LEAVESTATUS` varchar(33) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(30) NOT NULL,
  `LOGMODE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblotherinformation`
--

CREATE TABLE `tblotherinformation` (
  `OTHERINFOID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `EMPNAME` varchar(90) NOT NULL,
  `SKILLS` text NOT NULL,
  `NDRA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltrainingprogram`
--

CREATE TABLE `tbltrainingprogram` (
  `TPID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `SEMINARTITLE` varchar(128) NOT NULL,
  `DATEFROM` varchar(30) NOT NULL,
  `DATETO` varchar(30) NOT NULL,
  `NOHOURS` varchar(15) NOT NULL,
  `SPONSOREDBY` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(1, 'Admin', 'Admin@admin.com', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tblcommonmaster`
--

CREATE TABLE `tblcommonmaster` (
  `COMMON_ID` int(11) NOT NULL,
  `COMMONCODE` varchar(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `LISTNAME` varchar(30) NOT NULL,
  `IS_DEFAULT` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblexpenses`
--

CREATE TABLE `tblexpenses` (
  `EXPID` int(11) NOT NULL,
  `PROJECTID` int(11) NOT NULL,
  `EXPTYPE` varchar(30) NOT NULL,
  `EXPITEM` varchar(50) NOT NULL,
  `SUPPLIER` varchar(50) NOT NULL,
  `DATEGIVEN` date NOT NULL,
  `DATEADDED` date NOT NULL,
  `EXPENSES` decimal(12,2) NOT NULL,
  `REQUESTEDBY` varchar(30) NOT NULL,
  `ENCODER` varchar(30) NOT NULL,
  `EMPID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE `tblproject` (
  `PROJECTID` int(11) NOT NULL,
  `PROJECTNAME` varchar(50) NOT NULL,
  `STARTDATE` date NOT NULL,
  `ENDDATE` date NOT NULL,
  `PROJECTCOST` decimal(13,2) NOT NULL,
  `PROJECTSTATUS` varchar(10) NOT NULL,
  `PROJECTEXPENSES` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `SUPID` int(11) NOT NULL,
  `SUPCODE` varchar(30) NOT NULL,
  `SUPNAME` text NOT NULL,
  `SUPTIN` varchar(30) NOT NULL,
  `SUPADD` text NOT NULL,
  `SUPCONTACT` varchar(30) NOT NULL,
  `SUPREMARKS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `tblcommonmaster`
--
ALTER TABLE `tblcommonmaster`
  ADD PRIMARY KEY (`COMMON_ID`);

--
-- Indexes for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
  ADD PRIMARY KEY (`EXPID`);

--
-- Indexes for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`PROJECTID`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`SUPID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcommonmaster`
--
ALTER TABLE `tblcommonmaster`
  MODIFY `COMMON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
  MODIFY `EXPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `PROJECTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `SUPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

--
-- Table structure for table `tbluseraccounts`
--

CREATE TABLE `tbluseraccounts` (
  `ID` int(11) NOT NULL,
  `USERID` varchar(30) NOT NULL,
  `FULLNAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `UROLE` varchar(30) NOT NULL,
  `USERPHOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccounts`
--

INSERT INTO `tbluseraccounts` (`ID`, `USERID`, `FULLNAME`, `USERNAME`, `PASS`, `UROLE`, `USERPHOTO`) VALUES
(10, '2019', 'Admin Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblworkexperience`
--

CREATE TABLE `tblworkexperience` (
  `WEID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `DATEFROM` varchar(30) NOT NULL,
  `DATETO` varchar(30) NOT NULL,
  `WE_POSITION` varchar(90) NOT NULL,
  `COMPANY` varchar(90) NOT NULL,
  `MOTHLYSALARY` double NOT NULL,
  `EMPLOYMENTSTATUS` varchar(30) NOT NULL,
  `SERVICELENGTH` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `department` varchar(200) NOT NULL, 
  `date` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblchildren`
--
ALTER TABLE `tblchildren`
  ADD PRIMARY KEY (`CHILDID`);

--
-- Indexes for table `tblcivilserviceeligibility`
--
ALTER TABLE `tblcivilserviceeligibility`
  ADD PRIMARY KEY (`CSEID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`DEPARTMENTID`);

--
-- Indexes for table `tbldivision`
--
ALTER TABLE `tbldivision`
  ADD PRIMARY KEY (`DIVISIONID`);

--
-- Indexes for table `tbleducbackground`
--
ALTER TABLE `tbleducbackground`
  ADD PRIMARY KEY (`EDUCID`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indexes for table `tblfamilybackground`
--
ALTER TABLE `tblfamilybackground`
  ADD PRIMARY KEY (`FAMID`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indexes for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD PRIMARY KEY (`FILEID`);

--
-- Indexes for table `tblinvolveothercivic`
--
ALTER TABLE `tblinvolveothercivic`
  ADD PRIMARY KEY (`IOCID`);

--
-- Indexes for table `tblinvolveothereducational`
--
ALTER TABLE `tblinvolveothereducational`
  ADD PRIMARY KEY (`IOEID`);

--
-- Indexes for table `tblleavecredits`
--
ALTER TABLE `tblleavecredits`
  ADD PRIMARY KEY (`LCID`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`LEAVEID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblotherinformation`
--
ALTER TABLE `tblotherinformation`
  ADD PRIMARY KEY (`OTHERINFOID`);

--
-- Indexes for table `tbltrainingprogram`
--
ALTER TABLE `tbltrainingprogram`
  ADD PRIMARY KEY (`TPID`);

--
-- Indexes for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERID` (`USERID`);

--
-- Indexes for table `tblworkexperience`
--
ALTER TABLE `tblworkexperience`
  ADD PRIMARY KEY (`WEID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblchildren`
--
ALTER TABLE `tblchildren`
  MODIFY `CHILDID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcivilserviceeligibility`
--
ALTER TABLE `tblcivilserviceeligibility`
  MODIFY `CSEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `DEPARTMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbldivision`
--
ALTER TABLE `tbldivision`
  MODIFY `DIVISIONID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbleducbackground`
--
ALTER TABLE `tbleducbackground`
  MODIFY `EDUCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

 
--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tblfamilybackground`
--
ALTER TABLE `tblfamilybackground`
  MODIFY `FAMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tblfiles`
--
ALTER TABLE `tblfiles`
  MODIFY `FILEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblinvolveothercivic`
--
ALTER TABLE `tblinvolveothercivic`
  MODIFY `IOCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblinvolveothereducational`
--
ALTER TABLE `tblinvolveothereducational`
  MODIFY `IOEID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblleavecredits`
--
ALTER TABLE `tblleavecredits`
  MODIFY `LCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `LEAVEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1135;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT for table `tblotherinformation`
--
ALTER TABLE `tblotherinformation`
  MODIFY `OTHERINFOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbltrainingprogram`
--
ALTER TABLE `tbltrainingprogram`
  MODIFY `TPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbluseraccounts`
--
ALTER TABLE `tbluseraccounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblworkexperience`
--
ALTER TABLE `tblworkexperience`
  MODIFY `WEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
