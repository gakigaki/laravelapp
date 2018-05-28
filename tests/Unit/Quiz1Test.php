<?php

namespace Tests\Unit;

use Tests\TestCase;
use InvalidArgumentException;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Quiz\Quiz1;

class Quiz1Test extends TestCase
{
    /**
     * @dataProvider exceptionGetOddOrEvenProvider
     */
    public function testExceptionGetOddOrEven($a, $b)
    {
        $obj = new Quiz1();

        $this->expectException(InvalidArgumentException::class);
        $obj->getOddOrEven($a, $b);
    }

    public function exceptionGetOddOrEvenProvider()
    {
        return [
            ['abc', 1],
            [1, 'abc'],
            ['abc', 'def'],
        ];
    }

    public function testOdd()
    {
        $obj = new Quiz1();

        $this->assertEquals('Odd',  $obj->getOddOrEven(1, 5));
    }

    public function testEven()
    {
        $obj = new Quiz1();

        $this->assertEquals('Even',  $obj->getOddOrEven(2, 5));
    }



}
