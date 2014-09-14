<?php get_header(); ?>

			<div id="content">
				<div id="leftcontent">
					<h2><?php single_cat_title(); ?></h2>
					<?php echo category_description(); ?>
				</div>
				
				<div id="rightcontent">
<?php $count=0; ?>
<?php query_posts($query_string.'&posts_per_page=-1'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php $count++; ?>
<a class="<?php echo 'number' .$count; ?>
<?php if(($count % 4) == 0) {
	echo ' lineend';
} ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('ssize'); ?></a><?php endwhile; endif; ?>
				</div>
			</div>
			
<?php get_footer(); ?>