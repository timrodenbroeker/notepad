<?php get_header(); ?>

<div id="content" class="single">

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
				<div class="mtop15">
					<?php
					$thecontent = get_the_content();
					if(!empty($thecontent)) { ?>
						<?php echo $thecontent; ?>
					<?php } else { ?> 
						<p>Nothing here yet</p>
					<?php } ?>
					<p class="mtop50"><?php echo edit_post_link(); ?></p>
			</div>
		</div>
	</div>
				
		<?php } // end while
	} // end if
	?>
	
	<?php get_footer(); ?>

</div>	