<?php
namespace Kamva\SendinBlue\Api;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

abstract class BaseApi
{

    const BASE_URL = 'https://api.sendinblue.com/v2.0/';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var Client
     */
    protected $client;

    /**
     * BaseApi constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'base_uri' => self::BASE_URL
        ]);
    }

    protected function parseResponse(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        return [
            'headers' => [
                'api-key'      => $this->apiKey,
                'Content-Type' => 'application/json'
            ]
        ];
    }

}