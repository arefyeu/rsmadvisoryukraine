<?php
	$dbhost = "localhost";
	$dbname = "rsmadvis_rsm";
	$username = "rsmadvis";
	$password = "xV2l2vjM28";
	$db = new PDO("mysql:host=$dbhost; dbname=$dbname; charset=utf8", $username, $password);
	if (isset($_GET['lang'])) {
		$lang = $_GET['lang'];
	}
	else {
		$lang = "en";
	}
	function change_language($language) {
		if ($_GET['lang']) {
	    	echo substr($_SERVER['REQUEST_URI'], 0, -2)."$language";
		}
		else {
				if($_SERVER['REQUEST_URI'] == "/") 
				{
					echo "$language";
				}	
				else {
					echo $_SERVER['REQUEST_URI']."/$language";
				}
		}
	}
	function add_lang_reference($language) {
		if ($_GET['lang']) {
	    	echo "/$language";
		}
		else {
			echo "";
		}
	}
	function add_only_lang_reference($language) {
		if ($_GET['lang']) {
	    	echo "/$language";
		}
		else {
			echo "";
		}
	}
	function get_experts_all() {
		global $db;
		$experts = $db->query("SELECT * FROM experts WHERE CONCAT(first_name_en,' ',last_name_en) <> 'RSM Global' ORDER BY expert_order");
		return $experts;
	}

	function get_expert_by_id($expert_id) {
		global $db;
		$expert = $db->query("SELECT * FROM experts WHERE expert_id = $expert_id")->fetch();
		return $expert;
	}

	function get_expert_by_name($name) {
		global $db;
		$expert = $db->query("SELECT * FROM experts WHERE CONCAT(first_name_en,'-',last_name_en) = "."'".$name."'")->fetch();
		return $expert;
	}
	
	function get_publications_all() {
		global $db;
		$publications = $db->query("SELECT * FROM publications ORDER BY date DESC");
		return $publications;
	}

	function get_publication_by_id($publication_id) {
		global $db;
		$publication = $db->query("SELECT * FROM publications WHERE publication_id = $publication_id") -> fetch();
		return $publication;
	}

	function get_publication_by_title($title) {
		global $db;
		$publication = $db->query("SELECT * FROM publications WHERE title_en = "."'".$title."'") -> fetch();
		return $publication;
	}

	function get_publications_by_expert_id($expert_id) {
		global $db;
		$publications = $db->query("SELECT * FROM publications WHERE expert_id = $expert_id ORDER BY date DESC");
		return $publications;
	}

	function get_services_all() {
		global $db;
		$services = $db->query("SELECT * FROM services");
		return $services;
	}

	function get_service_by_id($service_id) {
		global $db;
		$service = $db->query("SELECT * FROM services WHERE service_id = $service_id")->fetch();
		return $service;
	}
	function get_service_by_name($name) {
		global $db;
		$service = $db->query("SELECT * FROM services WHERE name_en = "."'".$name."'")->fetch();
		return $service;
	}

	function get_subservices_by_service_id($service_id) {
		global $db;
		$subservices = $db->query("SELECT * FROM subservices WHERE service_id = $service_id");
		return $subservices;
	}
	function get_subservice_by_id($subservice_id) {
		global $db;
		$subservice = $db->query("SELECT * FROM subservices WHERE subservice_id = $subservice_id")->fetch();
		return $subservice;
	}
	function get_subservice_by_name($name) {
		global $db;
		$subservice = $db->query("SELECT * FROM subservices WHERE name_en = "."'".$name."'")->fetch();
		return $subservice;
	}

	function get_products_by_subservice_id($subservice_id) {
		global $db;
		$products = $db->query("SELECT * FROM products WHERE subservice_id = $subservice_id");
		return $products;
	}

	function get_responsible_experts_by_service_id($service_id) {
		global $db;
		$responsible_experts = $db->query("SELECT * FROM services WHERE service_id = $service_id")->fetch();
		return $responsible_experts['responsible_experts'];
	}
	function get_responsible_experts_by_subservice_id($subservice_id) {
		global $db;
		$responsible_experts = $db->query("SELECT * FROM subservices WHERE subservice_id = $subservice_id")->fetch();
		return $responsible_experts['responsible_experts'];
	}
?>