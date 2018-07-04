<?php
function scripts()
{
    // Custom scripts require a unique slug (Theme Name).
    
    
    
    wp_enqueue_script('jquery-3.3.1', get_template_directory_uri() . '/js/jquery-3.3.1.js', array(), '1.0.0', true);
    wp_enqueue_script('mdb', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true);
    wp_enqueue_script('fontawesome-all', get_template_directory_uri() . '/js/fontawesome-all.js', array(), '1.0.0', true);
    
    wp_enqueue_script('sticky-kit', get_template_directory_uri() . '/js/sticky-kit.js', array(), '1.0.0', true);
    wp_enqueue_script('sticky-kit.min', get_template_directory_uri() . '/js/sticky-kit.min.js', array(), '1.0.0', true);
    
    
    
    wp_enqueue_script('scripts1', get_template_directory_uri() . '/js/scripts1.js', array(), '1.0.0', true);
    /*
     * To avoid double loading Genericons will not need a slug. Same applies
     * to all other non-custom styles or scripts.
     */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0');
    
    wp_enqueue_style('mdb', get_template_directory_uri() . '/css/mdb.min.css', array(), '1.0.0');
    
    wp_enqueue_style('bootstrap-horizon', get_template_directory_uri() . '/css/bootstrap-horizon.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'scripts');







function wpdocs_custom_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);





function wpb_set_post_views($postID)
{
    $count_key = 'wpb_post_views_count';
    $count     = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



add_image_size('galeria', 534, 462, true);

add_image_size('galeria1', 533, 261, true);

add_image_size('galeria2', 265, 193, true);

add_image_size('noticias-blog', 400, 250, true);






add_filter('rwmb_meta_boxes', 'prefix_register_meta_boxes');
function prefix_register_meta_boxes($meta_boxes)
{
    $prefix       = 'field_prefix_';
    $meta_boxes[] = array(
        'id' => 'curso',
        'title' => 'informação do curso',
        'post_types' => array(
            'page'
        ),
        'context' => 'normal',
        'priority' => 'high',
        
        'fields' => array(
            
            
            
           array(
                'id' => 'classe1',
                'type' => 'text',
                'name' => esc_html__('classe css', 'metabox-online-generator'),
                'desc' => esc_html__('classse css', 'metabox-online-generator'),
                'placeholder' => esc_html__('entre com a classe css', 'metabox-online-generator'),
                'size' => 30
            ),
            
            
            array(
                'name' => 'titulo',
                'label_description' => 'Coloque um titulo de destaque',
                'id' => 'titulo1',
                'desc' => 'Coloque um titulo de destaque',
                'type' => 'text',
                'placeholder' => 'Digite o texto',
                'size' => 30
                
            ),
            
            
            array(
                'name' => 'campo de texto',
                'label_description' => 'Label description',
                'id' => 'texto21',
                'desc' => 'Coloque um texto de destaque',
                'type' => 'textarea',
                'placeholder' => 'Digite o texto'
                
                
            ),
            
            array(
                'name' => 'campo de texto shortcode',
                'id' => 'campop',
                'type' => 'text'
            ),
            
            array(
                'type' => 'heading',
                'name' => 'Artigo 2',
                'desc' => 'Artigo 2'
            ),
            
            array(
                'type' => 'divider'
            ),
            
            
            
            
            array(
                'id' => 'classe',
                'type' => 'text',
                'name' => esc_html__('classe css', 'metabox-online-generator'),
                'desc' => esc_html__('classse css', 'metabox-online-generator'),
                'placeholder' => esc_html__('entre com a classe css', 'metabox-online-generator'),
                'size' => 30
            ),
            
            
            array(
                'name' => 'titulo',
                'label_description' => 'Coloque um titulo de destaque',
                'id' => 'texto1',
                'desc' => 'Coloque um titulo de destaque',
                'type' => 'text',
                'placeholder' => 'Digite o texto',
                'size' => 30
                
            ),
            
            
            array(
                'name' => 'campo de texto',
                'label_description' => 'Label description',
                'id' => 'texto2',
                'desc' => 'Coloque um texto de destaque',
                'type' => 'textarea',
                'placeholder' => 'Digite o texto'
                
                
            ),
            
            
            
            
            
            
            
            
            array(
                'type' => 'heading',
                'name' => 'Artigo3',
                'desc' => 'Artigo3'
            ),
            
            array(
                'type' => 'divider'
            ),
            
            
            
            
            
            
            array(
                'id' => 'classe3',
                'type' => 'text',
                'name' => esc_html__('classe css', 'metabox-online-generator'),
                'desc' => esc_html__('classse css', 'metabox-online-generator'),
                'placeholder' => esc_html__('entre com a classe css', 'metabox-online-generator'),
                'size' => 30
            ),
            
            
            array(
                'name' => 'titulo',
                'label_description' => 'Coloque um titulo de destaque',
                'id' => 'texto3',
                'desc' => 'Coloque um titulo de destaque',
                'type' => 'text',
                'placeholder' => 'Digite o titulo',
                'size' => 30
                
            ),
            
            
            array(
                'name' => 'campo de texto',
                'label_description' => 'Label description',
                'id' => 'texto3',
                'desc' => 'Coloque o Texto do artigo',
                'type' => 'textarea',
                'placeholder' => 'Digite o texto'
                
                
            ),
            
            
            
            
            
            array(
                'type' => 'heading',
                'name' => 'ARtigo4',
                'desc' => 'Artigo4'
            ),
            
            array(
                'type' => 'divider'
            ),
            
            
            
            
            
            
            array(
                'id' => 'classe4',
                'type' => 'text',
                'name' => esc_html__('classe css', 'metabox-online-generator'),
                'desc' => esc_html__('classse css', 'metabox-online-generator'),
                'placeholder' => esc_html__('entre com a classe css', 'metabox-online-generator'),
                'size' => 30
            ),
            
            
            array(
                'name' => 'titulo',
                'label_description' => 'Coloque um titulo de destaque',
                'id' => 'titulo4',
                'desc' => 'Coloque um titulo do artigo',
                'type' => 'text',
                'placeholder' => 'Digite o titulo',
                'size' => 30
                
            ),
            
            
            array(
                'name' => 'campo de texto',
                'label_description' => 'Label description',
                'id' => 'texto4',
                'desc' => 'Coloque o texto do artigo',
                'type' => 'textarea',
                'placeholder' => 'Digite o texto do artigo'
                
                
            ),
            
            
            
            
            
            
            
            array(
                'type' => 'heading',
                'name' => 'ARtigo5',
                'desc' => 'ARtigo5'
            ),
            
            array(
                'type' => 'divider'
            ),
            
            
            
            
            
            
            array(
                'id' => 'classe5',
                'type' => 'text',
                'name' => esc_html__('classe css', 'metabox-online-generator'),
                'desc' => esc_html__('Insira o icone do font-awsome', 'metabox-online-generator'),
                'placeholder' => esc_html__('entre com a classe do icone', 'metabox-online-generator'),
                'size' => 30
            ),
            
            
            array(
                'name' => 'titulo',
                'label_description' => 'Coloque um titulo de destaque',
                'id' => 'titulo5',
                'desc' => 'Coloque o titulo do artigo',
                'type' => 'text',
                'placeholder' => 'Digite o titulo',
                'size' => 30
                
            ),
            
            
            array(
                'name' => 'campo de texto',
                'label_description' => 'Label description',
                'id' => 'texto5',
                'desc' => 'Escreva o texto do artigo',
                'type' => 'textarea',
                'placeholder' => 'Digite o texto'
                
                
            ),
            
            
            
            
            
            
            
            array(
                'type' => 'heading',
                'name' => 'Artigo6',
                'desc' => 'Artigo6'
            ),
            
            array(
                'type' => 'divider'
            ),
            
            
            
            
            
            
            array(
                'id' => 'icone6',
                'type' => 'text',
                'name' => esc_html__('classe css', 'metabox-online-generator'),
                'desc' => esc_html__('Insira o icone do font-awsome', 'metabox-online-generator'),
                'placeholder' => esc_html__('entre com a classe css', 'metabox-online-generator'),
                'size' => 30
            ),
            
            
            array(
                'name' => 'titulo',
                'label_description' => 'Coloque um titulo de destaque',
                'id' => 'titulo6',
                'desc' => 'Coloque o titulo do artigo',
                'type' => 'text',
                'placeholder' => 'Digite o Titulo',
                'size' => 30
                
            ),
            
            
            array(
                'name' => 'campo de texto',
                'label_description' => 'Label description',
                'id' => 'texto6',
                'desc' => 'Escreva o texto do artigo',
                'type' => 'textarea',
                'placeholder' => 'Digite o texto'
                
                
            ),
            
            
            
            
            
            
            
            
            
            
            
            
            
        )
    );
    
    // Add more meta boxes if you want
    // $meta_boxes[] = ...
    
    return $meta_boxes;
}









// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');








/* 
 * Change Meta Box visibility according to Page Template
 *
 * Observation: this example swaps the Featured Image meta box visibility
 *
 * Usage:
 * - adjust $('#postimagediv') to your meta box
 * - change 'page-portfolio.php' to your template's filename
 * - remove the console.log outputs
 */

add_action('admin_head', 'wpse_50092_script_enqueuer');

function wpse_50092_script_enqueuer()
{
    global $current_screen;
    if ('page' != $current_screen->id)
        return;
    
    echo <<<HTML
       <script type="text/javascript">
        jQuery(document).ready( function($) {

            /**
             * Adjust visibility of the meta box at startup
            */
            if($('#page_template').val() == 'page-homepage.php') {
                // show the meta box
                $('#curso').show();
            } else {
                // hide your meta box
                $('#curso').hide();
            }

            // Debug only
            // - outputs the template filename
            // - checking for console existance to avoid js errors in non-compliant browsers
            if (typeof console == "object") 
                console.log ('default value = ' + $('#page_template').val());

            /**
             * Live adjustment of the meta box visibility
            */
            $('#page_template').live('change', function(){
                    if($(this).val() == 'page-portfolio.php') {
                    // show the meta box
                    $('#postimagediv').show();
                } else {
                    // hide your meta box
                    $('#postimagediv').hide();
                }

                // Debug only
                if (typeof console == "object") 
                    console.log ('live change value = ' + $(this).val());
            });                 
        });    
        </script>
HTML;
}
?>