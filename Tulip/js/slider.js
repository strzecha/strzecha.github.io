let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let slideInterval;

        const showSlides = () => {
            if (slideIndex >= totalSlides) slideIndex = 0;
            if (slideIndex < 0) slideIndex = totalSlides - 1;
            
            document.querySelector('.slider-wrapper').style.transform = `translateX(${-slideIndex * 100}%)`;
            
            dots.forEach(dot => dot.classList.remove('active'));
            dots[slideIndex].classList.add('active');
        }

        const nextSlide = () => {
            slideIndex++;
            showSlides();
            resetInterval();
        }

        const prevSlide = () => {
            slideIndex--;
            showSlides();
            resetInterval();
        }

        const currentSlide = (n) => {
            slideIndex = n - 1;
            showSlides();
            resetInterval();
        }

        const resetInterval = () => {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 3000);
        }

        document.getElementById('nextBtn').addEventListener('click', nextSlide);
        document.getElementById('prevBtn').addEventListener('click', prevSlide);

        slideInterval = setInterval(nextSlide, 5000);
        showSlides();