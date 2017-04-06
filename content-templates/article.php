<article class="post">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<header>
					<h1 class="the-title"><?php the_title(); ?></h1>
					<h4 class="the-meta">
						<span class="the-date"><?php the_date(); ?></span>
						by <span class="the-author"><?php the_author(); ?></span>
					</h4>
				</header>
			</div><!--col-md-10-->
		</div><!--row-->
	</div><!--container-->
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<main class="the-content">
					<?php the_content(); ?>
				</main>
			</div><!--col-md-10-->
		</div><!--row-->
	</div><!--container-->
</article>								