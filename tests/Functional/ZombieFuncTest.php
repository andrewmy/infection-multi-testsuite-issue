<?php

declare(strict_types=1);

namespace Tests\Functional;

use App\Zombie;
use PHPUnit\Framework\TestCase;

final class ZombieFuncTest extends TestCase
{
    public function testSaysBrains(): void
    {
        $zombie = new Zombie();

        self::assertSame('Brains!', $zombie->say());
    }
}
