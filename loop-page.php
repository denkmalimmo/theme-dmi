<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      <div class="page-header">
      	<h1><?php the_title(); ?></h1>
      </div>
	  <?php if(get_post_meta(get_the_ID(), 'fertigstellung', true)): ?>
		<ul class="fakten">
			<li><label>Sanierungsanteil:</label><span><?php  echo get_post_meta(get_the_ID(), 'afa', true); ?></span></li>
			<li><?php  echo get_post_meta(get_the_ID(), 'anzahl', true); ?></li>
			<li><?php  echo get_post_meta(get_the_ID(), 'fertigstellung', true); ?></li>
			<li><?php  echo get_post_meta(get_the_ID(), 'preise', true); ?></li>
			<li><?php  echo get_post_meta(get_the_ID(), 'sizes', true); ?></li>
			<li><?php  echo get_post_meta(get_the_ID(), 'archive', true); ?></li>
		<ul>
	  <?php endif; ?>	
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>