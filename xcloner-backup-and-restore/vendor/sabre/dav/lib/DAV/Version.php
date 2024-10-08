<?php

declare(strict_types=1);

namespace Sabre\DAV;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


/**
 * This class contains the SabreDAV version constants.
 *
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
class Version
{
    /**
     * Full version number.
     */
    public const VERSION = '4.4.0';
}
