<?php
/*
Template Name: Custom
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="columns <?php echo CONTAINER_CLASSES; ?>">
	  <div class="inner">
		<?php roots_main_before(); ?>
		  <div id="main" class="left <?php echo MAIN_CLASSES; ?>" role="main">
			<?php roots_loop_before(); ?>
			<?php get_template_part('loop', 'page'); ?>
			<?php roots_loop_after(); ?>
		  </div><!-- /#main -->
		<?php roots_main_after(); ?>
		<?php roots_sidebar_before(); ?>
		  <aside id="sidebar" class="right <?php echo SIDEBAR_CLASSES; ?>" role="complementary">
		  <?php roots_sidebar_inside_before(); ?>
			<?php get_sidebar(); ?>
		  <?php roots_sidebar_inside_after(); ?>
		  </aside><!-- /#sidebar -->
		<?php roots_sidebar_after(); ?>
	  </div><!-- /#inner -->
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>