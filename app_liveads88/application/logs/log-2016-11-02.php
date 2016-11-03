<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-11-02 00:04:32 --> SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,
				`event`.ev_like_count,
				`event`.ev_img_name
				
				FROM
								`event`
				
				WHERE `event`.ev_status = 0 AND
								`event`.paid_ads_start_date <= '2016-11-02' AND `event`.paid_ads_end_date >= '2016-11-02' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-02 00:06:37 --> like:126
ERROR - 2016-11-02 00:06:45 --> SELECT
				product.pro_id,
				product.pro_description,
				product.pro_title,
				product.pro_price,
				product.pro_price_text,
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 30  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-02 20:28:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'adsname   asc  LIMIT 0 ,10' at line 5 - Invalid query: 
		SELECT a.adscomponent_id, a.adsname, a.previewphoto_m, 
		GROUP_CONCAT(p.price, " ", p.price_unit," FOR ", p.days, " Days<br>") AS price_options
		FROM adscomponent a
		INNER JOIN adscomponent_price p
		ON a.adscomponent_id=p.adscomponent_id WHERE 1=1 GROUP BY a.adscomponent_id ORDER BY a.adscomponent_id DESC adsname   asc  LIMIT 0 ,10   
ERROR - 2016-11-02 20:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:28:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'adsname   asc  LIMIT 0 ,10' at line 5 - Invalid query: 
		SELECT a.adscomponent_id, a.adsname, a.previewphoto_m, 
		GROUP_CONCAT(p.price, " ", p.price_unit," FOR ", p.days, " Days<br>") AS price_options
		FROM adscomponent a
		INNER JOIN adscomponent_price p
		ON a.adscomponent_id=p.adscomponent_id WHERE 1=1 GROUP BY a.adscomponent_id ORDER BY a.adscomponent_id DESC adsname   asc  LIMIT 0 ,10   
ERROR - 2016-11-02 20:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:30:14 --> Query error: Unknown column 'a.adscomponent_idadsname' in 'group statement' - Invalid query: 
		SELECT a.adscomponent_id, a.adsname, a.previewphoto_m, 
		GROUP_CONCAT(p.price, " ", p.price_unit," FOR ", p.days, " Days<br>") AS price_options
		FROM adscomponent a
		INNER JOIN adscomponent_price p
		ON a.adscomponent_id=p.adscomponent_id WHERE 1=1 GROUP BY a.adscomponent_idadsname   asc  LIMIT 0 ,10   
ERROR - 2016-11-02 20:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:30:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'adsname   asc  LIMIT 0 ,10' at line 5 - Invalid query: 
		SELECT a.adscomponent_id, a.adsname, a.previewphoto_m, 
		GROUP_CONCAT(p.price, " ", p.price_unit," FOR ", p.days, " Days<br>") AS price_options
		FROM adscomponent a
		INNER JOIN adscomponent_price p
		ON a.adscomponent_id=p.adscomponent_id WHERE 1=1 GROUP BY a.adscomponent_id adsname   asc  LIMIT 0 ,10   
ERROR - 2016-11-02 20:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( adsname LIKE 'v%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent AND ( adsname LIKE 'v%' )
ERROR - 2016-11-02 20:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( adsname LIKE 'vp%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent AND ( adsname LIKE 'vp%' )
ERROR - 2016-11-02 20:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( adsname LIKE 'v%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent AND ( adsname LIKE 'v%' )
ERROR - 2016-11-02 20:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( adsname LIKE 's%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent AND ( adsname LIKE 's%' )
ERROR - 2016-11-02 20:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND ( adsname LIKE 's%' )' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent AND ( adsname LIKE 's%' )
ERROR - 2016-11-02 20:33:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent WHERE adsname LIKE '%A%' )
ERROR - 2016-11-02 20:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2016-11-02 20:33:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 - Invalid query: SELECT COUNT(*) as rowcount FROM adscomponent WHERE adsname LIKE '%A%' )
ERROR - 2016-11-02 20:34:06 --> 404 Page Not Found: Assets/css
