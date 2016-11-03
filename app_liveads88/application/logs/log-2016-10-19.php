<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-19 00:12:24 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-19 02:29:11 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-19 02:29:11 --> login
ERROR - 2016-10-19 02:29:13 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d-32-1
ERROR - 2016-10-19 02:29:44 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 02:29:58 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 19  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-19 02:38:33 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e-52-1
ERROR - 2016-10-19 08:57:06 --> APA91bHrIYNWztkWXPedfhumHKRstA3PjRWTa1iGv_ia7Y6h6C7hLkASTeOMO7GalHeROB2mtsm3BCzaNLRUOFSyb1auCVnxwMqsZRjZ15-FQiF9MUzskWU-63-2
ERROR - 2016-10-19 08:57:23 --> SELECT `user_id` FROM `token` WHERE `token` = '4b83351eed7f689d5fe02395590646d26f6bf00d352e2720f5731b8a17f8d97e'
ERROR - 2016-10-19 09:42:30 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 09:45:51 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 09:45:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 10:10:02 --> APA91bHGL8u4wL1ORtKBMKQpyZ4o8WvKUuw9SgdnnhOFitkpTqS6SDJoN2df4ZA5ZAMpoy40NniKQbnxmEnJH1iWuu95Xm4wfEGwBcXCcPeWGuO3lwVvbhw-59-2
ERROR - 2016-10-19 10:12:25 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-19 10:13:52 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 10:17:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 10:20:31 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 10:24:32 --> register, code:8963
ERROR - 2016-10-19 10:24:32 --> register_succes:70
ERROR - 2016-10-19 10:24:32 --> an error has occured: OK: 59291_165_164<br>
ERROR - 2016-10-19 10:26:07 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 10:29:40 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 10:30:38 --> loginss:bpjohor@hotmail.com,bpjohor
ERROR - 2016-10-19 10:30:38 --> login
ERROR - 2016-10-19 10:30:42 --> APA91bGayts-5QtccQltpEJ4mPFUrkF3VEpjcWcD1duXPDeq5ZvZNcg_MTSlgO5sHVhI8hCv90ef_l-0eLN7zhl9gyOTySQ26C3kz_eGJgUgohrisgpfFSw-70-2
ERROR - 2016-10-19 10:43:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-19 10:51:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 10:52:38 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 10:54:57 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-19 10:56:07 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-19 11:03:11 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 11:09:06 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 11:33:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 11:38:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 11:41:37 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 11:42:29 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 11:42:32 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 11:47:30 --> loginss:suwk87@live.com,******
ERROR - 2016-10-19 11:47:30 --> login
ERROR - 2016-10-19 11:47:34 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-19 11:48:34 --> loginss:suwk87@live.com,******
ERROR - 2016-10-19 11:48:34 --> login
ERROR - 2016-10-19 11:48:36 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-19 11:53:45 --> SELECT
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
ERROR - 2016-10-19 11:54:29 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 11:54:51 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 11:57:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 11:59:48 --> 404 Page Not Found: api//index
ERROR - 2016-10-19 12:03:38 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 12:12:51 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:16:18 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-19 12:20:04 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 12:24:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:25:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:25:55 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:28:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:29:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:33:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 12:47:39 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 13:41:56 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 13:44:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 13:52:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:11:19 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:14:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:21:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:22:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:23:05 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 14:28:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:31:15 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:45:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:51:38 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:53:06 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:57:20 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 14:58:13 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 15:11:14 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 15:13:15 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 15:15:11 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 15:18:44 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 15:20:51 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 15:21:08 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 15:22:25 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 15:36:48 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c-57-1
ERROR - 2016-10-19 16:13:22 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 16:47:17 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-19 17:11:42 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 17:23:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 17:23:13 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 17:25:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 17:25:38 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 17:27:29 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 17:28:10 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 17:34:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 17:35:47 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 17:35:56 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 17:37:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 17:37:53 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 17:48:46 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 17:50:35 --> loginss:chailinjong 76@gmail.com,jjk9400
ERROR - 2016-10-19 17:50:35 --> login failed
ERROR - 2016-10-19 17:58:24 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-19 18:09:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 18:16:29 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 18:22:00 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 18:23:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 18:33:19 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 18:35:07 --> loginss:chailinjong76@gmail.com,jjk948888
ERROR - 2016-10-19 18:35:07 --> login failed
ERROR - 2016-10-19 18:36:14 --> register, code:4988
ERROR - 2016-10-19 18:36:14 --> register_succes:71
ERROR - 2016-10-19 18:36:14 --> an error has occured: OK: 59291_166_165<br>
ERROR - 2016-10-19 18:37:58 --> verification: user_id:71,code:4988
ERROR - 2016-10-19 18:53:24 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-19' AND `event`.paid_ads_end_date >= '2016-10-19' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-19 18:57:19 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4-42-1
ERROR - 2016-10-19 19:16:03 --> APA91bGweed7ebL8WOXq4hPmI_GfS4vSahKtRq2Sy1IH8Pg8ZCV1t-_o4EjJDxEDa014TM8ma_cPZrRSXzCQxOwDGLapMDXER8jf_qJo7vLI7vf8VQ9Kwhw-71-2
ERROR - 2016-10-19 19:23:36 --> loginss:chailinjong76@gmail.com,jjk948888
ERROR - 2016-10-19 19:23:36 --> login failed
ERROR - 2016-10-19 19:24:15 --> register, code:4151
ERROR - 2016-10-19 19:24:37 --> register, code:9197
ERROR - 2016-10-19 19:25:00 --> register, code:8392
ERROR - 2016-10-19 19:43:00 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-19 20:54:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-19 21:26:35 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-19 22:06:04 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-19 22:18:50 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-19 22:21:25 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-19 23:07:34 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
