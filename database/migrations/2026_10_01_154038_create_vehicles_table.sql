-- create_vehicles_table

CREATE TABLE IF NOT EXISTS `vehicles` (
    vehicle_id      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id         INT NOT NULL FOREIGN KEY,
    plate_number    VARCHAR(255) NOT NULL,
    type            VARCHAR(50)  NOT NULL DEFAULT 'motorcycle',
    colour          VARCHAR(255) NOT NULL,
    owner           VARCHAR(255) NOT NULL,
    created_at      DATETIME NULL,
    updated_at      DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `vehicles` (plate_number, type, colour, owner, created_at, updated_at)
SELECT * FROM (SELECT 'admin' AS owner, NOW() AS created_at, NOW() AS updated_at) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM `users` WHERE username = 'admin');