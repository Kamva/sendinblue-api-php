<?php
namespace Kamva\SendinBlue;

use Kamva\SendinBlue\Api\CampaignApi;

class Client
{

    protected $apiKey;

    /**
     * Client constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->guzzle = new \GuzzleHttp\Client([
            'base_uri' => self::class
        ]);
    }

    public function campaigns()
    {
        return new CampaignApi($this->apiKey);
    }

}