<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="email">
		<br>
		<br>
		<input type="submit" value="send">

		<?php
		include 'FlashMessage.php';

		$message = new FlashMessage();

		$email=$_POST['email'];// принимаем данные из формы и передаем их $email

		if(filter_var($email,FILTER_VALIDATE_EMAIL)!=$email) //с помощью функции filter_var проверяем значения введенные из формы на соответствие формы email и сравниваем результат с данными введеными в форме. При их равенстве - ничего не делаем, если же результат не равен, то устанавливается и выводится сообщение о ошибке
	{
		$message->set_flash_message('Введите email','error');}
		$message->displey_flash_message('error');


?>


	</form>




</body>
</html>



