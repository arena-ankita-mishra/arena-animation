const phrases = ["VFX", "Graphic Designer"];
let i = 0;

setInterval(() => {
  const typingText = document.getElementById("typingText");
  typingText.textContent = phrases[i];
 i = (i + 1) % phrases.length;
}, 4000);


//ANIMTION PART 

const image = document.querySelector('.image-container img');
 const imageContainer = document.querySelector('.image-container');


    imageContainer.addEventListener('mousemove', (event) => {
      const { offsetX, offsetY, target } = event;
      const { width, height } = target;

      
      const moveX = (offsetX / width) * 20 - 10; 
      const moveY = (offsetY / height) * 20 - 10; 

      
      image.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });

    
    imageContainer.addEventListener('mouseleave', () => {
      image.style.transform = 'translate(0, 0)';
    });
  
    //section-5
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
  
    function updateSlider() {
      const sliderTrack = document.querySelector('.slider-track');
      sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
  
      dots.forEach(dot => dot.classList.remove('active'));
      dots[currentIndex].classList.add('active');
    }
  
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        currentIndex = index;
        updateSlider();
      });
    });

    
  
    // Optional: Add auto-slide functionality
    setInterval(() => {
      currentIndex = (currentIndex + 1) % slides.length;
      updateSlider();
    }, 3000); // Change slide every 3 seconds

    //section 6

    // section 7
    
    // section 8

    // section 9
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);