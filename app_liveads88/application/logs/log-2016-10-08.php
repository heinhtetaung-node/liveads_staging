<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-08 11:15:37 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
ERROR - 2016-10-08 11:21:14 --> SELECT
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
ERROR - 2016-10-08 12:47:15 --> loginss
ERROR - 2016-10-08 12:47:15 --> login
ERROR - 2016-10-08 12:54:03 --> loginss
ERROR - 2016-10-08 12:54:03 --> login
ERROR - 2016-10-08 13:00:45 --> 32 26XLN6
ERROR - 2016-10-08 13:01:13 --> 32 26XLN6
ERROR - 2016-10-08 14:02:23 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 11  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-08 14:08:34 --> 32 26XLN6
ERROR - 2016-10-08 23:01:24 --> SELECT
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
ERROR - 2016-10-08 23:35:57 --> register
ERROR - 2016-10-08 23:35:57 --> register_succes:38
ERROR - 2016-10-08 23:35:58 --> an error has occured: OK: 59291_132_131<br>
ERROR - 2016-10-08 23:36:16 --> verification
ERROR - 2016-10-08 23:36:37 --> loginss
ERROR - 2016-10-08 23:36:59 --> loginss
ERROR - 2016-10-08 23:37:16 --> loginss
ERROR - 2016-10-08 23:37:30 --> loginss
ERROR - 2016-10-08 23:37:30 --> login
ERROR - 2016-10-08 23:53:12 --> loginss
ERROR - 2016-10-08 23:53:21 --> loginss
ERROR - 2016-10-08 23:53:30 --> loginss
