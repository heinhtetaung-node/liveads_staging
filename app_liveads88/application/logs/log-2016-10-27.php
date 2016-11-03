<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-27 00:01:27 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 00:06:34 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 00:08:37 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-27 00:10:02 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-27 00:12:22 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 00:17:53 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 00:39:15 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 01:14:03 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 01:34:26 --> register, code:7689
ERROR - 2016-10-27 01:34:26 --> register_succes:103
ERROR - 2016-10-27 01:34:27 --> an error has occured: OK: 59291_198_197<br>
ERROR - 2016-10-27 01:34:41 --> verification: user_id:103,code:7689
ERROR - 2016-10-27 01:35:04 --> loginss:jieeng78@gmail.com,Low7870323
ERROR - 2016-10-27 01:35:04 --> login
ERROR - 2016-10-27 01:35:04 --> d3436dce5310e4e7f792bed1945a437bc3de17fb91f06c60753ec7c35011c679-103-1
ERROR - 2016-10-27 01:36:10 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 10  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 02:26:29 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:26:51 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:26:55 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:27:08 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:28:00 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:28:28 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:28:56 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:28:59 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:29:06 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:29:12 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:29:17 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:29:47 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:29:53 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:29:56 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:29:58 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:30:02 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:30:09 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:30:53 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 02:30:58 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 02:31:05 --> SELECT `user_id` FROM `token` WHERE `token` = '381ea13f7713cef9dc2ac821ab1b5d7dbece32c4cd1aed69ebde923562c074b8'
ERROR - 2016-10-27 02:31:13 --> SELECT `user_id` FROM `token` WHERE `token` = '381ea13f7713cef9dc2ac821ab1b5d7dbece32c4cd1aed69ebde923562c074b8'
ERROR - 2016-10-27 02:31:36 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-27 04:23:46 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 05:17:57 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-27 05:18:33 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 05:20:17 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-27 08:18:28 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-27 08:20:17 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-27 08:21:51 --> APA91bHgDw2iFqbOXlUM7vqoXUGtJ0pmrh-1NGgltcT1GEsWwzENnOAcAhsYpqqct0RstYpauQsUDVfPbKeCm4jsmGcCa5m0ZYslknJ5zJ4TEVjrBjrZu_g-15-2
ERROR - 2016-10-27 09:37:39 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-27 09:38:33 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 21  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 09:38:36 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 21  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 11:00:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-27 11:02:10 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-27 11:02:10 --> login
ERROR - 2016-10-27 11:02:11 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 11:04:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 11:06:03 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 11:09:26 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 11:10:24 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 11:10:47 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 11:10:51 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 11:24:04 --> 47a8e400f7a9103e40bc297d3799221e5118f7bcd2141c28506f1c821682bc47-100-1
ERROR - 2016-10-27 11:26:31 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 11:40:12 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-27 11:42:31 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-27 11:44:18 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 11:44:45 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 11:46:02 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 12:22:46 --> 47a8e400f7a9103e40bc297d3799221e5118f7bcd2141c28506f1c821682bc47-100-1
ERROR - 2016-10-27 12:24:09 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:25:18 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:30:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:39:09 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:39:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:40:18 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:44:29 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 12:50:45 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 12:53:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:23:45 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:24:36 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-10-27 13:28:21 --> APA91bGayts-5QtccQltpEJ4mPFUrkF3VEpjcWcD1duXPDeq5ZvZNcg_MTSlgO5sHVhI8hCv90ef_l-0eLN7zhl9gyOTySQ26C3kz_eGJgUgohrisgpfFSw-70-2
ERROR - 2016-10-27 13:29:15 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:29:43 --> loginss:windy910615@gmail.com,0177498149
ERROR - 2016-10-27 13:29:43 --> login failed
ERROR - 2016-10-27 13:29:57 --> loginss:windy910615@gmail.com,jex7699893
ERROR - 2016-10-27 13:29:57 --> login failed
ERROR - 2016-10-27 13:31:19 --> loginss:xiaoting910615@gmail.com,0177498149
ERROR - 2016-10-27 13:31:19 --> login failed
ERROR - 2016-10-27 13:31:57 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 13:32:08 --> register, code:5138
ERROR - 2016-10-27 13:32:08 --> register_succes:104
ERROR - 2016-10-27 13:32:09 --> an error has occured: OK: 59291_199_198<br>
ERROR - 2016-10-27 13:32:19 --> verification: user_id:104,code:@
ERROR - 2016-10-27 13:33:15 --> register, code:4389
ERROR - 2016-10-27 13:33:21 --> register, code:5496
ERROR - 2016-10-27 13:33:37 --> register, code:1303
ERROR - 2016-10-27 13:34:17 --> loginss:xiaoting910615@gmail.com,9893
ERROR - 2016-10-27 13:34:17 --> login failed
ERROR - 2016-10-27 13:37:37 --> register, code:7929
ERROR - 2016-10-27 13:37:49 --> register, code:7331
ERROR - 2016-10-27 13:37:49 --> register_succes:105
ERROR - 2016-10-27 13:37:50 --> an error has occured: OK: 59291_200_199<br>
ERROR - 2016-10-27 13:38:09 --> verification: user_id:105,code:7331
ERROR - 2016-10-27 13:38:22 --> APA91bF5agPpD-rvxfyOoVeKFohDr8800Olbdldsvl_KpB8GJ5KKg0VFBWWPlAHla2XHXsuuXktJ2k40FJnQ3NjOnOMxlFLRqt6NXQZBbMLsjlWQVdHveUY-105-2
ERROR - 2016-10-27 13:39:22 --> loginss:windyting@gmail.com,9779
ERROR - 2016-10-27 13:39:22 --> login
ERROR - 2016-10-27 13:39:41 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 13:41:07 --> APA91bF5agPpD-rvxfyOoVeKFohDr8800Olbdldsvl_KpB8GJ5KKg0VFBWWPlAHla2XHXsuuXktJ2k40FJnQ3NjOnOMxlFLRqt6NXQZBbMLsjlWQVdHveUY-105-2
ERROR - 2016-10-27 13:41:38 --> APA91bF5agPpD-rvxfyOoVeKFohDr8800Olbdldsvl_KpB8GJ5KKg0VFBWWPlAHla2XHXsuuXktJ2k40FJnQ3NjOnOMxlFLRqt6NXQZBbMLsjlWQVdHveUY-105-2
ERROR - 2016-10-27 13:46:37 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:47:43 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:48:51 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:51:13 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:52:38 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 28  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 13:55:53 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 13:56:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:03:08 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:03:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 14:05:54 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:14:58 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:17:42 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:17:48 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-27 14:19:28 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:22:03 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-27 14:24:33 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:24:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 14:30:13 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-27 14:34:20 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-27 14:38:07 --> APA91bF7P-kSTxbmggGDSX14LP6_U4t32vYyGWp6dRLQtvcLkpfTYCQ3CNYcDF9CX0adNft1ETBvnJHtLVV0izIYZYEd8BO73jr-ay4AzmCJlTKGryluyTc-53-2
ERROR - 2016-10-27 14:39:59 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-27 14:46:36 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-27 14:49:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-27 14:49:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-27 15:20:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-27 15:21:50 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 15:29:47 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 16:36:20 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-27 16:36:51 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 16:54:15 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-10-27 17:17:33 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 17:32:23 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:35:38 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:42:50 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:43:35 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:46:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:48:51 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:49:04 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:56:44 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 17:57:14 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 17:57:58 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 17:58:25 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:02:17 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:04:16 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 27  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 18:04:32 --> 404 Page Not Found: api/Shop/detail
ERROR - 2016-10-27 18:06:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:07:52 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 18:08:06 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:08:44 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:09:29 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 18:18:29 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:20:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:20:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:28:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:31:30 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:32:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:32:27 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:33:31 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:38:59 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:40:03 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:40:12 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:42:02 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:43:08 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-10-27 18:43:31 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:44:24 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:51:55 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:53:11 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:55:57 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:56:19 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:56:22 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-10-27 18:56:31 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:59:01 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 18:59:07 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 18:59:14 --> SELECT
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
ERROR - 2016-10-27 19:05:40 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 19:08:00 --> register, code:9832
ERROR - 2016-10-27 19:08:00 --> register_succes:106
ERROR - 2016-10-27 19:08:00 --> an error has occured: OK: 59291_201_200<br>
ERROR - 2016-10-27 19:08:20 --> verification: user_id:106,code:9832
ERROR - 2016-10-27 19:08:44 --> loginss:xian1321@hotmail.com,xian0215
ERROR - 2016-10-27 19:08:44 --> login
ERROR - 2016-10-27 19:08:45 --> APA91bFzOErwTTeiL-uGQdz6wnYmzY783VI8npcice39CdbuuVt46u_RnFdq0uOBdRZtnFyfPO0pGoZB2q26gBe7gDh1DXI9lj9_YwWEthzu6uG0exHCWqk-106-2
ERROR - 2016-10-27 19:09:06 --> SELECT `user_id` FROM `token` WHERE `token` = '7fd35493fe8d499812d2d67fca8df7758db91a6133b48f3e43fd327900dc97e9'
ERROR - 2016-10-27 19:09:08 --> SELECT `user_id` FROM `token` WHERE `token` = '7fd35493fe8d499812d2d67fca8df7758db91a6133b48f3e43fd327900dc97e9'
ERROR - 2016-10-27 19:10:13 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 19:10:34 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 12  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 19:23:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 19:26:54 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 19:27:07 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-27 19:27:13 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-27 19:27:35 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 19:27:40 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 19:27:43 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 20:00:34 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 20:02:34 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:03:22 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:04:49 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-27 20:05:06 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:40:30 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:41:15 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:42:04 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:42:49 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:43:54 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:45:24 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:46:47 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:47:40 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:49:05 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:50:50 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:50:59 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:52:21 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:54:38 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 20:55:18 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:57:10 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 20:59:24 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:04:48 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:06:24 --> SELECT
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
ERROR - 2016-10-27 21:06:56 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 18  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-27 21:08:40 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:10:19 --> register, code:6740
ERROR - 2016-10-27 21:10:19 --> register_succes:107
ERROR - 2016-10-27 21:10:20 --> an error has occured: OK: 59291_202_201<br>
ERROR - 2016-10-27 21:10:31 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:10:38 --> verification: user_id:107,code:6740
ERROR - 2016-10-27 21:10:56 --> loginss:lgrouphau@gmail.com,a2797605
ERROR - 2016-10-27 21:10:56 --> login
ERROR - 2016-10-27 21:10:59 --> APA91bEdWaebJ7g-tw6_j5Qb92f6Q3u0d8R0wHS7G5FPZDI56T7wcmVvWUI_yts9k2veAedsXkVZ_533WWSSew0KHBrW1i1aTZyNnwzkiDYrT5z1Zoo-ZQ8-107-2
ERROR - 2016-10-27 21:11:18 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:11:31 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 21:12:22 --> SELECT
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
ERROR - 2016-10-27 21:13:02 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:14:00 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:14:52 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:15:42 --> APA91bEdWaebJ7g-tw6_j5Qb92f6Q3u0d8R0wHS7G5FPZDI56T7wcmVvWUI_yts9k2veAedsXkVZ_533WWSSew0KHBrW1i1aTZyNnwzkiDYrT5z1Zoo-ZQ8-107-2
ERROR - 2016-10-27 21:16:35 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:18:36 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:28:20 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 21:39:10 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 21:43:42 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 22:19:48 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 22:30:20 --> register, code:8190
ERROR - 2016-10-27 22:30:20 --> register_succes:108
ERROR - 2016-10-27 22:30:21 --> an error has occured: OK: 59291_203_202<br>
ERROR - 2016-10-27 22:30:32 --> verification: user_id:108,code:8190
ERROR - 2016-10-27 22:30:50 --> loginss:weesiang83@gmail.com,wslim5299
ERROR - 2016-10-27 22:30:50 --> login
ERROR - 2016-10-27 22:30:50 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-10-27 22:31:43 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 22:34:15 --> loginss:suwk87@live.com,123456
ERROR - 2016-10-27 22:34:15 --> login failed
ERROR - 2016-10-27 22:34:24 --> loginss:suwk87@live.com,******
ERROR - 2016-10-27 22:34:24 --> login
ERROR - 2016-10-27 22:38:57 --> loginss:weesiang83@gmail.com,wslim5299
ERROR - 2016-10-27 22:38:57 --> login
ERROR - 2016-10-27 22:38:58 --> 1585c9ad5ac2fe44204c47ef1a6b0b084d638fdff3a4ce5d23646946ae4ba5ff-108-1
ERROR - 2016-10-27 22:39:12 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 22:39:12 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 22:47:39 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 22:48:23 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 22:59:09 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-27 22:59:14 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 22:59:19 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 22:59:21 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 23:00:15 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-10-27 23:00:20 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-10-27 23:01:36 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:01:37 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:03:20 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91-20-1
ERROR - 2016-10-27 23:05:14 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-27 23:05:18 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 23:05:21 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-27 23:05:40 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-27 23:06:32 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-10-27 23:06:36 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-10-27 23:06:40 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-10-27 23:06:43 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-10-27 23:06:46 --> SELECT `user_id` FROM `token` WHERE `token` = '387cc8165a48b6f744dbf41079849f618f03dfd17d2926bae4945782b4618464'
ERROR - 2016-10-27 23:07:22 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:08:44 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:08:50 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:10:43 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:14:40 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:14:42 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:16:35 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:16:39 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:19:03 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:19:18 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:20:16 --> APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o-14-2
ERROR - 2016-10-27 23:20:17 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-27' AND `event`.paid_ads_end_date >= '2016-10-27' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-27 23:24:16 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-27 23:31:24 --> APA91bF6bimUCvC3cgGigAfJoHQwyIr7UptjHrymtCptgWPdMIsFsC5XM2eYW6NeF15_Pje-X2od54F3XgNtim8ZEkD_39ATMKvNhDRbXe_bwII8BBXOpjk-32-2
ERROR - 2016-10-27 23:39:29 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-27 23:40:33 --> SELECT `user_id` FROM `token` WHERE `token` = '7fe36640639714a25ef49ab5738d168d0e03eb7781449eda1da6cbb4f6a89ab2'
ERROR - 2016-10-27 23:40:35 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-10-27 23:40:57 --> SELECT `user_id` FROM `token` WHERE `token` = '42ccac56cc0faa7fc1fecca646f34b6cd0414bd9acebefc075b75802f8e1077f'
ERROR - 2016-10-27 23:41:03 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
