<?php
/*
Template Name: Full Width
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="columns <?php echo CONTAINER_CLASSES; ?>">
	  <div class="inner">
		<?php roots_main_before(); ?>
		  <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
			<?php roots_loop_before(); ?>
			<?php get_template_part('loop', 'page'); ?>
			<?php roots_loop_after(); ?>
		  </div><!-- /#main -->
		<?php roots_main_after(); ?>
	  </div><!-- /#inner -->		
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>