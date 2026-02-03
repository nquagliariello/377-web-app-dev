-- hMDB schema
CREATE TABLE `hmdb`.`movie` (
  `mov_id` INT NOT NULL AUTO_INCREMENT,
  `mov_title` VARCHAR(100) NOT NULL,
  `mov_rating` INT NULL,
  `mov_mpaa` VARCHAR(5) NULL,
  `mov_duration` VARCHAR(45) NOT NULL,
  `mov_release` VARCHAR(45) NULL,
  PRIMARY KEY (`mov_id`));
  
CREATE TABLE `hmdb`.`actor` (
  `act_id` INT NOT NULL AUTO_INCREMENT,
  `act_first_name` VARCHAR(100) NULL,
  `act_last_name` VARCHAR(100) NULL,
  `act_dob` VARCHAR(45) NULL,
  PRIMARY KEY (`act_id`));

CREATE TABLE `movie_role` (
  `maj_id` int NOT NULL AUTO_INCREMENT,
  `maj_mov_id` int NOT NULL,
  `maj_act_id` int NOT NULL,
  `maj_character` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`maj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ADDING DATA TO THE SCEMA
TRUNCATE TABLE movie;
INSERT INTO movie (mov_title, mov_duration) VALUES('Sinners', 120);
INSERT INTO movie (mov_title, mov_duration) VALUES('Wicked', 180);
INSERT INTO movie (mov_title, mov_duration) VALUES('Marty supreme', 106);
INSERT INTO movie (mov_title, mov_duration) VALUES('Knives out', 115);
INSERT INTO movie (mov_title, mov_duration) VALUES('The rip', 132);
INSERT INTO movie (mov_title, mov_duration) VALUES('Good will hunting', 114);

SELECT *
FROM movie
;

TRUNCATE TABLE actor;
INSERT INTO actor (act_first_name, act_last_name) VALUES('Michael.B', 'Jordon');
INSERT INTO actor (act_first_name, act_last_name) VALUES('Timothee', 'Chalatmet');
INSERT INTO actor (act_first_name, act_last_name) VALUES('Arianna', 'Grande');
INSERT INTO actor (act_first_name, act_last_name) VALUES('Matt', 'Damon');
INSERT INTO actor (act_first_name, act_last_name) VALUES('Ben', 'Affleck');

SELECT * 
FROM actor;

TRUNCATE TABLE movie_role;
INSERT INTO movie_role (maj_mov_id, maj_act_id, maj_character) VALUES(5,4,'LT');
INSERT INTO movie_role (maj_mov_id, maj_act_id, maj_character) VALUES(6,4,'Will');

select * 
from movie_role
;

SELECT mov_title, maj_character
FROM movie_roll 
JOIN movie on mov_moj_id = mov_id
JOIN actor ON maj_act_id = act_id
WHERE act_first_name = 'Matt'
and act_last_name = 'Damon'
ORDER BY mov_title
;

SELECT *
FROM movie
WHERE mov_id = 3
;

UPDATE movie
SET mov_mpaa = 'R',
mov_release = '2025-12-01'
WHERE mov_id = 3
;

UPDATE movie
SET mov_rating = 0
;