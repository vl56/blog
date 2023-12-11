// JavaScript para controle do slide

//slide

let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
    if (index < 0) {
    currentIndex = totalSlides - 1;
    } else if (index >= totalSlides) {
    currentIndex = 0;
    } else {
    currentIndex = index;
    }
    const translateValue = -currentIndex * 100 + '%';
    document.querySelector('.slider').style.transform = 'translateX(' + translateValue + ')';
    }


    function changeSlide(n) {
        slideIndex += n;
        let slides = document.getElementsByClassName("slide");
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        if (slideIndex < 1) {
          slideIndex = slides.length;
        }
        for (let i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";

    }

    // Controle de navegação do slide

document.addEventListener('DOMContentLoaded', function () {
    setInterval(function () {
    showSlide(currentIndex + 1);
    }, 6000); // Altere o intervalo de troca de slide conforme necessário (em milissegundos)
    });
          


//slide1