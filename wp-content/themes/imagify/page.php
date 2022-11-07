<?php get_header(); ?>

<div id="wrapp">

    <?php if( have_rows('content') ):
        while ( have_rows('content') ) : the_row(); ?>

            <?php if( get_row_layout() == 'big_banner' ): ?>
            <!-- Big Banner -->

                <?php get_template_part('template-parts/banner/big-banner'); ?>

            <?php endif; ?>
            
            <?php if( get_row_layout() == 'custom_icon_blocks' ): ?>
            <!-- Custom Gutenberg Blocks -->

                <?php $IconBlockBgColor = get_sub_field('custom_icon_blocks_bg_color'); ?>

                <section id="custom-block" style="background-color: <?php echo $IconBlockBgColor ?>;">
                    <div class="container">

                        <?php the_content(); ?>

                    </div>
                </section>

            <?php endif; ?>

        <?php endwhile; ?>
        <?php else : ?>
    <?php endif; ?>


</div>

     
<?php get_footer(); ?>