<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use StringHelper;

class StringHelperTest extends TestCase
{
    private $stringHelper;

    protected function setUp(): void
    {
        $this->stringHelper = new StringHelper();
    }

    public function test_slugify_converteStringEmSlug()
    {
        $this->assertEquals('exemplo-de-slug', $this->stringHelper->slugify('Exemplo de Slug!'));
        $this->assertEquals('slug-com-caracteres-especiais', $this->stringHelper->slugify('Slug com caracteres especiais!'));
        $this->assertEquals('slug-simples', $this->stringHelper->slugify('Slug Simples'));
        $this->assertEquals('slug-com-espacos', $this->stringHelper->slugify('  Slug com espaços  '));
    }

    public function test_truncate_truncaStringDentroDoLimite()
    {
        $this->assertEquals('Texto curto', $this->stringHelper->truncate('Texto curto', 20));
        $this->assertEquals('Texto...', $this->stringHelper->truncate('Texto longo que será truncado', 10));
        $this->assertEquals('Apenas um...', $this->stringHelper->truncate('Apenas um teste de truncamento', 12));
        $this->assertEquals('Sem truncamento', $this->stringHelper->truncate('Sem truncamento', 50));
    }
}
