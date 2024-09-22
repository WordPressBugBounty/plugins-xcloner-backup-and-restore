<?php

namespace GuzzleHttp\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


class TooManyRedirectsException extends RequestException
{
}
