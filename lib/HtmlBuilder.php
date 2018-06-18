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
    private function insertElementsToBuffer($element, ...$options)
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
    private function insertElementToBuffer($element, ...$options)
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
    private function insertStylesToBuffer($element, ...$codes)
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
    private function insertTextToBuffer($text)
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
        if ($mode === 'dev')
        {
            var_dump($this->buffer);
        }
        else if ($mode === 'prod')
        {
            // TODO: 実装
        }
        else if ($mode === 'min')
        {
            echo implode('', $this->buffer);
        }
    }

    /**
     * 任意のパスに任意の名前のhtmlファイルを生成します
     * @param $path
     */
    public function build($path)
    {
        $fileName = $path . '.html';
        if (!file_exists($fileName))
        {
            touch($fileName);
        }
        file_put_contents($fileName, $this->buffer);
    }

    use Html\Root;
    use Html\Meta;
    use Html\Script;
    use Html\Section;
    use Html\Content;
    use Html\Text;
    use Html\Embedded;
    use Html\Table;
    use Html\Form;
}