-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2023 lúc 03:06 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_webdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `total_quantity`, `total_price`, `id_status`, `id_user`, `created_at`, `updated_at`) VALUES
(28, 8, 1, '32490000', 2, 1, '2023-03-29 11:38:23', '2023-03-29 16:25:51'),
(32, 37, 1, '41990000', 2, 1, '2023-03-30 16:17:04', '2023-03-30 17:06:00'),
(33, 19, 3, '81870000', 2, 1, '2023-03-30 16:38:07', '2023-03-30 16:38:07'),
(39, 19, 2, '54580000', 2, 1, '2023-03-30 17:19:13', '2023-03-30 17:19:13'),
(44, 18, 1, '27290000', 2, 1, '2023-03-31 17:04:55', '2023-03-31 17:04:55'),
(45, 5, 1, '25490000', 2, 1, '2023-03-31 17:16:15', '2023-03-31 17:16:15'),
(46, 1, 1, '27790000', 2, 1, '2023-03-31 17:16:51', '2023-03-31 17:16:51'),
(48, 1, 1, '27790000', 2, 1, '2023-04-01 03:27:28', '2023-04-01 03:27:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `cate_product` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`id`, `cate_product`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', 'iphone', '2023-03-16 23:24:21', '2023-03-16 23:24:21'),
(2, 'MacBook', 'macbook', '2023-03-16 23:24:21', '2023-03-16 23:24:21'),
(3, 'Apple Watch', 'apple-watch', '2023-03-16 23:24:21', '2023-03-16 23:24:21'),
(4, 'Ipad', 'ipad', '2023-03-16 23:51:47', '2023-03-16 23:51:47'),
(5, 'Âm Thanh', 'am-thanh', '2023-03-16 23:51:47', '2023-03-16 23:51:47'),
(6, 'Phụ Kiện', 'phu-kien', '2023-03-16 23:51:47', '2023-03-16 23:51:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commune`
--

CREATE TABLE `commune` (
  `id` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_district` int(11) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `commune`
--

INSERT INTO `commune` (`id`, `id_province`, `id_district`, `commune`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Phương Canh', '2023-03-30 12:42:34', '2023-03-30 12:42:34'),
(2, 1, 2, 'Phạm Văn Đồng', '2023-03-30 12:42:34', '2023-03-30 12:42:34'),
(3, 2, 3, 'Thị Trấn Cồn', '2023-03-30 12:42:34', '2023-03-30 12:42:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `district` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `id_province`, `district`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nam Từ Liêm', '2023-03-30 12:38:37', '2023-03-30 12:38:37'),
(2, 1, 'Bắc Từ Liêm', '2023-03-30 12:38:37', '2023-03-30 12:38:37'),
(3, 2, 'Hải Hậu', '2023-03-30 12:38:37', '2023-03-30 12:38:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `memory_storage` varchar(50) NOT NULL,
  `code_color` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `feature_product` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name_product`, `memory_storage`, `code_color`, `slug`, `parent_id`, `image`, `quantity`, `price`, `color`, `description`, `feature_product`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 14 Pro Max', '128GB', '#FCEBD3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0007808_iphone-14-pro-max-128gb_420.png', 50, '27790000', 'Gold', 'iPhone 14 Pro Max', 1, '2023-03-17 00:01:25', '2023-03-17 00:01:25'),
(2, 'Iphone 14 Pro Max', '128GB', '#E3E5E3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008068_silver_550.webp', 45, '27790000', 'Sliver', 'iPhone 14 Pro Max', 0, '2023-03-17 00:05:46', '2023-03-17 00:05:46'),
(3, 'Iphone 14 Pro Max', '256GB', '#E3E5E3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008068_silver_550.webp', 45, '30590000', 'Sliver', 'iPhone 14 Pro Max', 0, '2023-03-17 00:11:43', '2023-03-17 00:11:43'),
(4, 'Iphone 14 Pro Max ', '512GB', '#4C4B49', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008056_space-black_550.webp', 30, '37490000', 'Black', 'iPhone 14 Pro Max', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(5, 'Iphone 14 Pro ', '128GB', '#FCEBD3', 'iphone-14-pro', 1, 'https://shopdunk.com/images/thumbs/0008762_iphone-14-pro-128gb_550.png', 30, '25490000', 'Gold', 'iPhone 14 Pro', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(6, 'Iphone 14 Pro ', '128GB', '#61586B', 'iphone-14-pro', 1, 'https://shopdunk.com/images/thumbs/0008735_iphone-14-pro-128gb_550.png', 25, '25690000', 'Deep Purple', 'iPhone 14 Pro.', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(7, 'Iphone 14 Pro ', '256GB', '#61586B', 'iphone-14-pro', 1, 'https://shopdunk.com/images/thumbs/0008735_iphone-14-pro-128gb_550.png', 25, '28290000', 'Deep Purple', 'iPhone 14 Pro', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(8, 'Iphone 14 Pro ', '512GB', '#4C4B49', 'iphone-14-pro', 1, 'https://shopdunk.com/images/thumbs/0008772_iphone-14-pro-256gb_550.png', 25, '32490000', 'Black', 'iPhone 14 Pro', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(9, 'Iphone 14', '128GB', '#da3c3a', 'iphone-14', 1, 'https://shopdunk.com/images/thumbs/0009218_iphone-14-128gb_550.png', 20, '19790000', 'Red', 'iPhone 14', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(10, 'Iphone 14 ', '256GB', '#f4e9d4', 'iphone-14', 1, 'https://shopdunk.com/images/thumbs/0009406_iphone-14-256gb_550.png', 20, '22490000', 'Starlight', 'iPhone 14', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(11, 'Iphone 14 Plus ', '128GB', '#da3c3a', 'iphone-14-plus', 1, 'https://shopdunk.com/images/thumbs/0009560_iphone-14-plus-256gb_550.png', 20, '22490000', 'Red', 'iPhone 14 Plus', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(12, 'Iphone 14 Plus ', '256GB', '#f4e9d4', 'iphone-14-plus', 1, 'https://shopdunk.com/images/thumbs/0009551_iphone-14-plus-256gb_550.png', 15, '25190000', 'Starlight', 'iPhone 14 Plus', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(13, 'Iphone 14 Plus ', '256GB', '#174c6f', 'iphone-14-plus', 1, 'https://shopdunk.com/images/thumbs/0009624_iphone-14-plus-512gb_550.png', 15, '25190000', 'Blue', 'iPhone 14 Plus', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(14, 'MacBook Air M1 ', '256GB', '#f4e9d4', 'macbook-air-m1', 2, 'https://shopdunk.com/images/thumbs/0006171_gold_550.webp', 10, '19390000', 'Starlight', 'MacBook Air M1 2020', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(15, 'MacBook Air M1 ', '256GB', '#E3E5E3', 'macbook-air-m1', 2, 'https://shopdunk.com/images/thumbs/0011196_silver_550.webp', 10, '19390000', 'Sliver', 'MacBook Air M1 2020', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(16, 'MacBook Pro M1', '256GB', '#b1b3b6', 'macbook-pro-m1', 2, 'https://shopdunk.com/images/thumbs/0007997_macbook-pro-14-m1-pro-14-core16gb512gb_550.webp', 10, '28550000', 'Space Gray', 'MacBook Pro M1 2020', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(17, 'MacBook Pro M1 ', '512GB', '#E3E5E3', 'macbook-pro-m1', 2, 'https://shopdunk.com/images/thumbs/0008008_macbook-pro-14-m1-pro-14-core16gb512gb_550.webp', 10, '31950000', 'Sliver', 'MacBook Pro M1 2020', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(18, 'MacBook Air M2 ', '256GB', '#E3E5E3', 'macbook-air-m2', 2, 'https://shopdunk.com/images/thumbs/0008536_macbook-air-136-inch-m2-chip-with-8-core-cpu-and-8-core-gpu-256gb_550.png', 10, '27290000', 'Sliver', 'MacBook Air M2 2022 (8GB RAM | 256GB SSD)', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(19, 'MacBook Air M2 ', '256GB', '#f4e9d4', 'macbook-air-m2', 2, 'https://shopdunk.com/images/thumbs/0008525_macbook-air-136-inch-m2-chip-with-8-core-cpu-and-8-core-gpu-256gb_550.png', 10, '27290000', 'Starlight', 'MacBook Air M2 2022 (8GB RAM | 256GB SSD)', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(20, 'MacBook Pro M2', '256GB', '#b1b3b6', 'macbook-pro-m2', 2, 'https://shopdunk.com/images/thumbs/0011278_silver_550.jpeg', 10, '30290000', 'Space Gray', 'MacBook Pro 13 inch M2 (10 core| 8GB RAM| 256GB SSD)', 1, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(21, 'MacBook Pro M2', '512GB', '#E3E5E3', 'macbook-pro-m2', 2, 'https://shopdunk.com/images/thumbs/0011278_silver_550.jpeg', 10, '34490000', 'Sliver', 'MacBook Pro 13 inch M2 (10 core| 8GB RAM| 256GB SSD)', 0, '2023-03-17 11:22:54', '2023-03-17 11:22:54'),
(25, 'Iphone 14 Pro Max', '256GB', '#FCEBD3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0007808_iphone-14-pro-max-128gb_420.png', 45, '30390000', 'Gold', 'iPhone 14 Pro Max', 0, '2023-03-26 23:48:04', '2023-03-26 23:48:04'),
(26, 'Iphone 14 Pro Max', '512GB', '#FCEBD3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0007808_iphone-14-pro-max-128gb_420.png', 40, '37490000', 'Gold', 'iPhone 14 Pro Max', 0, '2023-03-26 23:48:04', '2023-03-26 23:48:04'),
(27, 'Iphone 14 Pro Max', '1TB', '#FCEBD3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0007808_iphone-14-pro-max-128gb_420.png', 40, '41990000', 'Gold', 'iPhone 14 Pro Max', 0, '2023-03-26 23:48:04', '2023-03-26 23:48:04'),
(33, 'Iphone 14 Pro Max', '512GB', '#E3E5E3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008068_silver_550.webp', 40, '37490000', 'Sliver', 'iPhone 14 Pro Max', 0, '2023-03-27 00:06:48', '2023-03-27 00:06:48'),
(34, 'Iphone 14 Pro Max', '1TB', '#E3E5E3', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008068_silver_550.webp', 40, '41990000', 'Sliver', 'iPhone 14 Pro Max', 0, '2023-03-27 00:06:48', '2023-03-27 00:06:48'),
(35, 'Iphone 14 Pro Max', '128GB', '#4C4B49', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008056_space-black_550.webp', 45, '27790000', 'Black', 'iPhone 14 Pro Max', 0, '2023-03-27 00:06:48', '2023-03-27 00:06:48'),
(36, 'Iphone 14 Pro Max', '256GB', '#4C4B49', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008056_space-black_550.webp', 45, '30390000', 'Black', 'iPhone 14 Pro Max', 0, '2023-03-27 00:06:48', '2023-03-27 00:06:48'),
(37, 'Iphone 14 Pro Max', '1TB', '#4C4B49', 'iphone-14-pro-max', 1, 'https://shopdunk.com/images/thumbs/0008056_space-black_550.webp', 40, '41990000', 'Black', 'iPhone 14 Pro Max', 0, '2023-03-27 00:06:48', '2023-03-27 00:06:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `province`
--

INSERT INTO `province` (`id`, `province`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', '2023-03-30 12:35:34', '2023-03-30 12:35:34'),
(2, 'Nam Định', '2023-03-30 12:35:34', '2023-03-30 12:35:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_order`
--

CREATE TABLE `status_order` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `status_order`
--

INSERT INTO `status_order` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chưa Xử Lý', '2023-03-21 00:40:53', '2023-03-21 00:40:53'),
(2, 'Đã Đặt Hàng', '2023-03-30 16:30:39', '2023-03-30 16:30:39'),
(3, 'Đang Xử Lý', '2023-03-29 15:40:46', '2023-03-29 15:40:46'),
(4, 'Đang Vận Chuyển', '2023-03-21 00:40:53', '2023-03-21 00:40:53'),
(5, 'Giao Hàng Thành Công', '2023-03-21 00:40:53', '2023-03-21 00:40:53'),
(6, 'Đơn Hàng Bị Hủy', '2023-03-21 00:40:53', '2023-03-21 00:40:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone_number`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Lợi', 'loixoan28.07@gmail.com', 343862695, '123456', 1, '2023-03-25 07:31:18', '2023-03-25 07:31:18'),
(2, 'admin', 'admin@gmail.com', 343862695, '123456', 0, '2023-03-31 21:21:00', '2023-03-31 21:21:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_code` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_cart`
--

INSERT INTO `user_cart` (`id`, `id_cart`, `name_user`, `email`, `phone_number`, `address`, `id_code`, `created_at`, `updated_at`) VALUES
(10, 39, 'Lợi', 'loixoan28.07@gmail.com', '343862695', 'Hải Chính,Phạm Văn Đồng,Bắc Từ Liêm,Hà Nội', 'Loi-6425c4ace8814', '2023-03-31 00:19:40', '2023-03-31 00:19:40'),
(11, 44, '12312312', 'loixoan28.07@gmail.com', '343862695', 'ngõ 324,Thị Trấn Cồn,Hải Hậu,Nam Định', 'Loi-6427917f6faad', '2023-04-01 09:05:51', '2023-04-01 09:05:51'),
(12, 45, '12312312', 'loixoan28.07@gmail.com', '343862695', 'ngõ 324,Thị Trấn Cồn,Hải Hậu,Nam Định', 'Loi-6427917f7475e', '2023-04-01 09:05:51', '2023-04-01 09:05:51'),
(13, 46, '12312312', 'loixoan28.07@gmail.com', '343862695', 'ngõ 324,Thị Trấn Cồn,Hải Hậu,Nam Định', 'Loi-6427917f75b0d', '2023-04-01 09:05:51', '2023-04-01 09:05:51'),
(14, 48, 'Lợi Xoăn', 'abc@gmail.com', '23423422', 'ngõ 324,Phương Canh,Nam Từ Liêm,Hà Nội', 'Loi-6427a4b6d1075', '2023-04-01 10:27:50', '2023-04-01 10:27:50'),
(15, 48, 'Hoa ko xinh 123', 'loixoan28.07@gmail.com', '343862695', 'ngõ 324,Thị Trấn Cồn,Hải Hậu,Nam Định', 'Loi-6427ae412586f', '2023-04-01 11:08:33', '2023-04-01 11:08:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `commune`
--
ALTER TABLE `commune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `status_order`
--
ALTER TABLE `status_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category_product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
