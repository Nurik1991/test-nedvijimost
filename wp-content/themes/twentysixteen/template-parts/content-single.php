<?php

/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentysixteen') . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);

		if ('' !== get_the_author_meta('description')) {
			get_template_part('template-parts/biography');
		}
		?>

		<h3>Характеристики</h3>
		<div class="chars">
			<? if (get_field('stoimost')) { ?>
				<span> Стоимость : <?= the_field('stoimost'); ?> руб. </span>
			<? } ?>
			<? if (get_field('ploshhad')) { ?>
				<span> Площадь : <?= the_field('ploshhad'); ?> м<sup>2</sup> </span>
			<? } ?>
			<? if (get_field('etazh')) { ?>
				<span> Этаж: <? the_field('etazh'); ?> </span>
			<? }  ?>
		</div>

		<? $galereya = get_field('galereya');
		if (!empty($galereya)) { ?>
			<h3>Галерея</h3>
			<div class="row">
				<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
					<div class="swiper-wrapper">
						<? foreach ($galereya as $key => $value) { ?>
							<div class="swiper-slide">
							<img src="<? print_r($value['sizes']['large']); ?>" alt="<? print_r($value['title']); ?>" />
						</div>
						<? } ?>
						
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div thumbsSlider="" class="swiper mySwiper">
					<div class="swiper-wrapper">
					<? foreach ($galereya as $key => $value) { ?>
							<div class="swiper-slide">
							<img src="<? print_r($value['sizes']['large']); ?>" alt="<? print_r($value['title']); ?>" />
						</div>
						<? } ?>
					</div>
				</div>
			</div>
		<? } ?>

	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->