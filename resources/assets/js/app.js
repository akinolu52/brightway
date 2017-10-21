require('./bootstrap');

jQuery(document).ready(function() {
    // $('.select-2').select2();
    jQuery('.fbtt').fadeOut();
    jQuery(".loader_overlay").fadeOut(duration);

    var offset = 250;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.fbtt').fadeIn(duration);
        } else {
            jQuery('.fbtt').fadeOut(duration);
        }
    });
    jQuery('.fbtt').click(function(e) {
        e.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
});