<?php

namespace HtmlBuilder;

/**
 * テーブル関連のトレイト
 * @package HtmlBuilder
 */
trait Table
{
    /**
     * table要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function table(...$options)
    {
        $this->insertElementsToBuffer('table', ...$options);
        return $this;
    }

    /**
     * caption要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function caption(...$options)
    {
        $this->insertElementsToBuffer('caption', ...$options);
        return $this;
    }

    /**
     * col要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function col(...$options)
    {
        $this->insertElementsToBuffer('col', ...$options);
        return $this;
    }

    /**
     * tbody要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function tbody(...$options)
    {
        $this->insertElementsToBuffer('tbody', ...$options);
        return $this;
    }

    /**
     * thead要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function thead(...$options)
    {
        $this->insertElementsToBuffer('thead', ...$options);
        return $this;
    }

    /**
     * tfoot要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function tfoot(...$options)
    {
        $this->insertElementsToBuffer('tfoot', ...$options);
        return $this;
    }

    /**
     * tr要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function tr(...$options)
    {
        $this->insertElementsToBuffer('tr', ...$options);
        return $this;
    }

    /**
     * td要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function td(...$options)
    {
        $this->insertElementsToBuffer('td', ...$options);
        return $this;
    }

    /**
     * th要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function th(...$options)
    {
        $this->insertElementsToBuffer('th', ...$options);
        return $this;
    }
}