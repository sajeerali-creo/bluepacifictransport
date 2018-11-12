// aos
AOS.init({
    easing: 'ease-in-out-sine'
});


// menu icon
$(document).ready(function () {
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function () {
        $(this).toggleClass('open');
    });
});


document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function () {
    $('.sidenav').sidenav();
});



// slick
$(document).on('ready', function () {

    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });

});


// add class
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#main-head').addClass('fix-head');
    } else {
        $('#main-head').removeClass('fix-head');
    }
});