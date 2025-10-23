<?php

get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image">
        <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
          <source src="<?php echo get_theme_file_uri('/images/blueprints.mp4') ?>" type="video/mp4">
        </video>
  </div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Past Projects</h1>
    <div class="page-banner__intro">
      <p>Old Projects</p>
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
<?php
  
    $today = date('Ymd');
    $pastProjects = new WP_Query(array(
        'paged'=>get_query_var('paged', 1),
        //'posts_per_page' => 1,
        'post_type' => 'project',
        'meta_key' => 'project_due_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'project_due_date',
                'compare' => '<',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));

  while($pastProjects->have_posts()) {
    $pastProjects->the_post(); ?>
    <div class="event-summary">
      <a class="event-summary__date t-center" href="#">
        <span class="event-summary__month"><?php
          $projectDate = new DateTime(get_field('project_due_date'));
          echo $projectDate->format('M')
        ?></span>
        <span class="event-summary__day"><?php echo $projectDate->format('d') ?></span>  
      </a>
      <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
      </div>
    </div>
  <?php }
  echo paginate_links(array(
    'total' => $pastProjects->max_num_pages
));
?>
</div>

<?php get_footer();

?>