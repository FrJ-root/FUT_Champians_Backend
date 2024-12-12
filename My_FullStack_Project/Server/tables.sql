CREATE TABLE club(
    id INT PRIMARY KEY AUTO_INCREMENT,
    club varchar(255) NOT NULL,
    logo varchar(255) NOT NULL 
);
CREATE TABLE nationality(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nationality varchar(30) NOT NULL,
    flag varchar(255) NOT NULL
);
CREATE table player(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    position VARCHAR(10) NOT NULL,
    statu ENUM('reserve', 'player'),
    nationalityID int,
    clubID int,
    FOREIGN KEY (nationalityID) REFERENCES nationality(id),
    FOREIGN KEY (clubID) REFERENCES club(id)
);
create table gk_player(
    id int PRIMARY KEY AUTO_INCREMENT,
    diving int NOT NULL,
    handling int NOT NULL,
    kicking int NOT NULL,
    reflexes int NOT NULL,
    speed int NOT NULL,
    positioning int NOT NULL,
    playerID int,
    FOREIGN KEY (playerID) REFERENCES player(id)
);
create table normal_player(
    id int PRIMARY KEY AUTO_INCREMENT,
    pace int NOT NULL,
    shooting int NOT NULL,
    passing int NOT NULL,
    dribbling int NOT NULL,
    defending int NOT NULL,
    physical int NOT NULL,
    playerID int,
    FOREIGN KEY (playerID) REFERENCES player(id)
);