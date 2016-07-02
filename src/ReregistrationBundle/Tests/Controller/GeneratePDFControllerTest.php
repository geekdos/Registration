<?php

namespace ReregistrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GeneratePDFControllerTest extends WebTestCase
{
    public function testCreatepdf()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createPdf');
    }

}
