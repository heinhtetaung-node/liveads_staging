<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-11 02:46:57 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-11 02:49:50 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-11 09:16:15 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-11 09:16:17 --> SELECT
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
ERROR - 2016-10-11 12:15:07 --> SELECT
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
ERROR - 2016-10-11 12:18:33 --> loginss
ERROR - 2016-10-11 12:31:16 --> register
ERROR - 2016-10-11 12:31:16 --> register_succes:43
ERROR - 2016-10-11 12:31:16 --> an error has occured: OK: 59291_137_136<br>
ERROR - 2016-10-11 12:33:16 --> register
ERROR - 2016-10-11 12:44:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-11 12:45:07 --> register
ERROR - 2016-10-11 12:46:08 --> loginss
ERROR - 2016-10-11 12:46:36 --> loginss
ERROR - 2016-10-11 12:46:38 --> loginss
ERROR - 2016-10-11 12:47:10 --> loginss
ERROR - 2016-10-11 12:48:37 --> loginss
ERROR - 2016-10-11 12:48:51 --> loginss
ERROR - 2016-10-11 12:50:15 --> loginss
ERROR - 2016-10-11 12:50:39 --> loginss
ERROR - 2016-10-11 12:50:42 --> loginss
ERROR - 2016-10-11 12:51:36 --> loginss
ERROR - 2016-10-11 12:51:36 --> login
ERROR - 2016-10-11 12:57:15 --> loginss
ERROR - 2016-10-11 12:57:15 --> login
ERROR - 2016-10-11 16:34:35 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-11 16:39:31 --> Query error: Unknown column 'coupon.customer_id' in 'on clause' - Invalid query: SELECT
				cp.cp_id,
				cp.cp_img_name,
				cp.cp_like_count,
				cp_sub.cp_id as sort_cp_id
				FROM
				coupon as cp
				
				
				LEFT JOIN (
					SELECT cp_sub.cp_id from coupon as cp_sub where cp_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND cp_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as cp_sub 
				ON cp_sub.cp_id = cp.cp_id
				
				inner join customer on customer.cu_id = coupon.customer_id
				WHERE
				(cp.cp_valid_from <= DATE(NOW())AND cp.cp_valid_to >= DATE(NOW()) AND cp.cp_type ='date') OR (cp.cp_quantity > cp.cp_usage AND cp.cp_type ='quantity') 
				 AND cp.cp_status = 0  ORDER BY sort_cp_id DESC, cp.cp_created DESC
				
ERROR - 2016-10-11 16:40:42 --> Severity: Notice --> Undefined property: stdClass::$cp_name /home/liveads88/public_html/app_liveads88/application/controllers/api/Coupons.php 119
ERROR - 2016-10-11 16:40:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-11 16:40:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-11 16:40:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-11 16:40:47 --> Severity: Notice --> Undefined property: stdClass::$cp_name /home/liveads88/public_html/app_liveads88/application/controllers/api/Coupons.php 119
ERROR - 2016-10-11 16:40:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-11 16:40:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-11 16:40:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-11 16:40:58 --> Severity: Notice --> Undefined property: stdClass::$cp_name /home/liveads88/public_html/app_liveads88/application/controllers/api/Coupons.php 119
ERROR - 2016-10-11 16:40:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-11 16:40:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-11 16:40:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-11 16:45:44 --> SELECT
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
ERROR - 2016-10-11 16:48:09 --> register
ERROR - 2016-10-11 16:48:09 --> register_succes:44
ERROR - 2016-10-11 16:48:10 --> an error has occured: OK: 59291_139_138<br>
ERROR - 2016-10-11 16:48:24 --> verification
ERROR - 2016-10-11 16:59:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-11 17:07:59 --> register
ERROR - 2016-10-11 17:08:08 --> register
ERROR - 2016-10-11 17:08:08 --> register_succes:45
ERROR - 2016-10-11 17:08:08 --> an error has occured: OK: 59291_140_139<br>
ERROR - 2016-10-11 17:08:28 --> verification
ERROR - 2016-10-11 17:08:49 --> loginss
ERROR - 2016-10-11 17:08:49 --> login
ERROR - 2016-10-11 17:11:17 --> loginss
ERROR - 2016-10-11 17:11:28 --> loginss
ERROR - 2016-10-11 17:11:36 --> SELECT
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
ERROR - 2016-10-11 17:59:09 --> 404 Page Not Found: Flashnews/deleteFlash
ERROR - 2016-10-11 17:59:11 --> 404 Page Not Found: Flashnews/deleteFlash
ERROR - 2016-10-11 17:59:17 --> 404 Page Not Found: Flashnews/deleteFlash
ERROR - 2016-10-11 17:59:50 --> 404 Page Not Found: Flashnews/deleteFlash
ERROR - 2016-10-11 18:31:00 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
ERROR - 2016-10-11 22:59:57 --> loginss
ERROR - 2016-10-11 22:59:57 --> login
