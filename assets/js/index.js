jQuery(document).ready(function($) {
    $('.data-processing span').click( function(e) {
        e.preventDefault();
        $('.consent-field-about').slideToggle();
    });
    $('.caldera-forms-consent-field span').click( function(e) {
        e.preventDefault();
        $('.marketing-field-about').slideToggle();
    });

    $('.mobile-menu-button').on('click', function(e) {
        e.preventDefault();
        $('.primary-menu').toggleClass('menu-open');
    })
});