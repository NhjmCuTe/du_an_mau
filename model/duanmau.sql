-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 01:21 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(2, 'Sản phẩm rất tốt', 3, 1, '2023-09-22'),
(6, 'bình luân', 2, 9, '2023-10-06'),
(44, 'sản phẩm đẹp', 28, 41, '2023-10-20'),
(46, 'máy đẹp quá', 28, 51, '2023-10-20'),
(47, 'ib shop ơi', 28, 51, '2023-10-20'),
(48, 'đẹp quá ', 28, 52, '2023-10-20'),
(49, 'giá bao nhiêu thế', 28, 52, '2023-10-20'),
(50, 'tuyệt vời', 28, 53, '2023-10-20'),
(51, 'ib shop ơi', 28, 53, '2023-10-20'),
(52, 'đẹp quá ', 28, 41, '2023-10-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Điện Thoại'),
(64, 'Máy ảnh'),
(65, 'Sạc dự phòng'),
(66, 'Đồng hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Apple MacBook Air M1', 300000.00, 'Laptop1.jpg', 'Sản phẩm cấu hình cơ bản bao gồm một GPU bảy lõi, bộ nhớ lưu trữ 256GB SSD, cũng như 8GB RAM bộ nhớ. Phiên bản nâng cấp với GPU tám lõi và bộ nhớ 512GB SSD có giá khởi điểm là 1249$. Cấu hình tối đa sẽ bao gồm 16GB RAM và 2TB dung lượng lưu trữ. Máy có ba tuỳ chọn màu sắc giống sản phẩm tiền nhiệm bao gồm vàng (gold), bạc (silver) và xám không gian (Space gray)', 10, 1),
(2, 'iPhone 14 Pro Max', 140000.00, 'iPhone 14 Pro Max.jpg', 'Những dòng iPhone đến từ nhà Apple đều có sức hút đặc biệt ngay từ thời điểm ra mắt và thế hệ iPhone 14 Pro Max cũng không ngoại lệ. Có thể nói, iPhone 14 Pro Max là sự kết hợp hoàn hảo giữa các yếu tố về thiết kế, cấu hình, tính năng, hệ điều hành,... Nếu bạn tò mò về siêu phẩm này, hãy đọc ngay phần đánh giá chi tiết phiên bản cao cấp nhất trong series iPhone 14 bên dưới nhé. ', 9, 2),
(3, 'Laptop Asus VivoBook Go 14', 180000.00, 'Laptop Asus VivoBook Go 14.jpg', 'ASUS Vivobook E1404FA-NK186W thuộc dòng Vivobook Go 14, dòng laptop hiệu năng cao giá rẻ giúp bạn làm việc hiệu quả mọi lúc mọi nơi. Với bộ vi xử lý AMD 7000 series mạnh mẽ, trang bị sẵn tới 16GB RAM, 512GB SSD, Vivobook E1404FA sẽ mang đến trải nghiệm làm việc thoải mái, vô cùng mượt mà.', 9, 1),
(5, 'Laptop Lenovo Ideapad 5 Pro', 300000.00, 'Laptop Lenovo Ideapad 5 Pro.jpg', 'Lenovo Ideapad 5 Pro 16 là chiếc laptop, máy tính xách tay thời đại mới dành cho các bạn trẻ đa nhiệm, năng động với vẻ ngoài hiện đại, mỏng nhẹ nhưng bên trong lại chứa một hiệu năng cực khủng. Bên cạnh đó, chiếc laptop Lenovo - Lenovo Ideapad này cũng được tích hợp nhiều công nghệ hiện đại, tối ưu tốt cho trải nghiệm sử dụng. Chắc chắn, mẫu laptop mỏng nhẹ này sẽ khiến bạn phải bất ngờ đấy. Hãy cùng Laptop88 đánh giá ngay mẫu laptop văn phòng này dưới đây nhé!', 10, 1),
(6, 'Xiaomi Redmi Note 12 Pro', 140000.00, 'Xiaomi Redmi Note 12 Pro.jpg', 'Samsung S23 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuông vức sang trọng. Sản phẩm được ra mắt từ đầu năm 2023.', 9, 2),
(7, 'Macbook Air 15 inch M2 2023', 180000.00, 'Macbook Air 15 inch M2 2023.jpg', 'Vận hành doanh nghiệp trên MacBook Air M2. Siêu mạnh mẽ với chip M2 thế hệ tiếp theo, MacBook Air được thiết kế mới nay nhỏ gọn hơn bao giờ hết, kết hợp giữa hiệu năng đáng kinh ngạc và thời lượng pin lên đến 18 giờ trong vỏ nhôm mỏng đầy ấn tượng.1 Nhờ đó, tất cả các bộ phận từ kinh doanh đến tài chính đều có thể làm việc năng suất hơn dù ở bất cứ đâu.', 9, 1),
(8, 'Laptop Lenovo Ideapad 5 Pro', 300000.00, 'Laptop Lenovo Ideapad 5 Pro.jpg', 'Lenovo Ideapad 5 Pro 16 là chiếc laptop, máy tính xách tay thời đại mới dành cho các bạn trẻ đa nhiệm, năng động với vẻ ngoài hiện đại, mỏng nhẹ nhưng bên trong lại chứa một hiệu năng cực khủng. Bên cạnh đó, chiếc laptop Lenovo - Lenovo Ideapad này cũng được tích hợp nhiều công nghệ hiện đại, tối ưu tốt cho trải nghiệm sử dụng. Chắc chắn, mẫu laptop mỏng nhẹ này sẽ khiến bạn phải bất ngờ đấy. Hãy cùng Laptop88 đánh giá ngay mẫu laptop văn phòng này dưới đây nhé!', 10, 1),
(9, 'Xiaomi Redmi Note 12 Pro', 140000.00, 'Xiaomi Redmi Note 12 Pro.jpg', 'Samsung S23 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuông vức sang trọng. Sản phẩm được ra mắt từ đầu năm 2023.', 9, 2),
(10, 'Macbook Air 15 inch M2 2023 sửa', 180000.00, 'Macbook Air 15 inch M2 2023.jpg', 'Vận hành doanh nghiệp trên MacBook Air M2. Siêu mạnh mẽ với chip M2 thế hệ tiếp theo, MacBook Air được thiết kế mới nay nhỏ gọn hơn bao giờ hết, kết hợp giữa hiệu năng đáng kinh ngạc và thời lượng pin lên đến 18 giờ trong vỏ nhôm mỏng đầy ấn tượng.1 Nhờ đó, tất cả các bộ phận từ kinh doanh đến tài chính đều có thể làm việc năng suất hơn dù ở bất cứ đâu.', 9, 1),
(41, 'Macbook Air 15 inch M2 2023123', 1000.00, 'Macbook Air 15 inch M2 2023.jpg', 'Vận hành doanh nghiệp trên MacBook Air M2. Siêu mạnh mẽ với chip M2 thế hệ tiếp theo, MacBook Air được thiết kế mới nay nhỏ gọn hơn bao giờ hết, kết hợp giữa hiệu năng đáng kinh ngạc và thời lượng pin lên đến 18 giờ trong vỏ nhôm mỏng đầy ấn tượng.1 Nhờ đó, tất cả các bộ phận từ kinh doanh đến tài chính đều có thể làm việc năng suất hơn dù ở bất cứ đâu.', 0, 1),
(51, 'Máy ảnh Fujifilm X-S20 (Body Only) | Chính Hãng', 31990000.00, 'fujifilm-x-s20-500x500.png', 'Máy ảnh mirrorless Fujifilm X-S20 sở hữu thiết kế gọn nhẹ, trang bị cảm biến 26.1MP X-Trans CMOS 4 kết hợp bộ xử lý hình ảnh X-Processor 5, chống rung IBIS 7 stop, lấy nét tự động bằng AI vượt trội, mang lại những thước phim chất lượng 6.2K30fps ấn tượng, một chiếc camera đa năng phù hợp cho cả những nhiếp ảnh gia và những nhà sáng tạo nội dung.', 0, 64),
(52, 'Máy ảnh Leica M11 (Silver)', 99999999.99, 'leica-m11-bac-500x500.png', 'Leica M11 là một máy ảnh rangefinder có thiết kế quen thuộc của dòng máy ảnh Leica M. Máy ảnh không thay đổi quá nhiều về thiết kế bên ngoài nhưng được nâng cấp đáng kể về hiệu suất bên trong, mang đến trải nghiệm độc đáo cho người dùng, phù hợp với những người có phong cách.', 0, 64),
(53, 'Pin sạc dự phòng Anker PowerCore Select 10000mAh A1223', 200000.00, '4h57_2.png', 'Pin sạc dự phòng Anker từ lâu đã là một thương hiệu mang lại uy tín nhất định trên thị trường phụ kiện trong nước nói riêng và thế giới nói chung. Sở hữu dung lượng lưu trữ lên đến 10000 mAh cùng nhiều tính năng hiện đại thì sản phẩm pin dự phòng Anker PowerCore Select 10000 mAh A1223 sẽ là một lựa chọn không thể phù hợp hơn dành cho bạn.', 0, 65),
(54, 'Pin dự phòng sạc nhanh Baseus Qpow Pro 20.000mAh 20W cho iPhone, Lightning (kèm cáp)', 300000.00, 'baseus-qpow-pro-2.png', 'Sạc tối đa lên tới 3 thiết bị cùng lúc qua 3 cổng: Type-C, Lightning, USB Tích hợp thêm dây sạc chuẩn Type-C 19 cm tháo lắp tiện lợi Tích hợp chip xử lý nguồn thế hệ mới có hiệu suất sử dụng cao, bảo vệ thông minh Hỗ trợ sạc nhanh QC3.0 và PD3.0 trên cổng sạc USB và Type-C', 0, 65),
(55, 'Apple Watch SE 2022 40mm | Chính Hãng VN/A', 2000000.00, '1_258.png', 'Thiết kế trẻ trung, năng động - Viền nhôm sang trọng, màn hình Oled hiển thị tốt kể cả trong điều kiện trời nắng Thao tác mượt mà - Tích hợp chip S8 SiP cùng hệ điều hành WatchOS 9 mới nhất Phát hiện va chạm - Tự động phát cảnh báo và gửi vị trí cho người thân khi phát hiện tai nạn Sức khoẻ được theo dõi liên tục - Cảm biến nhịp tim thế hệ 2, tính năng theo dõi thuốc Thoả sức bơi lội - khả năng chống nước đến 50m Pin lên đến 18 giờ cho 1 lần sạc, cùng chế độ tiết kiệm pin cho phép sử dụng lâu hơn', 0, 66),
(56, 'Vòng đeo tay thông minh Xiaomi Mi Band 8 Active', 1000000.00, 'band-8-active-pink.png', 'Màn hình lớn hơn đến 1.47 inch cho phép hiển thị nhiều thông tin hơn Đeo mọi nơi không ngại mưa rơi với kháng nước chuẩn 5ATM Giữ sức khoẻ luôn ổn định với cảm biến nhịp tim PPG Tập luyện tốt hơn với 50 chế độ thể thao Sử dụng đến 14 ngày, sạc đầy trong 2 giờ', 0, 66);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `name`, `email`, `img`, `address`, `tel`, `role`) VALUES
(2, 'Hoàng Long', '123456', '', 'longhh7@fpt.edu.vn', '', '', '', 1),
(3, 'Thành Trung', '1234565', '', 'trungnt173@fpt.edu.vn', '', 'Hà Nội', '', 1),
(28, 'ad', 'ad', 'lê văn tuấn', 'email@fpt.vn', 'fujifilm-x-s20-500x500.png', '', '', 0),
(53, 'ad1', 'ad1', 'tuấn', 'email@fpt.vn', 'inet.png', 'hà nội', '0912312321', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
