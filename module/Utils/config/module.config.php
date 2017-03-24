<?php

return array(
    'router' => array(
        'routes' => array(
            'Utils' => array(
                'module' => 'Utils',
                'controller' => '',
                'view' => ''
            )
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'default'    => dirname(__FILE__) . '/../../App/view/layout/layout.phtml',
        ),
    ),
);
