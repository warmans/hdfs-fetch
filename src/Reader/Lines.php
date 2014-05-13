<?php
namespace Hf\Reader;

/**
 * Just read lines
 *
 * @author warmans
 */
class Lines extends AbstractReader
{
    private $cur;
    private $pos;

    public function rewind()
    {
        return rewind($this->handle);
    }

    public function current()
    {
        return $this->cur;
    }

    function key()
    {
        return $this->pos;
    }

    function next()
    {
        $this->pos++;
        $this->cur = fgets($this->handle);
    }

    function valid()
    {
        return feof($this->handle);
    }
}
