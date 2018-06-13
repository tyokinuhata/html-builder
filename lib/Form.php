<?php

namespace HtmlBuilder;

trait Form
{
    /**
     * form要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function form(...$options)
    {
        $this->arrayElementsInsert('form', ...$options);
        return $this;
    }

    /**
     * label要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function label(...$options)
    {
        $this->arrayElementsInsert('label', ...$options);
        return $this;
    }

    /**
     * input要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function input(...$options)
    {
        $this->arrayElementInsert('input', ...$options);
        return $this;
    }

    /**
     * button要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function button(...$options)
    {
        $this->arrayElementsInsert('button', ...$options);
        return $this;
    }

    /**
     * select要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function select(...$options)
    {
        $this->arrayElementsInsert('select', ...$options);
        return $this;
    }

    /**
     * option要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function option(...$options)
    {
        $this->arrayElementsInsert('option', ...$options);
        return $this;
    }

    /**
     * textarea要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function textarea(...$options)
    {
        $this->arrayElementsInsert('textarea', ...$options);
        return $this;
    }
}