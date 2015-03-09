<ul class="slider">

	<?php query_posts('post_type=carousel'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<li>
		<a href="<?php the_permalink() ?>">
			<p class="caption"><?php the_field('caption_field'); ?></p>
			<img src="<?php the_field('image_field'); ?>" alt=""/>
		</a>
	</li>
	<?php endwhile; wp_reset_query(); ?>

</ul>
