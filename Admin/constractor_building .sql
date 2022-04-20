-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 09:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constractor_building`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('manhthinhcuong', 'admin22');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `number` varchar(2000) NOT NULL,
  `request` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `number`, `request`) VALUES
(7, 'Đặng Xuân Vinh', 'vinh.dang23@student.passerellesnumeriques.org', '08792364111', 'Thiết kế nhà vô cùng đẹp mắt và dễ nhìn'),
(9, 'Xỉn xỉnnn', 'tam.dinh23@student.passerellesnumeriques.org', '0666586', 'uhjfuyfuy'),
(11, 'Ngô Đức Bảo ', 'takspks', '0666586888', 'hdgjhdgu'),
(12, 'Dang Xuan Vinh', 'vinh.dang23@student.passerellesnumeriques.org', '0879364221', 'sadfgasd dsfas ');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `name_project` varchar(200) NOT NULL,
  `project_code` varchar(25) NOT NULL,
  `land_area` double NOT NULL,
  `total_cons_area` double NOT NULL,
  `name_cus` varchar(50) NOT NULL,
  `cus_num` varchar(20) NOT NULL,
  `cus_ID` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `construc_type` varchar(50) NOT NULL,
  `start` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `Description` varchar(1100) NOT NULL,
  `Description_detail` varchar(1000) NOT NULL,
  `outstanding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `name_project`, `project_code`, `land_area`, `total_cons_area`, `name_cus`, `cus_num`, `cus_ID`, `address`, `district`, `construc_type`, `start`, `delivery`, `img`, `Description`, `Description_detail`, `outstanding`) VALUES
(31, 'Dự án 1', '001', 300, 200, 'Lê Văn Sỹ', '0987654321', 'Lê Tiến', 'Đồng Lê ', 'Sơn Trà', 'nhao', '12/1/2022', '1/1/2022', 'images (4).jpg', 'Rất là đẹp có điều giá hơi mắc', 'Một siêu phẩm của Tập Đoàn Hưng Thịnh đã xuất hiện tại Bình Dương. Với lối kiến trúc hiện đại thân thiện với môi trường hài hòa với thiên nhiên. Dự án căn hộ New Galaxy Hưng Thịnh Dĩ An Bình Dương Làng Đại Học, mỗi căn hộ tại đây được trau chuốt tỉ mỉ đến từng centimet thể hiện một phong cách hết sức độc đáo và sang trọng…  Đặc biệt căn hộ New Galaxy Hưng Thịnh Bình Dương đây là cơ hội thật sự cho những người thu nhập trung bình biến ước mơ, mong muốn có được một căn hộ như ý thành hiện thực.', 'yes'),
(32, 'Dự án 2', '002', 400, 200, 'Lê Văn Sỹ', '0987654321', 'Lê Tiến', 'Đồng Lê ', 'Sơn Trà', 'nhavuon', '1/1/2022', '2022/1/1', 'slides5.jpg', 'Khu nhà ven biển cao cấp', 'Vai trò của học sinh trong thực hiện dự án Nhà nghiên cứu khoa học Lập trình viên thiết Sắm Phóng viên kế đồ họa vai Nhà quản lý môi trường', 'no'),
(33, 'Dự án 3', '003', 400, 200, 'Lê Văn Sỹ', '0987654321', 'Lê Tiến', 'Đồng Lê ', 'Sơn Trà', 'nhao', '1/1/2022', '2022/1/1', 'images (2).jpg', 'Khu nhà ven biển cao cấp', 'Vai trò của học sinh trong thực hiện dự án Nhà nghiên cứu khoa học Lập trình viên thiết Sắm Phóng viên kế đồ họa vai Nhà quản lý môi trường', 'yes'),
(34, 'Dự án 4', '004', 400, 200, 'Lê Văn Sỹ', '0987654321', 'Lê Tiến', 'Đồng Lê ', 'Tuyên Hóa', 'nhavuon', '1/1/2022', '2022/1/1', 'images (3).jpg', 'Khu nhà ven biển cao cấp', 'Vai trò của học sinh trong thực hiện dự án Nhà nghiên cứu khoa học Lập trình viên thiết Sắm Phóng viên kế đồ họa vai Nhà quản lý môi trường', 'yes'),
(35, 'Dự án 5', '005', 500, 260, 'Lê Văn Sỹ', '0987654321', 'Lê Tiến', 'Đồng Lê ', 'Tuyên Hóa', 'nhavuon', '1/1/2022', '2022/1/1', 'images.jpg', 'Khu nhà ven biển cao cấp', 'Vai trò của học sinh trong thực hiện dự án Nhà nghiên cứu khoa học Lập trình viên thiết Sắm Phóng viên kế đồ họa vai Nhà quản lý môi trường', 'yes'),
(36, 'Dự án 6', '006', 500, 200, 'Lê Văn Sỹ Tiền', '0987654321', '215548752', 'Đồng Lê ', 'Sơn Trà', 'nhao', '1/1/2022', '2022/1/1', '41177-cong-vien-sai-gon-1-700x467.jpg', 'Khu đô thị dự án Hà DSo', 'Dự án khởi nghiệp chính là những ý tưởng kinh doanh và được cá nhân bạn (hoặc một nhóm) bắt tay vào thực hiện và thành lập một doanh nghiệp làm việc theo ý tưởng kinh doanh đó. Khi có cho mình một dự án khởi nghiệp, bạn chính là người trực tiếp quản lý việc điều phối và kinh doanh của doanh nghiệp hoặc cũng có thể quản lý với tư cách là Co-Founder ( người đồng sáng lập) chính vì vậy mà bạn phải ý thức được vai trò và trách nghiệm mà bạn gánh vác. Tất nhiên, thành quả mà bạn đạt được tương xứng với những khó khăn mà bạn trải qua. ', 'yes'),
(37, 'Dự án 7', '007', 400, 150, 'Lê Văn Vinh', '0987654321', '215549874', 'Đồng Lê Quảng Bình ', 'Liên Chiểu', 'Cao tầng', '19/04/2022', '15/7/2020', '22070665_891355124350024_2926341049045483520_n.jpg', 'Khu đô thị Vạn Phúc nơi đầu tư sinh lời', 'Vai trò của học sinh trong thực hiện dự án Nhà nghiên cứu khoa học Lập trình viên thiết Sắm Phóng viên kế đồ họa vai Nhà quản lý môi trường', 'no'),
(38, 'Dự án 5', '003', 300, 200, 'Lê Văn Sỹ', '0987654321', 'Lê Tiến', 'PNV23A', 'Thanh Khê', 'Cao tầng', '12/1/2022', '12/4/2022', '7227347576_d3204e8e5c_b(2).jpg', 'gsdfgsdfg', 'Một siêu phẩm của Tập Đoàn Hưng Thịnh đã xuất hiện tại Bình Dương. Với lối kiến trúc hiện đại thân thiện với môi trường hài hòa với thiên nhiên. Dự án căn hộ New Galaxy Hưng Thịnh Dĩ An Bình Dương Làng Đại Học, mỗi căn hộ tại đây được trau chuốt tỉ mỉ đến từng centimet thể hiện một phong cách hết sức độc đáo và sang trọng…  Đặc biệt căn hộ New Galaxy Hưng Thịnh Bình Dương đây là cơ hội thật sự cho những người thu nhập trung bình biến ước mơ, mong muốn có được một căn hộ như ý thành hiện thực.', 'yes'),
(39, 'Dự án 9', '009', 300, 200, 'Lê Văn Vinh', '0987654321', 'Lê Tiến', 'Đồng Lê Quảng Bình', 'Sơn Trà', 'Nhà ở', '2022/1/1', '1/1/2022', 'can-ho-saigon-mia-1536x793.jpg', 'Khu nhà ven biển cao cấp Vạn Phúc', 'Vai trò của học sinh trong thực hiện dự án Nhà nghiên cứu khoa học Lập trình viên thiết Sắm Phóng viên kế đồ họa vai Nhà quản lý môi trường', 'yes'),
(40, 'Dự án 12', '0012', 300, 150, 'Lê Văn Vinh', '0987654321', '215549874', 'Đồng Lê Quảng Bình Đinh', 'Sơn Trà', 'nhao', '12/1/2022', '2022/1/1', 'download (1).jpg', 'Khu nhà ven biển cao cấp Vạn phúc lợi ích xã hội', 'Dự án khởi nghiệp chính là những ý tưởng kinh doanh và được cá nhân bạn (hoặc một nhóm) bắt tay vào thực hiện và thành lập một doanh nghiệp làm việc theo ý tưởng kinh doanh đó. Khi có cho mình một dự án khởi nghiệp, bạn chính là người trực tiếp quản lý việc điều phối và kinh doanh của doanh nghiệp hoặc cũng có thể quản lý với tư cách là Co-Founder ( người đồng sáng lập) chính vì vậy mà bạn phải ý thức được vai trò và trách nghiệm mà bạn gánh vác. Tất nhiên, thành quả mà bạn đạt được tương xứng với những khó khăn mà bạn trải qua. ', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(100) NOT NULL,
  `Timeline_1` varchar(1100) NOT NULL,
  `Timeline_2` varchar(200) NOT NULL,
  `Timeline_3` varchar(300) NOT NULL,
  `Timeline_4` varchar(400) NOT NULL,
  `Timeline_5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `Timeline_1`, `Timeline_2`, `Timeline_3`, `Timeline_4`, `Timeline_5`) VALUES
(31, 'Tháng 12/2020', 'Tháng 01/2021', 'Tháng 02/2021', 'Tháng 03/2021', 'Tháng 04/2021'),
(32, 'Tháng  05/2021', 'Tháng  6/2021', 'Tháng  07/2021', 'Tháng  08/2021', 'Tháng  09/2021'),
(33, 'Tháng  10/2021', 'Tháng  11/2021', 'Tháng  12/2021', 'Tháng 01/2022', 'Tháng 02/2022'),
(34, 'Tháng  03/2022', 'Tháng  04/2022', 'Tháng  05/2022', 'Tháng  06/2022', 'Tháng 07/2022'),
(35, 'Tháng  08/2022', 'Tháng  09/2022', 'Tháng  10/2022', 'Tháng  11/2022', 'Tháng  12/2022');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_image`
--

CREATE TABLE `timeline_image` (
  `id` int(255) NOT NULL,
  `img_1` varchar(1000) NOT NULL,
  `img_2` varchar(1000) NOT NULL,
  `img_3` varchar(1000) NOT NULL,
  `img_4` varchar(1000) NOT NULL,
  `img_5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline_image`
--

INSERT INTO `timeline_image` (`id`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`) VALUES
(31, '2e5bd227cfe833b66af9.jpg', 'can-ho-saigon-mia-1536x793.jpg', 'Grand-center-quy-nhơn-1.png', 'hung-thinh-corp-fe619931a26a0812.jpg', 'mau-biet-thu-nha-dep-2-tang-hien-dai-bt21377-v2.jpg'),
(32, 'mau-nha-2-tang-dep-thiet-ke-uy-tin-tai-quang-binh-2.jpg', 'q7-boulevard-hung-thinh-1536x621.jpg', 'tong-the-du-an-can-ho-ho-tram-complex.jpg', 'tong-the-du-an-vung-tau-pearl-1.jpg', '2e5bd227cfe833b66af9.jpg'),
(33, 'can-ho-saigon-mia-1536x793.jpg', 'f8bd2805_1524550038.jpg', 'Grand-center-quy-nhơn-1.png', 'hung-thinh-corp-fe619931a26a0812.jpg', 'images (1).jpg'),
(34, 'images (1).jpg', 'images (2).jpg', 'images.jpg', 'mau-biet-thu-nha-dep-2-tang-hien-dai-bt21377-v2.jpg', 'can-ho-saigon-mia-1536x793.jpg'),
(36, '101988395(3).jpg', 'can-ho-saigon-mia-1536x793.jpg', 'download (2).jpg', 'download (3).jpg', 'download (4).jpg'),
(37, '2e5bd227cfe833b66af9.jpg', '41177-cong-vien-sai-gon-1-700x467.jpg', '22070665_891355124350024_2926341049045483520_n.jpg', '101988395(3).jpg', '7227347576_d3204e8e5c_b(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_text`
--

CREATE TABLE `timeline_text` (
  `id` int(11) NOT NULL,
  `text1` varchar(1000) NOT NULL,
  `text2` varchar(1000) NOT NULL,
  `text3` varchar(1000) NOT NULL,
  `text4` varchar(1000) NOT NULL,
  `text5` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline_text`
--

INSERT INTO `timeline_text` (`id`, `text1`, `text2`, `text3`, `text4`, `text5`) VALUES
(31, 'Khi nào bạn cần may áo giáp sắt nên sang phố hỏi cửa hàng á phi âu', 'Khi nào bạn cần may áo giáp sắt nên sang phố hỏi cửa hàng á phi âu', 'Khi nào bạn cần may áo giáp sắt nên sang phố hỏi cửa hàng á phi âu', 'fadfadsfda', 'fadsfadfadfads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline_image`
--
ALTER TABLE `timeline_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline_text`
--
ALTER TABLE `timeline_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `timeline_image`
--
ALTER TABLE `timeline_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `timeline_text`
--
ALTER TABLE `timeline_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
