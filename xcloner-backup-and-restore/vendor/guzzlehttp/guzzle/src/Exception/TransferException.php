<?php

namespace GuzzleHttp\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


class TransferException extends \RuntimeException implements GuzzleException
{
}
