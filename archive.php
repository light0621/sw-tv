<?php
/*
Template Name: single
Template Post Type: post,news
*/
?>

<?php get_header(); ?>

<section class="cont_wrap contact">
	<h2 class="section_ttl">TOPICS</h2>
	<p class="ja-ttl">ブログやお知らせ</p>

	<?php if(have_posts()):
		while(have_posts()):the_post(); ?>

		<div class="list_wrap">
			<a href="<?php echo get_permalink(); ?>">
				<p class="date"><?php the_time("Y年n月j日");?></p>
				<h3 class="topics_ttl"><?php the_title(); ?></h3>
				<i class="fas fa-angle-right"></i>
			</a>
		</div>

<?php endwhile;
endif; ?>

	<div class="small_btn back_btn">
		<a href="#"><i class="fas fa-chevron-left"></i>一覧へ戻る</a>
	</div>
</section>

<?php get_footer(); ?>
