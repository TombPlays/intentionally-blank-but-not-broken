<?php
/**
 * The base (and only) template
 *
 * @package WordPress
 * @subpackage blank-for-apps
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>html,body{min-height:100%;overflow:hidden;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:13px;line-height:1.4em;margin:0}
body{background-color: #f5f5f5; background-size:cover}
.site-title-bg{background:rgba(0,0,0,0.5);color:#fff;padding:5px}
.site-title h1,.site-title p{font-size:16px;display:inline-block;padding:5px 0 5px 5px;margin:0}
.site-title h1 a{color:#fff;font-weight:700;text-decoration:none}
.custom-logo{display:block;position:absolute;left:50%;top:50%;-ms-transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);max-width:100%;height:auto}
#colophon{position:absolute;width:100%;left:0;bottom:0;padding:10px 0;text-align:center;color:#333;background-color:rgba(241,241,241,0.4)}
#colophon a{text-decoration:none; color: #333;}</style>
<?php wp_head(); ?>
</head><body <?php body_class(); ?>><?php wp_body_open(); ?><div id="page">

<?php the_content();?>

</div><!-- #page -->
<?php wp_footer(); ?></body></html>
