$(document).ready(function () {
    /*$('#menu').click(function () {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });*/
    $('#login').click(function () {
        $('.login-form').addClass('popup');
    });
    $('.login-form form .fa-times').click(function () {
        $('.login-form').removeClass('popup');
    });


    $(window).on('load scroll', function () {
       /* $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');*/
        $('.login-form').removeClass('popup');
    });
});

let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


