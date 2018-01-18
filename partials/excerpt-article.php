<div class="grid-x grid-margin-x article-excerpt">
    <div class="cell medium-offset-1 medium-3 article-meta">
        <?php $person = get_field('person'); ?>
        <img class="person-image"
             src="<?= $person['image']['sizes']['thumbnail']; ?>" alt="<?= $person['name']; ?>" />

        <p>
            Submitted by<br />
            <b><?= $person['name']; ?></b><br />
        </p>

        <p class="bio">
            <?= $person['short_bio']; ?>
        </p>
    </div>
    <div class="cell medium-7 small-expanded">
        <h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" >Read more ..</a>
    </div>

    <div class="cell medium-offset-1 medium-10 article-divider"></div>
</div>
