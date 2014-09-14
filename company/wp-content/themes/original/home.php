<?php get_header(); ?>

		<div id="content">
			<?php query_posts('pagename=message'); ?>
			<?php if(have_posts()):
			while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		
<?php get_footer(); ?>