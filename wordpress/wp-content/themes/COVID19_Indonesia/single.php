<?php get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section>
                <h1><?php the_title() ?></h1>
                <div class="detail">Posted by <b><?php the_author() ?></b> on  <b><?= get_the_date() ?></b></p>
                <div class="thumbnail">
                            <?php the_post_thumbnail() ?>
                </div>
                <div class="content">
                    <?php the_content() ?>
                </div>
            </section>
            <?php endwhile; endif; ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>