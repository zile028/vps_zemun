CREATE TABLE `osoblje`
(
    `id`          INT                                      NOT NULL AUTO_INCREMENT,
    `firstName`   VARCHAR(50)                              NOT NULL,
    `lastName`    VARCHAR(50)                              NOT NULL,
    `title`       VARCHAR(10)                              NOT NULL,
    `rank`        VARCHAR(50)                              NOT NULL,
    `status`      ENUM ('clan','nastavno','nenastavno','') NOT NULL,
    `active`      BOOLEAN                                  NOT NULL DEFAULT true,
    `email`       VARCHAR(70)                              NULL     DEFAULT NULL,
    `cv`          VARCHAR(30)                              NULL     DEFAULT NULL,
    `image`       VARCHAR(30)                              NULL     DEFAULT NULL,
    `lang`        VARCHAR(5)                               NOT NULL DEFAULT 'srb',
    `description` TEXT                                     NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `osoblje_odbor`
(
    `osobljeID` INT(10)     NOT NULL,
    `odborID`   INT(10)     NOT NULL,
    `pozicija`  VARCHAR(50) NOT NULL,
    `prioritet` INT(10)     NOT NULL DEFAULT 1,
    `lang`      VARCHAR(5)  NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`osobljeID`, odborID)
);

CREATE TABLE `odbori`
(
    `id`        INT(10)     NOT NULL AUTO_INCREMENT,
    `odbor`     VARCHAR(50) NOT NULL,
    `prioritet` INT(10)     NOT NULL DEFAULT 1,
    `lang`      VARCHAR(5)  NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);