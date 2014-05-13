<?php
namespace Hf\Reader;

/**
 * @author warmans
 */
abstract class AbstractReader implements \Iterator
{
    protected $handle;

    public function __construct(\Hf\Stream\StreamInterface $stream)
    {
        $this->handle = $stream->createHandle();
    }
}
