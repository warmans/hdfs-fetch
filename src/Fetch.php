<?php
namespace Hf;

/**
 * @author warmans
 */
class Fetch
{
    private $reader;

    public function __construct(Reader\AbstractReader $reader)
    {
        $this->reader = $reader;
    }

    public function getReader()
    {
        return $this->reader;
    }

    public function fetchInto($file)
    {
        $outfile = fopen($file, 'w+');
        foreach ($this->reader as $row) {
            fwrite($outfile, $row);
        }
        fclose($outfile);
    }
}
