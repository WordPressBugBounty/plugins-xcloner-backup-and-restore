<?php

namespace League\Flysystem;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


class Exception extends \Exception implements FilesystemException
{
    //
}
