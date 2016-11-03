<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
/*
$config['mailtype'] = 'html';
$config['protocol'] = 'smtp';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'utf-8';
//$config['charset'] =  'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['smtp_host'] = '192.168.0.12';
$config['smtp_user'] = 'mailer@sgdatahub.com';
$config['smtp_pass'] = 'p@$$w0rd2016$';
$config['smtp_port'] = '25';
*/

$config['mailtype'] = 'html';
$config['protocol'] = 'smtp';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'utf-8';
//$config['charset'] =  'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['smtp_host'] = 'smtp.mandrillapp.com';
$config['smtp_user'] = 'Singapore Data Hub Pte Ltd';
$config['smtp_pass'] = 'vIDEuuG7tEya2ehNNHxfig';
$config['smtp_port'] = '587';