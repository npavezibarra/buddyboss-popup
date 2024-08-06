jQuery(document).ready(function($) {
    $('#popup-open').on('click', function(e) {
        e.preventDefault();
        $('#buddyboss-popup-overlay').removeClass('popup-hidden').addClass('popup-visible');
        $('#buddyboss-popup').removeClass('popup-hidden').addClass('popup-visible');
    });

    $('#popup-close').on('click', function(e) {
        e.preventDefault();
        $('#buddyboss-popup-overlay').removeClass('popup-visible').addClass('popup-hidden');
        $('#buddyboss-popup').removeClass('popup-visible').addClass('popup-hidden');
    });
});
