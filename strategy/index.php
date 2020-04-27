<?php
include '../autoload.php';
/**
	Strategy design pattern
*/

use Classes\User;
use Classes\Strategy\SendEmail;
use Classes\Strategy\SendSms;
use Classes\Strategy\SendFax;

$user = new User();
$msg =  $user->getMsg();

switch ($msg) {
	case 'email':
		$notify = new SendEmail();
		break;
	case 'sms':
		$notify = new SendSms();
		break;
	case 'fax':
		$notify = new SendFax();
		break;
	default:
		$notify = new SendEmail();
		break;
}

echo $notify->notification();