				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 cf" role="complementary">

					<h1 class="page-title swiss-thin">Inform</h1>

					<?php if( !is_archive() ){ ?>
					<a class="home-link bottom" href="#home" title="Go Home | Christiansen Creative">
						<img src="<?php bloginfo('template_url'); ?>/library/images/cc-inform.svg" alt="Go Home" width="90" />
					</a>
					<?php } ?>

					<?php if(is_single() || is_archive()): 
						if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

						<?php else : ?>

							<?php
								/*
								 * This content shows up if there are no widgets defined in the backend.
								*/
							?>

							<div class="no-widgets">
								<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
							</div>

						<?php endif; // end if dynamic_sidebar ?>
						
						<a class="sidebar-home-link" href="<?php bloginfo('url'); ?>" title="Go Home | Christiansen Creative">Home</a>
						
					<?php endif; // end if single or archive ?>
					
				</div>
