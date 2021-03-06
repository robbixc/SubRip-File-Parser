<?php

namespace SrtParser;

class srtManager
{
    /**
     * Load an instance of the srt file parser
     * @param string $filename location of the file you want to read
     * @param string $encoding custom encoding definition
     * @return \SrtParser\srtFile
     */
    public function load($filename, $encoding = '')
    {
        return new srtFile($filename, $encoding);
    }
}