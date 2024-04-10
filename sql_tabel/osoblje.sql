CREATE TABLE `osoblje`
(
    `id`          INT         NOT NULL AUTO_INCREMENT,
    `firstName`   VARCHAR(50) NOT NULL,
    `lastName`    VARCHAR(50) NOT NULL,
    `title`       VARCHAR(10) NOT NULL,
    `rank`        VARCHAR(50) NOT NULL,
    `status`      VARCHAR(50) NOT NULL,
    `active`      BOOLEAN     NOT NULL DEFAULT true,
    `email`       VARCHAR(70) NULL     DEFAULT NULL,
    `cv`          VARCHAR(30) NULL     DEFAULT NULL,
    `image`       VARCHAR(30) NULL     DEFAULT NULL,
    `lang`        VARCHAR(5)  NOT NULL DEFAULT 'srb',
    `description` TEXT        NULL     DEFAULT NULL,
    PRIMARY KEY (`id`)
)