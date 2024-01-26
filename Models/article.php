<?php

/**
 * prima classe per gli articoli
 */

class Article {
    public $articleId;
    public $type;
    public $productId;
    public $categoryId;

/**
 * ho inserito il construct
 */

    public function __construct($articleId, $type, $productId, $categoryId) {
        $this->articleId = $articleId;
        $this->type = $type;
        $this->productId = $productId;
        $this->categoryId = $categoryId;
    }

}