<?php

namespace HtmlBuilder\Html;

/**
 * セクション関連のトレイト
 * @package HtmlBuilder
 */
trait Section
{
    /**
     * body要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function body(...$options)
    {
        $this->insertElementsToBuffer('body', ...$options);
        return $this;
    }

    /**
     * section要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function section(...$options)
    {
        $this->insertElementsToBuffer('section', ...$options);
        return $this;
    }

    /**
     * nav要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function nav(...$options)
    {
        $this->insertElementsToBuffer('nav', ...$options);
        return $this;
    }

    /**
     * article要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function article(...$options)
    {
        $this->insertElementsToBuffer('article', ...$options);
        return $this;
    }

    /**
     * aside要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function aside(...$options)
    {
        $this->insertElementsToBuffer('aside', ...$options);
        return $this;
    }

    /**
     * h1要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function h1(...$options)
    {
        $this->insertElementsToBuffer('h1', ...$options);
        return $this;
    }

    /**
     * h2要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function h2(...$options)
    {
        $this->insertElementsToBuffer('h2', ...$options);
        return $this;
    }

    /**
     * h3要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function h3(...$options)
    {
        $this->insertElementsToBuffer('h3', ...$options);
        return $this;
    }

    /**
     * h4要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function h4(...$options)
    {
        $this->insertElementsToBuffer('h4', ...$options);
        return $this;
    }

    /**
     * h5要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function h5(...$options)
    {
        $this->insertElementsToBuffer('h5', ...$options);
        return $this;
    }

    /**
     * h6要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function h6(...$options)
    {
        $this->insertElementsToBuffer('h6', ...$options);
        return $this;
    }

    /**
     * header要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function header(...$options)
    {
        $this->insertElementsToBuffer('header', ...$options);
        return $this;
    }

    /**
     * footer要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function footer(...$options)
    {
        $this->insertElementsToBuffer('footer', ...$options);
        return $this;
    }
}