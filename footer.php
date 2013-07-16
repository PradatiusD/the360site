
            <div class="clearfix"></div>
            
            



            
    </div><!-- /#container -->



   



          




   
    
    </div><!-- /wrap -->
    
    
    
    <div id="b_footer"> 
            <ul class="nav nav_social">
                <?php
                    $hlink_facebook = of_get_option('hlink_facebook'); 
                    $hlink_twitter = of_get_option('hlink_twitter'); 
                    $hlink_flickr = of_get_option('hlink_flickr'); 
                    $hlink_youtube = of_get_option('hlink_youtube'); 
                    $hlink_vimeo = of_get_option('hlink_vimeo'); 
                    $hlink_skype = of_get_option('hlink_skype'); 
                    $hlink_linkedin = of_get_option('hlink_linkedin'); 
                    $hlink_dribbble = of_get_option('hlink_dribbble'); 
                    $hlink_forrst = of_get_option('hlink_forrst'); 
                    $hlink_google = of_get_option('hlink_google'); 
                    $hlink_tumblr = of_get_option('hlink_tumblr'); 
                    $hlink_instagram = of_get_option('hlink_instagram'); 
                    $hlink_foursquare = of_get_option('hlink_foursquare'); 
                    $hlink_pinterest = of_get_option('hlink_pinterest'); 
                    $hlink_rss = of_get_option('hlink_rss'); 
                ?>
                    <?php if($hlink_facebook){ ?> <li class="n_facebook"><a href="<?php echo $hlink_facebook; ?>" target="_blank" data-toggle="tooltip" title="Facebook" ><i class="foundicon-facebook"></i></a></li> <?php } ?>
                    <?php if($hlink_twitter){ ?> <li class="n_twitter"><a href="<?php echo $hlink_twitter; ?>" target="_blank" data-toggle="tooltip" title="tTwitter"><i class="foundicon-twitter"></i></a></li> <?php } ?>
                    <?php if($hlink_flickr){ ?> <li class="n_flickr"><a href="<?php echo $hlink_flickr; ?>" target="_blank" data-toggle="tooltip" title="Flickr"><i class="foundicon-flickr"></i></a></li> <?php } ?>
                    <?php if($hlink_linkedin){ ?> <li class="n_linkedin"><a href="<?php echo $hlink_linkedin; ?>" target="_blank" data-toggle="tooltip" title="Linkedin"><i class="foundicon-linkedin"></i></a></li> <?php } ?>
                    <?php if($hlink_youtube){ ?> <li class="n_youtube"><a href="<?php echo $hlink_youtube; ?>" target="_blank" data-toggle="tooltip" title="YouTube"><i class="foundicon-youtube"></i></a></li> <?php } ?>
                    <?php if($hlink_vimeo){ ?> <li class="n_vimeo"><a href="<?php echo $hlink_vimeo; ?>" target="_blank" data-toggle="tooltip" title="Vimeo"><i class="foundicon-vimeo"></i></a></li> <?php } ?>
                    <?php if($hlink_skype){ ?> <li class="n_skype"><a href="<?php echo $hlink_skype; ?>" target="_blank" data-toggle="tooltip" title="Skype"><i class="foundicon-skype"></i></a></li> <?php } ?>
                    <?php if($hlink_dribbble){ ?> <li class="n_dribbble"><a href="<?php echo $hlink_dribbble; ?>" target="_blank" data-toggle="tooltip" title="Dribbble"><i class="foundicon-dribbble"></i></a></li> <?php } ?>
                    <?php if($hlink_forrst){ ?> <li class="n_forrst"><a href="<?php echo $hlink_forrst; ?>" target="_blank" data-toggle="tooltip" title="Forrst"><i class="foundicon-forrst"></i></a></li> <?php } ?>
                    <?php if($hlink_google){ ?> <li class="n_google"><a href="<?php echo $hlink_google; ?>" target="_blank" data-toggle="tooltip" title="Google Plus"><i class="foundicon-google-plus"></i></a></li> <?php } ?>
                    <?php if($hlink_tumblr){ ?> <li class="n_tumblr"><a href="<?php echo $hlink_tumblr; ?>" target="_blank" data-toggle="tooltip" title="Tumblr"><i class="foundicon-tumblr"></i></a></li> <?php } ?>
                    <?php if($hlink_instagram){ ?> <li class="n_tumblr"><a href="<?php echo $hlink_instagram; ?>" target="_blank" data-toggle="tooltip" title="Instagram"><i class="foundicon-instagram"></i></a></li> <?php } ?>
                    <?php if($hlink_foursquare){ ?> <li class="n_tumblr"><a href="<?php echo $hlink_foursquare; ?>" target="_blank" data-toggle="tooltip" title="Foursquare"><i class="foundicon-foursquare"></i></a></li> <?php } ?>
                    <?php if($hlink_pinterest){ ?> <li class="n_tumblr"><a href="<?php echo $hlink_pinterest; ?>" target="_blank" data-toggle="tooltip" title="Pinterest"><i class="foundicon-pinterest"></i></a></li> <?php } ?>
                    <?php if($hlink_rss){ ?> <li class="n_rss"><a href="<?php echo $hlink_rss; ?>" target="_blank" data-toggle="tooltip" title="RSS"><i class="foundicon-rss"></i></a></li> <?php } ?>

                      
            </ul>
            <div id="filter_lists"></div>


                <div class="b_footer_text">
                    <p><?php $footer_text = of_get_option('footer_text'); if($footer_text){ echo stripslashes($footer_text);} ?></p>
                </div>

              </div><!-- /b_footer -->
    
    






    <?php
    if (!is_page_template( "gallery-fullscreen.php" )) {
        //Load the Fullscreen Image system
        require_once (THEME_FULLSCREEN . "/image.php");
    }
    
    ?>
    
    
    
        
    <!-- WP_Footer --> 
    <?php wp_footer(); ?>
    <!-- /WP_Footer --> 

    <!-- Custom scripts by Daniel Prada -->
    <script>
    jQuery(document).ready(function($){
        // Replace select navigation with ul li navigation
        $('.tinynav').hide()
        var selectNav = $('.tinynav').html();
        var mobileNavli = selectNav.replace(/- /g,'').replace('<option value="#">Portfolio</option>','').replace(/option/g,"a").replace(/value=/g,"href=");
        var mobileNav = "<ul id='PDnav'>"+mobileNavli+"</ul>";
        $('.tinynav').after(mobileNav);        
        $('#PDnav a').wrap('<li>');
        
        var mobileNavTotalHeight = $('#PDnav').outerHeight()

        var navitemHeight = $('#PDnav li').eq(0).outerHeight();
        $('#PDnav').css({'height': navitemHeight});

        var mobileCount = 0;
        $('#PDnav li:first-child').click(function(){
            if (mobileCount === 0) {
                $('#PDnav').animate({'height':mobileNavTotalHeight});
                mobileCount++;
            } else {
                $('#PDnav').animate({'height':navitemHeight});
                mobileCount--
            }
            
        })
        // Fix for display of About us content on mobile.
        var bodyWidth = $('body').width();
        if (bodyWidth < 481 && document.URL === 'http://the360site.com/about-us/') {
            var CarlosPhotoHTML = $('article#post-7 .one_third').eq(0).html();
            $('article#post-7 .two_third').eq(0).before(CarlosPhotoHTML).wrap('<div class="one_third">');
            $('article#post-7 .one_third').eq(1).remove();
            $('article#post-7 .two_third').removeClass('two_third');
            $('article#post-7 .one_third').removeClass('one_third last');
            $('article#post-7 img').addClass('about-us-photo')            
        }
    })
    </script>
    </body>
</html>