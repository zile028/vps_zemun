CREATE TABLE `alumni`
(
    `id`         INT(10)      NOT NULL AUTO_INCREMENT,
    `firstName`  VARCHAR(50)  NOT NULL,
    `lastName`   VARCHAR(50)  NOT NULL,
    `spID`       INT(10)      NOT NULL,
    `diplomirao` INT(10)      NOT NULL,
    `tema`       TEXT         NOT NULL,
    `poslodavac` VARCHAR(255) NOT NULL,
    `posao`      VARCHAR(255) NOT NULL DEFAULT true,
    `social`     VARCHAR(70)  NULL     DEFAULT NULL,
    `image`      INT(10)      NULL     DEFAULT NULL,
    `lang`       VARCHAR(5)   NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);
