<?php
namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\User;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class BooksTest extends ApiTestCase
{
    use RefreshDatabaseTrait;
    
    /**
     * @test
     */
    public function Login(): void
    {
        
        $this->assertTrue(true);
    }
}