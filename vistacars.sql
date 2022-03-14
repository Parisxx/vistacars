SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'paris', 'hallo');
INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'robin', 'hallo');
INSERT INTO `login` (`id`, `username`, `password`) VALUES
(3, 'vigo', 'hallo');
INSERT INTO `login` (`id`, `username`, `password`) VALUES
(4, 'sven', 'hallo');


ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

