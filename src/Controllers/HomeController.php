<?php

namespace Btscomet\BtsCart\Controllers;

class HomeController
{


    public function category()
    {

        $checkoutController = new CheckoutController();
        $data = [
            'products' => [
                0 => [
                    'product_code' => 'prod_4b8108b34aa5fc3f4270433e45aa4599',
                    'amount' => 2
                ],
                1 => [
                    'product_code' => 'prod_5581df0962f39f0b260ae6d062c9c950',
                    'amount' => 4
                ],
                2 => [
                    'product_code' => 'prod_45f2fe1a9ff1512380b0ecc4c056a6be',
                    'amount' => 1
                ],
            ]
        ];
        $checkoutController->sendCheckoutCart('pay_99baee504a1fe91a07b', $data);

    }


}
