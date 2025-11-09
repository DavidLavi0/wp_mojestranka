<?php get_header(); ?>

<main>

    <!-- HERO / O NÁS -->
    <section id="o-nas" class="section about">
        <div class="container">
            <h1><?php the_field('hero_nadpis_o_nas'); ?></h1>
            <p><?php the_field('hero_text_o_nas'); ?></p>
        </div>
    </section>

    <!-- SLUŽBY -->
    <section id="sluzby" class="section services">
        <div class="container">
            <h2><?php the_field('hero_nadpis_sluzby'); ?></h2>
            <p><?php the_field('hero_text_sluzby'); ?></p>
        </div>
    </section>

    <!-- INFO -->
    <section id="info" class="section info">
        <div class="container">
            <h2><?php the_field('hero_nadpis_info'); ?></h2>
            <p><?php the_field('hero_text_info'); ?></p>

            <?php if (get_field('iframe')) : ?>
                <div class="iframe-wrapper">
                    <?php the_field('iframe'); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- GALERIE -->
    <section id="galerie" class="section gallery">
        <div class="container">
            <h2><?php the_field('hero_nadpis_galerie'); ?></h2>
            <div class="gallery-images">
                <?php if (get_field('hero_img1')): ?>
                    <img src="<?php the_field('hero_img1'); ?>" alt="Galerie 1">
                <?php endif; ?>

                <?php if (get_field('hero_img2')): ?>
                    <img src="<?php the_field('hero_img2'); ?>" alt="Galerie 2">
                <?php endif; ?>

                <?php if (get_field('hero_img3')): ?>
                    <img src="<?php the_field('hero_img3'); ?>" alt="Galerie 3">
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
