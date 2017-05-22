CREATE TABLE `users` (
	`user_id` int NOT NULL,
	`login` varchar(15) NOT NULL,
	`password` varchar(8) NOT NULL,
	`email` varchar(128),
	PRIMARY KEY (`user_id`)
);

CREATE TABLE `projects` (
	`project_id` int NOT NULL,
	`title` varchar(255),
	`status` char,
	`user_id` int,
	`description` mediumtext,
	`date_reg` DATETIME,
	`date_end` DATETIME,
	`raiting` DECIMAL,
	PRIMARY KEY (`project_id`)
);

CREATE TABLE `comments` (
	`comment_id` int NOT NULL,
	`project_id` int,
	`user_id` int,
	`date` DATETIME,
	`comment` TEXT,
	PRIMARY KEY (`comment_id`)
);

ALTER TABLE `projects` ADD CONSTRAINT `projects_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`);

ALTER TABLE `comments` ADD CONSTRAINT `comments_fk0` FOREIGN KEY (`project_id`) REFERENCES `projects`(`project_id`);

ALTER TABLE `comments` ADD CONSTRAINT `comments_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`);

