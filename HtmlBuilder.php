<?php

class HtmlBuilder
{
    private $element = '';

    public function h1($text = '')
    {
        $this->element .= '<h1>' . $text . '</h1>';
        return $this;
    }

    public function append()
    {
        echo $this->element;
    }
}