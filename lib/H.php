<?php

namespace HtmlBuilder;

trait H
{
    /**
     * h1要素を渡します
     * @return $this
     */
    public function h1()
    {
        $this->arrayElementInsert('h1');
        return $this;
    }
}