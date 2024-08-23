class Slider {
    constructor(sliderElement) {
        this.sliderElement = sliderElement;
        this.slideIndex = 0;
        this.slides = sliderElement.querySelectorAll('.slide');
        this.dots = sliderElement.querySelectorAll('.dot');
        this.totalSlides = this.slides.length;
        this.slideInterval = setInterval(() => this.nextSlide(), 5000);

        sliderElement.querySelector('.nextBtn').addEventListener('click', () => this.nextSlide());
        sliderElement.querySelector('.prevBtn').addEventListener('click', () => this.prevSlide());

        this.showSlides();
    }

    showSlides() {
        if (this.slideIndex >= this.totalSlides) this.slideIndex = 0;
        if (this.slideIndex < 0) this.slideIndex = this.totalSlides - 1;

        this.sliderElement.querySelector('.slider-wrapper').style.transform = `translateX(${-this.slideIndex * 100}%)`;

        this.dots.forEach(dot => dot.classList.remove('active'));
        this.dots[this.slideIndex].classList.add('active');
    }

    nextSlide() {
        this.slideIndex++;
        this.showSlides();
        this.resetInterval();
    }

    prevSlide() {
        this.slideIndex--;
        this.showSlides();
        this.resetInterval();
    }

    currentSlide(n) {
        this.slideIndex = n - 1;
        this.showSlides();
        this.resetInterval();
    }

    resetInterval() {
        clearInterval(this.slideInterval);
        this.slideInterval = setInterval(() => this.nextSlide(), 5000);
    }
}

// Inicjalizacja sliderów
const slider1 = new Slider(document.getElementById('slider1'));
const slider2 = new Slider(document.getElementById('slider2'));
