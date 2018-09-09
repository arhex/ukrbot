<?php
/*
Template Name: Запчасти
*/
?>
<?php get_header()?>
<?php $args = array(
'show_option_all'    => '',
'show_option_none'   => __('No categories'),
'orderby'            => 'name',
'order'              => 'ASC',
'show_last_update'   => 0,
'style'              => 'list',
'show_count'         => 0,
'hide_empty'         => 0,
'use_desc_for_title' => 1,
'child_of'           => 0,
'parent'             => 4,
'feed'               => '',
'feed_type'          => '',
'feed_image'         => '',
'exclude'            => '1',
'exclude_tree'       => '',
'include'            => '',
'hierarchical'       => true,
'title_li'           => NULL,
'number'             => NULL,
'echo'               => 1,
'depth'              => 0,
'current_category'   => 0,
'pad_counts'         => 0,
'taxonomy'           => 'category',
'walker'             => 'Walker_Category',
'hide_title_if_empty' => false,
'separator'          => '<br />',
);

$product_categories = get_terms( $args );

$count = count($product_categories);

?>

<div class="card1 container-fluid">
	<div class=" justify-content-between">
		<div class="col-6"><h4><?php the_title()?></h4></div>
	<div class="row justify-content-lg-center" >
		<?php if ( $count > 0 ) {
			foreach ($product_categories as $product_category) {
				$term_id = $product_category->term_id;

// получим ID картинки из метаполя термина
				$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
				/*print_r( $product_category);*/

// ссылка на полный размер картинки по ID вложения
				$image_url = wp_get_attachment_image_url( $image_id, 'full' );
				echo '<div class="card text-center" style="width: 19rem;"><a  href="'
				     . get_term_link($product_category) .
				     '"><img class="card-img-top" style="padding: 20px 100px 20px 100px"src="'
				     . $image_url.
				     '" alt="Card image cap" /></a><div class="card-body"><h5 class="card-title"><a href="'
				     .get_term_link($product_category) .
				     '" >'
				     .$product_category->name.
				     '</a></h5></div></div> ';
			}
		}
		?>


	</div>
		<?php wp_reset_postdata()?>

	</div>
</div>

<?php get_footer();?>