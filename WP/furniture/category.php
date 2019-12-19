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
				<?php
				$category = get_the_category();
					$cats = $category[0]->cat_ID; 
				//query_posts( 'posts_type=product&cat=' .$cats ); 
				$cati = single_cat_title( '', false );
				$arg = array(
				'post_type' => 'product',
				'category_name' => $cati
				);
				query_posts( $arg );
				?>
				<?php if (have_posts()) : 
				?>
				<?php //query_posts(array('post_type=product'&'cat='.$cats.'')); 
					
					
				//if ($post->post_type=='product') :
				?>
				<?php // query_posts(array('post_type'=>'product')); ?>
				
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
	<?php endif; wp_reset_query(); ?>

				</div><!-- detail -->
			
			</div> <!-- twelve -->

		<div class="clear"></div>
		</div><!-- container -->
	</div><!-- band-->

<?php get_footer(); ?>