CREATE TABLE `Cars`(
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `producer` varchar(20) COMMENT 'Az autó gyártója',
    `type` varchar(30) COMMENT 'Az autó típusa',
    `vintage` int COMMENT 'Az autó forgalomba helyezésének éve',
    `fuel` varchar(10) DEFAULT 'benzin' COMMENT 'Az üzemanyag típusa - benzin, dizel'
)DEFAULT CHARSET = UTF8;

CREATE TABLE `Tenants`(
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(80) COMMENT 'A bérlő neve',
    `address` varchar(200) COMMENT 'A bérlő lakcíme irsz,város,utca,házszám egyben',
    `regCostumer` ENUM( '0', '1' ) COMMENT '0 vagy 1 attól függően, hogy törzsvásárló vagy sem'
)DEFAULT CHARSET = UTF8 COMMENT 'A vásárlókat tartalmazó tábla';

insert into `Tenants` (`name`,`address`,`regCostumer`) VALUES 
('Cormer Nor','An Der Bundesstrasse 81 3062 HINTERHOLZ ','0'),
('Athraedax Ryas','Gleichenberger Strasse 38 4264 GRÜNBACH ','0'),
('Rognus Goragar','Favoritenstrasse 32 2100 KORNEUBURG ','1'),
('Castor Kell','Bachloh 68 4144 WEBERSCHLAG ','0'),
('Cadhlion Elonta','Prager Strasse 61 4693 ROITH ','1'),
('Zeidar Mel','Hauptplatz 56 9131 OBERMIEGER ','1'),
('Aldvin Irliastien','Stollenstrasse 14 3383 OBER-THURNHOFEN ','0');

insert into `Cars` (`producer`,`type`,`vintage`, `fuel`) VALUES 
('Audi', 'A3', '1996', 'benzin'),
('Aston MArtin', 'DB11', '2016', 'benzin'),
('Chevrolet Corvette', 'c8', '2019', 'benzin'),
('Volkswagen', 'A3', '2012', 'benzin'),
('BMW', '7', '2017', 'dizel'),
('Rover Mini', 'specs', '1991', 'benzin'),
('Alfa Romeo', '155', '1992', 'benzin'),
('Cadillac', 'C16', '2017', 'benzin'),
('Lotus', 'Europa', '2006', 'benzin'),
('Toyota', 'Corolla', '2019', 'benzin');