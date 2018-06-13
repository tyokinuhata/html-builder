<?php

namespace HtmlBuilder;

trait Text
{
    /**
     * a要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function a(...$options)
    {
        $this->arrayElementsInsert('a', ...$options);
        return $this;
    }

    /**
     * strong要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function strong(...$options)
    {
        $this->arrayElementsInsert('strong', ...$options);
        return $this;
    }

    /**
     * sub要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function sub(...$options)
    {
        $this->arrayElementsInsert('sub', ...$options);
        return $this;
    }

    /**
     * sup要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function sup(...$options)
    {
        $this->arrayElementsInsert('sup', ...$options);
        return $this;
    }

    /**
     * i要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function i(...$options)
    {
        $this->arrayElementsInsert('i', ...$options);
        return $this;
    }

    /**
     * b要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function b(...$options)
    {
        $this->arrayElementsInsert('b', ...$options);
        return $this;
    }

    /**
     * span要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function span(...$options)
    {
        $this->arrayElementsInsert('span', ...$options);
        return $this;
    }

    /**
     * br要素を渡します
     * @return $this
     */
    public function br()
    {
        $this->arrayElementInsert('br');
        return $this;
    }

    /**
     * wbr要素を渡します
     * @return $this
     */
    public function wbr()
    {
        $this->arrayElementInsert('wbr');
        return $this;
    }

    /**
     * テキストを受け取り, 渡します
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->arrayTextNodeInsert($text);
        return $this;
    }
}