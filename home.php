<?php get_header(); ?>

<?php $hero = get_field('home_featured', 'options'); ?>
<div class="home hero">
    <div class="grid-container home-topic">
        <div class="grid-y grid-margin-y align-justify home-hero-text">
            <div class="cell auto text-center">
                <h1><?= $hero['title']; ?></h1>
                <?= $hero['text']; ?>

                <a href="<?= $hero['url']; ?>" class="button violet">Learn More</a>
            </div>
            <div class="cell shrink align-self-middle">
                <p class="home-bottom"><?= $hero['bottom_text']; ?></p>
            </div>
        </div>
    </div>
    <div class="background" style="background-image: <?= "url('" . $hero['image']['sizes']['large'] . "');"; ?>"></div>
</div>

<div>
    <div class="expanded row">
        <div class="small-12 medium-6 column background-green">
            <div class="row align-right">
                <div class="column medium-8 box-colored">
                    <h2>What is Year of Open</h2>
                    <p>The Year of Open is a global focus on open processes, systems, and tools, created through collaborative approaches, that enhance our education, businesses, governments, and organizations.<br /><br />
                    </p>

                    <div class="row align-spaced text-center">
                        <div class="column">
                            <a href="/what-is-the-year-of-open/" class="button orange">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-12 medium-6 column background-blue">
            <div class="row align-left">
                <div class="column medium-8 box-colored">
                    <h2>Get Involved</h2>
                    <p>We want to hear from you during the Year of Open.  What information, tools, project and resources have you created? Is there something you’ve accomplished that you’d like to share?  With your contribution and involvement, we can elevate the Year of Open.
                    </p>

                    <div class="row align-spaced text-center">
                        <div class="column">
                            <a href="/get-involved/" class="button green">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php /*

    <div class="background-gradient-greenLight home-video-content">
        <div class="row align-center">
            <div class="column medium-7">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/dXXaHBV5Hhg" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="background-gradient-blueDark home-cards">
        <div class="row align-spaced">
            <?php while ( have_rows('home_stories', 'options') ) : the_row(); ?>
                <div class="column small-12 medium-3 large-2">
                    <div class="home-card" style="background-image: <?php echo "url('" . get_sub_field('image')['sizes']['card'] . "');"; ?>">
                        <a href="<?php the_permalink(get_sub_field('link')->ID); ?>"><?php the_sub_field('title'); ?></a>
                    </div>
                </div>

            <?php endwhile ;?>
        </div>
    </div>

 */ ?>

    <div class="background-violet color-white home-social">
        <div class="row align-justify">
            <div class="small-12 medium-6 column">
                <h2>Follow the trending topic</h2>
                <p>Use #yearofopen and join the discussion</p>
            </div>
            <div class="small-12 medium-4 column text-right">
                <a class="home-social-icon" href="https://www.facebook.com/yearofopen/"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/facebook-follow.svg"/></a>
                <a class="home-social-icon" href="https://twitter.com/oeconsortium"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/twitter-follow.svg"/></a>
            </div>

            <!-- <div class="small-12 medium-10 column"> -->
                <?php foreach (get_tweets() as $tweet) : ?>
                    <div class="small-12 medium-3 column">
                        <?php echo do_shortcode("[tweet id='$tweet']"); ?>
                    </div>
                <?php endforeach; ?>
            <!-- </div> -->
        </div>
    </div>

    <div class="grid-container">
        <div class="cell expanded home-social-partners">
            <h2>Partners</h2>
            <?php get_template_part('partials/home-slider'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
