<?php 
$singleland_header_layout = singleland_opt('singleland_header_layout', 'container'); 
$singleland_menu_layout = singleland_opt('singleland_menu_layout', 'center'); 

?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php if($singleland_header_layout == 'container'){echo "container";}else{echo "container-fluid";} ?>">
        <?php singleland_logo(); ?>
        <div class="collapse navbar-collapse <?php if($singleland_menu_layout == 'center'){echo "justify-content-center";}elseif($singleland_menu_layout == 'start'){echo "justify-content-start";}else{echo "justify-content-end";} ?>" id="navbarSupportedContent">

            <?php 
            
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu',
                        'container'  => '',
                        'theme_location' => 'main_menu',
                        'walker'         => new singleland_Navwalker(),
                        'fallback_cb'     => false,
                ) ); 

            ?>
            
        </div>
        <?php get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
    </div>
</nav>