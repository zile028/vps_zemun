CREATE TABLE `kategorije`
(
    `id`       INT         NOT NULL AUTO_INCREMENT,
    `category` VARCHAR(50) NOT NULL,
    `lang`     VARCHAR(5)  NOT NULL DEFAULT 'srb',
    PRIMARY KEY (`id`)
);

INSERT INTO kategorije (category)
VALUES ("Акта"),
       ("Правилници"),
       ("Самовредновање"),
       ("Акредитација"),
       ("Информатор рада");