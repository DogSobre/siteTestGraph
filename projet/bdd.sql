------------------------- GRAPH ABOUT MANAGING MONEY -------------------------


CREATE TABLE `graph1`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `year` INT (11) NOT NULL,
    `dataGraph1` INT (255) NOT NULL,
    `dataGraph2` INT (255) NOT NULL,

    PRIMARY KEY(`id`)
);

INSERT INTO `graph1` (`id`, `year`, `datagraph1`, `datagraph2`) VALUES (NULL, '2018', '2500', '500');
INSERT INTO `graph1` (`id`, `year`, `datagraph1`, `datagraph2`) VALUES (NULL, '2019', '2000', '1500');
INSERT INTO `graph1` (`id`, `year`, `datagraph1`, `datagraph2`) VALUES (NULL, '2020', '8000', '8000');
INSERT INTO `graph1` (`id`, `year`, `datagraph1`, `datagraph2`) VALUES (NULL, '2021', '7000', '6500');

------------------------- GRAPH ABOUT BITCOIN PRICE DURING 2017 -------------------------

CREATE TABLE `graph2`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `date` DATE NOT NULL, -- YYYY-MM-DD
    `price` INT (255) NOT NULL,

    PRIMARY KEY(`id`)
);

INSERT INTO `graph2` (`id`, `date`, `price`) VALUES (NULL, '2017-01-01', '972.95');
INSERT INTO `graph2` (`id`, `date`, `price`) VALUES (NULL, '2017-01-02', '1025.88');
INSERT INTO `graph2` (`id`, `date`, `price`) VALUES (NULL, '2017-01-03', '1030.47');
INSERT INTO `graph2` (`id`, `date`, `price`) VALUES (NULL, '2017-01-04', '1100.52');


------------------------- GRAPH ABOUT PERCENTAGE OF CONTINENT4S AREA -------------------------

CREATE TABLE `graph3`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `continent` VARCHAR (255) NOT NULL,
    `continent_area_km2` INT (255) NOT NULL,
    `percent_area` INT (255),

    PRIMARY KEY(`id`)
);
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'North America', '24490000', '16.39');
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'Australia', '9008500', '6.03');
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'South America', '17840000', '11.94');
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'Africa', '30370000', '20.32');
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'Antartica', '13720000', '9.18');
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'Asia', '43820000', '29.33');
INSERT INTO `graph3` (`id`, `continent`, `continent_area`, `percent_area`) VALUES (NULL, 'Europe', '10180000', '6.81');

------------------------- GRAPH ABOUT SALMON PRODUCTION SINCE 1997 TO 2016 -------------------------
                                                                                                                     
CREATE TABLE `graph4`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `year` INT (255) NOT NULL,
    `tons` INT (255) NOT NULL,

    PRIMARY KEY (`id`)
);

INSERT INTO `graph4` (`id`, `year`, `tons`) VALUES (NULL, '1997', '254722');
INSERT INTO `graph4` (`id`, `year`, `tons`) VALUES (NULL, '1998', '292175');
INSERT INTO `graph4` (`id`, `year`, `tons`) VALUES (NULL, '1999', '369565');

-------------------------  END OF SQL SCRIPT -------------------------
