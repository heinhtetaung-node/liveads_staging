<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-23 02:15:58 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-23 06:48:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2016-10-23 07:13:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-23 07:13:29 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-23 07:14:30 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-23 07:19:06 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-23 07:21:01 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-23 07:21:05 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-23' AND `event`.paid_ads_end_date >= '2016-10-23' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-23 07:22:01 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-23' AND `event`.paid_ads_end_date >= '2016-10-23' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-23 07:22:17 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-23' AND `event`.paid_ads_end_date >= '2016-10-23' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-23 07:22:23 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-23 07:22:49 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-23 07:23:33 --> SELECT
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
ERROR - 2016-10-23 07:23:33 --> SELECT `user_id` FROM `token` WHERE `token` = '381ea13f7713cef9dc2ac821ab1b5d7dbece32c4cd1aed69ebde923562c074b8'
ERROR - 2016-10-23 07:23:40 --> SELECT `user_id` FROM `token` WHERE `token` = '381ea13f7713cef9dc2ac821ab1b5d7dbece32c4cd1aed69ebde923562c074b8'
ERROR - 2016-10-23 07:23:40 --> SELECT
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
ERROR - 2016-10-23 07:23:48 --> APA91bG9LmgyUwyUIj0XXgroJzEa0vOHHGMmX_-sl83_xoUTAo9jfZexXCct7u5nddPqu5NnrxTfsAJ_t97JhOcOfrjP25GX0w6nWJ7FNkObQQCxxbKQwh0-32-2
ERROR - 2016-10-23 07:32:44 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-23 07:55:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-23 07:57:43 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-23 07:57:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-10-23 09:10:02 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-23 09:10:03 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-23 09:10:04 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-23 09:10:04 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-23 09:10:05 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-23 09:10:06 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-23 09:10:06 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-23 09:10:07 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-23 09:10:08 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-23 09:10:08 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":6584909773429344644,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185009331933%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":9146959705636643826,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185009424147%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":5520206091451142082,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477185009501522%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":8827159023705647646,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477185009580602%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":8661099971843878632,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1477185009656995%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":6594034998071698903,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185009761363%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":7259712377162659964,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477185009856275%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:09 --> {"multicast_id":6955455107541133983,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477185009948048%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:10 --> {"multicast_id":8278914258739316348,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185010031102%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:10:10 --> {"multicast_id":6846081552528204623,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185010112294%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:02 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-23 09:11:03 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-23 09:11:03 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-23 09:11:04 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-23 09:11:04 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-23 09:11:05 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-23 09:11:05 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-23 09:11:06 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-23 09:11:07 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-23 09:11:07 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-23 09:11:08 --> {"multicast_id":7516903005977107079,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:11:08 --> {"multicast_id":8489599992651524119,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1477185068549476%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:08 --> {"multicast_id":6209757918357542307,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185068660531%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:08 --> {"multicast_id":6021377700837739277,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185068758955%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:08 --> {"multicast_id":8852890351391657212,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1477185068825086%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:08 --> {"multicast_id":5518141928539682789,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185068912297%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:09 --> {"multicast_id":7301157296297452553,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185068994336%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:09 --> {"multicast_id":8783882514659304773,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185069112939%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:11:09 --> {"multicast_id":6925859597605844458,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:11:09 --> {"multicast_id":8570615699058920284,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185069256246%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:02 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-23 09:12:03 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-23 09:12:03 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-23 09:12:04 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-23 09:12:05 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-23 09:12:05 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-23 09:12:06 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-23 09:12:06 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-23 09:12:07 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4
ERROR - 2016-10-23 09:12:08 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221
ERROR - 2016-10-23 09:12:08 --> {"multicast_id":9074184266679444115,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185128873451%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:08 --> {"multicast_id":5908825006879381093,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185128962915%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":6793347008872657624,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185129034165%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":5241582978284270932,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477185129115687%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":6422642282115285897,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185129199814%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":8018838389118182303,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1477185129280413%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":9163198260816155477,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185129353682%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":5684583632650587032,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185129439794%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":6125295132001823966,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477185129518866%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:12:09 --> {"multicast_id":7475537733293945544,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185129591671%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:02 --> 6cad17a017aa40c7427d102a90a8acc3f9f76d0f0b67ac79ed7e36c2bf750f2d
ERROR - 2016-10-23 09:13:02 --> d9fe05d7f1126e41e847b692231392ca452eae8ae5cae23216f45a2fe1758d0f
ERROR - 2016-10-23 09:13:03 --> 90f0938bfc051175ef21951b0a94826d98826b5dbe49330b10bbe10e881f84ff
ERROR - 2016-10-23 09:13:04 --> ef13993ec9fb08cde0fdcc02d3cfafa7a67ff1672678e0be031d9560f1ffb6e0
ERROR - 2016-10-23 09:13:04 --> 484350a1cd9abd244ac1c52df4be077ebd06d58446310b10f6b57f7429f8e66f
ERROR - 2016-10-23 09:13:05 --> 3a3cc28453c4d22459c078f82a3209559917b6d778c16eb9d3754593e99cd59e
ERROR - 2016-10-23 09:13:05 --> e83333fa512b81e9c6847afaa6a573428bbb1f3909342770ce0c52c79f4e513d
ERROR - 2016-10-23 09:13:06 --> af053e47571b55101ed2b3ec2c976d31b5c3f2c8639c40df77fbf0c785485779
ERROR - 2016-10-23 09:13:07 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625
ERROR - 2016-10-23 09:13:07 --> 0baf5f0d8b3937e70ff20b7219a169b3f00602079b81675d1263c78ddaaa62cb
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":8018457581742119382,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185188343470%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":7675930950512952118,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185188437959%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":5454721598002808735,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk","message_id":"0:1477185188527615%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":9006950485045966651,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185188616906%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":4699831598627163753,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1477185188710241%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":8075152080695099983,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185188793212%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":7965935114048544649,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:13:08 --> {"multicast_id":4883577504733996880,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:13:09 --> {"multicast_id":9044246752042101124,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185189020963%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:13:09 --> {"multicast_id":5804651245900951570,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185189114147%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:01 --> 88eda74618473ab9390dff140cbe4ac9fb3a96cdb81772b906bbe66213c92caf
ERROR - 2016-10-23 09:14:02 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae
ERROR - 2016-10-23 09:14:03 --> f5489c5a56dbf433ed8392abc4d78d8025dec93d49ba9f177f8374f22db42c84
ERROR - 2016-10-23 09:14:03 --> {"multicast_id":8152061102339736764,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185243763115%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:03 --> {"multicast_id":6648343776540176921,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185243859708%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:03 --> {"multicast_id":5872882051740271247,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185243937853%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":8552007733027977200,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":8116362918528035306,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185244110023%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":7906374496756677489,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185244212167%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":5916298605521468083,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185244307195%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":7662365152091967744,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185244411043%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":6188885110142601941,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185244508521%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:14:04 --> {"multicast_id":6357061793877826916,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185244579914%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:02 --> {"multicast_id":8319178486939560054,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185302749405%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:02 --> {"multicast_id":5735376852130934494,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185302877675%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":7921781656080692373,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185303028569%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":8860808741763005111,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185303142212%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":7460986708329363345,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185303260963%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":8229330969210687223,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185303393311%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":9162450919095617409,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185303569508%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":5613073984835830882,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:15:03 --> {"multicast_id":5597364886066774266,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bGfbjIQGd9akXW019scxeZEXDEJKKksLU__1hTH3BbZMMNBjdPQBY07ej2LaIHtP5RjzqS6Wadpt94k6GQK6i0LL6z0HiYpUaMhBdNVYb7bscT_Tfs","message_id":"0:1477185303869029%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:15:04 --> {"multicast_id":8241531265583174598,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185303990128%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:16:02 --> {"multicast_id":6370210986327418262,"success":0,"failure":1,"canonical_ids":0,"results":[{"error":"NotRegistered"}]}
ERROR - 2016-10-23 09:16:02 --> {"multicast_id":6666932735215436480,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185362517532%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:16:02 --> {"multicast_id":6404952441327751772,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185362644355%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:16:02 --> {"multicast_id":7308723234398495809,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1477185362728215%2be98557f9fd7ecd"}]}
ERROR - 2016-10-23 09:33:46 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-23 09:37:02 --> register, code:9751
ERROR - 2016-10-23 09:37:02 --> register_succes:94
ERROR - 2016-10-23 09:37:02 --> an error has occured: OK: 59291_189_188<br>
ERROR - 2016-10-23 09:37:41 --> register, code:3753
ERROR - 2016-10-23 09:43:24 --> APA91bFPQbu49tNm8UxCDk70yq2MWQ3w0A981DGGyhuuQG8quis02QO7AwkTYqCxPVAm0CUUp_0CPwusDGAV0JSkVlelzbs7K43kLC8kOEKx3-bN-qSWmkY-94-2
ERROR - 2016-10-23 09:43:40 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-23' AND `event`.paid_ads_end_date >= '2016-10-23' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-23 09:43:47 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-23' AND `event`.paid_ads_end_date >= '2016-10-23' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-23 09:43:53 --> SELECT
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
								`event`.paid_ads_start_date <= '2016-10-23' AND `event`.paid_ads_end_date >= '2016-10-23' ORDER BY `event`.ev_created DESC
ERROR - 2016-10-23 09:44:51 --> APA91bFPQbu49tNm8UxCDk70yq2MWQ3w0A981DGGyhuuQG8quis02QO7AwkTYqCxPVAm0CUUp_0CPwusDGAV0JSkVlelzbs7K43kLC8kOEKx3-bN-qSWmkY-94-2
ERROR - 2016-10-23 09:45:41 --> APA91bFPQbu49tNm8UxCDk70yq2MWQ3w0A981DGGyhuuQG8quis02QO7AwkTYqCxPVAm0CUUp_0CPwusDGAV0JSkVlelzbs7K43kLC8kOEKx3-bN-qSWmkY-94-2
ERROR - 2016-10-23 09:48:55 --> APA91bGayts-5QtccQltpEJ4mPFUrkF3VEpjcWcD1duXPDeq5ZvZNcg_MTSlgO5sHVhI8hCv90ef_l-0eLN7zhl9gyOTySQ26C3kz_eGJgUgohrisgpfFSw-70-2
ERROR - 2016-10-23 10:15:13 --> 69b74d45468de773a3fa8b3bf783aa687902653b3bfa10d94df289216cb75cae-86-1
ERROR - 2016-10-23 10:52:54 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-23 12:34:07 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 12:44:10 --> 404 Page Not Found: Advertiser/index
ERROR - 2016-10-23 12:48:43 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 13:32:05 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-23 13:34:38 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-23 13:47:42 --> e0e155dfbba0d58960ba19d0a6b0696c01aeb04947886c8dea40975535e50625-80-1
ERROR - 2016-10-23 14:43:19 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 14:43:40 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 14:43:56 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 14:52:04 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 15:02:16 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 15:03:14 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 15:03:45 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-23 16:21:46 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-23 16:55:10 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
ERROR - 2016-10-23 17:33:20 --> loginss:Bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:33:20 --> login failed
ERROR - 2016-10-23 17:33:35 --> loginss:Bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:33:35 --> login failed
ERROR - 2016-10-23 17:34:54 --> loginss:Bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:34:54 --> login failed
ERROR - 2016-10-23 17:36:49 --> loginss:Bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:36:49 --> login failed
ERROR - 2016-10-23 17:37:06 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:37:06 --> login failed
ERROR - 2016-10-23 17:39:15 --> register, code:5110
ERROR - 2016-10-23 17:39:15 --> register_succes:95
ERROR - 2016-10-23 17:39:16 --> an error has occured: OK: 59291_190_189<br>
ERROR - 2016-10-23 17:45:11 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:45:11 --> login failed
ERROR - 2016-10-23 17:45:14 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:45:14 --> login failed
ERROR - 2016-10-23 17:45:53 --> register, code:7487
ERROR - 2016-10-23 17:46:11 --> register, code:2828
ERROR - 2016-10-23 17:46:34 --> register, code:1071
ERROR - 2016-10-23 17:47:25 --> register, code:1878
ERROR - 2016-10-23 17:47:30 --> register, code:6111
ERROR - 2016-10-23 17:47:32 --> register, code:6352
ERROR - 2016-10-23 17:47:35 --> register, code:9741
ERROR - 2016-10-23 17:47:37 --> register, code:6558
ERROR - 2016-10-23 17:47:56 --> register, code:6424
ERROR - 2016-10-23 17:48:09 --> register, code:1259
ERROR - 2016-10-23 17:48:11 --> register, code:8106
ERROR - 2016-10-23 17:48:13 --> register, code:2746
ERROR - 2016-10-23 17:48:27 --> register, code:8782
ERROR - 2016-10-23 17:48:46 --> register, code:6614
ERROR - 2016-10-23 17:48:53 --> register, code:2088
ERROR - 2016-10-23 17:48:59 --> register, code:3052
ERROR - 2016-10-23 17:49:24 --> register, code:4486
ERROR - 2016-10-23 17:49:27 --> register, code:5175
ERROR - 2016-10-23 17:49:32 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:32 --> login failed
ERROR - 2016-10-23 17:49:34 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:34 --> login failed
ERROR - 2016-10-23 17:49:36 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:36 --> login failed
ERROR - 2016-10-23 17:49:39 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:39 --> login failed
ERROR - 2016-10-23 17:49:40 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:40 --> login failed
ERROR - 2016-10-23 17:49:52 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:52 --> login failed
ERROR - 2016-10-23 17:49:54 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:54 --> login failed
ERROR - 2016-10-23 17:49:56 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:56 --> login failed
ERROR - 2016-10-23 17:49:58 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:49:58 --> login failed
ERROR - 2016-10-23 17:50:00 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:50:00 --> login failed
ERROR - 2016-10-23 17:50:02 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:50:02 --> login failed
ERROR - 2016-10-23 17:50:04 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:50:04 --> login failed
ERROR - 2016-10-23 17:50:33 --> register, code:5790
ERROR - 2016-10-23 17:50:36 --> register, code:6930
ERROR - 2016-10-23 17:50:38 --> register, code:8498
ERROR - 2016-10-23 17:50:39 --> register, code:4240
ERROR - 2016-10-23 17:50:41 --> register, code:7515
ERROR - 2016-10-23 17:50:42 --> register, code:8188
ERROR - 2016-10-23 17:56:03 --> loginss:bhimkumarsingh779@gmail.com,035240692
ERROR - 2016-10-23 17:56:03 --> login failed
ERROR - 2016-10-23 17:56:56 --> register, code:5469
ERROR - 2016-10-23 17:56:59 --> register, code:8918
ERROR - 2016-10-23 17:57:01 --> register, code:9960
ERROR - 2016-10-23 17:57:12 --> register, code:7825
ERROR - 2016-10-23 17:57:12 --> register_succes:96
ERROR - 2016-10-23 17:57:13 --> an error has occured: OK: 59291_191_190<br>
ERROR - 2016-10-23 17:57:36 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 17:57:42 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 17:57:44 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 17:57:48 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 17:57:50 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 17:58:07 --> verification: user_id:96,code:854684
ERROR - 2016-10-23 17:58:14 --> verification: user_id:96,code:854684
ERROR - 2016-10-23 17:58:16 --> verification: user_id:96,code:854684
ERROR - 2016-10-23 17:58:18 --> verification: user_id:96,code:854684
ERROR - 2016-10-23 17:58:19 --> verification: user_id:96,code:854684
ERROR - 2016-10-23 17:58:22 --> verification: user_id:96,code:854684
ERROR - 2016-10-23 17:58:38 --> verification: user_id:96,code:055923
ERROR - 2016-10-23 17:59:47 --> verification: user_id:96,code:055923
ERROR - 2016-10-23 18:00:05 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:00:12 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:00:27 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:00:30 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:00:35 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:00 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:04 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:09 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:13 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:17 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:19 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:22 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:24 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:27 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:29 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:34 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:37 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:42 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:45 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:47 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:49 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:50 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:52 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:54 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:01:57 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:00 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:02 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:04 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:06 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:07 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:07 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:09 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:11 --> verification: user_id:96,code:49584
ERROR - 2016-10-23 18:02:40 --> loginss:bhimkumarsingh779@gmail.com,7982449839
ERROR - 2016-10-23 18:02:40 --> login failed
ERROR - 2016-10-23 18:02:43 --> loginss:bhimkumarsingh779@gmail.com,7982449839
ERROR - 2016-10-23 18:02:43 --> login failed
ERROR - 2016-10-23 18:02:57 --> APA91bEcfZBtovFvNaXt5MqEEMlskCAtcY1qjoQe9CK2Vfs5GWC8DO-LsPJY-fn6E2jU0AkdRsqV2luwhG6YTP-HL88azf4vLiqTpDXaZWxO-g2Pv47lNYE-96-2
ERROR - 2016-10-23 18:28:27 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-23 20:04:38 --> APA91bHPGDgYtTXO_uh-H_2HhpHyL3KFiuDlAs7vgCXmPYL_kF3lV2LvY8Cqp-MaxCsxWMhr7ghwRdTcXqW3zJNDX5LOudEZe1VAxOgtjqWK3BRGYD_JOok-75-2
ERROR - 2016-10-23 20:13:37 --> SELECT
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
ERROR - 2016-10-23 21:11:24 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-23 21:14:16 --> SELECT `user_id` FROM `token` WHERE `token` = '6357ee4b2f6d29b5c797aeca4b8e2a7fe4eac1ace7d15808f1a97317898423fb'
ERROR - 2016-10-23 21:14:18 --> SELECT
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
ERROR - 2016-10-23 21:17:42 --> 404 Page Not Found: api//index
ERROR - 2016-10-23 21:21:35 --> loginss:15666666666,80996240
ERROR - 2016-10-23 21:21:35 --> login failed
ERROR - 2016-10-23 21:22:05 --> register, code:8011
ERROR - 2016-10-23 21:26:55 --> APA91bGbTmiy6ZBsM72YXzLqmw4l9qio24G9t-6To4xk8uP3Mhi7CTxxrb3aXcc0TAtq6c0P1PLSmnIhb6HcqNkUMqLzrdZ9Pk9yeF891fsCizRMRRd_fAk-34-2
