<?php
	get_header();
?>

		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php
        				if ( have_posts() ) {

        					while ( have_posts() ) {
        						the_post();
        						?>

								<article class="post">
									<header>
										<h1 class="the-title"><?php the_title(); ?></h1>
									</header>
									<main class="the-content">
										<?php the_excerpt(); ?>
									</main>
								</article>

        						<?php 

        					}

        				} else {
        					//inget innehåll finns
        					_e( 'Sorry, could not find any posts for you' , 'younitedstyle');
        				} 
    				?>
				</div><!--/col-md-9-->
			</div><!--/row-->
		</div><!--/container-->	
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php
					get_sidebar();
					?>
				</div><!--/col-md-3-->
			</div><!--/row-->
		</div><!--/container-->	

<?php 
	get_footer();
?>