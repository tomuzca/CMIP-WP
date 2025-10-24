<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image">
        <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
          <source src="<?php echo get_theme_file_uri('/images/blueprints.mp4') ?>" type="video/mp4">
        </video>
      </div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
      </div>  
    </div>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('trade'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Trades Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>
      <?php 
        $today = date('Ymd');
        $homepageProjects = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'project',
          'meta_key' => 'Project_Due_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'Project_Due_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            ),
            array(
              'key' => 'related_trades',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            )
          )
        ));

        while($homepageProjects->have_posts()) {
          $homepageProjects->the_post(); ?>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php
                $projectDate = new DateTime(get_field('Project_Due_date'));
                echo $projectDate->format('M')
              ?></span>
              <span class="event-summary__day"><?php echo $projectDate->format('d') ?></span>  
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                  } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
        <?php }
      ?>
    </div>

  <?php }

  get_footer();

?>