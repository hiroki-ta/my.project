<?php get_header(); ?>

		<div id="content">
			<?php if(is_home()): ?>
				<?php query_posts('pagename=message'); ?>
				<?php if(have_posts()):
				while(have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				
			<?php else: ?>
				<?php if(have_posts()):
				while(have_posts()): the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			<?php endif; ?>
			
			<?php if(is_page('リンク集')): ?>
				<ul class="link">
					<?php wp_list_bookmarks('show_description=1&title_before=<h3>&title_after=</h3>'); ?>
				</ul>
			<?php endif; ?>
		</div>
		
<?php get_footer(); ?>