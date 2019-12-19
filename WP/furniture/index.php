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
					<!--
					<div class="five columns">
						<div class="detail_img">
						<figure>
						<img src="product/product3.png">
						</figure>
						</div>
						<div class="detail_img_small">
						<figure>
						<img src="product/product3a.png" class="small">
						<img src="product/product3b.png" class="small">
						<img src="product/product3c.png" class="small">
						</figure>
						</div>
					</div> <!-- FIVE -->
						
					<!--
					<div class="six columns">
						<div class="detail_product">
						<h1>Product Name #1</h1>
						
							<div class="row">
							<span class="col">Model</span> 
							<span class="coll">: Model Lorem Ipsum</span>
							</div>

							<div class="row">
							<span class="col">Shipping Weights</span> 
							<span class="coll">: 2lbs</span>
							</div>

							<div class="row">
							<span class="col">Units in Stock</span> 
							<span class="coll">: 111</span>
							</div>

							<div class="row">
							<span class="col">Price</span> 
							<span class="price">: $190</span>
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

						</div><!-- det_prod 
					</div> <!-- SIX -->
			<!--
				
			<div class="eleven columns">
				<div class="detail_description">
				<h1>Detail Products</h1>
				<p>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem dolore accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit  amet aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
				</p>
				</div>
			</div>
			-->

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
	<?php the_excerpt(); ?> 
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