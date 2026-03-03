<?php
/**
 * Tests for NFTVault
 */

use PHPUnit\Framework\TestCase;
use Nftvault\Nftvault;

class NftvaultTest extends TestCase {
    private Nftvault $instance;

    protected function setUp(): void {
        $this->instance = new Nftvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
