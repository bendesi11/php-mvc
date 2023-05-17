# php-mvc
app/models/config.php 
change it to your own settings

## Database:
CREATE TABLE users (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL
);

CREATE TABLE advertisements (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  userid INT(11) NOT NULL,
  title VARCHAR(255) NOT NULL,
  FOREIGN KEY (userid) REFERENCES users(id)
);

exemple row:
---
INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Sanyi'),
(2, 'RabIT');

---

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(0, 1, 'a nagy pénz rablás'),
(1, 2, 'álláshirdetés'),
(2, 1, 'valami');
