CREATE TABLE `users` (
                         `uid` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                         `email` varchar(50) UNIQUE,
                         `nickname` varchar(50) UNIQUE,
                         `firstName` varchar(50) NOT NULL,
                         `lastName` varchar(50) NOT NULL,
                         `password` varchar(500) NOT NULL,
                         `isAdmin` boolean DEFAULT false
);

CREATE TABLE `hikes` (
                         `hid` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                         `name` varchar(50) NOT NULL,
                         `dateHike` TIMESTAMP,
                         `distance` INT,
                         `duration` INT,
                         `elevationGain` int,
                         `description` varchar(2000),
                         `update` TIMESTAMP,
                         `userId` INT NOT NULL
);

CREATE TABLE `hikeTag` (
                           `tagHikeId` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                           `hikeId` INT,
                           `tagId` INT
);

CREATE TABLE `tags` (
                        `tid` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        `name` varchar(50)
);

ALTER TABLE `hikes` ADD FOREIGN KEY (`userId`) REFERENCES `users` (`uid`);

ALTER TABLE `hikeTag` ADD FOREIGN KEY (`tagId`) REFERENCES `tags` (`tid`);

ALTER TABLE `hikeTag` ADD FOREIGN KEY (`hikeId`) REFERENCES `hikes` (`hid`);
