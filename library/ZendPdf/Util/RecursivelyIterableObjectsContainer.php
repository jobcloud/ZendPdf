<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Pdf
 */

namespace ZendPdf\Util;

/**
 * Iteratable objects container
 *
 * @package    Zend_PDF
 * @subpackage Zend_PDF_Util
 */
class RecursivelyIterableObjectsContainer implements \RecursiveIterator, \Countable
{
    protected $_objects = array();

    public function __construct(array $objects)
    {
        $this->_objects = $objects;
    }

    public function current(): mixed
    {
        return current($this->_objects);
    }

    public function key(): string|int|null
    {
        return key($this->_objects);
    }

    public function next(): mixed
    {
        return next($this->_objects);
    }

    public function rewind(): mixed
    {
        return reset($this->_objects);
    }

    public function valid(): bool
    {
        return current($this->_objects) !== false;
    }

    public function getChildren(): mixed
    {
        return current($this->_objects);
    }

    public function hasChildren(): bool
    {
        return count($this->_objects) > 0;
    }

    public function count(): int
    {
        return count($this->_objects);
    }
}
