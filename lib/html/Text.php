<?php

namespace HtmlBuilder\Html;

/**
 * テキスト関連のトレイト
 * @package HtmlBuilder
 */
trait Text
{
    /**
     * a要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function a(...$options)
    {
        $this->insertElementsToBuffer('a', ...$options);
        return $this;
    }

    /**
     * strong要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function strong(...$options)
    {
        $this->insertElementsToBuffer('strong', ...$options);
        return $this;
    }

    /**
     * sub要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function sub(...$options)
    {
        $this->insertElementsToBuffer('sub', ...$options);
        return $this;
    }

    /**
     * sup要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function sup(...$options)
    {
        $this->insertElementsToBuffer('sup', ...$options);
        return $this;
    }

    /**
     * i要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function i(...$options)
    {
        $this->insertElementsToBuffer('i', ...$options);
        return $this;
    }

    /**
     * b要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function b(...$options)
    {
        $this->insertElementsToBuffer('b', ...$options);
        return $this;
    }

    /**
     * span要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function span(...$options)
    {
        $this->insertElementsToBuffer('span', ...$options);
        return $this;
    }

    /**
     * br要素をバッファに渡すメソッド
     * @return $this
     */
    public function br()
    {
        $this->insertElementToBuffer('br');
        return $this;
    }

    /**
     * wbr要素をバッファに渡すメソッド
     * @return $this
     */
    public function wbr()
    {
        $this->insertElementToBuffer('wbr');
        return $this;
    }

    /**
     * テキストを受け取り, バッファに渡すメソッド
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->insertTextToBuffer($text);
        return $this;
    }
}