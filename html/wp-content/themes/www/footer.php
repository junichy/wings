
    <!-- cv -->
    <?php get_template_part('parts/sec_cv'); ?>

    <!-- footer -->
    <?php get_template_part('parts/sec_footer'); ?>
    
    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/animation.js"></script>
    
    <!-- 個別JS -->
    <?php if(is_front_page()): ?>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>
    <?php elseif(is_archive()): ?>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/archive.js"></script>
    <?php elseif(is_page(array('preschool', 'bilingual','kinder', 'elementary', 'advanced', 'kinder_bilingual'))): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/course.js"></script>
    <?php elseif(is_page('english') || is_parent_slug() === 'english'): ?>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/english.js"></script>
    <?php endif; ?>
    
    <!-- Swiper -->
    <?php if(is_front_page() || is_archive() || is_page(array('ikejiri','gakugei','sakurashinmachi','gallery'))): ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js" integrity="sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
    <?php endif; ?>

    <?php wp_footer(); ?>

  </body>

</html>