<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://#
 * @since      1.0.0
 *
 * @package    Custom_Lang_Switcher
 * @subpackage Custom_Lang_Switcher/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="page_header_lang">
    <img src="https://ricoboost.com/wp-content/uploads/flags/<?php echo $current_lang_code; ?>.png" />
    <a href="#lang_popup" id="btn_lang_popup" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="lang_popup">
        <?php echo $current_lang_code; ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
            <path d="M7 1.36084L4 4.63919L1 1.36084" stroke="#B8C4D0" stroke-linecap="round"></path>
        </svg>
    </a>
    <div class="page_header_lang_popup" id="lang_popup">
        <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
    </div>
</div>