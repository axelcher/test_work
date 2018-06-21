
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `orders` (
  `id` smallint(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_client_1_idx` (`client_id`),
  CONSTRAINT `fk_client_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `orderProducts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` smallint(11) NOT NULL,
  `productId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_1_idx` (`orderId`),
  KEY `fk_product_1_idx` (`productId`),
  CONSTRAINT `fk_order_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


/****************************************************/


SELECT
    o.id,
    o.created,
    COUNT(p.id) AS count_product,
    ROUND(AVG(p.price), 2) AS avg_product_price
FROM
    owox.orders AS o
        LEFT JOIN
    owox.orderProducts AS op ON op.orderId = o.id
        LEFT JOIN
    owox.products AS p ON p.id = op.productId
GROUP BY o.id
HAVING count_product > 1
ORDER BY o.created
Limit 10;