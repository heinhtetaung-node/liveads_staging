<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-11-03 00:35:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( cu_name LIKE 'h%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM customer AND ( cu_name LIKE 'h%' )
ERROR - 2016-11-03 00:35:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( cu_name LIKE 'he%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM customer AND ( cu_name LIKE 'he%' )
ERROR - 2016-11-03 00:36:55 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:36:55 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:38:37 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:38:37 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:38:40 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:38:40 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:38:40 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:38:46 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:38:46 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:39:01 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:39:01 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:39:09 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:39:09 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:39:25 --> 404 Page Not Found: Uploads/brand
ERROR - 2016-11-03 00:39:25 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:41:29 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:41:29 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:48:12 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:48:12 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:48:15 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:48:15 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:49:40 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:49:45 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:49:45 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:50:18 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:50:18 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 00:50:38 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 01:12:19 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 01:12:19 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 12:27:48 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 12:32:09 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 13:26:14 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 13:26:14 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 13:55:22 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 13:55:22 --> 404 Page Not Found: Uploads/customer
ERROR - 2016-11-03 22:18:58 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:18:58 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:18:58 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:18:58 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:18:58 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:19:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:19:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:19:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:19:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:19:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:21:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:21:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:21:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:21:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:21:26 --> 404 Page Not Found: Uploads/category
ERROR - 2016-11-03 22:22:48 --> Query error: Unknown column 'product.pro_price_text' in 'field list' - Invalid query: SELECT
				customer.cu_name,
				product.pro_id,
				product.customer_id,
				product.pro_title,
				product.pro_image_base64,
				product.pro_price,
				product.pro_price_text,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_description,
				product.pro_is_deal,
				product.pro_is_promotion,
				product.pro_surprise_marked,
				product.pro_like_count,
				product.pro_image_name,
				product.pro_expired_date,
				product.paid_ads_start_date,
				product.paid_ads_end_date
				FROM
				product
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.pro_id  =7
ERROR - 2016-11-03 22:22:52 --> Query error: Unknown column 'product.pro_price_text' in 'field list' - Invalid query: SELECT
				customer.cu_name,
				product.pro_id,
				product.customer_id,
				product.pro_title,
				product.pro_image_base64,
				product.pro_price,
				product.pro_price_text,
				product.pro_discount_type,
				product.pro_discount_amount,
				product.pro_quantity,
				product.pro_description,
				product.pro_is_deal,
				product.pro_is_promotion,
				product.pro_surprise_marked,
				product.pro_like_count,
				product.pro_image_name,
				product.pro_expired_date,
				product.paid_ads_start_date,
				product.paid_ads_end_date
				FROM
				product
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.pro_id  =9
ERROR - 2016-11-03 22:23:21 --> 404 Page Not Found: Uploads/customer
