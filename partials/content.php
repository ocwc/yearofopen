<div class="medium-offset-3 medium-6 columns">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('partials/_breadcrumbs'); ?>
</div>

<div <?php post_class(array('medium-offset-3', 'medium-6', 'column', 'post-content')); ?>>
    <?php the_content(); ?>
</div>

