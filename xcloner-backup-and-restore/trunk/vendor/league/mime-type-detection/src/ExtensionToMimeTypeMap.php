<?php

declare(strict_types=1);

namespace League\MimeTypeDetection;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


interface ExtensionToMimeTypeMap
{
    public function lookupMimeType(string $extension): ?string;
}
