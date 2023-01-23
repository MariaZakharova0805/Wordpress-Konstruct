<?php
//подключение скрпитов и стилей специальным скриптом
add_action('wp_enqueue_scripts', 'add_sripts_and_styles');
add_theme_support('custom-logo');
function add_sripts_and_styles()
{
    //деактивировали старый jquery WP
    wp_deregister_script('jquery');

    //регистрируем свой jquery, если oн есть
    // wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);
    //регистрируем свой jquery, если oн есть
    // wp_enqueue_script( 'jquery.min.js' )

    //подключаем свой JS файл
    //если main.js зависит от других файлов, то зависисмость false -> array('jquery')
    //'footer' == trueб можно писать так и так
    wp_enqueue_script('test', get_template_directory_uri() . '/assets/js/test.js', false, null, 'footer');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('test'), null, 'footer');

    //подключаем стили
    //Если есть какие-то дополнительные помимо main, то указываем их:
    wp_enqueue_style('nullstyle', get_template_directory_uri() . '/assets/css/nullstyle.css');
    wp_enqueue_style('fontello', get_template_directory_uri() . '/assets/css/fontello.css', array('nullstyle'));

    //подключаем основной style.css в корне темы
    //если есть зависимоти, до указываем их через , array('nullstyle'), если зависимостей нет, то false
    wp_enqueue_style('main', get_stylesheet_uri(), array('fontello'));
}
?>