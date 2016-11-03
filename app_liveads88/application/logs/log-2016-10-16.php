<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-16 00:50:36 --> register, code:3573
ERROR - 2016-10-16 00:50:36 --> register_succes:62
ERROR - 2016-10-16 00:50:37 --> an error has occured: OK: 59291_157_156<br>
ERROR - 2016-10-16 00:51:05 --> verification: user_id:62,code:3573
ERROR - 2016-10-16 00:52:08 --> loginss:kvnyu96@gmail.com,yisheng0806
ERROR - 2016-10-16 00:52:08 --> login
ERROR - 2016-10-16 01:22:48 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-16 06:16:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2016-10-16 11:02:43 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:02:43 --> login
ERROR - 2016-10-16 11:08:19 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
ERROR - 2016-10-16 11:09:55 --> loginss:chernyue89@Gmail.com,123123
ERROR - 2016-10-16 11:09:55 --> login
ERROR - 2016-10-16 11:15:12 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:15:12 --> login failed
ERROR - 2016-10-16 11:15:17 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:15:17 --> login failed
ERROR - 2016-10-16 11:15:24 --> loginss:chernyue89@gmail.com,123
ERROR - 2016-10-16 11:15:24 --> login failed
ERROR - 2016-10-16 11:15:26 --> loginss:chernyue89@gmail.com,123
ERROR - 2016-10-16 11:15:26 --> login failed
ERROR - 2016-10-16 11:15:30 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:15:30 --> login failed
ERROR - 2016-10-16 11:15:52 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:15:52 --> login failed
ERROR - 2016-10-16 11:16:21 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:16:21 --> login failed
ERROR - 2016-10-16 11:16:54 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:16:54 --> login failed
ERROR - 2016-10-16 11:17:20 --> loginss:chernyue89@gmail.com,1
ERROR - 2016-10-16 11:17:20 --> login failed
ERROR - 2016-10-16 11:17:47 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:17:47 --> login
ERROR - 2016-10-16 11:17:56 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:17:56 --> login
ERROR - 2016-10-16 11:18:10 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 11:18:10 --> login
ERROR - 2016-10-16 11:52:55 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
ERROR - 2016-10-16 12:20:32 --> SELECT `user_id` FROM `token` WHERE `token` = 'b8e7c6b9a75d026f3a533ad7319360d7597622481f9f3da3e8eae77280eb9b26'
ERROR - 2016-10-16 12:20:36 --> SELECT `user_id` FROM `token` WHERE `token` = 'b8e7c6b9a75d026f3a533ad7319360d7597622481f9f3da3e8eae77280eb9b26'
ERROR - 2016-10-16 12:20:38 --> SELECT `user_id` FROM `token` WHERE `token` = 'b8e7c6b9a75d026f3a533ad7319360d7597622481f9f3da3e8eae77280eb9b26'
ERROR - 2016-10-16 12:20:41 --> SELECT `user_id` FROM `token` WHERE `token` = 'b8e7c6b9a75d026f3a533ad7319360d7597622481f9f3da3e8eae77280eb9b26'
ERROR - 2016-10-16 12:23:18 --> SELECT
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
ERROR - 2016-10-16 12:25:28 --> SELECT `user_id` FROM `token` WHERE `token` = 'b8e7c6b9a75d026f3a533ad7319360d7597622481f9f3da3e8eae77280eb9b26'
ERROR - 2016-10-16 12:26:51 --> SELECT `user_id` FROM `token` WHERE `token` = '48edf200b378f7d7247333d71a2e63cf8edda7521c084a6d35257ce0ed4021fb'
ERROR - 2016-10-16 12:54:02 --> register, code:9551
ERROR - 2016-10-16 12:54:02 --> register_succes:63
ERROR - 2016-10-16 12:54:03 --> an error has occured: OK: 59291_158_157<br>
ERROR - 2016-10-16 12:54:16 --> verification: user_id:63,code:9551
ERROR - 2016-10-16 12:54:29 --> loginss:ahchinhock@gmail.com,chin588588
ERROR - 2016-10-16 12:54:29 --> login
ERROR - 2016-10-16 12:55:54 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 12:55:54 --> login
ERROR - 2016-10-16 12:56:13 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 12:56:13 --> login
ERROR - 2016-10-16 12:57:59 --> loginss:chernyue89@Gmail.com,123133
ERROR - 2016-10-16 12:57:59 --> login failed
ERROR - 2016-10-16 12:58:06 --> loginss:chernyue89@Gmail.com,123123
ERROR - 2016-10-16 12:58:06 --> login failed
ERROR - 2016-10-16 12:58:12 --> loginss:chernyue89@Gmail.com,123123
ERROR - 2016-10-16 12:58:12 --> login failed
ERROR - 2016-10-16 12:58:18 --> loginss:chernyue89@Gmail.com,123123
ERROR - 2016-10-16 12:58:18 --> login failed
ERROR - 2016-10-16 12:58:29 --> loginss:chernyue89@Gmail.com,123123
ERROR - 2016-10-16 12:58:29 --> login failed
ERROR - 2016-10-16 12:58:35 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 12:58:35 --> login failed
ERROR - 2016-10-16 12:59:04 --> loginss:chernyue89@Gmail.com,123123
ERROR - 2016-10-16 12:59:04 --> login failed
ERROR - 2016-10-16 12:59:12 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 12:59:12 --> login failed
ERROR - 2016-10-16 13:00:14 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 13:00:14 --> login
ERROR - 2016-10-16 13:01:19 --> loginss:ktp1101@yahoo.com,7625999
ERROR - 2016-10-16 13:01:19 --> login
ERROR - 2016-10-16 13:01:41 --> loginss:patrick@kenzocreatives.com,7625999
ERROR - 2016-10-16 13:01:41 --> login failed
ERROR - 2016-10-16 13:02:56 --> loginss:patrick@liveads88.com,7625999
ERROR - 2016-10-16 13:02:56 --> login
ERROR - 2016-10-16 13:03:18 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-16 13:03:18 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-16 13:03:18 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-16 13:03:18 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-16 13:03:18 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-16 13:03:18 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-16 13:03:18 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-16 13:03:18 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-16 13:03:18 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-16 13:03:18 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-16 13:03:18 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-16 13:03:18 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-16 13:03:18 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-16 13:03:18 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-16 13:03:18 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-16 13:03:18 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-16 13:03:18 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-16 13:03:18 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-16 13:03:18 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-16 13:03:18 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-16 13:03:18 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-16 13:03:18 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-16 13:03:18 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-16 13:03:18 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-16 13:03:18 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-16 13:03:18 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-16 13:03:18 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-16 13:03:18 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-16 13:03:19 --> {"multicast_id":5874541010306412167,"success":44,"failure":3,"canonical_ids":21,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199882782%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881956%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476594199882781%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476594199882333%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476594199882933%2be98557f9fd7ecd"},{"message_id":"0:1476594199881962%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476594199880738%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476594199881856%2be98557f9fd7ecd"},{"message_id":"0:1476594199883880%2be98557f9fd7ecd"},{"message_id":"0:1476594199880701%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1476594199883878%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199882783%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881968%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1476594199887205%2be98557f9fd7ecd"},{"message_id":"0:1476594199884516%2be98557f9fd7ecd"},{"message_id":"0:1476594199882937%2be98557f9fd7ecd"},{"message_id":"0:1476594199881954%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1476594199883876%2be98557f9fd7ecd"},{"message_id":"0:1476594199882928%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199882935%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881964%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476594199881858%2be98557f9fd7ecd"},{"message_id":"0:1476594199882931%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476594199880702%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881901%2be98557f9fd7ecd"},{"message_id":"0:1476594199896222%2be98557f9fd7ecd"},{"registration_id":"APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw","message_id":"0:1476594199882332%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199882927%2be98557f9fd7ecd"},{"message_id":"0:1476594199881950%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881951%2be98557f9fd7ecd"},{"message_id":"0:1476594199881966%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881958%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476594199881959%2be98557f9fd7ecd"},{"message_id":"0:1476594199882789%2be98557f9fd7ecd"},{"message_id":"0:1476594199883882%2be98557f9fd7ecd"},{"message_id":"0:1476594199883933%2be98557f9fd7ecd"},{"message_id":"0:1476594199882787%2be98557f9fd7ecd"},{"message_id":"0:1476594199884954%2be98557f9fd7ecd"},{"message_id":"0:1476594199884001%2be98557f9fd7ecd"},{"message_id":"0:1476594199884518%2be98557f9fd7ecd"},{"message_id":"0:1476594199883935%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1476594199883931%2be98557f9fd7ecd"},{"message_id":"0:1476594199882925%2be98557f9fd7ecd"},{"message_id":"0:1476594199883883%2be98557f9fd7ecd"}]}
ERROR - 2016-10-16 13:03:34 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 13:03:34 --> login
ERROR - 2016-10-16 13:03:54 --> Severity: Notice --> Undefined offset: 1 /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 51
ERROR - 2016-10-16 13:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asc  LIMIT 0 ,10' at line 5 - Invalid query: SELECT
				*
				 FROM
				`push_notifications` WHERE 1=1
				 ORDER BY    asc  LIMIT 0 ,10   
ERROR - 2016-10-16 13:03:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-16 13:03:56 --> Severity: Notice --> Undefined offset: 1 /home/liveads88/public_html/app_liveads88/application/controllers/Pushnotification.php 51
ERROR - 2016-10-16 13:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc  LIMIT 0 ,10' at line 5 - Invalid query: SELECT
				*
				 FROM
				`push_notifications` WHERE 1=1
				 ORDER BY    desc  LIMIT 0 ,10   
ERROR - 2016-10-16 13:03:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-10-16 13:26:07 --> SELECT `user_id` FROM `token` WHERE `token` = '9eda7bfc0bd20ae7fd90eddabff69649ccde572d33ee3a3ce6e20f0be9e9a12e'
ERROR - 2016-10-16 14:03:27 --> loginss:chernyue89@gmail.com,123123
ERROR - 2016-10-16 14:03:27 --> login
ERROR - 2016-10-16 14:11:49 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 20  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-16 14:12:25 --> {"multicast_id":8070220770057517876,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476598345649160%2be98557f9fd7ecd"}]}
ERROR - 2016-10-16 14:12:52 --> {"multicast_id":5571991100837662176,"success":1,"failure":0,"canonical_ids":1,"results":[{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476598372709440%2be98557f9fd7ecd"}]}
ERROR - 2016-10-16 14:13:25 --> register, code:4699
ERROR - 2016-10-16 14:13:25 --> register_succes:64
ERROR - 2016-10-16 14:13:25 --> an error has occured: OK: 59291_159_158<br>
ERROR - 2016-10-16 14:13:43 --> verification: user_id:64,code:4699
ERROR - 2016-10-16 14:14:22 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-16 14:14:22 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-16 14:14:22 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-16 14:14:22 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-16 14:14:22 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-16 14:14:22 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-16 14:14:22 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-16 14:14:22 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-16 14:14:22 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-16 14:14:22 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-16 14:14:22 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-16 14:14:22 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-16 14:14:22 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-16 14:14:22 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-16 14:14:22 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-16 14:14:22 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-16 14:14:22 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-16 14:14:22 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-16 14:14:22 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-16 14:14:22 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-16 14:14:22 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-16 14:14:22 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-16 14:14:22 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-16 14:14:22 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-16 14:14:22 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-16 14:14:22 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-16 14:14:22 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-16 14:14:22 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-16 14:14:23 --> {"multicast_id":8418033954774487100,"success":44,"failure":3,"canonical_ids":21,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463689883%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463689887%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476598463690613%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476598463689259%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476598463689585%2be98557f9fd7ecd"},{"message_id":"0:1476598463690910%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476598463688652%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476598463688654%2be98557f9fd7ecd"},{"message_id":"0:1476598463690939%2be98557f9fd7ecd"},{"message_id":"0:1476598463691969%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1476598463689888%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690907%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463689881%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1476598463690905%2be98557f9fd7ecd"},{"message_id":"0:1476598463691985%2be98557f9fd7ecd"},{"message_id":"0:1476598463691168%2be98557f9fd7ecd"},{"message_id":"0:1476598463691978%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1476598463690901%2be98557f9fd7ecd"},{"message_id":"0:1476598463691977%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690909%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690616%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476598463689884%2be98557f9fd7ecd"},{"message_id":"0:1476598463689889%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476598463689986%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690932%2be98557f9fd7ecd"},{"message_id":"0:1476598463690750%2be98557f9fd7ecd"},{"registration_id":"APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw","message_id":"0:1476598463691975%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690619%2be98557f9fd7ecd"},{"message_id":"0:1476598463690903%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690912%2be98557f9fd7ecd"},{"message_id":"0:1476598463691983%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690615%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476598463690915%2be98557f9fd7ecd"},{"message_id":"0:1476598463690934%2be98557f9fd7ecd"},{"message_id":"0:1476598463691973%2be98557f9fd7ecd"},{"message_id":"0:1476598463692256%2be98557f9fd7ecd"},{"message_id":"0:1476598463690937%2be98557f9fd7ecd"},{"message_id":"0:1476598463691981%2be98557f9fd7ecd"},{"message_id":"0:1476598463692990%2be98557f9fd7ecd"},{"message_id":"0:1476598463693922%2be98557f9fd7ecd"},{"message_id":"0:1476598463692994%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1476598463692992%2be98557f9fd7ecd"},{"message_id":"0:1476598463690941%2be98557f9fd7ecd"},{"message_id":"0:1476598463691822%2be98557f9fd7ecd"}]}
ERROR - 2016-10-16 14:14:26 --> loginss:thomas02225647@gmail.com,lim7775647
ERROR - 2016-10-16 14:14:26 --> login failed
ERROR - 2016-10-16 14:14:29 --> loginss:thomas02225647@gmail.com,lim7775647
ERROR - 2016-10-16 14:14:29 --> login failed
ERROR - 2016-10-16 14:14:50 --> loginss:thomas5647222@gmail.com,lim7775647
ERROR - 2016-10-16 14:14:50 --> login
ERROR - 2016-10-16 14:34:11 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-16 14:34:11 --> login
ERROR - 2016-10-16 15:19:40 --> 01136a2e3619190e21c6f0f0051f12778de16817c0fcd05a095e0d06f770eaf7
ERROR - 2016-10-16 15:20:41 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-16 15:20:41 --> login
ERROR - 2016-10-16 15:21:27 --> 01136a2e3619190e21c6f0f0051f12778de16817c0fcd05a095e0d06f770eaf7
ERROR - 2016-10-16 15:21:46 --> 01136a2e3619190e21c6f0f0051f12778de16817c0fcd05a095e0d06f770eaf7
ERROR - 2016-10-16 15:22:15 --> 01136a2e3619190e21c6f0f0051f12778de16817c0fcd05a095e0d06f770eaf7
ERROR - 2016-10-16 15:22:53 --> 01136a2e3619190e21c6f0f0051f12778de16817c0fcd05a095e0d06f770eaf7
ERROR - 2016-10-16 15:28:21 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-16 15:28:21 --> login
ERROR - 2016-10-16 15:37:43 --> loginss:demo@liveads88.com,123456
ERROR - 2016-10-16 15:37:43 --> login
ERROR - 2016-10-16 15:37:44 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9-32-1
ERROR - 2016-10-16 15:38:08 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-16 15:38:57 --> 7ed53d432f43589f1faa8fa00cf8816eb72beb6f224769d3cebc16135e41c662
ERROR - 2016-10-16 15:38:57 --> 8c896440734c7faaeb36e19f1d94785f6f1d1f06ac2c812dda101774c8951093
ERROR - 2016-10-16 15:38:57 --> 7166ac76e21396ae81846955a953acae0dcbe99fbe00145c8cf0250397e979c7
ERROR - 2016-10-16 15:38:57 --> 49a813b19349f8fe3830aa44e605c520d0bdfba4fd62585e8d68779987b5665b
ERROR - 2016-10-16 15:38:57 --> 7fe61fb9b1a46869e0dcd476bdf5cc53d5f22d698d18d919e97776a4db1598e8
ERROR - 2016-10-16 15:38:57 --> 8a7686ab47cb80c7c7cadae7fbaf45fe59c4502b7dfd6184bde2749498fb8c61
ERROR - 2016-10-16 15:38:57 --> 2e6206e7249b21f2aa5a3dc47a787d7db30c611765ad0796c81b5ccb572a41ca
ERROR - 2016-10-16 15:38:57 --> 9bbafc9810a8bd45aee3e3d1370f9ecb8203983cd1a784b344175544a0c466cd
ERROR - 2016-10-16 15:38:57 --> 5120c82caca344716f173564f62bc1bc9e8b361f8aa1bd949615c9016c5f7ee0
ERROR - 2016-10-16 15:38:57 --> 541372fbf58ac4223ae49cd61da1adad5cab59e811d4a1e5a48cf5a3f60a30fe
ERROR - 2016-10-16 15:38:57 --> 06e1f6a1304ca62b64ebf872c2e3b1c9e6b19bb978d81a44603ddbdb1aa73de9
ERROR - 2016-10-16 15:38:57 --> 51dc5c3d646b40fb808caffe84e598717d76c7a77a930cf5abdb172d38a04fce
ERROR - 2016-10-16 15:38:57 --> 6ae53700ff3ffbcdbd31a06f14b6f81c322dfbac799516efa36c67364bbce851
ERROR - 2016-10-16 15:38:57 --> de39e6372990fc8e19b51e188f428377d938299d014777fd565c3c3060c1ca73
ERROR - 2016-10-16 15:38:57 --> 7e9707c4f8188bf014c047754d3fe4e885072259169bf679952f600e92981b74
ERROR - 2016-10-16 15:38:57 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1
ERROR - 2016-10-16 15:38:57 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b
ERROR - 2016-10-16 15:38:57 --> 79b7d154e92a6451fe24dd5f872c82db1283f788170350a65ca52e6a7e366e91
ERROR - 2016-10-16 15:38:57 --> 6780ed92acd7e7afc6842de73b1298061f44ce13347019a3b398d66575c99d3a
ERROR - 2016-10-16 15:38:57 --> 3a7282a2810883f2ebd9f54867f177b4f60e35ac340dbb487f707d5f96ed09a4
ERROR - 2016-10-16 15:38:57 --> f288c7eaac9d4a5954fb83c9a2321af8fe2aa7d08e8efc048bd4517ebe5d609c
ERROR - 2016-10-16 15:38:57 --> f07876a44f9ea919cb4fa5038e71ff4c980008861cbc5e0621d947fa21c24e08
ERROR - 2016-10-16 15:38:57 --> ac2cffcc970c09166c513d23dd1b41cbd6a56bfa1341fb005400cada2fb38d7e
ERROR - 2016-10-16 15:38:57 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9
ERROR - 2016-10-16 15:38:57 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-16 15:38:57 --> 5cac06b2bc29ecaf2bdf393ab68f885feb26963487847eb4154d9d8d271f1127
ERROR - 2016-10-16 15:38:57 --> 4f202c7df46b10e6d3050cd76263e80385374e314407885f4919ade36416a42c
ERROR - 2016-10-16 15:38:57 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603
ERROR - 2016-10-16 15:38:58 --> {"multicast_id":5115597884725863922,"success":45,"failure":3,"canonical_ids":21,"results":[{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313652%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538314003%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476603538312999%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476603538312968%2be98557f9fd7ecd"},{"registration_id":"APA91bG8it-Q0AZoRtpEa2INWQqcLhWKmxmNMR1Vm6-lGYYYe7fyEfqr1i7cJKZoaBKX17ujkCzi_0hnHbcWJ0VSLFQy8qu9nbVcJzMlIxMZGY5_ltyeglo","message_id":"0:1476603538313001%2be98557f9fd7ecd"},{"message_id":"0:1476603538312770%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476603538312643%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476603538311803%2be98557f9fd7ecd"},{"message_id":"0:1476603538311770%2be98557f9fd7ecd"},{"message_id":"0:1476603538310791%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"registration_id":"APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg","message_id":"0:1476603538313011%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313802%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313991%2be98557f9fd7ecd"},{"registration_id":"APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY","message_id":"0:1476603538314897%2be98557f9fd7ecd"},{"message_id":"0:1476603538313992%2be98557f9fd7ecd"},{"message_id":"0:1476603538313006%2be98557f9fd7ecd"},{"message_id":"0:1476603538313005%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1476603538313808%2be98557f9fd7ecd"},{"message_id":"0:1476603538311428%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538314006%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313650%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476603538311904%2be98557f9fd7ecd"},{"message_id":"0:1476603538313009%2be98557f9fd7ecd"},{"registration_id":"APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E","message_id":"0:1476603538311768%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313800%2be98557f9fd7ecd"},{"message_id":"0:1476603538314893%2be98557f9fd7ecd"},{"registration_id":"APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw","message_id":"0:1476603538311760%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313804%2be98557f9fd7ecd"},{"message_id":"0:1476603538311772%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538314009%2be98557f9fd7ecd"},{"message_id":"0:1476603538311698%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313810%2be98557f9fd7ecd"},{"registration_id":"APA91bFHbwdlNMxFIV5GQce6RLLNrkWzMdN4ow_WUHsYJd92W1iMjKCMSApY3Mxv_lpales5XXgoW76CI7BanknyHVBu1XtYfPhcs9pIVw1dHh_TaaQtl9o","message_id":"0:1476603538313805%2be98557f9fd7ecd"},{"message_id":"0:1476603538313844%2be98557f9fd7ecd"},{"message_id":"0:1476603538314005%2be98557f9fd7ecd"},{"message_id":"0:1476603538313798%2be98557f9fd7ecd"},{"message_id":"0:1476603538313999%2be98557f9fd7ecd"},{"message_id":"0:1476603538313996%2be98557f9fd7ecd"},{"message_id":"0:1476603538314895%2be98557f9fd7ecd"},{"message_id":"0:1476603538314899%2be98557f9fd7ecd"},{"message_id":"0:1476603538313994%2be98557f9fd7ecd"},{"error":"NotRegistered"},{"message_id":"0:1476603538314000%2be98557f9fd7ecd"},{"message_id":"0:1476603538313882%2be98557f9fd7ecd"},{"message_id":"0:1476603538313013%2be98557f9fd7ecd"},{"message_id":"0:1476603538313003%2be98557f9fd7ecd"}]}
ERROR - 2016-10-16 15:40:13 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9-32-1
ERROR - 2016-10-16 15:45:18 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 15:48:31 --> register, code:8002
ERROR - 2016-10-16 15:48:31 --> register_succes:65
ERROR - 2016-10-16 15:48:32 --> an error has occured: OK: 59291_160_159<br>
ERROR - 2016-10-16 15:48:43 --> verification: user_id:65,code:8002
ERROR - 2016-10-16 15:49:12 --> loginss:yukitew811@gmail.com,yuki428
ERROR - 2016-10-16 15:49:12 --> login failed
ERROR - 2016-10-16 15:49:24 --> loginss:yukitew811@gmail.com,yuki4288
ERROR - 2016-10-16 15:49:24 --> login failed
ERROR - 2016-10-16 15:49:43 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 15:50:42 --> loginss:yukitew811@gmail.com,a1c45e3ba5 
ERROR - 2016-10-16 15:50:42 --> login failed
ERROR - 2016-10-16 15:50:48 --> loginss:yukitew811@gmail.com,a1c45e3ba5 
ERROR - 2016-10-16 15:50:48 --> login failed
ERROR - 2016-10-16 15:51:04 --> loginss:yukitew811@gmail.com,a1c45e3ba5
ERROR - 2016-10-16 15:51:04 --> login
ERROR - 2016-10-16 15:51:04 --> b04cc2f19aa099dc9364e21ac5b5dcb02cf0520268ea22f6d334945c63dc70f4-65-1
ERROR - 2016-10-16 15:51:59 --> APA91bHMi0Ddsv1bf4qhksP9IoVX6QmSrjccM0tYbrZcPcZOmUP893YcYEu6PH8d6E9yfbRv2SxMjD2yAollY-o7OGVBFI_-qd8VnrAGimHH9dmH4PkTo9E-51-2
ERROR - 2016-10-16 16:06:57 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 16:07:42 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 16:08:33 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 16:27:19 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 16:29:42 --> 680a94b3a4bcb0c864603d90215177e07bcf99d9033ee61f006393f9feaec603-62-1
ERROR - 2016-10-16 16:30:10 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 16:33:38 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 16:37:37 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 16:44:16 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 16:57:12 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-16 16:57:37 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-16 16:57:48 --> 11167f8f62a210c49ffd2ef39d37ef181512698c46cbd565f75bd14e68e1d3b9-56-1
ERROR - 2016-10-16 17:00:52 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 17:10:06 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 17:25:46 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 17:31:27 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 17:33:46 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 17:56:38 --> SELECT
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
								 product.pro_expired_date >= DATE(NOW()) AND product.pro_is_promotion = 1 AND product.customer_id = 20  ORDER BY  sort_pro_id DESC, product.pro_created DESC 
ERROR - 2016-10-16 17:57:28 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 18:00:21 --> SELECT
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
ERROR - 2016-10-16 18:07:31 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 18:09:08 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-16 18:10:18 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-16 18:10:41 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-16 18:13:54 --> APA91bGw9jN91oqDE__kd_WRFlRDd5ArwBAnBHsWSpp1kLWuRsxqPyO9xBEgdtnVGCJaaAR3CyeK8bSsPP-LG_a6qReDpzQyAFmREcbVeBRhrbGcCK5ncGg-18-2
ERROR - 2016-10-16 19:25:05 --> ce9034fb572cdb034e303afbc1368303f53bad67eb88ee4a74b4e106b062098b-38-1
ERROR - 2016-10-16 19:46:35 --> f8221901b5004dd546f2a54bf90ffa16d1e22d4c6c81009efdf9bb7cf796e9f1-36-1
ERROR - 2016-10-16 19:51:38 --> APA91bHGth5TWAWaBlaKZG-208N_czctlCAoSgCobFitisgzFIOVjlWE7xQGtPaudu_uKDaFcwHrSad54fdWYU4N0AEeCW2voOTJ1bCblmdc6h9aUaKjAnU-40-2
ERROR - 2016-10-16 19:55:42 --> APA91bHGth5TWAWaBlaKZG-208N_czctlCAoSgCobFitisgzFIOVjlWE7xQGtPaudu_uKDaFcwHrSad54fdWYU4N0AEeCW2voOTJ1bCblmdc6h9aUaKjAnU-40-2
ERROR - 2016-10-16 19:55:54 --> SELECT `user_id` FROM `token` WHERE `token` = '0907546d8704da8a0826a30b2037f1873e3fd97579bd3b5c60e95efd7e77ef12'
ERROR - 2016-10-16 19:56:01 --> SELECT `user_id` FROM `token` WHERE `token` = '0907546d8704da8a0826a30b2037f1873e3fd97579bd3b5c60e95efd7e77ef12'
ERROR - 2016-10-16 20:22:12 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 21:06:49 --> APA91bFrrb09zTwr54E1Unohwt7mwfarBstqUp9MOCNaE_K8fjO28nspXBxkmibhr4l2FqmsIH6kAFoNUxiJkcOl9nMbvZIyichdKAmkB07oFD2-Aacap5k-43-2
ERROR - 2016-10-16 21:24:24 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 21:48:00 --> APA91bGq1B7Za_xtguc6OjoBnpmcKcupkVhAaLRMYB0POpuCJZFFgRh9_UNrg8OvYHj4b0PMabVfIMvZw-3-KK5xzXjrxdH-3h605nMoCJHf5gAL-y8pLgw-34-2
ERROR - 2016-10-16 21:50:07 --> 7929c674aea992f08cddc3694538ced59dbe967ee4c5b9fc9a5650afef612ec9
ERROR - 2016-10-16 22:06:43 --> APA91bE2de4M0R-DhDVLqMMv-cDIHW9f9aqsTt-OAsDnGzEbWeWKPohhp1k2tnLz4h5_YL1MzcoLuxXE-z0ACS2H1jEEuUhZ0vDKNTqMoXciD_Tv9H2bfQY-19-2
ERROR - 2016-10-16 22:43:21 --> register, code:5343
ERROR - 2016-10-16 22:43:21 --> register_succes:66
ERROR - 2016-10-16 22:43:21 --> an error has occured: OK: 59291_161_160<br>
ERROR - 2016-10-16 22:43:34 --> verification: user_id:66,code:5343
ERROR - 2016-10-16 22:43:57 --> loginss:caiyiho@hotmail.my,caiyi5074
ERROR - 2016-10-16 22:43:57 --> login
ERROR - 2016-10-16 22:43:58 --> d204ad402a3ca11b50ea138e36cbcb966fdbfa24344ef11b3cf7a90dcb272221-66-1
