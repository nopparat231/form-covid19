-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 08:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `Emp_id` int(11) NOT NULL,
  `Name_Surname` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Emp_id`, `Name_Surname`, `Department`, `Telephone`) VALUES
(0, 'ปัญจรัตน์ คำมูล (พยาบาล)', 'พยาบาล', '950466669'),
(1, 'นคร ไชยพันธ์(ร.ป.ภ)', 'รปภ', '615597644'),
(2, 'สากล สุกใส', 'รปภ', '993894699'),
(3, 'ร.ป.ภ.บํารุง มั่นยืน', 'รปภ', '926202072'),
(4, 'ทดแทน', 'รปภ', '999'),
(5, 'สุนทร ปองบุญ', 'ร้านค้า', '860225273'),
(6, 'สาคร บุตรละ', 'ร้านค้า', '983909278'),
(7, 'ฐิตาภา บุญเนื่อง', 'ร้านค้า', '983909278'),
(8, 'สาคร บุตรละ', 'ร้านค้า', '929507518'),
(9, 'ทิพวรรณ​ ศรีเกตุ', 'ร้านค้า', '912404078'),
(10, 'บัวลอย เคนดัน', 'ร้านค้า', '636572686'),
(11, 'สิริ บุญเนื่อง', 'ร้านค้า', '988430608'),
(70041, 'มลฤดี..พิณรัตน์', 'Production Damper', '985236681'),
(70242, 'ภัทราภรณ์ บ้งกุล', 'Production Damper', '929436379'),
(70245, 'ผ่องศรีโทบูดดี', 'Production Damper', '612347075'),
(70269, 'ยุพิน โยพานี', 'Production PSA', '844329805'),
(70270, 'อุบลรัตน์ เภาขันธ์', 'Production Damper', '929701137'),
(70271, 'สายสุณี ณลำปาง', 'Production Damper', '613249059'),
(70295, 'ณัฐภาส ไกรมณี', 'HR&Admin', '819105487'),
(70296, 'ชานนท์ สิริ', 'HR&Admin', '879304372'),
(70398, 'นภัสวรรณ คำเฮือง', 'Production Damper', '856372755'),
(70419, 'พรนภา ทองไทยสง', 'Production Damper', '924619293'),
(70496, 'ทัศนีย์ กมุทชาติ', 'Production Damper', '862125056'),
(70511, 'จารุวรรณ จิตรไชย', 'Production Damper', '800487848'),
(70512, 'จารุวรรณ จิตชัย', 'Inspection HDD', '954261337'),
(70517, 'นภัสสร เจริญยิ่ง', 'QA', '650744147'),
(70520, 'ไพริน หงษ์แพงจืตร', 'Production Damper', '862184502'),
(70529, 'สุรีวัลย์ วงษ์นิกร', 'HR&Admin', '860104530'),
(70545, 'สุพิณ แก้วชื่น', 'HR&Admin', '854646469'),
(70558, 'แสงเดือน ขุนวงค์', 'QA', '636576430'),
(70580, 'สิริศักดิ์ เจือจันทร์', 'Production Damper', '980127763'),
(70603, 'อุไรวรรณ ชินนอก', 'Production OEM', '879706768'),
(70611, 'พิทักษ์ ภูผาเงิน', 'Production Damper', '636572231'),
(70612, 'บังอร พลเสน', 'Production Damper', '933471860'),
(70625, 'มัทรา สุทธิพรมณีวัฒน์', 'Production PSA', '982747302'),
(70626, 'อริษา แซ่เตียว', 'Production Damper', '806428132'),
(70627, 'เจนนภา สุนิรันภา', 'QA', '822693941'),
(70628, '', '', '999'),
(70629, 'ณัฐพล จันทรสุริยา', 'Production Damper', '985925592'),
(70636, 'สุรีรัตน์ วงษ์นิกร', 'Production OEM', '892256498'),
(70641, 'นาย​ ปริญญา​ มาลัย​งาม', 'Production Damper', '950030419'),
(70652, 'กาญจนา เนตรสว่าง', 'Production Damper', '930481463'),
(70655, 'ธนวัต ทรัพย์การดี', 'Production Damper', '935285493'),
(70656, 'ประสิทธิ์ โฉลกดี', 'Production Damper', '931125419'),
(70658, 'กัลยา โทบุดดี', 'QA', '612584682'),
(70672, 'น้ำทิพย์ หันจางสิทธิ์', 'Production PSA', '630143898'),
(70683, 'ชานนท์ บุญลุุุมา', 'Production Damper', '620148739'),
(70691, 'วิษณุ บุญดี', 'Production OEM', '868582643'),
(70699, 'ดารณี ดาศรี', 'QA', '621837716'),
(70715, 'วาสนา จันทร์สุริยา', 'QA', '972072535'),
(70725, 'ดวงหทัย สุขประเสริฐ', 'Production PSA', '610743601'),
(70742, 'วราภรณ์ งอนไถ', 'Production PSA', '621371327'),
(70743, 'สุมินตรา สุขใจ', 'Production PSA', '926266067'),
(70757, 'นางสาวทิพย์วัลย์ เมืองแสน', 'QA', '923528674'),
(70791, 'นายเมธี ทองไทยสง', 'Production Damper', '933860040'),
(70811, 'นิภาพร วิลาศ', 'Production PSA', '923871334'),
(70813, 'สุกัญญา สุขดี', 'Production PSA', '635932219'),
(70831, 'อาทิตย์ ดังโพนทอง', 'Production Damper', '636706984'),
(70849, 'น้อย แสนสนุก', 'Facility', '820103878'),
(70866, 'อุทัยวรรณ บุดดาเวียง', 'Production OEM', '847995235'),
(70867, 'สาธิมา บัวสาลี', 'Production Damper', '929126173'),
(70901, 'รัตติกาล จิ๋วประเสริฐ', 'QA', '924018045'),
(70902, 'สุกัญญาคะเชนรัมย์', 'QA', '806097940'),
(70914, 'สุขวัญชัย โพธิ์ศรี', 'Production Damper', '957614993'),
(70916, 'จินดาภร สุวรรณรัตน์', 'QA', '827164823'),
(70920, 'นนธวัช ณ ลำปาง', 'Production Damper', '983344186'),
(70921, 'นิติพัทธ์ ชูญาติ', 'Production Damper', '886753129'),
(70941, 'กาญจนสุภา แวดอุดม', 'QA', '890826582'),
(70954, 'นิตยา บุญเหล็ก', 'Production PSA', '935109902'),
(70961, '', '', ''),
(70962, 'จินต์ณิกา ตราปราบ', 'Production PSA', '828456947'),
(70982, 'เบญจมาพร สังมะณี', 'Production PSA', '988509108'),
(70987, 'ลำพูน แซ่อึง', 'Production Damper', '648210306'),
(70994, 'ชาลินีบุตรใหญ่', 'Production Damper', '618855154'),
(71012, 'อธิพงษ์ นนท์ศิริ', 'Production Damper', '881262422'),
(71023, 'วรากร ศรีวงญาติ', 'Warehouse', '980061012'),
(71027, 'ณัตพล กันทราช', 'Production Damper', '951614776'),
(71029, 'อภิสิทธิ์ ทรัพย์สมบูรณ์', 'Production Damper', '918016627'),
(71030, 'เกตุนรินทร์ มะสิทธิ์', 'Production Damper', '986281937'),
(71031, 'เอกราช นาไพรวัน', 'Warehouse', '992844871'),
(71033, 'นาย วรากร ศรีวงญาติ', 'Warehouse', '980061012'),
(71034, 'นายกิตติศักดิ์ วุฒิกุลเรืองกิตต์', 'Warehouse', '944950967'),
(71035, 'กชพร วงศ์แก้วมา', 'HR&Admin', '922622459'),
(71036, 'อิสรีย์ เรืองศรี', 'HR&Admin', '817813275'),
(71037, 'รัชพล อุณหกานต์', 'Production Damper', '929211056'),
(276081, 'นายนคร. ไชยพันธ์', 'รปภ', '615597644'),
(1008325, 'ณัฏ​ฐ​นันท์​ เอี่ยมสอาด', 'Production Damper', '929313598'),
(1008336, 'ดวงเดือน ป้องงาม', 'Production Damper', '656623219'),
(1008339, 'จำลอง แก่นเขียว', 'Production Damper', '982606574'),
(1008341, 'จริสตา ภวะวิจารณ์', 'Production Damper', '924821273'),
(1008349, 'กุณฑลี เพ็ชรพล', 'Production Damper', '811020349'),
(1008365, 'นนท์ธิตา ไชยายงค์', 'Production Damper', '925791275'),
(1008380, 'ระพีพรรณ​ อ่อนพุ่ม', 'Production Damper', '847747838'),
(1008386, 'สายรุ้ง แสนเตจ๊ะ', 'Production Damper', '870847457'),
(1008392, 'แสงอรุณ คามนา', 'Production Damper', '926683532'),
(1008399, 'สุชาดา​ วัน​แก้ว', 'Production Damper', '926260430'),
(1008401, 'สุกัญญา คำเฮือง', 'Production Damper', '843772565'),
(1008406, 'สุริยันต์ จันทอง', 'Production PSA', ''),
(1008408, 'อุทัยรัตน์ เลิศสระน้อย', 'Production Damper', '659269423'),
(1008456, 'สายรุ้ง จุลมุสิ', 'Production OEM', '983601723'),
(1008461, 'อัญชลี แสนชัย', 'Supplychain', '634236263'),
(1008466, 'ยุทธนา จำปาทิพย์', 'Production OEM', '892133962'),
(1008468, 'กนก โสภโณวงศ์', 'Engineer', '968906675'),
(1008493, 'อรรนพ เรืองสุวรรณ', 'QA', '841354466'),
(1008494, 'อัครวิทย์ สิงหา', 'Tooling', '890570331'),
(1008507, 'ประธาน​ ชี​สังวร', 'Tooling', '879038770'),
(1008510, 'เสกศักดิ์ มินช่าง', 'Tooling', '817575671'),
(1008513, 'วิสูตร โอกาส', 'Production Damper', '843429676'),
(1008534, 'ปภาวรืนท์ สังวาลบ์', 'QA', '815513065'),
(1008535, 'รำไพ บุญใบ', 'QA', '936540020'),
(1008537, 'สายไหม ทรทึก', 'QA', '860421134'),
(1008539, 'สุชาติ สดใส', 'QA', '655562868'),
(1008544, 'สุวิทย์ ทองสาคู', 'QA', '619088996'),
(1008557, 'กิตติพงศ์ ดำดง', 'Facility', '924671343'),
(1008573, 'วีรภัทร มาลี', 'Supplychain', '636493989'),
(1011038, 'ธัชนิชา​ คงเมือง', 'Production Damper', '870270811'),
(1015649, 'ปราชญ์ วิเศษศรี', 'Production Damper', '945495028'),
(1015652, 'สายชล สุปะทัง', 'Production PSA', '983083363'),
(1016381, 'ธัญชนิศรา ปานนวม', 'Production OEM', '885829330'),
(1016382, 'ขวัญดาว..วงษ์เครือวัลย์', 'Production Damper', '925594486'),
(1016383, 'อำภา โพธิอรุณ', 'Production Damper', '926127338'),
(1017057, 'Sukanya Prasertsung', 'QA', '899203494'),
(1017988, 'นภสร ไม้อ่อน', 'Production Damper', '979694424'),
(1018586, 'หทัยขวัญ สารวงษ์', 'Production Damper', '903857494'),
(1018589, 'สมหวัง นิกรรัมย์', 'Production Damper', '800693692'),
(1018794, 'สายัญต์. แก้วพิกุล', 'Production OEM', '800981086'),
(1018800, 'สุทธิชา ศิลา', 'Production PSA', '890390614'),
(1018955, 'จเด็จ แพเขียว', 'Production Damper', '927326158'),
(1018956, 'อภิชาติ เกตุอัมพร', 'QA', '894546142'),
(1019555, 'อัจฉราภรณ์ ยันต์ชัย', 'Production OEM', '625357986'),
(1019557, 'นิวัฒน์ จริยามา', 'Production Damper', '806611450'),
(1019558, 'สุภาพร ชินตะขบ', 'Production Damper', '912525375'),
(1019559, 'ชำนาญ รอดวินิจ', 'Production Damper', '927920489'),
(1019577, 'กนกศรี ดวนสูง', 'Production PSA', '930873630'),
(1019589, 'เพ็ญตกาล พิมสิงห์', 'Production Damper', '621206377'),
(1019867, 'ปริญญา​ ​วงค์​ดวง​ผา', 'Production Damper', '983173996'),
(1021127, 'อนุชาติ วันทา', 'Production OEM', '890081756'),
(1021135, 'วีรชาติ เภาขันธ์', 'Facility', '616414745'),
(1021157, 'นายอนนท์ ศรีอาจ', 'Warehouse', '875943671'),
(1021162, 'พลภัฑร์ สมัยกลาง', 'Tooling', '870846243'),
(1021674, 'จีรศักดิ์ โยพานี', 'Production Damper', '986595606'),
(1021886, 'Rossarin Konthong', 'Supplychain', '824641624'),
(1022097, 'อลิษา เจริญสุข', 'Production Damper', '860975903'),
(1022199, 'มิ่งขวัญ บางสอน', 'Production Damper', '928812506'),
(1022201, 'ปัญญา เหมือนครุฑ', 'Production Damper', '817724492'),
(1022203, 'สมร สันโดษ', 'Production Damper', '876971956'),
(1022207, 'ไพรริณย์ ภูผาเงิน', 'Production Damper', '870300301'),
(1022368, 'ประภัสรินทร์ มุ่งสิน', 'Production Damper', '985615350'),
(1022369, 'ภรณ์ภูษณะ ปิงเมือง', 'Production Damper', '800593044'),
(1022370, 'นฤมล​ คำงาม', 'Production Damper', '885023219'),
(1022376, 'ทิพย์สุดา โกมล', 'Production PSA', '928610705'),
(1022378, 'สุวรรณา นากเสวก', 'Production PSA', '984915259'),
(1022381, 'วิลัยวรรณ บุญสุข', 'Production Damper', '870725308'),
(1022389, 'สนีย์ เหมือนหัวหนอง', 'Production Damper', '844959974'),
(1022394, 'กลอยใจ ด้วงตะกั่ว', 'Production Damper', '924381137'),
(1022395, 'ดอกอ้อย สุหญ้านาง', 'QA', '873407549'),
(1022441, 'สุริยันต์​จ​ันทร์เมือง', 'Facility', '925153610'),
(1022442, 'สิทธิชัย การสมงาม', 'Production PSA', '878408639'),
(1022444, 'ณัฐ คำมงคล', 'Production Damper', '929967002'),
(1022446, 'ณัฐวุฒิ คุณมี', 'Production Damper', '923952995'),
(1022448, 'วงทอง วงศ์จรัส', 'Production OEM', '989144529'),
(1022450, 'สายัญ คำหอม', 'Production Damper', '800712859'),
(1022454, 'สุบิน ประสงค์ผล', 'Production Damper', '843794480'),
(1022458, 'ธัญญรัตน์ คำหอม', 'Production PSA', '870179824'),
(1022459, 'ละอองดาว แฮดเฟื้อย', 'Production Damper', '903914886'),
(1022486, 'นางนันทภัค บุญพีระพัฒน์', 'Production Damper', '999'),
(1022500, 'สาริกา บัวทิพย์', 'Production Damper', '808161747'),
(1022501, 'พรรณวดี บุดน้อย', 'Production Damper', '616624339'),
(1022503, 'รัชนี คูณมา', 'Production Damper', '821982975'),
(1022504, 'ทิพย์ภวัลย์ งานดี', 'Production PSA', '623469399'),
(1022505, 'สุกัญญา เฉิดแผ้ว', 'Production PSA', '982491137'),
(1022510, 'คัทรียา วนสวัสดิ์', 'Production Damper', '899286065'),
(1022512, 'ใกล้รุ่ง เม่นสาย', 'Production Damper', '817763358'),
(1022606, 'อ่อนจันทร์ แร่ทอง', 'QA', '890024072'),
(1022617, 'อริษา​ ชาติศรี', 'Production Damper', '985374472'),
(1022618, 'ประกายแสง ศิริโส', 'Production Damper', '984302796'),
(1022619, 'คชาภรณ์ ศิริภักดิ์', 'Production Damper', '616036567'),
(1022691, 'ปราณี ปาระดี', 'QA', '818256529'),
(1022894, 'เจษฎา อ่อนทอง', 'Facility', '822840800'),
(1022942, 'ธัชนิษฐ์ แซ่ฮึง', 'QA', '981535616'),
(1022961, 'ปราณี ปาระดี', 'QA', '918256529'),
(1023240, 'ปรัชญา เปรมศักดิ์เสถียร', 'HR&Admin', '896917522'),
(1023642, 'กฤตภาส พาณิขย์พล', 'QA', '805398265'),
(1023998, 'ปฐมพร ทิวาลัย', 'Tooling', '984050799'),
(1024013, 'Bundit Saikaew', 'Facility', '816158688'),
(1024014, 'อรยา เอี่ยมนายา', 'HR&Admin', '849166065'),
(1024023, 'วีรชัย สารบรรณ', 'Production PSA', '853609804'),
(1024193, 'ปภาดา เฉยทัม', 'QA', '927416668'),
(1027219, 'อาทิตย์ วิเศษวัน', 'Production Damper', '927102495'),
(1028325, 'อัญจนาภาสุ์ มหัคคตจิตต์', 'Finance&Account', '941456592'),
(1028326, 'วิลัยวรรณ จันทะมา', 'Finance&Account', '841060552'),
(1028334, 'ปภณสรรค์ โรจนากาศ', 'Engineer', '941492553'),
(1028335, 'บุญเริง คนไว', 'Production Damper', '923689520'),
(1028338, 'บุญเริง คนไว', 'Production Damper', '923689520'),
(1028340, 'สุวรรณษา เจดีย์', 'Supplychain', '996549363'),
(1028343, 'วันชัย บุญหนัก', 'Engineer', '909737599'),
(1028346, 'ธนัญพร​ ดวงชื่น', 'Finance&Account', '830428249'),
(1028347, 'ชัยวัฒน์​ วงษาธรรม', 'Facility', '862268615'),
(1028359, 'ยอด.. วงษ์เครือวัลย์', 'Production Damper', '806162518'),
(1028360, 'อภิชาติ แสนเจจ๊ะ', 'Production Damper', '871777969'),
(1028361, 'อดิศักดิ์ ศรีมนตรี', 'Production Damper', '614379550'),
(1028362, 'ตั้ม อาญาเมือง', 'QA', '624328326'),
(1028363, 'สุฑาทิพย์ พยัคฆ์เพศ', 'QA', '928863847'),
(1028364, 'พัทธานันท์ ทาระ', 'QA', '616686459'),
(1028366, 'ราชัน ช้างน้อย', 'Production Damper', '615862557'),
(1028367, 'ชัยรัตน์ ศรียันต์', 'Production Damper', '904810433'),
(1028368, 'อิสระพงษ์ ละภักดี', 'Production Damper', '917364485'),
(1028369, 'ธีรพงษ์ ผ่องพรรณ์', 'Production Damper', '983873506'),
(1028370, 'มาลินี ถนอมสุข', 'Supplychain', '824641642'),
(1028372, 'สรายุทธ บัวรุ่งสวัสดิ์', 'Production Damper', '626186168'),
(1028375, 'ศิริขวัญ มีผล', 'Tooling', '844483209'),
(1028376, 'อนุชา อุทปา', 'Tooling', '624575390'),
(1028377, 'กฤษณะ เพ็ชรวงศ์', 'Engineer', '843541777'),
(1028380, 'จำลอง จันทร์วงศ์', 'Production Damper', '810005365'),
(1028381, 'วายุ จันประสาท', 'Production Damper', '926748056'),
(1028382, 'สุนิสา จิ๋วประเสริฐ', 'Production PSA', '933267205'),
(1028383, 'ลลิตา ต่อน้อย', 'Production PSA', '623122709'),
(1028385, 'น.ส.ธันย์นิชา ธวัชพัฒนดิษฐ์', 'QA', '860942038'),
(1028386, 'ธิระพงศ์ ธิทำมา', 'Warehouse', '929520155'),
(1028389, 'กัมปนาท เครือผือ', 'Engineer', '862406415'),
(1028392, 'คมสันต์ แพงแสง', 'Production OEM', '981781003'),
(1028393, 'ปริวัตร เหล่าบัว', 'Production PSA', '878658057'),
(1028396, 'ถาวร โคตรดก', 'Production PSA', '989278269'),
(1028397, 'วรเมธ สำราญเริญ', 'Production PSA', '636468698'),
(1028398, 'สมเกียรติ วิลาศ', 'QA', '610707576'),
(1028399, 'วันวิสาข์ โพธิ์ศรี', 'QA', '624573829'),
(1028401, 'เกริกศักดิ์ กุญแจกล', 'HR&Admin', '819492467'),
(1028404, 'อุไรวรรณ แสนสุริวงศ์', 'QA', '925828187'),
(1028407, 'อัษฎายุธ พิมพานนท์', 'Production PSA', '889993621'),
(1028409, 'นัทธพงศ์ กันใจ', 'Production PSA', '931798063'),
(1028410, 'เมธา หาระมี', 'Production PSA', '807851312'),
(1028411, 'วราภรณ์ หนูน้อย', 'QA', '086-888366'),
(1028412, 'นาถอนงค์ ศรีนอก', 'Production PSA', '629873909'),
(1028415, 'นิคม เพ็งจางศ', 'Production Damper', '613624517'),
(1028417, 'กิตติชัย ราดภูเขียว', 'Production PSA', '656475466'),
(1028419, 'นิภาภรณ์ เกตุแก้ว', 'Supplychain', '835546539'),
(1028420, 'เกียรติศักดิ์ สุขพรม', 'Production PSA', '656625009'),
(1028421, 'นิคม แสงเงิน', 'Warehouse', '654295178'),
(1028423, 'ขัตติยพร ธระเสนา', 'Supplychain', '909328793'),
(1028427, 'เจษณี ประเสริฐสังข์', 'Supplychain', '817895071'),
(1028428, 'ศรัญญา รุ่งอรุณสว่าง', 'Finance&Account', '933626915'),
(1028429, 'เกียรติศักดิ์ สุขพรม', 'Production PSA', '656625009'),
(1028431, 'ชัยวัฒน์ รัตน์วิทยากรณ์', 'IT', '896038912'),
(1028433, 'เดชธิป นามมนตรี', 'Production Damper', '629862089'),
(1028437, 'ปุณณวิช ไม้อ่อน', 'Production Damper', '984784477'),
(1028438, 'ปัญญา กุลสง', 'Production PSA', '923387121'),
(1028439, 'ธนชัย ผุยภูเขียว', 'Production PSA', '933344938'),
(1028441, 'จีรภา ไชยเพ็ชร', 'Safty', '880538789'),
(1028442, 'สุริยงค์ ทองมี', 'Engineer', '615032426'),
(1028443, 'จารุวรรณ แต้มศรี', 'Supplychain', '632695146'),
(1028444, 'ณัฐพงษ์ ป่าวสง่า', 'Production Damper', '972160175'),
(1028446, 'ณัฐพงศ์ นาบ้านมุ่ง', 'Production PSA', '952609756'),
(1028448, 'ปาริชาต วงษ์คลัง', 'QA', '948501693'),
(1028451, 'พิชัย ภูเฮืองแก้ว', 'Production Damper', '811372835'),
(1028452, 'ภูมรินทร์ องอาจ', 'Engineer', '625189975'),
(1028454, 'คุณาพร กาลพัฒน์', 'Production Damper', '928709862'),
(1028455, 'ณัฐพล สารจันทร์', 'Production Damper', '828711053'),
(1028456, 'จรรยา​ ธรรม​มา', 'Warehouse', '845922231'),
(1028458, 'ชุติมา หวังรุ่งวิชัยศรี', 'Supplychain', '886667854'),
(1028459, 'สถาพร เอี่ยมสอาด', 'Production Damper', '984588153'),
(1028460, 'สรวิศ สุวรรณศิลป์', 'Production Damper', '614871562'),
(1028461, 'ณรงค์ศักดิ์ รักไร่', 'Warehouse', '625253161'),
(1028462, 'ภัทรวดี พวงสุวรรณ', 'Finance&Account', '882124469'),
(1028463, 'โศภณ รวมเงิน', 'Engineer', '967838881'),
(1028464, 'สุภารัตน์ สโมสร', 'Supplychain', '845660682');

-- --------------------------------------------------------

--
-- Table structure for table `emp_check_form`
--

CREATE TABLE `emp_check_form` (
  `emp_check_id` int(11) NOT NULL COMMENT 'id รันออโต้',
  `emp_check_shift` varchar(255) NOT NULL COMMENT 'กะ',
  `emp_check_emp_id` int(11) NOT NULL COMMENT 'รหัสพนักงาน',
  `emp_check_2` int(11) NOT NULL COMMENT 'ข้อ2',
  `emp_check_3` int(11) NOT NULL COMMENT 'ข้อ3',
  `emp_check_status` int(11) NOT NULL COMMENT 'ผล',
  `emp_check_time` varchar(255) NOT NULL COMMENT 'เวลาที่ทำ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_check_form`
--

INSERT INTO `emp_check_form` (`emp_check_id`, `emp_check_shift`, `emp_check_emp_id`, `emp_check_2`, `emp_check_3`, `emp_check_status`, `emp_check_time`) VALUES
(69, 'กะเช้า', 70641, 1, 0, 1, 'วันศุกร์ที่ 27 สิงหาคม 2564 18:03'),
(70, 'กะเช้า', 1022097, 0, 0, 0, 'วันศุกร์ที่ 27 สิงหาคม 2564 18:06'),
(71, 'กะดึก', 70398, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 22:56'),
(72, 'กะเช้า', 1008325, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 22:59'),
(73, 'กะดึก', 70743, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:00'),
(74, 'กะเช้า', 71034, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:01'),
(75, 'กะเช้า', 70641, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:01'),
(76, 'กะเช้า', 1008534, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:01'),
(77, 'กะเช้า', 71034, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:02'),
(78, 'กะเช้า', 1023240, 0, 0, 0, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:04'),
(79, 'กะเช้า', 70398, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:05'),
(80, 'กะดึก', 70672, 0, 0, 0, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:05'),
(81, 'กะเช้า', 70245, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:08'),
(82, 'กะเช้า', 70245, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:11'),
(83, 'กะเช้า', 276081, 0, 0, 0, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:11'),
(84, 'กะเช้า', 71034, 1, 0, 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:23'),
(85, 'กะดึก', 71034, 0, 0, 0, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:23'),
(86, 'กะดึก', 32, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:04'),
(87, 'กะเช้า', 23, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:06'),
(88, 'กะดึก', 23, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:06'),
(89, 'กะดึก', 32, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:06'),
(90, 'กะเช้า', 32, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:07'),
(91, 'กะเช้า', 34, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:08'),
(92, 'กะดึก', 5, 1, 0, 0, 'วันพุธที่ 8 กันยายน 2564 21:08');

-- --------------------------------------------------------

--
-- Table structure for table `outsider_check_form`
--

CREATE TABLE `outsider_check_form` (
  `outsider_check_id` int(11) NOT NULL,
  `outsider_check_datepicker_date` varchar(255) NOT NULL,
  `outsider_check_timepicker_date` varchar(255) NOT NULL,
  `outsider_check_first_name` varchar(255) NOT NULL,
  `outsider_check_last_name` varchar(255) NOT NULL,
  `outsider_check_national_id` varchar(255) NOT NULL,
  `outsider_check_national_phone` int(11) NOT NULL,
  `outsider_check_agency` varchar(255) NOT NULL,
  `outsider_check_location_out` varchar(255) NOT NULL,
  `outsider_check_contact` varchar(255) NOT NULL,
  `outsider_check_location_in` varchar(255) NOT NULL,
  `outsider_check_contact_matter` varchar(255) NOT NULL,
  `outsider_check_group1` varchar(255) NOT NULL,
  `outsider_check_group2` varchar(255) NOT NULL,
  `outsider_check_group3` varchar(255) NOT NULL,
  `outsider_check_vcc` varchar(255) NOT NULL,
  `outsider_check_group4` varchar(255) NOT NULL,
  `outsider_check_file` varchar(255) NOT NULL,
  `outsider_check_file1` varchar(255) NOT NULL,
  `outsider_check_status` int(11) NOT NULL,
  `outsider_check_time` varchar(255) NOT NULL,
  `outsider_check_timepicker_time_in` varchar(255) NOT NULL,
  `outsider_check_timepicker_time_out` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outsider_check_form`
--

INSERT INTO `outsider_check_form` (`outsider_check_id`, `outsider_check_datepicker_date`, `outsider_check_timepicker_date`, `outsider_check_first_name`, `outsider_check_last_name`, `outsider_check_national_id`, `outsider_check_national_phone`, `outsider_check_agency`, `outsider_check_location_out`, `outsider_check_contact`, `outsider_check_location_in`, `outsider_check_contact_matter`, `outsider_check_group1`, `outsider_check_group2`, `outsider_check_group3`, `outsider_check_vcc`, `outsider_check_group4`, `outsider_check_file`, `outsider_check_file1`, `outsider_check_status`, `outsider_check_time`, `outsider_check_timepicker_time_in`, `outsider_check_timepicker_time_out`) VALUES
(37, '27-08-2021', '17:24', 'rwer', 'wer', '345345', 345345, 'rtgfg', 'dfgdfg', 'dfgfd', 'dfg', 'dfg', '1', '1', '1', '', '0', '', '', 1, 'วันศุกร์ที่ 27 สิงหาคม 2564', '', ''),
(38, '27-08-2021', '18:03', 'qwe', 'qwe', '234', 234, '234', '234', '234', '234', '234', '1', '1', '1', '', '0', '', '', 1, 'วันศุกร์ที่ 27 สิงหาคม 2564 18:03', '', ''),
(39, '27-08-2021', '19:22', 'dfsd', 'sdf', '123', 123, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '1', '1', '1', '', '0', '1630066935.PNG', '', 1, 'วันศุกร์ที่ 27 สิงหาคม 2564 19:22', '', ''),
(40, '27-08-2021', '17:24', 'rwer', 'wer', '345345', 345345, 'rtgfg', 'dfgdfg', 'dfgfd', 'dfg', 'dfg', '1', '1', '1', '', '0', '', '', 1, 'วันศุกร์ที่ 27 สิงหาคม 2564', '', ''),
(41, '27-08-2021', '18:03', 'qwe', 'qwe', '234', 234, '234', '234', '234', '234', '234', '1', '1', '1', '', '0', '', '', 1, 'วันศุกร์ที่ 27 สิงหาคม 2564 18:03', '', ''),
(42, '27-08-2021', '19:22', 'dfsd', 'sdf', '123', 123, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '1', '1', '1', '', '0', '1630066935.PNG', '', 1, 'วันศุกร์ที่ 27 สิงหาคม 2564 19:22', '', ''),
(43, '28-08-2021', '23:21', 'wer', 'wer', '234', 234, 'dfs', 'sdf', 'sdf', 'sdf', 'sdf', '1', '1', '1', '', '0', '', '', 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:22', '', ''),
(44, '28-08-2021', '23:23', 'we', 'hgj', '32432', 23434, '234', '345', '324', '34534', '345', '1', '1', '1', '', '0', '', '', 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:24', '', ''),
(45, '28-08-2021', '23:24', 'ww', 'erwe', '3423', 234, '234', '234', '23', '234', '234', '0', '0', '1', '', '1', '', '', 1, 'วันเสาร์ที่ 28 สิงหาคม 2564 23:24', '', ''),
(46, '29-10-2021', '01:02', 'sdf', 'sdf', '234', 234, 'dsf', 'sdf', 'sdf', 'sdf', 'sdf', '1', '1', '1', '', '1', '1635444168.jpg', '1635444164.jpg', 1, 'วันศุกร์ที่ 29 ตุลาคม 2564 01:02', '01:02', '01:02');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vode_id` int(11) NOT NULL,
  `vote_emp_id` int(11) NOT NULL,
  `vote_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vote_log`
--

CREATE TABLE `vote_log` (
  `vote_log_id` int(11) NOT NULL,
  `vote_number` int(11) NOT NULL,
  `vote_count` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `emp_check_form`
--
ALTER TABLE `emp_check_form`
  ADD PRIMARY KEY (`emp_check_id`);

--
-- Indexes for table `outsider_check_form`
--
ALTER TABLE `outsider_check_form`
  ADD PRIMARY KEY (`outsider_check_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vode_id`);

--
-- Indexes for table `vote_log`
--
ALTER TABLE `vote_log`
  ADD PRIMARY KEY (`vote_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_check_form`
--
ALTER TABLE `emp_check_form`
  MODIFY `emp_check_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id รันออโต้', AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `outsider_check_form`
--
ALTER TABLE `outsider_check_form`
  MODIFY `outsider_check_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `vote_log`
--
ALTER TABLE `vote_log`
  MODIFY `vote_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
