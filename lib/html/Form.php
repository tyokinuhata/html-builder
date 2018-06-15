<?php

namespace HtmlBuilder\Html;

/**
 * フォーム関連のトレイト
 * @package HtmlBuilder
 */
trait Form
{
    /**
     * form要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function form(...$options)
    {
        $this->insertElementsToBuffer('form', ...$options);
        return $this;
    }

    /**
     * label要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function label(...$options)
    {
        $this->insertElementsToBuffer('label', ...$options);
        return $this;
    }

    /**
     * input要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function input(...$options)
    {
        $this->insertElementToBuffer('input', ...$options);
        return $this;
    }

    /**
     * button要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function button(...$options)
    {
        $this->insertElementsToBuffer('button', ...$options);
        return $this;
    }

    /**
     * select要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function select(...$options)
    {
        $this->insertElementsToBuffer('select', ...$options);
        return $this;
    }

    /**
     * option要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function option(...$options)
    {
        $this->insertElementsToBuffer('option', ...$options);
        return $this;
    }

    /**
     * textarea要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function textarea(...$options)
    {
        $this->insertElementsToBuffer('textarea', ...$options);
        return $this;
    }
}