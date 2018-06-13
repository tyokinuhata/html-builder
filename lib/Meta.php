<?php

namespace HtmlBuilder;

trait Meta
{
    /**
     * head要素を渡します
     * @return $this
     */
    public function head()
    {
        $this->arrayElementsInsert('head');
        return $this;
    }

    /**
     * title要素を渡します
     * @return $this
     */
    public function title()
    {
        $this->arrayElementsInsert('title');
        return $this;
    }

    /**
     * meta要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function meta(...$options)
    {
        $this->arrayElementInsert('meta', ...$options);
        return $this;
    }
}