<?php get_header(); ?>

<div id="content">
	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<div class="prevnext">
			<p class="prev"><?php previous_post_link('%link','<img
			src="' . get_bloginfo('template_url') . '/images/prev.png"
			alt="前" width="35" height="69" />'); ?></p>
			<p class="next"><?php next_post_link('%link','<img
			src="' . get_bloginfo('template_url') . '/images/next.png"
			alt="前" width="35" height="69" />'); ?></p>
		</div>
		
		<p class="photo">
			<?php the_post_thumbnail(); ?>
		</p>
		
		<div class="post">
			<h2><?php the_title(); ?></h2>
			<p class="postdate">
				<?php the_date('Y年m月d日(D) '); ?>
			</p>
			<?php the_content(); ?>
			
		</div>
		<?php endwhile; endif; ?>
		
</div>

<?php get_footer(); ?>
