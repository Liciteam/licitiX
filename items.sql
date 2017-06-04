CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `Keywords` text NOT NULL,
  `short_description` text NOT NULL,
  `picture` longblob,
  `seller_id` int(11) NOT NULL,
  `category` text NOT NULL,
  `auction_start_date` date NOT NULL,
  `auction_end_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;