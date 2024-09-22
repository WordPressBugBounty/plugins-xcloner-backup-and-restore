<?php

namespace League\Flysystem\Sftp;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


class InvalidRootException extends \RuntimeException implements SftpAdapterException
{
}
