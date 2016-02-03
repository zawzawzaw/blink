<?php
/*-----------------------------------------------------------------------------------*/
/* Enable shortdoces in sidebar default Text widget
/*-----------------------------------------------------------------------------------*/
add_filter('widget_text', 'do_shortcode');

/*-----------------------------------------------------------------------------------*/
/* Profile Leaders
/*-----------------------------------------------------------------------------------*/
add_shortcode('profileleaders', 'theme_shortcode_profileleaders');   
function theme_shortcode_profileleaders($attr, $content)
{        
    ob_start();  
    get_template_part('/includes/profileleaders');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}

/*-----------------------------------------------------------------------------------*/
/* Portfolios
/*-----------------------------------------------------------------------------------*/
add_shortcode('portfolios', 'theme_shortcode_portfolios');   
function theme_shortcode_portfolios($attr, $content)
{        
    ob_start();  
    get_template_part('/includes/portfolios');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}

/*-----------------------------------------------------------------------------------*/
/* Honors
/*-----------------------------------------------------------------------------------*/
add_shortcode('honors', 'theme_shortcode_honors');   
function theme_shortcode_honors($attr, $content)
{        
    ob_start();  
    get_template_part('/includes/honors');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}

/*-----------------------------------------------------------------------------------*/
/* Media Coverages
/*-----------------------------------------------------------------------------------*/
add_shortcode('mediacoverages', 'theme_shortcode_mediacoverages');   
function theme_shortcode_mediacoverages($attr, $content)
{        
    ob_start();  
    get_template_part('/includes/mediacoverages');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}

/*-----------------------------------------------------------------------------------*/
/* Press Releases
/*-----------------------------------------------------------------------------------*/
add_shortcode('pressreleases', 'theme_shortcode_pressreleases');   
function theme_shortcode_pressreleases($attr, $content)
{        
    ob_start();  
    get_template_part('/includes/pressreleases');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}

/*-----------------------------------------------------------------------------------*/
/* Offices
/*-----------------------------------------------------------------------------------*/
add_shortcode('offices', 'theme_shortcode_offices');   
function theme_shortcode_offices($attr, $content)
{        
    ob_start();  
    get_template_part('/includes/offices');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
