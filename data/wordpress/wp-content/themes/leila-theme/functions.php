<?php
function my_scripts() {
  wp_enqueue_style('style',get_template_directory_uri() . '/style.css');
  wp_enqueue_style('fontawesome-free',get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css');
  wp_enqueue_style('freelancer',get_template_directory_uri() . '/css/freelancer.min.css');
  wp_enqueue_script('bootstrap',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',array('jquery'), '',true);
  wp_enqueue_script('freelancerjs', get_template_directory_uri() .'/js/freelancer.min.js', array('jquery'), '', true);
  wp_enqueue_script('easingjs', get_template_directory_uri() .'/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true);
  wp_enqueue_script('bootstrapValidationjs',get_template_directory_uri() . '/js/jqBootstrapValidation.js',array('jquery'), '',true);
  wp_enqueue_style('Montera', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_enqueue_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
}
add_action('wp_enqueue_scripts', 'my_scripts');

function my_widgets_init() {
    register_sidebar( array(
                        'name'          => 'Footer 1',
                        'id'            => 'footer_1',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
    register_sidebar( array(
                        'name'          => 'Footer 2',
                        'id'            => 'footer_2',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
    register_sidebar( array(
                        'name'          => 'Footer 3',
                        'id'            => 'footer_3',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
    register_sidebar( array(
                        'name'          => 'sidebar',
                        'id'            => 'sidebar',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
}
