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

    /**
     * hr要素を渡します
     * @return $this
     */
    public function hr()
    {
        $this->arrayElementInsert('hr');
        return $this;
    }

    /**
     * pre要素を渡します
     * @return $this
     */
    public function pre()
    {
        $this->arrayElementsInsert('pre');
        return $this;
    }

    /**
     * ol要素を渡します
     * @return $this
     */
    public function ol()
    {
        $this->arrayElementsInsert('ol');
        return $this;
    }

    /**
     * ul要素を渡します
     * @return $this
     */
    public function ul()
    {
        $this->arrayElementsInsert('ul');
        return $this;
    }

    /**
     * li要素を渡します
     * @return $this
     */
    public function li()
    {
        $this->arrayElementsInsert('li');
        return $this;
    }

    /**
     * dl要素を渡します
     * @return $this
     */
    public function dl()
    {
        $this->arrayElementsInsert('dl');
        return $this;
    }

    /**
     * dt要素を渡します
     * @return $this
     */
    public function dt()
    {
        $this->arrayElementsInsert('dt');
        return $this;
    }

    /**
     * dd要素を渡します
     * @return $this
     */
    public function dd()
    {
        $this->arrayElementsInsert('dd');
        return $this;
    }

    /**
     * div要素を渡します
     * @return $this
     */
    public function div()
    {
        $this->arrayElementsInsert('div');
        return $this;
    }

    /**
     * main要素を渡します
     * @return $this
     */
    public function main()
    {
        $this->arrayElementsInsert('main');
        return $this;
    }
}