<?php

function includeIfExists($file)
{
    return file_exists($file) ? include $file : false;
}

if ((!$loader = includeIfExists(__DIR__ . '/../vendor/autoload.php'))
    and (!$loader = includeIfExists(__DIR__ . '/../../../autoload.php'))
) {
    echo 'You must set up the project dependencies using `composer install`' . PHP_EOL;

    exit(1);
}

return $loader;
