<?php


namespace As247\CloudStorages\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }



interface FilesystemOperationFailed extends FilesystemException
{
	public const OPERATION_WRITE = 'WRITE';
	public const OPERATION_UPDATE = 'UPDATE';
	public const OPERATION_CREATE_DIRECTORY = 'CREATE_DIRECTORY';
	public const OPERATION_DELETE = 'DELETE';
	public const OPERATION_DELETE_DIRECTORY = 'DELETE_DIRECTORY';
	public const OPERATION_MOVE = 'MOVE';
	public const OPERATION_RETRIEVE_METADATA = 'RETRIEVE_METADATA';
	public const OPERATION_COPY = 'COPY';
	public const OPERATION_READ = 'READ';
	public const OPERATION_SET_VISIBILITY = 'SET_VISIBILITY';

	public function operation(): string;
}
