<?php
/*
Template Name: Two Columns
*/
?>


<!doctype html>
<html lang="en">
<?php get_header(); ?>

<body <?php body_class() ?>>
<?php include_once 'header-nav.php'; ?>
<div class="main-content">
    <div class="container">

        <!-- Headline -->
        <div class="row">
            <div class="col-xs-12 headline">
                <?php
                if (get_field('headline')):
                    the_field('headline');
                endif;
                ?>
                <hr />
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <div class="col-md-8 main-content__text">
                <?php
                if(have_posts()):
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode("[instagram-feed num=4 cols=2]") ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
</body>
</html>