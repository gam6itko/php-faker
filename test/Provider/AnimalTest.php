<?php

declare(strict_types=1);

namespace Faker\Test\Provider;

use Faker\Provider\Animal;
use Faker\Test\TestCase;

/**
 * @coversDefaultClass \Faker\Provider\Animal
 */
final class AnimalTest extends TestCase
{
    public function testAnimal(): void
    {
        self::assertSame('frog', $this->faker->animal());
    }

    public function testAdjectiveAnimal(): void
    {
        self::assertSame('beautiful pufferfish', $this->faker->adjectiveAnimal());
    }

    protected function getProviders(): iterable
    {
        yield new Animal($this->faker);
    }
}
