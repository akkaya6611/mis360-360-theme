<?php get_header(); ?>
<main id="primary" class="site-main">
<div class="mis360-360-container" style="padding: 100px 0;">
<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
echo "<h1>" . get_the_title() . "</h1>";
the_content();
endwhile;
endif;
?>
</div>
</main>
<?php get_footer(); ?>
