<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                if (is_active_sidebar('paprikas2018_footer_left')) :
                    dynamic_sidebar('paprikas2018_footer_left');
                endif
                ?>
            </div>
            <div class="col-md-4">
                <?php
                if (is_active_sidebar('paprikas2018_footer_center')) :
                    dynamic_sidebar('paprikas2018_footer_center');
                endif
                ?>
            </div>
            <div class="col-md-4">
                <?php
                if (is_active_sidebar('paprikas2018_footer_right')) :
                    dynamic_sidebar('paprikas2018_footer_right');
                endif
                ?>
            </div>
        </div>

        <hr class="hidden-xs" />

        <div class="row row-vcenter hidden-xs">
            <div class="col-sm-9">
                <?php wp_nav_menu(array(
                    'theme_location'=>'footer',
                    'menu_class' => 'list-inline',
                    'walker' => new Walker_Nav_Menu_With_Separator()
                )); ?>
            </div>
            <div class="col-sm-3">
                <?php
                if (is_active_sidebar('paprikas2018_footer_logo')) :
                    dynamic_sidebar('paprikas2018_footer_logo');
                endif
                ?>
            </div>
        </div>
    </div>
</footer>

<?php
wp_nav_menu(array(
    'theme_location' => 'mobile',
    'container_class' => 'visible-xs',
    'container_id' => 'paprikas2018-mobile-navbar',
    'items_wrap' => '<div class="col-xs-12 navbar-inverse navbar-fixed-bottom"><div class="row">%3$s</div></div>',
    'walker' => new Walker_Nav_Menu_Mobile()
));
?>

<?php wp_footer(); ?>

<script>

    jQuery(document).ready(function () {
        jQuery('.main-content').css('visibility', 'visible');
    });

    sr.reveal('.panel-grid-cell');
    sr.reveal('.fdm-menu-content');
    sr.reveal('.fdm-section-header')
    sr.reveal('.fdm-item');
    sr.reveal('.sbi_item');
    sr.reveal('.footer');

</script>