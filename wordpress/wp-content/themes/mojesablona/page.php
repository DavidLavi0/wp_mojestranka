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

            <?php 
            $iframe = get_field('iframe');
            if( $iframe ): ?>
                <div class="iframe-wrapper">
                    <?php echo $iframe; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>


    <!-- GALERIE -->
    <section id="galerie" class="section gallery">
        <div class="container">
            <h2><?php the_field('hero_nadpis_galerie'); ?></h2>
            <div class="gallery-images">
                <?php 
                $images = ['hero_img1', 'hero_img2', 'hero_img3'];
                foreach ($images as $i => $field_name):
                    $img = get_field($field_name);
                    if ($img):
                        // Pokud je obrázek typu ARRAY (Image Array)
                        if (is_array($img)) {
                            $url = $img['url'];
                            $alt = $img['alt'];
                        // Pokud vrací ID
                        } elseif (is_numeric($img)) {
                            $url = wp_get_attachment_url($img);
                            $alt = get_post_meta($img, '_wp_attachment_image_alt', true);
                        // Pokud vrací URL
                        } else {
                            $url = $img;
                            $alt = 'Galerie ' . ($i+1);
                        }
                        ?>
                        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    <?php endif;
                endforeach;
                ?>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
