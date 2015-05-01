-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2015 at 11:49 PM
-- Server version: 5.6.16-log
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoinhabaovn`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaithuong`
--

CREATE TABLE IF NOT EXISTS `giaithuong` (
  `MaGiaiThuong` int(11) NOT NULL AUTO_INCREMENT,
  `TenGiaiThuong` varchar(128) NOT NULL,
  `MaHV` int(11) DEFAULT NULL,
  `NgayDatGiai` date NOT NULL,
  `MoTa` text,
  PRIMARY KEY (`MaGiaiThuong`),
  KEY `FK_2C2DF4A9BB87CF27` (`MaHV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40006 ;

--
-- Dumping data for table `giaithuong`
--

INSERT INTO `giaithuong` (`MaGiaiThuong`, `TenGiaiThuong`, `MaHV`, `NgayDatGiai`, `MoTa`) VALUES
(40000, 'Cây bút vàng năm 2012', 10000, '2012-12-06', 'Giải thưởng cây bút vàng năm 2012'),
(40001, 'Cây bút vàng năm 2013', 10002, '2013-12-20', NULL),
(40002, 'Bản tin cập nhật nhất 2014', 10004, '2014-12-19', NULL),
(40003, 'Giải sáng tạo', 10005, '2014-12-19', NULL),
(40004, 'giải nhà báo triển vọng', 10005, '2013-05-04', NULL),
(40005, 'Bài báo xuất sắc 2012', 10006, '2012-11-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hoivien`
--

CREATE TABLE IF NOT EXISTS `hoivien` (
  `MaHV` int(11) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `HoTen` varchar(128) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(8) NOT NULL,
  `AnhDaiDien` varchar(255) DEFAULT NULL,
  `QueQuan` varchar(255) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `CMND` int(14) NOT NULL,
  `TieuSu` longtext NOT NULL,
  `MaToaSoan` int(11) DEFAULT NULL,
  `KichHoat` int(1) NOT NULL,
  `VaiTro` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`MaHV`),
  KEY `hoivien_ibfk_2` (`MaToaSoan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10009 ;

--
-- Dumping data for table `hoivien`
--

INSERT INTO `hoivien` (`MaHV`, `TenDangNhap`, `MatKhau`, `HoTen`, `NgaySinh`, `GioiTinh`, `AnhDaiDien`, `QueQuan`, `Email`, `CMND`, `TieuSu`, `MaToaSoan`, `KichHoat`, `VaiTro`) VALUES
(10000, 'hungnv', 'hungnv123', 'Nguyễn Văn Hùng', '1989-04-15', 'Nam', NULL, 'Hà Nội', 'hungnv@gmail.com', 123432, 'Tốt nghiệp Học Viện Báo Chí và Tuyên Truyền. Từ khi tốt nghiệp đến nay làm việc tại tòa soạn báo HHT.', 30000, 1, 'admin'),
(10001, 'linhbt', 'linhbt123', 'Bùi Thị Linh', '1975-04-08', 'Nữ', NULL, 'TP.Hồ Chí Minh', 'linhbt@gmail.com', 111234893, 'Tốt nghiệp ĐH Khoa Học Xã Hội Và Nhân Văn. Học Thạc sĩ tại Hàn Quốc. Từ khi về nước đến nay làm việc tại tòa soạn báo Dân Trí.', 30001, 1, 'user'),
(10002, 'hoank', 'hoank123', 'Nguyễn Kiều Hoa', '1980-08-10', 'Nữ', NULL, 'Hà Nội', 'hoank@gmail.com', 121348769, 'Tốt nghiệp Đại Học Văn Hóa. Sau khi ra trường đến năm 2002, làm việc tại tòa soạn báo CAND. Từ năm 2002 đến nay làm việc tại tòa soạn báo Dân Trí.', 30001, 1, 'user'),
(10003, 'hoangnv', 'hoangnv', 'Nguyễn Việt Hoàng', '1989-10-25', 'Nam', NULL, 'Hải Dương', 'hoangnv@gmail.com', 112345312, 'Tốt nghiệp Đại Học Hà Nội. Từ khi tốt nghiệp đến nay làm việc tại tòa soạn báo HHT.', 30000, 1, 'user'),
(10004, 'khaibv', 'khaibv123', 'Bùi Văn Khải', '1970-01-02', 'Nam', NULL, 'Hà Nội', 'khaibv@gmail.com', 1112673212, 'Tốt nghiệp Học Viện Báo Chí và Tuyên Truyền. Từ khi tốt nghiệp đến năm 2010 làm việc tại tào soạn báo Hoa Học Trò. Từ năm 2010 đến nay, làm việc tại tòa soạn báo vnexpress.', 30003, 0, 'user'),
(10005, 'lannn', 'lannn123', 'Nguyễn Ngọc Lan', '1980-04-15', 'Nữ', NULL, 'Hải Dương', 'lannn@gmail.com', 111562892, 'Tốt nghiệp Đại Học Khoa Học Xã Hội Và Nhân Văn. Từ khi tốt nghiệp đến nay, làm việc tại tào soạn báo Vietnamnet.', 30002, 1, 'user'),
(10006, 'mainn', 'mainn123', 'Nguyễn Ngọc Mai', '1990-08-08', 'Nữ', NULL, 'Hà Nội', 'mainn@gmail.com', 111276526, 'Tốt nghiệp Đại Học Ngoại Ngữ. Từ khi tốt nghiệp đến nay làm việc tại tòa soạn báo HHT.', 30000, 1, 'user'),
(10007, 'admin', 'admin', 'Nguyễn Văn Ngọc', '1989-05-28', 'Nam', NULL, 'Hà Nội', 'admin@gmail.com', 111356343, 'Từ khi tốt nghiệp đến nay làm tại tòa soạn báo Dan Trí', 30001, 1, 'admin'),
(10008, 'user', 'user', 'Lê Thu Lan', '1990-05-12', 'Nữ', NULL, 'Hà Nội', 'lanlt@gmail.com', 112345252, 'Từ khi tốt nghiệp đến nay làm việc tại tòa soạn báo HHT', 30000, 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tacpham`
--

CREATE TABLE IF NOT EXISTS `tacpham` (
  `MaTacPham` int(11) NOT NULL AUTO_INCREMENT,
  `TenTacPham` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `NgaySangTac` date NOT NULL,
  `MaTheLoai` int(11) DEFAULT NULL,
  `MaHV` int(11) DEFAULT NULL,
  `LienKet` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MaTacPham`),
  KEY `FK_FA6F8723BB87CF27` (`MaHV`),
  KEY `FK_FA6F87236DBB00F7` (`MaTheLoai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20016 ;

--
-- Dumping data for table `tacpham`
--

INSERT INTO `tacpham` (`MaTacPham`, `TenTacPham`, `MoTa`, `NgaySangTac`, `MaTheLoai`, `MaHV`, `LienKet`) VALUES
(20000, 'Tôi nghĩ mình là một thiên thần', 'Một truyện ngắn dành cho tuổi teen, đăng trên báo HHT.', '2015-01-07', 70000, 10000, 'http://hoahoctro.vn/truyen-ngan-toi-nghi-minh-la-mot-thien/'),
(20001, 'Những ngày hanh nắng', 'Một truyện ngắn dưới lời kể của một cô bé lớp mười về cậu bạn cùng lớp của mình.', '2014-04-08', 70000, 10000, 'http://hoahoctro.vn/truyen-ngan-nhung-ngay-hanh-nang/'),
(20002, 'Tam giác mạch', 'Một truyện ngắn viết về hoa tam giác mạch, và câu chuyện của hai người bạn.', '2015-04-07', 70000, 10000, 'http://hoahoctro.vn/truyen-ngan-tam-giac-mach/'),
(20004, 'Tia chớp bạc', 'Tia chớp bạc, chính là chiếc xe máy mới của một cậu bé cấp ba. Câu chuyện kể về cách sử dụng chiếc xe máy mới của cậu.', '2015-03-02', 70000, 10003, 'http://hoahoctro.vn/tia-chop-bac/'),
(20005, 'Nhật có thể hỗ trợ quân đội Mỹ ở Biển Đông', 'Chính phủ của Thủ tướng Shinzo Abe đang có kế hoạch mở rộng sứ mệnh phi chiến đấu của Nhật trong các cuộc xung đột vũ trang ngoài các khu vực quanh Nhật Bản, cho phép Tokyo có thể can thiệp vào Biển Đông nhằm hỗ trợ Mỹ.', '2015-04-08', 70003, 10002, 'http://dantri.com.vn/the-gioi/nhat-co-the-ho-tro-quan-doi-my-o-bien-dong-1062785.htm'),
(20006, 'Tàu tuần tra Triều Tiên dạt vào lãnh hải Hàn Quốc', 'Hôm qua, một tàu tuần tra của Tiều Tiên đã dạt vào lãnh hải Hàn Quốc nhưng đã được kéo trở lại ngay sau đó.', '2015-04-15', 70003, 10002, 'http://dantri.com.vn/the-gioi/tau-tuan-tra-trieu-tien-dat-vao-lanh-hai-han-quoc-1062913.htm'),
(20007, 'Có một chiến dịch “Babylift” khác', 'Ngoài chiến dịch “Babylift” được nói nhiều, thời điểm tháng 4-1975 còn có một chiến dịch di tản trẻ mồ côi Nam Việt Nam ít được nhắc đến - một chiến dịch nhân đạo thậm chí bị Nhà Trắng cản trở… ', '2014-04-07', 70003, 10002, 'http://dantri.com.vn/the-gioi/co-mot-chien-dich-babylift-khac-1062897.htm'),
(20008, 'Đài Loan điều sát thủ săn ngầm tuần tra Biển Đông', 'Cơ quan quốc phòng Đài Loan đã lần đầu tiên xác nhận rằng quân đội hòn đảo này sẽ điều máy bay săn ngầm P-3C hiện đại cho các sứ mệnh giám sát Biển Đông.', '2014-04-09', 70003, 10002, 'http://dantri.com.vn/the-gioi/dai-loan-dieu-sat-thu-san-ngam-tuan-tra-bien-dong-1062856.htm'),
(20009, 'TPHCM không cắt điện trong 6 ngày nghỉ lễ', 'Tổng công ty Điện lực TPHCM sẽ hoãn cắt điện từ ngày 28/4 đến hết ngày 3/5/2015 để phục vụ dịp Lễ. Chỉ cắt điện trong những trường hợp khẩn cấp xảy ra sự cố hoặc có yêu cầu đặc biệt từ cơ quan chức năng.', '2015-04-21', 70001, 10001, 'http://dantri.com.vn/xa-hoi/tphcm-khong-cat-dien-trong-6-ngay-nghi-le-1062884.htm'),
(20010, 'Thủ tướng sẽ tham dự Hội nghị Cấp cao ASEAN lần 26', 'Nhận lời mời của Thủ tướng Malaysia Najib Tun Abdul Razak, Thủ tướng Chính phủ Nguyễn Tấn Dũng sẽ dẫn đầu Đoàn đại biểu Việt Nam tham dự Hội nghị Cấp cao ASEAN lần thứ 26, được tổ chức tại thủ đô Kuala Lumpur và thành phố Langkawi, Malaysia từ ngày 26-27/4.', '2015-04-15', 70001, 10001, 'http://dantri.com.vn/chinh-tri/thu-tuong-se-tham-du-hoi-nghi-cap-cao-asean-lan-thu-26-1062803.htm'),
(20011, '5 smartphone giá rẻ, pin khoẻ', 'Nhiều mẫu điện thoại dưới 5 triệu đồng sở hữu pin dung lượng lớn, từ 3.000 đến 4.000 mAh, cho thời gian dùng đến vài ngày.', '2015-03-08', 70002, 10004, 'http://sohoa.vnexpress.net/tin-tuc/san-pham/dien-thoai/5-smartphone-gia-re-pin-khoe-3204342.html'),
(20012, '30/5 là hạn chót công khai cách xét tuyển lớp 6', 'Chiều 21/4, Sở GD-ĐT Hà Nội cho biết, kế hoạch tuyển sinh các lớp đầu cấp (mầm non, tiểu học, THCS) sẽ diễn ra từ 1/7 đến 15/7. Do đó, chậm nhất ngày 30/5 toàn bộ kế hoạch về tuyển sinh đầu cấp của các trường phải được công khai', '2015-04-01', 70004, 10005, 'http://vietnamnet.vn/vn/giao-duc/233537/30-5-la-han-chot-cong-khai-cach-xet-tuyen-lop-6.html'),
(20013, 'Học sinh thi thử THPT quốc gia trong 4 ngày', 'Trong 4 ngày từ 11 đến 14/5/2015, học sinh ở TP.HCM sẽ tham gia kỳ thi thử THPT quốc gia. Kì thi thử do Sở GD-ĐT thành phố tổ chức.', '2015-04-17', 70004, 10005, 'http://vietnamnet.vn/vn/giao-duc/233416/hoc-sinh-thi-thu-thpt-quoc-gia-trong-4-ngay.html'),
(20014, 'Lãnh đạo sở than phiền chất lượng hiệu trưởng', 'Vấn đề đặt ra tại hội thảo đào tạo cán bộ quản lí giáo dục trong bối cảnh đổi mới giáo dục do Trường ĐH Sư phạm Hà Nội tổ chức sáng 20/4. ', '2015-04-08', 70004, 10005, 'http://vietnamnet.vn/vn/giao-duc/233306/lanh-dao-so-than-phien-chat-luong-hieu-truong.html'),
(20015, 'Bùng nổ với ngày hội phá luật 2015', 'Mặc cái nóng gần 40 độ tại Hà Nội, những cô cậu “mọt sách” đến từ khoa Luật quốc tế, Học viện Ngoại giao đã có một ngày hội có 1-0-2 với độ “quẩy” hết mình vào chủ nhật vừa qua.', '2015-04-07', 70001, 10006, 'http://hoahoctro.vn/bung-no-voi-ngay-hoi-pha-luat-2015/');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenTheLoai` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  PRIMARY KEY (`MaTheLoai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70005 ;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`, `MoTa`) VALUES
(70000, 'Truyện ngắn', 'Các truyện ngắn được đăng tải trên các báo'),
(70001, 'Xã hội', 'Tin tức xã hội hàng ngày'),
(70002, 'Công nghệ', 'Các tác phẩm, bài báo liên quan đến các chủ đề về công nghệ mới, các sẳn phẩm công nghệ, các thông tin về công nghệ trong nước và trên thế giới.'),
(70003, 'An ninh và cuộc sống', 'Các thông tin về an ninh, cuộc sống thường ngày'),
(70004, 'Giáo dục', 'Các tin tức về giáo dục, các kỳ thi THPT Quốc gia, tuyển sinh đại học... hay việc tập tập tại các cấp học, các tỉnh thành ');

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE IF NOT EXISTS `tinhthanh` (
  `MaTinhThanh` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinhThanh` varchar(50) NOT NULL,
  PRIMARY KEY (`MaTinhThanh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50005 ;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MaTinhThanh`, `TenTinhThanh`) VALUES
(50000, 'Hà Nội'),
(50001, 'TP. Hồ Chí Minh'),
(50002, 'Hải Phòng'),
(50003, 'Hải Dương'),
(50004, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `toasoan`
--

CREATE TABLE IF NOT EXISTS `toasoan` (
  `MaToaSoan` int(11) NOT NULL AUTO_INCREMENT,
  `TenToaSoan` varchar(128) NOT NULL,
  `MaTinhThanh` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaToaSoan`),
  KEY `FK_34565DE25549239C` (`MaTinhThanh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30006 ;

--
-- Dumping data for table `toasoan`
--

INSERT INTO `toasoan` (`MaToaSoan`, `TenToaSoan`, `MaTinhThanh`) VALUES
(30000, 'Hoa Học Trò', 50000),
(30001, 'Dân Trí', 50001),
(30002, 'Vietnamnet', 50002),
(30003, 'Vnexpress', 50003),
(30004, '24h', 50001),
(30005, 'Khác', 50004);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giaithuong`
--
ALTER TABLE `giaithuong`
  ADD CONSTRAINT `FK_2C2DF4A9BB87CF27` FOREIGN KEY (`MaHV`) REFERENCES `hoivien` (`MaHV`);

--
-- Constraints for table `hoivien`
--
ALTER TABLE `hoivien`
  ADD CONSTRAINT `hoivien_ibfk_2` FOREIGN KEY (`MaToaSoan`) REFERENCES `toasoan` (`MaToaSoan`);

--
-- Constraints for table `tacpham`
--
ALTER TABLE `tacpham`
  ADD CONSTRAINT `FK_FA6F87236DBB00F7` FOREIGN KEY (`MaTheLoai`) REFERENCES `theloai` (`MaTheLoai`),
  ADD CONSTRAINT `FK_FA6F8723BB87CF27` FOREIGN KEY (`MaHV`) REFERENCES `hoivien` (`MaHV`);

--
-- Constraints for table `toasoan`
--
ALTER TABLE `toasoan`
  ADD CONSTRAINT `FK_34565DE25549239C` FOREIGN KEY (`MaTinhThanh`) REFERENCES `tinhthanh` (`MaTinhThanh`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
