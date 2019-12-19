<?php

//add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 251, 128, true );


if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 251, 128, true ); // Normal post thumbnails
}

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Top Menu' )
		)
	);
}

/*== EXERPT WITH MAX LENGTH==*/
function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}

	} else {
		echo $excerpt;
	}
}


 if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="sidebar">  ',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));


////////////////////////////////////////////
//////////////////////////////////////////
////////////////////////////////////////

add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
	$labels = array(
    'name' => _x('Products', 'post type general name'),
    'singular_name' => _x('Product', 'post type singular name'),
    'add_new' => _x('Add New', 'Product'),
    'add_new_item' => __('Add New Product'),
    'edit_item' => __('Edit Product'),
    'new_item' => __('New Product'),
    'view_item' => __('View Product'),
    'search_items' => __('Search Products'),
    'not_found' =>  __('No Products found'),
    'not_found_in_trash' => __('No Products found in Trash'),
    'parent_item_colon' => ''
  );

  $supports = array('title', 'editor', 'revisions', 'excerpt', 'thumbnail');
	

  register_post_type( 'product',
    array(
      'labels' => $labels,
      'public' => true,
	  'show_ui' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'query_var' => true,
      'supports' => $supports,
	  'taxonomies' => array('category', 'post_tag')
    )
  );

	
}

add_action( 'init', 'create_color' );
function create_color() {
 $labels = array(
    'name' => _x( 'Color', 'taxonomy general name' ),
    'singular_name' => _x( 'Color', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search color' ),
    'all_items' => __( 'All color' ),
    'parent_item' => __( 'Parent color' ),
    'parent_item_colon' => __( 'Parent Color:' ),
    'edit_item' => __( 'Edit Color' ),
    'update_item' => __( 'Update Color' ),
    'add_new_item' => __( 'Add New Color' ),
    'new_item_name' => __( 'New Color Name' ),
  ); 	

  register_taxonomy('Color','product',array(
    'hierarchical' => true,
    'labels' => $labels
  ));
}



add_action("admin_init", "admin_init");

function admin_init(){
  //add_meta_box("product_detail-meta", "Product Detail", "product_detail", "product", "side", "low");
  add_meta_box("credits_meta", "Products Detail", "credits_meta", "product", "normal", "low");
 // add_meta_box("category_product-meta", "Products Category", "category_product", "product", "normal", "low");
}

function product_detail(){
  global $post;
  $custom = get_post_custom($post->ID);
  $program_time = $custom["product_detail"][0];
  ?>
  <label>Time Slot:</label>
  <input name="product_detail" value="<?php echo $product_detail; ?>" />
  <?php
}


// DETAIL PRODUCT
function credits_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $model = $custom["model"][0];
  $weight = $custom["weight"][0];
  $price = $custom["price"][0];
  $stock = $custom["stock"][0];
  //$img1= $custom["img1"][0];

  ?>
  <p><label>Model:</label><br />
  <input type="text" name="model" value="<?php echo $model; ?>"></p>
  <p><label>Weight:</label><br />
  <input type="text" name="weight" value="<?php echo $weight; ?>"></p>
  <p><label>Price:</label><br />
  <input type="text" name="price" value="<?php echo $price; ?>"></p>
  <p><label>Stock:</label><br />
  <input type="text" name="stock" value="<?php echo $stock; ?>"></p>
 <!-- <p><label>Image 1:</label><br />
  <input type="file" name="img1" value=""><?php echo $img1; ?></p> -->
  <?php
}

add_action('save_post', 'save_details');

function save_details(){
  global $post;

  update_post_meta($post->ID, "product_detail", $_POST["product_detail"]);
  update_post_meta($post->ID, "model", $_POST["model"]);
  update_post_meta($post->ID, "weight", $_POST["weight"]);
  update_post_meta($post->ID, "price", $_POST["price"]);
  update_post_meta($post->ID, "stock", $_POST["stock"]);
  //update_post_meta($post->ID, "img1", $_FILES["img1"]);
}

add_action("manage_posts_custom_column",  "product_custom_columns");
add_filter("manage_edit-product_columns", "product_edit_columns");

function product_edit_columns($columns){
	 //$category = get_the_category(); 
		//	$cat = $category[0]->cat_name;
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Product",
    "model" => "Model",
    "weight" => "Weight",
    "price" => "Price",
	"stock" => "Stock",
	  //"category" => "Category"
	//"img1" => "Image1"
  );

  return $columns;
}

function product_custom_columns($column){
  global $post;

  switch ($column) {
    case "model":
      $custom = get_post_custom();
      echo $custom["model"][0];
      break;
    case "weight":
      $custom = get_post_custom();
      echo $custom["weight"][0];
      break;
    case "price":
		 $custom = get_post_custom();
      echo $custom["price"][0];
      break;
	case "stock":
		   $custom = get_post_custom();
      echo $custom["stock"][0];
      break;
	 //case "category_name":
		//   $category = get_category(); 
		//	echo $category[0]->cat_name;
      ///break;
	  //case "img1":
		 //  $custom = get_post_custom();
      //echo $custom["img1"][0];
      //break;
  }
}


//END DETAIL PRODUCT


//CATEGORY PRODUCT



?>