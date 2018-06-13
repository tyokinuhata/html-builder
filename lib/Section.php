<?php

namespace HtmlBuilder;

trait Section
{
    /**
     * body要素を渡します
     * @return $this
     */
    public function body()
    {
        $this->arrayElementsInsert('body');
        return $this;
    }

    /**
     * section要素を渡します
     * @return $this
     */
    public function section()
    {
        $this->arrayElementsInsert('section');
        return $this;
    }

    /**
     * nav要素を渡します
     * @return $this
     */
    public function nav()
    {
        $this->arrayElementsInsert('nav');
        return $this;
    }

    /**
     * article要素を渡します
     * @return $this
     */
    public function article()
    {
        $this->arrayElementsInsert('article');
        return $this;
    }

    /**
     * aside要素を渡します
     * @return $this
     */
    public function aside()
    {
        $this->arrayElementsInsert('aside');
        return $this;
    }

    /**
     * h1要素を渡します
     * @return $this
     */
    public function h1()
    {
        $this->arrayElementsInsert('h1');
        return $this;
    }

    /**
     * h2要素を渡します
     * @return $this
     */
    public function h2()
    {
        $this->arrayElementsInsert('h2');
        return $this;
    }

    /**
     * h3要素を渡します
     * @return $this
     */
    public function h3()
    {
        $this->arrayElementsInsert('h3');
        return $this;
    }

    /**
     * h4要素を渡します
     * @return $this
     */
    public function h4()
    {
        $this->arrayElementsInsert('h4');
        return $this;
    }

    /**
     * h5要素を渡します
     * @return $this
     */
    public function h5()
    {
        $this->arrayElementsInsert('h5');
        return $this;
    }

    /**
     * h6要素を渡します
     * @return $this
     */
    public function h6()
    {
        $this->arrayElementsInsert('h6');
        return $this;
    }

    /**
     * header要素を渡します
     * @return $this
     */
    public function header()
    {
        $this->arrayElementsInsert('header');
        return $this;
    }

    /**
     * footer要素を渡します
     * @return $this
     */
    public function footer()
    {
        $this->arrayElementsInsert('footer');
        return $this;
    }
}