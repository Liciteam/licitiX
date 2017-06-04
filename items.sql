CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `image` longblob NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `available_until` date NOT NULL,
  `shipping` varchar(50) NOT NULL,
  `shipping_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
