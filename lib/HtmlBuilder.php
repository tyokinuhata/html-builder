<?php

namespace HtmlBuilder;

class HtmlBuilder
{
    private $element;
    private $pointer;

    public function __construct()
    {
        $this->element = [ '<!DOCTYPE html>' ];
        $this->pointer = 1;
    }

    /**
     * 配列に対して閉じタグのある要素を挿入します
     * @param $element
     * @param $attribute
     * @param $value
     * @return $this
     */
    private function arrayElementsInsert($element, $attribute = null, $value = null)
    {
        $beginElement = $element . (!is_null($attribute) ? ' ' . $attribute : '') . (!is_null($value) ? '="' . $value . '"' : '');
        array_splice($this->element, $this->pointer++, 0, '<' . $beginElement . '>');
        array_splice($this->element, $this->pointer, 0, '</' . $element . '>');
        return $this;
    }

    /**
     * 配列に対して閉じタグのない要素を挿入します
     * @param $element
     * @param null $attribute
     * @param null $value
     * @return $this
     */
    private function arrayElementInsert($element, $attribute = null, $value = null)
    {
        $element .= (!is_null($attribute) ? ' ' . $attribute : '') . (!is_null($value) ? '="' . $value . '"' : '');
        array_splice($this->element, $this->pointer, 0, '<' . $element . '>');
        $this->pointer += 2;
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

    use Foundation;
    use H;
}