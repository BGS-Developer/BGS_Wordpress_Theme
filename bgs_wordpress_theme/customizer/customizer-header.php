<?php

add_action('customize_register', function($customizer){
    $customizer->add_panel(
      'header-panel',
          array(
            'title' => 'Header',
            'priority' => 1,
          )
      );
    $customizer->add_section(
      'header-section',
          array(
            'title' => 'Шапка',
            'description' => 'Вверхняя часть сайта',
            'priority' => 1,
            'panel' => 'header-panel'
          )
      );
          $customizer->add_setting(
            'header-title',
            array('default' => 'BGS')
          );
          $customizer->add_control(
            'header-title',
              array(
                  'label' => 'Изменение заголовка',
                  'section' => 'header-section',
                  'type' => 'text',
              )
          );
});

?>
