--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sensors_data`
--

CREATE TABLE IF NOT EXISTS `tbl_sensors_data` (
  `sensors_data_id` int(11) NOT NULL,
  `sensors_temperature_data` varchar(30) NOT NULL,
  `sensors_data_date` date NOT NULL,
  `sensors_data_time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=484 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sensors_data`
--

INSERT INTO `record` (`id`, `value`, `date`, `time`) VALUES
(1, '28', '2017-08-08', '10:00:00'),
(2, '26', '2017-08-07', '10:10:00'),
(3, '36', '2017-08-06', '10:20:00'),
(4, '31', '2017-08-05', '10:30:00'),
(5, '30', '2017-08-04', '10:40:00'),
(6, '27', '2017-08-03', '10:50:00'),
(7, '28', '2017-08-02', '11:00:00'),
(8, '25', '2017-08-01', '11:10:00'),
(9, '27', '2017-07-31', '11:20:00'),
(10, '27', '2017-07-30', '11:30:00'),
(11, '36', '2017-07-29', '11:40:00');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sensors_data`
--
ALTER TABLE `tbl_sensors_data`
  ADD PRIMARY KEY (`sensors_data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sensors_data`
--
ALTER TABLE `tbl_sensors_data`
  MODIFY `sensors_data_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=484;

