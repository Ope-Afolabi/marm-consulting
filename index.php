<?php get_header()?>
<?php 

if(have_posts() ):
  while( have_posts() ): the_post();

  ?>

<div class="container mt-5">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="blog-title" href="<?php the_permalink(); ?>"><h2 class="text-sec"><?php the_title(); ?></h2></a>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link();?></p>
    <p>Categories: <?php the_category( ' ' );?></p>
    <p><?php the_tags('Tags: ', ', ' ); ?></p>
    <p class="m-0"><?php the_excerpt(); ?></p>
    </div>
  <?php 
  endwhile;
else:
  ?>

<div class="container">
  <p>There's nothing to display</p>
</div>

  <?php endif; ?>
<?php get_footer(); ?>
