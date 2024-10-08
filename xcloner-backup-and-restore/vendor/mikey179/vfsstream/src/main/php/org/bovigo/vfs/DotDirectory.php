<?php
/**
 * This file is part of vfsStream.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package  org\bovigo\vfs
 */
namespace org\bovigo\vfs;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
 * Directory container.
 */
class DotDirectory extends vfsStreamDirectory
{
    /**
     * returns iterator for the children
     *
     * @return  vfsStreamContainerIterator
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new \ArrayIterator(array());
    }

    /**
     * checks whether dir is a dot dir
     *
     * @return  bool
     */
    public function isDot()
    {
        return true;
    }
}
