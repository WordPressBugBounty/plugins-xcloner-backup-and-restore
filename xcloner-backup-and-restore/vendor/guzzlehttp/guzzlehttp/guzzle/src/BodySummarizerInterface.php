<?php

namespace GuzzleHttp;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
