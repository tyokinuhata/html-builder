<?php

namespace HtmlBuilder;

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
        $this->arrayElementsInsert('p', ...$options);
        return $this;
    }

    /**
     * hr要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function hr(...$options)
    {
        $this->arrayElementInsert('hr', ...$options);
        return $this;
    }

    /**
     * pre要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function pre(...$options)
    {
        $this->arrayElementsInsert('pre', ...$options);
        return $this;
    }

    /**
     * ol要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function ol(...$options)
    {
        $this->arrayElementsInsert('ol', ...$options);
        return $this;
    }

    /**
     * ul要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function ul(...$options)
    {
        $this->arrayElementsInsert('ul', ...$options);
        return $this;
    }

    /**
     * li要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function li(...$options)
    {
        $this->arrayElementsInsert('li', ...$options);
        return $this;
    }

    /**
     * dl要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function dl(...$options)
    {
        $this->arrayElementsInsert('dl', ...$options);
        return $this;
    }

    /**
     * dt要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function dt(...$options)
    {
        $this->arrayElementsInsert('dt', ...$options);
        return $this;
    }

    /**
     * dd要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function dd(...$options)
    {
        $this->arrayElementsInsert('dd', ...$options);
        return $this;
    }

    /**
     * div要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function div(...$options)
    {
        $this->arrayElementsInsert('div', ...$options);
        return $this;
    }

    /**
     * main要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function main(...$options)
    {
        $this->arrayElementsInsert('main', ...$options);
        return $this;
    }
}