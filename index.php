<?php get_header(); ?>

    <main>
        <article>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title() ?></h2>

            <p><?php the_content() ?></p>

            <?php endwhile; else : ?>
                <h2>Error 404</h2>
                <p>Es können keine Posts geladen werden.</p>
            <?php endif; ?>
        </article>
    </main>

<?php get_footer(); ?>