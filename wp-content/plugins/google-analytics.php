<?php
/*
Plugin Name: Simple Google Analytics Plugin
Plugin URI: http://rachelmccollin.com
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Tom Eagle
Version: 1.0
 */
?>

<?php
function wpmudev_google_analytics() { ?>

  <script type="text/javascript">
    (function(b,o,i,l,e,r){
      b.GoogleAnalyticsObject=l;
      b[l]||(b[l]=function(){
        (b[l].q=b[l].q||[]).push(arguments)
      });
      b[l].l=+new Date;
      e=o.createElement(i);
      r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)
    }(window,document,'script','ga'));
    ga('create','UA-92306374-1','auto');
    ga('send','pageview');
  </script>

<?php }
add_action( 'wp_head', 'wpmudev_google_analytics', 10 );
?>
