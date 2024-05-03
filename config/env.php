<?php
function parseEnv($filePath)
{
    $contents = file_get_contents($filePath);
    $lines = explode("\n", $contents);
    $env = [];

    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line) && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $env[trim($key)] = trim($value); // Trim kunci dan nilai
        }
    }
    return $env;
}

$env = parseEnv(__DIR__. "/.env");
// var_dump($env);

define('DB_HOST', $env['DB_HOST']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);
define('DB_NAME', $env['DB_NAME']);
define('BASEURL', $env['BASEURL']);