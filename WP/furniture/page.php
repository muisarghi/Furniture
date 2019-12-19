<?php get_header(); ?>
<?php get_sidebar(); ?>


<!-- CONTENT -->
			<div class="twelve columns">
				<div class="navi">
				<a href="#">Home</a> > <a href="#">Product Page</a>
				</div>
			</div>
			
			<div class="twelve columns">
				<div class="container detail">
					
				
				
				
				<?php query_posts(array('post_type'=>'product'));
				//query_posts(array('post_type'=>'product')); ?>
				<?php //query_posts( array( 'post_type' => 'product', 'media' => 'print' ) ); 
				//query_posts(array('post_type' => array('post', 'product')));
				?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="detail_description">
				<a href="<?php the_permalink() ?>">
				<?php
				if(has_post_thumbnail()) {
				//echo"<div class='thumbnail'>";
				the_post_thumbnail();
				//echo"</div>";
				}
				?>

				<h1><?php the_title(); ?></a></h1>
				<?php the_content(); ?> 
	</div>


<?php endwhile; ?>


<?php else : ?>
	<div class="detail_description">
	<h1>Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
	<?php endif; ?>

				</div><!-- detail -->
			
			</div> <!-- twelve -->

		<div class="clear"></div>
		</div><!-- container -->
	</div><!-- band-->

<?php get_footer(); ?>