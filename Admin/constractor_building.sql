-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 05:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(11, 'Ngô Đức Bảo ', 'takspks', '0666586888', 'hdgjhdgu');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(50) NOT NULL,
  `img` varchar(1100) NOT NULL,
  `Content` varchar(2000) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Description_detail` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `img`, `Content`, `Description`, `Description_detail`) VALUES
(31, 'slides1.jpg', 'Biệt Thự Vườn Quận 9 Saigon Garden Village', 'Trên cả tuyệt vời', 'Một siêu phẩm của Tập Đoàn Hưng Thịnh đã xuất hiện tại Bình Dương. Với lối kiến trúc hiện đại thân thiện với môi trường hài hòa với thiên nhiên. Dự án căn hộ New Galaxy Hưng Thịnh Dĩ An Bình Dương Làng Đại Học, mỗi căn hộ tại đây được trau chuốt tỉ mỉ đến từng centimet thể hiện một phong cách hết sức độc đáo và sang trọng… Đặc biệt căn hộ New Galaxy Hưng Thịnh Bình Dương đây là cơ hội thật sự cho những người thu nhập trung bình biến ước mơ, mong muốn có được một căn hộ như ý thành hiện thực.'),
(32, 'slides2.jpg', ' Saigon Mystery Villa Quận 2 Đảo Kim Cương', 'Trên cả tuyệt vời cho gia đình bạn', 'Công ty cổ phần tư vấn Thiết Kế Nhà Đẹp Tân Á – Công ty thiết kế nhà đẹp uy tín số 1 tại Quảng Bình, mẫu biệt thự 2 tầng mái nhật. Qua tìm hiểu trên mạng anh Sơn tìm đến Tân Á mong muốn KTS Tân Á thiết kế cho mình ngôi nhà hiện đại, phóng khoáng, trẻ trung với sân thượng trước sân tạo không gian thoải mái, đầm ấm cho gia đình mình. Tuy anh đang công tác ở nư'),
(33, 'slides3.jpg', 'Đất Nền Vĩnh Long New Town P5 Tp Vĩnh Long', 'Rất hiện đại ', 'Sau thành công của hàng loạt dự án đất nền như : Golden Bay – Cam Ranh , Sentosa – Phan Thiết , Bà Rịa City Gate – TP Bà Rịa , Biên Hòa New City – Biên Hòa , Sài Gòn Mystery Villas – Quận 2 TP HCM thì Hưng Thịnh Corporation tung ra một dự án đất nền tọa lạc tại trung tâm Thành Phố Vĩnh Long . Một dự án nhiều tâm huyết mong rằng Hưng Thịnh sẽ khẳng định tên tuổi trên thị trường bất động sản mang tên ” Vĩnh Long New Town”.'),
(34, 'slides4.jpg', 'Đất nền Sentosa', 'SENTOSA VILLA PHAN THIẾT – THIÊN ĐƯỜNG NGHỈ DƯỠNG MŨI NÉ – PHAN THIẾT ĐƯỢC MỆNH DANH LÀ “THỦ ĐÔ RESORT CỦA VIỆT NAM”.', 'SENTOSA VILLA tọa lạc ngay mặt tiền đường Huỳnh Thúc Kháng rông 16ha bao gồm 233 nền biệt thự view hướng biển được thiết kế theo phong cách sang trọng & hiện đại. Dự án có đầy đủ tiện ích để phục vụ nhu cầu nghĩ dưỡng cao cấp với Khách Sạn, Spa, Nhà hàng, Terrace coffee…Đặc biệt khu Villas có vị trí đẹp và thuận lợi vì nằm ngay khu vực trung tâm Resort của Phan Thiết với cốt nền cao nên có view nhìn bao quát cả vịnh Mũi né và TP Phan Thiết. Dự án đã hoàn thiện hạ tầng cơ bản và có thể xây nhà ngay.'),
(35, 'slides5.jpg', 'KN Paradise Cam Ranh', ' SIÊU PHẨM GIỚI HẠN THIÊN LONG HẠ THẾ ', 'Para Draco lấy ý tưởng từ sự vượt trội xuất sắc Para và Draco là chòm Sao Thiên Long. Para Draco được tạo dựng với triết lý mang lại sự thịnh vượng trường tồn như hào quang Thiên Long rạng rỡ bao phú cuộc sống cư dân. Được tạo ra từ cảm hứng khu vườn nhiệt đới, Para Draco tự hào mang lại cho quý cư dân một chốn về an bình, thư giãn tuyệt đối trong những thiết kế biệt thự tuyệt mỹ và chất lượng trong từng chi tiết');

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
(35, 'images (4).jpg', 'images (3).jpg', 'download (2).jpg', 'download (3).jpg', 'download (4).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `timeline_image`
--
ALTER TABLE `timeline_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
