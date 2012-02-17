<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <?php roots_post_inside_before(); ?>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php roots_entry_meta(); ?>
      </header>
      <div class="entry-content">
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
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        <?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
      </footer>
      <?php comments_template(); ?>
      <?php roots_post_inside_after(); ?>
    </article>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>