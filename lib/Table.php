<?php

namespace HtmlBuilder;

trait Table
{
    /**
     * table要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function table(...$options)
    {
        $this->arrayElementsInsert('table', ...$options);
        return $this;
    }

    /**
     * caption要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function caption(...$options)
    {
        $this->arrayElementsInsert('caption', ...$options);
        return $this;
    }

    /**
     * col要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function col(...$options)
    {
        $this->arrayElementsInsert('col', ...$options);
        return $this;
    }

    /**
     * tbody要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function tbody(...$options)
    {
        $this->arrayElementsInsert('tbody', ...$options);
        return $this;
    }

    /**
     * thead要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function thead(...$options)
    {
        $this->arrayElementsInsert('thead', ...$options);
        return $this;
    }

    /**
     * tfoot要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function tfoot(...$options)
    {
        $this->arrayElementsInsert('tfoot', ...$options);
        return $this;
    }

    /**
     * tr要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function tr(...$options)
    {
        $this->arrayElementsInsert('tr', ...$options);
        return $this;
    }

    /**
     * td要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function td(...$options)
    {
        $this->arrayElementsInsert('td', ...$options);
        return $this;
    }

    /**
     * th要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function th(...$options)
    {
        $this->arrayElementsInsert('th', ...$options);
        return $this;
    }
}