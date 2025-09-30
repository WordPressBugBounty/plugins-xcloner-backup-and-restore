<?php

declare (strict_types=1);
namespace XCloner\Sabre\CardDAV;

if (!defined('ABSPATH') && \PHP_SAPI !== 'cli') {
    die;
}
use XCloner\Sabre\DAV;
/**
 * AddressBook interface.
 *
 * Implement this interface to allow a node to be recognized as an addressbook.
 *
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
interface IAddressBook extends DAV\ICollection
{
}
