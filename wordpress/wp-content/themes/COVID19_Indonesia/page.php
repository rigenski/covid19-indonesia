<?php

$query = new WP_Query([
    'post_per_page' => 10
])

?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if (get_the_title() == "Contact") : ?>
                    <div class="header">
                <h1 class="entry-title">Contact</h1>
                    </div>
                    <div class="contact">
                        <form class="form">
                            <div>

                                <input type="text" placeholder="Your Name ..">
                            </div>
                            <div>

                                <input type="text" placeholder="Email ...">
                            </div>
                            <div>

                                <textarea id="" cols="30" rows="10" placeholder="Your Messages ..."></textarea>
                            </div>
                            <div class="btn">
                                <button class="contact-submit">Submit</button>
                                <button class="clear-submit">Clear</button>
                            </div>
                        </form>
                    </div>
                <?php endif ?>
                <?php if (get_the_title() == "News") : ?>
                    <div class="header">
                <h1 class="entry-title">Artikel Terbaru</h1>
            </div>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <article>
                    <div class="thumbnail">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail() ?>
                    </a>
                    </div>
                    <div class="information">
                        <h2 class="the-title">
                        <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                        </a>                    
                    </h2>
                        <div class="the-excerpt"><?php the_excerpt() ?></div>
                        <div class="detail">Posted by <b><?php the_author() ?></b> on  <b><?= get_the_date() ?></b></p>
                    </div>
                </article>
            <?php endwhile; endif; ?>
                <?php endif ?>
        <?php endwhile; endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>