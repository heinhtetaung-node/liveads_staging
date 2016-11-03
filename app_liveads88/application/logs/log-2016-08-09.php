<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-08-09 15:19:46 --> Query error: Unknown column 'product.pro_surprise_marked' in 'order clause' - Invalid query: SELECT
				product.*,
				product_sub.pro_id as sort_pro_id,
				customer.cu_email
				FROM
				product
				INNER JOIN customer ON customer.cu_id = product.customer_id
				LEFT JOIN (
					SELECT product_sub.pro_id from product as product_sub where product_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND product_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as product_sub 
				ON product_sub.pro_id = product.pro_id
				WHERE
				product.pro_expired_date >= DATE(NOW()) AND product.pro_is_deal = 1   ORDER BY product.`pro_surprise_marked` DESC, sort_pro_id DESC, product.pro_created DESC  
