<?php get_header()?>

 

<div class="hero-section" style="background: url('<?php bloginfo('stylesheet_directory');?>/img/hero-image.png') center center/cover"> 
    <div class="hero-content container-md">
    <h1>We Provide <span class="highlight-hero">Consulting</span> Services to Businesses and Government Agencies in Nigeria</h1>
    <p>Based in Nigeria, we provide bespoke consulting services to small to medium size businesses and government agencies.</p>
    <a class="btn-hero" href="<?php echo get_bloginfo('url').'/contact'; ?>">Contact Us</a>
  </div>
  </div>

  <div class="services">
    <div class="services-wrap"> 
    <p class="services-heading text-prim">OUR SERVICES</p>
    <h2 class="text-sec">We Offer The Best Services</h2>
    <p class="text-color">We offer bespoke services ranging from training to management.</p>
  </div>

  <div class="cards container-lg">
    <div class="card-info">
    <div class="info-img">
    <img src="<?php bloginfo('stylesheet_directory');?>/img/eco.svg" />
    </div>
    <h5>Environmental Management</h5>
    <p class="text-color">We act to safeguard nature from potentially damaging business operations.</p>
      <a href="<?php echo get_bloginfo('url').'/environmental-management'; ?>" class="btn">Read More</a>
    </div>
    <div class="card-info">
    <div class="info-img">
    <img src="<?php bloginfo('stylesheet_directory');?>/img/agreement.svg" />
    </div>
    <h5>Procurement Management</h5>
    <p class="text-color">We ensure that everything is in place when it is needed. </p>
      <a href="<?php echo get_bloginfo('url').'/procurement-management'; ?>" class="btn">Read More</a>
    </div>
    <div class="card-info">
    <div class="info-img">
    <img src="<?php bloginfo('stylesheet_directory');?>/img/worldwide.svg" />
    </div>
    <h5>Information Systems</h5>
    <p class="text-color">We provide cutting edge technology to assist in your business operations. </p>
      <a href="<?php echo get_bloginfo('url').'/information-systems'; ?>" class="btn">Read More</a>
    </div>
    <div class="card-info">
    <div class="info-img">
    <img src="<?php bloginfo('stylesheet_directory');?>/img/communication.svg" />
    </div>
    <h5>Telecommunication</h5>
    <p class="text-color">We provide robust telecommunication services for businesses to operate successfully.</p>
      <a href="<?php echo get_bloginfo('url').'/telecommunication'; ?>" class="btn">Read More</a>
    </div>
    <div class="card-info">
    <div class="info-img specialist">
      <img src="<?php bloginfo('stylesheet_directory');?>/img/specialist.svg" alt="#">
    </div>
    <h5>Specialist Training</h5>
    <p class="text-color">We provide specialist training to prepare students for the IT industry.</p>
      <a href="<?php echo get_bloginfo('url').'/specialist-training'; ?>" class="btn">Read More</a>
    </div>
    <div class="card-info">
    <div class="info-img">
      <img src="<?php bloginfo('stylesheet_directory');?>/img/headhunting.svg" alt="#">
    </div>
    <h5>Specialist Recruitment</h5>
    <p class="text-color">We provice specialist recruitment for your company needs. </p>
      <a href="<?php echo get_bloginfo('url').'/specialist-recruitment'; ?>" class="btn">Read More</a>
    </div>
  </div>
</div>

<div class="our-mission">
  <div class="container-md mission-wrapper"> 
  <div class="mission-content">
  <p class="text-prim mission-p">OUR MISSION</p>
  <h1 class="text-sec mission-h1">What We Aim To Achieve</h1>
  <p class="mission-text">At Marm, our commitment is in delivering cutting edge solutions to business problems, we care about the environment and also in ensuring the best possible experience for our customers. We offer a range of servies from environmental management to training and recruitment. </p>
     
      <a href="<?php echo get_bloginfo('url').'/about-us'; ?>" class="text-decoration-underline read-more">Read More</a>
     
  </div>
  <div class="mission-img text-center">
    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/img/our-mission.jpg" alt="mission-image">
  </div>
</div>
</div>

 
    


<div class="news">
  <div class="news-wrapper text-center"> 
  <p class="text-prim my-2">LATEST NEWS</p>
  <h1 class="text-sec">Our Recent News</h1>
</div>
<div class="container-md">
  <div class="row">
      <?php 

      $featured = new WP_Query(array ('posts_per_page' => 3, 'post_type' => 'any',  'post__in'  =>  array(79, 83, 86)));

      if( $featured->have_posts() ):
        while( $featured->have_posts() ): $featured->the_post();
        ?>

<div class="col-sm-4">
    <div class="card border-0">
            <div class="date text-white">
              <p><?php echo get_the_date() ?></p>
            </div>
            <a href="<?php the_permalink(); ?>"><div class="card-img-top"> <?php the_post_thumbnail( 'large',  array( 'class'  =>  'img-fluid')); ?></div></a>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt();?></p>
            </div>
          </div>
          </div>

        <?php 
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
    </div>
  </div>
</div>
</div>

<div class="container-fluid cta" style="background: url('<?php bloginfo('stylesheet_directory');?>/img/Group 29.jpg') center center/cover">
  <div class=" cta-inner container d-flex  flex-column flex-md-row justify-content-start justify-content-md-between align-items-center h-100"> 
  <h3 class="text-white">Need To Reach Out To Us?</h3>
  <a class="btn btn-outline-light" href="<?php echo get_bloginfo('url').'/contact'; ?>">Contact Us</a>
</div>
</div>
<?php get_footer(); ?>
