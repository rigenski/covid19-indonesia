<?php get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main">   
            <div class="header">
                <h1 class="entry-title">Artikel Kategori : <?php single_term_title(); ?></h1>
                <div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
            </div>
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
                        <div class="the-excerpt"><?php the_excerpt() ?></div>
                        <div class="detail">Posted by <b><?php the_author() ?></b> on  <b><?= get_the_date() ?></b></p>
                    </div>
                </article>
            <?php endwhile; endif; ?>
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