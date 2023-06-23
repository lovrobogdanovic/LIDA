/* Menu bar */

document.addEventListener("DOMContentLoaded", function () {
    var navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    navLinks.forEach(function (link) {
        link.addEventListener("mouseover", function () {
            this.classList.add("active");
        });

        link.addEventListener("mouseout", function () {
            if (!this.classList.contains("current")) {
                this.classList.remove("active");
            }
        });
    });

    var currentPath = window.location.pathname;
    var currentPage = currentPath.split("/").pop();

    navLinks.forEach(function (link) {
        var linkPath = link.getAttribute("href");
        var linkPage = linkPath.split("/").pop();

        if (linkPage === currentPage) {
            link.classList.add("active", "current");
        }
    });
});

var myCarousel = document.querySelector('#carouselExampleIndicators')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000, // Adjust the interval (in milliseconds) as needed
    wrap: true // Set to false if you don't want the carousel to wrap around
})

//news

// < script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
// <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

$(document).ready(function () {
    // Onemogućava automatsko listanje karusela
    $('.carousel').carousel({
        interval: false
    });
});


