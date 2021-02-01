<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">


		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css">
		<!-- font awesome 5.15.2 -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://use.typekit.net/exe6qca.css">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
		<!-- 横スクロール swiperのCSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
		<!-- 横スクロール swiperのCSS 修正用 -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/swiper_responsive.min.css">
		<!-- ポップアップ動画 lity -->

		<script src="<?php echo get_template_directory_uri(); ?>/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/lity.min.css"/>
		<script src ="<?php echo get_template_directory_uri(); ?>/dist/lity.min.js"></script>

		<!-- ＃リンクのスムーズスクロール -->
    <script>
      $(function(){
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#sc"]').click(function() {
          // スクロールの速度
          var speed = 400; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
    </script>

		<?php
		 	wp_enqueue_script('jquary');
			wp_head();
		?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<!--トップページのみメイン画像あり-->
		<?php if ( is_home() ): ?>
		<div class="bg-video-wrap">
			<video id="player" muted autoplay loop>
				<source src="<?php echo get_template_directory_uri(); ?>/movie/YouTube035.mp4" type="video/mp4">
				<p>video要素がサポートされていないブラウザでご覧になっています。</p>
			</video>

			<!-- 動画の上に透過の黒いボックスを重ねる　-->
			<div class="overlay"></div>
			<div class="logo_box">
				<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="SQUARE WHITE"></a></h1>
			</div>

			<div class="menu_list">
				<ul>
					<li class="text_link"><a href="#sc_concept">CONCEPT</a></li>
					<li class="text_link"><a href="#sc_movie">MOVIE</a></li>
					<li class="text_link"><a href="#sc_topics">TOPICS</a></li>
					<li class="text_link"><a href="#sc_about">ABOUT</a></li>
				</ul>
			</div>
			<p class="small_btn contact_btn"><a href="#contact"><span class="btn_text">CONTACT</span></a></p>

		</div>
		<?php endif; ?>
