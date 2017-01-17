<div class="orbit" role="region" aria-label="Year of Open Partners" data-orbit
     data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;"
    >
    <ul class="orbit-container">

        <?php $partners = new WP_Query(array(
                                        'post_type' => 'partner',
                                        'posts_per_page' => 100,
                                        'orderby' => 'rand'
                                ));
            $counter = 0;
        ?>

        <?php while ( $partners->have_posts() ) : $partners->the_post(); ?>
            <?php if ( $counter % 3 === 0 ) : ?>
                <li class="orbit-slide">
                    <div class="row">
            <?php endif; ?>

                        <div class="small-12 medium-4 columns partner__single">
                            <?php if ( get_field('partner_url') ) : ?>
                                <a href="<?php the_field('partner_url'); ?>"><?php the_post_thumbnail(); ?></a>
                            <?php else : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>


            <?php if ( $counter % 3 === 2 ) : ?>
                    </div>
                </li>
            <?php endif; ?>

            <?php $counter++; ?>
        <?php endwhile; ?>
    </ul>
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span> &#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span> &#9654;&#xFE0E;</button>

</div>
