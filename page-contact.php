<?php
/*
Template Name: Контакты
*/
?>

	<!-- html код шаблона -->
<?php get_header()?>
    <h2><?php the_title()?></h2>
	<div class="row ukrbot-about">
		<div class="col-2"></div>
		<div class="col-8">
			<?php the_content()?>
		</div>
	</div>
<?php get_footer()  ?>