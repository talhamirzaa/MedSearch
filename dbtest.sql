-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 11:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE `customer_register` (
  `Name` varchar(30) NOT NULL,
  `Email_id` varchar(25) NOT NULL,
  `pswd` varchar(25) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`Name`, `Email_id`, `pswd`, `phone_no`) VALUES
('abc', 'abc@gmail.com', 'qwertyui', '3443545178'),
('ert', 'huj@gmail.com', '456tyfgthgf', '9993545123'),
('jhon', 'jhon1@gmail.com', 'jhuor454', '9843545123'),
('karan', 'kar45@gmail.com', 'karan45', '9000545123'),
('Rahul', 'rah12@gmail.com', 'rah890', '9909545123'),
('raj', 'raj90@gmail.com', 'raj67890', '7773545123'),
('matt', 'sadsd@gmail.com', '123456898', '7843545123');

-- --------------------------------------------------------

--
-- Table structure for table `medical_1`
--

CREATE TABLE `medical_1` (
  `ID` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Mfg_Dt` varchar(25) NOT NULL,
  `Exp_Dt` varchar(25) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_1`
--

INSERT INTO `medical_1` (`ID`, `Name`, `Mfg_Dt`, `Exp_Dt`, `Price`) VALUES
(2, 'Acetylsalicylic', '21-02-2020', '03-01-2022', 122),
(19, 'albendazole', '09-03-2020', '01-01-2022', 400),
(7, 'allopurinol', '01-03-2020', '05-03-2022', 200),
(28, 'amoxicillin', '04-02-2020', '24-01-2022', 320),
(9, 'azathioprine', '25-02-2020', '30-01-2022', 256),
(15, 'carbamazepine', '24-01-2020', '30-03-2022', 150),
(29, 'cefixime', '24-01-2020', '22-01-2022', 200),
(34, 'cefotaxime', '04-02-2020', '05-02-2022', 540),
(35, 'ceftazidime', '06-03-2020', '23-02-2022', 120),
(30, 'ceftriaxone', '23-02-2020', '21-01-2022', 300),
(36, 'chloramphenicol', '24-02-2020', '01-01-2022', 320),
(8, 'chloroquine', '21-02-2020', '01-01-2022', 300),
(12, 'chlorphenamine', '26-03-2020', '22-01-2022', 540),
(37, 'ciprofloxacin', '01-02-2020', '28-03-2022', 150),
(46, 'clindamycin', '04-02-2020', '05-03-2022', 540),
(31, 'cloxacillin', '24-02-2020', '28-02-2022', 256),
(5, 'codeine', '04-03-2020', '01-01-2022', 400),
(56, 'crosin', '20/01/20', '30-01-2022', 15),
(48, 'dapsone', '23-02-2020', '30-01-2022', 320),
(1, 'Diazepam', '01-03-2020', '02-02-2022', 150),
(14, 'DL?methionine', '04-02-2020', '28-02-2022', 320),
(38, 'doxycycline', '24-02-2020', '05-03-2022', 122),
(39, 'erythromycin', '01-02-2020', '01-01-2022', 120),
(40, 'gentamicin', '30-03-2020', '30-01-2022', 160),
(3, 'Ibuprofen', '25-02-2020', '05-02-2022', 120),
(20, 'levamisole', '04-02-2020', '28-03-2022', 200),
(21, 'mebendazole', '06-03-2020', '05-03-2022', 200),
(10, 'methotrexate', '30-01-2020', '31-01-2022', 230),
(41, 'metronidazole', '25-02-2020', '03-01-2022', 400),
(6, 'morphine', '26-03-2020', '28-03-2022', 200),
(22, 'niclosamide', '24-02-2020', '01-01-2022', 300),
(42, 'nitrofurantoin', '30-01-2020', '05-02-2022', 300),
(27, 'oxamniquine', '03-03-2020', '31-01-2022', 120),
(4, 'Paracetamol', '30-01-2020', '23-02-2022', 160),
(16, 'phenobarbital', '23-02-2020', '15-01-2022', 122),
(32, 'phenoxymethylpenicillin', '03-02-2020', '30-03-2022', 230),
(17, 'phenytoin', '24-02-2020', '05-02-2022', 120),
(23, 'praziquantel', '01-02-2020', '30-01-2022', 256),
(13, 'prednisolone', '03-03-2020', '21-01-2022', 120),
(33, 'procaine benzylpenicillin', '09-03-2020', '15-01-2022', 340),
(24, 'pyrantel', '24-02-2020', '31-01-2022', 230),
(43, 'spectinomycin', '04-03-2020', '23-02-2022', 256),
(44, 'sulfamethoxazole', '26-03-2020', '01-01-2022', 230),
(11, 'sulfasalazine', '04-03-2020', '24-01-2022', 340),
(26, 'triclabendazole', '30-03-2020', '22-01-2022', 540),
(45, 'trimethoprim', '03-03-2020', '28-03-2022', 340),
(18, 'valproic acid', '03-02-2020', '23-02-2022', 160),
(47, 'vancomycin', '24-01-2020', '01-01-2022', 120);

-- --------------------------------------------------------

--
-- Table structure for table `medical_2`
--

CREATE TABLE `medical_2` (
  `ID` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Mfg_Dt` varchar(25) NOT NULL,
  `Exp_Dt` varchar(25) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_2`
--

INSERT INTO `medical_2` (`ID`, `Name`, `Mfg_Dt`, `Exp_Dt`, `Price`) VALUES
(11, 'abacavir', '06-03-2020', '28-03-2022', 200),
(10, 'aciclovir', '23-02-2020', '01-01-2022', 200),
(59, 'aluminium hydroxide', '06-03-2020', '30-01-2022', 340),
(56, 'amiloride', '23-02-2020', '01-01-2022', 400),
(34, 'amodiaquine', '04-02-2020', '01-01-2022', 230),
(33, 'amphotericin B', '09-03-2020', '05-03-2022', 256),
(35, 'artemether', '06-03-2020', '30-01-2022', 340),
(37, 'artesunate', '01-02-2020', '05-02-2022', 120),
(19, 'atazanavir', '24-02-2020', '24-01-2022', 200),
(53, 'calamine lotion', '04-03-2020', '28-02-2022', 320),
(38, 'chloroquine', '24-02-2020', '23-02-2022', 320),
(12, 'didanosine', '24-02-2020', '05-03-2022', 300),
(31, 'diloxanide', '23-02-2020', '01-01-2022', 400),
(54, 'dithranol', '04-02-2020', '05-02-2022', 120),
(39, 'doxycycline', '01-02-2020', '01-01-2022', 200),
(17, 'efavirenz', '04-02-2020', '22-01-2022', 120),
(13, 'emtricitabine', '23-02-2020', '01-01-2022', 256),
(1, 'ethambutol', '06-03-2020', '31-01-2022', 200),
(7, 'ethionamide', '03-03-2020', '15-01-2022', 120),
(55, 'furosemide', '24-01-2020', '23-02-2022', 160),
(20, 'indinavir', '01-02-2020', '22-01-2022', 300),
(2, 'isoniazid', '24-02-2020', '24-01-2022', 300),
(14, 'lamivudine', '24-02-2020', '30-01-2022', 230),
(36, 'lumefantrine', '24-02-2020', '03-01-2022', 540),
(58, 'mannitol', '09-03-2020', '05-03-2022', 256),
(40, 'mefloquine', '30-03-2020', '28-03-2022', 300),
(62, 'metformin', '23-02-2020', '22-01-2022', 340),
(32, 'metronidazole', '03-02-2020', '28-03-2022', 300),
(18, 'nevirapine', '06-03-2020', '31-01-2022', 320),
(8, 'ofloxacin', '04-02-2020', '05-02-2022', 320),
(60, 'omeprazole', '01-02-2020', '05-02-2022', 120),
(29, 'oseltamivir', '04-02-2020', '05-02-2022', 120),
(63, 'oxamniquine', '24-03-2020', '31-10-2022', 110),
(9, 'p?aminosalicylic acid', '24-01-2020', '23-02-2022', 400),
(52, 'Paracetamol', '30-01-2020', '23-05-2022', 160),
(51, 'pentamidine', '23-02-2020', '22-01-2022', 340),
(41, 'primaquine', '25-02-2020', '05-03-2022', 256),
(48, 'proguanil', '23-02-2020', '28-02-2022', 300),
(3, 'pyrazinamide', '01-02-2020', '22-01-2022', 256),
(44, 'pyrimethamine', '26-03-2020', '31-01-2022', 540),
(42, 'quinine', '30-01-2020', '01-01-2022', 230),
(61, 'ranitidine', '24-02-2020', '23-02-2022', 320),
(30, 'ribavirin', '24-01-2020', '23-02-2022', 160),
(4, 'rifampicin', '24-02-2020', '21-01-2022', 230),
(21, 'ritonavir', '24-02-2020', '21-01-2022', 256),
(22, 'saquinavir', '01-02-2020', '28-02-2022', 230),
(57, 'spironolactone', '03-02-2020', '28-03-2022', 300),
(15, 'stavudine', '03-02-2020', '31-01-2022', 340),
(6, 'streptomycin', '26-03-2020', '30-03-2022', 540),
(50, 'sulfadiazine', '24-01-2020', '15-01-2022', 230),
(43, 'sulfadoxine', '04-03-2020', '30-01-2022', 340),
(25, 'tenofovir', '30-01-2020', '21-01-2022', 120),
(16, 'zidovudine', '09-03-2020', '24-01-2022', 540);

-- --------------------------------------------------------

--
-- Table structure for table `medical_3`
--

CREATE TABLE `medical_3` (
  `ID` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Mfg_Dt` varchar(25) NOT NULL,
  `Exp_Dt` varchar(25) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_3`
--

INSERT INTO `medical_3` (`ID`, `Name`, `Mfg_Dt`, `Exp_Dt`, `Price`) VALUES
(1, 'abacavir', '01-03-2020', '02-02-2022', 150),
(22, 'amodiaquine', '24-02-2020', '01-01-2022', 300),
(19, 'amphotericin B', '09-03-2020', '01-01-2022', 400),
(23, 'artemether', '01-02-2020', '30-01-2022', 256),
(24, 'artemether + lumefantrine', '24-02-2020', '31-01-2022', 230),
(25, 'artesunate', '01-02-2020', '24-01-2022', 340),
(10, 'atazanavir', '30-01-2020', '31-01-2022', 230),
(32, 'carboplatin', '03-02-2020', '30-03-2022', 230),
(33, 'chlorambucil', '09-03-2020', '15-01-2022', 340),
(26, 'chloroquine', '30-03-2020', '22-01-2022', 540),
(34, 'cyclophosphamide', '04-02-2020', '05-02-2022', 540),
(35, 'cytarabine', '06-03-2020', '23-02-2022', 120),
(36, 'dacarbazine', '24-02-2020', '01-01-2022', 320),
(37, 'dactinomycin', '01-02-2020', '28-03-2022', 150),
(38, 'daunorubicin', '24-02-2020', '05-03-2022', 122),
(48, 'Diazepam', '11-04-2020', '02-12-2022', 149),
(2, 'didanosine', '21-02-2020', '03-01-2022', 122),
(17, 'diloxanide', '24-02-2020', '05-02-2022', 120),
(39, 'doxorubicin', '01-02-2020', '01-01-2022', 120),
(27, 'doxycycline', '03-03-2020', '31-01-2022', 120),
(8, 'efavirenz', '21-02-2020', '01-01-2022', 300),
(3, 'emtricitabine', '25-02-2020', '05-02-2022', 120),
(40, 'etoposide', '30-03-2020', '30-01-2022', 160),
(41, 'fluorouracil', '25-02-2020', '03-01-2022', 400),
(42, 'hydroxycarbamide', '30-01-2020', '05-02-2022', 300),
(43, 'ifosfamide', '04-03-2020', '23-02-2022', 256),
(11, 'indinavir', '04-03-2020', '24-01-2022', 340),
(4, 'lamivudine', '30-01-2020', '23-02-2022', 160),
(12, 'lopinavir + ritonavir', '26-03-2020', '22-01-2022', 540),
(28, 'mefloquine', '04-02-2020', '24-01-2022', 320),
(44, 'mercaptopurine', '26-03-2020', '01-01-2022', 230),
(45, 'mesna', '03-03-2020', '28-03-2022', 340),
(46, 'methotrexate', '04-02-2020', '05-03-2022', 540),
(18, 'metronidazole', '03-02-2020', '23-02-2022', 160),
(9, 'nevirapine', '25-02-2020', '30-01-2022', 256),
(15, 'oseltamivir', '24-01-2020', '30-03-2022', 150),
(47, 'Paracetamol', '30-01-2020', '09-09-2022', 150),
(20, 'paromomycin', '04-02-2020', '28-03-2022', 200),
(29, 'primaquine', '24-01-2020', '22-01-2022', 200),
(30, 'quinine', '23-02-2020', '21-01-2022', 300),
(16, 'ribavirin', '23-02-2020', '15-01-2022', 122),
(13, 'ritonavir', '03-03-2020', '21-01-2022', 120),
(14, 'saquinavir', '04-02-2020', '28-02-2022', 320),
(21, 'sodium stibogluconate or ', '06-03-2020', '05-03-2022', 200),
(5, 'stavudine', '04-03-2020', '01-01-2022', 400),
(31, 'sulfadoxine + pyrimethami', '24-02-2020', '28-02-2022', 256),
(6, 'tenofovir disoproxil fuma', '26-03-2020', '28-03-2022', 200),
(7, 'zidovudine', '01-03-2020', '05-03-2022', 200);

-- --------------------------------------------------------

--
-- Table structure for table `medical_4`
--

CREATE TABLE `medical_4` (
  `ID` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Mfg_Dt` varchar(25) NOT NULL,
  `Exp_Dt` varchar(25) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_4`
--

INSERT INTO `medical_4` (`ID`, `Name`, `Mfg_Dt`, `Exp_Dt`, `Price`) VALUES
(17, ' atenolol', '06-03-2020', '31-01-2022', 320),
(53, 'Acetylsalicylic', '21-02-2020', '03-01-2022', 122),
(57, 'allopurinol', '01-03-2020', '05-03-2022', 200),
(34, 'aluminium hydroxide', '06-03-2020', '30-01-2022', 340),
(30, 'amiloride', '23-02-2020', '01-01-2022', 400),
(24, 'amlodipine', '30-01-2020', '21-01-2022', 120),
(59, 'azathioprine', '25-02-2020', '30-01-2022', 256),
(6, 'biperiden', '03-03-2020', '15-01-2022', 120),
(25, 'calamine lotion', '04-03-2020', '28-02-2022', 320),
(58, 'chloroquine', '21-02-2020', '01-01-2022', 300),
(27, 'coal tar', '03-03-2020', '15-01-2022', 122),
(55, 'codeine', '04-03-2020', '01-01-2022', 400),
(2, 'dexamethasone', '01-02-2020', '22-01-2022', 256),
(28, 'dithranol', '04-02-2020', '05-02-2022', 120),
(21, 'epinephrine (adrenaline)', '01-02-2020', '28-02-2022', 230),
(8, 'ferrous salt', '24-01-2020', '23-02-2022', 400),
(9, 'ferrous salt + folic acid', '23-02-2020', '01-01-2022', 200),
(43, 'fludrocortisone', '26-03-2020', '31-01-2022', 540),
(10, 'folic acid', '06-03-2020', '28-03-2022', 200),
(29, 'furosemide', '24-01-2020', '23-02-2022', 160),
(47, 'glibenclamide', '23-02-2020', '28-02-2022', 300),
(18, 'glyceryl trinitrate', '24-02-2020', '24-01-2022', 200),
(12, 'heparin sodium', '23-02-2020', '01-01-2022', 256),
(3, 'hydrocortisone', '24-02-2020', '21-01-2022', 230),
(11, 'hydroxocobalamin', '24-02-2020', '05-03-2022', 300),
(54, 'Ibuprofen', '25-02-2020', '05-02-2022', 120),
(48, 'insulin injection (solubl', '04-02-2020', '30-03-2022', 256),
(49, 'intermediate?acting insul', '24-01-2020', '15-01-2022', 230),
(19, 'isosorbide dinitrate', '01-02-2020', '22-01-2022', 300),
(62, 'levamisole', '04-02-2020', '28-03-2022', 200),
(7, 'levodopa + carbidopa', '04-02-2020', '05-02-2022', 320),
(46, 'levonorgestrel', '24-01-2020', '21-01-2022', 200),
(22, 'lidocaine', '30-03-2020', '24-01-2022', 340),
(35, 'magnesium hydroxide', '24-02-2020', '03-01-2022', 540),
(32, 'mannitol', '09-03-2020', '05-03-2022', 256),
(63, 'mebendazole', '06-03-2020', '05-03-2022', 200),
(50, 'metformin', '23-02-2020', '22-01-2022', 340),
(60, 'methotrexate', '30-01-2020', '31-01-2022', 230),
(39, 'metoclopramide', '30-03-2020', '28-03-2022', 300),
(56, 'morphine', '26-03-2020', '28-03-2022', 200),
(64, 'niclosamide', '24-02-2020', '01-01-2022', 300),
(36, 'omeprazole', '01-02-2020', '05-02-2022', 120),
(40, 'ondansetron', '25-02-2020', '05-03-2022', 256),
(13, 'phytomenadione', '24-02-2020', '30-01-2022', 230),
(65, 'praziquantel', '01-02-2020', '30-01-2022', 256),
(4, 'prednisolone', '01-02-2020', '28-02-2022', 340),
(14, 'protamine sulfate', '03-02-2020', '31-01-2022', 340),
(66, 'pyrantel', '24-02-2020', '31-01-2022', 230),
(37, 'ranitidine', '24-02-2020', '23-02-2022', 320),
(31, 'spironolactone', '03-02-2020', '28-03-2022', 300),
(41, 'sulfasalazine', '30-01-2020', '01-01-2022', 230),
(5, 'tamoxifen', '26-03-2020', '30-03-2022', 540),
(45, 'testosterone', '04-02-2020', '22-01-2022', 320),
(20, 'verapamil', '24-02-2020', '21-01-2022', 256),
(1, 'vincristine', '24-02-2020', '24-01-2022', 300),
(15, 'warfarin', '09-03-2020', '24-01-2022', 540);

-- --------------------------------------------------------

--
-- Table structure for table `medical_5`
--

CREATE TABLE `medical_5` (
  `ID` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Mfg_Dt` varchar(25) NOT NULL,
  `Exp_Dt` varchar(25) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_5`
--

INSERT INTO `medical_5` (`ID`, `Name`, `Mfg_Dt`, `Exp_Dt`, `Price`) VALUES
(6, 'biperiden', '03-03-2020', '15-01-2022', 120),
(9, 'crosin', '24-02-2020', '24-01-2022', 34),
(10, 'crosin2', '24-02-2020', '24-01-2022', 0),
(2, 'dexamethasone', '01-02-2020', '22-01-2022', 256),
(8, 'ferrous salt', '24-01-2020', '23-02-2022', 400),
(3, 'hydrocortisone', '24-02-2020', '21-01-2022', 230),
(7, 'levodopa + carbidopa', '04-02-2020', '05-02-2022', 320),
(4, 'prednisolone', '01-02-2020', '28-02-2022', 340),
(5, 'tamoxifen', '26-03-2020', '30-03-2022', 540),
(1, 'vincristine', '24-02-2020', '24-01-2022', 300);

-- --------------------------------------------------------

--
-- Table structure for table `medical_register`
--

CREATE TABLE `medical_register` (
  `Name` varchar(30) NOT NULL,
  `Medical_Name` varchar(25) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_register`
--

INSERT INTO `medical_register` (`Name`, `Medical_Name`, `Addr`, `Email`, `phone_no`, `passwd`) VALUES
('sky', 'Metro medical store', 'lane 1,shop no 22,oppsite mumbra railway station,Thane-Maharashtra', 'sky12@gmail.com', '9834567890', '123456888'),
('Rohan S', 'Rohan chemist', 'Shop no 27, Mumbra Devi Road, opp. mumbra station, Thane, Maharashtra 400612', 'rohan101@gmail.com', '9064567834', 'roh7890'),
('karan', 'welcome pharma', 'opposite Railway Station, Mumbra East, Mumbra, Thane, Maharashtra', 'karan56@gmail.com', '8264567811', 'karan123'),
('Raj k', 'Wellcare medeco', 'lane 2,shop no 07,oppsite mumbra railway station', 'raj45@gamil.com', '9774567625', '123ert678');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `s_id` int(5) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`s_id`, `s_name`, `s_age`) VALUES
(1, 'tim', 16),
(2, 'mac', 16),
(4, 'sad', 16),
(7, 'sadsd', 16),
(21, 'sadweee', 16),
(34, 'sdsdd', 16),
(41, 'gfhsfa', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_register`
--
ALTER TABLE `customer_register`
  ADD PRIMARY KEY (`Email_id`),
  ADD UNIQUE KEY `pswd` (`pswd`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `phone_no_2` (`phone_no`);

--
-- Indexes for table `medical_1`
--
ALTER TABLE `medical_1`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `medical_2`
--
ALTER TABLE `medical_2`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `medical_3`
--
ALTER TABLE `medical_3`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `medical_4`
--
ALTER TABLE `medical_4`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `medical_5`
--
ALTER TABLE `medical_5`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `medical_register`
--
ALTER TABLE `medical_register`
  ADD PRIMARY KEY (`Medical_Name`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_name` (`s_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
