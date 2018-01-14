<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="hidden-xs header-text">
                    <?php
                    if (is_active_sidebar('paprikas2018_header_left')) :
                        dynamic_sidebar('paprikas2018_header_left');
                    endif
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <?php
                    // Display Logo
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    if(has_custom_logo()){
                        echo '<img class="img-responsive center-block" src="' . esc_url($logo[0]) . '">';
                    }
                ?>
            </div>
            <div class="col-sm-4">
                <div class="hidden-xs header-text text-right">
                    <?php
                    if (is_active_sidebar('paprikas2018_header_right')) :
                        dynamic_sidebar('paprikas2018_header_right');
                    endif
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="paprikas2018-top-slider">
    <?php
    if (is_active_sidebar('paprikas2018_top_slider')) :
        dynamic_sidebar('paprikas2018_top_slider');
    endif
    ?>
</div>


<nav class="navbar navbar-default navbar-static-top hidden-xs" id="paprikas2018-desktop-navbar">
    <div class="container">
        <div id="navbar9" class="navbar-collapse collapse">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav navbar-nav'
            ));
            ?>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container -->
</nav>