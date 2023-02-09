<?php
    get_header();
?>

<main>
    <section id="banner">
        <div class="container">
            <?php dynamic_sidebar( 'gallery-banner' ); ?>
        </div>
    </section>
    <section id="main-gallery">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
        <hr>
        <?php
            wp_nav_menu(
                array(
                    "menu" => "richmond",
                    "container" => "",
                    "theme_location" => "richmond",
                )
            );
            ?>
    </section>
</main>

<?php
    get_footer();
?>