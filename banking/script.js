
const carousel = document.getElementById('carousel');
let currentIndex = 0;

function showSlide(index) {
    if (index < 0) {
        index = carousel.children.length - 1;
    } else if (index >= carousel.children.length) {
        index = 0;
    }
    const offset = -index * 100;
    carousel.style.transform = `translateX(${offset}%)`;
    currentIndex = index;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

// Automatically advance the carousel every 3 seconds
setInterval(nextSlide, 3000);
