<?php

  get_header();

  while(have_posts()) {
    the_post();
     ?>

<h2 class="projectpageheadline"><?php the_title(); ?></h2>
<div id="singel-project-page">
    <div class="metabox">
        <p>
            <?php the_time('d F Y'); ?> <?php echo get_the_category_list(', '); ?>
        </p>
    </div>
    <?php the_content(); ?>

</div>

<?php }

  get_footer();

?>