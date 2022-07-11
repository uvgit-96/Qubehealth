-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2022 at 09:05 AM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plotbazzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_district`
--

CREATE TABLE `city_district` (
  `id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_district`
--

INSERT INTO `city_district` (`id`, `state_id`, `name`, `created_at`) VALUES
(1, 1, 'Mumbai', '2022-03-30 06:13:40'),
(2, 1, 'Thane', '2022-03-30 06:14:14'),
(3, 1, 'Pune', '2022-03-30 06:28:56'),
(4, 1, 'Borivali', '2022-04-09 06:06:18'),
(5, 1, 'Lonavala', '2022-06-26 06:51:59'),
(6, 1, 'Navi Mumbai', '2022-06-26 06:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `ci_admin`
--

CREATE TABLE `ci_admin` (
  `admin_id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `admin_role_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `role` enum('Admin','HR','Recruiter','Accountant','Employee','MIS') NOT NULL DEFAULT 'Recruiter',
  `change_rec_permission` varchar(50) DEFAULT 'not_allow',
  `user_status` enum('Pending Approval','Active','Inactive','Reject') NOT NULL DEFAULT 'Pending Approval',
  `otp` varchar(10) DEFAULT NULL,
  `forgot_password_otp` varchar(10) DEFAULT NULL,
  `last_login` varchar(50) DEFAULT NULL,
  `is_active` int(255) NOT NULL DEFAULT '0',
  `is_admin` int(11) DEFAULT NULL,
  `is_supper` int(11) DEFAULT NULL,
  `last_login_ip` varchar(30) DEFAULT NULL,
  `last_logout_time` varchar(50) DEFAULT NULL,
  `whatsapp_db_status` varchar(10) NOT NULL DEFAULT 'no',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `registration_date_time` varchar(50) DEFAULT NULL,
  `activate_date_time` varchar(50) DEFAULT NULL,
  `deactivate_date_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_admin`
--

INSERT INTO `ci_admin` (`admin_id`, `employee_id`, `admin_role_id`, `username`, `firstname`, `lastname`, `name`, `email`, `mobile_no`, `password`, `branch`, `role`, `change_rec_permission`, `user_status`, `otp`, `forgot_password_otp`, `last_login`, `is_active`, `is_admin`, `is_supper`, `last_login_ip`, `last_logout_time`, `whatsapp_db_status`, `created_on`, `registration_date_time`, `activate_date_time`, `deactivate_date_time`) VALUES
(1, '013', 1, 'admin', 'Suraj', 'Verma', 'Suraj Verma', 'suraikumar.1664@gmail.com', 9867600765, '$2y$10$ZBCxzyQTNodP8zMl/TmJ5eq1M4ueArAkBUDhdK3WU6Ptj1Wt2vn4O', 'Himayath nagar', 'Recruiter', 'not_allow', 'Active', '', '', '', 1, 1, 1, '', '', 'no', '2021-06-23 10:09:22', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_general_settings`
--

CREATE TABLE `ci_general_settings` (
  `id` int(11) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `copyright` tinytext,
  `email_from` varchar(100) NOT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` int(11) DEFAULT NULL,
  `smtp_user` varchar(50) DEFAULT NULL,
  `smtp_pass` varchar(50) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `recaptcha_secret_key` varchar(255) DEFAULT NULL,
  `recaptcha_site_key` varchar(255) DEFAULT NULL,
  `recaptcha_lang` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_general_settings`
--

INSERT INTO `ci_general_settings` (`id`, `favicon`, `logo`, `application_name`, `timezone`, `currency`, `copyright`, `email_from`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `facebook_link`, `twitter_link`, `google_link`, `youtube_link`, `linkedin_link`, `instagram_link`, `recaptcha_secret_key`, `recaptcha_site_key`, `recaptcha_lang`, `created_date`, `updated_date`) VALUES
(1, 'assets/img/4493449afefdb7dfbee687355a9a940f.png', 'assets/img/2d4f39fb1960aa22c8cc14e4548826ec.png', 'Plotbazzar.com', 'America/Adak', 'USD', '2coms All rights reserved. Copyright © 2021 ', 'no-reply@onjob.com', 'ssl://smtp.gmail.com', 465, 'naumanahmedcs@gmail.com', 'WWWdua3582154@', 'https://facebook.com', 'https://twitter.com', 'https://google.com', 'https://youtube.com', 'https://linkedin.com', 'https://instagram.com', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI', 'en', '2021-09-06 00:00:00', '2021-09-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `taluka_id` int(11) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `ownership_type` enum('Owner','Agent') DEFAULT NULL,
  `description` text,
  `property_type` enum('Residential Land','Agriculture land','Estate Land','Industrial land','Farm Land','Bunglow','Row House','Studio Apartment','N.A Land') DEFAULT NULL,
  `plot_length` varchar(50) DEFAULT NULL,
  `plot_breadth` varchar(50) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `price_details` varchar(255) DEFAULT NULL,
  `sq_price` varchar(100) DEFAULT NULL,
  `price_negotiable` varchar(10) DEFAULT NULL,
  `status` enum('inactive','active') NOT NULL DEFAULT 'inactive',
  `added_by` varchar(255) DEFAULT NULL,
  `added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `state_id`, `district_id`, `taluka_id`, `pincode`, `ownership_type`, `description`, `property_type`, `plot_length`, `plot_breadth`, `cover_photo`, `price_details`, `sq_price`, `price_negotiable`, `status`, `added_by`, `added_datetime`) VALUES
(1, 6, 1, 1, 1, '400029', 'Owner', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam', 'Residential Land', '1000', '2000', 'cover_photo1656258922.jpg', '200000', '32434', 'Yes', 'active', 'superadmin', '2022-06-26 07:06:50'),
(2, 3, 1, 2, 3, '123456', 'Agent', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Agriculture land', '12321321', '34324', 'cover_photo1656259533.jpg', '200000', '23432', 'Yes', 'active', 'superadmin', '2022-06-26 07:06:40'),
(3, 4, 1, 3, 5, '432123', 'Owner', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', 'Estate Land', '24324', '234234', 'cover_photo1656259929.jpg', '21334', '234324', 'No', 'active', 'superadmin', '2022-06-26 07:06:56'),
(4, 1, 1, 4, 2, '123213', 'Owner', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Estate Land', '123213', '123123', 'cover_photo1656260472.jpg', '200000', '213123', 'Yes', 'active', 'superadmin', '2022-06-26 07:06:29'),
(5, 5, 1, 5, 6, '543434', 'Owner', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Industrial land', '23213', '4354', 'cover_photo1656260979.jpg', '3r5435', '435435', 'Yes', 'active', 'superadmin', '2022-06-26 07:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `properties_gallery`
--

CREATE TABLE `properties_gallery` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `number` enum('first','second','third','fourth','fifth') DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `uploaded_by` varchar(255) DEFAULT NULL,
  `upload_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties_gallery`
--

INSERT INTO `properties_gallery` (`id`, `property_id`, `number`, `file_name`, `uploaded_by`, `upload_datetime`) VALUES
(1, 1, 'first', 'first_1656258934.jpg', 'superadmin', '2022-06-26 13:06:34'),
(2, 1, 'second', 'second_1656258941.jpg', 'superadmin', '2022-06-26 13:06:41'),
(3, 1, 'third', 'third_1656258951.jpg', 'superadmin', '2022-06-26 13:06:51'),
(4, 1, 'fourth', 'fourth_1656258978.jpg', 'superadmin', '2022-06-26 13:06:18'),
(5, 1, 'fifth', 'fifth_1656259005.jpg', 'superadmin', '2022-06-26 13:06:45'),
(6, 3, 'first', 'first_1656260683.jpg', 'superadmin', '2022-06-26 14:06:43'),
(7, 3, 'second', 'second_1656260689.jpg', 'superadmin', '2022-06-26 14:06:49'),
(8, 3, 'third', 'third_1656260695.jpg', 'superadmin', '2022-06-26 14:06:55'),
(9, 3, 'fourth', 'fourth_1656260720.jpg', 'superadmin', '2022-06-26 14:06:20'),
(10, 3, 'fifth', 'fifth_1656260738.jpg', 'superadmin', '2022-06-26 14:06:38'),
(11, 2, 'first', 'first_1656260773.jpg', 'superadmin', '2022-06-26 14:06:13'),
(12, 2, 'second', 'second_1656260778.jpg', 'superadmin', '2022-06-26 14:06:18'),
(13, 2, 'third', 'third_1656260783.jpg', 'superadmin', '2022-06-26 14:06:23'),
(14, 2, 'fourth', 'fourth_1656260792.jpg', 'superadmin', '2022-06-26 14:06:32'),
(15, 2, 'fifth', 'fifth_1656260819.jpg', 'superadmin', '2022-06-26 14:06:59'),
(16, 4, 'first', 'first_1656260863.jpg', 'superadmin', '2022-06-26 14:06:43'),
(17, 4, 'second', 'second_1656260868.jpg', 'superadmin', '2022-06-26 14:06:48'),
(18, 4, 'third', 'third_1656260873.jpg', 'superadmin', '2022-06-26 14:06:53'),
(19, 4, 'fourth', 'fourth_1656260879.jpg', 'superadmin', '2022-06-26 14:06:59'),
(20, 4, 'fifth', 'fifth_1656260884.jpg', 'superadmin', '2022-06-26 14:06:04'),
(21, 5, 'first', 'first_1656261563.jpg', 'superadmin', '2022-06-26 14:06:23'),
(22, 5, 'second', 'second_1656261573.jpg', 'superadmin', '2022-06-26 14:06:33'),
(23, 5, 'third', 'third_1656261709.jpg', 'superadmin', '2022-06-26 14:06:49'),
(24, 5, 'fourth', 'fourth_1656261734.jpg', 'superadmin', '2022-06-26 14:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`id`, `district_id`, `name`, `created_at`) VALUES
(1, 1, 'Andheri', '2022-03-30 07:00:35'),
(2, 4, 'Kashimira', '2022-04-09 07:06:33'),
(3, 2, 'Vartak Nagar', '2022-06-26 06:52:43'),
(4, 6, 'Taloja', '2022-06-26 06:53:00'),
(5, 3, 'Pune district', '2022-06-26 06:53:37'),
(6, 5, 'Lonavala Pune', '2022-06-26 06:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `office_email` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `alt_contact` varchar(20) DEFAULT NULL,
  `office_contact` varchar(20) DEFAULT NULL,
  `profle_img` text,
  `gender` enum('male','female','others') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `aadhaar_no` varchar(20) DEFAULT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `address` text,
  `pincode` varchar(10) DEFAULT NULL,
  `fb_link` text,
  `twt_link` text,
  `insta_link` text,
  `lnk_link` text,
  `password` text,
  `created_by` varchar(50) DEFAULT NULL,
  `status` enum('inactive','active','join and left','absconded','terminated','resign','delete') NOT NULL DEFAULT 'inactive',
  `register_datetime` datetime DEFAULT NULL,
  `last_update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alt_email`, `office_email`, `contact`, `alt_contact`, `office_contact`, `profle_img`, `gender`, `date_of_birth`, `aadhaar_no`, `pan_no`, `address`, `pincode`, `fb_link`, `twt_link`, `insta_link`, `lnk_link`, `password`, `created_by`, `status`, `register_datetime`, `last_update_datetime`) VALUES
(1, 'Uttam Vishwakarma', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774123', NULL, NULL, 'profle_img_1656255258.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/s', '$2y$10$w6Ouk6dFKvCP/A7hC/oyh.NrUQo1mg08tw6ba2vLpBAzmvluPfsFO', 'superadmin', 'inactive', '2022-06-26 05:06:42', '2022-06-26 05:06:25'),
(2, 'Suraj Verma', 'suraj.v@gmail.com', NULL, NULL, '1234567890', NULL, NULL, 'profle_img1656256626.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$VQneOXMrChl.HJix09IICe3y7XrysSIOEjbGTpOrgbgqGHbOdJTXS', 'superadmin', 'active', '2022-06-26 06:06:07', '2022-06-26 06:06:21'),
(3, 'Agent Name1', 'agent1@gmail.com', NULL, NULL, '2132112345', NULL, NULL, 'profle_img1656256772.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$3pby0wTqNKJ1r.dxNXDaveupJRR21a5WQs8B/ik8V/kX6IqZDhkLi', 'superadmin', 'active', '2022-06-26 06:06:32', '2022-06-26 06:06:49'),
(4, 'Agent Name2', 'agent2@gmail.com', NULL, NULL, '5432123451', NULL, NULL, 'profle_img1656256840.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$ngryV49HDCsoaakEJLpatuSGZnxivIWmdsHce0JihHSbH2Jx1hRmq', 'superadmin', 'inactive', '2022-06-26 06:06:40', NULL),
(5, 'Agent Name3', 'agent3@gmail.com', NULL, NULL, '9876512345', NULL, NULL, 'profle_img1656256947.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$j7IqjVwaUuV23BnnBwhl1ObyjeBcVYXUbnbuNDtoBUQ5ExMofPRTS', 'superadmin', 'active', '2022-06-26 06:06:27', '2022-06-26 06:06:43'),
(6, 'Agent Name4', 'agent4@gmail.com', NULL, NULL, '2323234523', NULL, NULL, 'profle_img1656256999.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$2cIH4I1ekquNJu2R0r/D7elHTi2bRIhe0D257h6K.xRdnwwBAwbni', 'superadmin', 'active', '2022-06-26 06:06:20', '2022-06-26 06:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `office_email` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `alt_contact` varchar(20) DEFAULT NULL,
  `office_contact` varchar(20) DEFAULT NULL,
  `profle_img` text,
  `gender` enum('male','female','others') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `aadhaar_no` varchar(20) DEFAULT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `address` text,
  `pincode` varchar(10) DEFAULT NULL,
  `fb_link` text,
  `twt_link` text,
  `insta_link` text,
  `lnk_link` text,
  `password` text,
  `action` varchar(255) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `status` enum('inactive','active','join and left','absconded','terminated','resign','delete') NOT NULL DEFAULT 'inactive',
  `register_datetime` datetime DEFAULT NULL,
  `last_update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`id`, `user_id`, `name`, `email`, `alt_email`, `office_email`, `contact`, `alt_contact`, `office_contact`, `profle_img`, `gender`, `date_of_birth`, `aadhaar_no`, `pan_no`, `address`, `pincode`, `fb_link`, `twt_link`, `insta_link`, `lnk_link`, `password`, `action`, `created_by`, `status`, `register_datetime`, `last_update_datetime`) VALUES
(1, '1', 'Uttam', 'uttamvishwakarma99@gmail.com', NULL, NULL, '7045855443', NULL, NULL, 'profle_img1656254802.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$w6Ouk6dFKvCP/A7hC/oyh.NrUQo1mg08tw6ba2vLpBAzmvluPfsFO', 'registration is done', 'superadmin', 'inactive', '2022-06-26 05:06:42', NULL),
(2, '1', 'Uttam', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774012', NULL, NULL, 'profle_img1656254837.', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:17'),
(3, '1', 'Uttam', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774012', NULL, NULL, 'profle_img1656254877.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:57'),
(4, '1', 'Uttam Vishwakarma', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774012', NULL, NULL, 'http://plotbazzar.com/dev/uploads/profile_photos/profle_img1656254877.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:45'),
(5, '1', 'Uttam Vishwakarma', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774012', NULL, NULL, 'profle_img_1656255153.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:33'),
(6, '1', 'Uttam Vishwakarma', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774123', NULL, NULL, 'http://plotbazzar.com/dev/uploads/profile_photos/profle_img_1656255153.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:44'),
(7, '1', 'Uttam Vishwakarma', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774123', NULL, NULL, 'profle_img_1656255258.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:18'),
(8, '1', 'Uttam Vishwakarma', 'uttamvishwakarma99@gmail.com', NULL, NULL, '9326774123', NULL, NULL, 'profle_img_1656255258.JPG', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/s', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 05:06:25'),
(9, '2', 'Suraj Verma', 'suraj.v@gmail.com', NULL, NULL, '1234567890', NULL, NULL, 'profle_img1656256626.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$VQneOXMrChl.HJix09IICe3y7XrysSIOEjbGTpOrgbgqGHbOdJTXS', 'registration is done', 'superadmin', 'inactive', '2022-06-26 06:06:07', NULL),
(10, '2', 'Suraj Verma', 'suraj.v@gmail.com', NULL, NULL, '1234567890', NULL, NULL, 'profle_img1656256626.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 06:06:21'),
(11, '3', 'Agent Name1', 'agent1@gmail.com', NULL, NULL, '2132112345', NULL, NULL, 'profle_img1656256772.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$3pby0wTqNKJ1r.dxNXDaveupJRR21a5WQs8B/ik8V/kX6IqZDhkLi', 'registration is done', 'superadmin', 'inactive', '2022-06-26 06:06:32', NULL),
(12, '3', 'Agent Name1', 'agent1@gmail.com', NULL, NULL, '2132112345', NULL, NULL, 'profle_img1656256772.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 06:06:49'),
(13, '4', 'Agent Name2', 'agent2@gmail.com', NULL, NULL, '5432123451', NULL, NULL, 'profle_img1656256840.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$ngryV49HDCsoaakEJLpatuSGZnxivIWmdsHce0JihHSbH2Jx1hRmq', 'registration is done', 'superadmin', 'inactive', '2022-06-26 06:06:40', NULL),
(14, '5', 'Agent Name3', 'agent3@gmail.com', NULL, NULL, '9876512345', NULL, NULL, 'profle_img1656256947.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$j7IqjVwaUuV23BnnBwhl1ObyjeBcVYXUbnbuNDtoBUQ5ExMofPRTS', 'registration is done', 'superadmin', 'inactive', '2022-06-26 06:06:27', NULL),
(15, '5', 'Agent Name3', 'agent3@gmail.com', NULL, NULL, '9876512345', NULL, NULL, 'profle_img1656256947.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 06:06:43'),
(16, '6', 'Agent Name4', 'agent4@gmail.com', NULL, NULL, '2323234523', NULL, NULL, 'profle_img1656256999.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', '$2y$10$2cIH4I1ekquNJu2R0r/D7elHTi2bRIhe0D257h6K.xRdnwwBAwbni', 'registration is done', 'superadmin', 'inactive', '2022-06-26 06:06:20', NULL),
(17, '6', 'Agent Name4', 'agent4@gmail.com', NULL, NULL, '2323234523', NULL, NULL, 'profle_img1656256999.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/feed/', NULL, 'details is edited by superadmin', NULL, 'active', NULL, '2022-06-26 06:06:33'),
(18, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'data is deleted', NULL, 'delete', '0000-00-00 00:00:00', '2022-06-26 06:06:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_district`
--
ALTER TABLE `city_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_admin`
--
ALTER TABLE `ci_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`mobile_no`);

--
-- Indexes for table `ci_general_settings`
--
ALTER TABLE `ci_general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_gallery`
--
ALTER TABLE `properties_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_district`
--
ALTER TABLE `city_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ci_admin`
--
ALTER TABLE `ci_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_general_settings`
--
ALTER TABLE `ci_general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties_gallery`
--
ALTER TABLE `properties_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
