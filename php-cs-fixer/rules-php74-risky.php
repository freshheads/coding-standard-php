<?php

$basicRules = require __DIR__ . '/rules-php74.php';

$riskyRules = [
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/ruleSets/PHP74MigrationRisky.rst
    '@PHP74Migration:risky' => true,

    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/ruleSets/SymfonyRisky.rst
    '@Symfony:risky' => true,

    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/alias/mb_str_functions.rst
    'mb_str_functions' => true,

    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/php_unit/php_unit_strict.rst
    'php_unit_strict' => true,

    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/function_notation/static_lambda.rst
    'static_lambda' => true,

    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/strict/strict_comparison.rst
    'strict_comparison' => true,

    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/strict/strict_param.rst
    'strict_param' => true,
];

return array_merge($basicRules, $riskyRules);
