<?php

namespace Btscomet\BtsCart\Controllers;

class BaseController
{
    private $keyApi;

    private $endpointUrl = "https://api.btscomet.com";

    public function __construct($keyApi)
    {
        $this->keyApi = $keyApi;
    }

    /**
     * @return array
     */
    public function products()
    {
        return [];
    }

}
