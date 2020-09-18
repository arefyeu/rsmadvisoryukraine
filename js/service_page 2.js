function change_subservices_visibility(obj) {
	var subservices = obj.parentElement.parentElement.children[1];
	if(obj.children[0].className == "down_arrow") {
		obj.children[0].className = "up_arrow";
		subservices.style.maxHeight = "1000px";
	}
	else {
		obj.children[0].className = "down_arrow";
		subservices.style.maxHeight = "0px";
	}
}

function change_product_visibility(obj) {
	if (obj.children[1].style.maxHeight == "" || obj.children[1].style.maxHeight == "0px") {
		obj.children[1].style.maxHeight = "2000px";
		obj.children[1].style.opacity = "1";
		obj.children[1].style.paddingTop = "30px";
		obj.children[0].children[0].style.transform = "rotate(-180deg)";
	}
	else {
		obj.children[1].style.maxHeight = "0px";
		obj.children[1].style.opacity = "0";
		obj.children[1].style.paddingTop = "0px";
		obj.children[0].children[0].style.transform = "";
	}	
}