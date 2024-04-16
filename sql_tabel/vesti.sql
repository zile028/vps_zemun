CREATE TABLE `vesti`
(
    `id`               INT         NOT NULL AUTO_INCREMENT,
    `naslov`           VARCHAR(50) NOT NULL,
    `description`      TEXT        NOT NULL,
    `active`           BOOLEAN     NOT NULL DEFAULT true,
    `featured_imageID` VARCHAR(10) NULL     DEFAULT NULL,
    `lang`             VARCHAR(5)  NOT NULL DEFAULT 'srb',
    `createdAt`        TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updatedAt`        TIMESTAMP   NULL,
    `userID`           INT(10)     NOT NULL,
    INDEX (`userID`, `featured_imageID`),
    PRIMARY KEY (`id`)
);

CREATE TABLE `vest_media`
(
    `vestID`  INT(10) NOT NULL,
    `mediaID` INT(10) NOT NULL,
    PRIMARY KEY (`vestID`, mediaID)
);
