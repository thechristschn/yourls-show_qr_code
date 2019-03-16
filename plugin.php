<?php
/*
Plugin Name: Show QR Code
Plugin URI: https://github.com/thechristschn/yourls-show_qr_code
Description: This plugin shows the QR-Code after creating a paste and in the stats
Version: 1.0
Author: Christian Baumann
Author URI: 
*/

yourls_add_action( 'shareboxes_middle', 'show_qr_code');
function show_qr_code( $args ) {
  $longurl = $args[0];
  $shorturl = $args[1];
  $title = $args[2];
  $text = $args[3];
?>
<div id="qrcode" class="share">
  <h2>QR-Code</h2>
    <a href="<?php echo yourls_esc_url( $shorturl . ".qr") ?>">
      <img src="<?php echo yourls_esc_url( $shorturl . ".qr") ?>" alt="QR-Code">
    </a>
</div>
<?php
}

