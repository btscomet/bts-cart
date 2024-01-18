<?php

namespace Btscomet\BtsCart\Controllers;

class CheckoutController extends BaseController
{

    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function sendCheckoutCart($paymentMethod = null, $data = [])
    {
        // ['product_code' => , 'amount' => '']
        return $this->config()->request('POST', '/checkout/send', [
            'form_params' => [
                'products' => $data
            ]
        ]);
    }

}
