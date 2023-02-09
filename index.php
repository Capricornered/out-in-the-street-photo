<?php
    get_header();
?>

<main>
    <section id="hero">
        <img src="<?php header_image(); ?>">
        <div class="content">
            <h1>
                Exploring Richmond<br>and Beyond
            </h1>
            <a class="button" href="latest-photos">Latest Photos</a>
        </div>
    </section>
    <section id="about">
			<?php dynamic_sidebar( 'index-about-image' ); ?>
            <div class="content">
			    <?php dynamic_sidebar( 'index-about-content' ); ?>
            </div>
    </section>
    <section id="contact-form">
        <div class="container">
            <div class="content">
                <?php dynamic_sidebar( 'index-contact-content' ); ?>
            </div>
            <?php dynamic_sidebar( 'index-contact-form' ); ?>
        </div>
    </section>
</main>

<?php
    get_footer();
?>