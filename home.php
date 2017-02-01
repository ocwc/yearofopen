<?php get_header(); ?>

<div class="home">
    <div class="row align-center home-topic color-gold">
            <div class="small-12 columns">
                <h1>February Open Perspective</h1>
                <h2>What is Open Source Software?</h2>
            </div>

            <div class="column medium-10 text-center home-topic-text">
                <p>Open source software is software whose source code is available for anyone to inspect, customize, and enhance.  It is created by a worldwide community of developers and organizations, resulting in high quality, peer reviewed software that is responsive to user needs.</p>
            </div>

            <div class="small-12 text-center">
                <a href="/february-open-perspective/" class="button green">Learn More</a>
            </div>

    </div>

    <div class="expanded row">
        <div class="small-12 medium-6 column background-gradient-green">
            <div class="row align-right">
                <div class="column medium-8 box-colored">
                    <h2>What is Year of Open</h2>
                    <p>The Year of Open is a global focus on open processes, systems, and tools, created through collaborative approaches, that enhance our education, businesses, governments, and organizations.<br /><br />
                    </p>

                    <div class="row align-spaced text-center">
                        <div class="column">
                            <a href="/what-is-the-year-of-open/" class="button violet">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-12 medium-6 column background-gradient-violet">
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
            <div class="column small-12 medium-2 home-card home-card-education">
                <a href="/open-education/">Open Education</a>
            </div>
            <div class="column small-12 medium-2 home-card home-card-oer">
                <a href="/what-are-open-educational-resources/">Open Educational Resources</a>
            </div>
            <div class="column small-12 medium-2 home-card home-card-access">
                <a href="/what-is-open-access/">Open Access</a>
            </div>
            <div class="column small-12 medium-2 home-card home-card-software">
                <a href="/what-is-open-source-software/">Open Source Software</a>
            </div>
            <div class="column small-12 medium-2 home-card home-card-licensing">
                <a href="/what-are-open-licenses/">Open Licenses</a>
            </div>
        </div>
    </div>

    <div class="background-gradient-blue color-white home-social">
        <div class="row align-center">
            <div class="small-12 medium-10 column text-center">
                <h2>Open Education</h2>
                <p>Use #yearofopen and join the discussion</p>
            </div>
            <!-- <div class="small-12 medium-10 column"> -->
                <?php foreach (get_tweets() as $tweet) : ?>
                    <div class="small-12 medium-3 column">
                        <?php echo do_shortcode("[tweet id='$tweet']"); ?>
                    </div>
                <?php endforeach; ?>
            <!-- </div> -->

            <div class="small-12 medium-12 column text-center home-social-partners">
                <h2>Partners</h2>
                <?php get_template_part('partials/home-slider'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
