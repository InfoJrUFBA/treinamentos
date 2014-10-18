InfoJrTheme = {};

Reveal.addEventListener('ready', function(event) {
    var footer = document.querySelector('.reveal > .footer');
    var header = document.querySelector('.reveal > .header');
    if (Reveal.isFirstSlide() || Reveal.isLastSlide()) {
        footer.style.opacity = 1;
        header.style.opacity = 1;
    } else {
        footer.style.opacity = 0;
        header.style.opacity = 0;
    }
});

Reveal.addEventListener('slidechanged', function(event) {
    var footer = document.querySelector('.reveal > .footer');
    var header = document.querySelector('.reveal > .header');
    if (Reveal.isFirstSlide() || Reveal.isLastSlide()) {
        InfoJrTheme.fadeInInterval = setInterval(function() {
            if (footer.style.opacity <= 1 && header.style.opacity <= 1) {
                footer.style.opacity = parseFloat(footer.style.opacity) + 0.1;
                header.style.opacity = parseFloat(header.style.opacity) + 0.1;
            }
            if (footer.style.display === 'none' && header.style.display === 'none') {
                footer.style.display = 'block';
                header.style.display = 'block';
            }
            if (footer.style.opacity >= 1 && header.style.opacity >= 1) {
                clearInterval(InfoJrTheme.fadeInInterval);
            }
        }, 40);
    } else {
        InfoJrTheme.fadeOutInterval = setInterval(function() {
            if (footer.style.opacity > 0 && header.style.opacity > 0) {
                footer.style.opacity -= 0.1;
                header.style.opacity -= 0.1;
            }
            if (footer.style.opacity <= 0 && header.style.opacity <= 0) {
                footer.style.display = 'none';
                header.style.display = 'none';
            }
            if (footer.style.opacity <= 0 && header.style.opacity <= 0) {
                clearInterval(InfoJrTheme.fadeOutInterval);
            }
        }, 40);
    }
});
