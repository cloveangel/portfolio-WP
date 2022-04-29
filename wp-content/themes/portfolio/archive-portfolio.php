<?php 
get_header(); ?>
<h2 class="projectpageheadline">My works</h2>
<div class="container container--narrow page-section">
    
    <?php
$projectsHome = new WP_Query(array(
'posts_per_page' => -1,
'post_type' => 'portfolio',
'orderby' => 'post_date',
'order' => 'DESC'
));
while($projectsHome->have_posts()) {
$projectsHome->the_post(); ?>
   <a href="<?php the_permalink(); ?>">
   <div class="projectpage porject-box">
    <p class="project-more project-more-page"><?php the_title(); ?></p>
        <img class="project-image project-image-page" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail for project">
        <p class="project-desc"><?php if(has_excerpt()){
        echo get_the_excerpt();
    }else{
    echo wp_trim_words(get_the_content(), 18); }?> </p>
       
    </div></a>

    <?php }
echo paginate_links();
?>
</div>
<?php
    get_footer();
?>