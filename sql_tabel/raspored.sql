CREATE TABLE `raspored`
(
    `id`         INT(10)      NOT NULL AUTO_INCREMENT,
    `spID`       VARCHAR(255) NOT NULL,
    `mediaID`    VARCHAR(50)  NOT NULL,
    `predavanja` BOOLEAN      NULL     DEFAULT false,
    `ispiti`     BOOLEAN      NULL     DEFAULT false,
    `active`     BOOLEAN      NULL     DEFAULT true,
    `createdAt`  TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `lang`       VARCHAR(5)   NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);
