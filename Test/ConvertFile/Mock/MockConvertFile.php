<?php
namespace Tcc\Test\ConvertFile\Mock;

use Tcc\ConvertFile\ConvertFileInterface;
use Iterator;

class MockConvertFile implements ConvertFileInterface
{
    protected $filename;
    protected $inputCharset;
    protected $outputCharset;
    protected $extension;
    protected $iterator;

    public function setIterator(Iterator $iterator)
    {
        $this->iterator = $iterator;
    }

    public function getIterator()
    {
        return $this->iterator;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setInputCharset($inputCharset)
    {
        $this->inputCharset = $inputCharset;
    }

    public function getInputCharset()
    {
        return $this->inputChaset;
    }

    public function setOutputCharset($outputCharset)
    {
        $this->outputCharset = $outputCharset;
    }

    public function getOutputCharset()
    {
        return $this->outputCharset;
    }

    public function getPathname()
    {

    }

    public function getPath()
    {
        
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
    }

    public function getExtension()
    {
        return $this->extension;
    }
}