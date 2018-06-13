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
        $this->arrayElementsInsert('head');
        return $this;
    }

    /**
     * title要素をバッファに渡すメソッド
     * @return $this
     */
    public function title()
    {
        $this->arrayElementsInsert('title');
        return $this;
    }

    /**
     * meta要素をバッファに渡すメソッド
     * @param array ...$options
     * @return $this
     */
    public function meta(...$options)
    {
        $this->arrayElementInsert('meta', ...$options);
        return $this;
    }
}