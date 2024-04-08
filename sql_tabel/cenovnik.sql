CREATE TABLE `cenovnik`
(
    `id`      INT(10)     NOT NULL AUTO_INCREMENT,
    `service` VARCHAR(50) NOT NULL,
    `price`   VARCHAR(50) NOT NULL,
    `lang`    VARCHAR(5)  NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
)