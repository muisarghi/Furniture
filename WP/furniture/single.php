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
				
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<div class="five columns">
						<div class="detail_img">
						<figure>
						<!-- <img src="product/product3.png"> -->
						
						<?php
						if(has_post_thumbnail()) {
						//echo"<div class='thumbnail'>";
						the_post_thumbnail();
						//echo"</div>";
						}
						?>
						</figure>
						</div>
						<div class="detail_img_small">
						<figure>
						<!-- <img src="product/product3a.png" class="small">
						<img src="product/product3b.png" class="small">
						<img src="product/product3c.png" class="small">
						-->
						</figure>
						</div>
					</div> <!-- FIVE -->
						
					
					<div class="six columns">
						<div class="detail_product">
						<h1><?php the_title(); ?></h1>
						
							<div class="row">
							<span class="col">Model</span> 
							<?php $model = get_post_meta($post->ID, 'model', true); ?>
							<span class="coll">: <?php echo $model; ?> </span>
							</div>

							<div class="row">
							<span class="col">Shipping Weights</span> 
							<?php $weight = get_post_meta($post->ID, 'weight', true); ?>
							<span class="coll">: <?php echo $weight; ?> lbs</span>
							</div>

							<div class="row">
							<span class="col">Units in Stock</span> 
							<?php $stock = get_post_meta($post->ID, 'stock', true); ?>
							<span class="coll">: <?php echo $stock; ?></span>
							</div>

							<div class="row">
							<span class="col">Price</span> 
							<?php
							$prices = get_post_meta($post->ID, 'price', true);
							?>
							<span class="price">: $ <?php echo $prices ; ?></span>
							</div>

							<div class="row_qty">
							<span class="col">Quantity</span> 
							<span class="colq"><select name="qty" class="select">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							</select>
							</span>
							<span class="colqq"><a href="#" class="addcart_detail">Add</a>
							</span>
							</div>

						</div><!-- det_prod  -->
					</div> <!-- SIX -->
			
				
			<div class="eleven columns">
				<div class="detail_description">
				<h1>Detail Products</h1>
				<p>
				<?php the_content(); ?>
				</p>
				</div>
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