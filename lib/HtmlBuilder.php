<?php

namespace HtmlBuilder;

class HtmlBuilder
{
    private $element;
    private $pointer;

    public function __construct()
    {
        $this->element = [];
        $this->pointer = 0;
    }

    /**
     * 配列に対して要素を挿入します
     * @param $beginElement
     * @param null $endElement
     * @return $this
     */
    private function arrayElementInsert($beginElement, $endElement = null)
    {
        array_splice($this->element, $this->pointer++, 0, '<' . $beginElement . '>');
        array_splice($this->element, $this->pointer, 0, '</' . (is_null($endElement) ? $beginElement : $endElement) . '>');
        return $this;
    }

    /**
     * 配列に対してテキストを挿入します
     * @param $text
     * @return $this
     */
    private function arrayTextNodeInsert($text)
    {
        array_splice($this->element, $this->pointer, 0, $text);
        $this->pointer += 2;
        return $this;
    }

    /**
     * テキストを受け取り, 渡します
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->arrayTextNodeInsert($text);
        return $this;
    }

    /**
     * html要素を渡します
     * @return $this
     */
    public function html()
    {
        $this->arrayElementInsert('html');
        return $this;
    }

    /**
     * head要素を渡します
     * @return $this
     */
    public function head()
    {
        $this->arrayElementInsert('head');
        return $this;
    }

    /**
     * body要素を渡します
     * @return $this
     */
    public function body()
    {
        $this->arrayElementInsert('body');
        return $this;
    }

    /**
     * title要素を渡します
     * @return $this
     */
    public function title()
    {
        $this->arrayElementInsert('title');
        return $this;
    }

    /**
     * h1要素を渡します
     * @return $this
     */
    public function h1()
    {
        $this->arrayElementInsert('h1');
        return $this;
    }

    /**
     * ポインタをn階層上へ戻します
     * @param int $depth
     * @return $this
     */
    public function out($depth = 1)
    {
        $this->pointer += $depth;
        return $this;
    }

    /**
     * 出力します
     */
    public function append()
    {
        var_dump($this->element);
//        echo implode('', $this->element);
    }
}