<?php

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }
?><?php

if (\PHP_VERSION_ID < 80000) {
    interface Stringable
    {
        /**
         * @return string
         */
        public function __toString();
    }
}
