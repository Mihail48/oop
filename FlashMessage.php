<?php

class FlashMessage{


	public function set_flash_message($message,$name){
		$_SESSION[$name]= $message;

	}
	public function displey_flash_message($name){
		echo $_SESSION[$name];
		unset($_SESSION[$name]);

	}


//set_flash_message($message,$name) - метод устанавливающий(принимающий) сообщение.
//string || int $name - название переменной.
//string || int $message - текст сообщения.
//displey_flash_message($name) - метод показывающий(отображающий) сообщение.



}




















?>