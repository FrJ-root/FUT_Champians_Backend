CREATE DATABASE fut_champians;
USE fut_champians;
CREATE TABLE club (
    id INT PRIMARY KEY AUTO_INCREMENT,
    club VARCHAR(255) NOT NULL,
    logo VARCHAR(255) NOT NULL
);
CREATE TABLE nationality (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nationality VARCHAR(30) NOT NULL,
    flag VARCHAR(255) NOT NULL
);
CREATE TABLE player (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    position VARCHAR(10) NOT NULL,
    nationalityID INT,
    clubID INT,
    CONSTRAINT fk_nationality FOREIGN KEY (nationalityID) REFERENCES nationality(id) ON DELETE CASCADE,
    CONSTRAINT fk_club FOREIGN KEY (clubID) REFERENCES club(id) ON DELETE CASCADE
);
CREATE TABLE gk_player (
    playerID INT PRIMARY KEY,
    diving INT NOT NULL,
    handling INT NOT NULL,
    kicking INT NOT NULL,
    reflexes INT NOT NULL,
    speed INT NOT NULL,
    positioning INT NOT NULL,
    CONSTRAINT fk_gk_player FOREIGN KEY (playerID) REFERENCES player(id) ON DELETE CASCADE
);
CREATE TABLE normal_player (
    playerID INT PRIMARY KEY,
    pace INT NOT NULL,
    shooting INT NOT NULL,
    passing INT NOT NULL,
    dribbling INT NOT NULL,
    defending INT NOT NULL,
    physical INT NOT NULL,
    CONSTRAINT fk_normal_player FOREIGN KEY (playerID) REFERENCES player(id) ON DELETE CASCADE
);

INSERT INTO player (name, photo, position) VALUES 
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW'),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST'),
('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM'),
('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST'),
('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 'CB');
INSERT INTO club (club, logo) VALUES 
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/meta/team/239085/120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png');
INSERT INTO nationality (nationality, flag) VALUES 
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png');
INSERT INTO normal_player (pace, shooting, passing, dribbling, defending, physical) VALUES
(85, 92, 91, 95, 35, 65),
(84, 94, 82, 87, 34, 77),
(74, 86, 93, 88, 64, 78),
(97, 89, 80, 92, 39, 77),
(75, 60, 70, 72, 92, 86);
INSERT INTO gk_player (diving, handling, kicking, reflexes, speed, positioning) VALUES
(89, 90, 78, 92, 50, 88),
(81, 82, 77, 86, 38, 83),
(74, 86, 93, 88, 64, 78),
(97, 89, 80, 92, 39, 77),
(75, 60, 70, 72, 92, 86);