

     
//Second section counter
const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
 const updateCounter = () => {
   const target = +counter.getAttribute("data-count");
   const count = +counter.innerText;

   const speed = 600;

   if (count < target) {
     counter.innerText = Math.ceil(count + target / speed);
     setTimeout(updateCounter, 1);
   } else {
     counter.innerText = target;
   }
 };

 updateCounter();
});


// Slider JS
const slides = document.getElementById("slides");
const dotsContainer = document.getElementById("dots");
const totalSlides = 7;
const slidesToShow = 3;
const slideWidth = 33.33;
let currentIndex = 0;

for (let i = 0; i < totalSlides; i++) {
 const dot = document.createElement("span");
 dot.classList.add("dot");
 if (i === 0) dot.classList.add("active");
 dot.addEventListener("click", () => goToSlide(i));
 dotsContainer.appendChild(dot);
}

const dots = document.querySelectorAll(".dot");

function goToSlide(index) {
 currentIndex = index;
 updateSlider();
}

function updateSlider() {
 slides.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

 dots.forEach((dot, index) => {
   dot.classList.toggle("active", index === currentIndex);
 });
}

setInterval(() => {
 currentIndex = (currentIndex + 1) % totalSlides;
 updateSlider();
}, 3000);
