CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    accttype INT,
    grade VARCHAR(255),
    phone VARCHAR(15),
    tag varchar(255),
    scanned INT
    );
CREATE TABLE attendance (
    AtRFID varchar(255), 
    ScanTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    number INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
    );
CREATE TABLE lastscanned (
    RFID varchar(255)
    );
INSERT INTO lastscanned (RFID) VALUES ('e200500045190280141088be');