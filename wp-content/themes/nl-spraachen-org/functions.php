<?php

add_action('after_setup_theme', 'nl_spraachen_theme_setup');

function nl_spraachen_theme_setup() {
    // Add Translation Option
    //load_theme_textdomain('nl-spraachen-org', get_stylesheet_directory() . '/languages');
    load_theme_textdomain('nl-spraachen-org', get_template_directory() . '/languages');


    $locale = get_locale();
    $locale_file = get_stylesheet_directory_uri() . "/languages/$locale.php";


    //init styles
    if (!function_exists("my_styles")) {
        if (!is_admin()) {

            function my_styles() {
                wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
   
                wp_enqueue_style('custom-bootstrap', get_stylesheet_directory_uri() . '/library/css/bootstrap.min.css', 'style', '1.0', 'all');
                 wp_enqueue_style('bootstrap-theme', get_stylesheet_directory_uri() . '/library/css/bootstrap-theme.min.css', 'style', '1.0', 'all', array('custom-bootstrap'));
                  
                wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic|Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic', 'style', '1.0', 'all');
                wp_enqueue_style('fontawseome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', '4.4.0', 'all');
                wp_enqueue_style('qtip', get_stylesheet_directory_uri() . '/library/css/jquery.qtip.min.css', null, false, false);
                wp_enqueue_style('myStyle', get_stylesheet_directory_uri() . '/library/css/myStyle.css', 'style', '1.0', 'all', array('custom-bootstrap', 'bootstrap-theme'));
                wp_enqueue_style('print', get_stylesheet_directory_uri() . '/library/css/print.css', 'style', '1.0', 'print', array('myStyle'));
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_styles');
    
        // delete parent bootstrap styles
    if (!function_exists("old_wpbs_styles")) {
        if (!is_admin()) {

            function old_wpbs_styles() {
                wp_dequeue_style('bootstrap');
                wp_dequeue_style('wpbs-style');
            }

        }
    }
    add_action('wp_enqueue_scripts', 'old_wpbs_styles');
      //init scripts
  
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {
                // tooltips
                wp_enqueue_script('qtip', 'http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js', array('jquery'), false, true);
                wp_enqueue_script('qtip');

                wp_register_script('custom', get_stylesheet_directory_uri() . '/library/js/custom.js', array('jquery'), '1.2');
                wp_enqueue_script('custom');
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_scripts');

    
    if (!function_exists('remove_sidebars')) {
                  function remove_sidebars() {
                unregister_sidebar('footer1');
                unregister_sidebar('footer2');
                unregister_sidebar('footer3');
                #unregister_sidebar('sidebar1');
                unregister_sidebar('sidebar2');
            }
    }
     add_action('init', 'remove_sidebars');
    if (!function_exists('add_new_sidebars')) {

        function add_new_sidebars() {
            register_sidebar(array(
                'name' => __('Sidebar Contact'),
                'id' => 'contact-sidebar',
                'description' => _('... shows the contact data in the header'),
                'before_widget' => '<div id="contact-sidebar">',
                'after_widget' => '</div>',
            ));
            register_sidebar(array(
                'name' => __('Sidebar Intern'),
                'id' => 'intern-sidebar',
                'description' => _('... Zeigt das Menu für eingeloggte User'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
            ));
        }

    }
    add_action('init', 'add_new_sidebars');
    
    function wp_bootstrap_footer_intern() { 
  // Display the WordPress menu if available
  wp_nav_menu(
    array(
      'menu' => 'footer_intern', /* menu name */
      'theme_location' => 'footer_intern', /* where in the theme it's assigned */
      'container_class' => 'footer-links clearfix', /* container class */
    )
  );
}

    function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/library/img/login-logo.png);
            background-size:contain;
            padding-bottom: 30px;
            width:315px;
            height:110px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
}

$subRole = get_role( 'subscriber' );
$subRole->add_cap( 'read_private_pages' );
$subRole->add_cap( 'read_private_posts' );

//TRim Title of private posts
function the_title_trim($title)
{
  $pattern[0] = '/Protected:/';
  $pattern[1] = '/Private:/';
  $pattern[2] = '/Privat:/';
  $replacement[0] = ''; // Enter some text to put in place of Protected:
  $replacement[1] = ''; // Enter some text to put in place of Private:
  $replacement[2] = ''; // Enter some text to put in place of Private:

  return preg_replace($pattern, $replacement, $title);
}
add_filter('the_title', 'the_title_trim');
?>