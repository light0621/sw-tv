<?php get_header(); ?>

		<section id="sc_concept" class="cont_wrap concept">
			<h2 class="section_ttl">CONCEPT</h2>
			<p class="ja-ttl">想い</p>

			<div class="flex_wrapper">
				<div class="column2_left column2_box">
					<img src="<?php echo get_template_directory_uri(); ?>/image/concept_sample.jpg" alt="">
				</div>
				<div class="column2_right column2_box">
					<h3>コンセプトキャッチコピーがはいります</h3>
					<p class="plane_txt">
						テキストテキストテキスト。テキストテキストテキスト。テキストテキストテキスト。<br>
						テキストテキストテキスト。テキストテキストテキスト。テキストテキストテキスト。テキストテキストテキスト。テキストテキストテキスト。テキストテキストテキスト。テキストテキストテキスト。
						<br>
						<br>
						テキストテキストテキスト。テキストテキストテキスト。
					</p>
				</div>
			</div>
		</section>

		<section id="sc_movie" class="cont_wrap movie">
			<h2 class="section_ttl">MOVIE</h2>
			<p class="ja-ttl">空撮動画</p>
			<div class="swiper-container">
				<ul class="swiper-wrapper">
					<?php
					if (have_posts()):
						while ( have_posts() ): the_post();
					?>
					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube019.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube019_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date"><?php the_time('Y年n月j日'); ?></p>
								<p class="movie_ttl"><?php the_title(); ?></p>
							</div>
						</a>
					</li>
					<?php
						endwhile;
					endif;
					?>

					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube021.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube021_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date">2020.01.01</p>
								<p class="movie_ttl">動画のタイトルが入ります</p>
							</div>
						</a>
					</li>

					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube023.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube023_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date">2020.01.01</p>
								<p class="movie_ttl">動画のタイトルが入ります</p>
							</div>
						</a>
					</li>

					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube034.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube034_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date">2020.01.01</p>
								<p class="movie_ttl">動画のタイトルが入ります.動画のタイトルが入ります</p>
							</div>
						</a>
					</li>
					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube026.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube026_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date">2020.01.01</p>
								<p class="movie_ttl">動画のタイトルが入ります</p>
							</div>
						</a>
					</li>
					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube025.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube025_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date">2020.01.01</p>
								<p class="movie_ttl">動画のタイトルが入ります.動画のタイトルが入ります</p>
							</div>
						</a>
					</li>
					<li class="swiper-slide img_cont">
						<a href="<?php echo get_template_directory_uri(); ?>/movie/YouTube033.mp4" data-lity="data-lity">
							<img src="<?php echo get_template_directory_uri(); ?>/image/YouTube033_Moment.jpg" alt="">
							<div class="txt_box">
								<p class="date">2020.01.01</p>
								<p class="movie_ttl">動画のタイトルが入ります</p>
							</div>
						</a>
					</li>
				</ul>

				<div class="swiper-button-prev"></div>
    		<div class="swiper-button-next"></div>
		</div>


		</section>
		<section id="sc_topics" class="cont_wrap topics">
			<h2 class="section_ttl">TOPICS</h2>
			<p class="ja-ttl">ブログやお知らせ</p>
			<div class="flex_wrapper">
				<!-- ここから1記事　-->
				<?php
			 	if (have_posts()):
					while(have_posts()):the_post();
				?>
				<a class="clumn3_left column3_box" href="<?php echo get_permalink(); ?>">
					<div class="img_box">
						<img src="<?php echo get_template_directory_uri(); ?>/image/topics_sample1.jpg" alt="">
					</div>
					<time class="date" datetime="<?php the_time('Y,m,d'); ?>"><?php the_time('Y年m月d日');?></p>
					<p class="topics_ttl"><?php the_title(); ?></p>
				</a>
				<?php
					endwhile;
				endif;
				?>
				<!--ここまで-->

			</div><!-- flex_wrapper -->

			<div class="small_btn next_btn">
				<a href="#">一覧へ<i class="fas fa-chevron-right"></i></a>
			</div>

		</section>

		<?php get_footer(); ?>
