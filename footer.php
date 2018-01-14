<footer class="footer">
    <div class="container">
        <div class="row hidden-xs">
            <div class="col-xs-12">
                <?php wp_nav_menu(array(
                    'theme_location'=>'footer',
                    'menu_class' => 'paprikas2018__footer-nav',
                    'items_wrap' => '<ul id="%1$s" class="%2$s list-inline">%3$s</ul>',
                    'walker' => new Walker_Nav_Menu_With_Separator()
                )); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php
                if (is_active_sidebar('paprikas2018_footer_left')) :
                    dynamic_sidebar('paprikas2018_footer_left');
                endif
                ?>
            </div>
            <div class="col-md-6">
                <?php
                if (is_active_sidebar('paprikas2018_footer_right')) :
                    dynamic_sidebar('paprikas2018_footer_right');
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
