<?php get_header(); ?>

			<div id="content" class="panel">

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>

					<div class="main m-all t-2of3 d-5of7 last-col cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">
								<?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
								<h1 class="entry-title single-title h2" itemprop="headline"><?php the_title(); ?></h1>
							</header> <?php // end article header ?>

							<section class="entry-content cf" itemprop="articleBody">
							  <?php the_content(); ?>
							</section> <?php // end article section ?>

							<footer class="article-footer">

							  <?php printf( __( '%1$s', 'bonestheme' ), get_the_category_list(' | ') ); ?>

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
