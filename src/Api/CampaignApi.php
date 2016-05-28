<?php
namespace Kamva\SendinBlue\Api;

use Kamva\SendinBlue\Api\Campaign;

class CampaignApi extends BaseApi
{

    public function users()
    {
        return new Campaign\UserApi($this->apiKey);
    }

}