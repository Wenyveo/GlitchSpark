<?php
/**
 * Tests for GlitchSpark
 */

use PHPUnit\Framework\TestCase;
use Glitchspark\Glitchspark;

class GlitchsparkTest extends TestCase {
    private Glitchspark $instance;

    protected function setUp(): void {
        $this->instance = new Glitchspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Glitchspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
