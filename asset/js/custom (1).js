const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 30000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 30000);
}

function slidefun(n) {
	
	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}

$(document).on('click','ul li', function(){
    $(this).addClass('active').siblings().removeClass('active')
})

$(document).ready(function(){
	$('.txt').addClass('loaded');
});

document.addEventListener('scroll', reveal);

function reveal(){
var reveals = document.querySelectorAll('.reveal');

	for(var i = 0; i < reveals.length; i++){

		var windowheight = window.innerHeight;
		var revealtop = reveals[i].getBoundingClientRect().top;
		var revealpoint = 150;

		if(revealtop < windowheight - revealpoint){
		reveals[i].classList.add('active');
		}
		else{
		reveals[i].classList.remove('active');
		}
	}
};













