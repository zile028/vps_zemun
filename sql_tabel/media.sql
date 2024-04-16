CREATE TABLE `media`
(
    `id`        INT(10)      NOT NULL AUTO_INCREMENT,
    `fileName`  VARCHAR(255) NOT NULL,
    `storeName` VARCHAR(50)  NOT NULL,
    `type`      VARCHAR(50)  NOT NULL,
    `size`      FLOAT(10)    NOT NULL,
    `createdAt` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `lang`      VARCHAR(5)   NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);
