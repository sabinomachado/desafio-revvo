document.addEventListener('DOMContentLoaded', function() {
    let imgs = document.querySelectorAll('.slider__imgs') 
    let imgIndex = 0
    let maxIndex = imgs.length 
    let dotsWrapper = document.querySelector('.slider__dots--wrapper')
    let arrowLeft = document.querySelector('.slider__arrowLeft')
    let arrowRight = document.querySelector('.slider__arrowRight')
   
   console.log("passou aqui!");
    initSlider()
    clickBullet()
    nextOrPrev()
   
    function initSlider () {
      for (let i = 0; i < maxIndex; i++) {     
       if (i === 0) {
                dotsWrapper.innerHTML = '<span class="slider__dots slider__dots--active"></span>'
       } else {
                dotsWrapper.innerHTML += '<span class="slider__dots"></span>'
       }    
      }
      imgs[0].style.display = 'flex' 
    }
   
   function toggleBullets (index) {
     let bullets = document.querySelectorAll('.slider__dots')
     bullets.forEach((item) => {
            item.classList.remove('slider__dots--active')  
     })    
            bullets[index].classList.add('slider__dots--active')
    }
   
    function clickBullet() { 
     let bullets = document.querySelectorAll('.slider__dots')
     for (let i = 0; i < bullets.length; i++) {
       bullets[i].addEventListener('click', function() {      
            imgs[imgIndex].style.display = 'none'
            imgIndex = i
            imgs[imgIndex].style.display = 'flex'
            toggleBullets(i)
       })
     }
    }
    
    function nextOrPrev() {
     arrowLeft.addEventListener('click', function() {    
       if ( imgIndex === 0 ) {
         return false
       } else {
           imgs[imgIndex].style.display = 'none' 
           imgs[--imgIndex].style.display = 'flex'  
           toggleBullets(imgIndex)
       }
     })
     arrowRight.addEventListener('click', function() {
       if ( imgIndex === maxIndex - 1 ) {
         return false
       } else {
           imgs[imgIndex].style.display = 'none' 
           imgs[++imgIndex].style.display = 'flex'  
           toggleBullets(imgIndex)
       }
     })
    }
   
   
  });


