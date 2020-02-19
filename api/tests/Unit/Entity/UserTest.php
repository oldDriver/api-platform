<?php
namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\User;
use Symfony\Component\VarDumper\VarDumper;

class UserTest extends TestCase
{
    /**
     * @test
     * @group Entity
     */
    public function UserAttributes()
    {
        $this->assertClassHasAttribute('id', User::class);
        $this->assertClassHasAttribute('email', User::class);
        $this->assertClassHasAttribute('password', User::class);
        $this->assertClassHasAttribute('roles', User::class);
    }

    /**
     * @test
     * @group Entity
     * @depends UserAttributes
     */
    public function UserDefault()
    {
        $entity = new User();
        $this->assertEmpty($entity->getId());
        $this->assertEmpty($entity->getEmail());
        $this->assertEmpty($entity->getPassword());
        $roles = $entity->getRoles();
        $this->assertIsArray($roles);
        $this->assertEquals([User::ROLE_USER], $roles);
    }
}