<?php

namespace Laravel\Snoopy;

use Snoopy;

error_reporting(0);
header("Content-Type: text/html; charset=utf-8");
require_once(dirname(__FILE__) . '/../snoopy/' . 'Snoopy.class.php');

class SnoopyService
{
    protected $snoopy;

    public function __construct()
    {
        $this->snoopy = new Snoopy();
    }

    public function fetchText($url)
    {
        $this->snoopy->fetchtext($url);

        return $this->snoopy->results;
    }

    public function fetchLinks($url)
    {
        $this->snoopy->fetchtext($url);

        return $this->snoopy->results;
    }

    public function submit($url, $param)
    {
        $this->snoopy->submit($url, $param);

        return $this->snoopy->results;
    }

    public function fetch($url,$maxFrames = 5)
    {
        $this->snoopy->maxframes = $maxFrames;
        $this->snoopy->fetch($url);

        return $this->snoopy->results;
    }

    public function fetchForm($url)
    {
        $this->snoopy->fetchform($url);
        return $this->snoopy->results;
    }
}
