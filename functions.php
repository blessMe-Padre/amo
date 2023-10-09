<?php 
    // правильный способ подключить стили и скрипты темы
    add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

    function theme_add_scripts() {

        
        // подключаем файл swiper-bundle.min.css
        wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');

        // подключаем основной файл стилей темы
        wp_enqueue_style( 'style', get_stylesheet_uri());


        // подключаем js файл swiper-bundle.min.js
        wp_enqueue_script( 'swiper', get_template_directory_uri() .
        '/js/swiper-bundle.min.js', false, null, 'footer' );
    

        // подключаем основной script.js файл
        wp_enqueue_script( '', get_template_directory_uri() .
        '/js/main.min.js', false, null, 'footer' );
    }
?>