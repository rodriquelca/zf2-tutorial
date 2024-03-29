<?php
// module/Album/config/module.config.php:
return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',

        ),
    ),
    'router' => array(
        'routes' => array(
            'Album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'   => '/Album[/:action][/:id]',
                        'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'=> '[0-9]+',
                    ),
                        'defaults' => array(
                        'controller' => 'Album\Controller\Album',
                        'action'    => 'index',
                    ),
                ),
            ),
        ),
    ),


    'view_manager' => array(
        'template_path_stack' => array(
            'Album' => __DIR__ . '/../view',
        ),
    ),
);
