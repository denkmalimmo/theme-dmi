  </div><!-- /#body -->
    <?php roots_footer_before(); ?>
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
      <?php $a = file_get_contents("http://" . $_SERVER['SERVER_NAME'] . "/static/footer"); echo $a; ?>
    </footer>
    <?php roots_footer_after(); ?>
  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
</body>
</html>