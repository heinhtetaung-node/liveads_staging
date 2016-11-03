<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-12 08:48:13 --> loginss
ERROR - 2016-10-12 08:49:10 --> register
ERROR - 2016-10-12 08:49:18 --> register
ERROR - 2016-10-12 08:49:53 --> register
ERROR - 2016-10-12 08:49:53 --> register_succes:46
ERROR - 2016-10-12 08:49:53 --> an error has occured: OK: 59291_141_140<br>
ERROR - 2016-10-12 11:16:24 --> 404 Page Not Found: Flashnews/deleteFlash
ERROR - 2016-10-12 11:49:17 --> register
ERROR - 2016-10-12 11:49:17 --> register_succes:47
ERROR - 2016-10-12 11:49:18 --> an error has occured: OK: 59291_142_141<br>
ERROR - 2016-10-12 11:49:29 --> verification
ERROR - 2016-10-12 11:49:48 --> loginss
ERROR - 2016-10-12 11:49:48 --> login
ERROR - 2016-10-12 12:12:43 --> register
ERROR - 2016-10-12 12:12:43 --> register_succes:48
ERROR - 2016-10-12 12:12:43 --> an error has occured: OK: 59291_143_142<br>
ERROR - 2016-10-12 12:12:56 --> verification
ERROR - 2016-10-12 12:13:10 --> loginss
ERROR - 2016-10-12 12:13:10 --> login
ERROR - 2016-10-12 12:15:30 --> SELECT `user_id` FROM `token` WHERE `token` = 'd281810a62d4c99b2927f018f3fbb36ad626440dd76f0aff536fbb06eb0e7a32'
ERROR - 2016-10-12 12:58:00 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 17  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-12 14:06:18 --> register
ERROR - 2016-10-12 14:06:18 --> register_succes:49
ERROR - 2016-10-12 14:06:19 --> an error has occured: OK: 59291_144_143<br>
ERROR - 2016-10-12 14:06:28 --> verification
ERROR - 2016-10-12 14:06:47 --> loginss
ERROR - 2016-10-12 14:07:12 --> loginss
ERROR - 2016-10-12 14:07:12 --> login
ERROR - 2016-10-12 15:30:21 --> register
ERROR - 2016-10-12 15:30:21 --> register_succes:50
ERROR - 2016-10-12 15:30:22 --> an error has occured: OK: 59291_145_144<br>
ERROR - 2016-10-12 15:32:41 --> register
ERROR - 2016-10-12 15:33:33 --> loginss
ERROR - 2016-10-12 15:37:48 --> loginss
ERROR - 2016-10-12 16:00:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-12 16:10:51 --> loginss
ERROR - 2016-10-12 16:10:51 --> login
ERROR - 2016-10-12 16:18:00 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 17  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-12 16:18:07 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 9  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-12 16:43:45 --> register, code:9195
ERROR - 2016-10-12 16:43:50 --> register, code:9180
ERROR - 2016-10-12 16:43:50 --> register_succes:51
ERROR - 2016-10-12 16:43:51 --> an error has occured: OK: 59291_146_145<br>
ERROR - 2016-10-12 16:44:08 --> verification: user_id:51,code:9180
ERROR - 2016-10-12 16:44:40 --> loginss:lao_er865@yahoo.com.sg,123456
ERROR - 2016-10-12 16:44:40 --> login
ERROR - 2016-10-12 19:49:52 --> register, code:1589
ERROR - 2016-10-12 19:49:52 --> register_succes:52
ERROR - 2016-10-12 19:49:52 --> an error has occured: OK: 59291_147_146<br>
ERROR - 2016-10-12 19:50:08 --> verification: user_id:52,code:1589
ERROR - 2016-10-12 19:50:25 --> loginss:saifu.251390@gmail.com,251390
ERROR - 2016-10-12 19:50:25 --> login
ERROR - 2016-10-12 20:03:33 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 17  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-12 20:25:50 --> SELECT
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
ERROR - 2016-10-12 20:25:56 --> SELECT `user_id` FROM `token` WHERE `token` = 'b9d37e3d9307df644d3ae5e8b6dee5da2db7a4bad4c62f40284e9763ed0df06e'
ERROR - 2016-10-12 20:25:59 --> SELECT `user_id` FROM `token` WHERE `token` = 'b9d37e3d9307df644d3ae5e8b6dee5da2db7a4bad4c62f40284e9763ed0df06e'
ERROR - 2016-10-12 22:52:52 --> register, code:2157
ERROR - 2016-10-12 22:53:24 --> register, code:4785
ERROR - 2016-10-12 22:53:24 --> register_succes:53
ERROR - 2016-10-12 22:53:25 --> an error has occured: OK: 59291_148_147<br>
ERROR - 2016-10-12 22:53:52 --> verification: user_id:53,code:4785
ERROR - 2016-10-12 22:54:17 --> loginss:sred520025,smallred
ERROR - 2016-10-12 22:54:17 --> login failed
ERROR - 2016-10-12 22:54:26 --> loginss:sred520025@gmail.com,smallred
ERROR - 2016-10-12 22:54:26 --> login
ERROR - 2016-10-12 23:01:25 --> loginss:Manishpatail375@gmail.Com,9516808761
ERROR - 2016-10-12 23:01:25 --> login failed
ERROR - 2016-10-12 23:01:29 --> loginss:Manishpatail375@gmail.Com,9516808761
ERROR - 2016-10-12 23:01:29 --> login failed
ERROR - 2016-10-12 23:03:28 --> register, code:4758
ERROR - 2016-10-12 23:03:28 --> register_succes:54
ERROR - 2016-10-12 23:03:28 --> an error has occured: OK: 59291_149_148<br>
ERROR - 2016-10-12 23:04:29 --> loginss:Manishpatail375@gmail.Com,9516808761
ERROR - 2016-10-12 23:04:29 --> login failed
ERROR - 2016-10-12 23:05:47 --> register, code:7627
ERROR - 2016-10-12 23:06:04 --> register, code:5362
ERROR - 2016-10-12 23:06:18 --> register, code:1714
ERROR - 2016-10-12 23:06:37 --> register, code:1087
ERROR - 2016-10-12 23:07:46 --> loginss:Manishpatail375@gmail,9516808761
ERROR - 2016-10-12 23:07:46 --> login failed
ERROR - 2016-10-12 23:08:36 --> register, code:3189
ERROR - 2016-10-12 23:15:39 --> SELECT
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
ERROR - 2016-10-12 23:15:47 --> SELECT
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
ERROR - 2016-10-12 23:16:21 --> SELECT
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
