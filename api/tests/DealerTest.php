<?php
namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Dealer;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class BooksTest extends ApiTestCase
{
    use RefreshDatabaseTrait;
    
    /**
     * @test
     */
    public function getDealers(): void
    {
//        $response = static::createClient()->request('GET', '/dealers');
        $this->assertTrue(true);
    }
}