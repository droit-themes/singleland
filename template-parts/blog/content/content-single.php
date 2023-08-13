<?php 
/**
 * template to display single page content 
 */
$show_social_share = singleland_opt('display_blog_share', 'no');

?>
<div class="blog_single_info">
    <div class="media_blog_content">
      <?php  if(has_post_thumbnail( )) {  ?>
        <div class="single-page-media">
           <?php the_post_thumbnail(); ?>
        </div>
        <?php } ?>
       
        <?php the_content();
        
            wp_link_pages(
                array(
                    'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'singleland' ) . '">',
                    'after'    => '</nav>',
                    /* translators: %: page number. */
                    'pagelink' => esc_html__( 'Page %', 'singleland' ),
                )
            );
        
        ?>
       
          <?php   if($show_social_share  == 'yes' && function_exists('_pluginname_social_share') || has_tag()){ ?>
            <div class="post_bottom">
             <?php 
              singleland_single_page_tag();
              if($show_social_share  == 'yes' && function_exists('_pluginname_social_share')){
                _pluginname_social_share();
            }
             ?>
                <div class="share">
                    <span><?php echo esc_html_e($show_social_title); ?></span>
                    <ul class="social_icon list-unstyled">
                    <?php
                        if( '1' == $opt['is_social_share_links']['facebook'] ){
                    ?>
                      <li> <a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a></li>
                      
                    <?php } ?>

                    <?php
                    if( '1' == $opt['is_social_share_links']['twitter'] ){ ?>
                      <li> <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a></li>
                    <?php } ?>

                    <?php 
                    if( '1' == $opt['is_social_share_links']['pinterest'] ){ ?>
                      <li> <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink() ?>"><i class="fab fa-pinterest-p"></i></a></li> 
                    <?php } ?> 

                    <?php 
                    if( '1' == $opt['is_social_share_links']['linkedin'] ){ ?>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>"><i class="fab fa-linkedin-in"></i></a></li>
                    <?php } ?>

                    </ul>
                </div>
            </div>
           <?php }  ?>
       
    </div>
</div>
                      
    <!-- End medical blog list area -->

 