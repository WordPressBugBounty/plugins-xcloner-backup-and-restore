<?php

declare(strict_types=1);

namespace Sabre\Xml;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use LibXMLError;
use Throwable;

/**
 * This exception is thrown when the Reader runs into a parsing error.
 *
 * This exception effectively wraps 1 or more LibXMLError objects.
 *
 * @copyright Copyright (C) 2009-2015 fruux GmbH (https://fruux.com/).
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
class LibXMLException extends ParseException
{
    /**
     * The error list.
     *
     * @var \LibXMLError[]
     */
    protected $errors;

    /**
     * Creates the exception.
     *
     * You should pass a list of LibXMLError objects in its constructor.
     *
     * @param LibXMLError[] $errors
     * @param Throwable     $previousException
     */
    public function __construct(array $errors, int $code = 0, Throwable $previousException = null)
    {
        $this->errors = $errors;
        parent::__construct($errors[0]->message.' on line '.$errors[0]->line.', column '.$errors[0]->column, $code, $previousException);
    }

    /**
     * Returns the LibXML errors.
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}