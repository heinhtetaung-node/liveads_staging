<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-13 12:12:23 --> SELECT
				product.pro_id,
				product.pro_description,
				product.pro_title,
				product.pro_price,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_created,
				product.pro_like_count,
				product.pro_image_name,
				product_sub.pro_id AS sort_pro_id,
				customer.cu_name
				FROM
				product
				LEFT JOIN (
									SELECT product_sub.pro_id from product as product_sub where product_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND product_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
								) AS product_sub ON product_sub.pro_id= product.pro_id
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-13 12:18:32 --> loginss:Balnaza21@gmail,25152515
ERROR - 2016-10-13 12:18:32 --> login failed
ERROR - 2016-10-13 12:23:06 --> register, code:4642
ERROR - 2016-10-13 12:23:06 --> register_succes:55
ERROR - 2016-10-13 12:23:07 --> an error has occured: OK: 59291_150_149<br>
ERROR - 2016-10-13 12:23:16 --> verification: user_id:55,code:
ERROR - 2016-10-13 12:25:40 --> verification: user_id:55,code:สวยมากครับดีgood
ERROR - 2016-10-13 12:26:03 --> loginss:Balnaza21@gmail,25152515
ERROR - 2016-10-13 12:26:03 --> login failed
ERROR - 2016-10-13 12:27:37 --> loginss:Balnaza21@gmail,25152515
ERROR - 2016-10-13 12:27:37 --> login failed
ERROR - 2016-10-13 15:28:54 --> SELECT
				product.pro_id,
				product.pro_description,
				product.pro_title,
				product.pro_price,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_created,
				product.pro_like_count,
				product.pro_image_name,
				product_sub.pro_id AS sort_pro_id,
				customer.cu_name
				FROM
				product
				LEFT JOIN (
									SELECT product_sub.pro_id from product as product_sub where product_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND product_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
								) AS product_sub ON product_sub.pro_id= product.pro_id
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-13 15:50:41 --> register, code:9277
ERROR - 2016-10-13 15:50:41 --> register_succes:56
ERROR - 2016-10-13 15:50:41 --> an error has occured: OK: 59291_151_150<br>
ERROR - 2016-10-13 15:50:57 --> verification: user_id:56,code:9277
ERROR - 2016-10-13 15:51:07 --> loginss:sweiheng_my3333@yahoo.com,05071231
ERROR - 2016-10-13 15:51:07 --> login
ERROR - 2016-10-13 22:03:45 --> SELECT `user_id` FROM `token` WHERE `token` = '028897579d64a12d408a262a46a9d31fcb56c955a3feb002c068d46b0438123f'
ERROR - 2016-10-13 22:03:46 --> SELECT `user_id` FROM `token` WHERE `token` = '028897579d64a12d408a262a46a9d31fcb56c955a3feb002c068d46b0438123f'
ERROR - 2016-10-13 22:03:59 --> SELECT `user_id` FROM `token` WHERE `token` = '028897579d64a12d408a262a46a9d31fcb56c955a3feb002c068d46b0438123f'
ERROR - 2016-10-13 22:04:00 --> SELECT `user_id` FROM `token` WHERE `token` = '028897579d64a12d408a262a46a9d31fcb56c955a3feb002c068d46b0438123f'
ERROR - 2016-10-13 23:06:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-13 23:58:38 --> register, code:8502
ERROR - 2016-10-13 23:59:08 --> register, code:2562
ERROR - 2016-10-13 23:59:08 --> register_succes:57
ERROR - 2016-10-13 23:59:08 --> an error has occured: OK: 59291_152_151<br>
ERROR - 2016-10-13 23:59:41 --> verification: user_id:57,code:2562
