<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 20:33
 */
class ProductController implements IController
{
    private $productSlug;
    private $categorySlug;

    private function __construct($categorySlug,$productSlug)
    {
        $this->categorySlug = $categorySlug;
        $this->productSlug = $productSlug;
    }

    public function response()
    {
        echo "class ProductController $this->categorySlug, $this->productSlug";
    }

}
