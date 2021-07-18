<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package virtus
 */

?>
<footer id="colophon" class="site-footer wrapper-full container-full">
    <div class="wrapper site-footer__container ">
        <div class="widget-column footer-widget-1">
            <?php dynamic_sidebar('footer-logo'); ?>
        </div>
        <div class="widget-column footer-widget-2">
            <?php dynamic_sidebar('footer-info'); ?>
        </div>
        <!-- .widget-area -->

        <div class="widget-column footer-widget-3">

            <?php dynamic_sidebar('footer-datos'); ?>
        </div>
        <!-- .widget-area -->

        <div class="widget-column footer-widget-4 widget-redes-list">
            <?php dynamic_sidebar('footer-redes'); ?>
        </div>
        <!-- .widget-area -->
    </div>
    <!-- .footer-widgets-wrapper -->

    <!-- .footer-widgets -->

    <div id="site-generator"></div>
    <!-- #site-generator -->
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.carousel-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'fade',
    autoplay: {
        delay: 3000,
    },
});

const swipera = new Swiper('.carousel-container-a', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
});



function next() {
    swipera.slideNext();
}

function prev() {
    swipera.slidePrev();
}


let menu = document.getElementById("menuHamburguer");
let toggleMenu = false;
let toggleNoAni = true;
menu.addEventListener("click", () => {
    if (toggleMenu) {
        menu.classList.remove("open");
        toggleMenu = false;
        $("#menu-movil-container").removeClass('show-menu ');
    } else {
        menu.classList.add("open");
        $("#menu-movil-container").addClass('show-menu ');
        toggleMenu = true;
        if (toggleNoAni) {
            toggleNoAni = false;
            menu.childNodes.forEach((e) => {
                if (e.nodeType == 1) {
                    e.classList.remove("no-ani");
                }
            });
        }
    }
});


var amenidades = new Swiper('.swiper-amenidades', {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});

var terrenoIma = new Swiper('.swiper-terreno', {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});

var contacto = new Swiper('.contacto-slider', {
    direction: 'horizontal',
    loop: true,
});


function nextConta() {
    contacto.slideNext();
}

function prevConta() {
    contacto.slidePrev();
}
</script>
</body>

</html>