<?php

namespace ReregistrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ValidationControllerTest extends WebTestCase
{
    public function testValidate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'validate/{cne}');
    }

}
