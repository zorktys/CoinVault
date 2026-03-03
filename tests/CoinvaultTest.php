<?php
/**
 * Tests for CoinVault
 */

use PHPUnit\Framework\TestCase;
use Coinvault\Coinvault;

class CoinvaultTest extends TestCase {
    private Coinvault $instance;

    protected function setUp(): void {
        $this->instance = new Coinvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
