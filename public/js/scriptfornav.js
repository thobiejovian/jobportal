//changing navbar color

window.onscroll = function() {changeNav()};


const nav = document.querySelector('.navbar');



function changeNav(){

  if (document.body.scrollTop  > 50 || document.documentElement.scrollTop > 50) {
    nav.classList.add("changeColor");
  }
  else {
    nav.classList.remove("changeColor");
  }
}
