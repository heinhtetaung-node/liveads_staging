<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-10 04:13:15 --> SELECT
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
ERROR - 2016-10-10 04:56:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2016-10-10 05:40:16 --> 404 Page Not Found: api//index
ERROR - 2016-10-10 09:57:34 --> SELECT
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
ERROR - 2016-10-10 09:58:00 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 15  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-10 10:05:24 --> SELECT
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
ERROR - 2016-10-10 10:05:30 --> SELECT
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
ERROR - 2016-10-10 11:30:33 --> register
ERROR - 2016-10-10 11:30:33 --> register_succes:40
ERROR - 2016-10-10 11:30:34 --> an error has occured: OK: 59291_134_133<br>
ERROR - 2016-10-10 11:31:00 --> verification
ERROR - 2016-10-10 11:31:16 --> loginss
ERROR - 2016-10-10 11:31:16 --> login
ERROR - 2016-10-10 12:24:31 --> register
ERROR - 2016-10-10 12:24:31 --> register_succes:41
ERROR - 2016-10-10 12:24:32 --> an error has occured: OK: 59291_135_134<br>
ERROR - 2016-10-10 12:24:41 --> verification
ERROR - 2016-10-10 12:26:11 --> loginss
ERROR - 2016-10-10 12:26:11 --> login
ERROR - 2016-10-10 14:09:46 -->  26XLN6
ERROR - 2016-10-10 14:10:14 -->  26XLN6
ERROR - 2016-10-10 14:22:01 --> register
ERROR - 2016-10-10 14:22:01 --> register_succes:42
ERROR - 2016-10-10 14:22:02 --> an error has occured: OK: 59291_136_135<br>
ERROR - 2016-10-10 14:22:12 --> verification
ERROR - 2016-10-10 14:22:40 --> loginss
ERROR - 2016-10-10 14:22:54 --> loginss
ERROR - 2016-10-10 14:23:06 --> loginss
ERROR - 2016-10-10 14:23:15 --> loginss
ERROR - 2016-10-10 14:24:25 --> register
ERROR - 2016-10-10 14:24:47 --> loginss
ERROR - 2016-10-10 14:30:08 --> loginss
ERROR - 2016-10-10 14:30:08 --> login
ERROR - 2016-10-10 14:31:27 --> loginss
ERROR - 2016-10-10 14:32:02 --> loginss
ERROR - 2016-10-10 14:32:14 --> loginss
ERROR - 2016-10-10 14:32:33 --> loginss
ERROR - 2016-10-10 14:32:33 --> login
ERROR - 2016-10-10 14:33:12 --> loginss
ERROR - 2016-10-10 14:33:30 --> loginss
ERROR - 2016-10-10 14:33:30 --> login
ERROR - 2016-10-10 14:38:20 --> loginss
ERROR - 2016-10-10 14:38:42 --> loginss
ERROR - 2016-10-10 14:38:42 --> login
ERROR - 2016-10-10 14:40:36 --> loginss
ERROR - 2016-10-10 14:43:21 --> loginss
ERROR - 2016-10-10 14:43:21 --> login
ERROR - 2016-10-10 14:44:06 --> loginss
ERROR - 2016-10-10 14:44:17 --> loginss
ERROR - 2016-10-10 14:44:17 --> login
ERROR - 2016-10-10 14:47:42 --> SELECT `user_id` FROM `token` WHERE `token` = 'df6e67f70818cdcd146dfacb1541e10cefa0942778a18733d817d5006f63dbb2'
ERROR - 2016-10-10 14:49:41 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
