<?php

namespace Kamva\SendinBlue\Test\Api\Campaign;

use Kamva\SendinBlue\Api\Campaign\UserApi;

class UserApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider userDataProvider
     * @param $data
     */
    public function testCreateOrUpdateUserHasValidResponse($data)
    {
        $campaignApi = new UserApi(getenv('SENDINBLUE_API_KEY'));
        $result = $campaignApi->createOrUpdate($data);

        $this->assertArrayHasKey('code', $result);
        $this->assertArrayHasKey('message', $result);
        $this->assertArrayHasKey('data', $result);
    }

    public function userDataProvider()
    {
        return [
            [
                [
                    'email'      => 'john.doe@gmail.com',
                    'attributes' => ['name' => 'John Doe', 'age' => 34],
                    'listid'     => [21]
                ]
            ],
            [
                [
                    'email'      => 'jane.doe@gmail.com',
                    'attributes' => ['name' => 'Jane Doe', 'age' => 21],
                    'listid'     => [21]
                ]
            ],
            [
                [
                    'email'      => 'jeffrey.doe@gmail.com',
                    'attributes' => ['name' => 'Jeffrey Doe', 'age' => 27],
                    'listid'     => [21]
                ]
            ]
        ];
    }

}
