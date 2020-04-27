<?php
namespace Classes\Strategy;
use Interfaces\Strategy\SendMsg;

class SendSms implements SendMsg
{
	public function notification(){
		return 'Send sms notification sent';
	}
}