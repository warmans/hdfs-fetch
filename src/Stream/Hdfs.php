<?php
namespace Hf\Stream;

/**
 * Stream
 *
 * @author warmans
 */
class Hdfs implements StreamInterface
{
    protected $uri;
    protected $port;
    protected $path;
    protected $options;

    protected $handle;

    public function __construct($uri, $port, $path, $options=array('user.name'=>'hadoop'))
    {
        $this->uri = $uri;
        $this->port = $port;
        $this->path = $path;
        $this->options = $options;
    }

    public function createHandle()
    {
        return fopen("http://$this->uri:$this->port/webhdfs/v1/$this->path?".http_build_query(array_merge(array('op'=>'OPEN'), $this->options)), "r");
    }
}
