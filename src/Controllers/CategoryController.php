<?php

namespace Btscomet\BtsCart\Controllers;

class CategoryController extends BaseController
{

    protected mixed $categories;

    protected mixed $subcategories;

    public function __construct(array $config = [])
    {
        $this->categories    = (isset($config['categories'])) ? $config['categories'] : null;
        $this->subcategories = (isset($config['subcategories'])) ? $config['subcategories'] : null;
        parent::__construct($config);
    }

    public function listCategories()
    {
        return [];
    }

    public function listSubcategories($subcategory = null)
    {
        return [];
    }

}
