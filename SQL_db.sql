
CREATE DATABASE redhotel;
ALTER DATABASE redhotel
character set utf8;
use redhotel;

/*---顧客資料夾---*/
CREATE TABLE Userdb (
    usid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
    usname varchar(25) NOT NULL COMMENT '顧客姓名',
    usphone varchar(25) NOT NULL COMMENT '聯繫電話',
    usemail varchar(25) NOT NULL COMMENT '聯繫信箱',
    usarea varchar(25) NOT NULL COMMENT '聯繫地址',
    datein varchar(25) NOT NULL COMMENT '入房時間',
    dateout varchar(25) NOT NULL COMMENT '退房時間',
    usnum VARCHAR(25) NOT NULL COMMENT '顧客人數',
    ustype VARCHAR(25) NOT NULL COMMENT '訂房類型',
    usadd VARCHAR(25) NOT NULL COMMENT '備註欄',
    PRIMARY KEY (usid)
);

SELECT * FROM Userdb;
INSERT INTO Userdb (usname,usphone,usemail,usarea,datein,dateout,usnum,ustype,usadd)
VALUES ('Lars','0978466897','okpt@gmail.com','台南永康','18-07-2020','17-08-2020','12','尚未新增房型','這是測試');


/*---會員資料夾---*/
CREATE TABLE Users (
    uid mediumint(8) unsigned NOT NULL AUTO_INCREMENT ,
    uname  varchar(25) NOT NULL COMMENT '會員姓名',
    name varchar(25) NOT NULL COMMENT '帳號',
    pass varchar(255) NOT NULL COMMENT '會員姓名',   
    tel  varchar(25) NOT NULL COMMENT '會員電話',
    email varchar(25) NOT NULL COMMENT '會員信箱',
    kind enum('0','1') NOT NULL DEFAULT '0' COMMENT '會員權限',
    token varchar(25) NOT NULL,
    PRIMARY KEY (uid)
)ENGINE = MYISAM DEFAULT CHARSET = utf8 COMMENT = "會員資料庫";

/*---無加密密碼及有加密密碼差異---*/

SELECT * FROM Users;
INSERT INTO Users(uname,pass,name,tel,email,kind,token) 
VALUES ('admin','$2y$10$bCYRliastVDxZqL20a9Q5OHg43sH0PUsTe/rOq/KqCqwQMUS.8Bmm','root','0933333333','admin@gmail.com','1','xxxxxx');

INSERT INTO Users(uname,pass,name,tel,email,kind,token) 
VALUES ('redtea','123456','tea','0921566554','Sugger@gmail.com','0','xxxxxx');

/*---選單類別資料表---*/
CREATE TABLE `kinds` (
    `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'kinds_sn',
    `ofsn` smallint(5) unsigned NOT NULL DEFAULT 0 COMMENT '父類別',
    `kind` varchar(255) NOT NULL DEFAULT '' COMMENT '分類',
    `title` varchar(255) NOT NULL DEFAULT '' COMMENT '標題',
    `sort` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
    `enable` enum('1','0') NOT NULL DEFAULT '1' COMMENT '狀態',
    `url` varchar(255) NOT NULL DEFAULT '' COMMENT '網址',
    `target` enum('1','0') NOT NULL DEFAULT '0' COMMENT '外連',
    `col_sn` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'col_sn',
    `content` text NULL COMMENT '內容',
    PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='選單類別資料表';


/*---房型種類資料表---*/
CREATE TABLE `prods` ( 
    `sn` int(10) unsigned NOT NULL auto_increment COMMENT 
    'prods_sn', `kind_sn` smallint(5) unsigned NOT NULL default 0 COMMENT '分類', 
    `title` varchar(255) NOT NULL default '' COMMENT '名稱', 
    `content` text NULL COMMENT '內容', 
    `enable` enum('1','0') NOT NULL default '1' COMMENT '狀態', 
    `date` int(10) unsigned NOT NULL default 0 COMMENT '建立日期', 
    `count` int(10) unsigned NOT NULL default 0 COMMENT '計數', PRIMARY KEY (`sn`) 
    ) 
    ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='房型種類資料表'

/*populate the table STATION with a few rows:*/









