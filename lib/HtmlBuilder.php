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
     * @param array ...$options
     * @return $this
     */
    private function arrayElementsInsert($element, ...$options)
    {
        $option = '';
        for ($i = 0; $i < count($options); $i += 2) {
            $option .= ' ' . $options[$i] . '="' . $options[$i + 1] . '"';
        }
        array_splice($this->buffer, $this->pointer++, 0, '<' . $element . $option . '>');
        array_splice($this->buffer, $this->pointer, 0, '</' . $element . '>');
        return $this;
    }

    /**
     * バッファに閉じタグのない要素を挿入します
     * @param $element
     * @param array ...$options
     * @return $this
     */
    private function arrayElementInsert($element, ...$options)
    {
        $option = '';
        for ($i = 0; $i < count($options); $i += 2) {
            $option .= ' ' . $options[$i] . '="' . $options[$i + 1] . '"';
        }
        array_splice($this->buffer, $this->pointer++, 0, '<' . $element . $option . '>');
        return $this;
    }

    /**
     * バッファにテキストを挿入します
     * @param $text
     * @return $this
     */
    private function arrayTextNodeInsert($text)
    {
        array_splice($this->buffer, $this->pointer++, 0, $text);
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
//        var_dump($this->buffer);
        echo implode('', $this->buffer);
    }

    use Foundation;
    use Section;
    use Content;
}