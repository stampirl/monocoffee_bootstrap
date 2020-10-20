
jQuery(document).ready(function($) {
    $('.data-processing span').click( function(e) {
        e.preventDefault();
        $('.consent-field-about').slideToggle();
    });
    $('.caldera-forms-consent-field span').click( function(e) {
        e.preventDefault();
        $('.marketing-field-about').slideToggle();
    });
});