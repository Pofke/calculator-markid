<?php

// tests/Controller/MathControllerTest.php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MathControllerTest extends WebTestCase
{
    public function testAddition(): void
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/math/1/add/1');

        $this->assertResponseIsSuccessful();
        $this->assertJson(json_encode(['answer' => 2]));
    }
    public function testSubtraction(): void
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/math/10/sub/5');

        $this->assertResponseIsSuccessful();
        $this->assertJson(json_encode(['answer' => 5]));
    }
    public function testMultiplication(): void
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/math/2/mul/2');

        $this->assertResponseIsSuccessful();
        $this->assertJson(json_encode(['answer' => 4]));
    }
    public function testDivision(): void
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/math/2/div/2');

        $this->assertResponseIsSuccessful();
        $this->assertJson(json_encode(['answer' => 1]));
    }
    public function testDivisionByZero(): void
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/math/2/div/0');

        $this->assertResponseIsSuccessful();
        $this->assertJson(json_encode(['answer' => "You will implode the universe if you divide by 0! STOOOOP"]));
    }
    public function testBanana(): void
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/math/2/banana/5');

        $this->assertResponseStatusCodeSame(404);
    }

}