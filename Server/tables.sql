CREATE DATABASE fut_champians;
USE fut_champians;
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
    playerID int PRIMARY KEY,
    diving int NOT NULL,
    handling int NOT NULL,
    kicking int NOT NULL,
    reflexes int NOT NULL,
    speed int NOT NULL,
    positioning int NOT NULL,
    FOREIGN KEY (playerID) REFERENCES player(id) ON DELETE FROM tableName
    WHERE whereClause ;
);
create table normal_player(
    playerID int PRIMARY KEY,
    pace int NOT NULL,
    shooting int NOT NULL,
    passing int NOT NULL,
    dribbling int NOT NULL,
    defending int NOT NULL,
    physical int NOT NULL,
    FOREIGN KEY (playerID) REFERENCES player(id)
);


INSERT INTO player (name, photo, position, statu) VALUES 
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW', 'player'),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST', 'player'),
('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM', 'player'),
('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST', 'player'),
('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 'CB', 'player'),
('Antonio Rudiger', 'https://cdn.sofifa.net/players/205/452/25_120.png', 'CB', 'player'),
('Neymar Jr', 'https://cdn.sofifa.net/players/190/871/25_120.png', 'LW', 'player'),
('Mohamed Salah', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'RW', 'player'),
('Joshua Kimmich', 'https://cdn.sofifa.net/players/212/622/25_120.png', 'CM', 'player'),
('Jan Oblak', 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK', 'player'),
('Luka Modrić', 'https://cdn.sofifa.net/players/177/003/25_120.png', 'CM', 'player'),
('Vinicius Junior', 'https://cdn.sofifa.net/players/238/794/25_120.png', 'LW', 'player'),
('Brahim Diáz', 'https://cdn.sofifa.net/players/231/410/25_120.png', 'LW', 'player');
INSERT INTO club (club, logo) VALUES 
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/meta/team/239085/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Fenerbahçe', 'https://cdn.sofifa.net/meta/team/88/120.png'),
('Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png'),
('PSV', 'https://cdn.sofifa.net/meta/team/682/120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png');
INSERT INTO nationality (nationality, flag) VALUES 
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png');
INSERT INTO normal_player (pace, shooting, passing, dribbling, defending, physical) VALUES
(85, 92, 91, 95, 35, 65),
(84, 94, 82, 87, 34, 77),
(74, 86, 93, 88, 64, 78),
(97, 89, 80, 92, 39, 77),
(75, 60, 70, 72, 92, 86),
(82, 55, 73, 70, 86, 86),
(91, 83, 86, 94, 37, 61),
(93, 87, 81, 90, 45, 75),
(70, 75, 88, 84, 84, 81),
(77, 90, 83, 88, 40, 78),
(89, 94, 65, 80, 45, 88),
(77, 66, 75, 82, 88, 82),
(96, 68, 77, 82, 76, 77);
INSERT INTO gk_player (diving, handling, kicking, reflexes, speed, positioning) VALUES
(89, 90, 78, 92, 50, 88),
(81, 82, 77, 86, 38, 83),
(74, 86, 93, 88, 64, 78),
(97, 89, 80, 92, 39, 77),
(75, 60, 70, 72, 92, 86),
(82, 55, 73, 70, 86, 86),
(91, 83, 86, 94, 37, 61),
(93, 87, 81, 90, 45, 75),
(70, 75, 88, 84, 84, 81),
(77, 90, 83, 88, 40, 78),
(89, 94, 65, 80, 45, 88),
(77, 66, 75, 82, 88, 82),
(96, 68, 77, 82, 76, 77);