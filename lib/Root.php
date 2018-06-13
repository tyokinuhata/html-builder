<?php

namespace HtmlBuilder;

trait Root
{
    /**
     * html要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function html(...$options)
    {
        $this->arrayElementsInsert('html', ...$options);
        return $this;
    }
}