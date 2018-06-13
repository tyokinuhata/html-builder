<?php

namespace HtmlBuilder;

/**
 * セクション関連のトレイト
 * @package HtmlBuilder
 */
trait Section
{
    /**
     * body要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function body(...$options)
    {
        $this->arrayElementsInsert('body', ...$options);
        return $this;
    }

    /**
     * section要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function section(...$options)
    {
        $this->arrayElementsInsert('section', ...$options);
        return $this;
    }

    /**
     * nav要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function nav(...$options)
    {
        $this->arrayElementsInsert('nav', ...$options);
        return $this;
    }

    /**
     * article要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function article(...$options)
    {
        $this->arrayElementsInsert('article', ...$options);
        return $this;
    }

    /**
     * aside要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function aside(...$options)
    {
        $this->arrayElementsInsert('aside', ...$options);
        return $this;
    }

    /**
     * h1要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function h1(...$options)
    {
        $this->arrayElementsInsert('h1', ...$options);
        return $this;
    }

    /**
     * h2要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function h2(...$options)
    {
        $this->arrayElementsInsert('h2', ...$options);
        return $this;
    }

    /**
     * h3要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function h3(...$options)
    {
        $this->arrayElementsInsert('h3', ...$options);
        return $this;
    }

    /**
     * h4要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function h4(...$options)
    {
        $this->arrayElementsInsert('h4', ...$options);
        return $this;
    }

    /**
     * h5要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function h5(...$options)
    {
        $this->arrayElementsInsert('h5', ...$options);
        return $this;
    }

    /**
     * h6要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function h6(...$options)
    {
        $this->arrayElementsInsert('h6', ...$options);
        return $this;
    }

    /**
     * header要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function header(...$options)
    {
        $this->arrayElementsInsert('header', ...$options);
        return $this;
    }

    /**
     * footer要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function footer(...$options)
    {
        $this->arrayElementsInsert('footer', ...$options);
        return $this;
    }
}