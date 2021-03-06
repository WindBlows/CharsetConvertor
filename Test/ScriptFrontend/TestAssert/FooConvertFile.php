<?php
namespace Tcc\Test\ScriptFrontend\TestAssert;

use Tcc\ConvertFile\ConvertFile;

class FooConvertFile extends ConvertFile
{
	protected $convertError;
	protected $name;
	protected $extension;

	public function __construct($name = null,
		$inputCharset = null, $outputCharset = null
	) {
		$this->name          = $name;
		$this->inputCharset  = $inputCharset;
		$this->outputCharset = $outputCharset;
	}

	public function setConvertErrorFlag($flag)
	{
		$this->convertError = (bool) $flag;
	}

	public function getConvertErrorFlag()
	{
		return $this->convertError;
	}

	public function getFilename($withoutExtension = false)
	{
		return $this->name;
	}

	public function setExtension($extension)
	{
		$this->extension = $extension;
		return $this;
	}

	public function getExtension()
	{
		return $this->extension;
	}
}
