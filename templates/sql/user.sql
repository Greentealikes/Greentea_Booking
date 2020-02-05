
ALTER DATABASE Hotel_Usermanage;
character set utf8;

/*---選擇資料庫存放資料夾---*/
use Hotel_Usermanage;

/*---顧客資料---*/
CREATE TABLE HotelStyle(
    
);

CREATE TABLE HotelUsers (
    Userid int NOT NULL AUTO_INCREMENT,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Tel int,
    Identity_number varchar(25),
    DateIn varchar(25),
    DateOut varchar(25),
    Group_meal VARCHAR(25),
    PRIMARY KEY (Personid)
);



/*---選取欄位---*/
SELECT * FROM Users;

/*---匯入資料---*/
INSERT INTO Users (FirstName,LastName,UserAccount,UserPassword)
VALUES ('Lars','Monsen','okpt@gmail.com','666666');



