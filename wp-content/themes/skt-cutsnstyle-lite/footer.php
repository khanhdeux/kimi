<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Cutsnstyle
 */
?>
<div id="footer-wrapper">
    	<div class="container">
        
            <div class="cols-3 widget-column-1">  
            
             <h5><?php echo get_theme_mod('about_title',__('About Cut n Style','skt-cutsnstyle-lite')); ?></h5>            	
				<p><?php echo get_theme_mod('about_description',__('Consectetur, adipisci velit, sed quiaony on numquam eius modi tempora incidunt, ut laboret dolore agnam aliquam quaeratine voluptatem. ut enim ad minima veniamting suscipit lab velit, sed quiaony on numquam eius.','skt-cutsnstyle-lite')); ?></p>   
                
                 <div class="social-icons">
					<?php if ( '' !== get_theme_mod('fb_link') ) { ?>
                    <a title="facebook" class="fb" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','#facebook')); ?>"></a> 
                    <?php } ?>
                    <?php if ( '' !== get_theme_mod('twitt_link') ) { ?>
                    <a title="twitter" class="tw" target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','#twitter')); ?>"></a>
                    <?php } ?> 
                    <?php if ( '' !== get_theme_mod('gplus_link')) { ?>
                    <a title="google-plus" class="gp" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','#gplus')); ?>"></a>
                    <?php } ?>
                    <?php if ( '' !== get_theme_mod('linked_link')) { ?> 
                    <a title="linkedin" class="in" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','#linkedin')); ?>"></a>
                    <?php } ?>
                  </div>          	
             
            </div><!--end .col-3-->
			         
             
             <div class="cols-3 widget-column-2">
                 <h5><?php echo get_theme_mod('contact_title',__('Contact Info','skt-cutsnstyle-lite')); ?></h5>
                 <?php if( get_theme_mod('contact_no', '(0712) 456 9190') ) { ?>
                     <span class="phoneno"><?php echo get_theme_mod('contact_no', '(0712) 456 9190'); ?></span>
                 <?php } ?>

                 <?php if( get_theme_mod('contact_mail', 'contact@company.com') ) { ?>
                     <a href="mailto:<?php echo get_theme_mod('contact_mail','contact@company.com'); ?>"><span class="emailicon"><?php echo get_theme_mod('contact_mail', 'contact@company.com'); ?></span></a>
                 <?php } ?>
                          	
              </div><!--end .col-3-->
                      
               <div class="cols-3 widget-column-3">

                  <?php if( get_theme_mod('contact_add', '100 King St, Melbourne PIC 4000, Australia') ) { ?>
                    <span class="mapicon">
                        <?php echo get_theme_mod('contact_add', '100 King St, Melbourne PIC 4000, <br> Australia'); ?>
                        <?php if( get_theme_mod('contact_co', 'c/o RALPH SALGER FRISEURE') ) { ?>
                            <br /><?php echo get_theme_mod('contact_co', 'c/o RALPH SALGER FRISEURE'); ?>
                        <?php } ?>

                        <div id="map"></div>
                        <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq3lS6Nv-w5gZFelftcS8GXQnlDfrKxoA&callback=initMap">
                        </script>
                        <script>
                            // INIT Maps for footer contact page
                            function initMap() {
                                var uluru = {lat: 48.144943, lng: 11.559463};
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 15,
                                    center: uluru
                                });
                                var address = '<?php echo get_theme_mod('contact_add', '100 King St, Melbourne PIC 4000, <br> Australia'); echo ' <br />'; ?> <?php echo get_theme_mod('contact_co', 'c/o RALPH SALGER FRISEURE'); ?>';

                                var contentString = '<div id="content">'+
                                    '<div id="siteNotice">'+
                                    '</div>'+
                                    '<h6 id="firstHeading" class="firstHeading">' + address + '</h6>'+
                                    '</div>';

                                var infowindow = new google.maps.InfoWindow({
                                    content: contentString
                                });

                                var marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map,
                                    title: contentString
                                });

                                google.maps.event.addListener(marker, 'click', function() {
                                    infowindow.open(map,marker);
                                });

                                infowindow.open(map,marker);
                            }

                            jQuery(document).ready(function(){
                                google.maps.event.addDomListener(window, 'load', initMap()); // two calls
                            });

                        </script>

                        <style>
                            #map {
                                width: 100%;
                                height: 220px;
                                background-color: grey;
                            }
                        </style>

                    </span>
                  <?php } ?>

                </div><!--end .col-3-->
                
            <div class="clear"></div>
         </div><!--end .container-->
              
            
       <div class="copyright-wrapper">
        	<div class="container">
                <div class="copyright-txt"><?php esc_attr_e('&copy; 2016','skt-cutsnstyle-lite');?> <?php bloginfo('name'); ?>. <?php esc_attr_e('All Rights Reserved', 'skt-cutsnstyle-lite');?></div>
                <div class="designby"></div>
                <div class="clear"></div>
            </div>
        </div>
      
    </div><!--end .footer-->
<?php wp_footer(); ?>

</body>
</html>