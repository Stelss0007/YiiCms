<?php

return [
    [
        'pattern' => '<action>',
        'route' => 'permission/admin/<action>',
        'defaults' => [
            'action' => 'index',
        ],
    ],
];
