<?php
namespace Kamva\SendinBlue\Api\Campaign;

use Kamva\SendinBlue\Api\BaseApi;

class UserApi extends BaseApi
{

    public function createOrUpdate(array $data)
    {
        return $this->parseResponse(
            $this->client->post('user/createdituser', array_merge(
                $this->getHeaders(),
                ['json' => $data]
            ))
        );
    }

}