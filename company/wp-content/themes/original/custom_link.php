<?php
/*
Template Name: リンク集
*/
?>

<?php get_header(); ?>

	<div id="content">
		<?php if(have_posts()):
		while(have_posts()): the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
		
		<ul class="link">
			<?php wp_list_bookmarks('show_description=1&title_before=<h3>&title_after=</h3>'); ?>
		</ul>
	</div>
			
<?php get_footer(); ?>