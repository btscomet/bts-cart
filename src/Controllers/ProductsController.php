<?php

namespace Btscomet\BtsCart\Controllers;

use GuzzleHttp\Exception\GuzzleException;

class ProductsController extends BaseController
{

    protected mixed $totalProducts;
    protected int $totalCountProducts = 30;

    public function __construct(array $config = [])
    {
        $this->totalProducts = (isset($config['total_products'])) ? $config['total_products'] : $this->totalCountProducts;
        parent::__construct($config);
    }


    public function listProducts($productCategory = null)
    {
        return $this->config()->request('GET', '/products/list');
    }

    public function detailProduct($productCode = null)
    {
        return $this->config()->request('GET', '/products/detail');
    }

    public function stockProduct($productCode = null)
    {
        return $this->config()->request('GET', '/products/stock');
    }

}
