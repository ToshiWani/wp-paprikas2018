<?php
/*
Template Name: Two Columns
*/
?>


<!doctype html>
<html lang="en">
<?php get_header(); ?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 headline">
                <?php
                if (get_field('headline')):
                    echo the_field('headline');
                endif;
                ?>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 blah">
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