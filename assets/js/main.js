const screenWidth = window.innerWidth
const swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: false,  
    spaceBetween: 10,  
    slidesPerView: "auto",    
    centeredSlides: false,
    
    on: {
        slideChange: function () {
            applyBlurEffect();
        },
        slideChangeTransitionEnd: function () {
            applyBlurEffect();
        }
    },
    breakpoints: {
        430: {
            spaceBetween: 28,
            
        },
        
    },    
}); 


function applyBlurEffect() {
    const slides = document.querySelectorAll('.swiper-slide')
    const containerRect = swiper.el.getBoundingClientRect();
    slides.forEach((slider, index) => {
        const sliderRect = slider.getBoundingClientRect();
        
        if (sliderRect.right > containerRect.right) {
            
            slider.classList.add('blur');
            

        } else {
            
            slider.classList.remove('blur');
        }
            
           
            
    });
    
    
    
    
}
applyBlurEffect(); 

function clickBtn(){
    const bannerBtn = document.querySelector(".banner__btn")
    bannerBtn.addEventListener("click", function(){
    bannerBtn.textContent = "Кнопка нажата"
    })
}   
clickBtn()