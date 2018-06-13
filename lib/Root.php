<?php

namespace HtmlBuilder;

/**
 * 根本となる要素のトレイト
 * @package HtmlBuilder
 */
trait Root
{
    /**
     * html要素をバッファに渡します
     * @param array ...$options
     * @return $this
     */
    public function html(...$options)
    {
        $this->arrayElementsInsert('html', ...$options);
        return $this;
    }
}