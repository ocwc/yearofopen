<?php if ( ( is_singular() && $post->post_parent ) || ( is_singular() && get_post_type() === 'article' ) ) : ?>
    <div class="breadcrumbs">
        <a href="/" title="Main">Main</a>

        <?php if ( is_search() ) : ?>
            <span class="slash">/</span> <?php echo __( 'Search results', 'op' ); ?>
        <?php else : ?>
            <?php if ( 'project' === get_post_type() ) : ?>
                <span class="slash">/</span> <a href="/project/"><?php echo __( 'Projects', 'op' ); ?></a>
            <?php endif; ?>

            <?php if ( 'event' === get_post_type() ) : ?>
                <span class="slash">/</span> <a href="/event/"><?php echo __( 'Events', 'op' ); ?></a>
            <?php endif; ?>

            <?php if ( 'post' === get_post_type() ) : ?>
                <span class="slash">/</span> <a href="/news/"><?php echo __( 'News', 'op' ); ?></a>
            <?php endif; ?>

            <?php if ( is_singular() ) : ?>
                <?php if ( $post->post_parent ) : ?>
                    <?php $parents = get_post_ancestors( $post->ID ); ?>
                    <?php foreach ( $parents as $page ) : ?>
                        <span class="slash">></span> <a
                            href="<?= get_permalink( $page ); ?>"><?= get_the_title( $page ); ?>
                        </a>
                    <?php endforeach; ?>
                <?php elseif ( get_post_type() === 'article') : ?>
                    <?php $term = get_the_terms($post, 'perspective')[0]; ?>
                    <span class="slash">></span> <a
                        href="<?= get_term_link( $term ); ?>"><?= $term->name; ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
