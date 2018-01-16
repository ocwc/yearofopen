<div class="share">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell expanded text-center">
                <h2>Join the discussion by sharing this page</h2>
                <h4>Use #yearofopen hashtag to follow the latest topics in Year of Open 2018</h4>
            </div>
            <div class="cell expanded text-center">
                <a class="social-icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Share on Facebook" />
                </a>
                <a class="social-icon" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Share on Twitter" />
                </a>
                <a class="social-icon" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/email.svg" alt="Share via Email" />
                </a>
            </div>
        </div>
    </div>
</div>
