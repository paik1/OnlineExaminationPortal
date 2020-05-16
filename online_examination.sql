-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 11:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'Java'),
(4, 'PHP'),
(5, 'Python'),
(11, 'Angular');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, '#include<stdio.h>\r\nint main()\r\n{\r\n    char ch;\r\n    while(x=0;x<=255;x++)\r\n        printf(\"ASCII value of %d character %c\\n\", x, x);\r\n    return 0;\r\n}\r\n', 'The code generates an infinite loop', 'The code prints all ASCII values and its characters', 'Error: x undeclared identifier', 'Error: while statement missing', 2, 1),
(2, 'Which of the following is the correct usage of conditional operators used in C?', 'a>b ? c=30 : c=40;', 'a>b ? c=30;', 'max = a>b ? a>c?a:c:b>c?b:c', 'return (a>b)?(a:b)', 2, 1),
(3, 'What will be the output of the below code?\r\n#include<stdio.h>\r\n#include<math.h>\r\nint main()\r\n{\r\n   float n=1.54;\r\n   printf(\"%f,%f\\n\",ceil(n),floor(n));\r\n   return 0;\r\n}\r\n', '2.000000, 1.000000', '1.500000, 1.500000', '1.500000, 1.500000', '1.000000, 2.000000', 0, 1),
(4, 'What will be the output of the program?\r\n\r\n#include<stdio.h>\r\nint main()\r\n{\r\n    float d=2.25;\r\n    printf(\"%e,\", d);\r\n    printf(\"%f,\", d);\r\n    printf(\"%g,\", d);\r\n    printf(\"%lf\", d);\r\n    return 0;\r\n}\r\n', '2.2, 2.50, 2.50, 2.5', '2.2e, 2.25f, 2.00, 2.25', '2.250000e+000, 2.250000, 2.25, 2.250000', 'Error', 2, 1),
(5, 'If a function contains two return statements successively, the compiler will generate warnings. Yes/No ?', 'yes', 'no', 'may be', 'can\'t be determined', 0, 1),
(6, 'Point out the error in the program\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    int i;\r\n    #if A\r\n        printf(\"Enter any number:\");\r\n        scanf(\"%d\", &i);\r\n    #elif B\r\n        printf(\"The number is odd\");\r\n    return 0;\r\n}\r\n', 'Error: unexpected end of file because there is no matching #endif', 'The number is odd', 'Garbage values\r\n', 'None of the above', 0, 1),
(7, 'What will be the output of the program ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    float arr[] = {12.4, 2.3, 4.5, 6.7};\r\n    printf(\"%d\\n\", sizeof(arr)/sizeof(arr[0]));\r\n    return 0;\r\n}\r\n', '5', '4', '6', 'error', 3, 1),
(8, '#include<stdio.h>\r\nint main()\r\n{\r\n    int x=1, y=1;\r\n    for(; y; printf(\"%d %d\\n\", x, y))\r\n    {\r\n        y = x++ <= 5;\r\n    }\r\n    printf(\"\\n\");\r\n    return 0;\r\n}\r\n', '2 1\r\n3 1\r\n4 1\r\n5 1\r\n6 1\r\n7 0\r\n', '2 1\r\n3 1\r\n4 1\r\n5 1\r\n6 1\r\n', '2 1\r\n3 1\r\n4 1\r\n5 1\r\n', '2 2\r\n3 3\r\n4 4\r\n5 5\r\n', 0, 1),
(9, 'What will be the output of the program (Turbo C in 16 bit platform DOS) ?\r\n\r\n#include<stdio.h>\r\n#include<string.h>\r\n\r\nint main()\r\n{\r\n    char *str1 = \"India\";\r\n    char *str2 = \"BIX\";\r\n    char *str3;\r\n    str3 = strcat(str1, str2);\r\n    printf(\"%s %s\\n\", str3, str1);\r\n    return 0;\r\n}\r\n', 'IndiaBIX India', 'IndiaBIX IndiaBIX', 'India India', 'error', 3, 1),
(10, '.#include<stdio.h>\r\nint get();\r\n\r\nint main()\r\n{\r\n    const int x = get();\r\n    printf(\"%d\", x);\r\n    return 0;\r\n}\r\nint get()\r\n{\r\n    return 20;\r\n}\r\n', 'Garbage value', 'error', '20', '0', 2, 1),
(11, 'Which of the following is called address operator?', '*', '&', '-', '%', 1, 2),
(12, 'Which function is used to write a single character to console in C++?', 'cout.put(ch)', 'cout.putline(ch)', 'write(ch)', 'printf(ch)', 0, 2),
(13, 'Which of the following belongs to the set of character types?', 'char', 'wchar_t', 'only a', 'both a and b', 3, 2),
(14, 'In C++, what is the sign of character data type by default?\r\n', 'Signed', 'unsigned', 'Implementation dependent', 'Unsigned Implementation', 2, 2),
(15, 'It is guaranteed that a ____ has at least 8 bits and a ____ has at least 16 bits.', 'int, float', 'char, int', 'bool, char', 'char, short', 3, 2),
(16, 'Implementation dependent aspects about an implementation can be found in ____', '<implementation>', '<limits>', '<limit>', '<numeric>', 1, 2),
(17, '#include <iostream>\r\n    using namespace std;\r\n    int main()\r\n    {\r\n        int a = 5;\r\n        float b;\r\n        cout << sizeof(++a + b);\r\n        cout << a;\r\n        return 0;\r\n    }\r\n', '2 6', '4 6', '2 5', '4 5', 3, 2),
(18, 'What will happen when introduce the interface of classes in a run-time polymorphic hierarchy?', 'Separation of interface from implementation', 'Merging of interface from implementation', 'Separation of interface from debugging', 'Merging of interface from debugging', 0, 2),
(19, 'Which classes are called as mixin?', 'Represent a secondary design', 'Classes express functionality which represents responsibilities', 'Standard logging stream', 'Represent a priary design', 0, 2),
(20, 'In how many ways we can capture the external variables in the lambda expression?', '1', '2', '3', '4', 2, 2),
(21, 'What is the return type of the hashCode() method in the Object class?', 'Object', 'int ', 'long', 'void', 1, 3),
(22, 'Evaluate the following Java expression, if x=3, y=5, and z=10:\r\n++z + y - y + z + x++\r\n', '24', '23', '20', '25', 0, 3),
(23, 'Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?', 'javap tool', 'javaw command', 'Javadoc tool', 'javah command', 2, 3),
(24, 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'new List(false, 3)', 'new List(3, true)', 'new List(true, 3)', 'new List(3, false)', 1, 3),
(25, 'Which of the following is true about the anonymous inner class?', 'It has only methods', 'Objects can\'t be created', 'It has a fixed class name', 'It has no class name', 3, 3),
(26, 'What do you mean by nameless objects?', 'An object created by using the new keyword.\r\n', 'An object of a superclass created in the subclass.', 'An object without having any name but having a reference.', 'An object that has no reference.', 3, 3),
(27, 'Which of the following is an immediate subclass of the Panel class?', 'Applet class', 'Window class', 'Frame class', 'dialog class', 0, 3),
(28, 'Which option is false about the final keyword?', 'A final method cannot be overridden in its subclasses.', 'A final class cannot be extended.', 'A final class cannot extend other classes.', 'A final method can be inherited.', 2, 3),
(29, 'Which of these classes are the direct subclasses of the Throwable class?', 'RuntimeException and Error class', 'Exception and VirtualMachineError class', 'Error and Exception class', 'IOException and VirtualMachineError class', 2, 3),
(30, 'In which memory a String is stored, when we create a string using new operator?', 'Stack', 'String memory', 'Heap memory', 'Random storage space', 2, 3),
(31, 'How to define a function in PHP?', 'function {function body}', 'data type functionName(parameters) {function body}', 'functionName(parameters) {function body}', 'function functionName(parameters) {function body}', 3, 4),
(32, 'Type Hinting was introduced in which version of PHP?', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 6', 1, 4),
(33, 'What will be the output of the following PHP code?\r\n  <?php\r\n    function calc($price, $tax=\"\")\r\n    {\r\n        $total = $price + ($price * $tax);\r\n        echo \"$total\"; \r\n    }\r\n    calc(42);	\r\n    ?>\r\n', 'error', '0', '42', '84', 2, 4),
(34, 'A function in PHP which starts with __ (double underscore) is known as __________', 'Magic Function', 'Inbuilt Function', 'Default Function', 'User Defined Function', 0, 4),
(35, 'Which one of the following regular expression matches any string containing zero or one p?', 'p+', 'p*', 'P?', 'p#', 2, 4),
(36, 'Which one of the following lines need to be uncommented or added in the php.ini file so as to enable mysqli extension?', 'extension=php_mysqli.dll', 'extension=mysql.dll', 'extension=php_mysqli.dl', 'extension=mysqli.dl', 0, 4),
(37, 'Which one of the following statements can be used to select the database?', '$mysqli=select_db(\'databasename\');', 'mysqli=select_db(\'databasename\');', 'mysqli->select_db(\'databasename\');', '$mysqli->select_db(\'databasename\');', 3, 4),
(38, 'Which one of the following methods can be used to diagnose and display information about a MySQL connection error?', 'connect_errno()', 'connect_error()', 'mysqli_connect_errno()', 'mysqli_connect_error()', 2, 4),
(39, 'If there is no error, then what will the error() method return?', 'TRUE', 'FALSE', 'Empty String', '0', 2, 4),
(40, 'Which of the following statements invoke the exception class?', 'throws new Exception();', 'throw new Exception();', 'new Exception();', 'new throws Exception();', 1, 4),
(41, 'Which of these in not a core data type?', 'Lists', 'Dictionary', 'Tuple', 'class', 3, 5),
(42, 'Given a function that does not return any value, What value is thrown by default when executed in shell.', 'int', 'bool', 'void', 'none', 3, 5),
(43, 'What will be the output of the following Python code?\r\n>>>str=\"hello\"\r\n>>>str[:2]\r\n>>>\r\n', 'he\r\n', 'lo', 'elloh', 'hello', 0, 5),
(44, 'What is the return type of function id?', 'int', 'float', 'bool', 'dict', 0, 5),
(45, 'What error occurs when you execute the following Python code snippet?\r\napple=mango', 'Syntax error', 'Name error', 'Type error', 'Value error', 1, 5),
(46, 'What is the type of each element in sys.argv?', 'set', 'list', 'tuple', 'string', 3, 5),
(47, 'What is the length of sys.argv?', 'number of arguments', 'number of arguments+1', 'number of arguments-1', 'None of the above', 1, 5),
(48, 'How are keyword arguments specified in the function heading?', 'one-star followed by a valid identifier', 'one underscore followed by a valid identifier', 'two stars followed by a valid identifier', 'two underscores followed by a valid identifier', 2, 5),
(49, 'What will be the output of the following Python code?\r\ndef foo():\r\n    return total + 1\r\ntotal = 0\r\nprint(foo())\r\n', '0', '1', 'error', 'none of the above', 1, 5),
(50, 'Which function is called when the following Python code is executed?\r\n		f = foo()\r\n		format(f)\r\n', 'format()', '__format__()', 'str()', '__str__()', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `total_qus` int(20) NOT NULL,
  `per` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `email`, `cat_id`, `total_qus`, `per`, `date`) VALUES
(1, 'kiran.pai95@gmail.com', 1, 2, '100', ''),
(2, 'kiran.pai95@gmail.com', 1, 2, '0', ''),
(3, 'kp@gm.co', 1, 2, '0', ''),
(4, 'kiran.pai95@gmail.com', 1, 2, '0', ''),
(5, 'kiran.pai95@gmail.com', 1, 2, '100', '2020-05-16 12:57:41'),
(6, 'kiran.pai95@gmail.com', 1, 2, '50', '2020-05-16 12:59:13'),
(7, 'kiran.pai95@gmail.com', 1, 2, '50', '2020-05-16 16:49:24'),
(8, 'kp@gm.co', 1, 2, '0', '2020-05-16 17:06:38'),
(9, 'kp@gm.co', 1, 2, '0', '2020-05-16 17:41:53'),
(10, 'kiran.pai95@gmail.com', 5, 10, '0', '2020-05-16 19:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(6, 'Kiran', 'kp@gmail.com', 'kiranpai', 'C:xampp	mpphp17D0.tmp'),
(7, 'Kiran Pai', 'kp@gm.co', 'kiranpai', 'Mi Basic Wired Headset with Mic 399.jpeg'),
(8, 'Kiran Pai', 'kiran.pai95@gmail.com', 'kiranpai', 'Mi Basic Wired Headset with Mic 399.jpeg'),
(9, 'rahul', 'rahul1@gmail.com', 'rahulpal', 'Screenshot (173).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
