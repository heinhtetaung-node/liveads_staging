<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-28 00:16:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 00:29:25 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-28 00:30:57 --> loginss:yyyyu_my@yahoo.con,959978
ERROR - 2016-10-28 00:30:57 --> login failed
ERROR - 2016-10-28 00:31:05 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 00:31:46 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-28 00:31:58 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-28 00:33:18 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 00:53:20 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 00:56:49 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 03:16:34 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 05:09:08 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 07:21:02 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-28 07:22:06 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 9  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-28 07:23:08 --> SELECT `user_id` FROM `token` WHERE `token` = '028897579d64a12d408a262a46a9d31fcb56c955a3feb002c068d46b0438123f'
ERROR - 2016-10-28 07:24:36 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-28 07:25:21 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-28 07:25:30 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 07:29:43 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 33  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-28 07:30:04 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 33  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-28 07:30:11 --> SELECT `user_id` FROM `token` WHERE `token` = '028897579d64a12d408a262a46a9d31fcb56c955a3feb002c068d46b0438123f'
ERROR - 2016-10-28 07:30:30 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 33  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-28 07:30:42 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-28 09:22:59 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-28 09:25:45 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 31  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-28 09:53:05 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 09:55:37 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 09:58:02 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 10:01:19 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:01:23 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:01:27 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:01:31 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:01:36 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:01:42 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:01:47 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:02:46 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:02:55 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-10-28 10:03:09 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 10:06:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 10:22:17 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-28 10:34:21 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 10:36:53 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-28 10:38:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 10:39:59 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-28 10:45:52 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-10-28 10:58:11 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 11:02:15 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 11:08:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 11:39:41 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-28 11:46:52 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 11:58:41 --> APA91bEQG513G13l3ap0vTE52R8NrEpxUhyhiYF7w__PhZZkRpK5hfz4OMtjYby59zHIX90RzwA--SOvJDbTYb4yvSXF2A1Hf8Uo6I80pQh5h0_h8MAt2pA-76-2
ERROR - 2016-10-28 11:59:22 --> APA91bEQG513G13l3ap0vTE52R8NrEpxUhyhiYF7w__PhZZkRpK5hfz4OMtjYby59zHIX90RzwA--SOvJDbTYb4yvSXF2A1Hf8Uo6I80pQh5h0_h8MAt2pA-76-2
ERROR - 2016-10-28 11:59:38 --> APA91bEQG513G13l3ap0vTE52R8NrEpxUhyhiYF7w__PhZZkRpK5hfz4OMtjYby59zHIX90RzwA--SOvJDbTYb4yvSXF2A1Hf8Uo6I80pQh5h0_h8MAt2pA-76-2
ERROR - 2016-10-28 12:03:11 --> APA91bEQG513G13l3ap0vTE52R8NrEpxUhyhiYF7w__PhZZkRpK5hfz4OMtjYby59zHIX90RzwA--SOvJDbTYb4yvSXF2A1Hf8Uo6I80pQh5h0_h8MAt2pA-76-2
ERROR - 2016-10-28 12:04:23 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 12:22:39 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 12:49:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 12:50:32 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 12:54:21 --> register, code:7690
ERROR - 2016-10-28 12:54:21 --> register_succes:109
ERROR - 2016-10-28 12:54:21 --> an error has occured: OK: 59291_204_203<br>
ERROR - 2016-10-28 12:58:00 --> register, code:8145
ERROR - 2016-10-28 12:58:09 --> register, code:9901
ERROR - 2016-10-28 12:58:48 --> register, code:6564
ERROR - 2016-10-28 12:58:49 --> register_succes:110
ERROR - 2016-10-28 12:58:50 --> an error has occured: OK: 59291_205_204<br>
ERROR - 2016-10-28 13:00:37 --> register, code:4457
ERROR - 2016-10-28 13:00:37 --> register_succes:111
ERROR - 2016-10-28 13:00:38 --> an error has occured: OK: 59291_206_205<br>
ERROR - 2016-10-28 13:01:03 --> verification: user_id:111,code:4457
ERROR - 2016-10-28 13:01:23 --> loginss:hsuperbread@gmail.com,0127918556
ERROR - 2016-10-28 13:01:23 --> login
ERROR - 2016-10-28 13:01:23 --> 6df9f668b5af8b900534241d2dfd234860ad3b560af445b63c08608a8d8aa385-111-1
ERROR - 2016-10-28 13:06:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 13:08:16 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-10-28 13:09:13 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 13:10:44 --> register, code:2120
ERROR - 2016-10-28 13:10:44 --> register_succes:112
ERROR - 2016-10-28 13:10:45 --> an error has occured: OK: 59291_207_206<br>
ERROR - 2016-10-28 13:10:58 --> verification: user_id:112,code:2120
ERROR - 2016-10-28 13:11:38 --> loginss:yuh890512@gmail.com,890512
ERROR - 2016-10-28 13:11:38 --> login
ERROR - 2016-10-28 13:11:39 --> b03b6fba252b6a30fe85d92befa22a49c2d5cf681dbba5225ed9e8cadf2f2c17-112-1
ERROR - 2016-10-28 13:18:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 13:33:51 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-28 13:37:27 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-28 13:50:36 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-28 13:52:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 13:54:53 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 13:58:00 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 14:01:17 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 14:13:46 --> 6df9f668b5af8b900534241d2dfd234860ad3b560af445b63c08608a8d8aa385-111-1
ERROR - 2016-10-28 14:14:18 --> SELECT `user_id` FROM `token` WHERE `token` = '6bb532c9b92faf09f5f57c0f41745a86844e1f2d9e5c6a864ec280322afa0741'
ERROR - 2016-10-28 14:36:14 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-28 14:59:25 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 15:11:24 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 15:12:11 --> APA91bHGL8u4wL1ORtKBMKQpyZ4o8WvKUuw9SgdnnhOFitkpTqS6SDJoN2df4ZA5ZAMpoy40NniKQbnxmEnJH1iWuu95Xm4wfEGwBcXCcPeWGuO3lwVvbhw-59-2
ERROR - 2016-10-28 15:25:47 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 15:29:14 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-10-28 15:29:16 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 15  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-28 15:34:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 15:35:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 16:08:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 16:13:47 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 16:19:26 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 16:37:10 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 16:40:31 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 16:47:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 16:48:47 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 17:05:15 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e-52-1
ERROR - 2016-10-28 17:22:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 17:22:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 17:24:52 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 17:39:21 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-10-28 17:42:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 17:44:25 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 17:45:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 17:51:29 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 17:59:24 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 18:06:54 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 18:42:40 --> loginss:ivyliew7575@gmail.com,a1736792
ERROR - 2016-10-28 18:42:40 --> login failed
ERROR - 2016-10-28 18:44:30 --> loginss:ivyliew7575@gmail.com,a1736792
ERROR - 2016-10-28 18:44:30 --> login failed
ERROR - 2016-10-28 18:44:37 --> loginss:ivyliew7575@gmail.com,a1736792
ERROR - 2016-10-28 18:44:37 --> login failed
ERROR - 2016-10-28 18:46:55 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 19:04:23 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-28 19:07:38 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 19:17:42 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 19:25:13 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 19:32:21 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-28 19:33:00 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-28 19:46:31 --> 6df9f668b5af8b900534241d2dfd234860ad3b560af445b63c08608a8d8aa385-111-1
ERROR - 2016-10-28 20:06:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 20:07:43 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 20:08:19 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 20:08:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-28 20:12:55 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-28 20:25:34 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-10-28 20:28:19 --> loginss:thomas0615@iCloud.com,Thomas1996
ERROR - 2016-10-28 20:28:19 --> login failed
ERROR - 2016-10-28 20:29:44 --> loginss:thomas0615@icloud.com,Thomas1996
ERROR - 2016-10-28 20:29:44 --> login failed
ERROR - 2016-10-28 20:32:09 --> loginss:kr921214@gmail.com,Lovelin123
ERROR - 2016-10-28 20:32:09 --> login failed
ERROR - 2016-10-28 20:32:12 --> loginss:kr921214@gmail.com,Lovelin123
ERROR - 2016-10-28 20:32:12 --> login failed
ERROR - 2016-10-28 20:32:26 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:32:26 --> login failed
ERROR - 2016-10-28 20:33:23 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:33:23 --> login failed
ERROR - 2016-10-28 20:33:37 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:33:37 --> login failed
ERROR - 2016-10-28 20:33:54 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:33:54 --> login failed
ERROR - 2016-10-28 20:34:08 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:34:08 --> login failed
ERROR - 2016-10-28 20:34:20 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:34:20 --> login failed
ERROR - 2016-10-28 20:35:29 --> loginss:kr921214@gmail.com,lovelin123
ERROR - 2016-10-28 20:35:29 --> login failed
ERROR - 2016-10-28 20:36:15 --> loginss:yann9696@outlook.com,yan960325
ERROR - 2016-10-28 20:36:15 --> login failed
ERROR - 2016-10-28 20:37:07 --> register, code:6338
ERROR - 2016-10-28 20:37:07 --> register_succes:113
ERROR - 2016-10-28 20:37:08 --> an error has occured: OK: 59291_208_207<br>
ERROR - 2016-10-28 20:37:17 --> verification: user_id:113,code:6338
ERROR - 2016-10-28 20:37:23 --> loginss:yann9696@outlook.com,yan960325
ERROR - 2016-10-28 20:37:23 --> login
ERROR - 2016-10-28 20:37:24 --> 477a0fde2e766d0b13586767ea823a6465a90209151a6a02887712ccbd257ae5-113-1
ERROR - 2016-10-28 20:38:45 --> register, code:7982
ERROR - 2016-10-28 20:38:45 --> register_succes:114
ERROR - 2016-10-28 20:38:45 --> an error has occured: OK: 59291_209_208<br>
ERROR - 2016-10-28 20:38:55 --> verification: user_id:114,code:7982
ERROR - 2016-10-28 20:39:43 --> loginss:thomas0615@iCloud.com,Thomas1996
ERROR - 2016-10-28 20:39:43 --> login failed
ERROR - 2016-10-28 20:39:55 --> loginss:thomas0615@iCloud.com,thomas1996
ERROR - 2016-10-28 20:39:55 --> login
ERROR - 2016-10-28 20:39:55 --> 58de4a070fb4c384dc071a7220e9eda0c478a3aae9cdcb2ffcf0f0ea66de3b77-114-1
ERROR - 2016-10-28 20:58:52 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 21:28:12 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-28 21:31:02 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-28 23:25:52 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-28 23:46:57 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 23:48:12 --> loginss:vis1982@live.com,7766500
ERROR - 2016-10-28 23:48:12 --> login
ERROR - 2016-10-28 23:48:13 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-28 23:48:53 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 23:48:59 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 23:49:04 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 23:49:08 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-28' AND `event`.paid_ads_end_date >= '2016-10-28' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-28 23:49:14 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 23:50:36 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 23:50:49 --> APA91bFQMsNtcZXBaNxI7ZmtJ8Y4IWOzgOpqH6TO1YOzhm8TfFHTMIItlgjBzZXOrryXtFv3NEMM_aRDuWQulg13lbGMcXnpR3R6ketlD_eEsMbwYG-rdx0--2
ERROR - 2016-10-28 23:58:08 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-28 23:58:12 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-28 23:59:46 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
