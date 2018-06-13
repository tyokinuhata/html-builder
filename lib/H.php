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

    /**
     * h2要素を渡します
     * @return $this
     */
    public function h2()
    {
        $this->arrayElementInsert('h2');
        return $this;
    }

    /**
     * h3要素を渡します
     * @return $this
     */
    public function h3()
    {
        $this->arrayElementInsert('h3');
        return $this;
    }

    /**
     * h4要素を渡します
     * @return $this
     */
    public function h4()
    {
        $this->arrayElementInsert('h4');
        return $this;
    }

    /**
     * h5要素を渡します
     * @return $this
     */
    public function h5()
    {
        $this->arrayElementInsert('h5');
        return $this;
    }

    /**
     * h6要素を渡します
     * @return $this
     */
    public function h6()
    {
        $this->arrayElementInsert('h6');
        return $this;
    }
}