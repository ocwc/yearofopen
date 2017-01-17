<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <div class="medium-offset-2 medium-8 columns text-center">
            <h1>Partners</h1>
        </div>

        <div <?php post_class(array('medium-offset-2', 'medium-8', 'column', 'post-content', 'post-partner')); ?>>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'partials/content', get_post_type() ); ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else : ?>
        <?php get_template_part( 'partials/content', 'none' ); ?>
    <?php endif; ?>

<?php get_footer();
