<!-- Start the Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row-fluid post-row">
    <div class="span4 wp-post-image-outer">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php the_post_thumbnail('thumbnail', array('class' => 'wp-post-image img-polaroid')); ?>
        </a>
    </div>
    <div class="span8">
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            <header>
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); if(has_category()) { ?> <?php _e("and filed under", "bonestheme"); ?> <?php the_category(', '); } ?>.</p>
            </header>

            <section class="post_content">
                <?php the_excerpt('<span class="read-more">' . __("Read more on","bonestheme") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
            </section>

            <footer></footer>
        </article>
    </div>
</div>
<?php endwhile; ?>

<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

    <?php page_navi(); // use the page navi function ?>

    <?php } else { // if it is disabled, display regular wp prev & next links ?>
    <nav class="wp-prev-next">
        <ul class="clearfix">
            <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
            <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
        </ul>
    </nav>
    <?php } ?>


<?php else : ?>

<article id="post-not-found">
    <header>
        <h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
    </header>
    <section class="post_content">
        <p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
    </section>
    <footer>
    </footer>
</article>

<?php endif; ?>