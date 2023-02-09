var App = function () {
    function headerColors() {
        var url = window.location.pathname;
        var pathHome = '/grupo-recanto-psiquiatria/app/index.php';
        var pathSobre = '/grupo-recanto-psiquiatria/app/quem-somos.php';
        var pathTratamentos = '/grupo-recanto-psiquiatria/app/tratamentos.php';
        var pathEquipe = '/grupo-recanto-psiquiatria/app/equipe.php';
        var pathInternacao = '/grupo-recanto-psiquiatria/app/internacao.php';
        var pathEstrutura = '/grupo-recanto-psiquiatria/app/nossa-estrutura.php';

        if (url === pathHome) {
            $('header').addClass('h-bg-white');
            $('header nav a').removeClass('active');
        }
        if (url === pathInternacao) {
            $('header').addClass('h-bg-blue');
            $('header nav a').removeClass('active');
            $('header nav a[href="internacao.php"]').addClass('active');
        }
        if (url === pathSobre) {
            $('header').addClass('h-bg-green');
            $('header nav a').removeClass('active');
            $('header nav a[href="quem-somos.php"]').addClass('active');
        }
        if (url === pathTratamentos) {
            $('header').addClass('h-bg-green');
            $('header nav a').removeClass('active');
            $('header nav a[href="tratamentos.php"]').addClass('active');
        }
        if (url === pathEstrutura) {
            $('header').addClass('h-bg-green');
            $('header nav a').removeClass('active');
            $('header nav a[href="nossa-estrutura.php"]').addClass('active');
        }
        if (url === pathEquipe) {
            $('header').addClass('h-bg-green');
            $('header nav a').removeClass('active');
            $('header nav a[href="equipe.php"]').addClass('active');
        }
    }

    function scrollBPage(){
        $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
               $('.buttons-fixed').addClass('bottomFix');
            }else{
                $('.buttons-fixed').removeClass('bottomFix');
            }
        });
    }

    function menuMobile(){
        $('.menu-mobile').on('click',function(){
            $('nav').stop().slideToggle();
        });
    }

    function scrollButtons(){
        $(window).scroll(function() {
            var scroll = $(window).scrollTop()
            if (scroll >= 100) {
                $('.buttons-fixed').slideDown('fast');
            } else {
                $('.buttons-fixed').slideUp('fast');
            }
        });
    }

    function slideUnidades() {
        $('.slide-unidades.owl-carousel').owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    }
    return {
        init: function () {
            slideUnidades();
            scrollButtons();
            menuMobile();
            scrollBPage();
            // headerColors();
        }
    }


}()
