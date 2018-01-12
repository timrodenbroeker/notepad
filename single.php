<?php get_header(); ?>

<div id="content">

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			
	<div class="container mbot15">
		<div class="row">	
			<div class="col-sm-3 date">
				<h2><?php the_date(); ?></h2>
			</div>
			<div class="col-sm-7 title">
				<h2><?php the_title(); ?></h2>
				<div class="mtop15"><?php the_content(); ?></div>
			</div>
		</div>
	</div>
				
		<?php } // end while
	} // end if
	?>
	
	<?php get_footer(); ?>

</div>	