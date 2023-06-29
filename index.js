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

  
});


document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth < 768) {
        // Aktivirajte Bootstrap Carousel samo na mobilnim uređajima
        var newsCarousel = new bootstrap.Carousel(document.getElementById("news-carousel"), {
            interval: false
        });

    }
});

//news

document.addEventListener("DOMContentLoaded", function() {
    var readMoreButtons = document.querySelectorAll(".read-more");
    
    readMoreButtons.forEach(function(button) {
      button.addEventListener("click", function() {
        var target = this.getAttribute("data-bs-target");
        var collapseElement = document.querySelector(target);
        
        collapseElement.classList.toggle("show");
      });
    });
  });
  

// < script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
//<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>




