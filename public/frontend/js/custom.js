// slider js
$(document).ready(function () {
    $(".campaign").slick({
        infinite: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: "ease-out",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: false,

                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,

                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    $(".banner").slick({
        infinite: true,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: "linear",
    });
    $(".event-slider").slick({
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        slidesToScroll: 1,
        vertical: true,
        // verticalSwiping: true,
    });
});

// mobile navbar
function openNav() {
    document.getElementById("mobileNavbar").style.width = "100%";
}

function closeNav() {
    document.getElementById("mobileNavbar").style.width = "0%";
}

$(".mobile-nav button").click(function () {
    // $(this).$('.mobile-nav-wrapper').display="block";
    $(this).siblings().toggle("active");
});

// on scroll navbar drop

var navbar = document.getElementById("navbar");
var primaryNavbar = document.querySelector(".primary-navbar");
var mobileSticky = primaryNavbar.offsetTop;

var x = window.matchMedia("(max-width: 992px)");
myFunction(x);
x.addListener(myFunction);

function myFunction(x) {
    var sticky = navbar.offsetTop;
    var logoWrapper = document.querySelector(".logo-wrapper");

    if (x.matches) {
        $(window).on("scroll", function (event) {
            if (window.pageYOffset >= sticky) {
                primaryNavbar.classList.add("sticky");
                logoWrapper.style.display = "flex";
            } else {
                primaryNavbar.classList.add("sticky");
                logoWrapper.style.display = "flex";
            }
        });
    } else {
        // primaryNavbar.style = "box-shadow:none";
        $(window).on("scroll", function (event) {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
                logoWrapper.style.display = "none";
            } else {
                navbar.classList.remove("sticky");
                logoWrapper.style.display = "flex";
            }
        });
    }
}

// gallery
function openModal() {
    document.getElementById("galleryModal").style.display = "block";
}

// Close the Modal
function closeModal() {
    document.getElementById("galleryModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
