CREATE TABLE ft_table (
    id INT NOT NULL AUTO_INCREMENT,
    login VARCHAR(11) NOT NULL DEFAULT 'toto',
    groupe ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL,
    PRIMARY KEY (id)
);
