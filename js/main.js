     
$(".comment-form-comment textarea").attr('placeholder','Your Message');
$(".comment-form-author input").attr('placeholder','Your Name');
$(".comment-form-email input").attr('placeholder','Your E-mail');
$(".comment-form-url input").attr('placeholder','Your Website');
// header fix section
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$('#menu').slicknav()

new WOW().init();
//Responsive menu
function openNav() {
    document.getElementById("mySidepanel").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}