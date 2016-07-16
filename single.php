<?php get_header() ?>


<div class="content">
	<h1 class="content_header">Company's news</h1>
	<div class="news_single">
		<?php if (have_posts()) : while (have_posts()): the_post();?>
			<div class="news_item">
				<div class="news_item_head">
					<span><?php the_time('M jS, Y'); ?></span>
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="news_item_body"><?php the_content(); ?></div>
			</div>
			<?php endwhile; ?>
			<?php else : echo 'News no found'; ?>
		<?php endif; 
		wp_reset_query(); ?>

		<div class="news_navigation">
			<?php previous_post_link('<<%link','Prew'); ?>
			<span>...</span>
			<?php next_post_link('%link>>','Next'); ?>
		</div>
		
		<div class="news_search">
			<form action="" id="news_search_form" method="get">
				<input name='s' class="news_search_text" type="text" placeholder=" Search news" >
				<input type="submit" class="news_search_button" name="news_search_button" value="Search">
			</form>
		</div>
		
	</div>
</div>





<?php get_footer() ?>	