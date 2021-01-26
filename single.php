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
	<div class="ttl_wrap">
		<p class="date"><?php echo get_the_date();?></p>
		<h3 class="topics_ttl"><?php the_title();?></h3>
	</div>
	<div class="topics_cont">

		<?php the_content();?>

	</div>
	<!-- topics_cont-->

<?php endwhile;
endif; ?>

	<div class="small_btn back_btn">
		<a href="#"><i class="fas fa-chevron-left"></i>一覧へ戻る</a>
	</div>
</section>

<?php get_footer(); ?>
