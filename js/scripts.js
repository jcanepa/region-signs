$(document).ready(function(){
    /* Clicking links closes navbar on mobile */
    $(function(){
        var navbar = $(".navbar-collapse");
        navbar.on(
            "click", "a:not([data-toggle])",
            null,
            function () {
                navbar.collapse('hide');
            }
        );
    });
});