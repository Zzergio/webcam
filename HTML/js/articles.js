/* Индекс слайда по умолчанию */
var slideIndex1 = 1;
showSlides1(slideIndex1);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide1() {
    showSlides1(slideIndex1 += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide1() {
    showSlides1(slideIndex1 -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide1(n) {
    showSlides1(slideIndex1 = n);
}

/* Основная функция слайдера */
function showSlides1(n) {
    var i;
    var slides1 = document.getElementsByClassName("articles-slider-item");
    if (n > slides1.length) {
      slideIndex1 = 1
    }
    if (n < 1) {
        slideIndex1 = slides1.length
    }
    for (i = 0; i < slides1.length; i++) {
        slides1[i].style.display = "none";
    }
    slides1[slideIndex1 - 1].style.display = "block";
}