<?php get_header(); ?>

<!-- Page content -->
<div class="home">
    <?php echo do_shortcode("[flickr-photoset-fullscreen id=72157626168629747]"); ?>
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
<?php get_footer(); ?>