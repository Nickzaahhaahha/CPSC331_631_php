-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for northwind_db
CREATE DATABASE IF NOT EXISTS `northwind_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `northwind_db`;

-- Dumping structure for table northwind_db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `categoryid` int(11) NOT NULL COMMENT 'รหัสกลุ่มสินค้า',
  `categoryname` varchar(50) DEFAULT NULL COMMENT 'ชื่อกลุ่มสินค้า',
  `description` varchar(50) DEFAULT NULL COMMENT 'คำอธิบาย',
  `picture` blob DEFAULT NULL COMMENT 'ภาพ',
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`categoryid`, `categoryname`, `description`, `picture`) VALUES
	(1, 'umbrella corporation', 'good', _binary 0x6E69636B2E706E67),
	(2, 'honda', 'bad', _binary 0x686F6E64612E6A7067),
	(3, 'honda', 'honda', _binary 0x686F6E64612E6A7067),
	(4, 'honda', 'honda', _binary 0x686F6E64612E6A7067),
	(5, 'honda', 'honda', _binary 0x686F6E64612E6A7067);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table northwind_db.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(11) NOT NULL COMMENT 'รหัสลูกค้า',
  `companyname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อบริษัท',
  `contactname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อผู้ติดต่อ',
  `contacttitle` varchar(50) NOT NULL DEFAULT '' COMMENT 'ตำแหน่งผู้ติดต่อ',
  `address` varchar(50) NOT NULL DEFAULT '' COMMENT 'ที่อยู่',
  `city` varchar(50) NOT NULL DEFAULT '' COMMENT 'เมือง',
  `region` varchar(50) NOT NULL DEFAULT '' COMMENT 'ภูมิภาค',
  `postalcode` int(11) NOT NULL DEFAULT 0 COMMENT 'รหัสไปรษณีย์',
  `country` varchar(50) NOT NULL DEFAULT '' COMMENT 'ประเทศ',
  `phone` int(11) NOT NULL DEFAULT 0 COMMENT 'phone',
  `fax` int(11) NOT NULL DEFAULT 0 COMMENT 'หมายเลขแฟกซ์',
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.customers: ~1 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
REPLACE INTO `customers` (`customerid`, `companyname`, `contactname`, `contacttitle`, `address`, `city`, `region`, `postalcode`, `country`, `phone`, `fax`) VALUES
	(1, 'umberlla corporation', 'nickza', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'aaa', 'aaa', 9999, 'aaa', 987654321, 123456790),
	(2, 'umberlla corporation', 'nickza', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'aaa', 'aaa', 9999, 'aaa', 987654321, 123456790),
	(3, 'umberlla corporation', 'nickza', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'aaa', 'aaa', 9999, 'aaa', 987654321, 123456790),
	(4, 'umberlla corporation', 'nickza', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'aaa', 'aaa', 9999, 'aaa', 987654321, 123456790),
	(5, 'umberlla corporation', 'nickza', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'aaa', 'aaa', 9999, 'aaa', 987654321, 123456790);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table northwind_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `employeeid` int(11) NOT NULL COMMENT 'รหัสพนักงาน',
  `firstname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อ',
  `lastname` varchar(50) NOT NULL DEFAULT '' COMMENT 'นามสกุล',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT 'ตำแหน่ง',
  `birthdate` varchar(50) NOT NULL DEFAULT '' COMMENT 'วันเกิด',
  `hiredate` varchar(50) NOT NULL DEFAULT '' COMMENT 'วันจ้าง',
  `address` varchar(50) NOT NULL DEFAULT '' COMMENT 'ที่อยู่',
  `city` varchar(50) NOT NULL DEFAULT '' COMMENT 'อำเภอ',
  `region` varchar(50) NOT NULL DEFAULT '' COMMENT 'จังหวัด',
  `postalcode` int(11) NOT NULL DEFAULT 0 COMMENT 'รหัสไปรษณีย์',
  `country` varchar(50) NOT NULL DEFAULT '' COMMENT 'ประเทศ',
  `homephone` int(11) NOT NULL DEFAULT 0 COMMENT 'หมายเลขโทรศัพท์บ้าน',
  `extension` int(11) NOT NULL DEFAULT 0 COMMENT 'หมายเลขต่อภายใน',
  `reportsto` varchar(50) NOT NULL DEFAULT '0' COMMENT 'รายงานต่อ',
  PRIMARY KEY (`employeeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.employees: ~1 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
REPLACE INTO `employees` (`employeeid`, `firstname`, `lastname`, `title`, `birthdate`, `hiredate`, `address`, `city`, `region`, `postalcode`, `country`, `homephone`, `extension`, `reportsto`) VALUES
	(1, 'สุริยา', 'พุฒดวง', 'CEO', '9/2/2000', '9/2/2020', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ลอนดอน', 'ลอนดอน', 99999, 'อังกฤษ', 987654321, 912345678, 'employee'),
	(2, 'สุริยา', 'พุฒดวง', 'CEO', '9/2/2000', '9/2/2000', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ลอนดอน', 'ลอนดอน', 99999, 'อังกฤษ', 987654321, 912345678, 'employee'),
	(3, 'สุริยา', 'พุฒดวง', 'CEO', '9/2/2000', '9/2/2000', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ลอนดอน', 'ลอนดอน', 99999, 'อังกฤษ', 987654321, 912345678, 'employee'),
	(4, 'สุริยา', 'พุฒดวง', 'CEO', '9/2/2000', '9/2/2000', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ลอนดอน', 'ลอนดอน', 99999, 'อังกฤษ', 987654321, 912345678, 'employee'),
	(5, 'สุริยา', 'พุฒดวง', 'CEO', '9/2/2000', '9/2/2000', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ลอนดอน', '', 99999, 'อังกฤษ', 987654321, 912345678, 'employee');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table northwind_db.orderdetails
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderid` int(11) NOT NULL COMMENT 'รหัสใบสั่งซื้อ',
  `productid` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `unitprice` int(11) NOT NULL COMMENT 'ราคาต่อหน่วย',
  `quantity` int(11) NOT NULL COMMENT 'ปริมาณ',
  `discount` int(11) NOT NULL COMMENT 'ส่วนลด',
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.orderdetails: ~1 rows (approximately)
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
REPLACE INTO `orderdetails` (`orderid`, `productid`, `unitprice`, `quantity`, `discount`) VALUES
	(1, 1, 500, 1, 0),
	(2, 1, 500, 1, 0),
	(3, 1, 500, 1, 0),
	(4, 1, 500, 1, 0),
	(5, 1, 500, 1, 0);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;

-- Dumping structure for table northwind_db.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(11) NOT NULL COMMENT 'รหัสใบสั่งซื้อ',
  `customerid` int(11) NOT NULL COMMENT 'รหัสลูกค้า',
  `employeeid` int(11) NOT NULL COMMENT 'รหัสพนักงาน',
  `orderdate` varchar(50) NOT NULL DEFAULT '' COMMENT 'วันที่สั่งซื้อ',
  `requireddate` varchar(50) NOT NULL DEFAULT '' COMMENT 'วันที่ต้องการ',
  `shippeddate` varchar(50) NOT NULL DEFAULT '' COMMENT 'วันที่ส่ง',
  `shipvia` varchar(50) NOT NULL DEFAULT '' COMMENT 'วิธีจัดส่ง',
  `freight` varchar(50) NOT NULL DEFAULT '' COMMENT 'ค่าขนส่ง',
  `shipname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อผู้รับ',
  `shipaddress` varchar(50) NOT NULL DEFAULT '' COMMENT 'ที่อยู่ผู้รับ',
  `shipcity` varchar(50) NOT NULL DEFAULT '' COMMENT 'เมื่อที่รับ',
  `shipregion` varchar(50) NOT NULL DEFAULT '' COMMENT 'ภูมิภาคที่รับ',
  `shippostalcode` int(11) NOT NULL DEFAULT 0 COMMENT 'รหัสไปรษณีย์',
  `shipcountry` varchar(50) NOT NULL DEFAULT '' COMMENT 'ประเทศ',
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.orders: ~1 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` (`orderid`, `customerid`, `employeeid`, `orderdate`, `requireddate`, `shippeddate`, `shipvia`, `freight`, `shipname`, `shipaddress`, `shipcity`, `shipregion`, `shippostalcode`, `shipcountry`) VALUES
	(1, 1, 1, '1/1/2021', '2/2/2021', '3/3/2021', 'เรือ', '10', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'AA', 52000, 'AA'),
	(2, 1, 1, '1/1/2021', '2/2/2021', '3/3/2021', 'เรือ', '10', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'AA', 52000, 'AA'),
	(3, 1, 1, '1/1/2021', '2/2/2021', '3/3/2021', 'เรือ', '10', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'AA', 52000, 'AA'),
	(4, 1, 1, '1/1/2021', '2/2/2021', '3/3/2021', 'เรือ', '10', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'AA', 52000, 'AA'),
	(5, 1, 1, '1/1/2021', '2/2/2021', '3/3/2021', 'เรือ', '10', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'AA', 52000, 'AA');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table northwind_db.products
CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `productname` varchar(50) DEFAULT NULL COMMENT 'ชื่อสินค้า',
  `supplierid` int(11) DEFAULT NULL COMMENT 'รหัสผู้จำหน่าย',
  `categoryid` int(11) DEFAULT NULL COMMENT 'รหัสกลุ่มสินค้า',
  `quantityperunit` int(11) DEFAULT NULL COMMENT 'ปริมาณต่อหน่วย',
  `unitprice` int(11) DEFAULT NULL COMMENT 'ราคาต่อหน่วย',
  `unitsinstock` int(11) DEFAULT NULL COMMENT 'ปริมาณในคลัง',
  `unitsonorder` int(11) DEFAULT NULL COMMENT '	ประมาณที่กำลังสั่งซื้อ',
  `reorderlevel` int(11) DEFAULT NULL COMMENT 'จุดสั่งซื้อ',
  `discontinued` tinyint(4) DEFAULT NULL COMMENT 'สถานภาพเลิกขาย',
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.products: ~1 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`productid`, `productname`, `supplierid`, `categoryid`, `quantityperunit`, `unitprice`, `unitsinstock`, `unitsonorder`, `reorderlevel`, `discontinued`) VALUES
	(1, 'nick', 0, 1, 24, 500, 999, 0, 10, 0),
	(2, 'nick', 0, 1, 24, 500, 999, 0, 10, 0),
	(3, 'nick', 0, 1, 24, 500, 999, 0, 10, 0),
	(4, 'nick', 0, 1, 24, 500, 999, 0, 10, 0),
	(5, 'nick', 0, 1, 24, 500, 999, 0, 10, 0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table northwind_db.shippers
CREATE TABLE IF NOT EXISTS `shippers` (
  `shipperid` int(11) NOT NULL COMMENT 'รหัสผู้ขนส่ง',
  `companyname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อบริษัทผู้ขนส่ง',
  `phone` int(20) NOT NULL COMMENT 'หมายเลขโทรศัพท์',
  PRIMARY KEY (`shipperid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.shippers: ~1 rows (approximately)
/*!40000 ALTER TABLE `shippers` DISABLE KEYS */;
REPLACE INTO `shippers` (`shipperid`, `companyname`, `phone`) VALUES
	(1, 'aaaa', 123),
	(2, 'aaaa', 123),
	(3, 'aaaa', 123),
	(4, 'aaaa', 123),
	(5, 'aaaa', 123);
/*!40000 ALTER TABLE `shippers` ENABLE KEYS */;

-- Dumping structure for table northwind_db.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplierid` int(11) NOT NULL COMMENT 'รหัสผู้จำหน่าย',
  `companyname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อบริษัทผู้จำหน่าย',
  `contactname` varchar(50) NOT NULL DEFAULT '' COMMENT 'ชื่อผู้ติดต่อ',
  `contacttitle` varchar(50) NOT NULL DEFAULT '' COMMENT 'ตำแหน่งผู้ติดต่อ',
  `address` varchar(50) NOT NULL DEFAULT '' COMMENT 'ที่อยู่',
  `city` varchar(50) NOT NULL DEFAULT '' COMMENT 'เมือง',
  `region` varchar(50) NOT NULL DEFAULT '' COMMENT 'ภูมิภาค',
  `postalcode` int(11) NOT NULL DEFAULT 0 COMMENT 'รหัสไปรษณีย์',
  `country` varchar(50) NOT NULL DEFAULT '' COMMENT 'ประเทศ',
  `phone` int(11) NOT NULL DEFAULT 0 COMMENT 'หมายเลขโทรศัพท์',
  `fax` int(11) NOT NULL DEFAULT 0 COMMENT 'หมายเลขแฟกซ์',
  PRIMARY KEY (`supplierid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table northwind_db.suppliers: ~1 rows (approximately)
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
REPLACE INTO `suppliers` (`supplierid`, `companyname`, `contactname`, `contacttitle`, `address`, `city`, `region`, `postalcode`, `country`, `phone`, `fax`) VALUES
	(1, 'CCDDD', 'AAAA', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'aa', 12345, 'SSS', 987654321, 786),
	(2, 'CCDDD', 'AAAA', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'aa', 12345, 'SSS', 987654321, 786),
	(3, 'CCDDD', 'AAAA', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'aa', 12345, 'SSS', 987654321, 786),
	(4, 'CCDDD', 'AAAA', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'aa', 12345, 'SSS', 987654321, 786),
	(5, 'CCDDD', 'AAAA', 'CEO', 'ห้องเลขที่ 221 บี ถนนเบเกอร์ กรุงลอนดอน', 'AA', 'aa', 12345, 'SSS', 987654321, 786);
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
