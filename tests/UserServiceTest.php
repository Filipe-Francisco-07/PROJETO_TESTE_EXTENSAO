<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use UserService;

class UserServiceTest extends TestCase
{
    private $userService;

    protected function setUp(): void
    {
        $this->userService = new UserService();
    }

    public function test_createUser_retornarUsuarioCriado()
    {
        $result = $this->userService->createUser("João", "joao@email.com");
        $this->assertIsArray($result);
        $this->assertArrayHasKey('id', $result);
        $this->assertArrayHasKey('name', $result);
        $this->assertArrayHasKey('email', $result);
        $this->assertEquals("João", $result['name']);
        $this->assertEquals("joao@email.com", $result['email']);
    }

    public function test_findUserById_retornarUsuarioPorId()
    {
        $result = $this->userService->findUserById(1);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('id', $result);
        $this->assertArrayHasKey('name', $result);
        $this->assertArrayHasKey('email', $result);
        $this->assertEquals(1, $result['id']);
        $this->assertEquals("Usuário Teste", $result['name']);
        $this->assertEquals("teste@email.com", $result['email']);
    }
}
