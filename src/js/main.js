//=require ../../node_modules/jquery/dist/jquery.js
//=require ./libs/aos.js

  let hamburger = document.querySelector(".hamburger");
  let mobile = document.querySelector(".mobile");
  
  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobile.classList.toggle("mobile--hide");
  });

  let overlay = document.querySelector('.mobile__overlay');
  overlay.addEventListener('click',()=>{
    mobile.classList.toggle('mobile--hide');
    hamburger.classList.toggle("is-active");
  })

  let catalogItem = document.querySelectorAll('.catalog__item');
  let catalogPin = document.querySelectorAll('.catalog__pin');

  let randomNumbers = (min,max) =>{
    let randNumber = Math.floor(Math.random() * (max - min) + min);
    return randNumber;
  }

  catalogItem.forEach((item,index)=>{
    let randNumber = randomNumbers(-5,5)
    let min = 10;
    let color = randomNumbers(1,20) * min;
    item.style.transform=`rotate(${randNumber}deg)`;
    catalogPin[index].style.filter=`hue-rotate(${color}deg)`;
    item.addEventListener('mouseover',()=>{
      item.style.transform="rotate(0deg)";
    })
    item.addEventListener('mouseout',()=>{
      item.style.transform=`rotate(${randNumber}deg)`;
    })
  })

  //anchors

  $(function(){
    $('a[href^="#"]').click(function () {
        elementID = $(this).attr("href");
        position = $(elementID).offset().top;
        $('html, body').animate({scrollTop: position}, 500);
        
        return false;
    });
});  

AOS.init();