<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-11-01 00:25:45 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 00:26:52 --> SELECT
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
ERROR - 2016-11-01 00:29:46 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 00:31:07 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 00:33:26 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 00:37:18 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 01:32:42 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 01:38:28 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-11-01 02:00:52 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 02:16:45 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 02:16:48 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 02:36:58 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 02:48:15 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 02:59:12 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 02:59:52 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 07:44:16 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-11-01 09:55:49 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-11-01 10:15:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 10:15:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 10:23:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 10:24:36 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-11-01 10:25:28 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-11-01 10:26:22 --> b22af3d67fd4f9ffb6c41937a97f19bee9c632431636e5300a9c7e37e1ca3de2-121-1
ERROR - 2016-11-01 10:26:46 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-11-01 10:26:51 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-11-01 10:26:59 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-11-01 10:27:09 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-11-01 10:27:12 --> SELECT `user_id` FROM `token` WHERE `token` = '977a390d4a0afab15c7cb3be8c93b3ae4761b2358e1958dcff4a2749c1484e05'
ERROR - 2016-11-01 10:27:35 --> SELECT `user_id` FROM `token` WHERE `token` = '3b2ac529ecc5c01cabd381b11f09c58c24646401c41468492b855b9125feca24'
ERROR - 2016-11-01 10:28:01 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 40  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 10:36:41 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-11-01 10:36:46 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-11-01 10:36:53 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-11-01 10:58:33 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-11-01 10:59:09 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-11-01 11:02:56 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-11-01 11:10:42 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 11:10:58 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 11:11:31 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 11:11:44 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 11:11:51 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-11-01 11:13:42 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 11:16:34 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-11-01 11:16:42 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-11-01 11:38:37 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 11:40:29 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-11-01 11:44:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 11:46:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 11:55:54 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 12:02:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-11-01 12:08:58 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 12:09:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 12:09:43 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 12:09:55 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-11-01 12:10:42 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 12:10:52 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 12:11:11 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 12:11:36 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 12:11:39 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 12:11:47 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 12:28:44 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 12:29:33 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-11-01 12:44:47 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 13:09:37 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 13:11:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 13:12:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 13:23:07 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-11-01 13:23:31 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-11-01 13:26:20 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 13:27:47 --> loginss:jolene0701@gmail.com,7708801314520
ERROR - 2016-11-01 13:27:47 --> login
ERROR - 2016-11-01 13:27:47 --> f76cc81cd4febe0abe0dbce6e595fbfc2114ffeb22aa24d2bc5e6cb73587bd27-116-1
ERROR - 2016-11-01 13:30:09 --> SELECT `user_id` FROM `token` WHERE `token` = 'dc431b0605091e3f70051af757b562345979553540bd0af880c7f960b352eb7c'
ERROR - 2016-11-01 13:30:13 --> SELECT `user_id` FROM `token` WHERE `token` = 'dc431b0605091e3f70051af757b562345979553540bd0af880c7f960b352eb7c'
ERROR - 2016-11-01 13:30:23 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 35  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 13:30:26 --> SELECT `user_id` FROM `token` WHERE `token` = 'dc431b0605091e3f70051af757b562345979553540bd0af880c7f960b352eb7c'
ERROR - 2016-11-01 13:30:40 --> SELECT `user_id` FROM `token` WHERE `token` = 'dc431b0605091e3f70051af757b562345979553540bd0af880c7f960b352eb7c'
ERROR - 2016-11-01 13:30:56 --> SELECT `user_id` FROM `token` WHERE `token` = 'dc431b0605091e3f70051af757b562345979553540bd0af880c7f960b352eb7c'
ERROR - 2016-11-01 13:31:19 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 35  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 13:32:53 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-11-01 13:44:36 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 35  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 13:55:59 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-11-01 13:58:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 13:59:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:01:19 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:01:45 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:05:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:09:50 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:10:09 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:11:32 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 14:12:56 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-11-01 14:50:05 --> APA91bHrIYNWztkWXPedfhumHKRstA3PjRWTa1iGv_ia7Y6h6C7hLkASTeOMO7GalHeROB2mtsm3BCzaNLRUOFSyb1auCVnxwMqsZRjZ15-FQiF9MUzskWU-63-2
ERROR - 2016-11-01 14:50:26 --> APA91bHrIYNWztkWXPedfhumHKRstA3PjRWTa1iGv_ia7Y6h6C7hLkASTeOMO7GalHeROB2mtsm3BCzaNLRUOFSyb1auCVnxwMqsZRjZ15-FQiF9MUzskWU-63-2
ERROR - 2016-11-01 14:56:26 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf-85-1
ERROR - 2016-11-01 14:57:38 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 29  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 14:57:46 --> SELECT `user_id` FROM `token` WHERE `token` = '8e8ef6f1302ac04df204e279a9b4e07cf31ed8c35fd7cd20f685a659bd6e7848'
ERROR - 2016-11-01 15:04:27 --> APA91bGnSisiZ4Ls56otlqt8OWDKH5tFJTPw25GlncwOeB8P4zd6EIuOL4Ig-WJLP9ysgYab-0LIjHbqFRGkEw6LEWnq-b3i0XOB3_AB5Mm3ssdW8Gk_XGI-24-2
ERROR - 2016-11-01 15:08:00 --> APA91bGnSisiZ4Ls56otlqt8OWDKH5tFJTPw25GlncwOeB8P4zd6EIuOL4Ig-WJLP9ysgYab-0LIjHbqFRGkEw6LEWnq-b3i0XOB3_AB5Mm3ssdW8Gk_XGI-24-2
ERROR - 2016-11-01 15:08:51 --> APA91bGnSisiZ4Ls56otlqt8OWDKH5tFJTPw25GlncwOeB8P4zd6EIuOL4Ig-WJLP9ysgYab-0LIjHbqFRGkEw6LEWnq-b3i0XOB3_AB5Mm3ssdW8Gk_XGI-24-2
ERROR - 2016-11-01 15:51:58 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779-72-1
ERROR - 2016-11-01 16:03:38 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-11-01 16:33:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 16:34:33 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 16:50:48 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 16:51:03 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-11-01 16:51:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 16:57:09 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 16:57:30 --> loginss:selineloh@hotmail.com,880908
ERROR - 2016-11-01 16:57:30 --> login failed
ERROR - 2016-11-01 16:58:41 --> register, code:3141
ERROR - 2016-11-01 16:58:41 --> register_succes:124
ERROR - 2016-11-01 16:58:42 --> an error has occured: OK: 59291_219_218<br>
ERROR - 2016-11-01 16:58:56 --> verification: user_id:124,code:3141
ERROR - 2016-11-01 16:59:01 --> loginss:selineloh@hotmail.com,880908
ERROR - 2016-11-01 16:59:01 --> login
ERROR - 2016-11-01 16:59:04 --> f3e5a3b27c8aeb85338b562c9b3d603b72616b2b4daa468ea08db0f4f30a1a71-124-1
ERROR - 2016-11-01 16:59:36 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-11-01 17:04:53 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:14:19 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:15:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:16:43 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:20:44 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 17:21:26 --> loginss:ktp1101@yahoo.com,7625999
ERROR - 2016-11-01 17:21:26 --> login
ERROR - 2016-11-01 17:21:26 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-11-01 17:24:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:25:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:27:27 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-11-01 17:27:37 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-11-01 17:27:42 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-11-01 17:27:49 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-11-01 17:27:54 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-11-01 17:28:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:30:56 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:32:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:34:26 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:53:55 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:54:48 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:58:23 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:59:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 17:59:13 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 18:03:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 18:03:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 18:11:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 18:14:53 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-11-01 18:15:46 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 14  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 18:15:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 18:16:05 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-11-01 18:16:20 --> SELECT `user_id` FROM `token` WHERE `token` = 'e89041f56f09797ff6f53df83e8199d46c3c197e3b1f236a2a4d204ccec09d39'
ERROR - 2016-11-01 18:19:38 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-11-01 18:19:47 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk--2
ERROR - 2016-11-01 18:20:41 --> loginss:demo@liveads88.com,123456
ERROR - 2016-11-01 18:20:41 --> login
ERROR - 2016-11-01 18:38:27 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 18:41:31 --> SELECT `user_id` FROM `token` WHERE `token` = '7ea2d535cd1df317f4043e227187b4ccd78cb7d9249a50432113330b7f3107ae'
ERROR - 2016-11-01 18:41:31 --> Severity: Notice --> Undefined variable: user_id /home/liveads88/public_html/app_liveads88/application/controllers/api/Users.php 680
ERROR - 2016-11-01 18:41:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-11-01 18:41:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-11-01 18:41:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-11-01 18:41:39 --> SELECT `user_id` FROM `token` WHERE `token` = '7ea2d535cd1df317f4043e227187b4ccd78cb7d9249a50432113330b7f3107ae'
ERROR - 2016-11-01 18:41:39 --> Severity: Notice --> Undefined variable: user_id /home/liveads88/public_html/app_liveads88/application/controllers/api/Users.php 680
ERROR - 2016-11-01 18:41:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-11-01 18:41:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-11-01 18:41:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-11-01 18:42:19 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 18:42:23 --> SELECT `user_id` FROM `token` WHERE `token` = '7ea2d535cd1df317f4043e227187b4ccd78cb7d9249a50432113330b7f3107ae'
ERROR - 2016-11-01 18:43:06 --> like:32
ERROR - 2016-11-01 18:43:06 --> SELECT `user_id` FROM `token` WHERE `token` = '7ea2d535cd1df317f4043e227187b4ccd78cb7d9249a50432113330b7f3107ae'
ERROR - 2016-11-01 18:47:07 --> like:32
ERROR - 2016-11-01 19:00:16 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-11-01 19:07:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 19:11:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 19:16:51 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 19:28:23 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-11-01 19:30:47 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-11-01 19:45:07 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-11-01 20:00:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 20:00:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 20:20:15 --> loginss:jolene0701@gmail.com,7708801314520
ERROR - 2016-11-01 20:20:15 --> login
ERROR - 2016-11-01 20:20:16 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-11-01 20:20:16 --> f76cc81cd4febe0abe0dbce6e595fbfc2114ffeb22aa24d2bc5e6cb73587bd27-116-1
ERROR - 2016-11-01 20:22:00 --> like:116
ERROR - 2016-11-01 20:22:14 --> loginss:sn nayon,33422712
ERROR - 2016-11-01 20:22:14 --> login failed
ERROR - 2016-11-01 20:24:30 --> loginss:sn nayon,33422712
ERROR - 2016-11-01 20:24:30 --> login failed
ERROR - 2016-11-01 20:24:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 20:47:44 --> 053542eacb919bdab563d8c415439cb46960580be8d7d7618fe47923bb4b1ef5-14-1
ERROR - 2016-11-01 20:52:55 --> 58de4a070fb4c384dc071a7220e9eda0c478a3aae9cdcb2ffcf0f0ea66de3b77-114-1
ERROR - 2016-11-01 20:53:23 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 20:54:01 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o--2
ERROR - 2016-11-01 21:00:31 --> loginss:suwk87@live.com,123456
ERROR - 2016-11-01 21:00:31 --> login failed
ERROR - 2016-11-01 21:00:39 --> loginss:suwk87@live.com,******
ERROR - 2016-11-01 21:00:39 --> login
ERROR - 2016-11-01 21:00:39 --> 14 26XLN6
ERROR - 2016-11-01 21:00:41 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-11-01 21:07:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-11-01 21:09:10 --> loginss:Jasonkhow4328@gmail.com,07432800
ERROR - 2016-11-01 21:09:10 --> login failed
ERROR - 2016-11-01 21:09:48 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 35  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 21:10:15 --> register, code:4829
ERROR - 2016-11-01 21:10:23 --> register, code:3943
ERROR - 2016-11-01 21:10:32 --> register, code:7894
ERROR - 2016-11-01 21:38:39 --> APA91bGayts-5QtccQltpEJ4mPFUrkF3VEpjcWcD1duXPDeq5ZvZNcg_MTSlgO5sHVhI8hCv90ef_l-0eLN7zhl9gyOTySQ26C3kz_eGJgUgohrisgpfFSw-70-2
ERROR - 2016-11-01 22:26:41 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-11-01 22:45:40 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-11-01 22:55:57 --> loginss:kerkweiling.890926@gmail.com,890926
ERROR - 2016-11-01 22:55:57 --> login failed
ERROR - 2016-11-01 22:57:18 --> register, code:9620
ERROR - 2016-11-01 22:57:18 --> register_succes:125
ERROR - 2016-11-01 22:57:18 --> an error has occured: OK: 59291_220_219<br>
ERROR - 2016-11-01 22:57:51 --> verification: user_id:125,code:9620
ERROR - 2016-11-01 22:58:12 --> loginss:kerkweiling.890926@gmail.com,890926
ERROR - 2016-11-01 22:58:12 --> login
ERROR - 2016-11-01 22:58:14 --> APA91bGKkHjexyVk_M63JaAAZoCT0BsDgcNfZDJxVNcpS2inm5ErcYQNjLguObbVbS2Ook6JCAmUX1TFgvCEQfkeoUk0JAHu12I94KK7d8Ori45Yb74fXlY-125-2
ERROR - 2016-11-01 22:59:40 --> like:125
ERROR - 2016-11-01 22:59:44 --> like:125
ERROR - 2016-11-01 22:59:46 --> like:125
ERROR - 2016-11-01 22:59:59 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 38  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-11-01 23:00:03 --> like:125
ERROR - 2016-11-01 23:00:07 --> like:125
ERROR - 2016-11-01 23:02:10 --> APA91bGKkHjexyVk_M63JaAAZoCT0BsDgcNfZDJxVNcpS2inm5ErcYQNjLguObbVbS2Ook6JCAmUX1TFgvCEQfkeoUk0JAHu12I94KK7d8Ori45Yb74fXlY-125-2
ERROR - 2016-11-01 23:03:47 --> APA91bGKkHjexyVk_M63JaAAZoCT0BsDgcNfZDJxVNcpS2inm5ErcYQNjLguObbVbS2Ook6JCAmUX1TFgvCEQfkeoUk0JAHu12I94KK7d8Ori45Yb74fXlY-125-2
ERROR - 2016-11-01 23:16:20 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-11-01 23:19:59 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-11-01' AND `event`.paid_ads_end_date >= '2016-11-01' ORDER BY `event`.ev_created DESC
ERROR - 2016-11-01 23:55:55 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-11-01 23:57:33 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-11-01 23:58:14 --> register, code:7214
ERROR - 2016-11-01 23:58:14 --> register_succes:126
ERROR - 2016-11-01 23:58:14 --> an error has occured: OK: 59291_221_220<br>
ERROR - 2016-11-01 23:58:24 --> verification: user_id:126,code:7214
ERROR - 2016-11-01 23:58:47 --> loginss:liquidkhoo@gmail.com,liq772299
ERROR - 2016-11-01 23:58:47 --> login failed
ERROR - 2016-11-01 23:59:03 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-11-01 23:59:22 --> loginss:liquidkhoo@gmail.com,0177687229
ERROR - 2016-11-01 23:59:22 --> login
ERROR - 2016-11-01 23:59:23 --> 2aa8fc29f98285ae5b4777ec3a91fdd4f09bb1ce731c79f652c0110a30b086c6-126-1
