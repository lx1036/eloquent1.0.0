<?php

/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/26
 * Time: 上午12:35
 */
class CsvFileIterator implements Iterator
{
    protected $file;
    protected $current;
    protected $key = 0;

    public function __construct($file)
    {
        $this->file = fopen($file, 'r');
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    public function current()
    {
        return $this->current;
    }

    public function next()
    {
        $this->current = fgetcsv($this->file);
        $this->key++;
    }

    public function key()
    {
        $this->key;
    }

    public function valid()
    {
        return !feof($this->file);
    }

    public function rewind()
    {
        rewind($this->file);
        $this->current = fgetcsv($this->file);
        $this->key = 0;
    }

    public function isValid()
    {
        if($this->file){
            echo 'true:'.$this->file.PHP_EOL;exit;
        }
        echo 'false'.PHP_EOL;exit;
    }

}