<?php

function my_scripts()
{
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.min.js', array('jquery'), '', true);
    wp_enqueue_style(
      'Montserrat',
      "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300"
    );
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_script(
      'bootstrapcdn',
      'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
      array('jquery'),
      '',
      true
    );
}


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