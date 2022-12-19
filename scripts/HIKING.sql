CREATE TABLE `Users` (
                         `uid` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                         `email` varchar(50) UNIQUE,
                         `nickname` varchar(50) UNIQUE,
                         `firstName` varchar(50) NOT NULL,
                         `lastName` varchar(50) NOT NULL,
                         `password` varchar(500) NOT NULL,
                         `isAdmin` boolean DEFAULT false
);

CREATE TABLE `Hikes` (
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

CREATE TABLE `HikeTag` (
                           `tagHikeId` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                           `hikeId` INT,
                           `tagId` INT
);

CREATE TABLE `Tags` (
                        `tid` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        `name` varchar(50)
);

ALTER TABLE `Hikes` ADD FOREIGN KEY (`userId`) REFERENCES `Users` (`uid`);

ALTER TABLE `HikeTag` ADD FOREIGN KEY (`tagId`) REFERENCES `Tags` (`tid`);

ALTER TABLE `HikeTag` ADD FOREIGN KEY (`hikeId`) REFERENCES `Hikes` (`hid`);
