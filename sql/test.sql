/*SELECT 'test'*/
alter database web11
character set utf8;
use web11;

CREATE TABLE Users (
    userid mediumint(8) unsigned NOT NULL AUTO_INCREMENT ,
    uname  varchar(255) NOT NULL,
    pass varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    tel  varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    kind enum('0','1') NOT NULL DEFAULT '0',
    token varchar(255) NOT NULL,
    PRIMARY KEY (userid)
)ENGINE = MYISAM DEFAULT CHARSET = utf8 COMMENT = "會員資料庫";

/*populate the table STATION with a few rows:*/
SELECT * FROM Users;

INSERT INTO Users(uname,pass,username,tel,email,kind,token) 
VALUES ('blacktea','SSWW2X4','lEE','0977866554','SWST@gmail.com','1','xxxxxx');

INSERT INTO Users(uname,pass,username,tel,email,kind,token) 
VALUES ('redtea','SwwadsSWW2X4','wqewq','0921566554','Sggtr@gmail.com','1','xxxxxx');

INSERT INTO Users(uname,pass,username,tel,email,kind,token) 
VALUES ('pinktea','SSWsadwW2X4','xxxE','097785254','sadasdST@gmail.com','0','xxxxxx');

INSERT INTO Users(uname,pass,username,tel,email,kind,token) 
VALUES ('大雄','SSWsadwW2X4','xxxE','097785254','sadasdST@gmail.com','0','xxxxxx');