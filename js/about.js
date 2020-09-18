document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})
function change_description(description_number,obj) {
  var descriptions= $(".description");
  var current_desc_index = description_number-1;
  for(i=0;i<descriptions.length;i++) {
    if(i==current_desc_index) {
      descriptions[i].className = "description";
    }
    else {
      descriptions[i].className = "description inactive";
    }
  }
  var labels= $("h2");
   for(i=0;i<labels.length;i++) {
    if(i==current_desc_index) {
      labels[i].className = "active";
    }
    else {
      labels[i].className = "";
    }
  }
}
var current_slide;
function show_slide(n) {
  current_slide = n-1;
  var slides = document.getElementsByClassName('slide');
  var buttons = document.getElementsByClassName('slider_button');
  
  for(i=0; i<slides.length;i++) {
    slides[i].style.height= "0px";
  }
  slides[n-1].style.height = "350px";

  for(i=0; i<buttons.length;i++) {
    buttons[i].className =  buttons[i].className.replace("active ", "");
  }
  buttons[n-1].className = "active " +  buttons[n-1].className;
 
}
$( document ).ready(function() {
    show_slide(1);
});

function next_slide() {
  current_slide++;
  current_slide = (current_slide) % 3;
  show_slide(current_slide+1);
}

let timerId = setInterval(next_slide, 10000);

function elementInViewport2(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while(el.offsetParent) {
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return (
    top < (window.pageYOffset + window.innerHeight) &&
    left < (window.pageXOffset + window.innerWidth) &&
    (top + height) > window.pageYOffset &&
    (left + width) > window.pageXOffset
  );
}
window.onscroll = function() {runAnimation()};

function runAnimation() {
  if (elementInViewport2(document.getElementById('wrapper'))){
    document.getElementById('wrapper').className = "wrapper_animated";
  }
  else {
    document.getElementById('wrapper').className = "wrapper";
  }
  if (elementInViewport2(document.getElementById('value_line'))){
    document.getElementById('value_line').className = "value_line_animated";
  }
  else {
    document.getElementById('value_line').className = "value_line";
  }
  if (elementInViewport2(document.getElementsByClassName('additional_values')[0])){
    document.getElementById('cooperation').className = "additional_value_animated_slow";
    document.getElementById('ideas').className = "additional_value_animated_fast";
    document.getElementById('understanding').className = "additional_value_animated_slow";
  }
  else {
    document.getElementById('cooperation').className = "additional_value";
    document.getElementById('ideas').className = "additional_value";
    document.getElementById('understanding').className = "additional_value";
  }
}
