<?php get_header(); ?>

			<div id="home" class="panel">

				<nav class="panel-nav active">
					<a class="bottom" href="#design"><span>Design</span></a>
					<a class="right" href="#inspire"><span>Inspire</span></a>
					<a class="left" href="#invoke"><span>Invoke</span></a>
					<a class="top" href="#inform"><span>Inform</span></a>
				</nav>

				<div class="inner-content wrap cf">

						<div class="main m-all d-all t-all cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header center">

									<img class="cc-icon" src="<?php bloginfo('template_url'); ?>/library/images/cc-home.svg" alt="<?php the_title(); ?>" />

									<h1 class="page-title swiss-thin" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content center cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; wp_reset_query(); ?>

						</div>

				</div>

			</div><!--  end home -->

			<div id="inspire" class="panel">

				<!-- <nav class="panel-nav">
					<a class="left" href="#home"><span>Home</span></a>
				</nav> -->
				
				<div class="inner-content wrap cf">

						<div class="main m-all d-all t-all cf" role="main">

							<?php 
							$inspire = new WP_Query( 'page_type=page&page_id=9' );
							if ($inspire->have_posts()) : while ($inspire->have_posts()) : $inspire->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'm-all t-1of3 d-1of4 cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title swiss-thin" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; wp_reset_query(); ?>

						</div>

				</div>

			</div><!--  end inspire -->

			<div id="invoke" class="panel">

				<!-- <nav class="panel-nav">
					<a class="right" href="#home"><span>Home</span></a>
				</nav> -->
				
				<div class="inner-content wrap cf">

						<div class="main m-all d-all t-all cf" role="main">

							<?php 
							$invoke = new WP_Query( 'page_type=page&page_id=11' );
							if ($invoke->have_posts()) : while ($invoke->have_posts()) : $invoke->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<h1 class="page-title swiss-thin" itemprop="headline"><?php the_title(); ?></h1>
								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; wp_reset_query(); ?>

						</div>

				</div>

			</div><!--  end invoke -->

			<div id="inform" class="panel archive">

				<!-- <nav class="panel-nav">
					<a class="bottom" href="#home"><span>Home</span></a>
				</nav> -->
				
				<div class="inner-content wrap cf">

					<?php get_sidebar(); ?>

					<div class="main m-all t-2of3 d-1of2 last-col cf" role="main">

						<?php 
						$inform = new WP_Query( 'page_type=page&page_id=13' );
						if ($inform->have_posts()) : while ($inform->have_posts()) : $inform->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

								<h2 class="entry-title h3" itemprop="headline"><?php the_title(); ?></h2>

							</header> <?php // end article header ?>

							<section class="entry-content cf" itemprop="articleBody">
								<?php the_excerpt(); ?>
							</section> <?php // end article section ?>

							<footer class="article-footer cf">
							</footer>

						</article>

						<?php endwhile; else : ?>

								<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; wp_reset_query(); ?>

					</div>

				</div>

			</div><!--  end inform -->

			<div id="design" class="panel">

				<nav class="panel-nav">
					<a class="top" href="#home"><span>Home</span></a>
					<?php // if projects
					if( have_rows('add_projects', 7) ): 
					$projects = get_field('add_projects', 7);
					$count_projects = count($projects); ?>
					<a class="right" href="#project-1"><span>Next</span></a>
					<a class="left" href="#project-<?php echo $count_projects; ?>"><span>Prev</span></a>
					<?php endif; ?>
				</nav>
				
				<div class="inner-content wrap cf">

						<div class="main m-all d-all t-all cf" role="main">

							<?php 
							$design = new WP_Query( 'page_type=page&page_id=7' );
							if ($design->have_posts()) : while ($design->have_posts()) : $design->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<img class="cc-icon" src="<?php bloginfo('template_url'); ?>/library/images/cc-design.svg" alt="<?php the_title(); ?>" />

									<h1 class="page-title swiss-black" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content swiss-thin h1 cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; wp_reset_query(); ?>

						</div>

				</div>

			</div><!--  end design -->
			
			<?php // if projects
			if( have_rows('add_projects', 7) ): 
			$i=0;
			?>
			 
				<?php // loop through the rows of data
				while ( have_rows('add_projects', 7) ) : the_row(); 
				$i++;
				if($i==1){
					$prev = '#design';
					$next = '#project-2';
				} else if(($i>1)&&($i<$count_projects)){
					$prev = '#project-'. ($i-1);
					$next = '#project-'. ($i+1);
				} else if($i==$count_projects){
					$prev = '#project-'. ($i-1);
					$next = '#design';
				} else {
					$prev = '#project-'. ($count_projects-1);
					$next = '#project-01';
				}
				?>
				
				<?php 
				$imageV = wp_get_attachment_image_src(get_sub_field('project_image_v'), 'full'); 
				$imageH = wp_get_attachment_image_src(get_sub_field('project_image_h'), 'full'); 
				?>
				<div 
				id="project-<?php echo $i; ?>" 
				class="project panel" 
				style="background-image: url(<?php echo $imageV[0]; ?>);" 
				data-imageh="url(<?php echo $imageH[0]; ?>)" 
				data-imagev="url(<?php echo $imageV[0]; ?>)">

					<nav class="panel-nav">
						<a class="left" href="<?php echo $prev; ?>"><span>&larr;</span></a>
						<a class="right" href="<?php echo $next; ?>"><span>&rarr;</span></a>
					</nav>

					<div class="inner-content wrap cf">
						<div class="main m-all d-all t-all cf">
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section class="entry-content cf" itemprop="articleBody">
									<h1 class="project-title swiss-thin"><?php the_sub_field('project_title', 7); ?></h1>
									<p><strong><?php the_sub_field('project_description', 7); ?></strong></p>
								</section>
							</article>
						</div>
					</div>
				</div>

				<?php endwhile; ?>
			 
			<?php else : ?>
			    <!--  no projects -->
			<?php endif; ?>

			<!--  end projects -->

<?php get_footer(); ?>
