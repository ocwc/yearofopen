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
                <div class="grid-x grid-margin-x align-self-left align-justify">
                    <div class="cell shrink">
                        <p class="home-bottom"><?= get_field( 'perspective_subtitle', $term ); ?></p>
                    </div>
                    <?php if ( get_field( 'perspective_attribution', $term ) ) : ?>
                        <div class="cell shrink attribution">
                            <p class="home-bottom"><?= get_field( 'perspective_attribution', $term ); ?></p>
                        </div>
                    <?php endif; ?>
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

<?php get_template_part( 'partials/_share' ); ?>

<?php get_footer();
