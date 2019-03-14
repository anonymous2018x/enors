CREATE DATABASE `enors`;

-- 
-- creates student table 
-- 
CREATE TABLE `student_profiles` (
  `adm_no` int(4) NOT NULL,
  `student_first_name` varchar(10) NOT NULL,
  `student_last_name` varchar(10) NOT NULL,
  `class` varchar(8) NOT NULL,
  `stream` varchar(4) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `doa` date NOT NULL,
  `parent_id` int(8) NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- creates class table 
-- 
CREATE TABLE `class` (
  `id` int(4) NOT NULL,
  `class_teacher` int(4) NOT NULL,
  `class_secretary` int(4) NOT NULL,
  `stream` varchar(4) NOT NULL,
  `level` int(1) NOT NULL,
  `parent_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- creates staff table
-- 
CREATE TABLE `staff_profiles`(
  `id` int(4) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- creates book table
-- 
CREATE TABLE `books`(
  `book_no` varchar(10) NOT NULL,
  `book_type` varchar(10) NOT NULL,
  `publisher` varchar(15) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `class` int(1) NOT NULL,
  `isbn` int(10) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- creates exams holder table
-- 
CREATE TABLE `exams`(
  `exam_id` int(6) NOT NULL,
  `sd` date NOT NULL,
  `ed` date NOT NULL,
  `rd` date NOT NULL,
  `class` varchar(8) NOT NULL,
  `stream` varchar(4) NOT NULL,
  `description` varchar(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- creates admins table
-- 
CREATE TABLE `root`(
  `id` int(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- set the primary keys
-- 

-- student table
ALTER TABLE `student_profiles`
  ADD PRIMARY KEY (`adm_no`);

-- class table
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

-- staff table
ALTER TABLE `staff_profiles`
  ADD PRIMARY KEY (`id`);

-- book table
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_no`);

-- exams table
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

-- root table
ALTER TABLE `root`
  ADD PRIMARY KEY (`id`);