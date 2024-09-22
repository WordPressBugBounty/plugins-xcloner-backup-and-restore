<?php

namespace Srmklive\Dropbox;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


trait GetMimeType
{
    /**
     * {@inheritdoc}
     */
    public function getMimetype($path)
    {
        return ['mimetype' => \League\Flysystem\Util\MimeType::detectByFilename($path)];
    }
}
