<?php
function add_role_viajero()
{
    // remover role antes de poder cambiarlo
    remove_role('viajero');

    add_role(
        'viajero',
        'Viajero',
        [
            'read'         => true,
            'edit_posts'   => true,
            'upload_files' => true,
            'publish_posts' => true,
            'delete_posts' => true,
            'edit_published_posts' => true,
        ]
    );
}
 
// Add the simple_role.
add_action('init', 'add_role_viajero');

// add post type
function viajes_init()
{
    $labels = array(
        'name' => 'Viajes',
        'singular_name' => 'Viaje',
        'menu_name' => 'Viajes',
    );
    $args = array(
      'labels' => $labels,
        'description' => 'Viajes de Bogotá Gastro',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'viaje'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
    );

    register_post_type('viaje', $args);
}

add_action('init', 'viajes_init');

// function add_role_prueba()
// {
//     remove_role('prueba');
// }
 
// // Add the simple_role.
// add_action('init', 'add_role_prueba');

if (function_exists('acf_add_local_field_group')):

  acf_add_local_field_group(array(
    'key' => 'group_5e41ce2b105b7',
    'title' => 'Viaje',
    'fields' => array(
      array(
        'key' => 'field_5e41ce350f91f',
        'label' => 'Destino',
        'name' => 'destino',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5e41ce430f920',
        'label' => 'Vacunas obligatorias',
        'name' => 'vacunas_obligatorias',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5e41ce500f921',
        'label' => 'Vacunas recomendadas',
        'name' => 'vacunas_recomendadas',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5e41ce680f922',
        'label' => 'Transporte local',
        'name' => 'transporte_local',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5e41ced60f923',
        'label' => 'Peligrosidad',
        'name' => 'peligrosidad',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'baja' => 'Baja',
          'media' => 'Media',
          'alta' => 'Alta',
          'muy alta' => 'Muy alta',
        ),
        'default_value' => array(
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 1,
        'ajax' => 1,
        'return_format' => 'value',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5e41cf870f924',
        'label' => 'Moneda local',
        'name' => 'moneda_local',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'viaje',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;

  // para mostrar los custom fields desde la api
  add_action('rest_api_init', 'register_custom_fields');

function register_custom_fields()
{
    register_rest_field(
        'viaje',
        'destino',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'vacunas_obligatorias',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'vacunas_recomendadas',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'transporte_local',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'peligrosidad',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'moneda_local',
        array(
            'get_callback' => 'show_fields'
        )
    );
}

function show_fields($object, $field_name, $request)
{
    return get_post_meta($object[ 'id' ], $field_name, true);
}