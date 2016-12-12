<?php get_header(); ?>

<div class="home">
    <div class="row align-center home-topic color-gold">
            <div class="small-12 columns">
                <h1>Topic of The Month</h1>
                <h2>What is Open Education</h2>
            </div>
            <div class="column medium-10 text-center home-topic-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="small-12 text-center">
                <a href="#" class="button green">More Info</a>
            </div>
    </div>

    <div class="expanded row">
        <div class="small-6 column background-gradient-green">
            <div class="row align-right">
                <div class="column medium-8 box-colored">
                    <h2>What is Year of Open</h2>
                    <p>The Year of Open is a global focus on open processes, systems, and tools, created through collaborative approaches, that enhance our education, businesses, governments, and organizations. At its core, open is a mindset about the way we should meet collective needs and address challenges. It means taking a participative and engaging approach, whether to education, government, business or other areas of daily life. In its practical applications, open is about shared efforts and values to enhance people’s opportunities, understanding and experiences.
                    </p>

                    <div class="row align-spaced text-center">
                        <div class="column">
                            <a href="/what-is-the-year-of-open/" class="button violet">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-6 column background-gradient-violet">
            <div class="row align-left">
                <div class="column medium-8 box-colored">
                    <h2>Get Involved</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    </p>

                    <div class="row align-spaced text-center">
                        <div class="column">
                            <a href="#" class="button green">Learn More</a>
                        </div>
                        <div class="column">
                            <a href="#" class="button green">Download Logo</a>
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
            <div class="column medium-2 home-card home-card-education">
                <a href="/what-are-open-educational-resources/">Open Education</a>
            </div>
            <div class="column medium-2 home-card home-card-access">
                <a href="/what-is-open-access/">Open Access</a>
            </div>
            <div class="column medium-2 home-card home-card-software">
                <a href="#">Open Source Software</a>
            </div>
            <div class="column medium-2 home-card home-card-licensing">
                <a href="/what-are-open-licenses/">Open Licenses</a>
            </div>
        </div>
    </div>

    <div class="background-gradient-blue color-white home-social">
        <div class="row align-center">
            <div class="medium-10 column text-center">
                <h2>Open Education</h2>
                <p>Use #yearofopen and join the discussion</p>
            </div>
            <div class="medium-10 column">
                <?php foreach (get_tweets() as $tweet) : ?>
                    <div class="small-6 medium-3 columns">
                        <?php echo do_shortcode("[tweet id='$tweet']"); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
