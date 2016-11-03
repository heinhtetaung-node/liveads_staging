<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-18 00:06:48 --> SELECT `user_id` FROM `token` WHERE `token` = 'b439ab3ae130f9962be5c91b2964699b61bea2023287dedb0d52b5e0e496cb3f'
ERROR - 2016-10-18 00:17:02 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 00:29:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 00:31:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 00:35:18 --> SELECT
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
ERROR - 2016-10-18 00:44:22 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 00:52:46 --> SELECT
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
ERROR - 2016-10-18 01:25:43 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:26:37 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:28:36 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:29:04 --> Severity: Warning --> unlink(uploads/banner/): Is a directory /home/liveads88/public_html/app_liveads88/application/models/Banner_model.php 78
ERROR - 2016-10-18 01:29:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/helpers/url_helper.php 564
ERROR - 2016-10-18 01:29:12 --> Severity: Warning --> unlink(uploads/banner/): Is a directory /home/liveads88/public_html/app_liveads88/application/models/Banner_model.php 78
ERROR - 2016-10-18 01:29:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/helpers/url_helper.php 564
ERROR - 2016-10-18 01:30:18 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:32:09 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:36:50 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_d_1476726241_933573606d002c29bc80e1f2ad4cd509.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_d_1476726241_933573606d002c29bc80e1f2ad4cd509.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_d_1476726241_933573606d002c29bc80e1f2ad4cd509.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_c_1476726241_534a08bc36b379d4561225f2b666f9be.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_c_1476726241_534a08bc36b379d4561225f2b666f9be.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_c_1476726241_534a08bc36b379d4561225f2b666f9be.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_e_1476726241_f2c9e699530e8ff53adcdf45eaf60f9c.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_e_1476726241_f2c9e699530e8ff53adcdf45eaf60f9c.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_e_1476726241_f2c9e699530e8ff53adcdf45eaf60f9c.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_j_1476726241_9e01f62d28c85a455bf0267edd1ebbb9.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_j_1476726241_9e01f62d28c85a455bf0267edd1ebbb9.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_j_1476726241_9e01f62d28c85a455bf0267edd1ebbb9.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_p_1476726241_ca5d9c7efd91e2352b6c282e1cf3bd5d.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_p_1476726241_ca5d9c7efd91e2352b6c282e1cf3bd5d.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/19_p_1476726241_ca5d9c7efd91e2352b6c282e1cf3bd5d.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 01:44:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/helpers/url_helper.php 564
ERROR - 2016-10-18 01:44:21 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 01:46:25 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 02:10:39 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_d_1476728047_64aaf090dd51b9481efa607cfadfcd9e.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_d_1476728047_64aaf090dd51b9481efa607cfadfcd9e.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_d_1476728047_64aaf090dd51b9481efa607cfadfcd9e.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_c_1476728047_b1515d5ec5320abc4282d3bdad3531bc.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_c_1476728047_b1515d5ec5320abc4282d3bdad3531bc.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_c_1476728047_b1515d5ec5320abc4282d3bdad3531bc.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_e_1476728047_b2bc20cb593474ccd62c755052c81ab4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_e_1476728047_b2bc20cb593474ccd62c755052c81ab4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_e_1476728047_b2bc20cb593474ccd62c755052c81ab4.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_j_1476728047_646df78ac60d82875cd0be89ac9f0cd9.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_j_1476728047_646df78ac60d82875cd0be89ac9f0cd9.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_j_1476728047_646df78ac60d82875cd0be89ac9f0cd9.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_put_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_p_1476728047_f32fa8a467de50affe6910b68b89589e.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 127
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> file_get_contents(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_p_1476728047_f32fa8a467de50affe6910b68b89589e.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecreatefromstring(): Empty string or invalid image /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 141
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> getimagesize(/home/liveads88/public_html/app_liveads88/uploads/banner/web/20_p_1476728047_f32fa8a467de50affe6910b68b89589e.jpg): failed to open stream: No such file or directory /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 142
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagecopyresampled() expects parameter 2 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 143
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> imagedestroy() expects parameter 1 to be resource, boolean given /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 162
ERROR - 2016-10-18 02:14:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/helpers/url_helper.php 564
ERROR - 2016-10-18 02:14:22 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 02:30:37 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 02:39:51 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-18 03:50:47 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 04:18:47 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-18 04:18:47 --> login
ERROR - 2016-10-18 04:18:48 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f-32-1
ERROR - 2016-10-18 07:11:03 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f-67-1
ERROR - 2016-10-18 07:18:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 09:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
								`event`
				
				WHERE
								`event`.ev_status = 0 AND
								`e' at line 10 - Invalid query: SELECT
				`event`.ev_id,
				`event`.ev_title,
				`event`.ev_location,
				`event`.ev_description,
				`event`.ev_date,
				`event`.ev_like_count,
				`event`.ev_img_name,
				
				FROM
								`event`
				
				WHERE
								`event`.ev_status = 0 AND
								`event`.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND `event`.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
								 ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:17:11 --> SELECT
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
								`event`.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND `event`.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d') ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:18:28 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:18:29 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:18:33 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:19:15 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:19:26 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:19:36 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:19:39 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:20:38 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:20:38 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:21:02 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:21:13 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:21:33 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 09:21:39 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 09:21:43 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:21:45 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 09:21:47 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:21:51 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:22:04 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 09:22:20 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 09:23:41 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:24:10 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:24:13 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:36:21 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 09:36:37 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:44:46 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-18 09:46:59 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-18 09:47:25 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-18 09:48:38 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-18 09:48:49 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:49:08 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:49:43 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:50:54 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 09:51:53 --> Severity: Notice --> Undefined offset: 1 /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 51
ERROR - 2016-10-18 09:51:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asc  LIMIT 0 ,10' at line 5 - Invalid query: SELECT
				*
				 FROM
				`push_notifications` WHERE 1=1
				 ORDER BY    asc  LIMIT 0 ,10   
ERROR - 2016-10-18 09:51:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-18 09:51:57 --> Severity: Notice --> Undefined offset: 1 /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 51
ERROR - 2016-10-18 09:51:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc  LIMIT 0 ,10' at line 5 - Invalid query: SELECT
				*
				 FROM
				`push_notifications` WHERE 1=1
				 ORDER BY    desc  LIMIT 0 ,10   
ERROR - 2016-10-18 09:51:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-18 09:52:42 --> Severity: Notice --> Undefined offset: 1 /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 51
ERROR - 2016-10-18 09:52:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asc  LIMIT 0 ,10' at line 5 - Invalid query: SELECT
				*
				 FROM
				`push_notifications` WHERE 1=1
				 ORDER BY    asc  LIMIT 0 ,10   
ERROR - 2016-10-18 09:52:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-18 10:14:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-18 10:14:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-18 10:23:08 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:23:18 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:23:46 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.sequence FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_' at line 3 - Invalid query: SELECT
				banner.banner_linkto ,banner_image.bi_promotion_url , banner.banner_link, banner.customer_id , banner.banner_email  
				banner.sequence FROM
				banner
				INNER JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE banner.promotion = 1  order by banner.sequence asc
ERROR - 2016-10-18 10:32:11 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:32:25 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:33:02 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:33:04 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:38:20 --> Severity: Notice --> Undefined offset: 3 /home/liveads88/public_html/app_liveads88/application/controllers/Banner.php 55
ERROR - 2016-10-18 10:38:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asc  LIMIT 0 ,10' at line 3 - Invalid query: SELECT banner.*, banner_image.* FROM banner 
				JOIN banner_image ON banner_image.bi_banner_id = banner.banner_id 
				WHERE 1=1 ORDER BY    asc  LIMIT 0 ,10   
ERROR - 2016-10-18 10:38:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-18 10:40:39 --> Severity: Notice --> Undefined offset: 1 /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 51
ERROR - 2016-10-18 10:40:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc  LIMIT 0 ,10' at line 5 - Invalid query: SELECT
				*
				 FROM
				`push_notifications` WHERE 1=1
				 ORDER BY    desc  LIMIT 0 ,10   
ERROR - 2016-10-18 10:40:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-18 10:41:44 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08-49-1
ERROR - 2016-10-18 10:53:44 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:54:11 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:54:11 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:54:11 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:54:11 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:54:29 --> SELECT
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
ERROR - 2016-10-18 10:55:39 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 10:56:04 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:56:04 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:56:04 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 10:56:04 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 11:03:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 11:04:16 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 11:07:00 --> Query error: Unknown column 'product_sub.pro_id' in 'field list' - Invalid query: SELECT
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
				
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.paid_ads_start_date <= '2016-10-18' AND product.paid_ads_end_date >= '2016-10-18'
				AND 
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-18 11:07:25 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:07:34 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:07:34 --> Query error: Unknown column 'sort_pro_id' in 'order clause' - Invalid query: SELECT
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
				
				customer.cu_name
				FROM
				product
				
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.paid_ads_start_date <= '2016-10-18' AND product.paid_ads_end_date >= '2016-10-18'
				AND 
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-18 11:07:39 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:07:48 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:07:53 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:07:58 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:08:05 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:08:18 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:08:23 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:08:33 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:08:38 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:09:02 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-18 11:09:03 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 11:09:29 --> SELECT
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
				
				customer.cu_name
				FROM
				product
				
				LEFT JOIN customer ON product.customer_id = customer.cu_id
				WHERE
				product.paid_ads_start_date <= '2016-10-18' AND product.paid_ads_end_date >= '2016-10-18'
				AND 
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 ORDER BY  product.pro_created DESC 
ERROR - 2016-10-18 11:09:29 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-18 11:09:56 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 11:09:56 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 11:09:56 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 11:09:56 --> 404 Page Not Found: Upload/js
ERROR - 2016-10-18 11:10:55 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 12:56:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 13:24:59 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-18 13:26:55 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-18 13:27:57 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 14:09:23 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 14:11:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 14:32:46 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 14:34:49 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0-69-1
ERROR - 2016-10-18 14:51:50 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 15:55:04 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 16:04:37 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:14:33 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 16:15:04 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:16:17 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:16:21 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 16:22:57 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 16:23:08 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:23:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:25:52 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:27:09 --> SELECT
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
ERROR - 2016-10-18 16:35:19 --> SELECT
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
ERROR - 2016-10-18 16:36:26 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 16:36:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:38:52 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 16:39:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:41:04 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:42:23 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 16:55:38 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-18 16:56:20 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-18 17:02:44 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-18 17:02:44 --> login
ERROR - 2016-10-18 17:02:44 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e-32-1
ERROR - 2016-10-18 17:05:05 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e-32-1
ERROR - 2016-10-18 17:34:41 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 17:39:32 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 17:46:47 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 17:49:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 17:50:18 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 17:51:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 17:51:17 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 17:51:36 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 17:51:42 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 17:52:00 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 17:52:57 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 18:01:56 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 18:11:33 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 18:49:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 19:43:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-18 22:19:30 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-18 22:48:02 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o--2
ERROR - 2016-10-18 22:53:06 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o--2
ERROR - 2016-10-18 22:53:09 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 22:54:56 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 22:55:19 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 23:05:43 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o--2
ERROR - 2016-10-18 23:06:15 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-18' AND `event`.paid_ads_end_date >= '2016-10-18' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-18 23:21:28 --> loginss:suwk87@hotmail.com,123456
ERROR - 2016-10-18 23:21:28 --> login failed
ERROR - 2016-10-18 23:21:32 --> loginss:suwk87@live.com,123456
ERROR - 2016-10-18 23:21:32 --> login failed
ERROR - 2016-10-18 23:21:57 --> loginss:suwk87@live.com,123456
ERROR - 2016-10-18 23:21:57 --> login failed
ERROR - 2016-10-18 23:22:13 --> loginss:suwk87@hotmail.com,123456
ERROR - 2016-10-18 23:22:13 --> login failed
ERROR - 2016-10-18 23:22:21 --> loginss:suwk87@gmail.com,123456
ERROR - 2016-10-18 23:22:21 --> login failed
ERROR - 2016-10-18 23:22:26 --> loginss:abc@gmail.com,123456
ERROR - 2016-10-18 23:22:26 --> login failed
ERROR - 2016-10-18 23:23:00 --> register, code:4817
ERROR - 2016-10-18 23:23:42 --> loginss:suwk87@live.com,123456
ERROR - 2016-10-18 23:23:42 --> login failed
ERROR - 2016-10-18 23:24:03 --> loginss:suwk87@gmail.com,123456
ERROR - 2016-10-18 23:24:03 --> login failed
ERROR - 2016-10-18 23:30:13 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o--2
ERROR - 2016-10-18 23:30:16 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o--2
ERROR - 2016-10-18 23:31:12 --> loginss:suwk87@live.com,******
ERROR - 2016-10-18 23:31:12 --> login
ERROR - 2016-10-18 23:41:04 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
