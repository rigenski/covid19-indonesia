<?php

$query = new WP_Query([
    'post_per_page' => 10
])

?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main">
            <div class="row">
                <div class="col">
                    <div class="mockup">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo.jpg" alt="">
                        <h3>Ayo Cuci Tangan dan Pakai Masker</h1>
                    </div>
                    <h1 class="entry-title">Each Selected Editor</h1>
                    <div class="editor">
                        <div class="row">
                            <div class="col">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                        <div class="detail">Posted by <b><?php the_author() ?></b> on  <b><?= get_the_date() ?></b></p>
                    </div>
                </article>
            <?php endwhile; endif; ?>
                            </div>
                            <div class="col">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                        <div class="detail">Posted by <b><?php the_author() ?></b> on  <b><?= get_the_date() ?></b></p>
                    </div>
                </article>
            <?php endwhile; endif; ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col news">
                <h1 class="entry-title">Artikel Kategori : <?php single_term_title(); ?></h1>
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
                        <div class="detail">Posted by <b><?php the_author() ?></b> on  <b><?= get_the_date() ?></b></p>
                    </div>
                </article>
            <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="contact">
                        <form class="form">
                            <h3 style="margin-bottom: 0.4em">Contact Form</h1>
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
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>