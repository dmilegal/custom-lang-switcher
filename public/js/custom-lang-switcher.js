'use strict';
jQuery(document).ready(function($) {
    $('.wpml-ls-current-language a').attr('href', '#');
    const popup = $('.page_header_lang_popup');
    const btn = $('#btn_lang_popup');
    if (!popup || !btn)
        return;
    $(btn).on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if ($(popup).is(':visible')) {
            $(popup).slideUp();
            $(btn).closest('div').removeClass('active');
            $(btn).attr('aria-expanded', 'false');
        } else {
            $(popup).slideDown();
            $(btn).closest('div').addClass('active');
            $(btn).attr('aria-expanded', 'true');
        }
    });
});