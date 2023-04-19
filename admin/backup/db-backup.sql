DROP TABLE admin;

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","moha","4336","1");
INSERT INTO admin VALUES("2","siyad","4336","0");



DROP TABLE candidate;

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studid` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `votecount` int(11) NOT NULL,
  `sy` varchar(200) NOT NULL,
  `IDNo` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO candidate VALUES("9","18/03903","Molly Achieng","FOCIM","fidel.jpg","1","","","President","DIT","4 Year");



DROP TABLE d_ckets;

CREATE TABLE `d_ckets` (
  `d_ckets_id` int(11) NOT NULL AUTO_INCREMENT,
  `docket` varchar(200) NOT NULL,
  PRIMARY KEY (`d_ckets_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO d_ckets VALUES("1","SOB");
INSERT INTO d_ckets VALUES("2","FOCIM");



DROP TABLE election_team;

CREATE TABLE `election_team` (
  `ieckid` int(11) NOT NULL AUTO_INCREMENT,
  `eln_name` varchar(255) NOT NULL,
  `eln_leader` varchar(255) NOT NULL,
  PRIMARY KEY (`ieckid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO election_team VALUES("1","becky","Chairman");
INSERT INTO election_team VALUES("2","Clerk 2","Verifying Votes");



DROP TABLE falied;

CREATE TABLE `falied` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attempt` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO falied VALUES("1","3","14:05:10","0");



DROP TABLE login;

CREATE TABLE `login` (
  `studid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_registereddatetime` varchar(200) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO login VALUES("","9BeghEpX","2018-11-05 11:10:02");
INSERT INTO login VALUES("14/03716","hlzTIbaq","2018-11-05 11:22:45");
INSERT INTO login VALUES("14/03718","fUkd6ooA","2018-11-04 22:45:23");
INSERT INTO login VALUES("14/03726","aCfItzYD","2018-11-05 17:23:04");
INSERT INTO login VALUES("14/03738","1helP8IP","2018-11-05 17:25:18");
INSERT INTO login VALUES("18/03901","sqlSZQxq","2018-11-05 11:18:48");
INSERT INTO login VALUES("18/03903","ukalF1cN","2018-11-05 11:49:38");
INSERT INTO login VALUES("4336/2016","rdFQEaK5","2018-11-09 16:57:36");
INSERT INTO login VALUES("dit/29615/2016","7luRuvss","2018-11-09 17:01:20");



DROP TABLE position;

CREATE TABLE `position` (
  `IDNo` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(200) NOT NULL,
  PRIMARY KEY (`IDNo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO position VALUES("1","President");
INSERT INTO position VALUES("2","Sec Gen");
INSERT INTO position VALUES("3","Vice President");
INSERT INTO position VALUES("4","Finance Sec");



DROP TABLE position_focim;

CREATE TABLE `position_focim` (
  `position` varchar(200) NOT NULL,
  `IDNo` varchar(200) NOT NULL,
  PRIMARY KEY (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO position_focim VALUES("Finance Sec","");
INSERT INTO position_focim VALUES("President","");
INSERT INTO position_focim VALUES("Sec Gen","");
INSERT INTO position_focim VALUES("Vice President","");



DROP TABLE students;

CREATE TABLE `students` (
  `studid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `leve` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(60) NOT NULL,
  `sec` varchar(100) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("14/03716","3765","4","becky ","BSCIT","2 Year","sem 2","0");
INSERT INTO students VALUES("14/03718","3765","4","Oduor Rogy","DIT","4 Year","sem 4","0");
INSERT INTO students VALUES("14/03726","aCfItzYD","4","Derick Amollo","DIT","4 Year","sem 3","0");
INSERT INTO students VALUES("14/03738","3765","4","Asha Deborah","DIT","4 Year","sem 3","0");
INSERT INTO students VALUES("18/03903","2121","4","Molly Achieng","DIT","4 Year","sem 4","0");
INSERT INTO students VALUES("4336/2016","rdFQEaK5","4","Oduor Rogy","DIT","4 Year","sem 4","0");
INSERT INTO students VALUES("dit/29615/2016","3765","4","Moha","DIT","4 Year","sem 4","0");



DROP TABLE tbl_student;

CREATE TABLE `tbl_student` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `weight` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `mtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE votecount;

CREATE TABLE `votecount` (
  `Stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `StudID` varchar(200) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Result` varchar(11) NOT NULL,
  PRIMARY KEY (`Stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO votecount VALUES("25","dit/29615/2016","President","1");



