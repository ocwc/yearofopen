<div class="small-6 medium-4 columns partner__single">
    <?php if ( get_field('partner_url') ) : ?>
        <a href="<?php the_field('partner_url'); ?>"><?php the_post_thumbnail('medium'); ?></a>
    <?php else : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
</div>
