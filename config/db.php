<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => sprintf('%s:host=%s;dbname=%s;port=%s',
        env('DB_CONNECTION', 'mysql'),
        env('DB_HOST', 'localhost'),
        env('DB_DATABASE'),
        env('DB_PORT', '3306')
    ),
    'username' => env('DB_USERNAME','root'),
    'password' => env('DB_PASSWORD','root'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    'enableSchemaCache' => env('DB_CACHE', false),
    'schemaCacheDuration' => env('DB_CACHE_DURATION', 60),
    'schemaCache' => env('DB_CACHE_SCHEMA', 'cache'),
];
