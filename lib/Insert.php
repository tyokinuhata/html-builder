<?php

namespace HtmlBuilder;

/**
 * バッファへの挿入関連のトレイト
 * @package HtmlBuilder
 */
trait Insert
{
    /**
     * バッファに閉じタグのある要素を挿入します
     * @param $element
     * @param array ...$options
     * @return $this
     */
    protected function insertElementsToBuffer($element, ...$options)
    {
        $option = '';
        for ($i = 0; $i < count($options); $i++)
        {
            if (substr($options[$i], 0, 1) === '@')
            {
                $option .= ' ' . $options[$i];
            }
            else
            {
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
    protected function insertElementToBuffer($element, ...$options)
    {
        $option = '';
        for ($i = 0; $i < count($options); $i++)
        {
            if (substr($options[$i], 0, 1) === '@')
            {
                $option .= ' ' . substr($options[$i], 1);
            }
            else
            {
                $option .= ' ' . $options[$i] . '="' . $options[++$i] . '"';
            }
        }
        array_splice($this->buffer, $this->pointer++, 0, '<' . $element . $option . '>');
        return $this;
    }

    /**
     * バッファにスタイルを挿入します
     * @param $element
     * @param array ...$codes
     * @return $this
     */
    protected function insertStylesToBuffer($element, ...$codes)
    {
        $codes = $codes[0];
        $fmtCode = '';
        foreach ($codes as $selector => $code)
        {
            $fmtCode .= $selector . '{';
            foreach ($code as $property => $value)
            {
                $fmtCode .= $property . ':' . $value . ';';
            }
            $fmtCode .= '}';
        }
        array_splice($this->buffer, $this->pointer++, 0, '<' . $element . '>');
        array_splice($this->buffer, $this->pointer++, 0, $fmtCode);
        array_splice($this->buffer, $this->pointer++, 0, '</' . $element . '>');
        return $this;
    }

    /**
     * バッファにテキストを挿入します
     * @param $text
     * @return $this
     */
    protected function insertTextToBuffer($text)
    {
        array_splice($this->buffer, $this->pointer++, 0, $text);
        return $this;
    }
}