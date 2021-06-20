
-- Napraviti upite:
-- - koji odjednom dodaje 3 proizvoda:
-- - 789, "paradajz", 200
--     - 776, "crni luk", 50
--     - 761, "beli luk", 80
-- - koja dodaje prodaju paradajz za datum 16.6 - 50 kom po ceni 200
-- - koja dodaje prodaju paradajz za datum 17.6 - 20 kom po ceni 200
-- - koja dodaje prodaju paradajz za datum 17.6 - 40 kom po ceni 250
-- - koja dodaje prodaju paradajz za datum 17.6 - 10 kom po ceni 220
-- - koja dodaje prodaju crni luk za datum 1.5 - 30 kom po ceni 50
-- - dodati 3 prodaje za beli luk po izboru
-- - brise svu prodaju paradajza za datum 16.6 
-- - svim prodajama za datum 17.6 dodaje na cenu 10%
-- - prikazuje barkodove svih proizvoda koji su imali prodaju 1.5.
-- - prikazuje samo razlicite barkodove koji su imali prodaju 1.5
-- - prikazuje ukupnu kolicinu prodatih proizvoda po datumima, tako sto prikazuje dve kolone:  datum,  ukupna_kolicina
-- - prikazuje ukupnu kolicinu prodaje po proizvodu, tako sto prikazuje dve kolone:  proizvod,  ukupna_kolicina
-- - prikazuje ukupnu kolicinu prodaje po proizvodu i datumu, tako sto prikazuje tri kolone:  proizvod,  datum, ukupna_kolicina. 

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
(761, 'beli luk', '80.00'),
(776, 'crni luk', '50.00'),
(789, 'paradajz', '200.00');

INSERT INTO prodaja(`id`,`kolicina`,`cena`,`datum`,`barkod`) VALUES
(NULL, 50, 200,'2021-06-16', 789),
(NULL, 20, 200,'2021-06-17', 789),
(NULL, 40, 250,'2021-06-17', 789),
(NULL, 10, 220,'2021-06-17', 789),
(NULL, 30, 50,'2021-05-01', 776),
(NULL, 50, 300,'2021-06-17', 761),
(NULL, 1, 30,'2021-05-01', 761),
(NULL, 52, 320,'2021-06-17', 761);

DELETE FROM `prodaja` WHERE barkod=789 AND datum='2021-06-16';
UPDATE `prodaja` SET `cena`=`cena`*1.1 WHERE `datum`='2021-06-17';
SELECT `barkod` FROM `prodaja` WHERE `datum`='2021-05-01';
SELECT DISTINCT `barkod` FROM `prodaja` WHERE `datum`='2021-05-01';
SELECT `datum`, sum(`kolicina`) AS `kolicina` FROM `prodaja` GROUP BY `datum`;
SELECT `barkod` AS `proizvod`, sum(`kolicina`) AS `kolicina` FROM `prodaja` GROUP BY `barkod`;
SELECT `barkod` AS `proizvod`, `datum`, sum(`kolicina`) AS `kolicina` FROM `prodaja` GROUP BY `barkod`, `datum`;
