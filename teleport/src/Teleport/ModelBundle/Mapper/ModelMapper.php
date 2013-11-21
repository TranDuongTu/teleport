<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 11:08 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;


/**
 * Wrapped iterator due to map iterator of array of data to document
 *
 * @author Fredy <tranduongtu92@gmail.com>
 */
abstract class ModelMapper implements IMapper {

    /**
     * @var \Iterator
     */
    protected $iterator;

    /**
     * Cache of mapped previous document
     *
     * @var mixed
     */
    protected $document = null;

    /**
     * Set iterator
     *
     * @param $iterator
     */
    public function setIterator($iterator) {
        $this->iterator = $iterator;
        $this->iterator->next();
    }

    /**
     * @see \Iterator:current
     */
    public function current() {
        if ($this->document === null) {
            $this->document = $this->map($this->iterator->current());
        }

        return $this->document;
    }

    /**
     * @see \Iterator:key
     */
    public function key() {
        if ($this->document === null) {
            $this->current();
        }

        return $this->document->getId();
    }

    /**
     * @see \Iterator:next
     */
    public function next() {
        $this->document = null;
        return $this->iterator->next();
    }

    /**
     * @see \Iterator:rewind
     */
    public function rewind() {
        $this->document = null;
        $this->iterator->rewind();
    }

    /**
     * @see \Iterator:valid
     */
    public function valid() {
        return $this->iterator->valid();
    }
}