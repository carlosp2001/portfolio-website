$(document).ready(function () {
    $(".content__item__projects__navbar__button").click(function () {
        // Removemos la clase de botón activo a todos los botones
        $(".content__item__projects__navbar__button").removeClass("content__item__projects__navbar__button__active");

        // Añadimos la clase de botón activo al botón que se ha clicado
        $(this).addClass("content__item__projects__navbar__button__active");

        // Obtenemos el index del botón
        var index = $(this).index();

        // Obtenemos el proyecto que está activo
        var activeProject = $(".content__item__projects__project__active");

        if (activeProject.index() === index) return;
        else if (activeProject.index() < index) {
            activeProject.css({transform: "translateY(-100%)", opacity: 0});

            activeProject.on('transitionend', function () {
                // Esta función se ejecutará después de que termine la transición
                activeProject.removeClass("content__item__projects__project__active");
                // Limpia el evento para evitar que se dispare múltiples veces
                activeProject.off('transitionend');

                $(".content__item__projects__project").eq(index).addClass("content__item__projects__project__active").css({opacity: 1, transform: "translateY(0)"});
            });
        }
        else if (activeProject.index() > index) {
            activeProject.css({transform: "translateY(100%)", opacity: 0});

            activeProject.on('transitionend', function () {
                // Esta función se ejecutará después de que termine la transición
                activeProject.removeClass("content__item__projects__project__active");
                // Limpia el evento para evitar que se dispare múltiples veces
                activeProject.off('transitionend');

                $(".content__item__projects__project").eq(index).addClass("content__item__projects__project__active"    ).css({opacity: 1, transform: "translateY(0)"});
            });
        }
    });
});
