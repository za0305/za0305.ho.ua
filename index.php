<?php get_header() ?>

<div class="content">
	<h1 class="content_header">Company's news</h1>
	<div class="news">
		<?php if (have_posts()) : while (have_posts()): the_post();?>
			<div class="news_item">
				<div class="news_item_image">
					<?php if(has_post_thumbnail()):?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="<?php bloginfo('template_url'); ?>/img/noimage.jpg" alt="">
					<?php endif; ?>
				</div>
				<div class="news_item_head" onclick="getNews(<?php the_id(); ?>)">
					<span><?php the_author(); ?></span>
					<span><?php the_time('M jS, Y'); ?></span>
					<h3><?php the_title(); ?></h3>
					<p class="news_item_head_id" hidden=""><?php the_id(); ?></p>
				</div>
				<div class="news_item_body"><?php the_excerpt(); ?></div>
			</div>
			<?php endwhile; ?>
			<?php else : echo 'News no found'; ?>
		<?php endif; 
		wp_reset_query(); ?>

		<div class="news_navigation">
			<?php posts_nav_link( ' ', '<< Prew', 'Next >>' ); ?>
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
