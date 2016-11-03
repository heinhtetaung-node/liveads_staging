<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-15 03:57:45 --> loginss:tamon.sapak@gmail.com,lahiklembok
ERROR - 2016-10-15 03:57:45 --> login failed
ERROR - 2016-10-15 03:57:55 --> loginss:tamon.sapak@gmail.com,lahiklembok6
ERROR - 2016-10-15 03:57:55 --> login failed
ERROR - 2016-10-15 03:59:42 --> register, code:5386
ERROR - 2016-10-15 03:59:42 --> register_succes:60
ERROR - 2016-10-15 03:59:43 --> an error has occured: OK: 59291_155_154<br>
ERROR - 2016-10-15 03:59:51 --> verification: user_id:60,code:
ERROR - 2016-10-15 04:49:34 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-15 08:09:22 --> SELECT `user_id` FROM `token` WHERE `token` = 'e68462d238eabe87ec9f8647d1998839e709bd6f22fe5f320358fab04a7ff4f4'
ERROR - 2016-10-15 08:09:48 --> SELECT
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
ERROR - 2016-10-15 11:09:54 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
ERROR - 2016-10-15 12:40:17 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 10  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-15 12:40:36 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 13  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-15 13:03:11 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 18  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-15 13:56:06 --> SELECT `user_id` FROM `token` WHERE `token` = 'b8e7c6b9a75d026f3a533ad7319360d7597622481f9f3da3e8eae77280eb9b26'
ERROR - 2016-10-15 14:09:44 --> loginss:june001214@hotmail.my,001214
ERROR - 2016-10-15 14:09:44 --> login failed
ERROR - 2016-10-15 14:09:47 --> loginss:june001214@hotmail.my,001214
ERROR - 2016-10-15 14:09:47 --> login failed
ERROR - 2016-10-15 14:11:01 --> loginss:june001214@gmail.com,Yenlin6558
ERROR - 2016-10-15 14:11:01 --> login failed
ERROR - 2016-10-15 14:11:04 --> loginss:june001214@gmail.com,Yenlin6558
ERROR - 2016-10-15 14:11:04 --> login failed
ERROR - 2016-10-15 14:11:16 --> loginss:june001214@gmail.com,Yenlin6558
ERROR - 2016-10-15 14:11:16 --> login failed
ERROR - 2016-10-15 14:11:44 --> loginss:june001214@gmail.com,yenlin6558
ERROR - 2016-10-15 14:11:44 --> login failed
ERROR - 2016-10-15 14:12:39 --> register, code:5926
ERROR - 2016-10-15 14:12:39 --> register_succes:61
ERROR - 2016-10-15 14:12:40 --> an error has occured: OK: 59291_156_155<br>
ERROR - 2016-10-15 14:12:56 --> verification: user_id:61,code:5926
ERROR - 2016-10-15 14:13:06 --> loginss:june001214@gmail.com,001214
ERROR - 2016-10-15 14:13:06 --> login
ERROR - 2016-10-15 21:18:25 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 10  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-15 21:18:31 --> SELECT
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
ERROR - 2016-10-15 21:18:40 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 18  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-15 21:20:03 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 18  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-15 22:26:39 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:26:39 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:26:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:26:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:26:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:26:40 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:26:40 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:26:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:26:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:26:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:26:42 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:26:42 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:26:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:26:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:26:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:26:44 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:26:44 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:26:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:26:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:26:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:26:55 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:26:55 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:26:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:26:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:26:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:26:56 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:26:56 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:26:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:26:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:26:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:12 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:12 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:27:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:14 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:14 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:27:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:16 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:16 --> Severity: Notice --> Undefined variable: pro_img /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 219
ERROR - 2016-10-15 22:27:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:44 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:45 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:46 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:27:58 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:27:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:27:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:27:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-10-15 22:28:02 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/upload/files/11/promo-era4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/models/Product_model.php 194
ERROR - 2016-10-15 22:28:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-10-15 22:28:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-15 22:28:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
