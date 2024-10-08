<?php


namespace As247\CloudStorages\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Throwable;
use As247\CloudStorages\Support\FileAttributes;

class UnableToRetrieveMetadata extends OperationException implements FilesystemOperationFailed
{
	/**
	 * @var string
	 */
	private $location;

	/**
	 * @var string
	 */
	private $metadataType;

	public static function lastModified(string $location, string $extraMessage = '', Throwable $previous = null): self
	{
		return static::create($location, FileAttributes::ATTRIBUTE_LAST_MODIFIED, $extraMessage, $previous);
	}

	public static function visibility(string $location, string $extraMessage = '', Throwable $previous = null): self
	{
		return static::create($location, FileAttributes::ATTRIBUTE_VISIBILITY, $extraMessage, $previous);
	}

	public static function fileSize(string $location, string $extraMessage = '', Throwable $previous = null): self
	{
		return static::create($location, FileAttributes::ATTRIBUTE_FILE_SIZE, $extraMessage, $previous);
	}

	public static function mimeType(string $location, string $extraMessage = '', Throwable $previous = null): self
	{
		return static::create($location, FileAttributes::ATTRIBUTE_MIME_TYPE, $extraMessage, $previous);
	}

	public static function create(string $location, string $type, string $extraMessage = '', Throwable $previous = null): self
	{
		if($previous){
			$extraMessage.=' '.$previous->getMessage();
		}
		$e = new static("Unable to retrieve the $type for file at location: $location. {$extraMessage}", 0, $previous);
		$e->location = $location;
		$e->metadataType = $type;

		return $e;
	}

	public function location(): string
	{
		return $this->location;
	}

	public function metadataType(): string
	{
		return $this->metadataType;
	}

	public function operation(): string
	{
		return FilesystemOperationFailed::OPERATION_RETRIEVE_METADATA;
	}
}
