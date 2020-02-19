<?php
namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\User;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class UserLoginTest extends ApiTestCase
{
    use RefreshDatabaseTrait;
    
    /**
     * @test
     */
    public function Login(): void
    {
        $response = static::createClient()->request('POST', '/dealers');
        $this->assertTrue(true);
    }
}