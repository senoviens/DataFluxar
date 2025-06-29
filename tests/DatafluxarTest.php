<?php
/**
 * Tests for DataFluxar
 */

use PHPUnit\Framework\TestCase;
use Datafluxar\Datafluxar;

class DatafluxarTest extends TestCase {
    private Datafluxar $instance;

    protected function setUp(): void {
        $this->instance = new Datafluxar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Datafluxar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
