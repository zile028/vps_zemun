CREATE TABLE `studijski_programi`
(
    `id`          INT          NOT NULL AUTO_INCREMENT,
    `nivo`        VARCHAR(100) NOT NULL,
    `naziv`       VARCHAR(50)  NOT NULL,
    `trajanje`    VARCHAR(50)  NOT NULL,
    `espb`        INT(3)       NOT NULL,
    `zvanje`      VARCHAR(50)  NOT NULL,
    `polje`       VARCHAR(70)  NULL     DEFAULT NULL,
    `aktivan`     BOOLEAN      NOT NULL DEFAULT true,
    `akreditovan` INT(4)       NOT NULL,
    `lang`        VARCHAR(5)   NOT NULL DEFAULT 'srb',
    `cilj`        TEXT         NULL     DEFAULT NULL,
    `opis`        TEXT         NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `moduli`
(
    `id`    INT         NOT NULL AUTO_INCREMENT,
    `modul` VARCHAR(50) NOT NULL,
    `spID`  INT(10)     NOT NULL,
    `lang`  VARCHAR(5)  NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);

CREATE TABLE `predmeti`
(
    `id`               INT         NOT NULL AUTO_INCREMENT,
    `predmet`          VARCHAR(50) NOT NULL,
    `sifra`            VARCHAR(50) NOT NULL,
    `semestar`         INT(2)      NOT NULL,
    `predavanja`       INT(2)      NOT NULL,
    `vezbe`            INT(2)      NOT NULL,
    `espb`             INT(2)      NOT NULL,
    `obavezan_izborni` VARCHAR(15) NOT NULL,
    `lang`             VARCHAR(5)  NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);

CREATE TABLE `sp_modul_predmet`
(
    `modulID`   INT(10) NOT NULL,
    `spID`      INT(10) NOT NULL,
    `predmetID` INT(10) NOT NULL,
    PRIMARY KEY (`modulID`, `spID`, `predmetID`)
);