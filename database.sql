-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 03:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `waktu_presensi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `nim`, `nama`, `status`, `waktu_presensi`) VALUES
(1, '123456789', 'Bejo', 'Hadir', '2023-12-22 10:14:14'),
(2, '987654321', 'Paiji', 'Hadir', '2023-12-22 10:31:55'),
(3, '111223344', 'ANDI', 'Belum Hadir', '2023-12-22 16:05:38'),
(4, '555666777', 'ADI', 'Belum Hadir', '2023-12-22 16:07:30'),
(5, '888999000', 'BUDI', 'Belum Hadir', '2023-12-22 16:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `priority` enum('Low','Medium','High') DEFAULT 'Medium',
  `status` enum('To Do','In Progress','Completed') DEFAULT 'To Do',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `due_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_manager`
--

CREATE TABLE `task_manager` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `due_time` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('ongoing','completed') DEFAULT 'ongoing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_manager`
--

INSERT INTO `task_manager` (`task_id`, `task_name`, `description`, `due_time`, `created_at`, `status`) VALUES
(8, 'Tugas matkul basisdata', 'Membuat Laporan', '2024-01-04 23:59:00', '2024-01-04 01:19:47', 'ongoing'),
(9, 'pbd', 'tugas UAS', '2024-01-04 08:41:00', '2024-01-04 01:41:53', 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `task_manager`
--
ALTER TABLE `task_manager`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_manager`
--
ALTER TABLE `task_manager`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
