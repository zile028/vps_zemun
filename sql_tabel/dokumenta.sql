CREATE TABLE `dokumenta`
(
    `id`         INT         NOT NULL AUTO_INCREMENT,
    `title`      TEXT        NOT NULL,
    `attachment` VARCHAR(50) NOT NULL,
    `userID`     INT(10)     NOT NULL,
    `parentID`   INT(10)     NULL     DEFAULT NULL,
    `category`   VARCHAR(30) NOT NULL,
    `lang`       VARCHAR(5)  NOT NULL DEFAULT 'srb',
    `createdAt`  TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
)