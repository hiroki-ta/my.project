<?php get_header(); ?>

<div id="content">
	<div id="leftcontent">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<?php the_title(); ?>
		<?php endwhile; endif; ?>
	</div>
	
	<div id="rightcontent">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
			
		<div id="favorite">
			<h3>最近のお気に入り</h3>
			<?php query_posts('tag=お気に入り'); ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('ssize'); ?></a>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>