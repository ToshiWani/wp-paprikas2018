<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 hidden-xs">
                <?php wp_nav_menu(array(
                    'theme_location'=>'footer',
                    'menu_class' => 'paprikas2018__footer-nav',
                    'items_wrap' => '<ul id="%1$s" class="%2$s list-inline">%3$s</ul>',
                    'walker' => new Walker_Nav_Menu_With_Separator()
                )); ?>
            </div>
            <div class="col-xs-12 visible-xs">
                <?php wp_nav_menu(array(
                    'theme_location'=>'footer',
                    'menu_class' => 'paprikas2018__footer-nav',
                    'items_wrap' => '<ul id="%1$s" class="%2$s list-unstyled">%3$s</ul>',
                )); ?>
            </div>
        </div>
        <hr />
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

<?php wp_footer(); ?>
