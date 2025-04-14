
<?php

/**
 * load_env.php
 *
 * Loads environment variables from a .env file into the $_ENV superglobal.
 *
 * Usage:
 * require_once __DIR__ . '/load_env.php';
 * loadEnv(__DIR__ . '/../.env');  // Adjust the path to your .env file as needed
 *
 * Now you can access environment variables using $_ENV['VARIABLE_NAME'].
 */

if (!function_exists('loadEnv')) {
    function loadEnv(string $filePath): void
    {
        if (!file_exists($filePath)) {
            error_log("Environment file not found: $filePath");
            return;
        }

        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            error_log("Error reading environment file: $filePath");
            return;
        }

        foreach ($lines as $line) {
            // Ignore comments
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            // Parse key=value pairs
            if (strpos($line, '=') !== false) {
                list($name, $value) = explode('=', $line, 2);
                $name = trim($name);
                $value = trim($value);

                // Set environment variable, overwriting existing ones
                $_ENV[$name] = $value;
            }
        }
    }
}