<?php

get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image">
        <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
          <source src="<?php echo get_theme_file_uri('/images/blueprints.mp4') ?>" type="video/mp4">
        </video>
  </div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">All Trade</h1>
    <div class="page-banner__intro">
      <p>Active Trade</p>
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li><?php 
    }
    echo paginate_links();
  ?>
</div>

<?php get_footer();

?>