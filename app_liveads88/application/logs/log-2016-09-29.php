<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-09-29 00:33:20 --> login
ERROR - 2016-09-29 07:04:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2016-09-29 07:04:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2016-09-29 15:16:26 --> login
ERROR - 2016-09-29 15:41:26 --> login
ERROR - 2016-09-29 22:48:22 --> Severity: Notice --> Undefined property: stdClass::$cu_name /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 73
ERROR - 2016-09-29 22:48:23 --> Severity: Notice --> Undefined property: stdClass::$cu_email /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 74
ERROR - 2016-09-29 22:48:23 --> Severity: Notice --> Undefined property: stdClass::$cu_mobile /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 75
ERROR - 2016-09-29 22:48:23 --> Severity: Notice --> Undefined property: stdClass::$cu_postal /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 76
ERROR - 2016-09-29 22:48:23 --> Severity: Notice --> Undefined property: stdClass::$cu_lat /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 77
ERROR - 2016-09-29 22:48:23 --> Severity: Notice --> Undefined property: stdClass::$cu_long /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 78
ERROR - 2016-09-29 22:48:23 --> Severity: Notice --> Undefined property: stdClass::$cu_address /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 79
ERROR - 2016-09-29 22:48:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-09-29 22:48:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-09-29 22:48:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-09-29 22:49:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.jb_id as sort_job_id
				FROM
				job
				LEFT JOIN customer ON job.customer_id' at line 21 - Invalid query: SELECT
				job.jb_id,
				job.jb_name,
				job.jb_email,
				job.jb_phone,
				job.jb_description,
				job.jb_salary,
				job.jb_location,
				job.jb_like_count,
				job.jb_created,
				customer.cu_logo_name,
				customer.cu_name,
				customer.cu_mobile,
				customer.cu_email,
				customer.cu_description,
				customer.cu_website,
				customer.cu_long,
				customer.cu_lat,
				customer.cu_address,
				customer.cu_postal
				job_sub.jb_id as sort_job_id
				FROM
				job
				LEFT JOIN customer ON job.customer_id = customer.cu_id
				
				LEFT JOIN (
					SELECT job_sub.jb_id from `job` as job_sub where job_sub.paid_ads_start_date <= DATE_FORMAT(now(),'%Y-%m-%d') AND job_sub.paid_ads_end_date >= DATE_FORMAT(now(),'%Y-%m-%d')
				) as job_sub 
				ON job_sub.jb_id = job.jb_id
				
				WHERE
								`job`.jb_status = 0 AND
								`job`.jb_expired >= DATE(NOW()) ORDER BY sort_job_id DESC, job.jb_id DESC
				
ERROR - 2016-09-29 22:50:25 --> Severity: Notice --> Undefined property: stdClass::$cu_logo /home/liveads88/public_html/app_liveads88/application/controllers/api/Jobs.php 78
ERROR - 2016-09-29 22:50:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 487
ERROR - 2016-09-29 22:50:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/system/core/Common.php 568
ERROR - 2016-09-29 22:50:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/liveads88/public_html/app_liveads88/system/core/Exceptions.php:272) /home/liveads88/public_html/app_liveads88/application/libraries/REST_Controller.php 505
ERROR - 2016-09-29 23:06:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-09-29 23:36:18 --> login
ERROR - 2016-09-29 23:37:05 --> login
ERROR - 2016-09-29 23:43:19 --> SELECT `user_id` FROM `token` WHERE `token` = '9b0dae13484e1019df56b3646e9e8386ab7371a7774df39da19aca98567dc924'
ERROR - 2016-09-29 23:44:51 --> SELECT `user_id` FROM `token` WHERE `token` = '9b0dae13484e1019df56b3646e9e8386ab7371a7774df39da19aca98567dc924'
ERROR - 2016-09-29 23:45:12 --> SELECT `user_id` FROM `token` WHERE `token` = '9b0dae13484e1019df56b3646e9e8386ab7371a7774df39da19aca98567dc924'
ERROR - 2016-09-29 23:45:33 --> SELECT `user_id` FROM `token` WHERE `token` = '9b0dae13484e1019df56b3646e9e8386ab7371a7774df39da19aca98567dc924'
ERROR - 2016-09-29 23:45:49 --> SELECT `user_id` FROM `token` WHERE `token` = '9b0dae13484e1019df56b3646e9e8386ab7371a7774df39da19aca98567dc924'
ERROR - 2016-09-29 23:47:45 --> SELECT `user_id` FROM `token` WHERE `token` = '9b0dae13484e1019df56b3646e9e8386ab7371a7774df39da19aca98567dc924'
ERROR - 2016-09-29 23:55:00 --> login
