<?php
while(have_posts()) {
    the_post(); ?>
    This is a page
    <h2><?php the_title()?></h2>
    <?php the_content(); ?>
<?php }

?>