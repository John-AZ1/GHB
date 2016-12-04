CREATE TABLE comments (
	cid int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    date datetime not null,
   	message TEXT not null
);
CREATE TABLE QA(
qid INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
Q VARCHAR( 128 ) NOT NULL ,
A VARCHAR( 128 ) NOT NULL
)