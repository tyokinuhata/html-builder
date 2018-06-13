<?php

namespace HtmlBuilder;

trait Content
{
    /**
     * p要素を渡します
     * @return $this
     */
    public function p()
    {
        $this->arrayElementsInsert('p');
        return $this;
    }
}