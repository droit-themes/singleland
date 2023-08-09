<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package singleland
 */
global $post;
$footer = get_themebuilder_Id(get_the_ID(), 'footer');
/**
 * add header
 * hook _singleland_footer -- 10;
 */
do_action('_singleland_footer_content', $footer);

$footer_url = singleland_opt('singleland_footer_background');
// $is_defult_footer = muffle_options('is_defult_footer');
$footer_background_url = SINGLELAND_IMAGES.'/blog/banner/banner.png';

if($footer_url && !empty($footer_url['url'])) {
    $footer_background_url = $footer_url['url'];
}

if(!class_exists('Redux')){
  $footer_background_url = '';
}
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
