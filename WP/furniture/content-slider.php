<!-- SLIDER -->
<?php query_posts( 'category_name=featured&posts_per_page=7' );
if ( have_posts() ) : ?>

	<div class="band">
		<div class="container">
			<div class="sixteen columns">
				<div class="flexslider">
					<ul class="slides">
						
						<?php while ( have_posts() ) : the_post(); ?>

						<li>
						<figure>
						<!--
						<img src="<?php bloginfo("template_url"); ?>/images/slides.jpg" alt="" /> -->
						<?php
						if (function_exists('has_post_thumbnail')) 
							{
							if ( has_post_thumbnail() ) 
								{ ?>
								<?php the_post_thumbnail('');
								}
							else
								{ ?>
								 <img src="<?php bloginfo('template_directory')?>/images/slides.jpg" alt="Slide 1">
								<?php   
								}
							} ?>

						</figure>
						<div class="flex-caption">

						<h1> <?php the_title(); ?> </h1>
						<p> <?php the_excerpt_max_charlength(200);?> </p>
						<!--
						<h1>Lorem Ipsum</h1>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
						-->
						</div>					
						</li>
						<?php endwhile; ?>
						<!--
						<li>
						<figure>
						<img src="<?php bloginfo("template_url"); ?>/images/slidesa.jpg" alt="" />
						</figure>
						<div class="flex-caption">
						<h1>Lorem Ipsum</h1>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
						</div>
						</li>


						<li>
						<figure>						
						<img src="<?php bloginfo("template_url"); ?>/images/slidesb.jpg" alt="" />
						</figure>
						<div class="flex-caption">
						<h1>Lorem Ipsum</h1>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
						</div>
						</li>
						-->
					</ul>
				</div>
			</div>
			
		</div>
	</div>
<?php 
endif;
wp_reset_query(); ?>
<!-- END SLIDER -->
