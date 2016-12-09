<div class="medium-offset-2 medium-8 columns text-center">
    <h1><?php the_title(); ?></h1>
</div>

<div <?php post_class(array('medium-offset-2', 'medium-8', 'column', 'post-content')); ?>>
    <?php the_content(); ?>
</div>

