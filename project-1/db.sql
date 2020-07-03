SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:30";


--Database : 'db'


CREATE TABLE IF NOT EXISTS 'users' (
'id' int(11) NOT NULL,
    'name' varchar(1040) NOT NULL,
    'lname' varchar(1040) NOT NULL,
    'uname' varchar(1040) NOT NULL,
    'email' varchar(1040) NOT NULL,
    'password' varchar(1132) NOT NULL,
    'picture' varchar(1040) NOT NULL
)     ENGINE=InnoDB Auto_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO 'USERS'('id', 'name', 'lname', 'uname', 'email','password', 'picture') values
(1, 'sam', 'sharma', 'sammy', 'sam@samsharma.co', 'Sam12345', 'sampic.jpg'),
(2, 'jazz', 'Disouza', 'jazzy', 'jazz@Disouza.co', 'Jazz@896', 'jazpic.jpg'),
(3, 'mery', 'Dikruze', 'merydik', 'mery@dikruze.co', 'Mery@345', 'merpic.jpg'),

ALTER TABLE 'users'
ADD PRIMARY KEY ('id');


ALTER TABLE 'users'
MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
