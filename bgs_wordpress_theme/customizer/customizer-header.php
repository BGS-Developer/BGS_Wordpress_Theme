<?php

add_action('customize_register', function($customizer){
    //Header panel
    //----------------
    $customizer->add_panel(
      'header-panel',
          array(
            'title' => 'Header',
            'priority' => 1,
          )
      );
      //header section
      $customizer->add_section(
        'header-section',
            array(
              'title' => 'Шапка',
              'description' => 'Вверхняя часть сайта',
              'priority' => 1,
              'panel' => 'header-panel'
            )
        );
            //header title
            $customizer->add_setting(
              'header-title',
              array('default' => 'BGS')
            );
            $customizer->add_control(
              'header-title',
                array(
                    'label' => 'Заголовок',
                    'section' => 'header-section',
                    'type' => 'text',
                )
            );
            //header background
            $customizer->add_setting(
              'header-background',
                array(
                  'sanitize_callback' => 'sanitize_hex_color',
                )
            );
            $customizer->add_control(
              new WP_Customize_Color_Control(
              $customizer,
              'header-background',
              array(
                  'label' => 'Цвет заднего фона',
                  'section' => 'header-section',
                  'settings' => 'header-background',
                )
              )
            );
            //header padding
            $customizer->add_setting(
              'header-padding-y',
              array('default' => '10px')
            );
            $customizer->add_control(
              'header-padding-y',
                array(
                    'label' => 'Внутренний отступ по вертикали',
                    'section' => 'header-section',
                    'type' => 'text',
                )
            );
            $customizer->add_setting(
                'header-radio',
                array('default' => 'block')
            );

            $customizer->add_control(
                'header-radio',
                array(
                    'type' => 'radio',
                    'label' => 'Описание сайта',
                    'section' => 'header-section',
                    'choices' => array(
                        'block' => 'Отобразить',
                        'none' => 'Скрыть',
                    ),
                )
            );
});

?>
