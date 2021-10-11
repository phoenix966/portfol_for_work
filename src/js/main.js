//=require ../../node_modules/jquery/dist/jquery.js

  let hamburger = document.querySelector(".hamburger");
  let mobile = document.querySelector(".mobile");
  
  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobile.classList.toggle("mobile--hide");
  });

  let overlay = document.querySelector('.mobile__overlay');
  overlay.addEventListener('click',()=>{
    mobile.classList.toggle('mobile--hide');
  })