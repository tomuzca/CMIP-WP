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
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('project'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Projects Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>
      <div class="container container--narrow page-section">
      <div class="dashboard-buttons">
        <a href="#bid-information" class="dashboard-btn">Bid Information</a>
        <a href="#line-items" class="dashboard-btn">Line Items</a>
        <a href="#documents" class="dashboard-btn">Documents</a>
        <a href="#addenda-emails" class="dashboard-btn">Addenda/Emails</a>
        <a href="#qa" class="dashboard-btn">Q&A</a>
        <a href="#prospective-bidders" class="dashboard-btn">Prospective Bidders</a>
        <a href="#subcontractor-ads" class="dashboard-btn">Subcontractor Ads</a>
        <a href="#bid-results" class="dashboard-btn">Bid Results</a>
        <a href="#awards" class="dashboard-btn">Awards</a>
      </div>
    </div>
      <div class="generic-content"><?php the_content(); ?>
      </div>
      <?php

        $relatedTrades = get_field('related_trades');

        if ($relatedTrades) {
          echo '<hr class="section-break">';
          echo '<h2 class="headline headline--medium">Related Trade(s)</h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedTrades as $trade) { ?>
            <li><a href="<?php echo get_the_permalink($trade); ?>"><?php echo get_the_title($trade); ?></a></li>
          <?php }
          echo '</ul>';
        }

      ?>
    </div>
    
    <style>
      .dashboard-buttons {
        display: flex;
        gap: 5px;
        margin: -50px -50px;
        overflow-x: auto;
      }

      .dashboard-btn {
        background: #8b8b8bff;
        color: white;
        padding: 8px 12px;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 600;
        font-size: 12px;
        transition: all 0.3s ease;
        text-align: center;
        white-space: nowrap;
        flex-shrink: 0;
      }

      .dashboard-btn:hover {
        background: #005177;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      }
    </style>

  <?php }

  get_footer();

?>