<?php

namespace HtmlBuilder\Html;

/**
 * コンテンツの分類関連のトレイト
 * @package HtmlBuilder
 */
trait Content
{
    /**
     * p要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function p(...$options)
    {
        $this->insertElementsToBuffer('p', ...$options);
        return $this;
    }

    /**
     * hr要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function hr(...$options)
    {
        $this->insertElementToBuffer('hr', ...$options);
        return $this;
    }

    /**
     * pre要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function pre(...$options)
    {
        $this->insertElementsToBuffer('pre', ...$options);
        return $this;
    }

    /**
     * ol要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function ol(...$options)
    {
        $this->insertElementsToBuffer('ol', ...$options);
        return $this;
    }

    /**
     * ul要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function ul(...$options)
    {
        $this->insertElementsToBuffer('ul', ...$options);
        return $this;
    }

    /**
     * li要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function li(...$options)
    {
        $this->insertElementsToBuffer('li', ...$options);
        return $this;
    }

    /**
     * dl要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function dl(...$options)
    {
        $this->insertElementsToBuffer('dl', ...$options);
        return $this;
    }

    /**
     * dt要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function dt(...$options)
    {
        $this->insertElementsToBuffer('dt', ...$options);
        return $this;
    }

    /**
     * dd要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function dd(...$options)
    {
        $this->insertElementsToBuffer('dd', ...$options);
        return $this;
    }

    /**
     * div要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function div(...$options)
    {
        $this->insertElementsToBuffer('div', ...$options);
        return $this;
    }

    /**
     * main要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function main(...$options)
    {
        $this->insertElementsToBuffer('main', ...$options);
        return $this;
    }
}