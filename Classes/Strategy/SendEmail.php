<?php
namespace Classes\Strategy;
use Interfaces\Strategy\SendMsg;

class SendEmail implements SendMsg
{
	public function notification(){
		return 'Send mail notification sent';
	}
}