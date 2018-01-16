<?php get_header(); ?>

<?php $term = get_queried_object(); ?>
<?php $hero = get_field( 'perspective_image', $term ); ?>
    <div class="home hero">
        <div class="grid-container home-topic">
            <div class="grid-y grid-margin-y align-justify home-hero-text">
                <div class="cell auto">
                    <h1><?= $term->name; ?></h1>
                    <?= $term->description; ?>
                </div>
                <div class="cell shrink align-self-left">
                    <p class="home-bottom"><?= get_field( 'perspective_subtitle', $term ); ?></p>
                </div>
            </div>
        </div>
        <div class="background" style="background-image: <?= "url('" . $hero['sizes']['large'] . "');"; ?>"></div>
    </div>

    <div class="grid-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'partials/excerpt', get_post_type() ); ?>
        <?php endwhile; ?>
    </div>

    <?php get_template_part('partials/_share'); ?>

<?php get_footer();
