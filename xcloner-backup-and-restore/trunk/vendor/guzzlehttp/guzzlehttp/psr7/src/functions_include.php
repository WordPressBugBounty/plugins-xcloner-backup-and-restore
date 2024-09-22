<?php

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }
?><?php

// Don't redefine the functions if included multiple times.
if (!function_exists('GuzzleHttp\Psr7\str')) {
    require __DIR__ . '/functions.php';
}
