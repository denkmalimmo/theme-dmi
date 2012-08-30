  </div><!-- /#body -->
    <?php roots_footer_before(); ?>
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
	  <?php 
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "http://" . $_SERVER['SERVER_ADDR'] . "/static/footer");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch); 
		echo $output;
	  ?>
    </footer>
    <?php roots_footer_after(); ?>
  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
</body>
</html>