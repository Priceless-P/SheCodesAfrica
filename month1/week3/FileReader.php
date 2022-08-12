<?php

//namespace Week3\FileReader;

class FileReader
{
    public function readFile($filename)
    {
        if(!file_exists($filename))
        {
            throw new FileNotFoundException();
        }

        $content = file_get_contents($filename);

        $items = json_decode($content, true);

        return $items;

        if (!isset($items))
        {
            throw new BadJsonException();
        }
    }
}