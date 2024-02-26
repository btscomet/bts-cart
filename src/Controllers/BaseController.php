<?php

namespace Btscomet\BtsCart\Controllers;

require __DIR__.'/../../vendor/autoload.php';

use GuzzleHttp\Client;

class BaseController
{

    protected mixed $clientId;
    protected mixed $clientToken;
    protected string $endpointUrl = "";
    protected $client;

    public function __construct(array $config = [])
    {
        $this->clientId     = (isset($config['client_id'])) ? $config['client_id'] : null;
        $this->clientToken  = (isset($config['client_token'])) ? $config['client_token'] : null;
    }

    public function config(): Client
    {
        return $this->client = new Client([
            'base_uri' => $this->endpointUrl,
            'headers' => 'Bearer: '. base64_encode($this->clientId.':'.$this->clientToken)
        ]);
    }

}
