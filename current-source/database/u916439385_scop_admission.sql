-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2026 at 07:51 PM
-- Server version: 11.8.6-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u916439385_scop_admission`
--
CREATE DATABASE IF NOT EXISTS `u916439385_scop_admission` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `u916439385_scop_admission`;

-- CLEAN MYSQL COMPATIBLE SQL DUMP
-- Compatible with MySQL 5.7+ and MariaDB

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(120) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `published` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `content_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(120) NOT NULL,
  `title` varchar(190) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_type` varchar(80) DEFAULT 'Download',
  `sort_order` int(11) DEFAULT 10,
  `active` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file_path` (`file_path`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `downloads`
(`id`,`title`,`file_path`,`file_type`,`sort_order`,`active`,`created_at`)
VALUES
(1,'SCOP Prospectus','downloads/SCOP-Prospesctus.pdf','Brochure',10,1,NOW()),
(2,'Admission Form','downloads/Admission-Form.pdf','Form',20,1,NOW()),
(3,'Documents Required','downloads/Documents-Required.jpg','Checklist',30,1,NOW()),
(4,'B.Pharm Syllabus','downloads/Bachelor-of-Pharmacy-syllabus.pdf','Syllabus',40,1,NOW()),
(5,'D.Pharm Syllabus','downloads/DPharmaSyllabus.pdf','Syllabus',50,1,NOW()),
(6,'B.Sc Nursing Syllabus','downloads/B.ScNursing_course_syllabus.pdf','Syllabus',60,1,NOW()),
(7,'GNM Syllabus','downloads/GNM-Syllabus.pdf','Syllabus',70,1,NOW()),
(8,'B.Ed Brochure','downloads/MaharanPratap_B.Ed.pdf','Brochure',80,1,NOW()),
(9,'ITI Brochure','downloads/MaharanPratap_ITI.pdf','Brochure',90,1,NOW());

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('super_admin','admin','counselor') NOT NULL DEFAULT 'counselor',
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users`
(`id`,`name`,`email`,`password_hash`,`role`,`active`,`created_at`)
VALUES
(1,'Super Admin','admin@scopkanpur.org','$2y$12$/jTJHkwzc.ynm3y3MgH8yuwgfaKIMcI1kbzI1gOy68RtgkOKlhxbG','super_admin',1,NOW()),
(2,'Admission Admin','admission-admin@scopkanpur.org','$2y$12$/jTJHkwzc.ynm3y3MgH8yuwgfaKIMcI1kbzI1gOy68RtgkOKlhxbG','admin',1,NOW()),
(3,'Counselor 1','counselor1@scopkanpur.org','$2y$12$/jTJHkwzc.ynm3y3MgH8yuwgfaKIMcI1kbzI1gOy68RtgkOKlhxbG','counselor',1,NOW());

CREATE TABLE `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(150) NOT NULL,
  `email` varchar(190) DEFAULT NULL,
  `mobile` varchar(30) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `percentage_10` varchar(20) DEFAULT NULL,
  `percentage_12` varchar(20) DEFAULT NULL,
  `stream` varchar(50) DEFAULT NULL,
  `course_interested` varchar(150) DEFAULT NULL,
  `scholarship` varchar(20) DEFAULT 'No',
  `message` text DEFAULT NULL,
  `source` varchar(120) DEFAULT NULL,
  `status` varchar(80) DEFAULT 'New Lead',
  `lead_temperature` enum('Cold','Warm','Hot') DEFAULT 'Warm',
  `assigned_to` int(11) DEFAULT NULL,
  `next_followup_at` datetime DEFAULT NULL,
  `internal_notes` text DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_course` (`course_interested`),
  KEY `idx_status` (`status`),
  KEY `idx_temp` (`lead_temperature`),
  KEY `idx_date` (`created_at`),
  KEY `fk_leads_user` (`assigned_to`),
  CONSTRAINT `fk_leads_user`
    FOREIGN KEY (`assigned_to`)
    REFERENCES `users` (`id`)
    ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `followups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(80) DEFAULT NULL,
  `next_followup_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_followup_lead` (`lead_id`),
  KEY `fk_followup_user` (`user_id`),
  CONSTRAINT `fk_followup_lead`
    FOREIGN KEY (`lead_id`)
    REFERENCES `leads` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_followup_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `users` (`id`)
    ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `otp_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(190) DEFAULT NULL,
  `otp_hash` varchar(255) DEFAULT NULL,
  `channel` varchar(50) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

COMMIT;