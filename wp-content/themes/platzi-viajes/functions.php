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

function add_role_prueba()
{
    remove_role('prueba');
}
 
// Add the simple_role.
add_action('init', 'add_role_prueba');