
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE book (
  id int(11) NOT NULL,
  title varchar(255) NOT NULL,
  author varchar(255) NOT NULL,
  genre varchar(255) NOT NULL,
  type varchar(255) NOT NULL,
  -- language varchar(255) NOT NULL,
  price double NOT NULL,
  image text NOT NULL
)

--
-- Dumping data for table `book`
--

INSERT INTO book VALUES
('1', '5cm', 'Donny Dhirgantoro', 'Literature', 'New', '70000', '5cm.jpg'),
('2', 'A Brief History of Indonesia', 'Tim Hannigan', 'History', 'New', '150000', 'history.jpg'),
('3', 'Konspirasi Alam Semesta', 'Fiersa Besari', 'Fiction', 'New', '85000', 'Konspirasi-Alam-Semesta.jpg'),
('4', 'Nanti Kita Cerita Tentang Hari Ini', 'Marchella FP', 'Literature', 'New', '100000', 'NKCTHI.jpg')


SELECT * FROM book


CREATE TABLE users (
  id int(11) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL
)



INSERT INTO users VALUES
('1', 'user', '12dea96fec20593566ab75692c9949596833adc9'),
('2', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

SELECT * FROM users


-- ALTER TABLE book
--   ADD PRIMARY KEY (id);


-- ALTER TABLE users
--   ADD PRIMARY KEY (id);


-- ALTER TABLE book
--   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


-- ALTER TABLE users
--   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
-- COMMIT;

