<?php

namespace GuzzleHttp\Psr7;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Psr\Http\Message\StreamInterface;

/**
 * Stream decorator that prevents a stream from being seeked.
 *
 * @final
 */
class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new \RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable()
    {
        return false;
    }
}
