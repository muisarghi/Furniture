<?php
get_header();

get_template_part( 'content', 'slider' );

?>

<?php get_sidebar();?>


<!-- CONTENT -->
			<div class="twelve columns">
			<?php query_posts(array('post_type'=>'product')); ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="four columns">
				
				
					<div class="product">
					<a href="<?php the_permalink() ?>">
					<figure>
					<!-- <img src="<?php bloginfo("template_url"); ?>/product/product1.png">
					-->
					<?php
					if(has_post_thumbnail()) {
					//echo"<div class='thumbnail'>";
					the_post_thumbnail();
					//echo"</div>";
					}
					?>
					</figure>

					<h1><?php the_title(); ?> <!-- Lorem Ipsum --></h1>
					<?php
					$prices = get_post_meta($post->ID, 'price', true);
					//$category = get_post_meta($post->ID, 'category', true);
					$category = get_the_category();
					$category[0]->cat_name;
					//echo "-". $category[0]->cat_ID;
					?>
					<h2><?php echo "$". $prices;  ?> <!--$90 --></h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</a>
					</div>
					
				</div>
				<?php endwhile; ?>
				
				<!--
				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product2.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$70</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				
				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product3.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$80</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				
				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product4.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$65</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				

				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product5.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$60</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				
				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product6.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$95</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				
				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product2.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$80</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				
				<div class="four columns">
					<div class="product">
					<figure>
					<img src="<?php bloginfo("template_url"); ?>/product/product1.png">
					</figure>
					<h1>Lorem Ipsum</h1>
					<h2>$120</h2>
					<center>
					<a href="#" class="addcart">Add</a>
					</center>
					</div>
				</div>
				-->

				<div class="four columns">
					<div class="product_more">
					<figure>
					</figure>
					
					
					<p><a href="#">+ Load More</a>
					</p>
					</div>
				</div>

			</div>

		</div><!-- container -->
	</div><!-- band-->

<!-- END CONTENT -->

<?php get_footer();?>