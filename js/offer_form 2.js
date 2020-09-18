function change_placeholder(obj) {
	var childs = obj.parentElement.children;
	var language = window.location.href.substring(window.location.href.length-2);
	var fill_message;
	switch (language){
		case "ua":
		fill_message="Заповніть поле";
	    break;
	  case "en":
	    fill_message="Fill this field";
	    break;
	   default:
	    fill_message="Fill this field";
	    break;
	}
	childs[1].className += " moved_custom_placeholder";
	if(obj.value == "") {
		childs[2].innerHTML = fill_message;
	}
	else {
		childs[2].innerHTML = "";
	}
}
function check_all_inputs() {
	var language = window.location.href.substring(window.location.href.length-2);
	var textboxes = document.getElementsByClassName("text_input");
	valid_textboxes = true;
	for(var i = 0; i < textboxes.length; i++) {
		var textbox = textboxes[i];
		if(textbox.value == "") {
			valid_textboxes = false;
		};
	}
	
	var checkboxes = document.getElementsByClassName("checkbox_container");
	var valid_checkboxes = false;
	for(var i = 0; i < checkboxes.length - 1; i++) {
		var checkbox = checkboxes[i].getElementsByTagName("input");
		if(checkbox[0].checked == true) {
			valid_checkboxes = true;
		};
	}

	var valid_data_usage = false;
	var checkbox = checkboxes[checkboxes.length - 1].getElementsByTagName("input");
		if(checkbox[0].checked == true) {
			valid_data_usage = true;
	}
	if(valid_textboxes==false) {
		switch (language){
			case "ua":
				alert("Будь ласка, заповніть контактну форму.");
		    break;
		  	case "en":
		    	alert("Please, fill the form.");
		    break;
		   	default:
		    	alert("Please, fill the form.");
		    break;
		}	
	}
	else if(valid_checkboxes==false) {
		switch (language){
			case "ua":
				alert("Будь ласка, оберіть послуги, що Вас зацікавили.");
		    break;
		  	case "en":
		    	alert("Please, select the services you are interested in.");
		    break;
		   	default:
		    	alert("Please, select the services you are interested in.");
		    break;
		}	
	}
	else if(valid_data_usage==false) {
		switch (language){
			case "ua":
				alert("Будь ласка, підтвердіть, що ви ознайомилися та згодні з політикою конфіденційності.");
		    break;
		  	case "en":
		    	alert("Please, confirm, that you read and accepted our privacy policy.");
		    break;
		   	default:
		    	alert("Please, confirm, that you read and accepted our privacy policy.");
		    break;
		}	
		
	}
	return valid_textboxes && valid_checkboxes && valid_data_usage;
}

function change_subservices_visibility(obj) {
	var subservices = obj.parentElement.parentElement.children[1];
	if(obj.checked == true) {
		subservices.style.maxHeight="1000px";
		subservices.style.transition="0.5s";
		subservices.style.opacity = "1";
	}
	else {
		subservices.style.maxHeight="0px";
		subservices.style.transition="0.5s";
		subservices.style.opacity = "0";
		var subservices_labels = subservices.children;
		for (var i = subservices_labels.length - 1; i >= 0; i--) {
		subservices_labels[i].children[0].checked=0;
		}
	}
}

function submit_form() {
	var to_submit =  check_all_inputs();
	if(to_submit) {
		document.getElementById('contact_form').submit();
	}
	document.getElementById('contact_form').clear();
}