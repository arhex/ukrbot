<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MOBESTON</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500i,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php  wp_head()?>
</head>
<body>
<div class="container-fluid">
	<div class="row menu1">
		<div class="col-lg-2 telmail">
			<i class="fa fa-phone" ></i>
			+372 58414005
		</div>
		<div class="col-lg-3  telmail">
			<i class="fa fa-envelope" ></i>
			info@autovaruosad.ee

		</div>

		<ul class="nav col-lg-7 justify-content-lg-end nav-pills">
			<li class="nav-item">
				<a class="nav-link active" href="#">
					<img src="./img/Tracking.png" alt="">
					Отследить груз
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<img src="./img/Loginicon.png" alt="">
					Войти
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<img src="./img/user.png" alt="">

					Регистрация
				</a>
			</li>
			<li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<img src="./img/Russia.png" alt="">
					Рус
				</a>
				<div class="dropdown-menu menu2">
					<a class="dropdown-item" href="#">Eng</a>
					<a class="dropdown-item" href="#">DE</a>
					<a class="dropdown-item" href="#">Укр</a>

				</div>
			</li>
		</ul>

	</div>
<div class="navbar-size">
	<nav class="navbar navbar-expand-xl  navbar-light custom-menu">

		<div class="navbar-header">
			<img class="navbar-brand"> <?php the_custom_logo();?>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
		wp_nav_menu([
			'menu'            => 'top',
			'theme_location'  => 'top',
			'container'       => 'div',
			'container_id'    => 'navbarNavDropdown',
			'container_class' => 'collapse  navbar-collapse justify-content-end',
			'menu_id'         => false,
			'menu_class'      => 'nav navbar-nav  nav-fill ',
			'depth'           => 2,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		]);
		?>
<!--
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<div class= "ml-auto" >


				<ul class=" nav navbar-nav nav-fill" style="font-size: 20px;">
					<li class="nav-item  "><a class="nav-link " href="#">Главная </a></li>
					<li class="nav-item "><a class="nav-link" href="#">Запчасти</a></li>
					<li class="nav-item " ><a class="nav-link" href="#">О компании</a></li>
					<li class="nav-item " ><a class="nav-link" href="#">Контакты</a></li>
					<li class="nav-item " ><div><a class="nav-link" href="#">
								<div class="shopcart">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<b>Корзина: </b>12,41 €
								</div>
							</a></div></li>

				</ul>
			</div>
		</div>
-->
	</nav>

</div>
	<div class="banner">
		<div class="row">
			<div class="col-lg-1 col-sm-1 col-md-1 col-xl-1"></div>
			<div class="text">
				<h3>Ищете запчасти?</h3>
				<p class="oferta">Мы поставляем лучшие запчасти с 1996 года</p>
				<p class="oferta2">У нас можно найти запчасти по номеру машины или по коду детали</p>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					<label class="form-check-label" for="exampleRadios1">Номер детали</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<label class="form-check-label" for="exampleRadios2">Номер авто</label>
				</div>



				<form>
					<div class="form-row align-items-center">
						<div class="col-auto">
							<label class="sr-only" for="inlineFormInputGroup">123 ABC</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text"><img src="./img/piston.png" alt=""></div>
								</div>
								<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="123 ABC">
							</div>


						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-danger mb-2"> <i class="fa fa-search" aria-hidden="true"></i> Поиск</button>
						</div>
					</div>
				</form>
			</div>


		</div>

	</div>


</div>
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

/*print_r( $product_categories);*/
?>
<div class="category_block container-fluid">
    <div class="row justify-content-lg-center justify-content-center">

        <ul class="justify-content-lg-center justify-content-center category">
            <?php if ( $count > 0 ) {
                foreach ($product_categories as $product_category) {
                    $term_id = $product_category->term_id;

// получим ID картинки из метаполя термина
                    $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );

// ссылка на полный размер картинки по ID вложения
                    $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                    echo '<li class="col"><a  href="' . get_term_link($product_category) . '"> <img src="'. $image_url. '" alt="" />'.'</a></li>';
                }
            }
            ?>




        </ul>


    </div>
</div>
