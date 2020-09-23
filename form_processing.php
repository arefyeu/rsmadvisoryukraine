<?php
	echo "string";
	 $name = $_POST['name'];
	 $company = $_POST['company'];
	 $subject = "Заявка с сайта";
	 $message = "Имя: ".strval($_POST['name'])."\r\n";
	 $message .= "Компания: ".strval($_POST['company'])."\r\n";
	 $message .= "Примечания: ".strval($_POST['note'])."\r\n";
	 $message .= "Интересующие услуги: "
	 foreach ($_POST as $key => $value) {
	 	echo $key;
	 	//if($value=="on") {
	  		//$message. == strval($key).", ";
	 	//}
	 }
	 //$message = substr($message, 0, -2);
	 echo "$message";
	 //if ($_GET['sent'] and isset($_POST['name']) and isset($_POST['company'])) {
	 //	mail("evgeniyrepetsky@gmail.com", $subject, $message);
	 //}
	 //$lang = $_GET['lang'];
	 //header("location:/$lang");
	 //a.arefyeu@rsm.ua
?>

