$(document).ready(function(){
    $(window).scroll(function () {
        $('.navbar').toggleClass('navbar-fixed-top', ($(window).scrollTop() > ($('header').height() - 54) ));
    });
});