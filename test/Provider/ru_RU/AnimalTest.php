<?php

declare(strict_types=1);

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Animal;
use Faker\Test\TestCase;

final class AnimalTest extends TestCase
{
    public function testAnimal(): void
    {
        self::assertSame('лягушка', $this->faker->animal());
    }

    public function testAdjectiveAnimal(): void
    {
        self::assertSame('аппетитная селёдка', $this->faker->adjectiveAnimal());
    }

    protected function getProviders(): iterable
    {
        yield new Animal($this->faker);
    }
}
