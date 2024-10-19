-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 06:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmeticnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(4) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `p_ext` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `p_ext`) VALUES
(1, 'สำหรับใบหน้า', 'jpg'),
(2, 'สำหรับตา', 'jpg'),
(3, 'สำหรับปาก', 'jpg'),
(4, 'สำหรับผิว', 'jpg'),
(5, 'สำหรับการตกแต่งเล็บ', 'jpg'),
(6, 'สำหรับกันแดด', 'jpg'),
(7, 'สำหรับการแต่งหน้า', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cu_id` int(10) NOT NULL,
  `cu_name` varchar(200) NOT NULL,
  `cu_username` varchar(200) NOT NULL,
  `cu_password` varchar(200) NOT NULL,
  `cu_phone` int(10) NOT NULL,
  `cu_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `cu_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `cu_id`) VALUES
(0000001, 5000, '2024-09-28 19:51:15', 0),
(0000002, 5000, '2024-09-28 19:54:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL,
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(1, 0000001, 1, 2),
(2, 0000002, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(6) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(7,2) NOT NULL,
  `p_picture` varchar(50) NOT NULL,
  `c_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `c_id`) VALUES
(1, 'รองพื้น LANCOME', 'รองพื้นยอดฮิตจาก LANCOME ที่ได้อัปเกรดสูตรใหม่ มาพร้อม AIRWEAR™ Technology เนื้อรองพื้นบางเบา ติดทนนาน ช่วยควบคุมความมัน ให้ผิวเนียนสวยตลอดวัน ผสานส่วนผสมของสกินแคร์ Hyaluronic Acid และสารกันแดด SPF 35  ช่วยบำรุงผิว เพิ่มความชุ่มชื้น พร้อมปกป้องผิวจากแสงแดด ', 2500.00, 'jpg', 1),
(2, 'คอนซีลเลอร์ Maybelline New York Instant Age Rewind Concealer', 'คอนซีลเลอร์ใต้ตาตัวนี้ เรียกได้ว่าเป็นอีกหนึ่งตัวตึงที่ควรทุบ! เพราะเค้ามาพร้อมกับ Micro - Corrector Applicator หัวฟองน้ำสุดนุ่มมม ที่ทำให้เวลาเกลี่ยคอนซีลเลอร์คือง่ายเว่อะ แถมเม็ดสียังชัด ช่วยกลบใต้ตา กลบรอยสิว ลบรอยดำคล้ำได้อยู่หมัด', 450.00, 'jpg', 1),
(3, 'แป้งฝุ่น NARS Light Reflecting Pressed Setting Powder', 'โดยแป้งตัวนี้เค้าเป็นแป้งอัดแข็งเนื้อโปร่งแสง ที่ช่วยคุมมันได้ดีสุดๆ ค่ะ ซึ่งตัวเนื้อแป้งของเค้าจะเป็นสีขาว เมื่อปัดลงบนใบหน้าแล้วจะเนียนไปกับผิวหน้า ช่วยให้เมคอัพติดทนนาน และช่วยเบลอรูขุมขน ทำให้หน้าดูเนียนผ่องขึ้น แถมเค้ายังเป็นสูตรมิเนอรัล ที่อุดมไปด้วยไกลเซอรีน และวิตามินอี ซึ่งจะช่วยบำรุงผิวหน้า ปกป้องผิวจากความแห้ง ตัวแป้งบอกเลยว่าไม่หนา ปัดแล้วรู้สึกสบายผิวตลอดวัน', 1600.00, 'jpg', 1),
(4, 'บลัชออน EVERPINK Blush My Feelings', 'บลัชออนเนื้อครีมที่ให้ฟินิชแบบแมตต์ เนื้อครีมนุ่มละมุน เกลี่ยลงบนผิวได้ง่าย มีส่วนผสมของ Squalene และวิตามิน อี ช่วยเพิ่มความชุ่มชื้นให้ผิว ไม่ทำให้หน้าเป็นคราบระหว่างวัน เม็ดสีสดชัด สามารถใช้แต่งเติมสีสันได้ทั้งบริเวณดวงตา แก้มและปาก มาพร้อมกระจกในตัว', 500.00, 'jpg', 1),
(5, 'ไฮไลท์เตอร์ Cezanne Pearl Glow Highlight', 'ไฮไลท์หน้าเงา Cezanne ตลับนี้มาในขนาดกะทัดรัด พกพาง่าย พร้อมแปรงปัดในตลับ สามาถหยิบมาใช้ได้ทุกที่ทุกเวลา เหมาะสำหรับพกติดไว้ในกระเป๋า ในส่วนของเนื้อสัมผัสมีความเนียนลื่น เกลี่ยง่าย เม็ดสีแน่นมากก', 300.00, 'jpg', 1),
(6, 'แป้งพัฟ  CHY DOUBLE BEAUTY PUFF', 'เป็นแป้งพัฟถูกและดี มีคุณสมบัติช่วยเบลอรูขุมขน ปกปิดดีทำให้ผิวดูเรียบเนียน และช่วยให้ผิวดูกระจ่างใสขึ้น ติดทนนาน คุมมัน ป้องกันการเกิดสิว แถมกันแดดและแสงสีฟ้าได้ตลอดทั้งวัน ใช้แล้วผิวสวยไบร์ทขึ้น ที่สำคัญมีให้เลือกหลายเฉดสีที่เข้ากับผิวคนไทยสุด ๆ', 290.00, 'jpg', 1),
(7, 'อายแชโดว์ DIOR Backstage Eye Palette', 'ใครชอบแต่งหน้าโทนน้ำตาลต้องไม่พลาด! กับพาเลตเคาน์เตอร์แบรนด์ DIOR โทนสีน้ำตาล 9 เฉดสี ตั้งแต่สีอ่อนไปจนถึงสีเข้ม พร้อม 5 เนื้อสัมผัส ประกอบไปด้วย เนื้อแมตต์, เนื้อมุก, เนื้อเมทัลลิก, เนื้อโฮโลแกรม และเนื้อกลิตเตอร์ เรียกได้ว่าครบจบในตลับเดียว ส่วนเรื่องคุณภาพไม่ต้องพูดถึง เม็ดสีแน่น สีสวยชัด', 2250.00, 'jpg', 2),
(8, 'อายไลเนอร์ Browit Ultra Fine Eyeliner ', 'อายไลเนอร์ Browit รุ่นนี้หัวแปรงเรียวเล็กเพียง 0.1 มม. ช่วยให้กรีดตาได้สวยเป็นธรรมชาติ ขนแปรงนุ่มและยืดหยุ่นทำให้วาดเส้นไลเนอร์ได้ง่าย หมึกอายไลเนอร์เม็ดสีแน่นชัด สามารถกันน้ำ กันเหงื่อได้ คนที่มีปัญหาหนังตามันก็ใช้ได้ มีให้เลือก 2 เฉดสี ', 149.00, 'jpg', 2),
(9, 'มาสคาร่า Canmake', 'มาสคาร่า Canmake Quick Lash Curler มาสคาร่าดีไซน์แปรงปัดแบบหวีเล็กๆเพื่อให้การปัดขนตาง่ายเส้นตาเรียงเส้นสวย มีส่วนผสมของเนื้อแว๊กซ์เคลือบขนตา ช่วยให้เส้นขนตางอนยาวนานตลอดวัน', 240.00, 'jpg', 2),
(10, 'ดินสอเขียนตา M.A.C. Powerpoint Eye Pencil ', 'ตัวนี้น่าจะเป็นลูกรักของใครหลาย ๆ คน เพราะได้ทั้งเนื้อนุ่ม ลื่น เขียนง่าย และสีคมชัด เขียนอินไลน์เนอร์ไปยังไงก็ไม่มีเลอะ หรือจะเขียนขอบตาล่างก็ดูละมุน ไม่ดูดุเกินไป ', 800.00, 'jpg', 2),
(11, 'เจลเขียนคิ้ว SACE LADY', 'SACE LADY เป็นเครื่องสำอางราคาประหยัด ที่ขึ้นชื่อในเรื่องคุณภาพของการติดทนนาน สำหรับเจลทินท์คิ้วรุ่นนี้ให้ผลลัพธ์แบบกึ่งถาวร สามารถลบออกได้ และให้ความติดทนสูง อีกทั้งยีงมี 6 เฉดสีให้เลือก ได้แก่ สีน้ำตาลอ่อนสำหรับผมบลอนด์, น้ำตาลเข้มสำหรับผมสีแดง ,สีน้ำตาลดำสำหรับผมบรูเน็ตต์เข้ม อ่อนและปานกลาง, สีเทาเข้ม, สีน้ำตาล และสีบลอนด์ ซึ่งใครที่ชอบเปลี่ยนสีผมบ่อย ๆ ขอแนะนำเจลทินท์คิ้วรุ่นนี้', 333.00, 'jpg', 2),
(12, 'ลิปสติก kate color highvision rouge', 'สีลิปสติกราคาไม่ถึง 300 บาทแต่มาในระดับคุณภาพเคาน์เตอร์แบรนด์ โดย kate color highvision rouge เป็นลิปสติกที่มีสีสันชัดเจน ให้ฟินิชลุคกึ่งแมทท์ พร้อมส่วนผสมบำรุงริมฝีปาก พิกเมนต์แน่น ทาครั้งเดียวก็ได้สีลิปสติกที่สดชัดเจน สดใสตลอดวัน ที่สำคัญลิปตัวนี้ยังมอบการบำรุงให้กับริมฝีปาก', 299.00, 'jpg', 3),
(13, 'ลิปกลอส EVERPINK Lip Sass', 'ลิปกลอสจาก EVERPINK รุ่นนี้เป็นลิปกลอสเนื้อบางเบา อุดมไปด้วยสารสกัดที่ช่วยบำรุงริมฝีปากมากมาย', 350.00, 'jpg', 3),
(14, 'ลิปบาล์ม SASI Fruity Pop Lip Balm', 'ลิปบาล์มมีสี กลิ่นหอมผลไม้ ให้สีสันระเรื่อ ๆ น่ารักสดใสดูเป็นธรรมชาติ ทาไปเรียนได้ไม่โป๊ะ! ช่วยบำรุงริมฝีปากให้นุ่มชุ่มชื้นด้วย Argan Oil และ วิตามิน E แถมยังมี SPF30 ช่วยปกป้องริมฝีปากจากรังสี UV ลดความหมองคล้ำด้วยน้า\r\n\r\n', 55.00, 'jpg', 3),
(15, 'ลิปทินท์ SASI Sugar Rush Lip Tint', 'สีสวยสดใสมากจ้า ตัวนี้อาจจะไม่ฉ่ำวาวเท่าตัวอื่นน้า แต่ทาแล้วปากชุ่มชื้นไม่แพ้กันจ้า ที่สำคัญคือไม่เนียวเหนอะหนะ ติดทนมากกก มาพร้อมกลิ่นหอมผลไม้', 329.00, 'jpg', 3),
(16, 'ครีมบำรุงผิว NIVEA Dewy Sakura White Lotion', 'โลชั่นทาผิวขาวจากนีเวีย สำหรับตัวนี้จะเป็นโลชั่นบำรุงผิวกาย มาพร้อมกับเนื้อบางเบา มัดรวมคุณสมบัติบำรุงผิวมาให้ครบจบ ทั้งช่วยให้ผิวดูขาวสว่างใส หอมละมุน เนียนฉ่ำครบในหนึ่งเดียว ด้วยส่วนผสมของสารไวท์เทนนิ่งและกลิ่นหอมละมุนจากซากุระให้ความรู้สึกสดชื่นมีชีวิตชีวายิ่งขึ้นด้วย', 209.00, 'jpg', 4),
(17, 'เซรั่ม การ์นิเย่ ไบรท์ คอมพลีท วิตามินซี บูสเตอร์ ', 'เซรั่มบำรุงผิวหน้า ยอดขายอันดับ 1 เพื่อผิวกระจ่างใส พร้อมลดเลือนจุดด่างดำรอยสิว อย่างมีประสิทธิภาพไวใน 3 วัน ทั้งจำนวน ขนาด และความเข้ม ด้วยวิตามินซีสกัดเข้มข้นถึง 30 เท่า เนื้อเซรั่มเข้มข้นและซึมซาบเร็ว ไม่เหนอะหนะ ตรงเข้าลดเลือนจุดด่างดำ ความหมองคล้ำ และรอยสิวได้อย่างล้ำลึกถึงชั้นผิว', 399.00, 'jpg', 4),
(18, 'มาส์กหน้า Watsons Cucumber Refreshing Mask', 'Watsons Cucumber Refreshing Mask แผ่นมาร์คหน้าเพิ่มความชุ่มชื้นบำรุงผิวที่อุดมไปด้วยสารสกัด Cucumber Fruit และ Cucumber Seed ตัวช่วยเติมสารอาหารให้กับผิว และยังช่วยให้ความชุ่มชื้นกับผิว ทำให้ผิวเปล่งปลั่ง อิ่มน้ำ ดูกระจ่างใส ', 59.00, 'jpg', 4),
(19, 'สเปรย์น้ำแร่  Pixi Glow Mist ', 'เป็นสเปรย์น้ำแร่ผสมน้ำมัน ช่วยทำให้ผิวหน้าดูโกลว และช่วยเพิ่มความชุ่มชื้นแก่ใบหน้า สำหรับคนที่หน้าแห้งมาก และอยากให้ผิวดูโกลวหลังแต่งหน้า มีส่วนประกอบจากน้ำมันธรรมชาติ 21 ชนิด บวกกับสารสกัดจากโพลิส ว่านหางจระเข้ และผลไม้ ช่วยบำรุงผิวถึงขีดสุด ', 630.00, 'jpg', 4),
(20, 'ยาทาเล็บ Platinum Illusions Collection', 'เป็นคอลเลกชันสีเมทัลลิคจากแบรนด์ Morgan Taylor ที่มีชื่อเสียงและได้รับความนิยมในโลกตะวันตกเป็นอย่างมาก ด้วยสีแนวเมทัลลิค เป็นเงาแวววาว เล่นกับแสงได้เป็นอย่างดี เสริมให้เล็บที่ทาดูเรียบหรู โดดเด่นและมีมิติ นอกจากนี้ยังเป็นยาทาเล็บที่มาพร้อมกับเม็ดสีแน่น ทาง่าย สีค่อนข้างแห้งไว', 330.00, 'jpg', 5),
(21, 'น้ำยาล้างเล็บ Ten Ten', 'น้ำยาล้างเล็บ TenTen แบรนด์น้องใหม่ของไทย เป็นน้ำยาล้างเล็บที่ล้างออกง่าย พอล้างออกแล้วจะรู้สึกเล็บนุ่มๆ เหมือนมีน้ำมันมาเคลือบ ทำให้เล็บมีความชุ่มชื่น เล็บไม่เปราะหักง่าย', 40.00, 'jpg', 5),
(22, 'ครีมกันแดด การ์นิเย่ ซูเปอร์ ยูวี-อินวิซิเบิ้ล ซันสกรีน SPF 50+PA++++', 'ครีมกันแดดหน้าเนื้อเซรั่มบางเบาสบายผิวของ การ์นิเย่ สกิน แนทเชอรัลส์ ซูเปอร์ ยูวี-อินวิซิเบิ้ล ซันสกรีน SPF 50+PA++++ ซึมซาบเร็ว ผิวไม่เยิ้ม หน้าไม่เทา ช่วยปกป้องผิวจากรังสียูวีอย่างมีประสิทธิภาพ', 349.00, 'jpg', 6),
(23, 'บีบีครีม Smooto Tomato Collagen BB&CC Sunscreen Cream', 'เนื้อสัมผัสจะแตกตัวเป็นน้ำทันทีที่สัมผัสกับผิวหน้า มาพร้อมกับเฉดสีโทนเนื้อ ปรับสภาพผิวให้ดูสว่างขึ้น รวมถึงปรับผิวหน้าให้ดูเรียบเนียน ปกปิดรอยหมองคล้ำได้เล็กน้อย มีส่วนผสมช่วยบำรุงผิวไปในตัว อย่าง Niacinamide, Pro-Vitamin B5 เพิ่มความชุ่มชื้น มีสารสกัดจากมะเขือเทศ', 177.00, 'jpg', 6),
(24, 'ซีซีครีม Skin First CC Cream SPF50 / PA++++', 'CC Cream ตัวนี้ มีส่วนผสมของวิตามินอีและโซเดียมไฮยาลูโรเนต ช่วยให้ผิวมีความชุ่มชื้น เรียบเนียนและสดใส เหมาะสำหรับคนที่มีผิวแห้ง', 399.00, 'jpg', 6),
(25, 'สเปรย์ล็อกเมคอัพ Browit Professional Makeup Setting Spray', 'เป็นสเปรย์ล็อคเมคอัพที่เซ็ตเครื่องสำอางไว้กับผิวหน้าได้อย่างยาวนาน พร้อมบำรุงให้ผิวหน้าสุขภาพดี จากสารสกัดต้นแมกโนเลีย', 295.00, 'jpg', 7),
(26, 'ฟองน้ำแต่งหน้า Jovina Extra Soft Sponge', 'ฟองน้ำ Jovina Extra Soft Sponge เป็นฟองน้ำรูปทรงไข่หน้าตัดที่สามารถใช้งานได้อเนกประสงค์ทั้งช่วยลงรองพื้นได้อย่างเรียบเนียนและใช้ลงครีมบลัช คอนทัวร์ หรือแป้งได้', 350.00, 'jpg', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cu_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
