<?php get_header(); ?>

			<div id="content">
				<div id="leftcontent">
					<?php query_posts('posts_per_page=1'); ?>
					<?php if(have_posts()):
					while(have_posts()): the_post(); ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('msize'); ?></a>
					
					<h2><?php the_title(); ?></h2>
					<p class="postdate"><?php the_date('Y年m月d日(D)'); ?></p>
					<?php endwhile; endif; ?>
				</div>
				
				<div id="rightcontent">
<?php $count=0; ?>
<?php query_posts('posts_per_page=9&offset=1'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php $count++; ?>
<a class="<?php echo 'number' .$count; ?>
<?php if(($count % 3) == 0) {
	echo ' lineend';
} ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('ssize'); ?></a><?php endwhile; endif; ?>
				</div>
			</div>
			
<?php get_footer(); ?>
