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
        for ($i = 0; $i < count($options); $i++) {
            if (substr($options[$i], 0, 1) === '@') {
                $option .= ' ' . $options[$i];
            } else {
                $option .= ' ' . $options[$i] . '="' . $options[++$i] . '"';
            }
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
    public function upstream($depth = 1)
    {
        $this->pointer += $depth;
        return $this;
    }

    /**
     * dev: 開発者モード
     * prod: プロダクトモード
     * min: プロダクトモード(ミニファイ)
     * で出力します
     * @param $mode
     */
    public function append($mode = 'min')
    {
        if ($mode === 'dev') {
            var_dump($this->buffer);
        } else if ($mode === 'prod') {
            // TODO: 実装
        } else if ($mode === 'min') {
            echo implode('', $this->buffer);
        }
    }

    use Root;
    use Meta;
    use Section;
    use Content;
    use Text;
    use Embedded;
    use Table;
    use Form;
}