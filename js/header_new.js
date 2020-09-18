var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }

};
if(isMobile.any()) {
	document.getElementById('what_we_offer').href="javascript:void(0)";
}
if(isMobile.any()) {
	document.getElementById('who_we_are').href="javascript:void(0)";
}
$( ".burger" ).click(function() {
	$( ".menu__container").toggleClass('active');
	$( ".burger").toggleClass('active');
	$( "body").toggleClass('lock');
});
$( ".regions" ).click(function() {
	$( ".regions__arrow").toggleClass('active');
	$( ".regions").toggleClass('active');
	$( ".regions__all-regions").toggleClass('active');
});