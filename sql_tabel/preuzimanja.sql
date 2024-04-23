CREATE TABLE `preuzimanja`
(
    `id`         INT(10)      NOT NULL AUTO_INCREMENT,
    `fileName`   VARCHAR(255) NOT NULL,
    `mediaID`    INT(10)      NOT NULL,
    `kategorija` VARCHAR(50)  NULL,
    `createdAt`  TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `lang`       VARCHAR(5)   NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);
