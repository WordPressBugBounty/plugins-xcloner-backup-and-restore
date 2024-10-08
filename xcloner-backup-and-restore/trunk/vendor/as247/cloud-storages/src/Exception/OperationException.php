<?php


namespace As247\CloudStorages\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use RuntimeException;
use Throwable;

abstract class OperationException extends RuntimeException implements FilesystemOperationFailed
{
	public static $lastException=null;
	public function __construct($message = "", $code = 0, Throwable $previous = null)
	{
		parent::__construct($message, $code, $previous);
		static::$lastException=$this;
	}
}
