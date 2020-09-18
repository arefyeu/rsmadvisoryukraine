<?php
	 $name = $_POST['name'];
	 $company = $_POST['company'];
	 $subject = "Offer from $name , that represents $company";
	 foreach ($_POST as $key => $value) {
	  	$message .= strval($key)." - ".strval($value)."; ".$_POST;
	 }
	 if ($_GET['sent'] and isset($_POST['name']) and isset($_POST['company'])) {
	 	mail("evgeniyrepetsky@gmail.com", $subject, $message);
	 }
	 $lang = $_GET['lang'];
	 header("location:/$lang");
?>