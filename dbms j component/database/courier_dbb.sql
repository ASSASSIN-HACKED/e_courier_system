-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2011 at 12:49 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courier_dbb`
--

-- --------------------------------------------------------

--
--
create table IF NOT EXISTS `registered_logins`(
   `id` varchar(20) primary key ,
  `office_username` varchar(20) unique,
   `password` varchar(20));
--
--

INSERT INTO registered_logins (`id`, `office_username`, `password`) VALUES
('1', 'Employee018', 'upvan101'),
('2', 'Management07', 'taaramaa101'),
('3', 'Boardmember', 'palladium1010');
-- --------------------------------------------------------

--
--

create table IF NOT EXISTS `office`(
  `oname` varchar(20) primary key,
  `phno` varchar(12) unique,
  `address` varchar(50) unique,
  `street` varchar(20) unique,
  `O_R` varchar(20) unique,
  `timing` varchar(30));

--
--

INSERT INTO office (`oname`, `phno`, `address`, `street`, `O_R`, `timing`) VALUES
('Thane', '02225857496','tembli junction ','victor plaza road','Mr. kotamraju', '2011-01-30 09:25:21'),
('Mumbai', '02225347496','101/2 happy mala','victoria place road','Mr. Bonnerjee' ,'2011-01-30 09:25:21'),
('Vellore', '02223337496','Nithik bawdi bldg.','Place road','Mr. Raghundi', '2011-01-30 09:25:21');

-- --------------------------------------------------------

--
--
create table IF NOT EXISTS `shipment`(
  `shipment_id` varchar(20) primary key,
   `time_of_booking` date,
   `group_no` varchar(20),
   `present_city` varchar(20),
   `status` varchar(20) default 'not_delivered',
   `comments` varchar(200));


--
--

INSERT INTO shipment (`shipment_id`, `time_of_booking`, `group_no`, `present_city`, `status`, `comments`) VALUES
(1,  '2017-01-30','group01','Thane','Delayed','Delay due to rain'),
(2,  '2019-01-30','group01','Mumbai','Delayed','Delay due to rain'),
(3,  '2018-01-30','group01','Mumbai','Delayed','Delay due to rain');

-- --------------------------------------------------------

--
--
create table IF NOT EXISTS `staff`(
  `staffid` varchar(20) primary key,
  `staff_name` varchar(20),
  `office_name` varchar(20) ,
  CONSTRAINT staff_fk FOREIGN KEY(office_name) REFERENCES office(oname) ON DELETE CASCADE,
  `email` varchar(20),
  `phno` varchar(15),
  `street` varchar(20),
  `address` varchar(50));


--
--

INSERT INTO staff VALUES
(1, 'Vilasrao','Thane', 'vlrao@gmail.com', '8332332013','Durgam Road','Opp. patil lake'),
(2, 'Vijay','Thane', 'bagha@gmail.com', '8332332023','balengub Road', '5/5 raniganj chowk'),
(3, 'Bokalu','Mumbai', 'boks21@gmail.com', '8332332014','abdur Road', 'pather downing nagar 2/3 plaza');

create table IF NOT EXISTS `customer`(
  `custid` varchar(20) primary key,
  `pin` int(6),
  `street` varchar(30),
  `name` varchar(20),
  `phno` varchar(15),
  `staff_id` varchar(20),
   CONSTRAINT customer_fk FOREIGN KEY(staff_id) REFERENCES staff(staffid) ON DELETE CASCADE);

   INSERT INTO customer VALUES
   (1, '400610','Abdur road','bala','9393939393',1),
   (2, '400611','Aklam road','Rama','9200101001',2),
   (3, '400001','Ranirmoy road', 'Raman','90030032111',3 );


create table IF NOT EXISTS courier(
   `item_id` varchar(20) primary key,
   `cust_id` varchar(20),
   `addresstobesent` varchar(50),
   `street` varchar(20),
   `quantityofitems` int(15),
   `weightinkg` decimal(20,2),
   `type` varchar(20),
   `bookmode` varchar(20) check(bookmode in('Online','Offline')),
   Constraint item_fk Foreign Key(cust_id) REFERENCES customer(custid) ON DELETE CASCADE);

   INSERT INTO courier VALUES
   (1,1, '5/3 paklampur nagar','Abul road',2,3.4,'expensive','Online'),
   (2,2, 'nina park 101','kalam road',3,2.5,'tensile','Online'),
   (3,3, '22 parganas avenue','Nirmoy road',1,1.9, 'fragile','offline' );
