<?php

namespace HtmlBuilder\Html;

/**
 * JavaScript関連のトレイト
 * @package HtmlBuilder
 */
trait Script
{
    /**
     * script要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function script(...$options)
    {
        $this->insertElementsToBuffer('script', ...$options);
        return $this;
    }
}