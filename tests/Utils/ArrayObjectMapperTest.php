<?php

namespace Necowebs\Destiny\Utils;

use Necowebs\Destiny\Models\DestinyPlayer;

/**
 * Class ArrayObjectMapperTest
 * @package Necowebs\Destiny\Utils
 */
class ArrayObjectMapperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Callable
     */
    public function testCallable()
    {
        $mapper = new ArrayObjectMapper('Necowebs\Destiny\Models\DestinyPlayer');
        $mapper->add('displayName', 'setDisplayName', function ($obj, $val) {
            return strtoupper($val);
        });
        $test = $mapper->map(['displayName' => 'Hochi_oD']);

        $expected = (new DestinyPlayer())->setDisplayName('HOCHI_OD');

        $this->assertEquals($expected, $test);
    }

    /**
     * Test Type
     */
    public function testType()
    {
        $mapper = new ArrayObjectMapper('Necowebs\Destiny\Models\DestinyPlayer');
        $mapper->add('displayName', 'setDisplayName', 'string');
        $test = $mapper->map(['displayName' => 'Hochi_oD']);

        $expected = (new DestinyPlayer())->setDisplayName('Hochi_oD');

        $this->assertEquals($expected, $test);
    }

    /**
     * Test Class
     */
    public function testClass()
    {
        $mapper = new ArrayObjectMapper('Necowebs\Destiny\Models\DestinyPlayer');
        $mapper->add('displayName', 'setDisplayName', 'Necowebs\Destiny\Utils\StringClass');
        $test = $mapper->map(['displayName' => 'Hochi_oD']);

        $expected = (new DestinyPlayer())->setDisplayName('Hochi_oD');

        $this->assertEquals($expected, $test);
    }

    /**
     * Test Invalid Class
     */
    public function testInvalidClass()
    {
        $this->expectException(\InvalidArgumentException::class);

        $test = (new ArrayObjectMapper('Fail'))->map([]);
    }
}

/**
 * Class StringClass
 * @package Necowebs\Destiny\Utils
 */
class StringClass
{
    /**
     * @var string
     */
    private $value;

    /**
     * StringClass constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
