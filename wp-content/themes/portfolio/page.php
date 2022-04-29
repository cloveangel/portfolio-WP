<?php

  get_header();

  while(have_posts()) {
    the_post();
     ?>

<h2 class="projectpageheadline"><?php the_title(); ?></h2>
<div id="about-page">
    <?php the_content(); ?>
    <!-- <div class="image_right clearfloat">
        <img src="<?php the_post_thumbnail_url(); ?>"
            alt="thumbnail for project">
    </div> -->

</div>

<?php }

  get_footer();

?>