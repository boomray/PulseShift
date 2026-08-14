<?php
/**
 * Tests for PulseShift
 */

use PHPUnit\Framework\TestCase;
use Pulseshift\Pulseshift;

class PulseshiftTest extends TestCase {
    private Pulseshift $instance;

    protected function setUp(): void {
        $this->instance = new Pulseshift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pulseshift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
