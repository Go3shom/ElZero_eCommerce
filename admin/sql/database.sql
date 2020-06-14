    -------------------------------
    ---------- DATABASE -----------
    -------------------------------
    
    CREATE DATABASE IF NOT EXISTS `shop`;


    CREATE TABLE IF NOT EXISTS `user` (
        `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
        `username` VARCHAR(255) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `full_name` VARCHAR(255) NOT NULL,
        `group_id` INT(11) DEFAULT 0 NOT NULL,
        `trust_status` INT(11) DEFAULT 0 NOT NULL,
        `register_status` INT(11) DEFAULT 0 NOT NULL
    );


    ALTER TABLE
        `user` ADD UNIQUE(`username`);



    INSERT INTO `user`(`username`, `password`, `email`, `full_name`, `group_id`) 
    VALUES ('admin', SHA1('123'), 'admin@aol.com', 'Admin', '1');

    INSERT INTO `user`(`username`, `password`, `email`, `full_name`) 
    VALUES ('John', SHA1('456'), 'johne.doe@aol.com', 'John Doe');


    -- TRUNCATE TABLE `user`