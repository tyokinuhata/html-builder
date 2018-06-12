<?php

class HtmlBuilder
{
    private $element;
    private $pointer;

    public function __construct()
    {
        $this->element = [];
        $this->pointer = 0;
    }

    private function arrayElementInsert($beginElement, $endElement = null)
    {
        array_splice($this->element, $this->pointer, 0, '<' . $beginElement . '>');
        $this->pointer++;
        array_splice($this->element, $this->pointer, 0, '</' . (is_null($endElement) ? $beginElement : $endElement) . '>');
        return $this;
    }

    private function arrayTextNodeInsert($text)
    {
        array_splice($this->element, $this->pointer, 0, $text);
        $this->pointer += 2;
        return $this;
    }

    public function out()
    {
        $this->pointer++;
        return $this;
    }

    public function text($text)
    {
        $this->arrayTextNodeInsert($text);
        return $this;
    }

    public function html()
    {
        $this->arrayElementInsert('html');
        return $this;
    }

    public function head()
    {
        $this->arrayElementInsert('head');
        return $this;
    }

    public function body()
    {
        $this->arrayElementInsert('body');
        return $this;
    }

    public function title()
    {
        $this->arrayElementInsert('title');
        return $this;
    }

    public function h1()
    {
        $this->arrayElementInsert('h1');
        return $this;
    }

    public function append()
    {
        var_dump($this->element);
//        echo implode('', $this->element);
    }
}