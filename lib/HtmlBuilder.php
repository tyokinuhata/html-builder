<?php

namespace HtmlBuilder;

class HtmlBuilder
{
    private $buffer;
    private $pointer;

    public function __construct()
    {
        $this->buffer = [ '<!DOCTYPE html>' ];
        $this->pointer = 1;
    }

    /**
     * バッファに閉じタグのある要素を挿入します
     * @param $element
     * @param $attribute
     * @param $value
     * @return $this
     */
    private function arrayElementsInsert($element, $attribute = null, $value = null)
    {
        $beginElement = $element . (!is_null($attribute) ? ' ' . $attribute : '') . (!is_null($value) ? '="' . $value . '"' : '');
        array_splice($this->buffer, $this->pointer++, 0, '<' . $beginElement . '>');
        array_splice($this->buffer, $this->pointer, 0, '</' . $element . '>');
        return $this;
    }

    /**
     * バッファに閉じタグのない要素を挿入します
     * @param $element
     * @param null $attribute
     * @param null $value
     * @return $this
     */
    private function arrayElementInsert($element, $attribute = null, $value = null)
    {
        $element .= (!is_null($attribute) ? ' ' . $attribute : '') . (!is_null($value) ? '="' . $value . '"' : '');
        array_splice($this->buffer, $this->pointer, 0, '<' . $element . '>');
        $this->pointer += 2;
        return $this;
    }

    /**
     * バッファにテキストを挿入します
     * @param $text
     * @return $this
     */
    private function arrayTextNodeInsert($text)
    {
        array_splice($this->buffer, $this->pointer, 0, $text);
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
        var_dump($this->buffer);
//        echo implode('', $this->element);
    }

    use Foundation;
    use H;
}