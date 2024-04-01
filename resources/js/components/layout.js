$(document).ready(function(){
    $(".content__item__projects__navbar__button").click(function(){
        $(".content__item__projects__navbar__button").removeClass("content__item__projects__navbar__button__active");
        $(this).addClass("content__item__projects__navbar__button__active");
        var index = $(this).index();
        $(".content__item__projects__project").removeClass("content__item__projects__project__active");
        $(".content__item__projects__project").eq(index).addClass("content__item__projects__project__active");
    });
});
