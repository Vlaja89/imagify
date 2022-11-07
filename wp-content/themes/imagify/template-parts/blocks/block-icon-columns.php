<?php

$className = 'block-icons';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
            
<?php if( have_rows('block_icon_columns') ): ?>
    <div class="<?php echo esc_attr($className); ?>">

        <div class="row flex-wrap align-start">
            <?php if( have_rows('block_icon_columns') ): ?>
                <?php while( have_rows('block_icon_columns') ): the_row(); ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">

                        <a href="#">
                            <div class="single-icon-box hover-effect">
                                <figure>
                                    <figcaption>
                                        
                                            <div class="icon">
                                                <img src="<?php the_sub_field('block_icon_icon'); ?>" alt="">
                                            </div>
                                            <div class="title">
                                                <h4><?php the_sub_field('block_icon_title'); ?></h4>
                                            </div>
                                            <div class="desc">
                                                <p><?php the_sub_field('block_icon_description'); ?></p>
                                            </div>
                                            <div class="green-arrow">
                                                <img src="<?php echo get_theme_file_uri('dist/img/green-arrow.svg') ?>" alt="">
                                            </div>

                                    </figcaption>			
                                </figure>
                            </div>
                        </a>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
    </div>
<?php endif; ?>