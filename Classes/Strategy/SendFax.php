<?php
namespace Classes\Strategy;
use Interfaces\Strategy\SendMsg;

class SendFax implements SendMsg
{
	public function notification(){
		return 'Send Fax notification sent';
	}
}