DROP TABLE `vote`;
DROP TABLE `challenge`;
DROP TABLE `follow`;
DROP TABLE `media`;
DROP TABLE `user`;
DROP TABLE `sport`;

CREATE TABLE `user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sports` varchar(256) NOT NULL,
  `birthdate` date NOT NULL,
  `registrationdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE `sport`(
	`name` varchar(100) PRIMARY KEY
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE `media`(	
    `online release` datetime, 
    `challenges nb` int,
    `name` varchar(100),
    `votes nb` int,
    `url` varchar(150) NOT NULL,
    `userid` int NOT NULL,
    `sportname` varchar(100) NOT NULL,
    
    CONSTRAINT PK_Media PRIMARY KEY (`online release`, `challenges nb`, `name`, `votes nb`),
    
    CONSTRAINT FK_PostUserMedia FOREIGN KEY (`userid`)
    REFERENCES `user`(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    CONSTRAINT FK_PostSportMedia FOREIGN KEY (`sportname`)
    REFERENCES `sport`(`name`)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE `vote`
(       
	`userid` int, 
    `media online release` datetime,
    `media challenges nb` int,
    `media name` varchar(100),
    `media votes nb` int,
    
    CONSTRAINT PK_Vote PRIMARY KEY (`userid`, `media online release`, `media challenges nb`, `media name`, `media votes nb`),
    
    CONSTRAINT `FK_UserVote` FOREIGN KEY (`userid`)
    REFERENCES `user`(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    
    CONSTRAINT FK_MediaVote FOREIGN KEY (`media online release`, `media challenges nb`, `media name`, `media votes nb`)
    REFERENCES media(`online release`, `challenges nb`, `name`, `votes nb`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;


CREATE TABLE `challenge`
(       
	`online release 1` datetime, 
    `challenges nb 1` int,
    `name 1` varchar(100),
    `votes nb 1` int,
    `online release 2` datetime, 
    `challenges nb 2` int,
    `name 2` varchar(100),
    `votes nb 2` int,
    `challenge date` datetime,
    
    CONSTRAINT PK_Challenge PRIMARY KEY (`online release 1`, `challenges nb 1`, `name 1`, `votes nb 1`, `online release 2`, `challenges nb 2`, `name 2`, `votes nb 2`, `challenge date`),
    
    CONSTRAINT FK_Media1Challenge FOREIGN KEY (`online release 1`, `challenges nb 1`, `name 1`, `votes nb 1`)
    REFERENCES `media`(`online release`, `challenges nb`, `name`, `votes nb`)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    CONSTRAINT FK_Media2Challenge FOREIGN KEY (`online release 2`, `challenges nb 2`, `name 2`, `votes nb 2`)
    REFERENCES media(`online release`, `challenges nb`, `name`, `votes nb`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE `follow`
(       
	`userid 1` int,
    `userid 2` int,
    
    CONSTRAINT PK_Follow PRIMARY KEY (`userid 1`, `userid 2`),
    
    CONSTRAINT `FK_User1Follow` FOREIGN KEY (`userid 1`)
    REFERENCES `user`(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    
    CONSTRAINT `FK_User2Follow` FOREIGN KEY (`userid 2`)
    REFERENCES `user`(`id`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;
