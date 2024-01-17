<?php

namespace Btscomet\BtsCart\Controllers;

require __DIR__.'/../../vendor/autoload.php';
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
