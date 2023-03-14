// Check if .hero-slider exists in javascript not in jquery
if (document.querySelector('.hero-slider')) {
    // query selector all .slides
    var slides = document.querySelectorAll('.slides');
    // add display: none to all slides except the first one
    slides.forEach(function(slide, index) {
        // add 'active' class to the first slide
        if (index === 0) {
            slide.classList.add('active');
        }
        if (index > 0) {
            slide.style.display = 'none';
        }
    });

    var interval;

    function restartInterval() {
        clearInterval(interval);
        interval = setInterval(function() {
            nextSlide();
        }, 5000);
    }

    function nextSlide(){
        var activeSlide = document.querySelector('.active');
        var nextSlide = activeSlide.nextElementSibling;
        if (!nextSlide.classList.contains('slides')) {
            nextSlide = document.querySelector('.slides');
        }
        activeSlide.classList.remove('active');
        nextSlide.classList.add('active');
        activeSlide.style.display = 'none';
        nextSlide.style.display = 'flex';
    }

    function prevSlide(){
        var activeSlide = document.querySelector('.active');
        var prevSlide = activeSlide.previousElementSibling;
        // if prevSlide does not exist, get the last slide
        if (!prevSlide) {
            prevSlide = document.querySelector('.slides:last-child');
        }
        activeSlide.classList.remove('active');
        prevSlide.classList.add('active');
        activeSlide.style.display = 'none';
        prevSlide.style.display = 'flex';
    }

    // add event listener to element #arrow-prev
    document.querySelector('#arrow-next').addEventListener('click', function() {
        nextSlide();
        restartInterval();
    });
    document.querySelector('#arrow-prev').addEventListener('click', function() {
        prevSlide();
        restartInterval();
    });

    // run interval
    restartInterval();

}
