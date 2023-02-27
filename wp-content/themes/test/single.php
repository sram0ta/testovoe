<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package test
 */

get_header();
?>

	
<main class="main">

<div class="container">

	<div class="page-top">

		<nav class="page-breadcrumb" itemprop="breadcrumb">
<a href="/">Главная</a>
<span class="breadcrumb-separator"> > </span>
<a href="/">Новостройки</a><span class="breadcrumb-separator"> > </span> <?php the_title(); ?>
</nav>

	</div>

	<div class="page-section">

		<div class="page-content">

			<article class="post">

<div class="post-header">

<h1 class="page-title-h1"><?php the_title(); ?></h1>

<span><?php the_field('developer'); ?></span>

<div class="post-header__details">

	<div class="address"><?php the_field('addresss'); ?></div>

	<div class="metro"><span class="icon-metro icon-metro--red"></span><?php the_field('address_1'); ?><span
				class="icon-walk-icon"></span></div>

	<div class="metro"><span class="icon-metro icon-metro--green"></span><?php the_field('address_2'); ?><span
				class="icon-bus"></span></div>

	<div class="metro"><span class="icon-metro icon-metro--red"></span><?php the_field('address_3'); ?><span
				class="icon-bus"></span></div>

</div>

</div>

<div class="post-image">

<img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">

<div class="page-loop__item-badges">
	<span class="badge"><?php the_field('option_1'); ?></span>
	<span class="badge"><?php the_field('option_2'); ?></span>
</div>

<a href="#" class="favorites-link favorites-link__add" title="Добавить в Избранное" role="button">
	<span class="icon-heart"><span class="path1"></span><span class="path2"></span></span>
</a>

</div>

<h2 class="page-title-h1"><?php the_field('characteristic'); ?></h2>

<ul class="post-specs">
<li>
	<span class="icon-building"></span>
	<div class="post-specs__info">
		<span>Класс жилья</span>
		<p><?php the_field('class'); ?></p>
	</div>
</li>
<li>
	<span class="icon-brick"></span>
	<div class="post-specs__info">
		<span>Конструктив</span>
		<p><?php the_field('construction'); ?></p>
	</div>
</li>
<li>
	<span class="icon-paint"></span>
	<div class="post-specs__info">
		<span>Отделка</span>
		<p>
		<?php the_field('finishing'); ?>
			<span class="tip tip-info" data-toggle="popover" data-placement="top"
				data-content="<?php the_field('data_content');?>">
				<span class="icon-prompt"></span>
			</span>
		</p>
	</div>
</li>
<li>
	<span class="icon-calendar"></span>
	<div class="post-specs__info">
		<span>Срок сдачи</span>
		<p><?php the_field('deadline'); ?></p>
	</div>
</li>
<li>
	<span class="icon-ruller"></span>
	<div class="post-specs__info">
		<span>Высота потолков</span>
		<p><?php the_field('ceiling_height'); ?></p>
	</div>
</li>
<li>
	<span class="icon-parking"></span>
	<div class="post-specs__info">
		<span>Подземный паркинг</span>
		<p><?php the_field('underground_parking'); ?></p>
	</div>
</li>
<li>
	<span class="icon-stair"></span>
	<div class="post-specs__info">
		<span>Этажность</span>
		<p><?php the_field('number_of_storeys'); ?></p>
	</div>
</li>
<li>
	<span class="icon-wallet"></span>
	<div class="post-specs__info">
		<span>Ценовая группа</span>
		<p><?php the_field('price_group'); ?></p>
	</div>
</li>
<li>
	<span class="icon-rating"></span>
	<div class="post-specs__info">
		<span>Рейтинг</span>
		<p><?php the_field('rating'); ?></p>
	</div>
</li>
</ul>

<h2 class="page-title-h1">Краткое описание</h2>

<div class="post-text">
	<?php the_content(); ?>
</div>

<h2 class="page-title-h1">Карта</h2>

<div class="post-map" id="post-map" style="width: 100%; height: 300px;"></div>

</article>

		</div>

		<div class="page-filter"></div>

	</div>

</div>

</main>

<?php
get_footer();
