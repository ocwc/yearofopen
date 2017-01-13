<?php get_header(); ?>

<div class="home">
    <div class="row align-center home-topic color-gold">
            <div class="small-12 columns">
                <h1>January Open Perspective</h1>
                <h2>What is Open Education</h2>
            </div>
            <div class="column medium-10 text-center home-topic-text">
                <p>As we look forward to the Year of Open, OEC reached out to respected leaders around the world to get their thoughts on open education and where they see open education in the next ten years.  As experts in their respective fields, collectively their responses led to a truly global perspective of open education. To read the full posts, click the links below to jump to each expert’s viewpoint.</p>
            </div>
            <div class="column medium-10 home-topic-text">
                <p>
                    <a href="/what-is-open-education/#baroud">Dr. Fawzi Baroud</a>, Assistant Vice President for Information Technology, Notre Dame University, Lebanon<br />

                    <a href="/what-is-open-education/#cox">Dr. Glenda Cox</a>, Senior Lecturer, University of Cape Town, South Africa<br />

                    <a href="/what-is-open-education/#rao">Allen Rao</a>, Global Business Director, Netease Online Open Courses, China<br />

                    <a href="/what-is-open-education/#smith">Dr. Peter Smith</a>, Orkand Chair, Professor of Innovative Practices in Higher Education, University of Maryland University College, United States<br />

                    <a href="/what-is-open-education/#touze">Sophie Touze</a>, Ministry of National Education, Higher Education and Research, VetAgroSup - Campus Lyon, EUREKA Moment<br />
                </p>

            </div>


            <div class="small-12 text-center">
                <a href="/what-is-open-education/" class="button green">Read All Interviews</a>
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
            <div class="column small-6 medium-2 home-card home-card-education">
                <a href="/open-education/">Open Education</a>
            </div>
            <div class="column small-6 medium-2 home-card home-card-oer">
                <a href="/what-are-open-educational-resources/">Open Educational Resources</a>
            </div>
            <div class="column small-6 medium-2 home-card home-card-access">
                <a href="/what-is-open-access/">Open Access</a>
            </div>
            <div class="column small-6 medium-2 home-card home-card-software">
                <a href="/what-is-open-source-software/">Open Source Software</a>
            </div>
            <div class="column small-6 medium-2 home-card home-card-licensing">
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
                    <div class="small-6 medium-3 column">
                        <?php echo do_shortcode("[tweet id='$tweet']"); ?>
                    </div>
                <?php endforeach; ?>
            <!-- </div> -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
