<?php

/**
 * inserisco la prima classe per le categorie
 */

class Category {
    public $categoryId;
    public $name;

/**
 * inserisco la function per constuct
 */

    public function __construct($categoryId, $name) {
        $this->categoryId = $categoryId;
        $this->name = $name;
    }

}