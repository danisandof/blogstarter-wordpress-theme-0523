<?php get_header(); ?>

	<div class="main-article">
		<div class="post-thumbnail">
			<?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
		</div>
		<div class="article-info" style="text-align: center;padding: 35px;">
			<p><?php the_category(); ?></p>
			<h2><b><?php the_title(); ?></b></h2>
			<p><?php the_time('F jS, Y'); ?></p>	
		</div>
	</div>
	<div class="articles">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="article">
			  <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
			  <div class="content">
				<p><?php the_category(); ?></p>
				<h1><b><?php the_title(); ?></b></h1>
				<p><?php the_time('F jS, Y'); ?></p>
			  </div>
		</div> 
		<?php endwhile; else: ?>
			<p> <?php _e('Sorry, there are no posts available at this time'); ?> </p>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>