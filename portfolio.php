<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<div id="main" class="span12 clearfix" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

        <header>

            <div class="page-header"><h1 class="title"><?php the_title(); ?></h1></div>

        </header> <!-- end article header -->

        <section class="post_content">
            <?php
            $photoset_id = get_post_meta(get_the_ID(), 'flickr_photoset_id', true);
            if(empty($photoset_id)){
                the_content();
            }
            else{
                echo do_shortcode("[flickr-photoset id={$photoset_id}]");
            }
            ?>

        </section> <!-- end article section -->

        <footer>

            <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>

        </footer> <!-- end article footer -->

    </article> <!-- end article -->

    <?php endwhile; ?>

    <?php else : ?>

    <article id="post-not-found">
        <header>
            <h1><?php _e("Not Found", "bonestheme"); ?></h1>
        </header>
        <section class="post_content">
            <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
        </section>
        <footer>
        </footer>
    </article>

    <?php endif; ?>

</div> <!-- end #main -->

<?php get_footer(); ?>