<?php

namespace HtmlBuilder;

/**
 * 文書のメタデータ関連のトレイト
 * @package HtmlBuilder
 */
trait Meta
{
    /**
     * head要素をバッファに渡すメソッド
     * @return $this
     */
    public function head()
    {
        $this->insertElementsToBuffer('head');
        return $this;
    }

    /**
     * title要素をバッファに渡すメソッド
     * @return $this
     */
    public function title()
    {
        $this->insertElementsToBuffer('title');
        return $this;
    }

    /**
     * link要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function link(...$options)
    {
        $this->insertElementToBuffer('link', ...$options);
        return $this;
    }

    /**
     * meta要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function meta(...$options)
    {
        $this->insertElementToBuffer('meta', ...$options);
        return $this;
    }
}