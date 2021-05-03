PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "purchases" ("id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, "name" varchar, "price" integer, "character_name" varchar, "category" varchar, "purchased_at" date);
INSERT INTO purchases VALUES(1,'casing smartphone','15','Ninja Ken','lainnya','2018-10-10');
INSERT INTO purchases VALUES(2,'rantangan','5','Guru Domba','makanan','2018-10-10');
INSERT INTO purchases VALUES(3,'baju','30','Birdie','lainnya','2018-10-10');
INSERT INTO purchases VALUES(4,'buku pelajaran','20','Ninja Ken','lainnya','2018-10-10');
INSERT INTO purchases VALUES(5,'biaya kereta','5','Guru Domba','perjalanan','2018-10-10');
INSERT INTO purchases VALUES(6,'puding','2','Ninja Ken','makanan','2018-10-11');
INSERT INTO purchases VALUES(7,'bola','25','Baby Ben','lainnya','2018-10-11');
INSERT INTO purchases VALUES(8,'kalkulator','7','Guru Domba','lainnya','2018-10-13');
INSERT INTO purchases VALUES(9,'rantangan','10','Ninja Ken','makanan','2018-10-13');
INSERT INTO purchases VALUES(10,'kue puding','5','Ninja Ken','makanan','2018-10-13');
INSERT INTO purchases VALUES(11,'biaya taksi','12','Birdie','perjalanan','2018-10-17');
INSERT INTO purchases VALUES(12,'permen kapas','1','Baby Ben','makanan','2018-10-18');
INSERT INTO purchases VALUES(13,'kaca mata','50','Guru Domba','lainnya','2018-10-18');
INSERT INTO purchases VALUES(14,'puding panggang','2','Ninja Ken','makanan','2018-10-18');
INSERT INTO purchases VALUES(15,'tas','80','Birdie','lainnya','2018-10-20');
INSERT INTO purchases VALUES(16,'kue susu kedelai','3','Birdie','makanan','2018-10-20');
INSERT INTO purchases VALUES(17,'roti lapis','6','Ninja Ken','makanan','2018-10-20');
INSERT INTO purchases VALUES(18,'set ikan bakar','6','Guru Domba','makanan','2018-10-20');
INSERT INTO purchases VALUES(19,'buku tulis','2','Baby Ben','lainnya','2018-10-21');
INSERT INTO purchases VALUES(20,'pensil','1','Baby Ben','lainnya','2018-10-24');
INSERT INTO purchases VALUES(21,'kuas','8','Birdie','lainnya','2018-10-24');
INSERT INTO purchases VALUES(22,'biaya parkir','2','Ninja Ken','perjalanan','2018-10-28');
INSERT INTO purchases VALUES(23,'mentega','2','Guru Domba','makanan','2018-10-28');
INSERT INTO purchases VALUES(24,'kentang','1','Guru Domba','makanan','2018-10-28');
INSERT INTO purchases VALUES(25,'puding susu','1','Ninja Ken','makanan','2018-10-28');
INSERT INTO purchases VALUES(26,'biaya bus','2','Guru Domba','perjalanan','2018-11-02');
INSERT INTO purchases VALUES(27,'pancake','8','Birdie','makanan','2018-11-02');
INSERT INTO purchases VALUES(28,'puding panggang mochi','1','Ninja Ken','makanan','2018-11-03');
INSERT INTO purchases VALUES(29,'perlengkapan elektronik','54','Ninja Ken','lainnya','2018-11-07');
INSERT INTO purchases VALUES(30,'pelembut kain','6','Birdie','lainnya','2018-11-07');
DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('purchases',30);
COMMIT;



