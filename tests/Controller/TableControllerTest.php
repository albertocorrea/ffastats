<?php

/**
 * Created by PhpStorm.
 * User: albertor
 * Date: 28/01/2018
 * Time: 6:35 PM
 */
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testGetTableData()
    {
        $client = static::createClient();

        $client->request('GET', '/update/premier');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}