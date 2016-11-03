<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-20 00:26:32 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-20 00:33:51 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-20 00:35:47 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-20 00:35:55 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-20 00:43:45 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-20 00:46:51 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 01:08:58 --> loginss:albarsimpel68,skapator
ERROR - 2016-10-20 01:08:58 --> login failed
ERROR - 2016-10-20 04:56:30 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-20 05:24:19 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 07:48:16 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-20 07:52:34 --> SELECT
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
ERROR - 2016-10-20 09:09:14 --> SELECT
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
ERROR - 2016-10-20 09:10:24 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-20 10:03:17 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-20 10:03:39 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-20 10:04:06 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 10:05:01 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-20 10:12:15 --> APA91bEwCCD9Q9BKJINGx2atADPnkhYWCRSxc00y-5pfCffxf0EfZ-iOW6DHCPh9LfUYmAf6UrA7CmuMyQgnZyjuooPffxL6gGsX1XPmRYlr9mlYVgDvj3E-64-2
ERROR - 2016-10-20 10:14:42 --> APA91bEwCCD9Q9BKJINGx2atADPnkhYWCRSxc00y-5pfCffxf0EfZ-iOW6DHCPh9LfUYmAf6UrA7CmuMyQgnZyjuooPffxL6gGsX1XPmRYlr9mlYVgDvj3E-64-2
ERROR - 2016-10-20 11:54:21 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 12:07:22 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 12:13:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 12:14:31 --> register, code:1814
ERROR - 2016-10-20 12:14:31 --> register_succes:72
ERROR - 2016-10-20 12:14:31 --> an error has occured: OK: 59291_167_166<br>
ERROR - 2016-10-20 12:14:42 --> verification: user_id:72,code:1814
ERROR - 2016-10-20 12:16:04 --> register, code:5258
ERROR - 2016-10-20 12:16:04 --> register_succes:73
ERROR - 2016-10-20 12:16:05 --> an error has occured: OK: 59291_168_167<br>
ERROR - 2016-10-20 12:16:27 --> verification: user_id:73,code:5258
ERROR - 2016-10-20 12:16:56 --> loginss:poihoi@gmail.com,58u800
ERROR - 2016-10-20 12:16:56 --> login failed
ERROR - 2016-10-20 12:17:14 --> loginss:poihoi0456@gmail.com,58u800
ERROR - 2016-10-20 12:17:14 --> login failed
ERROR - 2016-10-20 12:17:33 --> loginss:poihoi0456@gmail.com,587800
ERROR - 2016-10-20 12:17:33 --> login
ERROR - 2016-10-20 12:17:35 --> APA91bHjGstyMGlm2ltKyXsmbVO5oLgeiXkJ_lp5iHN0bhsKoSC1gmOOOO7hJJsoX79pQryAm3CpTyhOFZtYVmLYl2-7UZMTWze6wdl2ymbnf4vyxBrTqPw-73-2
ERROR - 2016-10-20 12:19:07 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 12:19:17 --> APA91bHjGstyMGlm2ltKyXsmbVO5oLgeiXkJ_lp5iHN0bhsKoSC1gmOOOO7hJJsoX79pQryAm3CpTyhOFZtYVmLYl2-7UZMTWze6wdl2ymbnf4vyxBrTqPw-73-2
ERROR - 2016-10-20 12:20:39 --> APA91bHjGstyMGlm2ltKyXsmbVO5oLgeiXkJ_lp5iHN0bhsKoSC1gmOOOO7hJJsoX79pQryAm3CpTyhOFZtYVmLYl2-7UZMTWze6wdl2ymbnf4vyxBrTqPw-73-2
ERROR - 2016-10-20 12:21:08 --> APA91bHjGstyMGlm2ltKyXsmbVO5oLgeiXkJ_lp5iHN0bhsKoSC1gmOOOO7hJJsoX79pQryAm3CpTyhOFZtYVmLYl2-7UZMTWze6wdl2ymbnf4vyxBrTqPw-73-2
ERROR - 2016-10-20 12:21:45 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-20 12:50:01 --> loginss:pook0106@yahoo.com.my,pook3511
ERROR - 2016-10-20 12:50:01 --> login
ERROR - 2016-10-20 12:50:02 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779-72-1
ERROR - 2016-10-20 13:47:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 13:48:33 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 13:49:58 --> register, code:5557
ERROR - 2016-10-20 13:49:58 --> register_succes:74
ERROR - 2016-10-20 13:49:58 --> an error has occured: OK: 59291_169_168<br>
ERROR - 2016-10-20 13:50:41 --> verification: user_id:74,code:5557
ERROR - 2016-10-20 13:51:09 --> loginss:xiaozhu.88@hotmail.com,123456
ERROR - 2016-10-20 13:51:09 --> login
ERROR - 2016-10-20 13:51:11 --> APA91bH3p1YQkRF2_EDryrT2D_J4oo34iIXPECmmjV5Zrxp46ZcOfirrtVKEYODyehWJZOTY76DUv8zYAB9OXGAftReeYMQ3_pEnzBPfWtyL2a0P5aWLLB8-74-2
ERROR - 2016-10-20 13:51:32 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 13:51:55 --> APA91bH3p1YQkRF2_EDryrT2D_J4oo34iIXPECmmjV5Zrxp46ZcOfirrtVKEYODyehWJZOTY76DUv8zYAB9OXGAftReeYMQ3_pEnzBPfWtyL2a0P5aWLLB8-74-2
ERROR - 2016-10-20 14:07:06 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:07:32 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 14:08:04 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:11:16 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-20 14:12:22 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:15:49 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:18:52 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 14:20:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:21:43 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:21:47 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:22:23 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:23:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:25:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 14:28:48 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:09:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:13:26 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:21:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:30:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:35:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:36:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:40:39 --> SELECT
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
ERROR - 2016-10-20 15:41:51 --> register, code:4965
ERROR - 2016-10-20 15:41:52 --> register_succes:75
ERROR - 2016-10-20 15:41:52 --> an error has occured: OK: 59291_170_169<br>
ERROR - 2016-10-20 15:42:05 --> verification: user_id:75,code:4965
ERROR - 2016-10-20 15:42:19 --> loginss:allanteo434@gmail.com,123456789
ERROR - 2016-10-20 15:42:19 --> login
ERROR - 2016-10-20 15:42:20 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-20 15:42:53 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 15:43:09 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 15:43:56 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-20 15:44:13 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-20 15:45:26 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-20 15:49:51 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 15:50:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:51:06 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 15:53:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:53:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:56:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:56:32 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 15:58:52 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 16:01:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 17:17:10 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-20 17:17:18 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 17:17:30 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-20 17:18:37 --> loginss:demo@sgdatahub.com,123456
ERROR - 2016-10-20 17:18:37 --> login failed
ERROR - 2016-10-20 17:18:53 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-20 17:18:53 --> login
ERROR - 2016-10-20 17:18:54 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-20 17:55:50 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 17:58:13 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-20 18:09:45 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 18:18:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 18:18:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 18:40:58 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-20 18:43:29 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-20' AND `event`.paid_ads_end_date >= '2016-10-20' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-20 18:50:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 18:51:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 18:51:27 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 19:35:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 19:36:31 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-20 20:05:58 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-20 20:41:20 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-20 20:43:59 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-20 21:34:54 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-20 21:35:00 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-20 21:35:14 --> SELECT
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
ERROR - 2016-10-20 21:35:28 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-20 22:27:04 --> SELECT
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
ERROR - 2016-10-20 22:27:27 --> loginss:tuanpham6@live.com,tuan123
ERROR - 2016-10-20 22:27:27 --> login failed
ERROR - 2016-10-20 22:28:04 --> SELECT
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
ERROR - 2016-10-20 22:28:57 --> loginss:tuanpham6@live.com,tuan123
ERROR - 2016-10-20 22:28:57 --> login failed
ERROR - 2016-10-20 23:12:29 --> register, code:7180
ERROR - 2016-10-20 23:12:29 --> register_succes:76
ERROR - 2016-10-20 23:12:30 --> an error has occured: OK: 59291_171_170<br>
ERROR - 2016-10-20 23:14:01 --> verification: user_id:76,code:1234
ERROR - 2016-10-20 23:15:26 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-20 23:15:27 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-20 23:18:08 --> 404 Page Not Found: Faviconico/index
