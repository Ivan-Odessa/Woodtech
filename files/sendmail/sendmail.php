<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 21ac4f09a012faa23bf4e81949c54d4aad2b18bb
>>>>>>> 9823cae48c1f7618a4ec02980e98c9e86608322c
>>>>>>> b034153d8aaff34f17f12f0cd3e9002f8f5acf60
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого письмо
	$mail->setFrom('', 'Фрилансер по жизни');
	//Кому отправить
	$mail->addAddress('');
	//Тема письма
	$mail->Subject = 'Привет! Это "Фрилансер по жизни"';

	//Тело письма
	$body = '<h1>Встречайте супер письмо!</h1>';

	//if(trim(!empty($_POST['name']))){
		//$body.='';
	//}	
	
	/*
	//Прикрепить файл
	if (!empty($_FILES['image']['tmp_name'])) {
		//путь загрузки файла
		$filePath = __DIR__ . "/files/sendmail/attachments/" . $_FILES['image']['name']; 
		//грузим файл
		if (copy($_FILES['image']['tmp_name'], $filePath)){
			$fileAttach = $filePath;
			$body.='<p><strong>Фото в приложении</strong>';
			$mail->addAttachment($fileAttach);
		}
	}
	*/

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого письмо
	$mail->setFrom('', 'Фрилансер по жизни');
	//Кому отправить
	$mail->addAddress('');
	//Тема письма
	$mail->Subject = 'Привет! Это "Фрилансер по жизни"';

	//Тело письма
	$body = '<h1>Встречайте супер письмо!</h1>';

	//if(trim(!empty($_POST['name']))){
		//$body.='';
	//}	
	
	/*
	//Прикрепить файл
	if (!empty($_FILES['image']['tmp_name'])) {
		//путь загрузки файла
		$filePath = __DIR__ . "/files/sendmail/attachments/" . $_FILES['image']['name']; 
		//грузим файл
		if (copy($_FILES['image']['tmp_name'], $filePath)){
			$fileAttach = $filePath;
			$body.='<p><strong>Фото в приложении</strong>';
			$mail->addAttachment($fileAttach);
		}
	}
	*/

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
>>>>>>> 2f1a342212d8a8113eb4cabfab0be042b34e4bac
>>>>>>> 21ac4f09a012faa23bf4e81949c54d4aad2b18bb
>>>>>>> 9823cae48c1f7618a4ec02980e98c9e86608322c
>>>>>>> b034153d8aaff34f17f12f0cd3e9002f8f5acf60
?>