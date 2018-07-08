<!doctype html>
<html lang="en">
<?php get_header(); ?>

<body <?php body_class() ?> ontouchstart="">
<?php include_once 'header-nav.php'; ?>
<div class="main-content">
    <div class="container">
        <!-- Main Content -->
        <div class="row">
            <div class="col-xs-12 main-content__text">
                <?php
                if(have_posts()):
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
</body>
</html>
