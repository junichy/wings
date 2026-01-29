<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-589VFZG');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8" />
	  <title></title>
	  <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "Wings Global Home",
      "url" : "https://www.wingskidsfamily.com/"
    }
  </script>
	  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" />
	  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
	  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.ico" />
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" sizes="any"><!-- 32×32 -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"><!-- 180×180 -->
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg">

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    
    <!-- 個別CSS -->
    <?php if(is_front_page()): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" />
    <?php elseif(is_parent_slug() === 'recruit'): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/recruit.css" />
    <?php elseif(is_parent_slug() === 'application'): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/application.css" />
    <?php elseif(is_parent_slug() === 'english'): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/english.css" />
    <?php elseif(is_page(array('ikejiri', 'gakugei','sakurashinmachi'))): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/school.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/gallery.css" />
    <?php elseif(is_page(array('preschool', 'bilingual','kinder', 'elementary', 'advanced', 'kinder_bilingual'))): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/course.css" />
    <?php elseif(is_page() || is_parent_slug()): ?>
      <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css" /> -->
      <?php
      $page = get_post( get_the_ID() );
      $slug = $page->post_name;
      ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $slug; ?>.css" />
    <?php elseif(is_post_type_archive('teacher')): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/teacher.css" />
    <?php elseif(is_archive()): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/archive.css" />
    <?php elseif(is_single()): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css" />
    <?php elseif(is_404()): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/404.css" />
    <?php else: ?>
    <?php endif; ?>

    <!-- Swiper -->
    <?php if(is_front_page() || is_archive() || is_page(array('ikejiri', 'gakugei','sakurashinmachi', 'gallery'))): ?>
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" integrity="sha512-wbWvHguVvzF+YVRdi8jOHFkXFpg7Pabs9NxwNJjEEOjiaEgjoLn6j5+rPzEqIwIroYUMxQTQahy+te87XQStuA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
    <?php endif; ?>

    <!-- jquery・jquery UIの読み込み -->
    <script src="//code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>

	  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T9Q0LWW2RZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-T9Q0LWW2RZ');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-44157275-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-44157275-2');
    </script>

    <?php wp_head(); ?>
    
  </head>

  <body>
	  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-589VFZG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- header -->
    <?php get_template_part('parts/sec_header'); ?>
    <!-- loader -->
    <!-- <?php get_template_part('parts/sec_loader'); ?> -->