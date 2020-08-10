<?php
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

//MODIFIER FOOTER//
// function wplogout_footer_creds_text () {
// $copyright = '<div class="copyright-bar"><p>Copyright © ' . date('Y') . ' · <a href="https://www.wplogout.com/">WPLogout</a> - All Rights Reserved - <a href="http://linkedin.com"><img src="Theme Distriformation/img/linkedIn.png" alt="" class="footer-logos" /></a></p></div>';
// return $copyright;
// echo'<img src="img/linkedIn.png" alt="" class="footer-logos" />';
//  }
// add_filter( 'generate_copyright', 'wplogout_footer_creds_text' );
function wplogout_footer_creds_text () {
$copyright = '<div class="copyright-bar"><p id="cprght">Copyright © ' . date('Y') . '</p></div>';
return $copyright;
 }
add_filter( 'generate_copyright', 'wplogout_footer_creds_text' );