<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * KeyExistsTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class KeyExistsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\KeyExists::keyExists()
     */
    public function keyExistsReturnsTrueIfKeyExists()
    {
        /** @var \Cocur\Chain\Link\KeyExists $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\KeyExists');
        $mock->array = ['foo' => 1, 'bar' => null];

        $this->assertTrue($mock->keyExists('foo'));
        $this->assertTrue($mock->keyExists('bar'));
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\KeyExists::keyExists()
     */
    public function keyExistsReturnsFalseIfKeyDoesNotExist()
    {
        /** @var \Cocur\Chain\Link\KeyExists $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\KeyExists');
        $mock->array = [];

        $this->assertFalse($mock->keyExists('invalid'));
    }
}
