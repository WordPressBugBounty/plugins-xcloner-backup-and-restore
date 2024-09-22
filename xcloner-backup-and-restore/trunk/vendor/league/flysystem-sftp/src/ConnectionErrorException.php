<?php

namespace League\Flysystem\Sftp;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


class ConnectionErrorException extends \LogicException implements SftpAdapterException
{
}
