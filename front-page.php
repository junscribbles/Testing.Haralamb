<!DOCTYPE html>
<html lang="de-CH" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/lje1pdt.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <title><?php bloginfo('name') ;?></title>
    <?php wp_head() ;?>
</head>

<body <?php body_class() ;?>>
    <header>
        <section id="logo">
                <svg class="logo-w" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 572 115"><path d="M.88 72.93a.85.85 0 0 1 .38-1.6C12.49 70.71 49.14 69 81 65.84c32.51-3.2 64.33-5.74 95.54-18.2 27.39-10.93 54.13-23.75 60.67-24.2 18.37-1.23 34.61 43 45 39 8.21-3.18-23.9-51.55-10.8-60.7 7.49-5.26 29.06 9.53 59.34 25.67 29.39 15.72 97.57 43.12 124.14 50 69.84 18 117.07 15.64 117 15.56s-46.4 13-67.82 16.87c-24.16 4.47-35.23 6.52-63.19 3-11.26-1.4-34.42-9.48-57.52-20.76-35.37-17.26-55-31-61.19-26.42-5.12 3.82 1.63 32.34-3.18 38.94s-23.8 9.8-29.88 6.59c-23.76-12.52-46.83-56.09-56.4-55.47-6.33.42-21.47 13.82-41.89 29.73a337.79 337.79 0 0 1-40.27 27.22 5 5 0 0 1-3 .61c-8.16-.9-46.65-5.37-81.2-15.69A502.93 502.93 0 0 1 .88 72.93Z"/><path d="M238.5 90.16c.08-7.66-6.35-13.87-14.36-13.88s-14.6 6.21-14.74 13.89 6.29 13.89 14.35 13.88 14.67-6.23 14.75-13.89Z"/></svg>
        </section>

        <section id="start">
            <h1 class="sitetitle"><?php bloginfo('name') ;?></h1>

            <h3><?php bloginfo('description') ;?></h3>

            <nav>
                <?php wp_nav_menu(array('theme_location' => 'hauptnavigation')) ;?>
            </nav>
        </section>

    </header>

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