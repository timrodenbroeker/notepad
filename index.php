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
					 <h2<?php if ( in_category('external') ) { echo ' class="lightblue"';} else if ( in_category('solved') ) { echo ' class="solved"';}?>><?php the_title(); ?></h2>
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
	
		<div class="container mbot10">
		<div class="row">	
					
			<div class="col-sm-9 col-sm-offset-3">
				
			<?php the_posts_pagination( array(
	 'mid_size' => 100,
	 'prev_text' => __( '<span class="">prev</span>', 'textdomain' ),
	 'next_text' => __( '<span class="">next</span>', 'textdomain' ),
	) ); ?>
	
			</div></div>	
		</div>
	

	<?php get_footer(); ?>

</div>