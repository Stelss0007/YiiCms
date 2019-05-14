<?php

return [
    [
        'pattern' => '<action>',
        'route' => 'user/admin/<action>',
        'defaults' => [
            'action' => 'index',
        ],
    ],
];
