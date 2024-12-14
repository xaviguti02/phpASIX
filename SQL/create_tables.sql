-- Sentència per crear la taula video_games
CREATE TABLE video_games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(8,2) DEFAULT NULL,
    platform VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    releaseYear INT NOT NULL
);

-- Sentència per crear la taula books
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    releaseYear INT NOT NULL
);

