<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-09-01 10:54:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'coupon.cp_id =1' at line 13 - Invalid query: SELECT
				coupon.cp_id,
				coupon.cp_img_name,
				coupon.cp_description,
				coupon.cp_like_count,
				coupon.cp_valid_to,
				coupon.cp_quantity
				FROM
				coupon
				WHERE
				coupon.cp_status = 0 AND
				(cp.cp_valid_from <= DATE(NOW())AND cp.cp_valid_to >= DATE(NOW()) AND cp.cp_type ='date') OR (cp.cp_quantity > cp.cp_usage AND cp.cp_type ='quantity')
				coupon.cp_id =1
ERROR - 2016-09-01 10:54:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'coupon.cp_id =1' at line 13 - Invalid query: SELECT
				coupon.cp_id,
				coupon.cp_img_name,
				coupon.cp_description,
				coupon.cp_like_count,
				coupon.cp_valid_to,
				coupon.cp_quantity
				FROM
				coupon
				WHERE
				coupon.cp_status = 0 AND
				(coupon.cp_valid_from <= DATE(NOW())AND coupon.cp_valid_to >= DATE(NOW()) AND coupon.cp_type ='date') OR (coupon.cp_quantity > coupon.cp_usage AND coupon.cp_type ='quantity')
				coupon.cp_id =1
ERROR - 2016-09-01 10:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'coupon.cp_id =1' at line 13 - Invalid query: SELECT
				coupon.cp_id,
				coupon.cp_img_name,
				coupon.cp_description,
				coupon.cp_like_count,
				coupon.cp_valid_to,
				coupon.cp_quantity
				FROM
				coupon
				WHERE
				coupon.cp_status = 0 AND
				(coupon.cp_valid_from <= DATE(NOW())AND coupon.cp_valid_to >= DATE(NOW()) AND coupon.cp_type ='date') OR (coupon.cp_quantity > coupon.cp_usage AND coupon.cp_type ='quantity')
				coupon.cp_id =1
ERROR - 2016-09-01 10:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AN coupon.cp_id =1' at line 13 - Invalid query: SELECT
				coupon.cp_id,
				coupon.cp_img_name,
				coupon.cp_description,
				coupon.cp_like_count,
				coupon.cp_valid_to,
				coupon.cp_quantity
				FROM
				coupon
				WHERE
				coupon.cp_status = 0 AND
				(coupon.cp_valid_from <= DATE(NOW())AND coupon.cp_valid_to >= DATE(NOW()) AND coupon.cp_type ='date') OR (coupon.cp_quantity > coupon.cp_usage AND coupon.cp_type ='quantity')
				AN coupon.cp_id =1
