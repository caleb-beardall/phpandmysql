-- Data Deinition Language (DDL) Queries
-- CREATE TABLE
CREATE TABLE `joke` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`joke_text` TEXT,
`joke_date` DATE
) DEFAULT CHARACTER SET utf8mb4 ENGINE=InnoDB;

CREATE TABLE `author` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`author_name` VARCHAR(255),
`author_email` VARCHAR(255)
) DEFAULT CHARACTER SET utf8mb4 ENGINE=InnoDB;

CREATE TABLE `category` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`category_name` VARCHAR(255)
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

CREATE TABLE `joke_category` (
`joke_id` INT NOT NULL,
`category_id` INT NOT NULL,
PRIMARY KEY (`joke_id`, `category_id`)
)DEFAULT CHARACTER SET utf8mb4 ENGINE=InnoDB;

-- ALTER TABLE
ALTER TABLE `jokesdb`.`joke`
ADD COLUMN `author_id` INT,
ADD COLUMN `author_name` VARCHAR(255),
ADD COLUMN `author_email` VARCHAR(255);

ALTER TABLE `jokesdb`.`joke`
DROP COLUMN `author_name`,
DROP COLUMN `author_email`;

-- Data Manipulation Language (DML) Queries
-- INSERT
INSERT INTO `author` SET
`id` = 1,
`author_name` = 'Clare Byte',
`author_email` = 'clara.byte@syntaxsmiles.dev';

INSERT INTO `author` (`id`, `author_name`, `author_email`)
VALUES
	(2, 'Linus Scriptwell', 'linus@codecrackers.io'),
    (3, 'Ruby Stack', 'ruby.stack@devpun.net');

INSERT INTO `joke` (`joke_text`, `joke_date`, `author_id`)
VALUES
	('Why did the programmer go broke? Because they used up all their cache!', '2025-06-07', 1),
    ('Why do Java programmers wear glasses? Because they don\’t see sharp!', '2025-06-06', 1),
    ('How do you comfort a JavaScript bug? You console it.', '2025-06-06', 2),
    ('Why was the function so clingy? Because it had closure issues.', '2025-06-05', 2),
    ('Why did the programmer quit his job? He didn\'t get arrays.', '2025-06-05', 3);

-- SELECT
SELECT `id`, LEFT(`joke_text`, 20), `author_id` FROM `joke`;

-- JOIN
SELECT `joke`.`id`, LEFT(`joke_text`, 20), `author_name`, `author_email`
FROM `joke` INNER JOIN `author`
ON `author_id` = `author`.`id`;

SELECT `joke_text`
FROM `joke` INNER JOIN `author`
ON `author_id` = `author`.`id`
WHERE `author_name` = 'Clare Byte';

SELECT `joke_text`
FROM `joke` INNER JOIN `joke_category`
ON `joke`.`id` = `joke_id`
INNER JOIN `category`
ON `category_id` = `category`.`id`
WHERE `category_name` = "Knock-Knock";
