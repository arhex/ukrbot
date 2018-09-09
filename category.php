<!-- html код шаблона -->
<?php get_header()?>
<h2><?php
	if( is_category() ) {
		$cat_name = get_queried_object()->name;
		$cat_slug = get_queried_object()->slug;
		$cat_parent =get_queried_object()->term_id;
		echo $cat_name;
	}
	?></h2>

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
	'child_of'           => 1,
	'parent'             => $cat_parent,
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
<?php


if( ! $product_categories ){// если это уже не категория -  тогда просмотрим товари


$posts = get_posts( array(
	'numberposts' => 5,
	'category_name'    => $cat_slug,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
?>
<div class="row justify-content-lg-center" >
<?php
foreach( $posts as $post ){
		setup_postdata($post);
	// формат вывода the_title() ...
		?>
				<div class="card" style="width: 18rem; margin-left: 5px; margin-right: 5px">
					<?php  the_post_thumbnail(
						array(200, 260),
						array ('style' =>"padding: 10px 80px 5px 80px",
						       'class' => "card-img-top",)
					) ?>
					<div class="card-body">
						<p class="card-text"><a href="<?php the_permalink() ?>"> <?php the_title()?> <?php the_excerpt()?> </a></p>
					</div>
					<div class="card-footer ">
						<div class="row justify-content-between">
							<p style="color: red; font-weight: bold;"><?php the_field('object_price') ?>€</p><a href="#"><img  src="./img/cart-icon.jpg" alt=""></a></div>
					</div>
				</div>
		<?php
	}

wp_reset_postdata(); // сброс
}
?>
</div>
<?php get_footer()  ?>