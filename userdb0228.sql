
CREATE DATABASE hotel_usermanage;
ALTER DATABASE hotel_usermanage
character set utf8;

/*---選擇資料庫存放資料夾---*/
use Hotel_Usermanage;

CREATE TABLE Userdb (
    usid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
    usname varchar(25) NOT NULL,
    usphone varchar(25) NOT NULL,
    usemail varchar(25) NOT NULL,
    usarea varchar(25) NOT NULL,
    datein varchar(25) NOT NULL,
    dateout varchar(25) NOT NULL,
    usnum VARCHAR(25) NOT NULL,
    ustype VARCHAR(25) NOT NULL,
    usadd VARCHAR(25) NOT NULL,
    PRIMARY KEY (usid)
);

/*---選取欄位---*/
SELECT * FROM Userdb;

/*---匯入資料---*/
INSERT INTO Userdb (usname,usphone,usemail,usarea,datein,dateout,usnum,ustype,usadd)
VALUES ('Lars','0978466897','okpt@gmail.com','台南永康','18-07-2020','17-08-2020','12','家庭-4人','這是測試');

CREATE TABLE Users (
    uid mediumint(8) unsigned NOT NULL AUTO_INCREMENT ,
    uname  varchar(25) NOT NULL,
    pass varchar(255) NOT NULL,
    name varchar(25) NOT NULL,
    tel  varchar(25) NOT NULL,
    email varchar(25) NOT NULL,
    kind enum('0','1') NOT NULL DEFAULT '0',
    token varchar(25) NOT NULL,
    PRIMARY KEY (uid)
)ENGINE = MYISAM DEFAULT CHARSET = utf8 COMMENT = "會員資料庫";

CREATE TABLE `prods` ( 
    `sn` int(10) unsigned NOT NULL auto_increment COMMENT 
    'prods_sn', `kind_sn` smallint(5) unsigned NOT NULL default 0 COMMENT '分類', 
    `title` varchar(255) NOT NULL default '' COMMENT '名稱', 
    `content` text NULL COMMENT '內容', 
    `enable` enum('1','0') NOT NULL default '1' COMMENT '狀態', 
    `date` int(10) unsigned NOT NULL default 0 COMMENT '建立日期', 
    `count` int(10) unsigned NOT NULL default 0 COMMENT '計數', PRIMARY KEY (`sn`) 
    ) 
    ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品資料表'

/*populate the table STATION with a few rows:*/
SELECT * FROM Users;

INSERT INTO Users(uname,pass,name,tel,email,kind,token) 
VALUES ('admin','$2y$10$bCYRliastVDxZqL20a9Q5OHg43sH0PUsTe/rOq/KqCqwQMUS.8Bmm','root','0933333333','admin@gmail.com','1','xxxxxx');

INSERT INTO Users(uname,pass,name,tel,email,kind,token) 
VALUES ('redtea','123456','tea','0921566554','Sugger@gmail.com','0','xxxxxx');






