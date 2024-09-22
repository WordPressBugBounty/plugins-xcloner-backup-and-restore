<?php

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }
?><?php

if (\PHP_VERSION_ID < 80000) {
    class ValueError extends Error
    {
    }
}
