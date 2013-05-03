
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- location
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `location`;

CREATE TABLE `location`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `street` VARCHAR(100) NOT NULL,
    `zipcode` VARCHAR(5) NOT NULL,
    `city` VARCHAR(100) NOT NULL,
    `presentation` VARCHAR(1000),
    `phoneNumber` VARCHAR(10),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `location` (`id`, `name`, `street`, `zipcode`, `city`, `presentation`, `phoneNumber`) VALUES 
(1, 'Coopérative de mai', 'rue Serge-Gainsbourg', '63000', 'Clermont Ferrand', 'Première scène de musiques actuelles de Clermont-Ferrand mais aussi de toute la région Auvergne, elle se situe à une place stratégique dans la ville, place du 1er Mai, sur les vestiges de l’ancienne coopérative Michelin : à dix minutes du centre ville.', '0473144800'),
(2, 'Zénith d\'Auvergne', 'Plaine de Sarliève','63808', 'Cournon d\'Auvergne', 'Intégré à l\'ensemble Grande Halle d\'Auvergne, à laquelle il donne une signature architecturale forte avec sa silhouette en forme de cheminée de volcan et ses hublots circulaires, le Zénith d\'Auvergne est une salle de spectacle qui obéit à sa propre programmation, indépendamment des autres manifestations programmées à la Grande Halle.', '0473772424');

-- ---------------------------------------------------------------------
-- comment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `author` VARCHAR(100) NOT NULL,
    `message` VARCHAR(1000) NOT NULL,
    `idLocation` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `comment_FI_1` (`idLocation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO `comment` (`id`, `author`, `message`, `idLocation`) VALUES 
(1, 'Davids650', 'Seulement une étoile en moins à cause des chaises en plastique !!!! Pour le reste, merci à la ville de Clermont de nous avoir permis d’en avoir un !', 2),
(2, 'saquourra', 'Eh oui nous aussi en auvergne nous avons un zenith. lol. Deja très esthetique de l’exterieur, il en ai tout autant de l’interieur. Se zenith permet enfin de recevoir des grandes stars, comme par exemple Lenny Kravitz en mai 2009. Seul bémol, le manque d’explication sur le site au niveau de l’emplacement des places, on a du mal a si retrouver.', 2),
(3, 'Guillaume', 'Petite salle avec une tres bonne programmation. N hesitez pas a prendre la carte annuelle.', 1);

