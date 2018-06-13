<?php

namespace HtmlBuilder;

/**
 * コンテンツの埋め込み関連のトレイト
 * @package HtmlBuilder
 */
trait Embedded
{
    /**
     * img要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function img(...$options)
    {
        $this->arrayElementsInsert('img', ...$options);
        return $this;
    }

    /**
     * iframe要素を挿入します
     * @param array ...$options
     * @return $this
     */
    public function iframe(...$options)
    {
        $this->arrayElementsInsert('iframe', ...$options);
        return $this;
    }
}