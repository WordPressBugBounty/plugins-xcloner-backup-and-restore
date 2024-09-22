<?php

namespace GuzzleHttp\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Psr\Http\Client\ClientExceptionInterface;

interface GuzzleException extends ClientExceptionInterface
{
}
