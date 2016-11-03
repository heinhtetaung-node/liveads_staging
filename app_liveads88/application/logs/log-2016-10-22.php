<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-22 00:07:31 --> register, code:6562
ERROR - 2016-10-22 00:07:31 --> register_succes:85
ERROR - 2016-10-22 00:07:31 --> an error has occured: OK: 59291_180_179<br>
ERROR - 2016-10-22 00:07:40 --> verification: user_id:85,code:6562
ERROR - 2016-10-22 00:07:56 --> loginss:jessica325chau@gmail.com,chay1314
ERROR - 2016-10-22 00:07:56 --> login failed
ERROR - 2016-10-22 00:08:02 --> loginss:jessica325chay@gmail.com,chay1314
ERROR - 2016-10-22 00:08:02 --> login
ERROR - 2016-10-22 00:08:03 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf-85-1
ERROR - 2016-10-22 00:46:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-22 01:02:48 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-22 01:07:13 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 24  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 01:07:32 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 22  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 01:07:54 --> SELECT
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
ERROR - 2016-10-22 08:12:45 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 08:13:55 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 12:36:11 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 26  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 12:36:23 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 24  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 12:39:27 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 21  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 12:41:51 --> register, code:4191
ERROR - 2016-10-22 12:41:51 --> register_succes:86
ERROR - 2016-10-22 12:41:52 --> an error has occured: OK: 59291_181_180<br>
ERROR - 2016-10-22 12:42:12 --> verification: user_id:86,code:4191
ERROR - 2016-10-22 12:42:34 --> loginss:limchiboon@yahoo.com,12345
ERROR - 2016-10-22 12:42:34 --> login
ERROR - 2016-10-22 12:42:34 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae-86-1
ERROR - 2016-10-22 12:43:19 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 12:43:19 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 12:54:14 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae-86-1
ERROR - 2016-10-22 13:03:50 --> register, code:4744
ERROR - 2016-10-22 13:03:51 --> register_succes:87
ERROR - 2016-10-22 13:03:51 --> an error has occured: OK: 59291_182_181<br>
ERROR - 2016-10-22 13:04:17 --> register, code:6458
ERROR - 2016-10-22 13:04:41 --> loginss:yhque,1122
ERROR - 2016-10-22 13:04:41 --> login failed
ERROR - 2016-10-22 13:04:51 --> APA91bE__huHUKy1Rwic9P3xJX0XO_Tquoh1FJob76sStUMtMpwSYyM5QFbJnA2iQUO8qloFlbdmLZj9pw3UyPUCjIJaK6v2Rv-KG6xazUdlgQ7pYzxQTAY-87-2
ERROR - 2016-10-22 13:10:42 --> loginss:yhque@yahoo.com,c08eb3aca6
ERROR - 2016-10-22 13:10:42 --> login failed
ERROR - 2016-10-22 13:11:48 --> register, code:8847
ERROR - 2016-10-22 13:12:37 --> register, code:9347
ERROR - 2016-10-22 13:16:55 --> register, code:9232
ERROR - 2016-10-22 13:17:30 --> APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs--2
ERROR - 2016-10-22 13:18:01 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 13:22:12 --> register, code:2046
ERROR - 2016-10-22 13:22:12 --> register_succes:88
ERROR - 2016-10-22 13:22:12 --> an error has occured: OK: 59291_183_182<br>
ERROR - 2016-10-22 13:22:47 --> verification: user_id:88,code:2046
ERROR - 2016-10-22 13:23:40 --> loginss:chunianooi@gmail.com,1122
ERROR - 2016-10-22 13:23:40 --> login failed
ERROR - 2016-10-22 13:24:00 --> loginss:chunian.ooi@gmail.com,1122
ERROR - 2016-10-22 13:24:00 --> login
ERROR - 2016-10-22 13:24:02 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 13:28:39 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 13:29:00 --> APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs--2
ERROR - 2016-10-22 13:29:24 --> APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs--2
ERROR - 2016-10-22 13:29:43 --> APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs--2
ERROR - 2016-10-22 13:29:49 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 13:53:21 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 13:57:05 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-22 13:57:05 --> login
ERROR - 2016-10-22 13:57:46 --> SELECT
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
ERROR - 2016-10-22 13:57:49 --> APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs--2
ERROR - 2016-10-22 13:57:57 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 13:58:06 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 13:58:37 --> APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs--2
ERROR - 2016-10-22 14:01:25 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 14:07:00 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:08:25 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:11:39 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:12:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-22 14:13:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-22 14:13:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-22 14:15:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:15:39 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 14:17:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:17:06 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:18:38 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-10-22 14:22:16 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 14:22:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:24:04 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:26:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:27:12 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 14:29:37 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:34:56 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 14:40:19 --> APA91bFUNVSeRc5CJA4Fcy7c_dzFnwbm9HVda6y3AVTT5di7eJF15rIrjFBxB5K04z35tOSzav-jF5m7u5QkOEM38yDlBDi0iMKsGtflgzgNKyN8cUEH8mM-79-2
ERROR - 2016-10-22 14:41:02 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 14:41:03 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 14:41:25 --> 404 Page Not Found: Advertise/signup
ERROR - 2016-10-22 14:41:52 --> APA91bFUNVSeRc5CJA4Fcy7c_dzFnwbm9HVda6y3AVTT5di7eJF15rIrjFBxB5K04z35tOSzav-jF5m7u5QkOEM38yDlBDi0iMKsGtflgzgNKyN8cUEH8mM-79-2
ERROR - 2016-10-22 14:41:57 --> APA91bFUNVSeRc5CJA4Fcy7c_dzFnwbm9HVda6y3AVTT5di7eJF15rIrjFBxB5K04z35tOSzav-jF5m7u5QkOEM38yDlBDi0iMKsGtflgzgNKyN8cUEH8mM-79-2
ERROR - 2016-10-22 14:42:33 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-22 14:44:40 --> APA91bFUNVSeRc5CJA4Fcy7c_dzFnwbm9HVda6y3AVTT5di7eJF15rIrjFBxB5K04z35tOSzav-jF5m7u5QkOEM38yDlBDi0iMKsGtflgzgNKyN8cUEH8mM-79-2
ERROR - 2016-10-22 14:44:51 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 14:44:51 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:44:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-22 14:56:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:57:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 14:58:28 --> APA91bGZTcXuwQsDs3AcQZfxL35-4tdPVYcZI4r2aP88ZW1qIkLsqtaFTBQ4Lb_Dl84lfq4MD24C3ntzqIfU4iYcRNg0qr6c1GYI2C28rRYrzAN4KUFFcMg--2
ERROR - 2016-10-22 14:59:15 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:00:52 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 15:00:56 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 15:01:24 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 15:01:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:02:02 --> SELECT
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
ERROR - 2016-10-22 15:02:47 --> SELECT
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
ERROR - 2016-10-22 15:05:21 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:06:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:07:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:07:50 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 15:09:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:10:57 --> APA91bHGXkYw0KCNZAv9V8EeSDQY2UOFYurOTNJo_8e8a6BPF6C9yhH7KNHc8Sy_5FVr5iVEAb_Ual6mqituw2MmQeRVbxdtitPLtURjWjtbEYq8lCwzyWY-88-2
ERROR - 2016-10-22 15:11:47 --> register, code:1903
ERROR - 2016-10-22 15:11:47 --> register_succes:89
ERROR - 2016-10-22 15:11:47 --> an error has occured: OK: 59291_184_183<br>
ERROR - 2016-10-22 15:12:08 --> verification: user_id:89,code:1903
ERROR - 2016-10-22 15:12:26 --> loginss:nghup@hotmail.com,Jefflow190910
ERROR - 2016-10-22 15:12:26 --> login
ERROR - 2016-10-22 15:12:28 --> APA91bEIs2w6S39ths3wAaFAa7Ln-V0WjR_sPDhP-eAO2YaPN5UW2bAJNo0vokxjRXC7BDk-pg5S8_P9fOBWZElEqFxnbQymtb4IdUyHdvJAlbH6a6qR4n0-89-2
ERROR - 2016-10-22 15:13:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:13:33 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 12  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 15:13:44 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:14:35 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 21  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 15:14:45 --> APA91bEIs2w6S39ths3wAaFAa7Ln-V0WjR_sPDhP-eAO2YaPN5UW2bAJNo0vokxjRXC7BDk-pg5S8_P9fOBWZElEqFxnbQymtb4IdUyHdvJAlbH6a6qR4n0-89-2
ERROR - 2016-10-22 15:15:36 --> APA91bEIs2w6S39ths3wAaFAa7Ln-V0WjR_sPDhP-eAO2YaPN5UW2bAJNo0vokxjRXC7BDk-pg5S8_P9fOBWZElEqFxnbQymtb4IdUyHdvJAlbH6a6qR4n0-89-2
ERROR - 2016-10-22 15:18:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:19:52 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:21:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:28:57 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:35:29 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 15:38:25 --> register, code:7351
ERROR - 2016-10-22 15:38:25 --> register_succes:90
ERROR - 2016-10-22 15:38:26 --> an error has occured: OK: 59291_185_184<br>
ERROR - 2016-10-22 15:38:56 --> verification: user_id:90,code:7351
ERROR - 2016-10-22 15:39:51 --> loginss:vis1982@live.com,7766500
ERROR - 2016-10-22 15:39:51 --> login
ERROR - 2016-10-22 15:39:53 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-22 15:40:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-22 15:40:15 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:41:56 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:42:17 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 15:42:19 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:42:53 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-22 15:43:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:43:21 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-22 15:44:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:44:35 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:45:01 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:46:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:47:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:48:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:48:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:49:01 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:50:01 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:51:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:52:01 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:52:15 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 15:53:01 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:53:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:54:02 --> Severity: Warning --> stream_socket_client(): unable to connect to ssl://gateway.push.apple.com:2195 (Connection timed out) /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 293
ERROR - 2016-10-22 15:54:03 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-22 15:54:03 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-22 15:54:03 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-22 15:54:03 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-22 15:54:03 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-22 15:54:03 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-22 15:54:03 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-22 15:54:03 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-22 15:54:03 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-22 15:54:03 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-22 15:54:03 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-22 15:54:03 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-22 15:54:03 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-22 15:54:03 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-22 15:54:03 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-22 15:54:03 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-22 15:54:03 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-22 15:54:03 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-22 15:54:03 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-22 15:54:03 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-22 15:54:03 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-22 15:54:03 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-22 15:54:03 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-22 15:54:03 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-22 15:54:03 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-22 15:54:03 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-22 15:54:03 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-22 15:54:03 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-22 15:54:03 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4
ERROR - 2016-10-22 15:54:03 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221
ERROR - 2016-10-22 15:54:03 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 15:54:03 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f
ERROR - 2016-10-22 15:54:03 --> 90f0938bfc051175ef21951b0a94826d98826b5dbe49330b10bbe10e881f84ff
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> 0baf5f0d8b3937e70ff20b7219a169b3f00602079b81675d1263c78ddaaa62cb
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:04 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae
ERROR - 2016-10-22 15:54:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:54:05 --> {"multicast_id":6013475784840740560,"success":56,"failure":6,"canonical_ids":23,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535957%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535973%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477122845536936%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477122845535968%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477122845535961%2be98557f9fd7ecd"},{"message_id":"0:1477122845535134%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122845536698%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122845536916%2be98557f9fd7ecd"},{"message_id":"0:1477122845535965%2be98557f9fd7ecd"},{"message_id":"0:1477122845533279%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1477122845535970%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535974%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535963%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1477122845534718%2be98557f9fd7ecd"},{"message_id":"0:1477122845536696%2be98557f9fd7ecd"},{"message_id":"0:1477122845534720%2be98557f9fd7ecd"},{"message_id":"0:1477122845539987%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477122845538947%2be98557f9fd7ecd"},{"message_id":"0:1477122845535978%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845534726%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535771%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122845536926%2be98557f9fd7ecd"},{"message_id":"0:1477122845535967%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122845536917%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845534736%2be98557f9fd7ecd"},{"message_id":"0:1477122845534723%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477122845536920%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535977%2be98557f9fd7ecd"},{"message_id":"0:1477122845536929%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845534722%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477122845536146%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535773%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122845535959%2be98557f9fd7ecd"},{"message_id":"0:1477122845542544%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"error":"NotRegistered"},{"message_id":"0:1477122845536700%2be98557f9fd7ecd"},{"message_id":"0:1477122845536931%2be98557f9fd7ecd"},{"message_id":"0:1477122845536928%2be98557f9fd7ecd"},{"message_id":"0:1477122845537836%2be98557f9fd7ecd"},{"message_id":"0:1477122845539997%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477122845537064%2be98557f9fd7ecd"},{"message_id":"0:1477122845538939%2be98557f9fd7ecd"},{"message_id":"0:1477122845538753%2be98557f9fd7ecd"},{"message_id":"0:1477122845538949%2be98557f9fd7ecd"},{"message_id":"0:1477122845536934%2be98557f9fd7ecd"},{"message_id":"0:1477122845539999%2be98557f9fd7ecd"},{"message_id":"0:1477122845540719%2be98557f9fd7ecd"},{"message_id":"0:1477122845539993%2be98557f9fd7ecd"},{"message_id":"0:1477122845540001%2be98557f9fd7ecd"},{"message_id":"0:1477122845540002%2be98557f9fd7ecd"},{"message_id":"0:1477122845539910%2be98557f9fd7ecd"},{"message_id":"0:1477122845538945%2be98557f9fd7ecd"},{"message_id":"0:1477122845539995%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs","message_id":"0:1477122845538941%2be98557f9fd7ecd"},{"message_id":"0:1477122845539989%2be98557f9fd7ecd"},{"message_id":"0:1477122845539991%2be98557f9fd7ecd"},{"message_id":"0:1477122845538943%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 15:54:23 --> APA91bEIs2w6S39ths3wAaFAa7Ln-V0WjR_sPDhP-eAO2YaPN5UW2bAJNo0vokxjRXC7BDk-pg5S8_P9fOBWZElEqFxnbQymtb4IdUyHdvJAlbH6a6qR4n0-89-2
ERROR - 2016-10-22 15:54:27 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 15:54:40 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-22 15:54:40 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-22 15:54:40 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-22 15:55:03 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-22 15:55:03 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-22 15:55:03 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-22 15:55:03 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-22 15:55:03 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-22 15:55:03 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-22 15:55:03 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-22 15:55:03 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-22 15:55:03 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-22 15:55:03 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-22 15:55:03 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-22 15:55:03 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-22 15:55:03 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-22 15:55:03 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-22 15:55:03 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-22 15:55:03 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-22 15:55:03 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-22 15:55:03 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-22 15:55:03 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-22 15:55:03 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-22 15:55:03 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-22 15:55:03 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-22 15:55:03 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-22 15:55:03 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-22 15:55:03 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-22 15:55:03 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-22 15:55:03 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-22 15:55:03 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-22 15:55:03 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4
ERROR - 2016-10-22 15:55:03 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221
ERROR - 2016-10-22 15:55:03 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 15:55:03 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f
ERROR - 2016-10-22 15:55:03 --> 90f0938bfc051175ef21951b0a94826d98826b5dbe49330b10bbe10e881f84ff
ERROR - 2016-10-22 15:55:03 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> 0baf5f0d8b3937e70ff20b7219a169b3f00602079b81675d1263c78ddaaa62cb
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL operation failed with code 1. OpenSSL Error messages:
error:1409F07F:SSL routines:SSL3_WRITE_PENDING:bad write retry /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:04 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae
ERROR - 2016-10-22 15:55:04 --> Severity: Warning --> fwrite(): SSL: Broken pipe /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 313
ERROR - 2016-10-22 15:55:05 --> {"multicast_id":6596774538156049195,"success":56,"failure":6,"canonical_ids":23,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905312293%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905313984%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477122905313826%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477122905312368%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477122905313827%2be98557f9fd7ecd"},{"message_id":"0:1477122905313981%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122905313830%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122905313972%2be98557f9fd7ecd"},{"message_id":"0:1477122905314241%2be98557f9fd7ecd"},{"message_id":"0:1477122905313980%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1477122905315975%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905313974%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905313831%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1477122905313978%2be98557f9fd7ecd"},{"message_id":"0:1477122905314966%2be98557f9fd7ecd"},{"message_id":"0:1477122905313976%2be98557f9fd7ecd"},{"message_id":"0:1477122905315514%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477122905319671%2be98557f9fd7ecd"},{"message_id":"0:1477122905314964%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905314671%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905315515%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122905314674%2be98557f9fd7ecd"},{"message_id":"0:1477122905315967%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477122905314676%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905314967%2be98557f9fd7ecd"},{"message_id":"0:1477122905315977%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477122905315969%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905315518%2be98557f9fd7ecd"},{"message_id":"0:1477122905315520%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905315971%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477122905316577%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905315972%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477122905315978%2be98557f9fd7ecd"},{"message_id":"0:1477122905316283%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"error":"NotRegistered"},{"message_id":"0:1477122905317709%2be98557f9fd7ecd"},{"message_id":"0:1477122905317842%2be98557f9fd7ecd"},{"message_id":"0:1477122905316576%2be98557f9fd7ecd"},{"message_id":"0:1477122905317702%2be98557f9fd7ecd"},{"message_id":"0:1477122905316572%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477122905320495%2be98557f9fd7ecd"},{"message_id":"0:1477122905316863%2be98557f9fd7ecd"},{"message_id":"0:1477122905316865%2be98557f9fd7ecd"},{"message_id":"0:1477122905319318%2be98557f9fd7ecd"},{"message_id":"0:1477122905316861%2be98557f9fd7ecd"},{"message_id":"0:1477122905317841%2be98557f9fd7ecd"},{"message_id":"0:1477122905318910%2be98557f9fd7ecd"},{"message_id":"0:1477122905318912%2be98557f9fd7ecd"},{"message_id":"0:1477122905318914%2be98557f9fd7ecd"},{"message_id":"0:1477122905320461%2be98557f9fd7ecd"},{"message_id":"0:1477122905317594%2be98557f9fd7ecd"},{"message_id":"0:1477122905316919%2be98557f9fd7ecd"},{"message_id":"0:1477122905316920%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs","message_id":"0:1477122905317708%2be98557f9fd7ecd"},{"message_id":"0:1477122905317704%2be98557f9fd7ecd"},{"message_id":"0:1477122905317706%2be98557f9fd7ecd"},{"message_id":"0:1477122905318374%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 15:55:29 --> APA91bEIs2w6S39ths3wAaFAa7Ln-V0WjR_sPDhP-eAO2YaPN5UW2bAJNo0vokxjRXC7BDk-pg5S8_P9fOBWZElEqFxnbQymtb4IdUyHdvJAlbH6a6qR4n0-89-2
ERROR - 2016-10-22 15:56:55 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 15:57:07 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-22 15:58:31 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 16:00:10 --> APA91bGayts-5QtccQltpEJ4mPFUrkF3VEpjcWcD1duXPDeq5ZvZNcg_MTSlgO5sHVhI8hCv90ef_l-0eLN7zhl9gyOTySQ26C3kz_eGJgUgohrisgpfFSw-70-2
ERROR - 2016-10-22 16:01:19 --> loginss:muthumarahiman@gmail.com,313786313
ERROR - 2016-10-22 16:01:19 --> login failed
ERROR - 2016-10-22 16:01:23 --> loginss:muthumarahiman@gmail.com,313786313
ERROR - 2016-10-22 16:01:23 --> login failed
ERROR - 2016-10-22 16:01:35 --> loginss:muthumarahiman@gmail.com,313786313
ERROR - 2016-10-22 16:01:35 --> login failed
ERROR - 2016-10-22 16:01:56 --> APA91bH3p1YQkRF2_EDryrT2D_J4oo34iIXPECmmjV5Zrxp46ZcOfirrtVKEYODyehWJZOTY76DUv8zYAB9OXGAftReeYMQ3_pEnzBPfWtyL2a0P5aWLLB8-74-2
ERROR - 2016-10-22 16:02:14 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 16:02:49 --> loginss:demo@liveads.com,123456
ERROR - 2016-10-22 16:02:49 --> login failed
ERROR - 2016-10-22 16:03:02 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-22 16:03:02 --> login
ERROR - 2016-10-22 16:03:03 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d-32-1
ERROR - 2016-10-22 16:03:26 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 16:03:32 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 23  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 16:03:44 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 16:04:08 --> APA91bH3p1YQkRF2_EDryrT2D_J4oo34iIXPECmmjV5Zrxp46ZcOfirrtVKEYODyehWJZOTY76DUv8zYAB9OXGAftReeYMQ3_pEnzBPfWtyL2a0P5aWLLB8-74-2
ERROR - 2016-10-22 16:05:48 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-22 16:05:49 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-22 16:05:50 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-22 16:05:50 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-22 16:05:51 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-22 16:05:52 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-22 16:05:53 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-22 16:05:53 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-22 16:05:54 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-22 16:05:55 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-22 16:05:56 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-22 16:05:56 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-22 16:05:57 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-22 16:05:58 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-22 16:05:59 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-22 16:05:59 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-22 16:06:00 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-22 16:06:01 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-22 16:06:01 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-22 16:06:01 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-22 16:06:02 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-22 16:06:02 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-22 16:06:03 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-22 16:06:03 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-22 16:06:03 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-22 16:06:04 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-22 16:06:04 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-22 16:06:04 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-22 16:06:05 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-22 16:06:05 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-22 16:06:06 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-22 16:06:06 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-22 16:06:06 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-22 16:06:07 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-22 16:06:07 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-22 16:06:07 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-22 16:06:08 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-22 16:06:08 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-22 16:06:09 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-22 16:06:09 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4
ERROR - 2016-10-22 16:06:09 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-22 16:06:10 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221
ERROR - 2016-10-22 16:06:10 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-22 16:06:10 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 16:06:11 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-22 16:06:11 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f
ERROR - 2016-10-22 16:06:12 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-22 16:06:12 --> 90f0938bfc051175ef21951b0a94826d98826b5dbe49330b10bbe10e881f84ff
ERROR - 2016-10-22 16:06:12 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-22 16:06:13 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0
ERROR - 2016-10-22 16:06:13 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-22 16:06:13 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f
ERROR - 2016-10-22 16:06:14 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-22 16:06:14 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e
ERROR - 2016-10-22 16:06:14 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-22 16:06:14 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d
ERROR - 2016-10-22 16:06:15 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-22 16:06:15 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779
ERROR - 2016-10-22 16:06:15 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-22 16:06:16 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625
ERROR - 2016-10-22 16:06:16 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-22 16:06:16 --> 0baf5f0d8b3937e70ff20b7219a169b3f00602079b81675d1263c78ddaaa62cb
ERROR - 2016-10-22 16:06:17 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-22 16:06:17 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf
ERROR - 2016-10-22 16:06:17 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-22 16:06:17 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae
ERROR - 2016-10-22 16:06:18 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-22 16:06:18 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-22 16:06:19 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-22 16:06:19 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-22 16:06:19 --> {"multicast_id":6191623511707760994,"success":56,"failure":6,"canonical_ids":23,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579656859%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579656170%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477123579661583%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477123579660623%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477123579661585%2be98557f9fd7ecd"},{"message_id":"0:1477123579660121%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123579666295%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123579665668%2be98557f9fd7ecd"},{"message_id":"0:1477123579666297%2be98557f9fd7ecd"},{"message_id":"0:1477123579665670%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1477123579668376%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579668106%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579669381%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1477123579670804%2be98557f9fd7ecd"},{"message_id":"0:1477123579673665%2be98557f9fd7ecd"},{"message_id":"0:1477123579671064%2be98557f9fd7ecd"},{"message_id":"0:1477123579670012%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477123579672514%2be98557f9fd7ecd"},{"message_id":"0:1477123579671558%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579670878%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579674293%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123579672951%2be98557f9fd7ecd"},{"message_id":"0:1477123579673914%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123579672952%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579673912%2be98557f9fd7ecd"},{"message_id":"0:1477123579674769%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477123579675617%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579674767%2be98557f9fd7ecd"},{"message_id":"0:1477123579673916%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579675565%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477123579675567%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579675932%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123579675569%2be98557f9fd7ecd"},{"message_id":"0:1477123579675956%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"error":"NotRegistered"},{"message_id":"0:1477123579675930%2be98557f9fd7ecd"},{"message_id":"0:1477123579675958%2be98557f9fd7ecd"},{"message_id":"0:1477123579676221%2be98557f9fd7ecd"},{"message_id":"0:1477123579688190%2be98557f9fd7ecd"},{"message_id":"0:1477123579677960%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477123579676877%2be98557f9fd7ecd"},{"message_id":"0:1477123579677943%2be98557f9fd7ecd"},{"message_id":"0:1477123579676875%2be98557f9fd7ecd"},{"message_id":"0:1477123579677958%2be98557f9fd7ecd"},{"message_id":"0:1477123579676784%2be98557f9fd7ecd"},{"message_id":"0:1477123579677962%2be98557f9fd7ecd"},{"message_id":"0:1477123579680710%2be98557f9fd7ecd"},{"message_id":"0:1477123579681175%2be98557f9fd7ecd"},{"message_id":"0:1477123579679026%2be98557f9fd7ecd"},{"message_id":"0:1477123579680923%2be98557f9fd7ecd"},{"message_id":"0:1477123579678239%2be98557f9fd7ecd"},{"message_id":"0:1477123579682754%2be98557f9fd7ecd"},{"message_id":"0:1477123579683949%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs","message_id":"0:1477123579681177%2be98557f9fd7ecd"},{"message_id":"0:1477123579680926%2be98557f9fd7ecd"},{"message_id":"0:1477123579682290%2be98557f9fd7ecd"},{"message_id":"0:1477123579682837%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:06:20 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-22 16:06:20 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4
ERROR - 2016-10-22 16:06:21 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221
ERROR - 2016-10-22 16:06:22 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 16:06:22 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f
ERROR - 2016-10-22 16:06:23 --> 90f0938bfc051175ef21951b0a94826d98826b5dbe49330b10bbe10e881f84ff
ERROR - 2016-10-22 16:06:23 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0
ERROR - 2016-10-22 16:06:24 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f
ERROR - 2016-10-22 16:06:25 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e
ERROR - 2016-10-22 16:06:25 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d
ERROR - 2016-10-22 16:06:26 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779
ERROR - 2016-10-22 16:06:26 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625
ERROR - 2016-10-22 16:06:27 --> 0baf5f0d8b3937e70ff20b7219a169b3f00602079b81675d1263c78ddaaa62cb
ERROR - 2016-10-22 16:06:28 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf
ERROR - 2016-10-22 16:06:28 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae
ERROR - 2016-10-22 16:06:29 --> APA91bH3p1YQkRF2_EDryrT2D_J4oo34iIXPECmmjV5Zrxp46ZcOfirrtVKEYODyehWJZOTY76DUv8zYAB9OXGAftReeYMQ3_pEnzBPfWtyL2a0P5aWLLB8-74-2
ERROR - 2016-10-22 16:06:30 --> {"multicast_id":5093594020911406456,"success":56,"failure":6,"canonical_ids":23,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590934915%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590934967%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477123590935992%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477123590933921%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477123590934959%2be98557f9fd7ecd"},{"message_id":"0:1477123590934976%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123590937009%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123590934963%2be98557f9fd7ecd"},{"message_id":"0:1477123590939221%2be98557f9fd7ecd"},{"message_id":"0:1477123590936476%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1477123590934919%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590936008%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590934954%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1477123590935986%2be98557f9fd7ecd"},{"message_id":"0:1477123590936997%2be98557f9fd7ecd"},{"message_id":"0:1477123590936006%2be98557f9fd7ecd"},{"message_id":"0:1477123590934952%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477123590936004%2be98557f9fd7ecd"},{"message_id":"0:1477123590933974%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590934979%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590935877%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123590936999%2be98557f9fd7ecd"},{"message_id":"0:1477123590935980%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477123590935998%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590934918%2be98557f9fd7ecd"},{"message_id":"0:1477123590934969%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477123590933984%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590934961%2be98557f9fd7ecd"},{"message_id":"0:1477123590935984%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590935996%2be98557f9fd7ecd"},{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477123590934907%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590936012%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477123590936972%2be98557f9fd7ecd"},{"message_id":"0:1477123590935988%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"error":"NotRegistered"},{"message_id":"0:1477123590936984%2be98557f9fd7ecd"},{"message_id":"0:1477123590937771%2be98557f9fd7ecd"},{"message_id":"0:1477123590934981%2be98557f9fd7ecd"},{"message_id":"0:1477123590935878%2be98557f9fd7ecd"},{"message_id":"0:1477123590936010%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1477123590935938%2be98557f9fd7ecd"},{"message_id":"0:1477123590936001%2be98557f9fd7ecd"},{"message_id":"0:1477123590937777%2be98557f9fd7ecd"},{"message_id":"0:1477123590934971%2be98557f9fd7ecd"},{"message_id":"0:1477123590934975%2be98557f9fd7ecd"},{"message_id":"0:1477123590937007%2be98557f9fd7ecd"},{"message_id":"0:1477123590935879%2be98557f9fd7ecd"},{"message_id":"0:1477123590935990%2be98557f9fd7ecd"},{"message_id":"0:1477123590935979%2be98557f9fd7ecd"},{"message_id":"0:1477123590936926%2be98557f9fd7ecd"},{"message_id":"0:1477123590936980%2be98557f9fd7ecd"},{"message_id":"0:1477123590936976%2be98557f9fd7ecd"},{"message_id":"0:1477123590936990%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs","message_id":"0:1477123590937001%2be98557f9fd7ecd"},{"message_id":"0:1477123590936991%2be98557f9fd7ecd"},{"message_id":"0:1477123590936986%2be98557f9fd7ecd"},{"message_id":"0:1477123590937002%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:06:50 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-10-22 16:06:54 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-22 16:07:34 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0-69-1
ERROR - 2016-10-22 16:08:44 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 16:09:52 --> APA91bEIs2w6S39ths3wAaFAa7Ln-V0WjR_sPDhP-eAO2YaPN5UW2bAJNo0vokxjRXC7BDk-pg5S8_P9fOBWZElEqFxnbQymtb4IdUyHdvJAlbH6a6qR4n0-89-2
ERROR - 2016-10-22 16:10:57 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 16:12:48 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 25  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-22 16:12:56 --> APA91bHGL8u4wL1ORtKBMKQpyZ4o8WvKUuw9SgdnnhOFitkpTqS6SDJoN2df4ZA5ZAMpoy40NniKQbnxmEnJH1iWuu95Xm4wfEGwBcXCcPeWGuO3lwVvbhw-59-2
ERROR - 2016-10-22 16:13:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 16:16:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 16:30:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:51 --> Severity: Notice --> Undefined variable: msg /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 246
ERROR - 2016-10-22 16:30:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 16:34:56 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-22 16:34:57 --> Query error: Unknown column 'msg' in 'where clause' - Invalid query: update push_to_send set sent_date = '2016-10-22 16:34:56' where token = '7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662' and 
				msg ='《The Little Piggy Spare Ribs Noodles》has joined LIVE, please download MyLive ads and visit 《The Little Piggy Spare Ribs Noodles》! 《猪小弟肉骨面》已经加入LIVE，请下载MyLive ads欢迎光临《猪小弟肉骨面》！'
ERROR - 2016-10-22 16:37:37 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-22 16:37:38 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-22 16:37:39 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-22 16:37:40 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-22 16:37:40 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-22 16:37:41 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-22 16:37:42 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-22 16:37:43 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-22 16:37:43 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-22 16:37:44 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-22 16:37:45 --> {"multicast_id":5892929733005716235,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125465525424%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:45 --> {"multicast_id":6369614391776374944,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125465666665%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:45 --> {"multicast_id":5424597472590088450,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477125465762493%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:45 --> {"multicast_id":7936209673053519586,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477125465858236%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:45 --> {"multicast_id":5049977282451332773,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477125465961794%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:46 --> {"multicast_id":6811173603039263160,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125466041760%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:46 --> {"multicast_id":8692004183514218874,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477125466121319%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:46 --> {"multicast_id":8030380939244286909,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477125466195899%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:46 --> {"multicast_id":8713849419716429119,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125466270738%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:37:46 --> {"multicast_id":8699316919175324386,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125466346581%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:38:26 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-22 16:40:03 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-22 16:40:04 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-22 16:40:05 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-22 16:40:05 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-22 16:40:06 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-22 16:40:07 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-22 16:40:08 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-22 16:40:08 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-22 16:40:09 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-22 16:40:10 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":4840158040820607020,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":6693731583937426078,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1477125611237962%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":5175316825616814003,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125611360332%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":8679807089217051326,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125611435034%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":9159441244767882894,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1477125611524361%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":4924268256343858013,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125611607906%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":5402111321817799898,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125611669269%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":5988184599894499105,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125611737498%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":6990432759408057576,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:40:11 --> {"multicast_id":6807342796869596107,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125611894824%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:03 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-22 16:41:04 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-22 16:41:04 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-22 16:41:05 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-22 16:41:06 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-22 16:41:06 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-22 16:41:07 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-22 16:41:07 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-22 16:41:08 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4
ERROR - 2016-10-22 16:41:09 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":5072542770918471565,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125669999620%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":5897153713390528105,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125670104295%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":6337547783713469510,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125670201379%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":4887644358515964343,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477125670289843%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":5725016520356917650,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125670372927%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":5880675805483510713,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477125670452770%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":7166500302833667929,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125670532788%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":8077989690815945751,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125670622346%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":6981918154708525313,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477125670732516%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:10 --> {"multicast_id":9042171243801472639,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125670839582%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:41:19 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08-49-1
ERROR - 2016-10-22 16:42:02 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-22 16:42:03 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f
ERROR - 2016-10-22 16:42:04 --> 90f0938bfc051175ef21951b0a94826d98826b5dbe49330b10bbe10e881f84ff
ERROR - 2016-10-22 16:42:04 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0
ERROR - 2016-10-22 16:42:05 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f
ERROR - 2016-10-22 16:42:05 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e
ERROR - 2016-10-22 16:42:06 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d
ERROR - 2016-10-22 16:42:07 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779
ERROR - 2016-10-22 16:42:07 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625
ERROR - 2016-10-22 16:42:08 --> 0baf5f0d8b3937e70ff20b7219a169b3f00602079b81675d1263c78ddaaa62cb
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":8985742006460047792,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125729363244%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":7857548590896144334,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125729456615%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":6917113325014910734,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477125729550987%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":8030079948378705887,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125729632674%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":7198990085804020604,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477125729704945%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":5301629095860827115,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125729785500%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":6230639635265751473,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:42:09 --> {"multicast_id":7981514839908986298,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:42:10 --> {"multicast_id":7094247256762107278,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125729994932%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:42:10 --> {"multicast_id":6030103606283117453,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125730091668%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:01 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf
ERROR - 2016-10-22 16:43:02 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":8235633194503189788,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783318810%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":5687892776234112650,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783409683%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":7490009272599351924,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783483632%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":7467606757466157116,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":5926418757754501390,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783625963%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":8010037270025620094,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783714044%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":6843705629698030811,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783788880%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:03 --> {"multicast_id":6474234073031303662,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783880226%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:04 --> {"multicast_id":5590116073492989909,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125783988324%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:04 --> {"multicast_id":5241105831041731194,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125784113779%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:43:09 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:43:39 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-22 16:43:54 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:43:58 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-32-2
ERROR - 2016-10-22 16:44:02 --> {"multicast_id":4772491424474730117,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842175954%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:02 --> {"multicast_id":6544583860248382505,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842354658%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:02 --> {"multicast_id":5447719544373009306,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842458902%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:02 --> {"multicast_id":6815445088161758508,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842593956%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:02 --> {"multicast_id":5319181181340885824,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842717928%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:02 --> {"multicast_id":5303424506146961623,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842871098%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:03 --> {"multicast_id":5148217116604385941,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125842992473%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:03 --> {"multicast_id":8389538632286422659,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:44:03 --> {"multicast_id":7820017787694126730,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs","message_id":"0:1477125843158140%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:03 --> {"multicast_id":7329878419369205617,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125843279966%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:44:30 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:45:02 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:45:03 --> {"multicast_id":7918519427727246177,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-22 16:45:03 --> {"multicast_id":8390370375268491827,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477125903367426%2be98557f9fd7ecd"}]}
ERROR - 2016-10-22 16:45:22 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:52:42 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:53:25 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:53:46 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 16:54:00 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 17:00:30 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 17:01:14 --> loginss:katoling0823@gmail.com,onmm4138
ERROR - 2016-10-22 17:01:14 --> login failed
ERROR - 2016-10-22 17:06:47 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 17:07:00 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 17:07:48 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 17:09:26 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-22 17:33:15 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 17:57:04 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 18:21:18 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-22 18:26:25 --> register, code:3938
ERROR - 2016-10-22 18:26:25 --> register_succes:91
ERROR - 2016-10-22 18:26:26 --> an error has occured: OK: 59291_186_185<br>
ERROR - 2016-10-22 18:26:36 --> verification: user_id:91,code:3938
ERROR - 2016-10-22 18:26:50 --> loginss:vekham1419@gmail.com,oi776oi3ii
ERROR - 2016-10-22 18:26:50 --> login
ERROR - 2016-10-22 18:26:50 --> f5489c5a56dbf433ed8392abc4d78d8025dec93d49ba9f177f8374f22db42c84-91-1
ERROR - 2016-10-22 18:30:09 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 18:34:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 18:35:11 --> APA91bE4uluIEx7ixtsYArHMIir_G5frTApyIyXt-hskcydgp5KPY0vMWPP_VwzFQJzX-lUXaPTN2ufQgV4ZjvnwzPFMbkjkVER3UqzzZhJ6xXTOnIIih5Q--2
ERROR - 2016-10-22 18:37:45 --> register, code:5713
ERROR - 2016-10-22 18:37:45 --> register_succes:92
ERROR - 2016-10-22 18:37:46 --> an error has occured: OK: 59291_187_186<br>
ERROR - 2016-10-22 18:37:54 --> verification: user_id:92,code:
ERROR - 2016-10-22 18:55:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 18:56:09 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 18:56:43 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 18:56:59 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-22 18:57:46 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-22 18:59:42 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 19:58:29 --> APA91bFtscVR7AzT6rMjEoLM7i6ilASUlH4oHCvJq84PTjtosFohFcrs_AGG-gnMsnH9pSlIGbxy2RpmLHLsghibxMVuZrWts6gWwHh7Zk9afpMWZg5v8mE-90-2
ERROR - 2016-10-22 20:04:42 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 20:20:45 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-22 21:19:48 --> APA91bGayts-5QtccQltpEJ4mPFUrkF3VEpjcWcD1duXPDeq5ZvZNcg_MTSlgO5sHVhI8hCv90ef_l-0eLN7zhl9gyOTySQ26C3kz_eGJgUgohrisgpfFSw-70-2
ERROR - 2016-10-22 22:07:23 --> APA91bEwCCD9Q9BKJINGx2atADPnkhYWCRSxc00y-5pfCffxf0EfZ-iOW6DHCPh9LfUYmAf6UrA7CmuMyQgnZyjuooPffxL6gGsX1XPmRYlr9mlYVgDvj3E-64-2
ERROR - 2016-10-22 22:09:30 --> APA91bEwCCD9Q9BKJINGx2atADPnkhYWCRSxc00y-5pfCffxf0EfZ-iOW6DHCPh9LfUYmAf6UrA7CmuMyQgnZyjuooPffxL6gGsX1XPmRYlr9mlYVgDvj3E-64-2
ERROR - 2016-10-22 22:33:21 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-22 22:35:19 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-22 23:03:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 23:06:26 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 23:06:50 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 23:06:57 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 23:07:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 23:09:58 --> SELECT
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
ERROR - 2016-10-22 23:10:33 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 23:12:18 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 23:13:39 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-22 23:16:25 --> register, code:1200
ERROR - 2016-10-22 23:16:25 --> register_succes:93
ERROR - 2016-10-22 23:16:26 --> an error has occured: OK: 59291_188_187<br>
ERROR - 2016-10-22 23:16:44 --> verification: user_id:93,code:1200
ERROR - 2016-10-22 23:17:11 --> loginss:richtan8@gmail.com,bdm10019226
ERROR - 2016-10-22 23:17:11 --> login
ERROR - 2016-10-22 23:17:13 --> APA91bFMTfZEPpma8TPZk4kWvO9A17Qok2DAVaEvyd9dClNoJn_6qfE0qv8S66KYPmPpjJaK41epOv-CuPzQY6Rk7SRFY44ejM6RSYDXDdsXE36Gba4-YjU-93-2
ERROR - 2016-10-22 23:17:55 --> APA91bFMTfZEPpma8TPZk4kWvO9A17Qok2DAVaEvyd9dClNoJn_6qfE0qv8S66KYPmPpjJaK41epOv-CuPzQY6Rk7SRFY44ejM6RSYDXDdsXE36Gba4-YjU-93-2
ERROR - 2016-10-22 23:18:14 --> SELECT
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
ERROR - 2016-10-22 23:18:24 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-22' AND `event`.paid_ads_end_date >= '2016-10-22' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-22 23:18:27 --> APA91bFMTfZEPpma8TPZk4kWvO9A17Qok2DAVaEvyd9dClNoJn_6qfE0qv8S66KYPmPpjJaK41epOv-CuPzQY6Rk7SRFY44ejM6RSYDXDdsXE36Gba4-YjU-93-2
ERROR - 2016-10-22 23:21:14 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-22 23:21:54 --> APA91bFMTfZEPpma8TPZk4kWvO9A17Qok2DAVaEvyd9dClNoJn_6qfE0qv8S66KYPmPpjJaK41epOv-CuPzQY6Rk7SRFY44ejM6RSYDXDdsXE36Gba4-YjU-93-2
ERROR - 2016-10-22 23:22:20 --> APA91bFMTfZEPpma8TPZk4kWvO9A17Qok2DAVaEvyd9dClNoJn_6qfE0qv8S66KYPmPpjJaK41epOv-CuPzQY6Rk7SRFY44ejM6RSYDXDdsXE36Gba4-YjU-93-2
ERROR - 2016-10-22 23:23:23 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-22 23:48:20 --> APA91bGDCb00UIsiWvLu8rj4rlZA050EdVttVOS2mbZYhPikFXTKwueX9wSFglbT-rynaP_dvjUIOB4qtTiyXHq_0ADiVAhFcsxEXo99t5hsI-xJNk4Xy-0-16-2
