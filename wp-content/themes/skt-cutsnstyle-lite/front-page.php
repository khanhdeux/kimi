<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Cutsnstyle
 */

get_header(); ?>

<?php if ( is_front_page() && ! is_home() ) { ?>
<section id="wrapfirst" class="pagewrap1">
        <div class="container">
                <?php 
		/*Home Section Content*/
		if( get_theme_mod('page-setting1')) { ?>
		<?php $queryvar = new WP_query('page_id='.get_theme_mod('page-setting1' ,true)); ?>
		<?php while( $queryvar->have_posts() ) : $queryvar->the_post();?> 
		
         <h1><?php the_title(); ?></h1>         
         <?php the_post_thumbnail();?>
		 <?php the_content(); ?>
         <div class="clear"></div>
        <?php endwhile; } else { ?>      
       <h1><?php _e('Welcome','skt-cutsnstyle-lite'); ?></h1>
       <p><?php _e('Nunc faucibus velit ut tortor accumsan ultrices. Aliquam placerat libero vel pharetra placerat. Ut euismod elit id dui tincidunt rhont cusing. Proin pellentesque consequat finibus. Fusce pulvinar tortor sit amet ipsum lacinia, egestas mollis tortor scelerisque. Proin consequatted aliquet eleifend. Mauris laoreet ligula non metus tristique sodales. Pellentesque nec vehicula magna, sed convallis eros. Integer eget and dolor nunc. Nulla sem nibh, pellentesque ac posuere sit amet, lobortis eu nisi. Aliquam nulla ex, elementum ut porttitor vitae, tincidunt on vitae mauris.','skt-cutsnstyle-lite'); ?></p>
        <?php } ?>
        <div class="clear"></div>
         </div><!-- container -->
     </section><!-- #wrapfirst --> 
      <div class="clear"></div> 


       <section id="wrapsecond" class="pagewrap2">
            	<div class="container"> 
                 <h2 class="section_title"><?php echo get_theme_mod('threecols_title',__('Our Services','skt-cutsnstyle-lite')); ?></h2>                   
                      <?php for($p=1; $p<4; $p++) { ?>       
        	<?php if( get_theme_mod('page-column'.$p,false)) { ?>          
        		<?php $queryxxx = new WP_query('page_id='.get_theme_mod('page-column'.$p,true)); ?>				
						<?php while( $queryxxx->have_posts() ) : $queryxxx->the_post(); ?> 
                        <div class="listpages <?php if($p % 3 == 0) { echo "last_column"; } ?>">                      
						<a href="<?php the_permalink(); ?>">
						<div class="services-thumb"><?php the_post_thumbnail('skt-cutsnstyle-lite-page-thumb');?></div>
                        <div class="services-content">
						  <h2><?php the_title(); ?></h2>						 
                          <?php the_excerpt(); ?>
                        </div>
                        </a>
                        </div>
						<?php endwhile;
						wp_reset_query(); ?>
            <?php } else { ?>
					<div class="listpages <?php if($p % 3 == 0) { echo "last_column"; } ?>">                       
                        <a href="#">
                        <div class="services-thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/about<?php echo $p; ?>.jpg" alt="" /></div> 
                        <div class="services-content">
                          <?php if($p == 1) { ?>
                            <h2><?php echo __('TYPE ADVICE & CUT','skt-cutsnstyle-lite'); ?></h2>
                          <?php } else if ($p == 2) { ?>
                            <h2><?php echo __('HAIR EXTENSION','skt-cutsnstyle-lite'); ?></h2>
                          <?php } else if ($p == 3) { ?>
                            <h2><?php echo __('COLORATION','skt-cutsnstyle-lite'); ?></h2>
                          <?php } ?>
                        </div>
                       </a>
                     </div>
			<?php }} ?>                     
             
              <div class="clear"></div>
            </div><!-- container -->
 </section>
<?php } ?>
<?php get_footer(); ?>