<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShapeControllerTest extends WebTestCase
{

    public function testTriangle(): void
    {
        $client = static::createClient();
        $client->request('GET', '/triangle/3/4/5');

        $response = $client->getResponse();
        $responseContent = json_decode($response->getContent(), true);

        $this->assertResponseIsSuccessful();
        $this->assertSame('application/json', $response->headers->get('Content-Type'));

        $this->assertArrayHasKey('a', $responseContent, 'Missing a parameter in response');
        $this->assertArrayHasKey('b', $responseContent, 'Missing b parameter in response');
        $this->assertArrayHasKey('c', $responseContent, 'Missing c parameter in response');
        $this->assertArrayHasKey('type', $responseContent, 'Missing type parameter in response');
        $this->assertArrayHasKey('surface', $responseContent, 'Missing surface parameter in response');
        $this->assertArrayHasKey('circumference', $responseContent, 'Missing circumference parameter in response');

        $this->assertContains(12, $responseContent, 'Wrong circumference');
        $this->assertContains(6, $responseContent, 'Wrong surface');
        $this->assertEquals('triangle', $responseContent['type']);

    }

    public function testCircle(): void
    {
        $client = static::createClient();
        $client->request('GET', '/circle/3');

        $response = $client->getResponse();
        $responseContent = json_decode($response->getContent(), true);

        $this->assertResponseIsSuccessful();
        $this->assertSame('application/json', $response->headers->get('Content-Type'));

        $this->assertArrayHasKey('radius', $responseContent, 'Missing radius parameter in response');
        $this->assertArrayHasKey('type', $responseContent, 'Missing type parameter in response');
        $this->assertArrayHasKey('surface', $responseContent, 'Missing surface parameter in response');
        $this->assertArrayHasKey('circumference', $responseContent, 'Missing circumference parameter in response');


        $this->assertEquals(18.849555921539, $responseContent['circumference'], 'Wrong circumference');
        $this->assertEquals(28.274333882308, $responseContent['surface'], 'Wrong surface');
        $this->assertEquals('circle', $responseContent['type']);

    }
}
