<?php get_header(); ?>

<div id="content">

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			
	<div class="container mbot10">
		<div class="row">	
					
			<div class="col-sm-3 date">
				<h2><?php the_date(); ?></h2>
			</div>
			<div class="col-sm-9 title">
				<a href="<?php the_permalink(); ?>">
					 <h2<?php if ( in_category('external') ) { echo ' class="lightblue"';} else if ( in_category('solved') ) { echo ' class="lightgrey"';}?>><?php the_title(); ?></h2>
				</a>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="mtop15 thumb mbot15"><?php the_post_thumbnail(); ?></div>
				<?php } ?>
				
				
			</div>
		</div>
	</div>
				
		<?php } // end while
	} // end if
	?>
	
	<?php get_footer(); ?>

</div>