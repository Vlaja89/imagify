<!-- Title -->
<?php $BigBannerTitle = get_sub_field('big_banner_title'); ?>

<!-- Content -->
<?php $BigBannerContent = get_sub_field('big_banner_content'); ?>

<!-- Image -->
<?php $BigBannerImage = get_sub_field('big_banner_image'); ?>

<!-- Background -->
<?php $BigBannerBgImage = get_sub_field('big_banner_background_image'); ?>

<section id="big-banner" style="background-image: url('<?php echo $BigBannerBgImage ?>');">
    <div class="container">
        <div class="row flex-wrap align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-lg-1 order-2">

                <!-- Title -->
                <?php if( $BigBannerTitle ): ?>
                    <div class="bann-title">
                        <h1><?php echo $BigBannerTitle ?></h1>
                    </div>
                <?php endif; ?>

                <!-- Content -->
                <?php if( $BigBannerContent ): ?>
                    <div class="bann-desc">
                        <?php echo $BigBannerContent ?>
                    </div>
                <?php endif; ?>

                <!-- Button -->
                <?php if( get_sub_field('big_banner_button') ): ?>
                    <?php 
                    $link = get_sub_field('big_banner_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>
                        <button type="button" class="custom-btn" onclick="location.href='<?php echo esc_url( $link_url ); ?>';"><?php echo esc_html( $link_title ); ?> 
                            <img src="<?php echo get_theme_file_uri('dist/img/white-right-arrow.svg') ?>" alt="">
                        </button>
                    <?php endif; ?>
                <?php endif; ?>
                <!-- End Button -->

            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center order-lg-2 order-1">
                <img src="<?php echo $BigBannerImage ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>