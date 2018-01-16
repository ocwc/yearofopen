<?php get_header(); ?>

<?php $term = get_the_terms( $post, 'perspective' )[0]; ?>
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
        <div class="grid-x grid-margin-x">
            <div class="cell medium-offset-1 medium-6">
                <?php get_template_part( 'partials/_breadcrumbs' ); ?>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-margin-x article-full">
            <div class="cell medium-offset-1 medium-3 article-meta">
                <?php $person = get_field( 'person' ); ?>
                <img class="person-image"
                     src="<?= $person['image']['sizes']['thumbnail']; ?>" alt="<?= $person['name']; ?>"/>

                <p>
                    Submitted by<br/>
                    <b><?= $person['name']; ?></b><br/>
                </p>

                <p class="bio">
                    <?= $person['short_bio']; ?>
                </p>
            </div>
            <div class="cell medium-7 small-expanded">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>

        </div>
    </div>

<?php get_template_part( 'partials/_share' ); ?>

<?php get_footer();
