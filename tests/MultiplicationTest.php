<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../multiplication.php';

class MultiplicationTest extends TestCase {
    public function testMultiplication() {
        $this->assertEquals(6, multiplication(2, 3));
        $this->assertEquals(-5, multiplication(-1, 5));
        $this->assertEquals(0, multiplication(0, 10));
        $this->assertNotEquals(2, multiplication(0, 5));
    }
}
