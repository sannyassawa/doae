-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2016 at 06:51 AM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doae`
--

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE `functions` (
  `function_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `function_uri` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `table_data` varchar(255) DEFAULT NULL,
  `sub_table_data` varchar(255) DEFAULT NULL,
  `view_data` varchar(255) DEFAULT NULL,
  `column_data` varchar(255) DEFAULT NULL,
  `index_column` varchar(255) DEFAULT NULL,
  `addon_data` varchar(255) DEFAULT NULL,
  `where_data` varchar(255) DEFAULT NULL,
  `position` int(1) DEFAULT '2',
  `save_type_id` char(1) DEFAULT '0',
  `is_keep_log` char(1) DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `active` char(1) DEFAULT '1',
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `edit_id` int(11) DEFAULT NULL,
  `edit_date` datetime DEFAULT NULL,
  `delete_id` int(11) DEFAULT NULL,
  `delete_date` datetime DEFAULT NULL,
  `computer_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`function_id`, `code`, `name_en`, `name`, `parent_id`, `level`, `function_uri`, `url`, `class`, `table_data`, `sub_table_data`, `view_data`, `column_data`, `index_column`, `addon_data`, `where_data`, `position`, `save_type_id`, `is_keep_log`, `sort_order`, `active`, `create_id`, `create_date`, `edit_id`, `edit_date`, `delete_id`, `delete_date`, `computer_name`) VALUES
(1, '', 'Home', 'หน้าแรก', 0, 1, 'index.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '', 'เกี่ยวกับหน่วยงาน', 'เกี่ยวกับหน่วยงาน', 0, 2, 'about.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '', 'DOAE Service', 'ข้อมูลการบริการ', 0, 1, 'service.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', 'ข่าวประชาสัมพันธ์', 'ข่าวประชาสัมพันธ์', 0, 2, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', 'คลังความรู้', 'คลังความรู้', 0, 2, 'km_catergory.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '', 'แบบฟอร์มสำหรับดาวน์โหลด', 'แบบฟอร์มสำหรับดาวน์โหลด', 0, 1, 'download.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', 'ประวัติความเป็นมา', 'ประวัติความเป็นมา', 2, 0, 'about_detail.php?id=1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', 'วิสัยทัศน์ พันธกิจ', 'วิสัยทัศน์ พันธกิจ', 2, 0, 'about_detail.php?id=2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '', 'โครงสร้างหน่วยงาน', 'โครงสร้างหน่วยงาน', 2, 0, 'about_detail.php?id=3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '', 'ภารกิจ และหน้าที่รับผิดชอบ', 'ภารกิจ และหน้าที่รับผิดชอบ', 2, 0, 'about_detail.php?id=4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '', 'ยุทธศาสตร์ แผนปฏิบัติราชการ', 'ยุทธศาสตร์ แผนปฏิบัติราชการ', 2, 0, 'about_list.php?Id=5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '', 'แผนงาน โครงการ และงบประมาณรายจ่ายประจำปี', 'แผนงาน โครงการ และงบประมาณรายจ่ายประจำปี', 2, 0, 'about_list.php?Id=6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '', 'คำรับรองและ รายงานผลการปฏิบัติราชการ', 'คำรับรองและ รายงานผลการปฏิบัติราชการ', 2, 0, 'about_list.php?Id=7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '', 'กฎ ระเบียบ ข้อบังคับ', 'กฎ ระเบียบ ข้อบังคับ', 2, 0, 'about_list.php?Id=8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '', 'ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศ', 'ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศ', 2, 0, 'about_sub.php?Pa=9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '', 'ข่าวกิจกรรมและภารกิจผู้บริหาร', 'ข่าวกิจกรรมและภารกิจผู้บริหาร', 4, 0, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '', 'ข่าวประชาสัมพันธ์ทั่วไป', 'ข่าวประชาสัมพันธ์ทั่วไป', 4, 0, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '', 'ข่าวประกาศรับสมัครงาน', 'ข่าวประกาศรับสมัครงาน', 4, 0, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '', 'ข่าวการจัดซื้อจัดจ้าง', 'ข่าวการจัดซื้อจัดจ้าง', 4, 0, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '', 'ข่าวการฝึกอบรม', 'ข่าวการฝึกอบรม', 4, 0, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '', 'ข่าวภูมิภาค', 'ข่าวภูมิภาค', 4, 0, 'news_list.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '', 'ปฏิทินกิจกรรม', 'ปฏิทินกิจกรรม', 4, 0, 'calendar.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '', 'ผลงานวิจัยด้านการเกษตร', 'ผลงานวิจัยด้านการเกษตร', 5, 0, 'km_list.php?Cat=1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '', 'บทความด้านการเกษตร', 'บทความด้านการเกษตร', 5, 0, 'km_list.php?Cat=2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '', 'กรณีศึกษาด้านการเกษตร', 'กรณีศึกษาด้านการเกษตร', 5, 0, 'km_list.php?Cat=3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '', 'ข้อมูลสถิติด้านการเกษตร', 'ข้อมูลสถิติด้านการเกษตร', 5, 0, 'km_list.php?Cat=4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '', 'ข้อมูลด้านภูมิสารสนเทศ (GIS)', 'ข้อมูลด้านภูมิสารสนเทศ (GIS)', 5, 0, 'km_list.php?Cat=5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '', 'สื่อมัลติมีเดีย', 'สื่อมัลติมีเดีย', 5, 0, 'vdo.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '', 'ภูมิปัญญาชาวบ้าน', 'ภูมิปัญญาชาวบ้าน', 5, 0, 'km_list.php?Cat=7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '', 'ข้อมูลการติดต่อ', 'ข้อมูลการติดต่อ', 0, 1, 'contact.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '', 'หน่วยงานที่เกี่ยวข้อง', 'หน่วยงานที่เกี่ยวข้อง', 2, NULL, 'about_detail.php?id=16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '', 'สื่อเกษตรครบวงจร', 'สื่อเกษตรครบวงจร', 5, NULL, 'http://61.91.124.154/doae2/km_detail.php?id=26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '0', '1', NULL, '1', 0, '2016-12-06 09:53:27', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survey`
--

CREATE TABLE `tbl_survey` (
  `id` int(12) NOT NULL,
  `title_th` text,
  `title_en` text,
  `link` text,
  `type` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_survey`
--

INSERT INTO `tbl_survey` (`id`, `title_th`, `title_en`, `link`, `type`, `status`, `create_date`, `update_date`) VALUES
(1, 'การสำรวจความพึงพอใจการใช้บริการเว็บไซต์กรมส่งเสริมการเกษตร ปีงบประมาณ 2559', '', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js', 1, 1, '2016-12-17 15:52:04', '2016-12-18 12:35:40'),
(2, 'การสำรวจความคิดเห็นของประชาชน (Online Poll)', '', '', 1, 1, '2016-12-17 16:39:44', '2016-12-17 17:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survey_issue`
--

CREATE TABLE `tbl_survey_issue` (
  `id` int(12) NOT NULL,
  `id_survey_sub` int(12) NOT NULL,
  `title_th` text,
  `status` int(1) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survey_issue_sub`
--

CREATE TABLE `tbl_survey_issue_sub` (
  `id` int(12) NOT NULL,
  `id_survey_issue` int(12) NOT NULL,
  `title_th` text,
  `status` int(1) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survey_sub`
--

CREATE TABLE `tbl_survey_sub` (
  `id` int(12) NOT NULL,
  `id_survey` int(12) NOT NULL,
  `title_th` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_survey_sub`
--

INSERT INTO `tbl_survey_sub` (`id`, `id_survey`, `title_th`, `start_date`, `end_date`, `status`, `create_date`, `update_date`) VALUES
(1, 1, 'survey_sub', '2016-12-17', '2016-12-22', 1, '2016-12-17 17:17:42', '2016-12-17 17:17:42'),
(2, 1, 'survey_subxxxeee', '2016-10-20', '2016-10-20', 0, '2016-12-17 17:18:15', '2016-12-17 18:20:12'),
(3, 0, 'test', '2016-11-11', '2016-11-11', 0, '2016-12-17 18:23:27', '2016-12-17 18:23:27'),
(4, 1, 'ssss', '2016-11-11', '2016-11-11', 0, '2016-12-17 18:25:42', '2016-12-17 18:25:42'),
(5, 1, 'ddfsdf', '2016-11-11', '2016-11-11', 1, '2016-12-17 18:26:27', '2016-12-17 18:26:27'),
(6, 1, 'xxx', '2016-11-11', '2016-11-11', 1, '2016-12-17 18:27:24', '2016-12-17 18:27:32'),
(7, 1, 'e', '2016-11-11', '2016-11-11', 0, '2016-12-17 18:27:51', '2016-12-17 18:27:51'),
(8, 2, 'test1', '2016-12-01', '2016-12-29', 1, '2016-12-18 12:34:11', '2016-12-18 12:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `t_about`
--

CREATE TABLE `t_about` (
  `about_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `template` varchar(255) DEFAULT NULL,
  `content_en` text,
  `content` text,
  `parent_id` int(11) DEFAULT '0',
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) NOT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_about`
--

INSERT INTO `t_about` (`about_id`, `icon`, `title_en`, `title`, `template`, `content_en`, `content`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'img/cover/DOAE 265x265.png', 'e_ประวัติความเป็นมา', 'ประวัติความเป็นมา', '2', '', '<p><strong>ประวัติกรมส่งเสริมการเกษตร</strong></p>\r\n\r\n<p><br />\r\n<span style="font-family:cs chatthai; font-size:14pt">&nbsp;&nbsp; &nbsp;วันที่ 20 มีนาคม พ.ศ. 2504 กระทรวงเกษตรได้เสนอโครงการจัดตั้งกรมส่งเสริมการ เกษตร ไปยังคณะรัฐมนตรีแยกเป็น 2 แผน แผนที่หนึ่ง ขอจัดตั้งสำนักงานส่งเสริมการเกษตร ซึ่งถือว่าเป็นแผนขั้นเตรียมการก่อนจัดตั้งกรม คือเตรียมทั้งการวางแผนงาน วางอัตรากำลังคน ปรับปรุงวิชาการ เปลี่ยนทัศนคติเจ้าหน้าที่ ตลอดจนรูปบริหาร และการแก้ไขพระราชบัญญัติปรับปรุง กระทรวงทบวงกรม เพื่อจัดตั้งกรมในแผนขั้นที่ สอง ซึ่งคณะรัฐมนตรีก็ได้มีมติเมื่อวันที่ 27 กันยายน พ.ศ. 2504 เห็นชอบในหลักการตามที่กระทรวงเกษตรเสนอ<br />\r\n&nbsp;&nbsp; &nbsp;ต่อมาก็ได้มีคำสั่งกระทรวงเกษตรตั้งสำนักงาน ส่งเสริมการเกษตรขึ้นเมื่อวันที่ 12 มกราคม พ.ศ. 2505 เพื่อเตรียมการต่างๆ ดังได้กล่าวมาแล้ว และก็ได้ปฏิบัติการ ในรูปงานส่งเสริมการเกษตรตามแนวใหม่ไปพลางพร้อมกันนั้น ก็ได้รายงานผลก้าวหน้าต่อคณะรัฐมนตรีเป็นครั้งคราว จนถึงวันที่ 7 พฤศจิกายน พ.ศ. 2505 ฯพณฯ นายกรัฐมนตรี ได้พิจารณา รายงานของสำนักงานส่งเสริมการเกษตรแล้วมีคำสั่งว่า น่าจะตั้ง เป็นกรมได้ และได้เสนอให้คณะรัฐมนตรีได้ทราบ ระยะนี้อธิบดีทุกกรม ก็ต้องรับภาระหนักในการประชุมปรึกษา เพื่อให้ได้สถาบันที่เหมาะสมและ ทันสมัย และพร้อมที่จะต้องชี้แจงเจ้าหน้าที่วิเคราะห์จากหน่วยงานต่าง ๆ สำนักงานคณะกรรมการข้าราชการพลเรือน สำนักงบประมาณ กระทรวง การคลัง สำนักงานสภาพัฒนาการเศรษฐกิจแห่งชาติ และคณะที่ปรึกษา ระเบียบบริหารทั้งระดับอนุกรรมการและกรรมการใหญ่ การแก้ไข ปรับปรุง ชี้แจง โต้ตอบได้ ดำเนินการอย่างค่อยเป็นค่อยไป ผลที่สุดก็ผ่านการพิจารณา ของคณะที่ปรึกษาระเบียบบริหาร เมื่อวันที่ 1 กรกฎาคม พ.ศ. 2509 แต่ให้เรียก ชื่อ กรมแพร่ขยายการเกษตร โดยโอนงานส่งเสริมการเกษตรจากทุกกรมใน สังกัดกระทรวงเกษตรมาร่วมอยู่ในกรมนี้ ส่วนเจ้าหน้าที่ให้เรียกพนักงานแพร่ ขยายจังหวัดและอำเภอ เมื่อผ่านการพิจารณาของคณะที่ปรึกษาระเบียบบริหาร แล้ว ประธานคณะที่ปรึกษาระเบียบบริหารก็ได้นำเสนอต่อ ฯพณฯ นายกรัฐมนตรี แต่ข้อความในหนังสือชื่อกรมได้เปลี่ยนไปจาก กรมแพร่ขยายการเกษตร เป็นกรมบริการเกษตร ส่วนเจ้าหน้าที่ในส่วนภูมิภาคให้ยุบกสิกรรมจังหวัด - อำเภอ เป็น เกษตร จังหวัด เกษตรอำเภอ ซึ่งคณะรัฐมนตรีได้มีมติเห็นชอบด้วยในหลักการ เมื่อวันที่ 25 พฤษภาคม พ.ศ. 2510 และต่อมา กระทรวงเกษตรได้เสนอร่างพระราชบัญญัติ ปรับปรุงกระทรวงทบวงกรม เพื่อขออนุมัติและขอให้คณะที่ปรึกษากฎหมายช่วย พิจารณาก่อนส่งสภาร่างรัฐธรรมนูญในฐานะรัฐสภา พร้อมกันนั้นก็ได้ขอเปลี่ยนชื่อ กรมบริการเกษตร เป็น กรมส่งเสริมการเกษตร ซึ่งคณะรัฐมนตรีก็ได้รับหลักการ ร่างพระราชบัญญัติและอนุมัติให้แก้ไขชื่อได้ตามที่กระทรวงเกษตรเสนอ เมื่อวันที่ 25 กรกฎาคม พ.ศ. 2510&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;พระราชบัญญัติปรับปรุงกระทรวงทบวงกรม (ฉบับที่ 4) พ.ศ. 2510 เพื่อขอตั้ง กรมส่งเสริมการเกษตรนี้ ได้เข้าสู่ระเบียบวาระการประชุมสภาร่างรัฐธรรมนูญ เมื่อวันที่ 14 กันยายน พ.ศ. 2510 ที่ประชุมลงมติรับหลักการและได้ประกาศใช้เป็นกฎหมายให้ ตั้งกรมส่งเสริมการเกษตรได้เมื่อวันที่ 21 ตุลาคม พ.ศ. 2510&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(1) สำนักงานเลขานุการรัฐมนตริ&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(2) สำนักงานปลัดกระทรวง&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(3) กรมกสิกรรม&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(4) กรมการข้าว<br />\r\n&nbsp;&nbsp; &nbsp;(5) กรมประมง&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(6) กรมปศุสัตว์&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(7) กรมป่าไม้&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;(8) กรมส่งเสริมการเกษตร&nbsp;<br />\r\nต่อมาได้ประกาศใช้พระราชบัญญัติโอนกิจการบริหารในกระทรวงเกษตร พ.ศ. 2511 วันที่ 18 มิถุนายน พ.ศ. 2511 มี มาตราที่มีสาระสำคัญดังนี้<br />\r\nมาตรา 3 ให้โอนบรรดากิจการทรัพย์สิน หนี้สิน ข้าราชการ ลูกจ้าง และเงินงบประมาณ ของสำนักงานปลัดกระทรวง กระทรวงเกษตร เฉพาะที่เกี่ยวกับงานส่งเสริมการเกษตร ไปเป็นของกรมส่งเสริมการเกษตร กระทรวงเกษตร&nbsp;<br />\r\nมาตรา 4 ให้โอนบรรดากิจการ ทรัพย์สิน หนี้สิน ข้าราชการ ลูกจ้าง และเงินงบประมาณ ของกรมกสิกรรม เฉพาะที่เกี่ยวกับงานส่งเสริมและเผยแพร่การเกษตร และงานปราบโรค และศัตรูพืช และเฉพาะที่เกี่ยวกับกสิกรรมจังหวัด และกสิกรรมอำเภอ ไปเป็นของกรมส่งเสริม การเกษตร กระทรวงเกษตร&nbsp;<br />\r\nมาตรา 5 ให้โอนกิจการ ทรัพย์สิน หนี้สิน ข้าราชการ ลูกจ้าง และเงินงบประมาณ ของกรมการข้าว กระทรวงเกษตร เฉพาะที่เกี่ยวข้องกับงานส่งเสริมและเผยแพร่การเกษตร และเฉพาะที่เกี่ยวกับพนักงานข้าวจังหวัด และพนักงานข้าวอำเภอ ไปเป็นของกรมส่งเสริม การเกษตร กระทรวงเกษตร&nbsp;<br />\r\nฉะนั้น วันที่ 19 มิถุนายน พ.ศ. 2511 ซึ่งเป็นวันถัดจากวันประกาศในราชกิจจานุเบกษา จึงเป็นวันที่กรมส่งเสริมการเกษตรได้รับเข้าช่วงการบริหารงานส่งเสริมการเกษตรตั้งแต่นั้น เป็นต้นมา</span></p>\r\n\r\n<p>&nbsp;</p>', 0, NULL, NULL, 1, '2016-11-28 21:14:39', '1', '1'),
(2, 'img/cover/Gallery 7.jpg', 'e_วิสัยทัศน์ พันธกิจ', 'วิสัยทัศน์ พันธกิจ', '2', '<p>test</p>', '<p style="margin-left:0in"><strong>วิสัยทัศน์</strong></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">กรมส่งเสริมการเกษตรเป็นองค์กรที่มุ่งมันในการส่งเสริมและพัฒนาให้เกษตรกรอยู่ดีมีสุขอย่างยั่งยืน</span></p>\r\n\r\n<p style="margin-left:0in"><strong>คำขวัญ</strong></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">กรมส่งเสริมการเกษตรมีคนอยู่ทั่วทุกทิศ เป็นมิตรแท้ของเกษตรกร</span></p>\r\n\r\n<p style="margin-left:0in"><strong>ค่านิยม</strong></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">มุ่งมั่นบริการ ทีมงานเป็นเลิศ เชิดชูคุณธรรม ผู้นำการเปลี่ยนแปลง</span></p>\r\n\r\n<p style="margin-left:0in"><strong>พันธกิจ</strong></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ส่งเสริมและพัฒนาเกษตรกร ครอบครัวเกษตรกร องค์กรเกษตรกร และวิสาหกิจชุมชนให้มีความเข้มแข็ง และสามารถพึ่งพาตนเองได้</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ส่งเสริมและพัฒนาเกษตรกรกรให้มีขีดความสามารถในการผลิต และจัดการสินค้าเกษตรตามความต้องการของตลาด</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ให้บริการทางการเกษตรตามสภาพปัญหาและความต้องการของเกษตรกร</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ศึกษา วิจัย และพัฒนางานด้านการส่งเสริมการเกษตร และบูรณาการการทำงานกับทุกภาคส่วน</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ส่งเสริมและพัฒนาเกษตรกร ครอบครัวเกษตรกร องค์กรเกษตรกร และวิสาหกิจชุมชนให้มีความเข้มแข็ง และสามารถพึ่งพาตนเองได้</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ส่งเสริมและพัฒนาเกษตรกรกรให้มีขีดความสามารถในการผลิต และจัดการสินค้าเกษตรตามความต้องการของตลาด</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ให้บริการทางการเกษตรตามสภาพปัญหาและความต้องการของเกษตรกร</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ศึกษา วิจัย และพัฒนางานด้านการส่งเสริมการเกษตร และบูรณาการการทำงานกับทุกภาคส่วน</span></p>\r\n\r\n<p style="margin-left:0in"><strong>นโยบาย</strong></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ในปัจจุบันมีสถานการณ์หลายอย่างส่งผลกระทบต่อภาคการเกษตรและเกษตรกร ได้แก่ การเปลี่ยนแปลงของสภาพภูมิอากาศ การเปิดเสรีทางการค้า ความมั่นคงด้านอาหาร ทิศทางการพัฒนาเศรษฐกิจและสังคมของประเทศ รวมไปถึงการกระจายอำนาจสู่ท้องถิ่น เป็นต้น ภาคการเกษตรซึ่งเป็นสาขาการผลิตหลักของประเทศต้องมีการปรับตัว กรมส่งเสริมการเกษตรในฐานะที่มีบทบาทภารกิจหลักในการดูแลและพัฒนาเกษตรกร ต้องมีการเตรียมความพร้อมทั้งในตัวบุคลากร และเกษตรกร ให้สามารถสร้างภูมิคุ้มกันเพื่อรับมือกับสถานการณ์ต่าง ๆ มีการปรับกระบวนการทำงานให้สอดคล้องกับสถานการณ์ มีระบบการบริหารจัดการที่มีประสิทธิภาพ โดยยึดหลักปรัชญาของเศรษฐกิจพอเพียงเป็นพื้นฐานในการปฏิบัติงานในทุกระดับ ซึ่งการดำเนินงานในปีงบประมาณ 2554 มุ่งเน้นใน 4 เรื่อง</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ดำเนินงานโครงการพระราชดำริ</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">พัฒนาบุคลากร</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">สร้างความเข้มแข็งให้กับเกษตรกร องค์กรเกษตรกร และวิสาหกิจชุมชน</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">พัฒนาระบบข้อมูลและเทคโนโลยีสารสนเทศ</span></p>', 0, NULL, NULL, 1, '2016-11-27 04:09:44', '2', '1'),
(3, 'img/cover/Gallery 7.jpg', 'e_โครงสร้างหน่วยงาน', 'โครงสร้างหน่วยงาน', '2', '', '<p style="text-align:center">&nbsp; &nbsp;<img alt="" src="http://www.doae.go.th/2016/wp-content/uploads/2016/07/org_chart.jpg" style="height:721px; width:650px" /></p>', 0, NULL, NULL, 1, '2016-12-08 22:47:21', '3', '1'),
(4, 'img/cover/Gallery 7.jpg', 'e_ภารกิจ และหน้าที่รับผิดชอบ', 'ภารกิจ และหน้าที่รับผิดชอบ', '2', '', '<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">ในปัจจุบันมีสถานการณ์หลายอย่างส่งผลกระทบต่อภาคการเกษตรและเกษตรกร ได้แก่ การเปลี่ยนแปลงของสภาพภูมิอากาศ การเปิดเสรีทางการค้า ความมั่นคงด้านอาหาร ทิศทางการพัฒนาเศรษฐกิจและสังคมของประเทศ รวมไปถึงการกระจายอำนาจสู่ท้องถิ่น เป็นต้น ภาคการเกษตรซึ่งเป็นสาขาการผลิตหลักของประเทศต้องมีการปรับตัว กรมส่งเสริมการเกษตรในฐานะที่มีบทบาทภารกิจหลักในการดูแลและพัฒนาเกษตรกร ต้องมีการเตรียมความพร้อมทั้งในตัวบุคลากร และเกษตรกร ให้สามารถสร้างภูมิคุ้มกันเพื่อรับมือกับสถานการณ์ต่าง ๆ มีการปรับกระบวนการทำงานให้สอดคล้องกับสถานการณ์ มีระบบการบริหารจัดการที่มีประสิทธิภาพ โดยยึดหลักปรัชญาของเศรษฐกิจพอเพียงเป็นพื้นฐานในการปฏิบัติงานในทุกระดับ ซึ่งการดำเนินงานในปีงบประมาณ 2554 มุ่งเน้นใน 4 เรื่อง</span></p>\r\n\r\n<p style="margin-left:0in">&nbsp;</p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">1.ดำเนินงานโครงการพระราชดำริ</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">2.พัฒนาบุคลากร</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">3.สร้างความเข้มแข็งให้กับเกษตรกร องค์กรเกษตรกร และวิสาหกิจชุมชน</span></p>\r\n\r\n<p style="margin-left:0in"><span style="font-family:cs chatthai; font-size:14pt">4.พัฒนาระบบข้อมูลและเทคโนโลยีสารสนเทศ</span></p>', 0, NULL, NULL, 1, '2016-11-27 04:14:13', '4', '1'),
(5, 'img/cover/20151124142852_17_development-icon.png', 'e_ยุทธศาสตร์ แผนปฏิบัติราชการ', 'ยุทธศาสตร์ แผนปฏิบัติราชการ', '1', '', '<p>ทดสอบ</p>', 0, NULL, NULL, 1, '2016-12-06 18:20:07', '5', '1'),
(6, 'img/cover/Gallery 7.jpg', 'e_แผนงาน โครงการ และงบประมาณรายจ่ายประจำปี', 'แผนงาน โครงการ และงบประมาณรายจ่ายประจำปี', '1', '', '', 0, NULL, NULL, 1, '2016-11-27 05:36:48', '6', '1'),
(7, 'img/cover/Gallery 7.jpg', 'e_คำรับรองและ รายงานผลการปฏิบัติราชการ', 'คำรับรองและ รายงานผลการปฏิบัติราชการ', '1', NULL, NULL, 0, NULL, NULL, NULL, NULL, '7', '1'),
(8, 'img/cover/Gallery 7.jpg', 'e_กฎ ระเบียบ ข้อบังคับ', 'กฎ ระเบียบ ข้อบังคับ', '1', '', '', 0, NULL, NULL, 1, '2016-11-27 05:37:16', '8', '1'),
(9, 'img/cover/Gallery 7.jpg', 'e_ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศ', 'ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศ', '0', NULL, NULL, 0, NULL, NULL, NULL, NULL, '9', '1'),
(10, 'img/cover/Gallery 7.jpg', 'e_เกี่ยวกับ ซีไอโอ', 'เกี่ยวกับ ซีไอโอ', '2', '', '<p><strong>นโยบายของผู้บริหาร</strong></p>\r\n\r\n<p><strong>-----------------------------------------------</strong></p>\r\n\r\n<p><strong><img alt="" src="../upload/files/1481484847_prisma.jpg" style="height:400px; width:630px" /></strong></p>', 9, NULL, NULL, 1, '2016-12-12 02:34:14', '10', '1'),
(11, 'img/cover/Gallery 7.jpg', 'e_วิสัยทัศน์ และนโยบายต่างๆด้าน ICT', 'วิสัยทัศน์ และนโยบายต่างๆด้าน ICT', '1', NULL, NULL, 9, NULL, NULL, NULL, NULL, '11', '1'),
(12, 'img/cover/Gallery 7.jpg', 'e_นโยบายการบริหารจัดการด้าน ICT', 'นโยบายการบริหารจัดการด้าน ICT', '1', NULL, NULL, 9, NULL, NULL, NULL, NULL, '12', '1'),
(13, 'img/cover/Gallery 7.jpg', 'e_มาตรฐานการรักษาความมั่งคงปลอดภัย', 'มาตรฐานการรักษาความมั่งคงปลอดภัย', '1', NULL, NULL, 9, NULL, NULL, NULL, NULL, '13', '1'),
(14, 'img/cover/Gallery 7.jpg', 'e_การบริหารงานด้าน ICT', 'การบริหารงานด้าน ICT', '1', NULL, NULL, 9, NULL, NULL, NULL, NULL, '14', '1'),
(15, 'img/cover/Gallery 7.jpg', 'e_ข่าวสารจาก CIO', 'ข่าวสารจาก CIO', '1', NULL, NULL, 9, NULL, NULL, NULL, NULL, '15', '1'),
(16, 'img/cover/DOAE 150x150.png', 'e_หน่วยงานที่เกี่ยวข้อง', 'หน่วยงานที่เกี่ยวข้อง', '2', '', '<div class="entry-content">\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">กอง/สำนัก/ศูนย์ ในส่วนกลาง</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.psdd.doae.go.th/" title="">กลุ่มพัฒนาระบบบริหาร</a></li>\r\n	<li><a class="keep_count" href="http://www.inaudit.doae.go.th/" title="">กลุ่มตรวจสอบภายใน</a></li>\r\n	<li><a class="keep_count" href="http://www.person.doae.go.th/" title="">กองการเจ้าหน้าที่</a></li>\r\n	<li><a class="keep_count" href="http://www.finance.doae.go.th/" title="">กองคลัง</a></li>\r\n	<li><a class="keep_count" href="http://www.royalagro.doae.go.th/" title="">กองส่งเสริมโครงการ&nbsp;พระราชดำริ การจัดการพื้นที่&nbsp;และวิศวกรรมเกษตร</a></li>\r\n	<li><a class="keep_count" href="http://www.research.doae.go.th/" title="">กองวิจัยและพัฒนางานส่งเสริมการเกษตร</a></li>\r\n	<li><a class="keep_count" href="http://www.plan.doae.go.th/" title="">กองแผนงาน</a></li>\r\n	<li><a class="keep_count" href="http://www.ictc.doae.go.th/" title="">ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร</a></li>\r\n	<li><a class="keep_count" href="http://www.secreta.doae.go.th/" title="">สำนักงานเลขานุการกรม</a></li>\r\n	<li><a class="keep_count" href="http://www.agritech.doae.go.th/" title="">สำนักพัฒนาการถ่ายทอดเทคโนโลยี</a></li>\r\n	<li><a class="keep_count" href="http://www.ppsf.doae.go.th/" title="">กองส่งเสริมการอารักขาพืชและจัดการดินปุ๋ย</a></li>\r\n	<li><a class="keep_count" href="http://www.farmdev.doae.go.th/" title="">กองพัฒนาเกษตรกร</a></li>\r\n	<li><a class="keep_count" href="http://www.agriman.doae.go.th/" title="">สำนักส่งเสริมและจัดการสินค้าเกษตร</a></li>\r\n	<li><a class="keep_count" href="http://www.sceb.doae.go.th/" title="">กองส่งเสริมวิสาหกิจชุมชน</a></li>\r\n	<li><a class="keep_count" href="http://www.sewii.doae.go.th/" title="">สถาบันสร้างเสริมนวัตกรรมภูมิปัญญาเศรษฐกิพอเพียง</a></li>\r\n	<li><a class="keep_count" href="http://www.am1386.doae.go.th/" title="">สถานีวิทยุกระจายเสียงเพื่อการเกษตร</a></li>\r\n	<li><a href="http://savco-op.doae.go.th/COOP1/index.php">สหกรณ์ออมทรัพย์กรมส่งเสริมการเกษตร</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานส่งเสริมและพัฒนาการเกษตร</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.cdoae.doae.go.th/" title="">เขตที่ 1 ชัยนาท</a></li>\r\n	<li><a class="keep_count" href="http://www.wdoae.doae.go.th/" title="">เขตที่ 2 ราชบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.edoae.doae.go.th/" title="">เขตที่ 3 ระยอง</a></li>\r\n	<li><a class="keep_count" href="http://www.nedoae.doae.go.th/" title="">เขตที่ 4 ขอนแก่น</a></li>\r\n	<li><a class="keep_count" href="http://www.sdoae.doae.go.th/" title="">เขตที่ 5 สงขลา</a></li>\r\n	<li><a class="keep_count" href="http://www.ndoae.doae.go.th/" title="">เขตที่ 6 เชียงใหม่</a></li>\r\n	<li><a class="keep_count" href="http://www.nesdoae.doae.go.th/" title="">เขตที่ 7 นครราชสีมา</a></li>\r\n	<li><a class="keep_count" href="http://www.sndoae.doae.go.th/" title="">เขตที่ 8 สุราษฎร์ธานี</a></li>\r\n	<li><a href="http://www.nsdoae.doae.go.th/">เขตที่ 9 พิษณุโลก</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมและพัฒนาอาชีพการเกษตร(เกษตรที่สูง)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.haec01.doae.go.th/" title="">จังหวัดกาญจนบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.haec03.doae.go.th/" title="">จังหวัดเชียงใหม่</a></li>\r\n	<li><a class="keep_count" href="http://www.haec04.doae.go.th/" title="">จังหวัดเชียงราย</a></li>\r\n	<li><a class="keep_count" href="http://www.haec05.doae.go.th/" title="">จังหวัดลำพูน</a></li>\r\n	<li><a class="keep_count" href="http://www.haec06.doae.go.th/" title="">จังหวัดแม่ฮ่องสอน</a></li>\r\n	<li><a class="keep_count" href="http://www.haec02.doae.go.th/" title="">จังหวัดเลย</a></li>\r\n	<li><a class="keep_count" href="http://www.haec08.doae.go.th/" title="">จังหวัดพะเยา</a></li>\r\n	<li><a class="keep_count" href="http://www.doae.go.th/page/homepage#" title="">จังหวัดตาก</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมเทคโนโลยีด้านอารักขาพืช(ศทอ.)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.pmc04.doae.go.th/" title="">จังหวัดขอนแก่น</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc08.doae.go.th/" title="">จังหวัดเชียงใหม่</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc09.doae.go.th/" title="">จังหวัดพิษณุโลก</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc01.doae.go.th/" title="">จังหวัดชัยนาท</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc05.doae.go.th/" title="">จังหวัดนครราชสีมา</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc03.doae.go.th/" title="">จังหวัดชลบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc07.doae.go.th/" title="">จังหวัดสุราษฎร์ธานี</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc06.doae.go.th/" title="">จังหวัดสงขลา</a></li>\r\n	<li><a class="keep_count" href="http://www.pmc02.doae.go.th/" title="">จังหวัดสุพรรณบุรี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมเยาวชนเกษตร(ศสช.)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.ayp01.doae.go.th/" title="">จังหวัดกาญจนบุรี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมและพัฒนาอาชีพการเกษตร(ศสพ.)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.aopdb01.doae.go.th/" title="">จังหวัดอุตรดิตถ์</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdb02.doae.go.th/" title="">จังหวัดจันทบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdb05.doae.go.th/" title="">จังหวัดขอนแก่น</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh07.doae.go.th/" title="">จังหวัดเชียงใหม่</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh11.doae.go.th/" title="">จังหวัดเชียงราย</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh08.doae.go.th/" title="">จังหวัดน่าน</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh05.doae.go.th/" title="">จังหวัดยโสธร</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh04.doae.go.th/" title="">จังหวัดเลย</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh09.doae.go.th/" title="">จังหวัดยะลา</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh06.doae.go.th/" title="">จังหวัดลพบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh01.doae.go.th/" title="">จังหวัดฉะเชิงเทรา</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh10.doae.go.th/" title="">จังหวัดกระบี่</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh12.doae.go.th/" title="">จังหวัดสุราษฎร์ธานี</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh02.doae.go.th/" title="">จังหวัดระยอง</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdh03.doae.go.th/" title="">จังหวัดสมุทรสาคร</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdr01.doae.go.th/" title="">จังหวัดหนองคาย</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมเทคโนโลยีการเกษตรด้านแมลงเศรษฐกิจ(ศทม.)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.aopdb04.doae.go.th/">จังหวัดเชียงใหม่</a></li>\r\n	<li><a class="keep_count" href="http://www.aopdb03.doae.go.th/" title="">จังหวัดชุมพร</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมและพัฒนาอาชีพการเกษตร(หม่อนไหม)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.aopds08.doae.go.th/" title="">จังหวัดน่าน</a></li>\r\n	<li><a class="keep_count" href="http://www.sisaket.doae.go.th/monmai1" title="">จังหวัดศรีสะเกษ</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมและพัฒนา(อาชีพการเกษตรจักรกลเกษตร)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.aepd01.doae.go.th/" title="">จังหวัดชัยนาท</a></li>\r\n	<li><a class="keep_count" href="http://www.aepd02.doae.go.th/" title="">จังหวัดพิษณุโลก</a></li>\r\n	<li><a class="keep_count" href="http://www.aepd04.doae.go.th/" title="">จังหวัดเพชรบุรี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">ศูนย์ส่งเสริมเทคโนโลยีด้านวิศวกรรมเกษตร(ศทว.)</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.aepd03.doae.go.th/" title="">จังหวัดร้อยเอ็ด</a></li>\r\n	<li><a class="keep_count" href="http://www.aepd01.doae.go.th/" title="">จังหวัดชัยนาท</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 1</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.bangkok.doae.go.th/" title="">กรุงเทพ</a></li>\r\n	<li><a class="keep_count" href="http://www.chainat.doae.go.th/" title="">ชัยนาท</a></li>\r\n	<li><a class="keep_count" href="http://www.nonthaburi.doae.go.th/" title="">นนทบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.pathumthani.doae.go.th/" title="">ปทุมธานี</a></li>\r\n	<li><a class="keep_count" href="http://www.ayutthaya.doae.go.th/" title="">พระนครศรีอยุธยา</a></li>\r\n	<li><a class="keep_count" href="http://www.lopburi.doae.go.th/" title="">ลพบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.saraburi.doae.go.th/" title="">สระบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.singburi.doae.go.th/" title="">สิงห์บุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.angthong.doae.go.th/" title="">อ่างทอง</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 2</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.kanchanaburi.doae.go.th/" title="">กาญจนุบรี</a></li>\r\n	<li><a class="keep_count" href="http://www.nakhonpathom.doae.go.th/" title="">นครปฐม</a></li>\r\n	<li><a class="keep_count" href="http://www.prachuap.doae.go.th/" title="">ประจวบคีรีขันธ์</a></li>\r\n	<li><a class="keep_count" href="http://www.phetchaburi.doae.go.th/" title="">เพชรบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.ratchaburi.doae.go.th/" title="">ราชบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.samutsongkham.doae.go.th/" title="">สมุทรสงคราม</a></li>\r\n	<li><a class="keep_count" href="http://www.samutsakhon.doae.go.th/" title="">สมุทรสาคร</a></li>\r\n	<li><a class="keep_count" href="http://www.suphanburi.doae.go.th/" title="">สุพรรณบุรี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 3</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.chanthaburi.doae.go.th/" title="">จันทบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.chachoengsao.doae.go.th/" title="">ฉะเชิงเทรา</a></li>\r\n	<li><a class="keep_count" href="http://www.chonburi.doae.go.th/" title="">ชลบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.trat.doae.go.th/" title="">ตราด</a></li>\r\n	<li><a class="keep_count" href="http://www.nakhonnayok.doae.go.th/" title="">นครนายก</a></li>\r\n	<li><a class="keep_count" href="http://www.prachinburi.doae.go.th/" title="">ปราจีนบุรี</a></li>\r\n	<li><a class="keep_count" href="http://www.rayong.doae.go.th/" title="">ระยอง</a></li>\r\n	<li><a class="keep_count" href="http://www.samutprakan.doae.go.th/" title="">สมุทรปราการ</a></li>\r\n	<li><a class="keep_count" href="http://www.sakaeo.doae.go.th/" title="">สระแก้ว</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 4</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.kalasin.doae.go.th/" title="">กาฬสินธุ์</a></li>\r\n	<li><a class="keep_count" href="http://www.khonkaen.doae.go.th/" title="">ขอนแก่น</a></li>\r\n	<li><a class="keep_count" href="http://www.nakhonphanom.doae.go.th/" title="">นครพนม</a></li>\r\n	<li><a class="keep_count" href="http://www.buengkan.doae.go.th/" title="">บึงกาฬ</a></li>\r\n	<li><a class="keep_count" href="http://www.mahasarakham.doae.go.th/" title="">มหาสารคาม</a></li>\r\n	<li><a class="keep_count" href="http://www.mukdahan.doae.go.th/" title="">มุกดาหาร</a></li>\r\n	<li><a class="keep_count" href="http://www.roiet.doae.go.th/" title="">ร้อยเอ็ด</a></li>\r\n	<li><a class="keep_count" href="http://www.loei.doae.go.th/newsite/" title="">เลย</a></li>\r\n	<li><a class="keep_count" href="http://www.sakonnakhon.doae.go.th/" title="">สกลนคร</a></li>\r\n	<li><a class="keep_count" href="http://www.nongkhai.doae.go.th/" title="">หนองคาย</a></li>\r\n	<li><a class="keep_count" href="http://www.nongbualamphu.doae.go.th/" title="">หนองบัวลำภู</a></li>\r\n	<li><a class="keep_count" href="http://www.udonthani.doae.go.th/" title="">อุดรธานี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 5</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.trang.doae.go.th/" title="">ตรัง</a></li>\r\n	<li><a class="keep_count" href="http://www.narathiwat.doae.go.th/" title="">นราธิวาส</a></li>\r\n	<li><a class="keep_count" href="http://www.pattani.doae.go.th/" title="">ปัตตานี</a></li>\r\n	<li><a class="keep_count" href="http://www.phatthalung.doae.go.th/" title="">พัทลุง</a></li>\r\n	<li><a class="keep_count" href="http://www.yala.doae.go.th/" title="">ยะลา</a></li>\r\n	<li><a class="keep_count" href="http://www.songkhla.doae.go.th/" title="">สงขลา</a></li>\r\n	<li><a class="keep_count" href="http://www.satun.doae.go.th/" title="">สตูล</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 6</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.chiangrai.doae.go.th/" title="">เชียงราย</a></li>\r\n	<li><a class="keep_count" href="http://www.chiangmai.doae.go.th/" title="">เชียงใหม่</a></li>\r\n	<li><a class="keep_count" href="http://www.nan.doae.go.th/" title="">น่าน</a></li>\r\n	<li><a class="keep_count" href="http://www.phayao.doae.go.th/" title="">พะเยา</a></li>\r\n	<li><a class="keep_count" href="http://www.phrae.doae.go.th/" title="">แพร่</a></li>\r\n	<li><a class="keep_count" href="http://www.maehongson.doae.go.th/" title="">แม่ฮ่องสอน</a></li>\r\n	<li><a class="keep_count" href="http://www.lampang.doae.go.th/" title="">ลำปาง</a></li>\r\n	<li><a class="keep_count" href="http://www.lamphun.doae.go.th/" title="">ลำพูน</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 7</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.chaiyaphum.doae.go.th/" title="">ชัยภูมิ</a></li>\r\n	<li><a class="keep_count" href="http://www.khorat.doae.go.th/" title="">นครราชสีมา</a></li>\r\n	<li><a class="keep_count" href="http://www.buriram.doae.go.th/" title="">บุรีรัมย์</a></li>\r\n	<li><a class="keep_count" href="http://www.yasothon.doae.go.th/" title="">ยโสธร</a></li>\r\n	<li><a class="keep_count" href="http://www.sisaket.doae.go.th/" title="">ศรีสะเกษ</a></li>\r\n	<li><a class="keep_count" href="http://www.surin.doae.go.th/" title="">สุรินทร์</a></li>\r\n	<li><a class="keep_count" href="http://www.amnatcharoen.doae.go.th/" title="">อำนาจเจริญ</a></li>\r\n	<li><a class="keep_count" href="http://www.ubonratchathani.doae.go.th/" title="">อุบลราชธานี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 8</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.krabi.doae.go.th/" title="">กระบี่</a></li>\r\n	<li><a class="keep_count" href="http://www.chumphon.doae.go.th/" title="">ชุมพร</a></li>\r\n	<li><a class="keep_count" href="http://www.nakhonsri.doae.go.th/" title="">นครศรีธรรมราช</a></li>\r\n	<li><a class="keep_count" href="http://www.phangnga.doae.go.th/" title="">พังงา</a></li>\r\n	<li><a class="keep_count" href="http://www.phuket.doae.go.th/" title="">ภูเก็ต</a></li>\r\n	<li><a class="keep_count" href="http://www.ranong.doae.go.th/" title="">ระนอง</a></li>\r\n	<li><a class="keep_count" href="http://www.suratthani.doae.go.th/" title="">สุราษฎร์ธานี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus su-spoiler-closed">\r\n<div class="su-spoiler-title">สำนักงานเกษตรจังหวัดเขต 9</div>\r\n\r\n<div class="su-spoiler-content su-clearfix">\r\n<ul>\r\n	<li><a class="keep_count" href="http://www.kamphaengphet.doae.go.th/" title="">กำแพงเพชร</a></li>\r\n	<li><a class="keep_count" href="http://www.tak.doae.go.th/" title="">ตาก</a></li>\r\n	<li><a class="keep_count" href="http://www.nakhonsawan.doae.go.th/" title="">นครสวรรค์</a></li>\r\n	<li><a class="keep_count" href="http://www.phichit.doae.go.th/" title="">พิจิตร</a></li>\r\n	<li><a class="keep_count" href="http://www.uttaradit.doae.go.th/" title="">อุตรดิตถ์</a></li>\r\n	<li><a class="keep_count" href="http://www.phitsanulok.doae.go.th/" title="">พิษณุโลก</a></li>\r\n	<li><a class="keep_count" href="http://www.phetchabun.doae.go.th/" title="">เพชรบูรณ์</a></li>\r\n	<li><a class="keep_count" href="http://www.sukhothai.doae.go.th/" title="">สุโขทัย</a></li>\r\n	<li><a class="keep_count" href="http://www.uthaithani.doae.go.th/" title="">อุทัยธานี</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 0, NULL, NULL, 1, '2016-12-06 10:47:46', '16', '1'),
(17, 'img/cover/Gallery 7.jpg', 'e_ข้อมูลยุทธศาสตร์', 'ข้อมูลยุทธศาสตร์', '1', NULL, NULL, 14, NULL, NULL, NULL, NULL, '', '1'),
(18, 'img/cover/Gallery 7.jpg', 'e_ข้อมูลแผนแม่บท', 'ข้อมูลแผนแม่บท', '1', NULL, NULL, 14, NULL, NULL, NULL, NULL, '', '1'),
(19, 'img/cover/Gallery 7.jpg', 'eข้อมูลแผนปฏิบัติการ', 'ข้อมูลแผนปฏิบัติการ', '1', NULL, NULL, 14, NULL, NULL, NULL, NULL, '', '1'),
(20, 'img/cover/DOAE 265x265.png', '', 'แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2556-2559', NULL, '', '<p>ทดสอบ</p>', 5, 1, '2016-11-28 21:16:34', 1, '2016-12-10 22:37:45', '20', '1'),
(21, 'img/cover/DOAE 265x265.png', '', 'ทดสอบ', NULL, '', '<p>ทดสอบ</p>', 10, 1, '2016-11-28 21:18:58', 1, '2016-11-28 21:21:19', '21', '1'),
(22, 'img/cover/docv2.png', '', 'ทดสอบ 1', NULL, '', '<p>ทดสอบ</p>', 11, 1, '2016-11-28 21:28:55', 1, '2016-11-28 21:29:29', '22', '1'),
(23, 'img/cover/DOAE 265x265.png', '', 'ทดสอบ', NULL, '', '<p>ทดสอบ</p>', 6, 1, '2016-11-28 22:08:15', 1, '2016-11-28 22:09:08', '23', '1'),
(24, 'img/cover/DOAE 265x265.png', '', 'ทดสอบ', NULL, '', '<p>ทดสอบ</p>', 7, 1, '2016-11-28 22:09:23', 1, '2016-11-28 22:09:47', '24', '1'),
(25, 'img/cover/DOAE 265x265.png', '', 'ทดสอบ', NULL, '', '<p>ทดสอบ</p>', 8, 1, '2016-11-28 22:09:56', 1, '2016-11-28 22:10:21', '25', '1'),
(27, 'img/cover/DOAE 265x265.png', '', 'ทดสอบ 10 MB', NULL, '', '', 6, 1, '2016-12-01 01:44:55', 1, '2016-12-01 01:47:51', '27', '1'),
(28, 'img/cover/DOAE 265x265.png', 'แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2560-2564', 'แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2560-2564', NULL, '', '', 5, 1, '2016-12-02 16:29:14', 1, '2016-12-12 20:29:25', '28', '1'),
(29, 'img/cover/DOAE 265x265.png', 'ข้อมูลผู้บริหาร', 'ข้อมูลผู้บริหาร', '2', NULL, NULL, 0, NULL, NULL, NULL, NULL, '29', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_about_file`
--

CREATE TABLE `t_about_file` (
  `file_id` int(11) NOT NULL,
  `cover` text,
  `about_id` int(11) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_about_file`
--

INSERT INTO `t_about_file` (`file_id`, `cover`, `about_id`, `name_en`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `sort_order`, `update_date`, `active`) VALUES
(1, 'img/cover/Gallery 7.jpg', 17, 'แผนงานอารัยไม่รู้', 'แผนงานอารัยไม่รู้', 'tbltarget.pdf', NULL, NULL, '2016-11-19 08:54:24', NULL, '1', '2016-11-19 08:54:24', '1'),
(2, 'img/cover/Gallery 7.jpg', 5, 'แผนงานอารัยไม่รู้2', 'แผนงานอารัยไม่รู้2', 'tbltarget.pdf', NULL, NULL, '2016-11-19 08:54:24', NULL, '2', '2016-11-19 08:54:24', '0'),
(3, 'img/cover/Gallery 7.jpg', 1, 'แผนงานอารัยไม่รู้2', 'แผนงานอารัยไม่รู้2', 'tbltarget.pdf', NULL, NULL, NULL, NULL, '4', NULL, '0'),
(4, 'img/cover/Gallery 7.jpg', 5, 'แผนงานอารัยไม่รู้', 'แผนงานอารัยไม่รู้', 'tbltarget.pdf', '', NULL, '2016-11-19 08:54:24', NULL, '1', '2016-11-19 08:54:24', '0'),
(5, 'img/cover/Gallery 7.jpg', 7, NULL, '60028.pdf', 'upload/files/60028.pdf', NULL, 1, '2016-11-26 17:50:39', 1, NULL, '2016-11-26 17:50:39', '1'),
(6, 'img/cover/Gallery 7.jpg', 5, NULL, 'แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2556-2559.pdf', 'upload/files/แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2556-2559.pdf', NULL, 1, '2016-11-27 04:20:46', 1, NULL, '2016-11-27 04:20:46', '0'),
(7, 'img/cover/Gallery 7.jpg', 6, NULL, '2rai.pdf', 'upload/files/2rai.pdf', NULL, 1, '2016-11-27 05:36:44', 1, NULL, '2016-11-27 05:36:44', '1'),
(8, 'img/cover/Gallery 7.jpg', 8, NULL, '3Joint plantation_3.PDF', 'upload/files/3Joint plantation_3.PDF', NULL, 1, '2016-11-27 05:37:12', 1, NULL, '2016-11-27 05:37:12', '1'),
(9, 'img/cover/Gallery 7.jpg', 5, NULL, '1Garden.pdf', 'upload/files/1Garden.pdf', NULL, 1, '2016-11-27 05:37:46', 1, NULL, '2016-11-27 05:37:46', '0'),
(10, NULL, 20, NULL, 'แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2556-2559.pdf', 'upload/files/แผนยุทธศาสตร์กรมส่งเสริมการเกษตร ปี 2556-2559.pdf', NULL, 1, '2016-11-28 21:16:53', 1, NULL, '2016-11-28 21:16:53', '1'),
(11, NULL, 23, NULL, '1Garden.pdf', 'upload/files/1Garden.pdf', NULL, 1, '2016-11-28 22:09:06', 1, NULL, '2016-11-28 22:09:06', '1'),
(12, NULL, 24, NULL, '3Joint plantation_3.PDF', 'upload/files/3Joint plantation_3.PDF', NULL, 1, '2016-11-28 22:09:38', 1, NULL, '2016-11-28 22:09:38', '1'),
(13, NULL, 25, NULL, '1Garden.pdf', 'upload/files/1Garden.pdf', NULL, 1, '2016-11-28 22:10:07', 1, NULL, '2016-11-28 22:10:07', '1'),
(14, NULL, 26, NULL, '1Garden.pdf', 'upload/files/1Garden.pdf', NULL, 1, '2016-12-01 01:42:41', 1, NULL, '2016-12-01 01:42:41', '1'),
(15, NULL, 27, NULL, '160303011904.PDF', 'upload/files/160303011904.PDF', NULL, 1, '2016-12-01 01:47:46', 1, NULL, '2016-12-01 01:47:46', '0'),
(16, NULL, 28, NULL, '60028.pdf', 'upload/files/60028.pdf', NULL, 1, '2016-12-02 16:32:15', 1, NULL, '2016-12-02 16:32:15', '0'),
(21, NULL, 5, NULL, 'ImprovingSoilQuality_1.jpg', 'upload/files/ImprovingSoilQuality_1.jpg', NULL, 1, '2016-12-06 17:38:04', 1, NULL, '2016-12-06 17:38:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_article`
--

CREATE TABLE `t_article` (
  `article_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `cat_article_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `content_en` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_article`
--

INSERT INTO `t_article` (`article_id`, `cover`, `cat_article_id`, `title_en`, `title`, `content`, `content_en`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'img/cover/rice.png', 2, 'ข้าว', 'ข้าว', NULL, NULL, '0', 0, NULL, NULL, 1, '2016-11-27 05:15:47', NULL, '1'),
(4, 'img/cover/Alecive-Flatwoken-Apps-Google-Maps.ico', 2, 'สัปปะรด', 'สัปปะรด', NULL, NULL, '0', 0, NULL, NULL, 1, '2016-12-07 15:30:46', NULL, '0'),
(5, 'img/cover/Self-Service2-1-1.jpg', 2, 'ข้าวขาวสายพันธ์ุสินเหล็ก', 'ข้าวขาวสายพันธ์ุสินเหล็ก', '<p><span style="font-family:cs chatthai; font-size:14pt">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ข้าวสินเหล็กได้จากผสมข้ามพันธุ์ระหว่างข้าวเจ้าหอมนิล กับ ข้าวขาวดอกมะลิ 105 เป็นข้าวสีขาวที่มีกลิ่นหอม &nbsp;รูปร่างเมล็ดเรียวยาว ไม่ไวต่อช่วงแสง ปลูกได้ตลอดทั้งปี มีความต้านทานต่อโรคไหม้ข้าวสินเหล็กในฐานะเป็นข้าวหอมนุ่มที่มี ดัชนีน้ำตาล ต่ำ-ปานกลาง เมื่อนำมาทดลองบริโภคในกลุ่มผู้ป่วยเบาหวาน พบว่าการบริโภคข้าวกล้องสินเหล็ก ช่วยแก้ปัญหาเบาหวานได้ ทำให้สภาวะดื้อต่อ </span><span style="font-family:cs chatthai; font-size:14pt">insulin </span><span style="font-family:cs chatthai; font-size:14pt">ลดลงและการทำงานของตับอ่อนดีขึ้น รวมทั้งทำให้ค่าเฉลี่ยของ </span><span style="font-family:cs chatthai; font-size:14pt">triglyceride </span><span style="font-family:cs chatthai; font-size:14pt">ลดลง &nbsp;นอกจากนี้ข้าวสินเหล็กยังมีธาตุเหล็กในเมล็ดสูง ข้าวพันธุ์นี้ได้ผ่านการประเมินคุณสมบัติความเป็นประโยชน์ของธาตุเหล็ก ทั้งในระดับห้องปฏิบัติการและในมนุษย์ โดยพบว่าการส่งเสริมการบริโภคข้าวสินเหล็กในเด็กนักเรียนที่มีภาวะพร่องธาตุเหล็ก ทำให้ระดับ </span><span style="font-family:cs chatthai; font-size:14pt">hemoglobin </span><span style="font-family:cs chatthai; font-size:14pt">มีแนวโน้มเพิ่มขึ้น</span></p>', '', '1', 1, NULL, NULL, 1, '2016-11-26 17:15:52', NULL, '1'),
(6, NULL, 2, 'ข้าวสีดำพันธ์ไรซ์เบอร์รี่', 'ข้าวสีดำพันธ์ไรซ์เบอร์รี่', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '', '1', 1, NULL, NULL, 1, '2016-11-25 21:45:13', NULL, '1'),
(7, 'img/cover/DOAE 265x265.png', 1, '', 'ข้อมูลสถานการณ์ทางธรรมชาติ', NULL, NULL, NULL, 0, 1, '2016-11-25 21:33:57', 1, '2016-11-27 05:13:34', '7', '1'),
(8, 'img/cover/DOAE 265x265.png', 1, '', 'ข้อมูลสภาพอากาศตามภูมิภาค', NULL, NULL, NULL, 0, 1, '2016-11-25 21:36:39', 1, '2016-11-27 05:13:44', '8', '1'),
(9, 'img/cover/DOAE 265x265.png', 3, '', 'เตือนการระบาดศัตรูพืช', NULL, NULL, NULL, 0, 1, '2016-11-25 21:37:15', 1, '2016-12-01 12:56:14', '9', '1'),
(10, 'img/cover/DOAE 265x265.png', 3, '', 'การระบาดเพลี้ยแป้งมันสำปะหลัง', NULL, NULL, NULL, 0, 1, '2016-11-25 21:37:53', 1, '2016-12-01 12:55:45', '10', '1'),
(11, 'img/cover/DOAE 265x265.png', 3, '', 'การระบาดศัตรูมะพร้าว', NULL, NULL, NULL, 0, 1, '2016-11-25 21:38:33', 1, '2016-12-01 12:55:54', '11', '1'),
(12, 'img/cover/DOAE 265x265.png', 3, '', 'การระบาดศัตรูข้าว', NULL, NULL, NULL, 0, 1, '2016-11-25 21:38:55', 1, '2016-12-01 12:56:06', '12', '1'),
(13, 'img/cover/DOAE 265x265.png', 4, '', 'ราคาสินค้าเกษตร', NULL, NULL, NULL, 0, 1, '2016-11-25 21:39:34', 1, '2016-11-27 05:16:36', '13', '1'),
(14, 'img/cover/DOAE 265x265.png', 4, '', 'ตลาดเกษตรกร', NULL, NULL, NULL, 0, 1, '2016-11-25 21:39:47', 1, '2016-11-27 05:16:46', '14', '1'),
(15, 'img/cover/DOAE 265x265.png', 5, '', 'โครงการส่งเสริมการเกษตร', NULL, NULL, NULL, 0, 1, '2016-11-25 21:40:16', 1, '2016-11-27 05:16:15', '15', '1'),
(16, NULL, NULL, 'ข้าวสังข์หยด', 'ข้าวสังข์หยด', '', '', NULL, 1, 1, '2016-11-25 21:45:26', 1, '2016-11-25 21:45:54', '16', '1'),
(17, NULL, NULL, 'ข้าวลืมผัว', 'ข้าวลืมผัว', '', '', NULL, 1, 1, '2016-11-25 21:46:09', 1, '2016-11-25 21:46:25', '17', '1'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2016-12-02 17:52:34', 1, '2016-12-02 17:52:34', '18', '1'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2016-12-07 15:24:21', 1, '2016-12-07 15:24:21', '19', '1'),
(20, NULL, 0, '', '', NULL, NULL, NULL, 0, 1, '2016-12-07 15:26:06', 1, '2016-12-07 15:26:10', '20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_article_cat`
--

CREATE TABLE `t_article_cat` (
  `cat_article_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_article_cat`
--

INSERT INTO `t_article_cat` (`cat_article_id`, `cover`, `icon`, `name`, `name_en`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'km_001.jpg', 'img/cover/Self-Service1.jpg', 'พื้นที่เพาะปลูกและสภาพแวดล้อม', 'Environment and Argriculture', NULL, NULL, 1, '2016-12-08 23:06:42', '1', '1'),
(2, 'km_001.jpg', 'img/cover/Self-Service2.jpg', 'การส่งเสริมการปลูกพืชในประเทศไทย', 'Support Argriculture', NULL, NULL, 1, '2016-12-07 13:24:08', '2', '1'),
(3, 'km_001.jpg', 'img/cover/Self-Service3.jpg', 'ศัตรูพืชโรคระบาดและส่งเสริมศักยภาพการผลิต', 'ศัตรูพืชโรคระบาดและส่งเสริมศักยภาพการผลิต', NULL, NULL, 1, '2016-11-25 20:56:09', '5', '1'),
(4, 'km_001.jpg', 'img/cover/Self-Service4.jpg', 'ส่งเสริมการตลาดและช่องทางจัดจำหน่าย', 'Marketing and Channel', NULL, NULL, 1, '2016-12-15 18:49:17', '3', '1'),
(5, 'km_001.jpg', 'img/cover/Self-Service5.jpg', 'เครื่องมือสนับสนุนและให้ความช่วยเหลือ', 'เครื่องมือสนับสนุนและให้ความช่วยเหลือ', NULL, NULL, 1, '2016-11-25 20:56:28', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_article_file`
--

CREATE TABLE `t_article_file` (
  `file_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_article_file`
--

INSERT INTO `t_article_file` (`file_id`, `cover`, `article_id`, `name_en`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `sort_order`, `update_date`, `active`) VALUES
(1, 'km_001.jpg', 6, 'แผนงานอารัยไม่รู้', 'แผนงานอารัยไม่รู้', 'tbltarget.pdf', NULL, NULL, '2016-11-19 08:54:24', NULL, '1', '2016-11-19 08:54:24', '1'),
(2, 'km_001.jpg', 6, 'แผนงานอารัยไม่รู้2', 'แผนงานอารัยไม่รู้2', 'tbltarget.pdf', NULL, NULL, '2016-11-19 08:54:24', NULL, '2', '2016-11-19 08:54:24', '1'),
(3, 'km_002.jpg', 6, 'แผนงานอารัยไม่รู้2', 'แผนงานอารัยไม่รู้2', 'tbltarget.pdf', NULL, NULL, NULL, NULL, '4', NULL, '1'),
(4, 'km_001.jpg', 6, 'แผนงานอารัยไม่รู้', 'แผนงานอารัยไม่รู้', 'tbltarget.pdf', '', NULL, '2016-11-19 08:54:24', NULL, '1', '2016-11-19 08:54:24', '1'),
(5, NULL, 5, NULL, '60028.pdf', 'upload/files/60028.pdf', NULL, 1, '2016-11-26 17:15:48', 1, NULL, '2016-11-26 17:15:48', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_banner`
--

CREATE TABLE `t_banner` (
  `banner_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_banner`
--

INSERT INTO `t_banner` (`banner_id`, `images`, `title_en`, `title`, `content_en`, `content`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(8, 'img/cover/Bannner1.jpg', '', '', '', '', NULL, '0', 1, '2016-11-25 05:11:45', 1, '2016-12-16 14:13:36', '8', '1'),
(18, 'img/cover/rice3.jpg', '', 'กรมส่งเสริมการเกษตรจัดจำหน่ายข้าวสารเพื่อช่วยเหลือเกษตรกร', '', '<p>กรมส่งเสริมการเกษตร จัดจำหน่ายข้าวสารเพื่อช่วยเหลือเกษตรกร โดยนำข้าวจากกลุ่มวิสาหกิจชุมชนผู้ผลิตข้าวมาบรรจุในรูปแบบสวยงามเหมาะแก่การมอบเป็นของขวัญปีใหม่ โดยจัดจำหน่ายที่ที่ร้านค้าสวัสดิการกรมส่งเสริมการเกษตร หรือสอบถามได้ที่ เบอร์ 02-5793801&nbsp;</p>', NULL, '0', 1, '2016-12-06 20:00:02', 1, '2016-12-16 14:11:23', '19', '1'),
(21, 'img/cover/agri-map2-1-2048x800.jpg', '', '', '', '', NULL, '0', 1, '2016-12-16 14:15:33', 1, '2016-12-16 14:16:18', '19', '1'),
(22, 'img/cover/news1.jpg', '', 'รัฐมนตรีว่าการกระทรวงเกษตรและสหกรณ์ พร้อมด้วยนายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตรและผู้บริหารกระทรวงเกษตรและสหกรณ์ ลงพื้นที่โครงการพัฒนาลุ่มน้ำปากพนัง อันเนื่องมาจากพระราชดำริฯ จ.นครศรีธรรมราช', '', '<p>พล.อ.ฉัตรชัย สาริกัลยะ รัฐมนตรีว่าการกระทรวงเกษตรและสหกรณ์ พร้อมด้วยนายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตรและผู้บริหารกระทรวงเกษตรและสหกรณ์ ลงพื้นที่โครงการพัฒนาลุ่มน้ำปากพนัง อันเนื่องมาจากพระราชดำริฯ จ.นครศรีธรรมราช พบปะเกษตรกรปลูกส้มโอทับทิมสยาม ซึ่งมีการปลูแห่งเดียวในประเทศไทย เนื้อที่รวม 2,200 ไร่ ส่วนใหญ่ได้ GAP แล้ว ส่วนที่เหลือทาง กษ. จะส่งเสริมต่อไป จุดที่ รมว.กษ. ไปตรวจในครั้งนี้ คือ สวนส้มโอทับทิมสยามของนายวิรัตน์ สุขแสง ซึ่งเป็นศูนย์เรีย<span style="font-family:inherit">นรู้ ศพก. ที่ถ่ายทอดการปลูกส้มผโอทับทิมสยามอีกด้วย</span></p>\r\n\r\n<div class="text_exposed_show" style="display: inline; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 16px; background-color: rgb(255, 255, 255);">\r\n<p>ในปีนี้ สวนส้มโอทับทิมสยามได้รับผบกระทบจากน้ำท่วม รมว.กษ. ได้สั่งการให้ ชป. ได้รีบเร่งระบายน้ำออกจากพื้นที่ โดยกั้นคั้นน้ำรอบพื้นที่ 2,200 ไร่ พร้อมระดมเครื่องสูบน้ำ และ เครื่องผลักดันน้ำ ให้เสร็จภายใน 7 วัน เพื่อรักษาต้นส้มไว้ ซึ่งหากปล่อยนานกว่า 15 วัน อาจจะทำให้ต้นส้มเสียหายได้</p>\r\n\r\n<p>เมื่อน้ำลดแล้ว ต้องเข้ามาฟื้นฟูพื้นที่การเกษตร โดยเฉพาะไม้ผล หน่วยงานที่เกี่ยวข้อง คือ กรมวิชาการเกษตร และ กรมส่งเสริมการเกษตรจะเข้ามาแนะนำดูแล</p>\r\n\r\n<p>นอกจากนี้ รมว.กษ. ได้แนะนำให้เกษตรกรรักษามาตรฐาน พร้อมทำเกษตรแปลงใหญ่ส้มโอทับทิมสยาม ทำให้ต้นทุนลดลง ผลผลิตมีคุณภาพมาตรฐาน ต่อรองราคาได้</p>\r\n\r\n<p>ในตอนท้าย รมว.กษ. ได้มอบข้าวสารช่วยเหลือพี่น้องเกษตรกร พร้อมกล่าวให้กำลังใจ ให้ผ่านวิกฤตไปได้ด้วยดี ซึ่ง กษ. จะช่วยเหลือเต็มที่เพื่อให้พี่น้องเกษตรกรผ่านวิกฤตไปได้ มีความสุข</p>\r\n</div>', NULL, '0', 1, '2016-12-16 14:21:17', 1, '2016-12-16 14:30:56', '22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_comment`
--

CREATE TABLE `t_comment` (
  `com_id` int(11) NOT NULL,
  `qa_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `contact_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_contact`
--

INSERT INTO `t_contact` (`contact_id`, `images`, `title_en`, `title`, `content_en`, `content`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'img/cover/contact.png', 'Contact', 'ข้อมูลติดต่อ', '<p>Please tel.&nbsp;02-579-0121-27</p>', '<p><strong>ข้อมูลติดต่อ</strong></p>\r\n\r\n<p>ที่อยู่ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;กรมส่งเสริมการเกษตร 2143/1 ถนน พหลโยธิน เขตจตุจักร กรุงเทพมหานคร 10900</p>\r\n\r\n<p>เบอร์โทรศัพท์ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 02-579-0121-27</p>\r\n\r\n<p>โทรสาร &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 02-111111</p>\r\n\r\n<p>อีเมล์ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; servicelink@doae.go.th (กรมส่งเสริมการเกษตร)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>กรมส่งเสริมการเกษตร กระทรวงเกษตรและสหกรณ์<br />\r\n2143/1 ถนน พหลโยธิน เขตจตุจักร กรุงเทพมหานคร 10900<br />\r\nอีเมล์ : servicelink@doae.go.th โทรศัพท์. 02-5790121-27<br />\r\nสงวนลิขสิทธิ์ พ.ศ. 2559 กรมส่งเสริมการเกษตร กระทรวงเกษตรและสหกรณ์</p>\r\n\r\n<p>หน่วยงานส่วนกลาง<br />\r\nสำนักงานเลขานุการกรม (สลก.) อีเมล์ : secreta@doae.go.th โทรศัพท์. 0-2579-3013<br />\r\nกองการเจ้าหน้าที่ (กกจ.) อีเมล์ : person@doae.go.th โทรศัพท์. 0-2579-9521<br />\r\nกองคลัง (กกจ.) อีเมล์ : finance@doae.go.th โทรศัพท์. 0-2940-6044<br />\r\nกองส่งเสริมโครงการพระราชดำริ การจัดการพื้นที่และวิศวกรรมเกษตร (กพวศ.) อีเมล์ : agrodev@doae.go.th โทรศัพท์. 0-2579-3804<br />\r\nกองแผงงาน (กผง.) อีเมล์ : plan@doae.go.th โทรศัพท์. 0-2579-3741<br />\r\nกองวิจัยและพัฒนางานส่งเสริมการเกษตร (กวพ.) อีเมล์ : research@doae.go.th โทรศัพท์. 0-2579-9587<br />\r\nศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร (ศสท.) อีเมล์ :ict10@doae.go.th โทรศัพท์. 0-2579-3723<br />\r\nสำนักพัฒนาการถ่ายทอดเทคโนโลยีการเกษตร (สพท.) อีเมล์ : agritech@doae.go.th โทรศัพท์. 0-2561-3220<br />\r\nกองพัฒนาเกษตรกร (กพก.) อีเมล์ : farmdev10@doae.go.th โทรศัพท์. 0-2561-4795<br />\r\nกองส่งเสริมการอารักขาพืชและจัดการดินปุ๋ย (กอป.) อีเมล์ : agriqua@doae.go.th โทรศัพท์. 0-2940-6189<br />\r\nสำนักส่งเสริมและจัดการสินค้าเกษตร (สสจ.) อีเมล์ : agriman10@doae.go.th โทรศัพท์. 0-2561-3475-6<br />\r\nกลุ่มตรวจสอบภายใน (กตน.) อีเมล์ : inaudit@doae.go.th โทรศัพท์. 0-2561-4875<br />\r\nกลุ่มพัฒนาระบบบริหาร (กพร.) อีเมล์ : pedd@doae.go.th โทรศัพท์. 0-2940-6023<br />\r\nกองส่งเสริมวิสาหกิจชุมชน (กสว.) อีเมล์ : sceb10@doae.go.th โทรศัพท์. 0-2955-1595<br />\r\nสหกรณ์ออมทรัพย์กรมส่งเสริมการเกษตร อีเมล์ : sahakorn_doae@hotmail.com โทรศัพท์. 0-2579-0885,0-2579-8699,0-2579-8705,0-2579-5038<br />\r\nงานฌาปนกิจสงเคราะห์ กรมส่งเสริมการเกษตร &nbsp;โทรศัพท์. 0-2579-3910</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 1, '2016-11-26 15:44:34', 1, '2016-12-07 14:36:24', '1', '1'),
(2, 'img/cover/map.png', '', 'แผนที่ กรมส่งเสริมการเกษตร', '', '<p style="text-align:center"><iframe frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7747.852812163958!2d100.577004!3d13.843456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa83bd6b03537e6a!2z4LiB4Lij4Lih4Liq4LmI4LiH4LmA4Liq4Lij4Li04Lih4LiB4Liy4Lij4LmA4LiB4Lip4LiV4Lij!5e0!3m2!1sth!2sus!4v1480196906454" style="border:0" width="600"></iframe></p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://www.doae.go.th//img/doae_map2.gif" style="height:856px; text-align:center; width:600px" /></p>', NULL, NULL, 1, '2016-11-27 04:43:28', 1, '2016-11-27 04:57:35', '2', '1'),
(3, NULL, '', 'แผนผังเว็บไซต์', '', '<p>ทดสอบ</p>', NULL, NULL, NULL, NULL, 1, '2016-12-15 03:19:38', '0', NULL),
(4, NULL, '', 'การปฏิเสธความรับผิดชอบ', '', '<p>ทดสอบ</p>', NULL, NULL, NULL, NULL, 1, '2016-12-15 03:17:11', '0', NULL),
(5, NULL, NULL, 'นโยบายเว็บไซต์', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL),
(6, NULL, NULL, 'นโยบายการคุ้มครองข้อมูลส่วนบุคคล', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL),
(7, NULL, NULL, 'นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_contact_file`
--

CREATE TABLE `t_contact_file` (
  `file_id` int(11) NOT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_contact_file`
--

INSERT INTO `t_contact_file` (`file_id`, `contact_id`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 1, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-26 16:03:51', 1, '2016-11-26 16:03:51', '0'),
(2, 1, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-26 16:03:51', 1, '2016-11-26 16:03:51', '0'),
(3, 1, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-26 16:03:55', 1, '2016-11-26 16:03:55', '0'),
(4, 1, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-26 16:03:55', 1, '2016-11-26 16:03:55', '0'),
(5, 1, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-26 16:03:59', 1, '2016-11-26 16:03:59', '0'),
(6, 1, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-26 16:03:59', 1, '2016-11-26 16:03:59', '0'),
(7, 1, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-26 16:05:09', 1, '2016-11-26 16:05:09', '0'),
(8, 1, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-26 16:05:09', 1, '2016-11-26 16:05:09', '0'),
(9, 1, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-26 16:06:22', 1, '2016-11-26 16:06:22', '0'),
(10, 1, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-26 16:06:22', 1, '2016-11-26 16:06:22', '0'),
(11, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:06:28', 1, '2016-11-26 16:06:28', '0'),
(12, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:06:34', 1, '2016-11-26 16:06:34', '0'),
(13, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:06:37', 1, '2016-11-26 16:06:37', '0'),
(14, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:06:43', 1, '2016-11-26 16:06:43', '0'),
(15, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:06:47', 1, '2016-11-26 16:06:47', '0'),
(16, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:06:53', 1, '2016-11-26 16:06:53', '0'),
(17, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 16:07:33', 1, '2016-11-26 16:07:33', '0'),
(18, 1, 'help.xls', 'upload/files/help.xls', NULL, 1, '2016-11-26 16:09:50', 1, '2016-11-26 16:09:50', '0'),
(19, 1, 'overview_mocap.docx', 'upload/files/overview_mocap.docx', NULL, 1, '2016-11-26 16:09:50', 1, '2016-11-26 16:09:50', '0'),
(20, 1, 'import_url.xls', 'upload/files/import_url.xls', NULL, 1, '2016-11-26 16:09:50', 1, '2016-11-26 16:09:50', '0'),
(21, 1, 'help.xls', 'upload/files/help.xls', NULL, 1, '2016-11-26 16:09:53', 1, '2016-11-26 16:09:53', '0'),
(22, 1, 'overview_mocap.docx', 'upload/files/overview_mocap.docx', NULL, 1, '2016-11-26 16:09:53', 1, '2016-11-26 16:09:53', '0'),
(23, 1, 'import_url.xls', 'upload/files/import_url.xls', NULL, 1, '2016-11-26 16:09:53', 1, '2016-11-26 16:09:53', '0'),
(24, 1, 'help.xls', 'upload/files/help.xls', NULL, 1, '2016-11-26 16:10:05', 1, '2016-11-26 16:10:05', '0'),
(25, 1, 'overview_mocap.docx', 'upload/files/overview_mocap.docx', NULL, 1, '2016-11-26 16:10:05', 1, '2016-11-26 16:10:05', '0'),
(26, 1, 'import_url.xls', 'upload/files/import_url.xls', NULL, 1, '2016-11-26 16:10:05', 1, '2016-11-26 16:10:05', '0'),
(27, 1, 'help.xls', 'upload/files/help.xls', NULL, 1, '2016-11-26 16:11:18', 1, '2016-11-26 16:11:18', '0'),
(28, 1, 'overview_mocap.docx', 'upload/files/overview_mocap.docx', NULL, 1, '2016-11-26 16:11:18', 1, '2016-11-26 16:11:18', '0'),
(29, 1, 'import_url.xls', 'upload/files/import_url.xls', NULL, 1, '2016-11-26 16:11:18', 1, '2016-11-26 16:11:18', '0'),
(30, 1, 'import_menu.xls', 'upload/files/import_menu.xls', NULL, 1, '2016-11-26 16:12:41', 1, '2016-11-26 16:12:41', '0'),
(31, 1, 'SSI system requirement 2017_20161121.xlsx', 'upload/files/SSI system requirement 2017_20161121.xlsx', NULL, 1, '2016-11-26 16:12:41', 1, '2016-11-26 16:12:41', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_con_type`
--

CREATE TABLE `t_con_type` (
  `con_type_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_con_type`
--

INSERT INTO `t_con_type` (`con_type_id`, `name`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 'สอบถามปัญหาทั่วไป', NULL, NULL, NULL, NULL, '1'),
(2, 'ปัญหาด้านการเพาะปลูก', NULL, NULL, NULL, NULL, '1'),
(3, 'ปัญหาเรื่องที่ดินเพาะปลูก', NULL, NULL, NULL, NULL, '1'),
(4, 'ปัญหาการเกษตร', NULL, NULL, NULL, NULL, '1'),
(5, 'ปัญหาอื่นๆ', NULL, NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_download_file`
--

CREATE TABLE `t_download_file` (
  `download_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_download_file`
--

INSERT INTO `t_download_file` (`download_id`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(38, 'เอกสาร TOR.docx', 'upload/files/เอกสารTOR.docx', NULL, 1, '2016-11-28 21:27:13', 1, '2016-11-28 21:27:13', '1'),
(39, 'มาตรฐานการพัฒนาเว็บไซต์ภาครัฐ.docx', 'upload/files/มาตรฐานการพัฒนาเว็บไซต์ภาครัฐ.docx', NULL, 1, '2016-12-02 03:15:18', 1, '2016-12-02 03:15:18', '1'),
(40, 'ร่างTOR-edit-310859.docx', 'upload/files/ร่างTOR-edit-310859.docx', NULL, 1, '2016-12-02 03:15:26', 1, '2016-12-02 03:15:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_event`
--

CREATE TABLE `t_event` (
  `event_id` int(11) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` text,
  `content_en` text,
  `content` text,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_event`
--

INSERT INTO `t_event` (`event_id`, `title_en`, `title`, `start`, `end`, `allDay`, `content_en`, `content`, `update_id`, `update_date`, `create_id`, `create_date`, `active`) VALUES
(2, '', 'วันรัฐธรรมนูญ', '2016-12-10 00:00:00', '2016-12-10 00:00:00', NULL, '', '', 1, '2016-12-03 20:33:14', 1, '2016-12-03 20:32:38', '1'),
(3, '', 'ตลาดเกษตรกร', '2016-12-11 00:00:00', '2016-12-11 00:00:00', NULL, '', '', 1, '2016-12-05 22:45:17', 0, '2016-12-03 20:33:36', '1'),
(8, 'Christmas Day', 'วันคริสต์มาส', '2016-12-25 00:00:00', '2016-12-25 00:00:00', NULL, '<p>Test</p>', '<p>ทดสอบ</p>', 1, '2016-12-15 20:00:39', 1, '2016-12-15 20:00:02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_freq`
--

CREATE TABLE `t_freq` (
  `freq_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `cat_freq_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `content_en` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_freq`
--

INSERT INTO `t_freq` (`freq_id`, `cover`, `cat_freq_id`, `title_en`, `title`, `content`, `content_en`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, NULL, NULL, 'ข้อมูลการขึ้นทะเบียนเกษตรกร_E', 'ข้อมูลการขึ้นทะเบียนเกษตรกร', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-10 21:14:37', NULL, '1'),
(2, NULL, NULL, 'ข้อมูลตลาดเกษตรกร_E', 'ข้อมูลตลาดเกษตรกร', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-10 21:15:24', NULL, '1'),
(3, NULL, NULL, 'ข้อมูลขอรับการส่งเสริม_E', 'ข้อมูลขอรับการส่งเสริม', '<p>ทดสอบ</p>', '<p>Test</p>', NULL, NULL, NULL, NULL, 1, '2016-12-15 03:21:45', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_freq_cat`
--

CREATE TABLE `t_freq_cat` (
  `cat_freq_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_freq_cat`
--

INSERT INTO `t_freq_cat` (`cat_freq_id`, `cover`, `icon`, `name`, `name_en`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, NULL, NULL, 'ข้อมูลการขึ้นทะเบียนเกษตรกร', 'ข้อมูลการขึ้นทะเบียนเกษตรกร_E', NULL, NULL, 1, '2016-12-10 21:14:37', NULL, '1'),
(2, NULL, NULL, 'ข้อมูลตลาดเกษตรกร', 'ข้อมูลตลาดเกษตรกร_E', NULL, NULL, 1, '2016-12-10 21:15:24', NULL, '1'),
(3, NULL, NULL, 'ข้อมูลขอรับการส่งเสริม', 'ข้อมูลขอรับการส่งเสริม_E', NULL, NULL, 1, '2016-12-10 21:15:55', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_gallery`
--

CREATE TABLE `t_gallery` (
  `gallery_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT '0',
  `flag_index` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_gallery`
--

INSERT INTO `t_gallery` (`gallery_id`, `images`, `title_en`, `title`, `content_en`, `content`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(1, 'img/cover/Gallery 2.jpg', 'Recorder Television', 'บันทึกเทปโทรทัศน์', '', '', NULL, NULL, 1, '2016-11-25 10:56:55', 1, '2016-11-25 21:03:53', '1', '1', '1'),
(2, 'img/cover/Gallery 1.jpg', 'Argriculture Market', 'ตลาดเกษตรดิจิทัล', '', '<p>ตลาดเกษตรดิจิทัล</p>', NULL, NULL, 1, '2016-11-25 20:57:06', 1, '2016-11-25 21:00:47', '2', '1', '1'),
(3, 'img/cover/Gallery 3.jpg', '', 'ต้อนรับยุวชนเกษตรระหว่างประเทศ', '', '', NULL, NULL, 1, '2016-11-25 21:04:41', 1, '2016-12-10 02:42:32', '3', '1', '1'),
(5, 'img/cover/Gallery 5.jpg', '', 'โครงการอบรมเพื่อเพิ่มผลิตภาพการผลิตของเกษตรกรที่ได้รับผลกระทบจากภัยแล้ง ปี 2558/59', '', '', NULL, NULL, 1, '2016-11-25 21:08:19', 1, '2016-12-08 23:06:10', '6', '1', '1'),
(6, 'img/cover/Gallery 6.jpg', '', 'กลุ่มจัดการฟาร์มและเกษตรกรยั่งยืน', '', '', NULL, NULL, 1, '2016-11-25 21:08:45', 1, '2016-12-10 02:42:37', '7', '1', '1'),
(8, 'img/cover/Gallery 7.jpg', '', 'ผู้แทน กวพ. ร่วมวิเคราะห์สถานการณ์ปัญหาสินค้าด้านการเกษตร', '<p>Test123</p>', '<p>วันที่ 22 ตุลาคม 2559 รองอธิบดีกรมส่งเสริมการเกษตรได้จัดการประชุม เกี่ยวกับสถานการณ์ปัญหาสินค้าการเกษตร</p>', NULL, NULL, 1, '2016-11-25 21:10:55', 1, '2016-12-06 20:14:04', '5', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_gallery_file`
--

CREATE TABLE `t_gallery_file` (
  `file_id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_gallery_file`
--

INSERT INTO `t_gallery_file` (`file_id`, `gallery_id`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 1, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '1'),
(2, 1, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '1'),
(3, 1, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '1'),
(4, 1, 'banner_1167.jpeg', 'upload/files/banner_1167.jpeg', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '1'),
(5, 1, 'A-jackpot-of-fresh-and-good-design-resources8.jpg', 'upload/files/A-jackpot-of-fresh-and-good-design-resources8.jpg', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '1'),
(6, 1, '2016-11-14_13-22-19.png', 'upload/files/2016-11-14_13-22-19.png', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '1'),
(7, 1, '2016-11-14_13-10-07.png', 'upload/files/2016-11-14_13-10-07.png', NULL, 1, '2016-11-25 10:57:28', 1, '2016-11-25 10:57:28', '0'),
(8, 8, '60028-3.jpg', 'upload/files/60028-3.jpg', NULL, 1, '2016-11-26 17:07:15', 1, '2016-11-26 17:07:15', '1'),
(9, 8, '60028-4.jpg', 'upload/files/60028-4.jpg', NULL, 1, '2016-11-26 17:07:21', 1, '2016-11-26 17:07:21', '1'),
(10, 8, '60028-5.jpg', 'upload/files/60028-5.jpg', NULL, 1, '2016-11-26 17:07:26', 1, '2016-11-26 17:07:26', '1'),
(11, 8, '60028-6.jpg', 'upload/files/60028-6.jpg', NULL, 1, '2016-11-26 17:07:31', 1, '2016-11-26 17:07:31', '1'),
(12, 8, '60028-7.jpg', 'upload/files/60028-7.jpg', NULL, 1, '2016-11-26 17:07:40', 1, '2016-11-26 17:07:40', '1'),
(13, 16, '2016-11-27_3-31-45.jpg', 'upload/files/2016-11-27_3-31-45.jpg', NULL, 1, '2016-12-07 15:18:10', 1, '2016-12-07 15:18:10', '1'),
(14, 16, '2016-11-27_3-34-07.jpg', 'upload/files/2016-11-27_3-34-07.jpg', NULL, 1, '2016-12-07 15:18:20', 1, '2016-12-07 15:18:20', '1'),
(15, 17, '1920x1080.jpg', 'upload/files/1920x1080.jpg', NULL, 1, '2016-12-07 15:22:27', 1, '2016-12-07 15:22:27', '1'),
(16, 17, 'green_sea_view-wide.jpg', 'upload/files/green_sea_view-wide.jpg', NULL, 1, '2016-12-07 15:22:34', 1, '2016-12-07 15:22:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_km`
--

CREATE TABLE `t_km` (
  `km_id` int(11) NOT NULL,
  `cat_km_id` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `detail1` varchar(255) DEFAULT NULL,
  `detail2` varchar(255) DEFAULT NULL,
  `detail3` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `flag_index` int(11) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_km`
--

INSERT INTO `t_km` (`km_id`, `cat_km_id`, `images`, `title_en`, `title`, `content_en`, `content`, `detail1`, `detail2`, `detail3`, `url`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(1, 1, 'img/cover/DOAE.png', 'e_ผลงานวิจัยด้านการเกษตร1', 'ผลงานวิจัยด้านการเกษตร1', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:18:22', '1', 1, '1'),
(2, 1, 'img/cover/DOAE.png', 'e_ผลงานวิจัยด้านการเกษตร2', 'ผลงานวิจัยด้านการเกษตร2', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:19:23', '2', 1, '1'),
(3, 1, 'img/cover/DOAE.png', 'e_ผลงานวิจัยด้านการเกษตร3', 'ผลงานวิจัยด้านการเกษตร3', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:18:43', '3', 1, '1'),
(4, 1, 'img/cover/DOAE.png', 'e_ผลงานวิจัยด้านการเกษตร4', 'ผลงานวิจัยด้านการเกษตร4', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe class="iframe-class" frameborder="0" height="1000" scrolling="yes" src="http://www.agriinfo.doae.go.th/" width="100%"></iframe></p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-12-12 02:37:57', '4', 1, '0'),
(5, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร1', 'บทความด้านการเกษตร1', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:07:31', '5', 1, '1'),
(6, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร2', 'บทความด้านการเกษตร2', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:07:18', '6', 1, '1'),
(7, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร3', 'บทความด้านการเกษตร3', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:07:06', '7', 1, '1'),
(8, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร4', 'บทความด้านการเกษตร4', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:06:53', '8', 1, '1'),
(9, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร5', 'บทความด้านการเกษตร5', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>ข้อมูลด้านการเกษตร</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-28 22:08:01', '9', 1, '1'),
(10, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร6', 'บทความด้านการเกษตร6', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:08:27', '10', 1, '1'),
(11, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร7', 'บทความด้านการเกษตร7', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:08:09', '11', 1, '1'),
(12, 2, 'img/cover/DOAE.png', 'e_บทความด้านการเกษตร8', 'บทความด้านการเกษตร8', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, NULL, NULL, NULL, 1, '2016-11-15 19:34:12', 1, '2016-11-27 05:07:55', '12', 1, '1'),
(13, 2, 'img/cover/DOAE.png', 'Oganic plant', 'การปลูกพืชออแกนิค', '<p>Content ENG</p>', '<p>เนื้อหา ไทย</p>', NULL, NULL, NULL, NULL, 1, '2016-11-24 21:28:06', 1, '2016-11-27 05:07:41', '13', 1, '1'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-25 22:45:57', 1, '2016-11-25 22:45:57', '14', 1, '1'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-25 22:46:07', 1, '2016-11-25 22:46:07', '15', 1, '1'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-25 22:46:13', 1, '2016-11-25 22:46:13', '16', 1, '1'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-25 22:46:20', 1, '2016-11-25 22:46:20', '17', 1, '1'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-26 17:17:16', 1, '2016-11-26 17:17:16', '18', 1, '1'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 05:23:01', 1, '2016-11-27 05:23:01', '19', 1, '1'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 05:23:07', 1, '2016-11-27 05:23:07', '20', 1, '1'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-30 00:51:42', 1, '2016-11-30 00:51:42', '21', 1, '1'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-30 01:09:40', 1, '2016-11-30 01:09:40', '22', 1, '1'),
(23, 0, NULL, '', '', '', '<p><iframe align="middle" frameborder="0" height="100" scrolling="yes" src="http://www.agriinfo.doae.go.th/" width="100"></iframe></p>', NULL, NULL, NULL, NULL, 1, '2016-12-01 20:55:45', 1, '2016-12-01 20:57:10', '23', 1, '1'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-01 20:57:16', 1, '2016-12-01 20:57:16', '24', 1, '1'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-01 20:59:12', 1, '2016-12-01 20:59:12', '25', 1, '1'),
(26, 8, 'img/cover/DOAE.png', '', 'สื่อเกษตรครบวงจร', '', '<p><iframe class="iframe-class" frameborder="0" height="1000" scrolling="yes" src="http://www.agriinfo.doae.go.th/" width="100%"></iframe></p>', NULL, NULL, NULL, NULL, 1, '2016-12-01 20:59:26', 1, '2016-12-06 10:19:10', '26', 1, '1'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-02 23:39:19', 1, '2016-12-02 23:39:19', '27', 1, '1'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-05 22:27:16', 1, '2016-12-05 22:27:16', '28', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_km_cat`
--

CREATE TABLE `t_km_cat` (
  `cat_km_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `flag_index` int(11) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_km_cat`
--

INSERT INTO `t_km_cat` (`cat_km_id`, `icon`, `name`, `name_en`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(1, 'img/cover/DOAE 265x265.png', 'ผลงานวิจัยด้านการเกษตร', 'e_ผลงานวิจัยด้านการเกษตร', 1, NULL, 1, '2016-11-27 05:21:10', '1', 1, '1'),
(2, 'img/cover/DOAE 265x265.png', 'บทความด้านการเกษตร', 'e_บทความด้านการเกษตร', 1, NULL, 1, '2016-12-06 04:22:00', '2', 1, '1'),
(3, 'img/cover/DOAE 265x265.png', 'กรณีศึกษาด้านการเกษตร', 'e_กรณีศึกษาด้านการเกษตร', 1, NULL, 1, '2016-11-27 05:21:01', '3', 1, '1'),
(4, 'img/cover/DOAE 265x265.png', 'ข้อมูลสถิติด้านการเกษตร', 'e_ข้อมูลสถิติด้านการเกษตร', 1, NULL, 1, '2016-11-27 05:20:52', '4', 0, '1'),
(5, 'img/cover/DOAE 265x265.png', 'ข้อมูลด้านภูมิสารสนเทศ (GIS)', 'e_ข้อมูลด้านภูมิสารสนเทศ (GIS)', 1, NULL, 1, '2016-12-06 04:23:21', '5', 1, '1'),
(7, 'img/cover/DOAE 265x265.png', 'ภูมิปัญญาชาวบ้าน', 'e_ภูมิปัญญาชาวบ้าน', 1, NULL, 1, '2016-12-06 10:19:26', '7', 1, '1'),
(8, 'img/cover/DOAE 265x265.png', 'สื่อเกษตรครบวงจร', 'e_สื่อเกษตรครบวงจร', 1, NULL, 1, '2016-12-01 20:55:41', '8', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_km_file`
--

CREATE TABLE `t_km_file` (
  `file_id` int(11) NOT NULL,
  `km_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_km_file`
--

INSERT INTO `t_km_file` (`file_id`, `km_id`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 9, 'รายการแก้ไข v1.0 (Back End).docx', 'upload/files/รายการแก้ไข v1.0 (Back End).docx', NULL, 1, '2016-11-28 22:07:57', 1, '2016-11-28 22:07:57', '1'),
(2, 9, 'icon_201.png', 'upload/files/icon_201.png', NULL, 1, '2016-12-06 21:48:50', 1, '2016-12-06 21:48:50', '1'),
(3, 9, 'icon_201.png', 'upload/files/icon_201.png', NULL, 1, '2016-12-06 21:48:57', 1, '2016-12-06 21:48:57', '1'),
(4, 9, 'icon_201.png', 'upload/files/icon_201.png', NULL, 1, '2016-12-06 21:49:03', 1, '2016-12-06 21:49:03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_member`
--

CREATE TABLE `t_member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_member`
--

INSERT INTO `t_member` (`member_id`, `email`, `password`, `name`, `phone`, `token`, `create_id`, `create_date`, `update_date`, `update_id`, `last_login`, `active`) VALUES
(1, 'team@hotmail.com', 'zzzz', 'zzzzz', 'zzzzzzzzzzzzzzzz', 'ddfffddfgdgdfgfgdfgdfg', NULL, '2016-12-03 15:46:00', NULL, NULL, NULL, '1'),
(2, 'ssss', 'ssss', 'ssss', 'ssss', 'qDUNG4iX7z', NULL, '2016-12-05 23:08:07', NULL, NULL, NULL, '1'),
(3, 'team.harry@hotmail.com', '1234', 'team', '0952235544', 'wmFoCZGfLr', NULL, '2016-12-05 23:28:41', NULL, NULL, NULL, '1'),
(4, 'team.harry@hotmail.com', '1234', 'team', '0955763698', 'Jjw36GakIn', NULL, '2016-12-05 23:29:10', NULL, NULL, NULL, '1'),
(5, 'team.harry@hotmail.com', '123456', 'team 222', '0819856332', 'Z4j7250cWS', NULL, '2016-12-05 23:31:53', NULL, NULL, NULL, '1'),
(6, 'team.harry@hotmail.com', '123456', 'team 333', '0987456321', 'nUDeROJeNM', NULL, '2016-12-05 23:39:19', NULL, NULL, NULL, '1'),
(7, 'pitak.agilerap@gmail.com', '0261014372', 'พิทักษ์ ญานะ', '0947879898', 'gU9IPPljnA', NULL, '2016-12-05 23:40:36', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_news`
--

CREATE TABLE `t_news` (
  `news_id` int(11) NOT NULL,
  `cat_news_id` varchar(255) DEFAULT NULL,
  `name_url` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content_en` text,
  `content` text,
  `cover` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `flag_index` varchar(255) DEFAULT '1',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_news`
--

INSERT INTO `t_news` (`news_id`, `cat_news_id`, `name_url`, `title_en`, `title`, `content_en`, `content`, `cover`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(1, '1', '', '20 ตุลาคม 2559 นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร นำข้าราชการสังกัดกรมส่งเสริมการเกษตร ร่วมพระราชพิธี บำเพ็ญพระราชกุศลสัตตมวารพระบรมศพ พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช ในวาระครบรอบวันสวรรคต ครบ 7 วัน ณ พระที่นั่งดุสิตมหาปราสาท พระบรมมหา', '20 ตุลาคม 2559 นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร นำข้าราชการสังกัดกรมส่งเสริมการเกษตร ร่วมพระราชพิธี บำเพ็ญพระราชกุศลสัตตมวารพระบรมศพ พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช ในวาระครบรอบวันสวรรคต ครบ 7 วัน ณ พระที่นั่งดุสิตมหาปราสาท พระบรมมหา', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:41:19', '1', '1', '1'),
(2, '1', '', 'เมื่อวันที่ 11 พฤศจิกายน 2559  พล.อ.ฉัตรชัย สาริกัลยะ รมว.กษ. ลงพื้นที่ พร้อม นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร และคณะผู้บริหารกรมฯ ตรวจเยี่ยมการดำเนินงานตามนโยบายการส่งเสริมการเกษตรแปลงใหญ่ (ข้าว) และ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตส', 'เมื่อวันที่ 11 พฤศจิกายน 2559  พล.อ.ฉัตรชัย สาริกัลยะ รมว.กษ. ลงพื้นที่ พร้อม นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร และคณะผู้บริหารกรมฯ ตรวจเยี่ยมการดำเนินงานตามนโยบายการส่งเสริมการเกษตรแปลงใหญ่ (ข้าว) และ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตส', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>พร้อมเยี่ยมชมแปลงทดลอง จำนวน 3 แปลง ณ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร (ศพก.) อ.เดิมบางนางบวช จ.สุพรรณบุรี</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:37:25', '2', '1', '1'),
(3, '1', '', 'เมื่อวันที่ 10 พฤศจิกายน 2559  พลเอกปัฐมพงศ์ ประถมภัฏ ผู้ช่วยรัฐมนตรีประจำกระทรวงเกษตรและสหกรณ์ เป็นประธานกล่าวคำถวายความอาลัย นำร้องเพลงสรรเสริญพระบารมี ลงนามถวายความอาลัย ไถ่ชีวิตโค และมอบพันธ์โคแก่เกษตรกร จำนวน 19 ตัว ปล่อยพันธุ์สัตว์น้ำ จำนวน 999,999 ', 'เมื่อวันที่ 10 พฤศจิกายน 2559  พลเอกปัฐมพงศ์ ประถมภัฏ ผู้ช่วยรัฐมนตรีประจำกระทรวงเกษตรและสหกรณ์ เป็นประธานกล่าวคำถวายความอาลัย นำร้องเพลงสรรเสริญพระบารมี ลงนามถวายความอาลัย ไถ่ชีวิตโค และมอบพันธ์โคแก่เกษตรกร จำนวน 19 ตัว ปล่อยพันธุ์สัตว์น้ำ จำนวน 999,999 ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>ในงานโครงการรำลึกถึงพระมหากรุณาธิคุณพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช ด้านการเกษตร ณ ศูนย์บริการการพัฒนาปลวกแดงตามพระราชดำริ &nbsp;อำเภอปลวกแดง จังหวัดระยอง</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:36:48', '3', '1', '1'),
(4, '1', '', 'วันที่ 14 พฤศจิกายน 2559  เวลา 14.30น. นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร เป็นวิทยากรบรรยายโครงการฝึกอบรม หลักสูตร”การสร้างความเข้มแข็งให้กับบุคคลากรปฏิบัติการภาคการเกษตร” ณ แสนปาล์มเทรนนิ่งโฮม อ.กำแพงแสน จ.นครปฐม', 'วันที่ 14 พฤศจิกายน 2559  เวลา 14.30น. นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร เป็นวิทยากรบรรยายโครงการฝึกอบรม หลักสูตร”การสร้างความเข้มแข็งให้กับบุคคลากรปฏิบัติการภาคการเกษตร” ณ แสนปาล์มเทรนนิ่งโฮม อ.กำแพงแสน จ.นครปฐม', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'img/cover/collagen3_2.jpg', 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:36:15', '4', '1', '1'),
(5, '1', '', '14 พฤศจิกายน 2559 นายประสงค์ ประไพตระกูล ผู้อำนวยการส่งเสริมการอารักขาพืชและจัดการดินปุ๋ย เป็นประธานเปิดการฝึกอบรมTraning programme on IPM in vetgetables โดยมี ร.ต.ดร.สมสวย ปัญญาสิทธิ์ ผู้อำนวยการสำนักส่งเสริมและพัฒนาการเกษตร เขตที่ 6 จังหวัดเชียงใหม่ กล่', '14 พฤศจิกายน 2559 นายประสงค์ ประไพตระกูล ผู้อำนวยการส่งเสริมการอารักขาพืชและจัดการดินปุ๋ย เป็นประธานเปิดการฝึกอบรมTraning programme on IPM in vetgetables โดยมี ร.ต.ดร.สมสวย ปัญญาสิทธิ์ ผู้อำนวยการสำนักส่งเสริมและพัฒนาการเกษตร เขตที่ 6 จังหวัดเชียงใหม่ กล่', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:35:38', '5', '1', '1'),
(6, '1', '', 'เมื่อวันที่ 18 พฤศจิกายน 2559  นายสงกรานต์ ภักดีคง รองอธิบดีกรมส่งเสริมการเกษตร ลงพื้นที่ตรวจราชการ โครงการ 9,999 ตามรอยเท้าพ่อ ณ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร (ศพก.)', 'เมื่อวันที่ 18 พฤศจิกายน 2559  นายสงกรานต์ ภักดีคง รองอธิบดีกรมส่งเสริมการเกษตร ลงพื้นที่ตรวจราชการ โครงการ 9,999 ตามรอยเท้าพ่อ ณ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร (ศพก.)', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:open sans,sans-serif; font-size:16px">เมื่อวันที่ 18 พฤศจิกายน 2559 นายสงกรานต์ ภักดีคง รองอธิบดีกรมส่งเสริมการเกษตร ลงพื้นที่ตรวจราชการ โครงการ 9,999 ตามรอยเท้าพ่อ ณ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร (ศพก.) อำเภอศรีเชียงใหม่ ตำบลพานพร้าว อำเภอศรีเชียงใหม่ จังหวัดหนองคาย และเยี่ยมชมฟาร์มโคขุนวากิวศรีเชียงใหม่ ของนายณัฐพล กลางวิชัย 1 ใน 12 กิจกรรม &nbsp;ภายใต้โครงการ 9,999 ตามรอยเท้าพ่อ ของศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิต (ศพก.) อำเภอศรีเชียงใหม่ จากนั้นเดินทางไปพบปะเจ้าหน้าที่และชมกิจกรรมทางการเกษตร ณ ศูนย์ส่งเสริมและพัฒนาอาชีพการเกษตรจังหวัดหนองคาย</span></p>', 'img/cover/2016-11-14_13-10-07.png', 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:34:49', '6', '1', '1'),
(7, '1', '', 'วันที่ 21 พฤศจิกายน 2559  เวลา 9.00น. นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร มอบแนวทางการดำเงินงาน การปฏิรูปภาคการเกษตร สู่ Smart Agriculture แก่ผู้เข้าร่วมโครงการฝึกอบรมเชิงปฏิบัติการ หลักสูตร “การสร้างความเข้มแข็งให้กับบุคลากรปฏิบัติการภาคการเกษ', 'วันที่ 21 พฤศจิกายน 2559  เวลา 9.00น. นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร มอบแนวทางการดำเงินงาน การปฏิรูปภาคการเกษตร สู่ Smart Agriculture แก่ผู้เข้าร่วมโครงการฝึกอบรมเชิงปฏิบัติการ หลักสูตร “การสร้างความเข้มแข็งให้กับบุคลากรปฏิบัติการภาคการเกษ', '', '', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:34:14', '7', '1', '1'),
(8, '1', '', 'วันที่ 22 พฤศจิกายน 2559  นายสุดสาคร ภัทรกุลนิษฐ์ รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานการเปิดสัมมนาขับเคลื่อนงานของอาสาสมัครเกษตร (อกม.) จัดขึ้นระหว่างวันที่ 22-24 พฤศจิกายน 2559 ณ โรงแรมเอบิน่า เฮ้าท์ กรุงเทพมหานคร', 'วันที่ 22 พฤศจิกายน 2559  นายสุดสาคร ภัทรกุลนิษฐ์ รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานการเปิดสัมมนาขับเคลื่อนงานของอาสาสมัครเกษตร (อกม.) จัดขึ้นระหว่างวันที่ 22-24 พฤศจิกายน 2559 ณ โรงแรมเอบิน่า เฮ้าท์ กรุงเทพมหานคร', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:open sans,sans-serif; font-size:16px">วันที่ 22 พฤศจิกายน 2559 นายสุดสาคร &nbsp;ภัทรกุลนิษฐ์ รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานการเปิดสัมมนาขับเคลื่อนงานของอาสาสมัครเกษตร (อกม.) จัดขึ้นระหว่างวันที่ 22-24 พฤศจิกายน 2559 ณ โรงแรมเอบิน่า เฮ้าท์ กรุงเทพมหานคร โดยการสัมมนาครั้งนี้จัดขึ้นเพื่อกำหนดแนวทางการขับเคลื่อนและพัฒนากลไกการทำงานของอกม. ให้สามารถบูรณาการกับงานภารกิจหลักของกระทรวงเกษตรและสหกรณ์ร่วมกับหน่วยงานที่เกี่ยวข้อง ตลอดจนสร้างความรู้ความเข้าใจกระบวนการทำงาน อกม. ตามภารกิจของกรมส่งเสริมการเกษตรให้เป็นไปในทิศทางเดียวกัน รวมทั้งแนวทางการปรับปรุงระบบฐานข้อมูลให้สอดคล้องและเหมาะสมกับความต้องการในการใช้งานจะทำให้เกิดการขับเคลื่อนและพัฒนากลไกการทำงาน ให้สามารถบูรณาการกับงานนโยบายฯ และมีส่วนสนับสนุนกลไกหลักของการทำงานในพื้นที่ คือ ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร (ศพก.) การส่งเสริมเกษตรแปลงใหญ่ รวมทั้งการวางระบบกลไกให้ อกม. รายงานข้อมูล เหตุการณ์สำคัญในพื้นที่ให้นักส่งเสริมการเกษตรรับรู้ทันที เพื่อที่จะสามารถดำเนินการแก้ไขปัญหาได้โดยเร็ว และสัมฤทธิ์ผล</span></p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:33:38', '8', '1', '1'),
(9, '1', '', 'เมื่อวันที่ 23 พฤศจิกายน 2559  นายสุดสาคร ภัทรกุลนิษฐ์ รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานการแถลงข่าว พร้อม นางยุพา อินทราเวช ผู้เชี่ยวชาญด้านส่งเสริมวิสาหกิจชุมชน และ ผศ.ดร.ยุทธนา พิมลศิริผล ผู้อำนวยการศูนย์นวัตกรรม อาหารและบรรจุภัณฑ์ มหาวิทยาลัยเชีย', 'เมื่อวันที่ 23 พฤศจิกายน 2559  ผศ.ดร.ยุทธนา พิมลศิริผล ผู้อำนวยการศูนย์นวัตกรรม อาหารและบรรจุภัณฑ์ มหาวิทยาลัยเชีย', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p><img alt="" src="../upload/files/1481096392_1396275670_e0b984e0b8a3e0b988e0b89ae0b8b8e0b88de0b8a3e0b8ade0b894.jpg" style="border-style:solid; border-width:50px; float:left; height:465px; margin:50px 100px; width:900px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:open sans,sans-serif; font-size:16px">เมื่อวันที่ 23 พฤศจิกายน 2559 นายสุดสาคร &nbsp;ภัทรกุลนิษฐ์ &nbsp;รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานการแถลงข่าว พร้อม นางยุพา &nbsp;อินทราเวช &nbsp;ผู้เชี่ยวชาญด้านส่งเสริมวิสาหกิจชุมชน และ ผศ.ดร.ยุทธนา &nbsp;พิมลศิริผล ผู้อำนวยการศูนย์นวัตกรรม อาหารและบรรจุภัณฑ์ มหาวิทยาลัยเชียงใหม่ ร่วมกันเปิดตัวโครงการพัฒนาศักยภาพและยกระดับมาตรฐานการผลิตสินค้า OTOP เกษตรแปรรูปสู่สากล ณ ห้อง Grand Hall 2 โรงแรมรามาการ์เด้นส์ กรุงเทพฯ &nbsp;ซึ่งการดำเนินงานของโครงการฯ จะเป็นการยกระดับมาตรฐานสินค้า OTOP เกษตรแปรรูป สู่สากล โดยผ่านการวิเคราะห์ศักยภาพและจัดทำแผนพัฒนากิจการ การพัฒนาผลิตภัณฑ์ และบรรจุภัณฑ์ใหม่ การยกระดับมาตรฐานกระบวนการผลิต ผลิตภัณฑ์ใหม่ โดยการนำเทคโนโลยี ที่มีความทันสมัย และนวัตกรรมมาช่วยในการผลิตให้สามารถผลิตได้อย่างเหมาะสม การยกระดับคุณภาพผลิตภัณฑ์ และการเชื่อมโยงทดสอบตลสดผลิตภัณฑ์ สำหรับโครงการพัฒนาศักยภาพและยกระดับมาตรฐานการผลิตสินค้า OTOP เกษตรแปรรูป สู่สากล มีวิสาหกิจชุมชน เข้าร่วมโครงการแล้ว จำนวน 85 กลุ่ม ใน 77 จังหวัด &nbsp;(อย่างน้อยจังหวัดละ 1 กลุ่ม ) เพื่อพัฒนาศักยภาพวิสาหกิจชุมชนของตนเอง ก้าวสู่ระดับสากล ทั้งนี้ จะสามารถสร้างความเข้มแข็งของวิสาหกิจชุมชนได้อย่างมั่นคง มั่งคั่งและยั่งยืน สอดคล้องกับการดำเนินการตามนโยบายของกระทรวงเกษตรและสหกรณ์ และ รัฐบาล ต่อไป</span></p>', 'img/cover/Gallery 5.jpg', 1, '2016-11-17 01:22:04', 1, '2016-12-08 23:09:15', '11', '1', '1'),
(10, '1', '', 'เมื่อวันที่ 27 ตุลาคม 2559 นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร เข้าร่วมหารือแลกเปลี่ยนการประชุม “2016 KoRAA Advanced Training Workshop for Middle-level officers” ณ โรงแรมรามาการ์เด้นส์ กทม.', 'เมื่อวันที่ 27 ตุลาคม 2559 นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร เข้าร่วมหารือแลกเปลี่ยนการประชุม “2016 KoRAA Advanced Training Workshop for Middle-level officers” ณ โรงแรมรามาการ์เด้นส์ กทม.', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:40:56', '9', '1', '1'),
(11, '1', '', 'เมื่อวันที่ 3 พฤศจิกายน 2559 นายสงกรานต์ ภักดีคง รองอธิบดีกรมส่งเสริมการเกษตร ตรวจเยี่ยม ความพร้อม และเป็นขวัญกำลังแก่เจ้าหน้าที่ที่จัดงานการสัมมนาคณะกรรมการเครือข่าย ศพก. ระดับประเทศ และจังหวัด', 'เมื่อวันที่ 3 พฤศจิกายน 2559 นายสงกรานต์ ภักดีคง รองอธิบดีกรมส่งเสริมการเกษตร ตรวจเยี่ยม ความพร้อม และเป็นขวัญกำลังแก่เจ้าหน้าที่ที่จัดงานการสัมมนาคณะกรรมการเครือข่าย ศพก. ระดับประเทศ และจังหวัด', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>พื่อขับเคลื่อนนโยบายสู่การปฏิบัติ ณ ศูนย์การเรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตรกันทรารมย์ ตำบลคำเนียม อำเภอกันทรารมย์ จังหวัดศรีสะเกษ</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:40:26', '13', '1', '1'),
(12, '1', '', 'เมื่อวันที่ 4 พฤศจิกายน 2559 พลเอกฉัตรชัย สาริกกัลยะ รัฐมนตรีว่าการกระทรวงเกษตรและสหกรณ์ ตรวจเยี่ยมศูนย์เพิ่มประสิทธิภาพการผลิตสินค้าเกษตรกันทรารมย์ พร้อมทั้งเปิด การสัมมนาคณะกรรมการเครือข่าย ศพก. ระดับประเทศ และจังหวัด', 'เมื่อวันที่ 4 พฤศจิกายน 2559 พลเอกฉัตรชัย สาริกกัลยะ รัฐมนตรีว่าการกระทรวงเกษตรและสหกรณ์ ตรวจเยี่ยมศูนย์เพิ่มประสิทธิภาพการผลิตสินค้าเกษตรกันทรารมย์ พร้อมทั้งเปิด การสัมมนาคณะกรรมการเครือข่าย ศพก. ระดับประเทศ และจังหวัด', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:open sans,sans-serif; font-size:18px">เพื่อขับเคลื่อนนโยบายสู่การปฏิบัติ และให้นโยบายแก่เจ้าหน้าที่ และผู้แทนเครือข่าย ศพก.ระดับเขต (9 อรหันต์) ณ ศูนย์การเรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตรกันทรารมย์ ตำบลคำเนียม อำเภอกันทรารมย์ จังหวัดศรีสะเกษ</span></p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:39:46', '10', '1', '1'),
(13, '1', '', 'เมื่อวันที่ 6 พฤศจิกายน 2559  นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร นำข้าราชการ ลูกจ้าง และพนักงาน สังกัดกรมส่งเสริมการเกษตร ถวายผ้าพระกฐินพระราชทาน ณ วัดโบสถ์ ตำบลอินทร์บุรี อำเภออินทร์บุรี จังหวัดสิงห์บุรี', 'เมื่อวันที่ 6 พฤศจิกายน 2559  นายสมชาย ชาญณรงค์กุล อธิบดีกรมส่งเสริมการเกษตร นำข้าราชการ ลูกจ้าง และพนักงาน สังกัดกรมส่งเสริมการเกษตร ถวายผ้าพระกฐินพระราชทาน ณ วัดโบสถ์ ตำบลอินทร์บุรี อำเภออินทร์บุรี จังหวัดสิงห์บุรี', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:39:12', '12', '1', '1'),
(15, '1', '', 'เมื่อวันที่ 14 พฤศจิกายน 2559  นายสุดสาคร ภัทรกุลนิษฐ์ รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานเปิดการพัฒนาศักยภาพเจ้าหน้าที่ด้านดินปุ๋ย เพื่อพัฒนาศักยภาพนักส่งเสริมการเกษตรให้เป็นผู้มีความรอบรู้ด้านดินและปุ๋ย รวมถึงสามารถถ่ายทอดเทคโนโลยีและความรู้สู่เกษตร', 'เมื่อวันที่ 14 พฤศจิกายน 2559  นายสุดสาคร ภัทรกุลนิษฐ์ รองอธิบดีกรมส่งเสริมการเกษตร เป็นประธานเปิดการพัฒนาศักยภาพเจ้าหน้าที่ด้านดินปุ๋ย เพื่อพัฒนาศักยภาพนักส่งเสริมการเกษตรให้เป็นผู้มีความรอบรู้ด้านดินและปุ๋ย รวมถึงสามารถถ่ายทอดเทคโนโลยีและความรู้สู่เกษตร', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>โดยมีบุคคลเป้าหมายที่เข้ารับการพัฒนาศักยภาพเจ้าหน้าที่ด้านดินปุ๋ย ประกอบด้วยเจ้าหน้าที่จากสำนักงานส่งเสริมและพัฒนาการเกษตรที่ 1-9 สำนักงานเกษตรจังหวัด 76 จังหวัด สำนักงานเกษตรพื้นที่กรุงเทพมหานคร และเจ้าหน้าที่จากส่วนกลาง รวม 110 คน ณ โรงแรม ซัมมิท ไพน์เฮิร์สท กอล์ฟคลับ อำภอคลองหลวง จังหวัดปทุมธานี</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:37:54', '15', '1', '1'),
(20, '2', '', 'วีดิทัศน์แนะนำกรมความร่วมมือระหว่างประเทศ การแข่งขันโต้วาทีภาษาอังกฤษระดับเยาวชน ประชาสัมพันธ์เว็บไซต์คณะกรรมการร่างรัฐธรรมนูญ', 'วีดิทัศน์แนะนำกรมความร่วมมือระหว่างประเทศ การแข่งขันโต้วาทีภาษาอังกฤษระดับเยาวชน ประชาสัมพันธ์เว็บไซต์คณะกรรมการร่างรัฐธรรมนูญ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:52:23', '20', '1', '1'),
(21, '2', '', 'ขอเชิญหน่วยงานร่วมงาน “มหกรรมงานวิจัยแห่งชาติ 2559 (Thailand Research Expo 2016)” ระหว่างวันที่ 17-21 สิงหาคม 2559 ณ โรงแรมเซ็นทาราแกรนด์ เซ็นทรัลเวิลด์ กรุงเทพฯ', 'ขอเชิญหน่วยงานร่วมงาน “มหกรรมงานวิจัยแห่งชาติ 2559 (Thailand Research Expo 2016)” ระหว่างวันที่ 17-21 สิงหาคม 2559 ณ โรงแรมเซ็นทาราแกรนด์ เซ็นทรัลเวิลด์ กรุงเทพฯ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:52:03', '21', '1', '1'),
(22, '2', '', 'การศึกษาดูงานภายใต้โครงการความร่วมมือพัฒนาการเชื่อมโยงการวิจัยและการส่งเสริมการผลิตเพื่อเพิ่มคุณค่าสินค้าเกษตรในเขตพัฒนาเศรษฐกิจพิเศษเชื่อมโยงไทย-จีน ระหว่างวันที่ 30 มิถุนายน -6 กรกฎาคม 2559 ณ เมืองคุนหมิง มณฑลยูนนาน สาธารณรัฐประชาชนจีน', 'การศึกษาดูงานภายใต้โครงการความร่วมมือพัฒนาการเชื่อมโยงการวิจัยและการส่งเสริมการผลิตเพื่อเพิ่มคุณค่าสินค้าเกษตรในเขตพัฒนาเศรษฐกิจพิเศษเชื่อมโยงไทย-จีน ระหว่างวันที่ 30 มิถุนายน -6 กรกฎาคม 2559 ณ เมืองคุนหมิง มณฑลยูนนาน สาธารณรัฐประชาชนจีน', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:51:43', '22', '1', '1'),
(24, '2', '', 'สำนักจัดหางานกรุงเทพเขตพื้นที่ 2 ประชาสัมพันธ์การขึ้นทะเบียนและรายงานตัวผู้ประกันตนกรณีว่างงานผ่านอินเตอร์เน็ต', 'สำนักจัดหางานกรุงเทพเขตพื้นที่ 2 ประชาสัมพันธ์การขึ้นทะเบียนและรายงานตัวผู้ประกันตนกรณีว่างงานผ่านอินเตอร์เน็ต', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:51:20', '24', '1', '1'),
(25, '2', '', 'เนคเทค ประชาสัมพันธ์โครงการประกวดคลิปสั้น “เกษตรกรรมสู้ภัยแล้ง” สถาบันวิทยาศาสตร์และเทคโนโลยีแห่งชาติอิหร่านเชิญชวนนักวิจัยร่วมส่งผลงานวิจัย', 'เนคเทค ประชาสัมพันธ์โครงการประกวดคลิปสั้น “เกษตรกรรมสู้ภัยแล้ง” สถาบันวิทยาศาสตร์และเทคโนโลยีแห่งชาติอิหร่านเชิญชวนนักวิจัยร่วมส่งผลงานวิจัย', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:50:43', '25', '1', '1'),
(26, '2', '', 'คณะเศรษฐศาสตร์ มหาวิทยาลัยเกษตรศาสตร์ ประชาสัมพันธ์การส่งบทความเพื่อพิจารณาในการประชุมวิชาการระดับนานาชาติ ครั้งที่ 9 ของสมาคมนักเศรษฐศาสตร์เกษตรแห่งเอเชีย', 'คณะเศรษฐศาสตร์ มหาวิทยาลัยเกษตรศาสตร์ ประชาสัมพันธ์การส่งบทความเพื่อพิจารณาในการประชุมวิชาการระดับนานาชาติ ครั้งที่ 9 ของสมาคมนักเศรษฐศาสตร์เกษตรแห่งเอเชีย', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:50:21', '26', '1', '1'),
(27, '2', '', 'ประชาสัมพันธ์การจัดงาน Thailand Local Government Summit 2016', 'ประชาสัมพันธ์การจัดงาน Thailand Local Government Summit 2016', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:49:59', '27', '1', '1');
INSERT INTO `t_news` (`news_id`, `cat_news_id`, `name_url`, `title_en`, `title`, `content_en`, `content`, `cover`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(28, '2', '', 'สพท. แจ้งการรับสมัครคัดเลือกบุคลากรภาครัฐเพื่อรับทุนรัฐบาลไปศึกษาวิชา ณ ต่างประเทศ ประจำปี 2560 ขอความร่วมมือประชาสัมพันธ์การส่งผลงานเข้าร่วมการประชุมทางวิชาการ ครั้งที่ 55', 'สพท. แจ้งการรับสมัครคัดเลือกบุคลากรภาครัฐเพื่อรับทุนรัฐบาลไปศึกษาวิชา ณ ต่างประเทศ ประจำปี 2560 ขอความร่วมมือประชาสัมพันธ์การส่งผลงานเข้าร่วมการประชุมทางวิชาการ ครั้งที่ 55', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:49:13', '28', '1', '1'),
(29, '2', '', 'สพท. ประชาสัมพันธ์กำหนดการจัดการเรียนการสอนผ่านระบบอิเล็กทรอนิกส์ (e-Learning) ของกรมส่งเสริมการเกษตร ประจำปี 2560', 'สพท. ประชาสัมพันธ์กำหนดการจัดการเรียนการสอนผ่านระบบอิเล็กทรอนิกส์ (e-Learning) ของกรมส่งเสริมการเกษตร ประจำปี 2560', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:48:37', '29', '1', '1'),
(30, '2', '', 'ประกาศสหกรณ์ออมทรัพย์กรมส่งเสริมการเกษตร จำกัด เรื่อง รับสมัครบุคคลเพื่อจ้างเป็นพนักงานสหกรณ์ออมทรัพย์กรมส่งเสริมการเกษตร จำกัด ด้านกฎหมาย', 'ประกาศสหกรณ์ออมทรัพย์กรมส่งเสริมการเกษตร จำกัด เรื่อง รับสมัครบุคคลเพื่อจ้างเป็นพนักงานสหกรณ์ออมทรัพย์กรมส่งเสริมการเกษตร จำกัด ด้านกฎหมาย', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:48:08', '30', '1', '1'),
(31, '2', '', 'ขอความอนุเคราะห์ประชาสัมพันธ์ทุนพัฒนาบุคลากรด้านการวิจัย', 'ขอความอนุเคราะห์ประชาสัมพันธ์ทุนพัฒนาบุคลากรด้านการวิจัย', '', '', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:22:17', '31', '1', '1'),
(36, '3', '', 'รับสมัครเจ้าหน้าที่วิชาการ', 'รับสมัครเจ้าหน้าที่วิชาการ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:54:33', '36', '1', '1'),
(37, '3', '', 'ประกาศสำนักงานพัฒนาการวิจัยการเกษตร (องค์การมหาชน) เรื่อง รับสมัครคัดเลือกบุคคลเพื่อบรรจะและแต่งตั้งเป็นเจ้าหน้าที่ในตำแหน่งรองผู้อำนวยการสำนักงานพัฒนาการวิจัยการเกษตร สำนักงานพัฒนาการวิจัยการเกษตร (องค์การมหาชน)', 'ประกาศสำนักงานพัฒนาการวิจัยการเกษตร (องค์การมหาชน) เรื่อง รับสมัครคัดเลือกบุคคลเพื่อบรรจะและแต่งตั้งเป็นเจ้าหน้าที่ในตำแหน่งรองผู้อำนวยการสำนักงานพัฒนาการวิจัยการเกษตร สำนักงานพัฒนาการวิจัยการเกษตร (องค์การมหาชน)', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:54:10', '37', '1', '1'),
(38, '3', '', 'ประชาสัมพันธ์การประกาศรับสมัครบุคคลเพื่อสรรหาผู้ดำรงตำแหน่งผู้อำนวยการสำนักงานพัฒนาเศรษฐกิจจากฐานชีวภาพ', 'ประชาสัมพันธ์การประกาศรับสมัครบุคคลเพื่อสรรหาผู้ดำรงตำแหน่งผู้อำนวยการสำนักงานพัฒนาเศรษฐกิจจากฐานชีวภาพ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:19:53', '38', '1', '1'),
(39, '4', '', 'ข่าวการจัดซื้อจัดจ้าง1', 'ข่าวการจัดซื้อจัดจ้าง1', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '39', '1', '1'),
(40, '4', '', 'ข่าวการจัดซื้อจัดจ้าง2', 'ข่าวการจัดซื้อจัดจ้าง2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '40', '1', '1'),
(41, '4', '', 'ข่าวการจัดซื้อจัดจ้าง3', 'ข่าวการจัดซื้อจัดจ้าง3', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '41', '1', '1'),
(42, '4', '', 'ข่าวการจัดซื้อจัดจ้าง4', 'ข่าวการจัดซื้อจัดจ้าง4', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '42', '1', '1'),
(43, '4', '', 'ข่าวการจัดซื้อจัดจ้าง5', 'ข่าวการจัดซื้อจัดจ้าง5', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '43', '1', '1'),
(44, '4', '', 'ข่าวการจัดซื้อจัดจ้าง6', 'ข่าวการจัดซื้อจัดจ้าง6', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '44', '1', '1'),
(45, '4', '', 'ข่าวการจัดซื้อจัดจ้าง7', 'ข่าวการจัดซื้อจัดจ้าง7', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '45', '1', '1'),
(46, '4', '', 'ข่าวการจัดซื้อจัดจ้าง8', 'ข่าวการจัดซื้อจัดจ้าง8', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '46', '1', '1'),
(47, '4', '', 'ข่าวการจัดซื้อจัดจ้าง9', 'ข่าวการจัดซื้อจัดจ้าง9', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '47', '1', '1'),
(48, '4', '', 'ข่าวการจัดซื้อจัดจ้าง10', 'ข่าวการจัดซื้อจัดจ้าง10', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '48', '1', '1'),
(49, '4', '', 'ข่าวการจัดซื้อจัดจ้าง11', 'ข่าวการจัดซื้อจัดจ้าง11', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '49', '1', '1'),
(50, '4', '', 'ข่าวการจัดซื้อจัดจ้าง12', 'ข่าวการจัดซื้อจัดจ้าง12', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '50', '1', '1'),
(51, '4', '', 'ข่าวการจัดซื้อจัดจ้าง13', 'ข่าวการจัดซื้อจัดจ้าง13', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '51', '1', '1'),
(52, '4', '', 'ข่าวการจัดซื้อจัดจ้าง14', 'ข่าวการจัดซื้อจัดจ้าง14', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '52', '1', '1');
INSERT INTO `t_news` (`news_id`, `cat_news_id`, `name_url`, `title_en`, `title`, `content_en`, `content`, `cover`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(53, '4', '', 'ข่าวการจัดซื้อจัดจ้าง15', 'ข่าวการจัดซื้อจัดจ้าง15', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '53', '1', '1'),
(54, '4', '', 'ข่าวการจัดซื้อจัดจ้าง16', 'ข่าวการจัดซื้อจัดจ้าง16', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '54', '1', '1'),
(55, '5', '', 'ข่าวการฝึกอบรม1', 'ข่าวการฝึกอบรม1', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '55', '1', '1'),
(56, '5', '', 'ข่าวการฝึกอบรม2', 'ข่าวการฝึกอบรม2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '56', '1', '1'),
(57, '5', '', 'ข่าวการฝึกอบรม3', 'ข่าวการฝึกอบรม3', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '57', '1', '1'),
(58, '5', '', 'ข่าวการฝึกอบรม4', 'ข่าวการฝึกอบรม4', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '58', '1', '1'),
(59, '5', '', 'ข่าวการฝึกอบรม5', 'ข่าวการฝึกอบรม5', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '59', '1', '1'),
(60, '5', '', 'ข่าวการฝึกอบรม6', 'ข่าวการฝึกอบรม6', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '60', '1', '1'),
(61, '5', '', 'ข่าวการฝึกอบรม7', 'ข่าวการฝึกอบรม7', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '61', '1', '1'),
(62, '5', '', 'ข่าวการฝึกอบรม8', 'ข่าวการฝึกอบรม8', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '62', '1', '1'),
(63, '5', '', 'ข่าวการฝึกอบรม9', 'ข่าวการฝึกอบรม9', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '63', '1', '1'),
(64, '5', '', 'ข่าวการฝึกอบรม10', 'ข่าวการฝึกอบรม10', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '64', '1', '1'),
(65, '5', '', 'ข่าวการฝึกอบรม11', 'ข่าวการฝึกอบรม11', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '65', '1', '1'),
(66, '5', '', 'ข่าวการฝึกอบรม12', 'ข่าวการฝึกอบรม12', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '66', '1', '1'),
(67, '6', '', 'ข่าวภูมิภาค1', 'ข่าวภูมิภาค1', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '67', '1', '1'),
(68, '6', '', 'ข่าวภูมิภาค2', 'ข่าวภูมิภาค2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '68', '1', '1'),
(69, '6', '', 'ข่าวภูมิภาค3', 'ข่าวภูมิภาค3', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '69', '1', '1'),
(70, '6', '', 'ข่าวภูมิภาค4', 'ข่าวภูมิภาค4', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '70', '1', '1'),
(71, '6', '', 'ข่าวภูมิภาค5', 'ข่าวภูมิภาค5', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in \r\na piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, \r\na Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, \r\nconsectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\ndiscovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum \r\net Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory \r\nof ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..", \r\ncomes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below \r\nfor those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced \r\nin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-17 01:22:04', '71', '1', '1'),
(72, '6', '', 'ร่วมลงแขกเกี่ยวข้าวช่วยเหลือเกษตรกรผู้มีรายได้น้อย', 'ร่วมลงแขกเกี่ยวข้าวช่วยเหลือเกษตรกรผู้มีรายได้น้อย', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:31:03', '72', '1', '1'),
(73, '6', '', 'ภูเก็ต จัดประชุมเชิงปฏิบัติการส่งเสริมเศรษฐกิจพอเพียงในชุมชน ระยะที่ 4', 'ภูเก็ต จัดประชุมเชิงปฏิบัติการส่งเสริมเศรษฐกิจพอเพียงในชุมชน ระยะที่ 4', '', '<p>วันที่ 21 พฤศจิกายน 2559 เวลา 09.00น. ส านักงานโครงการสมเด็จพระเทพรัตนราชสุดาฯ</p>\r\n\r\n<p>สยามบรมราชกุมารี โดยกรมวังผู้ใหญ่ ว่าที่ร้อยตรี กิตติ ขันธมิตร เป็นประธานในการประชุม</p>\r\n\r\n<p>เชิงปฏิบัติการ โครงการส่งเสริมเศรษฐกิจพอเพียงในชุมชน ระยะที่ 4 พร้อมทั้งเป็นวิทยากรบรรยาย</p>\r\n\r\n<p>และมอบเมล็ดพันธุ์พืชพระราชทาน แก่สมาชิกกลุ่มเศรษฐกิจพอเพียงบ้านป่าคลอก หมู่ที่ 2</p>\r\n\r\n<p>ต าบลป่าคลอก อ าเภอถลาง จังหวัดภูเก็ต โดยมีนางศิวพร ฉั่วสวัสดิ์ รองผู้ว่าราชการจังหวัดภูเก็ต</p>\r\n\r\n<p>พร้อมด้วย ปลัดจังหวัดภูเก็ต นายอ าเภอถลาง เกษตรจังหวัดภูเก็ต หัวหน้าส่วนราชการ ก านัน</p>\r\n\r\n<p>ผู้ใหญ่บ้าน ผู้น าชุมชน สมาชิกกลุ่มเศรษฐกิจพอเพียงบ้านป่าคลอก สมาชิกเครือข่าย และเกษตรกร</p>\r\n\r\n<p>ทั่วไป เข้าร่วมประชุมด้วย ทั้งนี้กรมวังผู้ใหญ่ได้เยี่ยมชมศูนย์เรียนรู้เศรษฐกิจพอเพียงบ้านป่าคลอก ซึ่งมี 7 ฐานการเรียนรู้</p>\r\n\r\n<p>การท าการเกษตรแบบผสมผสาน ปลูกผักพื้นบ้าน สมุนไพร การท าดินปลูกและปุ๋ยหมัก การเลี้ยงปลา เลี้ยงหมูหลุม ไก่</p>\r\n\r\n<p>การปลูกถั่วพูร้อยสาย การผลิตน้ าจากต้นไผ่ การปลูกข้าวนอกนา การท าภาชนะจากวัสดุเศษผ้า เป็นต้น เพื่อเป็นการลด</p>\r\n\r\n<p>รายจ่ายและสร้างรายได้เสริมให้กับครอบครัว</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:05:05', '73', '1', '1');
INSERT INTO `t_news` (`news_id`, `cat_news_id`, `name_url`, `title_en`, `title`, `content_en`, `content`, `cover`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `flag_index`, `active`) VALUES
(74, '6', '', 'วันที 2 พย.59 เวลา10.00 น.นายเธียรชัย. อัจฉริยพันธุ์ รองผู้ว่าราชการจังหวัดกาฬสินธุ์ นางโสภิต รักสกุล รักษาราชการแทนเกษตรอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ มอบถุงยังชีพแก่เกษตรกรที่ประสบอุทกภัย 4 ตำบล จำนวน 200 คน ณ.ห้องประชุมอบต.ลำชี อ.ฆ้องชัย จ.กาฬ', 'วันที 2 พย.59 เวลา10.00 น.นายเธียรชัย. อัจฉริยพันธุ์ รองผู้ว่าราชการจังหวัดกาฬสินธุ์ นางโสภิต รักสกุล รักษาราชการแทนเกษตรอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ มอบถุงยังชีพแก่เกษตรกรที่ประสบอุทกภัย 4 ตำบล จำนวน 200 คน ณ.ห้องประชุมอบต.ลำชี อ.ฆ้องชัย จ.กาฬ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:00:48', '74', '1', '1'),
(75, '6', '', 'วันที 20 พย.59 เวลา10.00 น.นางโสภิต รักสกุล รักษาราชการแทนเกษตรอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ กำนันผู้ใหญ่บ้านอำเภอฆ้องชัย แสดงความยินดีและให้การต้อนรับนายคารม คำพิทูรย์ นายอำเภอฆ้องชัย จ.กาฬสินธุ์', 'วันที 20 พย.59 เวลา10.00 น.นางโสภิต รักสกุล รักษาราชการแทนเกษตรอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ กำนันผู้ใหญ่บ้านอำเภอฆ้องชัย แสดงความยินดีและให้การต้อนรับนายคารม คำพิทูรย์ นายอำเภอฆ้องชัย จ.กาฬสินธุ์', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:59:59', '75', '1', '1'),
(76, '6', '', 'วันที่ 22 พ.ย.2559 นายคารม คำพิทูรย์ นายอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ รัฐวิสาหกิจ องค์กรปกครองส่วนท้องถิ่น กำนัน ผู้ใหญ่บ้าน พี่น้องประชาชน ร่วมพิธี “รวมพลัง แห่งความภักดี ถวายพ่อหลวง” ณ.หน้าที่ว่าการอำเภอฆ้องชัย จ.กาฬสินธุ์', 'วันที่ 22 พ.ย.2559 นายคารม คำพิทูรย์ นายอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ รัฐวิสาหกิจ องค์กรปกครองส่วนท้องถิ่น กำนัน ผู้ใหญ่บ้าน พี่น้องประชาชน ร่วมพิธี “รวมพลัง แห่งความภักดี ถวายพ่อหลวง” ณ.หน้าที่ว่าการอำเภอฆ้องชัย จ.กาฬสินธุ์', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:59:39', '76', '1', '1'),
(77, '6', '', 'วันที่ 22 พ.ย.2559 เวลา10.30น.นายคารม คำพิทูรย์ นายอำเภอฆ้องชัย นางโสภิต รักสกุล รักษาราชการแทนเกษตรอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ และคณะ ร่วมลงแขกเกี่ยวข้าว ณ บ้านดอนแคน หมู่2 ตำบลฆ้องชัยพัฒนา อ.ฆ้องชัย จ.กาฬสินธุ์', 'วันที่ 22 พ.ย.2559 เวลา10.30น.นายคารม คำพิทูรย์ นายอำเภอฆ้องชัย นางโสภิต รักสกุล รักษาราชการแทนเกษตรอำเภอฆ้องชัย พร้อมด้วยหัวหน้าส่วนราชการ และคณะ ร่วมลงแขกเกี่ยวข้าว ณ บ้านดอนแคน หมู่2 ตำบลฆ้องชัยพัฒนา อ.ฆ้องชัย จ.กาฬสินธุ์', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:59:19', '77', '1', '1'),
(78, '6', '', 'สำนักงานเกษตรจังหวัดภูเก็ต ร่วมกิจกรรม “รวมพลังแห่งความภักดี”', 'สำนักงานเกษตรจังหวัดภูเก็ต ร่วมกิจกรรม “รวมพลังแห่งความภักดี”', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:27:13', '78', '1', '1'),
(79, '6', '', 'สำนักงานเกษตรจังหวัดภูเก็ต จัดเวทีแลกเปลี่ยนความรู้ระดับจังหวัดเพื่อขับเคลื่อน  ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร(ศพก.) ครั้งที่ 1/2560', 'สำนักงานเกษตรจังหวัดภูเก็ต จัดเวทีแลกเปลี่ยนความรู้ระดับจังหวัดเพื่อขับเคลื่อน  ศูนย์เรียนรู้การเพิ่มประสิทธิภาพการผลิตสินค้าเกษตร(ศพก.) ครั้งที่ 1/2560', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:26:26', '79', '1', '1'),
(80, '6', '', 'จังหวัดภูเก็ต ถ่ายทอดความรู้เรื่องการจัดการโรคยางพาราและศัตรูยางพารา', 'จังหวัดภูเก็ต ถ่ายทอดความรู้เรื่องการจัดการโรคยางพาราและศัตรูยางพารา', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:25:04', '80', '1', '1'),
(81, '6', '', 'พิธีถวายสัตย์ปฏิญาณ ในกิจกรรมรวมพลังแห่งความภักดี  อำเภอดอนจาน จังหวัดกาฬสินธุ์', 'พิธีถวายสัตย์ปฏิญาณ ในกิจกรรมรวมพลังแห่งความภักดี  อำเภอดอนจาน จังหวัดกาฬสินธุ์', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:24:33', '81', '1', '1'),
(82, '6', '', 'โครงการหน่วยแพทย์เคลื่อนที่ พอ.สว.จังหวัดกาฬสินธุ์  และโครงการ "จังหวัดกาฬสินธุ์ บำบัดทุกข์บำรุงสุข สร้างรอยยิ้มให้ประชาชน”', 'โครงการหน่วยแพทย์เคลื่อนที่ พอ.สว.จังหวัดกาฬสินธุ์  และโครงการ "จังหวัดกาฬสินธุ์ บำบัดทุกข์บำรุงสุข สร้างรอยยิ้มให้ประชาชน”', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 22:23:58', '82', '1', '1'),
(83, '6', '', 'วันที่ 24 พฤศจิกายน 2559 นายสมชาย ชาญนรงค์กุล อธิบดีกรมส่งเสริมการเกษตร เป็นประธานเปิดงาน “วันยุวเกษตรกรโลก” ภายใต้ Theme 4-H ยั่งยืนด้วยเศรษฐกิจพอเพียง', 'วันที่ 24 พฤศจิกายน 2559 นายสมชาย ชาญนรงค์กุล อธิบดีกรมส่งเสริมการเกษตร เป็นประธานเปิดงาน “วันยุวเกษตรกรโลก” ภายใต้ Theme 4-H ยั่งยืนด้วยเศรษฐกิจพอเพียง', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', NULL, 1, '2016-11-17 01:22:04', 1, '2016-11-25 21:55:25', '83', '1', '1'),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-25 21:28:22', 1, '2016-11-25 21:28:22', '84', '1', '1'),
(86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-01 22:31:46', 1, '2016-12-01 22:31:46', '86', '1', '1'),
(87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-05 22:26:33', 1, '2016-12-05 22:26:33', '87', '1', '1'),
(88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-07 14:44:05', 1, '2016-12-07 14:44:05', '88', '1', '1'),
(89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-07 14:47:17', 1, '2016-12-07 14:47:17', '89', '1', '1'),
(90, '9', NULL, 'ทดสอบ', 'ทดสอบ', '<p>กหฟกฟหก</p>', '<p>กหฟกหฟก</p>', NULL, 1, '2016-12-11 00:49:49', 1, '2016-12-11 00:50:02', '90', '0', '1'),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-12 19:42:45', 1, '2016-12-12 19:42:45', '91', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_news_cat`
--

CREATE TABLE `t_news_cat` (
  `cat_news_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `sort_order` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag_index` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_news_cat`
--

INSERT INTO `t_news_cat` (`cat_news_id`, `icon`, `name_en`, `sort_order`, `name`, `create_id`, `create_date`, `update_id`, `update_date`, `flag_index`, `active`) VALUES
(1, 'img/cover/DOAE 265x265.png', 'ข่าวกิจกรรม', 1, 'ข่าวกิจกรรม', NULL, NULL, 1, '2016-12-10 00:32:37', '1', '1'),
(2, 'img/cover/DOAE 265x265.png', 'ข่าวประชาสัมพันธ์ทั่วไป', 2, 'ข่าวประชาสัมพันธ์ทั่วไป', NULL, NULL, NULL, NULL, '1', '1'),
(3, 'img/cover/DOAE 265x265.png', 'ข่าวประกาศรับสมัครงาน', 3, 'ข่าวประกาศรับสมัครงาน', NULL, NULL, NULL, NULL, '1', '1'),
(4, 'img/cover/DOAE 265x265.png', 'ข่าวการจัดซื้อจัดจ้าง', 4, 'ข่าวการจัดซื้อจัดจ้าง', NULL, NULL, NULL, NULL, '1', '1'),
(5, 'img/cover/DOAE 265x265.png', 'ข่าวการฝึกอบรม', 5, 'ข่าวการฝึกอบรม', NULL, NULL, NULL, NULL, '1', '1'),
(6, 'img/cover/DOAE 265x265.png', 'ข่าวภูมิภาค', 6, 'ข่าวภูมิภาค', NULL, NULL, NULL, NULL, '1', '1'),
(7, 'img/cover/DOAE 265x265.png', 'ปฏิทินกิจกรรม', 7, 'ปฏิทินกิจกรรม', NULL, NULL, NULL, NULL, '1', '0'),
(10, 'img/cover/2015903110654.png', '', 8, 'ข่าวพืช', 1, '2016-12-12 02:34:54', 1, '2016-12-12 02:35:29', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_news_file`
--

CREATE TABLE `t_news_file` (
  `file_id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_news_file`
--

INSERT INTO `t_news_file` (`file_id`, `news_id`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 1, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '0'),
(2, 2, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '0'),
(3, 4, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '1'),
(4, 5, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '0'),
(5, 6, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '1'),
(6, 7, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '0'),
(7, 8, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '1'),
(8, 9, NULL, 'upload/files/import_menu.xls', NULL, NULL, NULL, NULL, NULL, '0'),
(9, 6, 'import_menu.xls', 'upload/files/import_menu.xls', NULL, 6, '2016-11-25 02:38:38', 6, '2016-11-25 02:38:38', '1'),
(10, 6, 'SSI system requirement 2017_20161121.xlsx', 'upload/files/SSI system requirement 2017_20161121.xlsx', NULL, 6, '2016-11-25 02:38:38', 6, '2016-11-25 02:38:38', '0'),
(11, 6, 'import_file.xls', 'upload/files/import_file.xls', NULL, 6, '2016-11-25 02:38:38', 6, '2016-11-25 02:38:38', '1'),
(12, 73, '60028.pdf', 'upload/files/60028.pdf', NULL, 73, '2016-11-25 22:04:56', 73, '2016-11-25 22:04:56', '1'),
(13, 38, '60028.pdf', 'upload/files/60028.pdf', NULL, 38, '2016-11-25 22:17:26', 38, '2016-11-25 22:17:26', '1'),
(14, 9, '60028.pdf', 'upload/files/60028.pdf', NULL, 9, '2016-11-26 17:20:25', 9, '2016-11-26 17:20:25', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_page`
--

CREATE TABLE `t_page` (
  `page_id` int(11) NOT NULL,
  `cat_page_id` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `detail1` varchar(255) DEFAULT NULL,
  `detail2` varchar(255) DEFAULT NULL,
  `detail3` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_page`
--

INSERT INTO `t_page` (`page_id`, `cat_page_id`, `images`, `title_en`, `title`, `content_en`, `content`, `detail1`, `detail2`, `detail3`, `url`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 1, NULL, 'ยุวชน1', 'ยุวชน1', 'ยุวชน1', 'ยุวชน1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_page_cat`
--

CREATE TABLE `t_page_cat` (
  `cat_page_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_page_cat`
--

INSERT INTO `t_page_cat` (`cat_page_id`, `icon`, `name`, `name_en`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, NULL, 'ยุวชนเกษตรดีเด่น', 'ยุวชนเกษตรดีเด่น', NULL, NULL, NULL, NULL, NULL, '1'),
(2, NULL, 'ติดต่อเรา', 'contact us', NULL, NULL, NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_page_file`
--

CREATE TABLE `t_page_file` (
  `file_id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_people`
--

CREATE TABLE `t_people` (
  `people_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `cat_people_id` int(11) DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_people`
--

INSERT INTO `t_people` (`people_id`, `images`, `title_en`, `title`, `content_en`, `content`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `cat_people_id`, `sort_order`, `active`) VALUES
(5, 'img/cover/2016-11-27_3-28-02.jpg', '', 'นางสาวสุนิสา อุยะตุง', '', '', NULL, NULL, 1, '2016-11-27 03:27:43', 1, '2016-12-16 00:49:58', 1, '5', '1'),
(7, 'img/cover/2016-11-27_3-31-45.jpg', '', 'นางประมวล ทั่งทอง', '', '', NULL, NULL, 1, '2016-11-27 03:32:51', 1, '2016-12-16 02:35:44', 1, '7', '1'),
(8, 'img/cover/2016-11-27_3-34-07.jpg', 'Mr.Nutat Kumpang', 'นายหนูทัศน์ คำแพง', '<p>Test</p>', '<p>ทดสอบ</p>', NULL, NULL, 1, '2016-11-27 03:34:17', 1, '2016-12-05 23:04:09', 1, '8', '1'),
(9, 'img/cover/2016-11-27_3-31-27.jpg', '', 'นายอภิชัย ช่วยสมบูรณ์', '', '<p>นายอภิชัย ช่วยสมบูรณ์ เกษตรกรดีเด่นระดับเขต เขตที่ 8 ปี 2557 สาขาอาชีพทำไร่นาสวนผสม อยู่บ้านเลขที่ 16/51 หมู่ที่ 4 ตำบลบางนายสี อำเภอตะกั่วป่า จังหวัดพังงา อายุ 37 ปี จบการศึกษาระดับประกาศนียบัตรวิชาชีพ (ปวช.) จากวิทยาลัยเกษตรกรรมตรัง เดิมทีประกอบอาชีพรับเหมาก่อสร้าง ต่อมา ประสบปัญหาขาดทุน และถูกฉ้อโกงจนมีหนี้สินหลายแสน จนไม่รู้จะหันหน้าไปพึ่งใคร จนกระทั่งต้องหันหันกลับมาพึ่งพาเรื่องของการเกษตร ที่เริ่มจากการทำเป็นอาชีพเสริม โดยเพาะเลี้ยงพันธุ์ปลาน้ำจืดจำหน่าย ชื่อ คามินฟาร์ม&nbsp;</p>', NULL, NULL, 1, '2016-12-07 15:43:46', 1, '2016-12-07 15:45:47', 1, '9', '1'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-15 23:20:31', 1, '2016-12-15 23:20:31', 29, '10', '1'),
(11, 'img/cover/companies.png', '', 'นายตึก โดดเด่น', '', '', NULL, NULL, 1, '2016-12-16 02:05:14', 1, '2016-12-16 02:05:41', 1, '11', '1'),
(12, 'img/cover/default.png', 'TEST 1', 'ทดสอบ 1', '', '', NULL, NULL, 1, '2016-12-16 02:10:26', 1, '2016-12-16 02:10:59', 1, '12', '1'),
(16, 'img/cover/default.png', 'Test 3', 'ทดสอบ 3', '', '', NULL, NULL, 1, '2016-12-16 02:35:55', 1, '2016-12-16 02:36:12', 1, '13', '1'),
(17, 'img/cover/default.png', 'Test 4', 'ทดสอบ 4', '', '', NULL, NULL, 1, '2016-12-16 02:36:22', 1, '2016-12-16 02:36:36', 1, '17', '1'),
(18, 'img/cover/default.png', 'Test 5', 'ทดสอบ 5', '', '', NULL, NULL, 1, '2016-12-16 02:36:51', 1, '2016-12-16 02:37:12', 1, '18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_people_cat`
--

CREATE TABLE `t_people_cat` (
  `cat_people_id` int(11) NOT NULL,
  `name` text,
  `name_en` text,
  `icon` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_people_cat`
--

INSERT INTO `t_people_cat` (`cat_people_id`, `name`, `name_en`, `icon`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'เกษตรกรดีเด่น', 'เกษตรกรดีเด่น', NULL, NULL, NULL, 1, '2016-12-16 02:29:38', '1', '1'),
(29, 'test', 'test', NULL, 1, '2016-12-15 23:20:11', 1, '2016-12-16 02:35:09', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_people_file`
--

CREATE TABLE `t_people_file` (
  `file_id` int(11) NOT NULL,
  `people_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_people_file`
--

INSERT INTO `t_people_file` (`file_id`, `people_id`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 1, 'import_url.xls', 'upload/files/import_url.xls', NULL, 1, '2016-11-25 14:43:39', 1, '2016-11-25 14:43:39', '1'),
(2, 1, 'import_url.xlsx', 'upload/files/import_url.xlsx', NULL, 1, '2016-11-25 14:43:39', 1, '2016-11-25 14:43:39', '1'),
(3, 5, '4Young farmers 2555.pdf', 'upload/files/4Young farmers 2555.pdf', NULL, 1, '2016-11-27 03:29:40', 1, '2016-11-27 03:29:40', '1'),
(4, 6, '2rai.pdf', 'upload/files/2rai.pdf', NULL, 1, '2016-11-27 03:32:34', 1, '2016-11-27 03:32:34', '1'),
(5, 7, '1Garden.pdf', 'upload/files/1Garden.pdf', NULL, 1, '2016-11-27 03:35:10', 1, '2016-11-27 03:35:10', '1'),
(6, 8, '3Joint plantation_3.PDF', 'upload/files/3Joint plantation_3.PDF', NULL, 1, '2016-11-27 03:35:37', 1, '2016-11-27 03:35:37', '1'),
(7, 9, 'contact.png', 'upload/files/contact.png', NULL, 1, '2016-12-07 15:45:45', 1, '2016-12-07 15:45:45', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_pest`
--

CREATE TABLE `t_pest` (
  `pest_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_pest`
--

INSERT INTO `t_pest` (`pest_id`, `images`, `title_en`, `title`, `content_en`, `content`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'km_001.jpg', 'เตือนการระบาดศัตรูพืช', 'เตือนการระบาดศัตรูพืช', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, '1'),
(2, 'km_001.jpg', 'การระบาดเพลี้ยแป้งมันสำปะหลัง', 'การระบาดเพลี้ยแป้งมันสำปะหลัง', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, '1'),
(3, 'km_001.jpg', 'การระบาดศัตรูข้าว', 'การระบาดศัตรูข้าว', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, '1'),
(4, 'km_001.jpg', 'การระบาดศัตรูมะพร้าว', 'การระบาดศัตรูมะพร้าว', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, '1'),
(5, 'img/cover/DOAE.png', 'ข่าวเตือน1', 'ข่าวเตือน1', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '2', '1', NULL, NULL, 1, '2016-11-27 05:09:55', '', '1'),
(6, 'img/cover/DOAE.png', 'ข่าวเตือน2', 'ข่าวเตือน2', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '2', '1', NULL, NULL, 1, '2016-11-27 05:09:00', '0', '1'),
(7, 'img/cover/DOAE.png', 'ข่าวเตือน4', 'ข่าวเตือน4', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '2', '1', NULL, NULL, 1, '2016-11-27 05:10:08', '0', '0'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-25 22:48:14', 1, '2016-11-25 22:48:14', '8', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_pest_file`
--

CREATE TABLE `t_pest_file` (
  `file_id` int(11) NOT NULL,
  `pest_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `product_id` int(11) NOT NULL,
  `cat_product_id` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `url` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`product_id`, `cat_product_id`, `images`, `title_en`, `title`, `content_en`, `content`, `url`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(4, NULL, 'img/cover/58602031000120060904152244.jpg', 'กล้วยเล็บมือนางอบแห้ง', 'กล้วยเล็บมือนางอบแห้ง', '<p>test</p>', '<p>test</p>', 'http://smce.doae.go.th/ProductCategory/ProductPopup.php?smce_id=586020310001&ps_id=12&select_province=0&page=1', 1, '2016-11-27 20:18:35', 1, '2016-12-01 12:49:43', '1', '1'),
(5, NULL, 'img/cover/5841702100012006091114401422.JPG', 'เสื่อกระจูด', 'เสื่อกระจูด', '', '', 'http://smce.doae.go.th/ProductCategory/ProductPopup.php?smce_id=584170210001&ps_id=68&select_province=0&page=1', 1, '2016-12-01 12:50:11', 1, '2016-12-01 12:53:22', '5', '1'),
(6, NULL, 'img/cover/58417021000120060911145157.JPG', 'หมวกจักสานกระจูด', 'หมวกจักสานกระจูด', '', '', 'http://smce.doae.go.th/ProductCategory/ProductPopup.php?smce_id=584170210001&ps_id=69&select_province=0&page=1', 1, '2016-12-01 12:59:33', 1, '2016-12-01 13:01:15', '6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_product_cat`
--

CREATE TABLE `t_product_cat` (
  `cat_km_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_product_file`
--

CREATE TABLE `t_product_file` (
  `file_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_qa`
--

CREATE TABLE `t_qa` (
  `qa_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `cus_type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `con_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `responsi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_qa`
--

INSERT INTO `t_qa` (`qa_id`, `name`, `phone`, `cus_type`, `email`, `con_type`, `title`, `content`, `create_date`, `update_id`, `update_date`, `responsi`, `status`, `active`) VALUES
(1, 'ฟฟฟฟฟ', 'sssssssssssss', '1', NULL, '4', 'vvvvvvvvvvvvvvvvv', 'lghlhglghlghlghlghghghgh', '2016-12-03 18:48:01', NULL, '2016-12-03 18:48:01', NULL, '1', '1'),
(2, 'ฟฟฟฟฟ', 'sssssssssssss', '1', NULL, '4', 'vvvvvvvvvvvvvvvvv', 'lghlhglghlghlghlghghghgh', '2016-12-03 18:49:08', NULL, '2016-12-03 18:49:08', 'กองพัฒนาเกษตรกร', '1', '1'),
(3, 'asdsadasdsadsa', 'asdsadasdsadsa', '1', NULL, '3', 'ssssssss', 'asdsadasdsadsa', '2016-12-03 18:49:24', NULL, '2016-12-03 18:49:24', 'กองพัฒนาเกษตรกร', '1', '1'),
(4, 'ข้อมูลติดต่อ 1', '0947879898', '', NULL, '1', 'คำถามทั่วไป', 'ทดสอบ', '2016-12-05 23:18:28', NULL, '2016-12-05 23:18:28', 'กองพัฒนาเกษตรกร', '1', '1'),
(5, 'test', 'test', '1', 'test', '2', 'test', 'test', '2016-12-05 23:22:42', NULL, '2016-12-05 23:22:42', 'กองพัฒนาเกษตรกร', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_question`
--

CREATE TABLE `t_question` (
  `qn_id` int(11) NOT NULL,
  `survey_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_question`
--

INSERT INTO `t_question` (`qn_id`, `survey_id`, `name`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 1, '1.เจ้าหน้าที่ให้การบริการแบบสุภาพและเต็มใจ', NULL, NULL, NULL, NULL, '1'),
(2, 1, '2.ให้คำแนะนำเกี่ยวกับบริการที่ชัดเจน', NULL, NULL, NULL, NULL, '1'),
(3, 1, '3.ให้การบริการอย่างกระตื้อรื้อล้น และรวดเร็ว', NULL, NULL, NULL, NULL, '1'),
(4, 1, '4.มีการให้บริการอย่างมีระบบ', NULL, NULL, NULL, NULL, '1'),
(5, 1, '5.มีความโปร่งใส่ในการบริการ', NULL, NULL, NULL, NULL, '1'),
(6, 1, '6.ข้อมูลที่ได้รับมีความถูกต้อง', NULL, NULL, NULL, NULL, '1'),
(7, 1, '7.ระดับความพึงพอใจโดยรวมของท่าน', NULL, NULL, NULL, NULL, '1'),
(8, 1, '8.ท่านพอใจกับบริการเสริมอื่นๆ', 1, '2016-12-06 05:18:19', 1, '2016-12-06 05:31:52', '1'),
(9, 2, 'การให้บริการของเจ้าหน้าที่', 1, '2016-12-06 20:17:13', 1, '2016-12-06 20:17:13', '1'),
(10, 1, 'การตรวจสอบ', 1, '2016-12-07 15:58:26', 1, '2016-12-07 15:58:26', '1'),
(11, 4, 'tes1', 1, '2016-12-15 12:35:59', 1, '2016-12-15 12:35:59', '1'),
(12, 6, 'test', 1, '2016-12-15 14:31:50', 1, '2016-12-15 14:31:50', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_service`
--

CREATE TABLE `t_service` (
  `service_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title_en` text,
  `title` text,
  `content_en` text,
  `content` text,
  `template` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT '0',
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_service`
--

INSERT INTO `t_service` (`service_id`, `images`, `title_en`, `title`, `content_en`, `content`, `template`, `parent_id`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, NULL, 'บริการของกรมส่งเสริม', 'บริการของกรมส่งเสริม', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-28 21:25:57', '0', '1'),
(10, NULL, '', 'งานบริการกระทรวง', NULL, NULL, NULL, NULL, 1, '2016-12-07 15:46:55', 1, '2016-12-07 15:47:15', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_service_cat`
--

CREATE TABLE `t_service_cat` (
  `cat_service_id` int(11) NOT NULL,
  `name` text,
  `name_en` text,
  `icon` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_service_cat`
--

INSERT INTO `t_service_cat` (`cat_service_id`, `name`, `name_en`, `icon`, `create_id`, `create_date`, `update_id`, `update_date`, `sort_order`, `active`) VALUES
(1, 'พื้นที่เพาะปลูกและสภาพแวดล้อม', 'e_พื้นที่เพาะปลูกและสภาพแวดล้อม', NULL, NULL, NULL, NULL, NULL, '1', '1'),
(2, 'การส่งเสริมการเพาะปลูกพืช', 'e_การส่งเสริมการเพาะปลูกพืช', NULL, NULL, NULL, NULL, NULL, '2', '1'),
(3, 'ศัตรูพืชโรคระบาดและการส่งเสริมศักยภาพการผลิต', 'e_ศัตรูพืชโรคระบาดและการส่งเสริมศักยภาพการผลิต', NULL, NULL, NULL, NULL, NULL, '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_service_file`
--

CREATE TABLE `t_service_file` (
  `file_id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_service_file`
--

INSERT INTO `t_service_file` (`file_id`, `service_id`, `title_en`, `title`, `url`, `name`, `path`, `type_file`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 1, NULL, '1', 'http://ssnet.doae.go.th/login.php', NULL, 'img/cover/ssnet.png', NULL, NULL, NULL, 1, '2016-11-27 03:51:52', '1'),
(2, 1, NULL, '2', 'https://webmail.doae.go.th/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fwebmail.doae.go.th%2fowa%2f', NULL, 'img/cover/email.png', NULL, NULL, NULL, 1, '2016-11-27 03:43:43', '1'),
(3, 1, NULL, '3', 'http://media.doae.go.th/', NULL, 'img/cover/sssil.png', NULL, NULL, NULL, 1, '2016-12-08 23:11:25', '0'),
(4, 1, NULL, '4', 'http://www.doae.go.th/cassava/cassava.html', NULL, 'img/cover/26-8-58.jpg', NULL, NULL, NULL, 1, '2016-11-27 03:48:15', '1'),
(5, 1, NULL, '5', 'http://www.agriinfo.doae.go.th/', NULL, 'img/cover/agriinfo.png', NULL, NULL, NULL, 1, '2016-11-27 03:49:04', '1'),
(6, 1, NULL, '6', 'https://www.youtube.com/channel/UCS_8HQGLXnGpgEgFjIpe7bA', NULL, 'img/cover/library-in-youtube.png', NULL, NULL, NULL, 1, '2016-11-27 03:49:23', '1'),
(7, 2, NULL, '7', 'https://www.youtube.com/watch?v=AeGfss2vsZg', NULL, 'img/service/cat01_01.jpg', NULL, NULL, NULL, NULL, NULL, '1'),
(8, 2, NULL, '8', 'https://www.youtube.com/watch?v=AeGfss2vsZg', NULL, 'img/service/cat01_01.jpg', NULL, NULL, NULL, NULL, NULL, '1'),
(9, 6, NULL, NULL, NULL, 'arun1.jpg', 'upload/files/arun1.jpg', NULL, 1, '2016-11-26 22:41:53', 1, '2016-11-26 22:41:53', '1'),
(10, 6, NULL, NULL, NULL, '839496.jpg', 'upload/files/839496.jpg', NULL, 1, '2016-11-26 22:41:53', 1, '2016-11-26 22:41:53', '1'),
(11, 6, NULL, NULL, NULL, 'web-banner-715x350_kv[1]_547402dd48c08.jpg', 'upload/files/web-banner-715x350_kv[1]_547402dd48c08.jpg', NULL, 1, '2016-11-26 22:41:53', 1, '2016-11-26 22:52:50', '1'),
(13, 6, NULL, NULL, NULL, 'A-jackpot-of-fresh-and-good-design-resources8.jpg', 'upload/files/A-jackpot-of-fresh-and-good-design-resources8.jpg', NULL, 1, '2016-11-26 22:41:53', 1, '2016-11-26 22:41:53', '1'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:02:30', 1, '2016-11-27 01:02:30', '1'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:03:02', 1, '2016-11-27 01:03:02', '1'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:03:37', 1, '2016-11-27 01:03:37', '1'),
(17, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:07:47', 1, '2016-11-27 01:07:47', '1'),
(18, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:08:20', 1, '2016-11-27 01:08:20', '1'),
(19, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:08:28', 1, '2016-11-27 01:08:28', '1'),
(20, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 01:09:00', 1, '2016-11-27 01:09:00', '1'),
(21, 1, NULL, NULL, 'http://agrotourism.doae.go.th/', NULL, 'img/cover/agrotourism.png', NULL, 1, '2016-11-27 01:09:28', 1, '2016-11-27 03:49:50', '1'),
(22, 1, NULL, NULL, 'http://www.servicelink.doae.go.th/', NULL, 'img/cover/servicelink.png', NULL, 1, '2016-11-27 03:49:55', 1, '2016-11-27 03:50:15', '1'),
(23, 10, NULL, NULL, 'https://www.google.co.uk', NULL, 'img/cover/faq.png', NULL, 1, '2016-12-07 15:47:23', 1, '2016-12-07 15:47:53', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`status_id`, `name`) VALUES
(1, 'รอการดำเนินการ'),
(2, 'กำลังดำเนินการ'),
(3, 'ดำเนอนการเสร็จสิ้น');

-- --------------------------------------------------------

--
-- Table structure for table `t_subscribe`
--

CREATE TABLE `t_subscribe` (
  `member_id` int(11) NOT NULL,
  `news1` varchar(255) DEFAULT NULL,
  `news2` varchar(255) DEFAULT NULL,
  `news3` varchar(255) DEFAULT NULL,
  `news4` varchar(255) DEFAULT NULL,
  `news5` varchar(255) DEFAULT NULL,
  `news6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_subscribe`
--

INSERT INTO `t_subscribe` (`member_id`, `news1`, `news2`, `news3`, `news4`, `news5`, `news6`) VALUES
(0, '1', '2', '3', '4', '5', '6'),
(1, '1', '', '', '', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_survey`
--

CREATE TABLE `t_survey` (
  `survey_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_survey`
--

INSERT INTO `t_survey` (`survey_id`, `name`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 'แบบสำรวจความพึงพอใจ', 1, '2016-12-06 04:34:26', 1, '2016-12-06 04:34:17', '1'),
(2, 'แบบสำรวจการใช้บริการ', 1, '2016-12-06 05:35:34', 1, '2016-12-06 05:35:34', '1'),
(3, '', 1, '2016-12-07 10:09:55', 1, '2016-12-07 10:09:55', '1'),
(4, 'tes', 1, '2016-12-15 12:35:41', 1, '2016-12-15 12:35:41', '1'),
(5, '', 1, '2016-12-15 14:29:56', 1, '2016-12-15 14:29:56', '1'),
(6, 'test_san', 1, '2016-12-15 14:30:10', 1, '2016-12-15 14:30:10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_vdo`
--

CREATE TABLE `t_vdo` (
  `vdo_id` int(11) NOT NULL,
  `cat_vdo_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content_en` text,
  `content` text,
  `url` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag_index` varchar(255) DEFAULT '1',
  `sort_order` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_vdo`
--

INSERT INTO `t_vdo` (`vdo_id`, `cat_vdo_id`, `title_en`, `title`, `content_en`, `content`, `url`, `create_id`, `create_date`, `update_id`, `update_date`, `flag_index`, `sort_order`, `active`) VALUES
(1, 1, '', 'ปลดหนี้ได้ด้วยเกษตรพอเพียง', '<p>-</p>', '<p>เกษตรพอเพียง:สร้างรายได้ทั้งรายวัน รายเดือน และรายปี ทำให้สามารถปลดหนี้หลักล้านได้ไม่ยุ่งยาก</p>', 'https://www.youtube.com/embed/mOtJ2SyFDqU', NULL, NULL, 1, '2016-12-09 06:43:33', '1', NULL, '1'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-26 17:43:43', 1, '2016-11-26 17:43:43', '1', '3', '0'),
(4, NULL, 'sssssssss', 'sssssssss', '<p>dfgdfgdfgdfg</p>', '<p>fgdfgdfgdfgd</p>', 'https://www.youtube.com/embed/WIm1GgfRz6M', 1, '2016-11-26 17:43:54', 1, '2016-11-26 17:44:40', '1', '4', '1'),
(6, 1, '', 'เกษตรปลอดการเผา', '', '<p>หากภาคการเกษตรช่วยกันไม่เผาตอซังข้าว ใบอ้อย เศษ ซากพืช จะส่งผลให้ 1.อากาศดี 2.สุขภาพดี &hellip;</p>', 'https://www.youtube.com/embed/AnfFHl38eng', 1, '2016-11-27 03:08:54', 1, '2016-11-27 03:09:49', '1', '5', '1'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-27 03:11:27', 1, '2016-11-27 03:11:27', '1', '7', '1'),
(8, 1, '', 'เกษตรผสมผสานอย่างยั่งยืน', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">เปลี่ยนพฤติกรรมการเพาะปลูก ด้วยความรู้เท่าทันการเปลี่ยนแปลงของสภาวะต่างๆ ทางเลือกทางรอดของเกษตรกรไทย ได้แก่ เกษตรผสมผสาน เกษตรอินทรีย์ เกษตรทฤษฎีใหม่ เกษตรธรรมชาติ วนเกษตรหรือไร่นาป่าผสม</span></p>', 'https://www.youtube.com/embed/I99uv5NqpD8', 1, '2016-11-27 03:13:17', 1, '2016-11-27 03:13:40', '1', '8', '1'),
(9, 1, '', 'ใช้น้ำอย่างรู้คุณค่า', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">ระบบการให้น้ำแก่พืชอย่างเหมาะสมกับ ชนิดพืช ช่วงอายุ ส่งผลให้พืชเติบโตได้เต็มที่ ไม่ชะงักการเติบโต เพิ่มปริมาณผลผลิต กำหนดเวลาเก็บเกี่ยวได้ การให้ปุ๋ยมีประสิทธิภาพมากขึ้น</span></p>', 'https://www.youtube.com/embed/kug04kQqjMQ', 1, '2016-11-27 03:14:01', 1, '2016-11-27 03:14:44', '1', '9', '1'),
(10, 1, '', 'ผลิตผักไร้ดินอย่างง่ายในครัวเรือน', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">เกษตรแนวใหม่ ใช้แรงงานน้อย ใช้น้ำน้อย คือการปลูกผักไฮโดรโปนิกส์ สามารถปลูกได้ทุกที่ อย่างไรก็ดี ยังคงมีข้อจำกัดด้านการลงทุนครั้งแรกสูง&nbsp;</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">ผู้ปลูกต้องมีความรู้ และประสบการณ์ในการควบคุมดูแล ติดตามรับชมเพื่อศึกษาเป็นความรู้ในเบื้องต้น ก่อนจะลงมือทดลองทำขนาดเล็กๆ เป็นประสบการณ์ ค่อยขยับขยายเพิ่มขนาดที่เหมาะสมกับตนเองกันต่อไปค</span></p>', 'https://www.youtube.com/embed/F-5Rtokq8zs', 1, '2016-11-27 03:14:50', 1, '2016-11-27 03:15:51', '1', '10', '1'),
(11, 1, '', 'การตลาดเกษตรอินทรีย์', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">เกษตรพอเพียง: สร้างรายได้ทั้งรายวัน รายเดือน และรายปี ทำให้สามารถปลดหนี้หลักล้านได้ไม่ยาก หากรู้จักบริหารจัดการตนเองด้วยการน้อมนำหลักการเศรษฐกิจพอเพียงมาใช้</span></p>', 'https://www.youtube.com/embed/mOtJ2SyFDqU', 1, '2016-11-27 03:16:35', 1, '2016-12-07 15:51:12', '1', '11', '0'),
(12, 1, '', 'การขยายพันธ์ุพืชโดยการตอนกิ่ง การทาบกิ่ง การต่อกิ่ง', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">มาชมกันคะว่า เทคนิคการขยายพันธุ์พืชแบบไม่อาศัยเพศนั้น ทำได้อย่างไร?</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">ไม้ชนิดใดเหมาะกับการขยายพันธุ์แบบไหน? การเลือกกิ่งพันธ์ุที่เหมาะสมพิจารณาจากอะไร?</span></p>', 'https://www.youtube.com/embed/hopM7QX7P4g', 1, '2016-11-27 03:17:44', 1, '2016-11-27 03:19:48', '1', '12', '1'),
(13, 1, '', 'แม่บ้านเกษตรกับความมั่นคงด้านอาหาร', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">จากปัญหาความมั่นคงด้านอาหารมีความรุนแรงมากขึ้น กรมส่งเสริมการเกษตรจึงได้พัฒนากลุ่มแม่บ้านเกษตรกร จังหวัดละ 1 จุดๆละ 20 ราย รวมทั้งสิ้น 1,540 ราย เพื่อให้กลุ่มแม่บ้านได้เรียนรู้และเป็นตัวอย่าง สร้างความมั่นคงด้านอาหาร เพื่อคุณภาพชีวิตที่ดีอย่างยั่งยืน</span></p>', 'https://www.youtube.com/embed/TZ1SoRIDJDE', 1, '2016-11-27 03:20:01', 1, '2016-11-27 03:20:44', '1', '13', '1'),
(14, 1, '', 'เกษตรกรรม ร่ำรวยความสุข', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">กล้าที่จะเปลี่ยน เพื่อสิ่งที่ดีกว่า อาจถูกมองว่าบ้า ให้เวลาเป็นเครื่องพิสูจน์ ทำได้อย่างไรนั้น เชิญติดตามชมกันในคลิปนี้คะ</span></p>', 'https://www.youtube.com/embed/CPLz8iAoYbg', 1, '2016-11-27 03:21:55', 1, '2016-11-27 03:22:13', '1', '14', '1'),
(15, 1, 'Smart Farmer & Yong Smart Farmer', 'Smart Farmer & Yong Smart Farmer', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(51, 51, 51); font-family:roboto,arial,sans-serif; font-size:13px">อีกวิถีทางหนึ่งของการพัฒนาภาคเกษตรไทย ด้วยการพัฒนาเกษตรกรรุ่นใหม่ที่เรียกว่า Yong Smart Farmer ให้เป็น Smart Farmer ที่มีความรู้ในการประกอบอาชีพด้านการเกษตร คือใช้องค์ความรู้และข้อมูลประกอบการตัดสินใจ รู้จักนำเทคโนโลยีมาใช้ ผลิตสินค้าให้ได้มาตรฐานตามความต้องการของตลาด กล่าวได้ว่า ต้องมีทักษะทั้งด้านการผลิต บริหารจัดการ และการตลาด</span></p>', 'https://www.youtube.com/embed/TQDrVOCxKjY', 1, '2016-11-27 03:22:39', 1, '2016-11-27 03:22:58', '1', '15', '1'),
(16, 1, 'Test 1', 'วีดิโอ 1', '', '', 'https://www.youtube.com/embed/FFSRXkVH2ns', 1, '2016-12-07 15:34:47', 1, '2016-12-07 15:36:09', '1', '16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_vdo_cat`
--

CREATE TABLE `t_vdo_cat` (
  `cat_vdo_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_vdo_cat`
--

INSERT INTO `t_vdo_cat` (`cat_vdo_id`, `cover`, `name_en`, `name`, `create_id`, `create_date`, `update_id`, `update_date`, `active`) VALUES
(1, 'img/cover/DOAE 265x265.png', 'vdo cat 1', 'หมวดหมู่ 1', NULL, NULL, 1, '2016-12-10 22:35:53', '1'),
(2, 'img/cover/Gallery 7.jpg', 'vdo cat 2', 'vdo cat 2', NULL, NULL, 1, '2016-12-12 20:28:54', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_vod_cat`
--

CREATE TABLE `t_vod_cat` (
  `cat_vdo_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `level_id` int(11) DEFAULT '1',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `level_id`, `username`, `password`, `fname`, `lname`, `email`, `tel`, `update_id`, `update_date`, `create_id`, `create_date`, `active`) VALUES
(1, 1, 'admin', 'admin', 'admin', 'amin', 'admin@gmail.com', '', 1, '2016-12-07 15:57:44', 1, NULL, '1'),
(2, 1, 'admin1', 'test', 'admin1', 'admin1', 'admin1@gmail.com', NULL, 1, NULL, 1, NULL, '1'),
(3, 1, 'admin_agilerap', 'doae1234', 'พิทักษ์', 'ญานะ', 'pitak.agilerap@gmail.com', '094879898', 1, '2016-12-07 13:20:45', 1, '2016-12-07 13:20:45', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`function_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_survey_issue`
--
ALTER TABLE `tbl_survey_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_survey_issue_sub`
--
ALTER TABLE `tbl_survey_issue_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_survey_sub`
--
ALTER TABLE `tbl_survey_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_about`
--
ALTER TABLE `t_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `t_about_file`
--
ALTER TABLE `t_about_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_article`
--
ALTER TABLE `t_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `t_article_cat`
--
ALTER TABLE `t_article_cat`
  ADD PRIMARY KEY (`cat_article_id`);

--
-- Indexes for table `t_article_file`
--
ALTER TABLE `t_article_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_banner`
--
ALTER TABLE `t_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `t_comment`
--
ALTER TABLE `t_comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `t_contact_file`
--
ALTER TABLE `t_contact_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_con_type`
--
ALTER TABLE `t_con_type`
  ADD PRIMARY KEY (`con_type_id`);

--
-- Indexes for table `t_download_file`
--
ALTER TABLE `t_download_file`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `t_event`
--
ALTER TABLE `t_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `t_freq`
--
ALTER TABLE `t_freq`
  ADD PRIMARY KEY (`freq_id`);

--
-- Indexes for table `t_freq_cat`
--
ALTER TABLE `t_freq_cat`
  ADD PRIMARY KEY (`cat_freq_id`);

--
-- Indexes for table `t_gallery`
--
ALTER TABLE `t_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `t_gallery_file`
--
ALTER TABLE `t_gallery_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_km`
--
ALTER TABLE `t_km`
  ADD PRIMARY KEY (`km_id`);

--
-- Indexes for table `t_km_cat`
--
ALTER TABLE `t_km_cat`
  ADD PRIMARY KEY (`cat_km_id`);

--
-- Indexes for table `t_km_file`
--
ALTER TABLE `t_km_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `t_news_cat`
--
ALTER TABLE `t_news_cat`
  ADD PRIMARY KEY (`cat_news_id`);

--
-- Indexes for table `t_news_file`
--
ALTER TABLE `t_news_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_page`
--
ALTER TABLE `t_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `t_page_cat`
--
ALTER TABLE `t_page_cat`
  ADD PRIMARY KEY (`cat_page_id`);

--
-- Indexes for table `t_page_file`
--
ALTER TABLE `t_page_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_people`
--
ALTER TABLE `t_people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `t_people_cat`
--
ALTER TABLE `t_people_cat`
  ADD PRIMARY KEY (`cat_people_id`);

--
-- Indexes for table `t_people_file`
--
ALTER TABLE `t_people_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_pest`
--
ALTER TABLE `t_pest`
  ADD PRIMARY KEY (`pest_id`);

--
-- Indexes for table `t_pest_file`
--
ALTER TABLE `t_pest_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `t_product_cat`
--
ALTER TABLE `t_product_cat`
  ADD PRIMARY KEY (`cat_km_id`);

--
-- Indexes for table `t_product_file`
--
ALTER TABLE `t_product_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_qa`
--
ALTER TABLE `t_qa`
  ADD PRIMARY KEY (`qa_id`);

--
-- Indexes for table `t_question`
--
ALTER TABLE `t_question`
  ADD PRIMARY KEY (`qn_id`);

--
-- Indexes for table `t_service`
--
ALTER TABLE `t_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `t_service_cat`
--
ALTER TABLE `t_service_cat`
  ADD PRIMARY KEY (`cat_service_id`);

--
-- Indexes for table `t_service_file`
--
ALTER TABLE `t_service_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `t_subscribe`
--
ALTER TABLE `t_subscribe`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `t_survey`
--
ALTER TABLE `t_survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `t_vdo`
--
ALTER TABLE `t_vdo`
  ADD PRIMARY KEY (`vdo_id`);

--
-- Indexes for table `t_vdo_cat`
--
ALTER TABLE `t_vdo_cat`
  ADD PRIMARY KEY (`cat_vdo_id`);

--
-- Indexes for table `t_vod_cat`
--
ALTER TABLE `t_vod_cat`
  ADD PRIMARY KEY (`cat_vdo_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `functions`
--
ALTER TABLE `functions`
  MODIFY `function_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_survey_issue`
--
ALTER TABLE `tbl_survey_issue`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_survey_issue_sub`
--
ALTER TABLE `tbl_survey_issue_sub`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_survey_sub`
--
ALTER TABLE `tbl_survey_sub`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_about`
--
ALTER TABLE `t_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `t_about_file`
--
ALTER TABLE `t_about_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `t_article`
--
ALTER TABLE `t_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `t_article_cat`
--
ALTER TABLE `t_article_cat`
  MODIFY `cat_article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_article_file`
--
ALTER TABLE `t_article_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_banner`
--
ALTER TABLE `t_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t_comment`
--
ALTER TABLE `t_comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_contact_file`
--
ALTER TABLE `t_contact_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `t_con_type`
--
ALTER TABLE `t_con_type`
  MODIFY `con_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_download_file`
--
ALTER TABLE `t_download_file`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `t_event`
--
ALTER TABLE `t_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_freq`
--
ALTER TABLE `t_freq`
  MODIFY `freq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_freq_cat`
--
ALTER TABLE `t_freq_cat`
  MODIFY `cat_freq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_gallery`
--
ALTER TABLE `t_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_gallery_file`
--
ALTER TABLE `t_gallery_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `t_km`
--
ALTER TABLE `t_km`
  MODIFY `km_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_km_cat`
--
ALTER TABLE `t_km_cat`
  MODIFY `cat_km_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_km_file`
--
ALTER TABLE `t_km_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_member`
--
ALTER TABLE `t_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `t_news_cat`
--
ALTER TABLE `t_news_cat`
  MODIFY `cat_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_news_file`
--
ALTER TABLE `t_news_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_page`
--
ALTER TABLE `t_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_page_cat`
--
ALTER TABLE `t_page_cat`
  MODIFY `cat_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_page_file`
--
ALTER TABLE `t_page_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_people`
--
ALTER TABLE `t_people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `t_people_cat`
--
ALTER TABLE `t_people_cat`
  MODIFY `cat_people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `t_people_file`
--
ALTER TABLE `t_people_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_pest`
--
ALTER TABLE `t_pest`
  MODIFY `pest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_pest_file`
--
ALTER TABLE `t_pest_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_product_cat`
--
ALTER TABLE `t_product_cat`
  MODIFY `cat_km_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_product_file`
--
ALTER TABLE `t_product_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_qa`
--
ALTER TABLE `t_qa`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_question`
--
ALTER TABLE `t_question`
  MODIFY `qn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_service`
--
ALTER TABLE `t_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_service_cat`
--
ALTER TABLE `t_service_cat`
  MODIFY `cat_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_service_file`
--
ALTER TABLE `t_service_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `t_status`
--
ALTER TABLE `t_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_survey`
--
ALTER TABLE `t_survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_vdo`
--
ALTER TABLE `t_vdo`
  MODIFY `vdo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `t_vdo_cat`
--
ALTER TABLE `t_vdo_cat`
  MODIFY `cat_vdo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
