document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {
        edge: 'right',
        draggable: true
    });

    var elems = document.querySelectorAll('.carousel');
    var instance = M.Carousel.init(elems, {
        fullWidth: true,
        indicators: true
    });
});
