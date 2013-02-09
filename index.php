<?php get_header(); ?>
</div>

<!-- Page content -->
<div class="home">
    <?php
        $photoset_id = of_get_option("homepage_flickr_photoset_id");
        echo do_shortcode("[flickr-photoset-fullscreen id={$photoset_id}]"); ?>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        var $window = jQuery(window);
        var $navbar = jQuery('.navbar');
        var $slideshow = jQuery('div.home');

        function onResize(){
            height = $window.height() - $navbar.height();
            $slideshow.height(height);
        }

        $window.bind('resize', onResize);
        $window.trigger('resize');
    });
</script>